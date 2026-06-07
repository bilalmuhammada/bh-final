<?php

namespace App\Http\Controllers;

use App\Helpers\SiteHelper;
use App\Models\Chat;
use App\Models\Message;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    private $logged_in_user_id = 1;

    public function index(Request $request)
    {
        if ($request->i) {
            Chat::updateOrCreate(
                ['second_user_id' => $request->i],
                [
                    'first_user_id' => session()->get('user')['id'],
                    'status' => 'accepted',
                    'initiated_by' => session()->get('user')['id']
                ]
            );
        }

        $userId = \App\Helpers\SiteHelper::getLoginUserId();

        $chatsQuery = Chat::with(['latestMessage', 'ad', 'firstUser', 'secondUser'])
            ->withCount(['unreadMessages' => function ($query) use ($userId) {
                $query->where('sender_id', '!=', $userId);
            }])
            ->where(function ($query) use ($userId) {
                $query->where('first_user_id', $userId)
                    ->orWhere('second_user_id', $userId);
            });

        if ($request->user_id) {
            $chatsQuery->where('second_user_id', '=', $request->user_id);
        }

        if (session()->get('role') == 'vendor') {
            $chatsQuery->where('status', '=', 'accepted');
        } else {
            $chatsQuery->where('status', '!=', 'rejected');
        }

        $chats = $chatsQuery->orderBy('created_at', 'desc')->get();

        // Mark messages as delivered efficiently
        Message::whereIn('chat_id', $chats->pluck('id'))
            ->where('receiver_id', $userId)
            ->where('is_delivered', false)
            ->update(['is_delivered' => true]);

        // Only group messages for the ACTIVE chat
        $activeUserId = $request->i;
        foreach ($chats as $chat) {
            $otherUserId = ($chat->first_user_id == $userId) ? $chat->second_user_id : $chat->first_user_id;
            
            if ($activeUserId && $otherUserId == $activeUserId) {
                $groupedMessages = [];
                $chat->load(['messages' => function ($q) {
                    $q->orderBy('sended_at', 'asc');
                }]);
                
                foreach ($chat->messages as $message) {
                    $dateKey = Carbon::parse($message->sended_at)->format('d-m-Y');
                    $groupedMessages[$dateKey][] = $message;
                }
                ksort($groupedMessages);
                $chat->sorted_messages = $groupedMessages;
            } else {
                $chat->sorted_messages = [];
            }
        }

        return view('chats.list')->with([
            'chats' => $chats,
            'login_user_id' => $userId
        ]);
    }


    public function toggleFavorite(Request $request)
    {

        $chat = Chat::findOrFail($request->chat_id);
        $chat->is_favorite = !$chat->is_favorite;
        $chat->save();
        return response()->json(['is_favorite' => $chat->is_favorite]);
    }

    public function toggleBlock(Request $request)
    {
        $userId = SiteHelper::getLoginUserId();
        $chat = Chat::where('id', $request->chat_id)
            ->where(function ($query) use ($userId) {
                $query->where('first_user_id', $userId)
                    ->orWhere('second_user_id', $userId);
            })
            ->firstOrFail();

        $chat->is_blocked = !$chat->is_blocked;
        $chat->save();

        return response()->json([
            'status' => true,
            'is_blocked' => (bool) $chat->is_blocked
        ]);
    }
    public function getAcceptedUserForChat(Request $request)
    {
        $chats = Chat::with(['messages'])
            ->where('first_user_id', SiteHelper::getLoginUserId())
            ->where('status', '!=', 'rejected')
            ->orWhere('second_user_id', SiteHelper::getLoginUserId())
            ->get();

        return response()->json([
            'status' => true,
            'data' => $chats
        ]);
    }

    public function initiateChat(Request $request)
    {
        // dd($request->user_id);
        if (!empty($request->user_id)) {
            //check already chat initlized
            $ChatExist = Chat::where('second_user_id', $request->user_id)->where('ad_id', $request->user_ad)->where('first_user_id', SiteHelper::getLoginUserId())->first();

            
            if (empty($ChatExist)) {
                $Chat = Chat::create([
                    'status' => 'accepted',
                    'second_user_id' => $request->user_id,
                    'first_user_id' => SiteHelper::getLoginUserId(),
                    'initiated_by' => SiteHelper::getLoginUserId(),
                    'ad_id' => $request->user_ad
                ]);
            }

            $User = User::find(1);

            return response()->json([
                'status' => true,
                'message' => "Request send successfully"
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => "Empty"
        ]);
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'chat_id' => 'required|integer',
            'message' => 'required|string'
        ]);

        $chat_id = $request->chat_id;
        $sender_id = SiteHelper::getLoginUserId();
        $chat = Chat::where('id', $chat_id)
            ->where(function ($query) use ($sender_id) {
                $query->where('first_user_id', $sender_id)
                    ->orWhere('second_user_id', $sender_id);
            })
            ->firstOrFail();

        if ($chat->is_blocked) {
            return response()->json([
                'status' => false,
                'message' => 'Unblock this chat before sending a message.'
            ], 422);
        }

        $receiver_id = ($chat->first_user_id == $sender_id)
            ? $chat->second_user_id
            : $chat->first_user_id;

        if (empty($receiver_id)) {
            return response()->json([
                'status' => false,
                'message' => "Receiver not found. The other user may have been deleted."
            ], 422);
        }

        $Message = Message::create([
            'sender_id' => $sender_id,
            'receiver_id' => $receiver_id,
            'message' => $request->message,
            'chat_id' => $chat_id,
            'is_readed' => 0,
            'sended_at' => Carbon::now()
        ]);

        

        return response()->json([
            'status' => true,
            'message' => "Message Sent Successfully",
            'data' => $Message
        ]);
    }

    public function markMessagesAsRead(Request $request)
    {
        Message::where('chat_id', $request->id)->update([
            'is_readed' => 1,
            'readed_at' => Carbon::now()
        ]);

        return response()->json([
            'status' => true,
            'message' => "Done"
        ]);

    }

    public function getMessages($chat_id)
    {
        $userId = SiteHelper::getLoginUserId();
        $chat = Chat::with(['firstUser', 'secondUser'])
            ->where('id', $chat_id)
            ->where(function ($query) use ($userId) {
                $query->where('first_user_id', $userId)
                    ->orWhere('second_user_id', $userId);
            })
            ->firstOrFail();

        $messages = $chat->messages()
            ->orderBy('sended_at', 'asc')
            ->get();

        Message::where('chat_id', $chat->id)
            ->where('receiver_id', $userId)
            ->update([
                'is_delivered' => true,
                'is_readed' => true,
                'readed_at' => Carbon::now()
            ]);

        $chat->append('other_user');

        return response()->json([
            'status' => true,
            'chat' => $chat,
            'messages' => $messages
        ]);
    }

    public function getNewMessages(Request $request)
    {
        $userId = SiteHelper::getLoginUserId();
        $chats = Chat::with([
            'firstUser',
            'secondUser',
            'latestMessage',
            'messages' => function ($message) use ($userId) {
                $message->where('is_delivered', 0)->where('sender_id', '!=', $userId);
            }
        ])
            ->where(function ($query) use ($userId) {
                $query->where('first_user_id', $userId)
                    ->orWhere('second_user_id', $userId);
            })
            ->get();

        foreach ($chats as $chat) {
            $chat->append([
                'other_user',
                'latest_message',
                'latest_message_sender_id',
                'unread_count'
            ]);

            if ($chat->messages) {
                foreach ($chat->messages as $message) {
                    $message->update(['is_delivered' => true]);
                }
            }
        }

    
        return response()->json([
            'status' => true,
            'data' => $chats,
            'login_user_id' => $userId
        ]);
    }

    public function acceptOrRejectChat(Request $request)
    {
        $request->validate([
            'chat_id' => 'required',
            'status' => 'required'
        ]);

        Chat::where('id', $request->chat_id)->update(['status' => $request->status]);

        return response()->json([
            'status' => true,
            'message' => 'Chat has been ' . $request->status
        ]);
    }

    public function markMessagesAsReadAll()
    {
        Message::where('receiver_id', SiteHelper::getLoginUserId())->update([
            'is_readed' => 1,
            'readed_at' => Carbon::now()
        ]);

        return response()->json([
            'status' => true,
            'message' => "Done"
        ]);
    }
}
