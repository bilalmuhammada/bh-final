@extends('layout.master')
@php
$categories = \App\Helpers\RecordHelper::getCategories();

$catgories_for_search = $categories->random()->take(5)->get();
@endphp
<style>
    /* Design refinement - Higher Quality Gradients & Shadows */
    :root {
        --primary-color: #0686ee;
        --secondary-color: #6c757d;
        --success-color: #28a745;
        --danger-color: #dc3545;
        --warning-color: #ffc107;
        --glass-bg: rgba(255, 255, 255, 0.7);
        --glass-border: rgba(255, 255, 255, 0.2);
        --sidebar-bg: #f8f9fa;
        --active-chat-bg: #e7f3ff;
        --text-dark: #333;
        --text-muted: #6c757d;
        --radius-lg: 20px;
        --radius-md: 12px;
        --shadow-sm: 0 2px 10px rgba(0, 0, 0, 0.05);
        --shadow-md: 0 4px 20px rgba(0, 0, 0, 0.1);
        --primary-gradient: linear-gradient(135deg, #0686ee 0%, #0072ff 100%);
        --received-gradient: linear-gradient(135deg, #ffffff 0%, #f9f9f9 100%);
        --shadow-bubble-sent: 0 4px 15px rgba(6, 134, 238, 0.25);
        --shadow-bubble-received: 0 2px 10px rgba(0, 0, 0, 0.04);
    }

    /* Content Area */
    .content-chat {
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        min-height: calc(100vh - 80px) !important;
        padding: 20px 0;
    }

    /* Main Window - Fixed Height and Flex Layout */
    .chat-window {
        background: var(--glass-bg);
        backdrop-filter: blur(10px);
        border: 1px solid var(--glass-border);
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-md);
        display: flex;
        overflow: hidden;
        height: 750px;
        margin: 0 auto;
        max-width: 1400px;
        position: relative;
    }

    .chat-cont-right {
        flex: 1;
        display: flex;
        flex-direction: column;
        background: #fff;
        height: 100%;
        min-width: 0;
        position: relative;
    }

    /* Sidebar (Left) */
    .chat-cont-left {
        width: 380px;
        background: #fff;
        border-right: 1px solid #eee;
        display: flex;
        flex-direction: column;
    }

    .chat-header-sidebar {
        padding: 10px;
        border-bottom: 1px solid #eee;
    }

    .filter-section {
        padding: 0px 4px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: var(--sidebar-bg);
        border-bottom: 1px solid #eee;
    }

    .filter-section .check-all-wrapper {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .filter-section .form-check-input {
        position: relative !important;
        margin: 0 !important;
        cursor: pointer;
        width: 12px;
        height: 12px;
    }

    .search-box-container {
        padding: 0 10px 15px;
    }

    .premium-search {
        background: #f1f3f4;
        border: none;
        border-radius: 10px;
        padding: 10px 15px 10px 30px;
        font-size: 14px;
        width: 100%;
        transition: all 0.3s;
    }

    .premium-search:focus {
        background: #fff;
        box-shadow: 0 0 0 2px var(--primary-color);
        outline: none;
    }

    .premium-filter {
        background: #fff;
        border: 1px solid #eee;
        border-radius: 10px;
        padding: 8px 15px;
        font-size: 14px;
        color: var(--text-dark);
        outline: none;
        cursor: pointer;
        transition: all 0.3s;
        min-width: 140px;
    }

    .premium-filter:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 3px rgba(6, 134, 238, 0.2);
    }

    .search-icon-premium {
        position: absolute;
        left: 14px;
        top: 12px;
        color: #888;
    }

    /* User List */
    .chat-users-list {
        flex: 1;
        overflow-y: auto;
    }

    .chat-item-premium {
        display: flex;
        padding: 4px 24px;
        text-decoration: none !important;
        color: inherit !important;
        transition: all 0.2s;
        border-bottom: 1px solid #f8f9fa;
        position: relative;
    }

    .chat-item-premium:hover {
        background-color: #f8f9fa;
    }

    .chat-item-premium.active {
        background-color: var(--active-chat-bg);
    }

    .chat-item-premium.active::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 4px;

    }

    .user-avatar-wrapper {
        position: relative;
        margin-right: 15px;
    }

    .ad-thumbnail-sidebar {
        width: 55px;
        height: 55px;
        border-radius: 10px;
        object-fit: cover;
        box-shadow: var(--shadow-sm);
    }

    .user-small-avatar {
        position: absolute;
        bottom: 10px;
        right: -5px;
        width: 24px;
        height: 24px;
        border-radius: 50%;


    }

    .chat-info-body {
        flex: 1;
        overflow: hidden;
    }

    .ad-name-sidebar {
        font-weight: 600;
        font-size: 15px;
        color: var(--text-dark);
        margin-bottom: 2px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .last-msg-sidebar {
        font-size: 13px;
        color: var(--text-muted);
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .chat-meta-sidebar {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        justify-content: space-between;
        margin-left: 10px;
        margin-bottom: 12px;
    }

    .time-sidebar {
        font-size: 11px;
        color: #999;
    }

    .unread-pill {
        background: var(--primary-color);
        color: #fff;
        font-size: 10px;
        font-weight: bold;
        padding: 2px 8px;
        border-radius: 20px;
        margin-top: 5px;
    }

    /* Right Side (Chat Container) */
    .chat-cont-right {
        flex: 1;
        display: flex;
        flex-direction: column;
        background: #fff;
        position: relative;
    }

    /* Ad Banner in Chat */
    .chat-ad-banner {
        padding: 12px 24px;
        background: var(--sidebar-bg);
        border-bottom: 1px solid #eee;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .ad-banner-img {
        width: 60px;
        height: 60px;
        border-radius: 8px;
        object-fit: cover;
    }

    .ad-banner-info h6 {
        margin: 0;
        font-weight: 700;
        font-size: 16px;
    }

    .ad-banner-info p {
        margin: 0;
        font-size: 14px;
        color: var(--primary-color);
        font-weight: 600;
    }

    /* Chat Header */
    .chat-header {
        padding: 15px 24px;
        border-bottom: 1px solid #eee;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .chat-header .user-name {
        font-weight: 700;
        font-size: 18px;
    }

    .chat-body-div {
        display: none;
        flex-direction: column;
        height: 100% !important;
        width: 100%;
        overflow: hidden;
        position: relative;
    }

    .chat-body-div.show {
        display: flex !important;
    }

    /* Message Bubbles - Premium Redesign */
    .chat-body {
        flex: 1 1 auto;
        overflow-y: auto !important;
        padding: 30px 24px;
        background: #fdfdfd;
        display: flex;
        flex-direction: column;
        min-height: 0;
    }

    .message-body {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .msg-wrap {
        display: flex;
        max-width: 85%;
        margin-bottom: 4px;
        animation: fadeIn 0.3s ease-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(5px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .msg-wrap.sent {
        align-self: flex-end;
        justify-content: flex-end;
    }

    .msg-wrap.received {
        align-self: flex-start;
        justify-content: flex-start;
    }

    .bubble {
        padding: 12px 18px;
        font-size: 15px;
        line-height: 1.5;
        position: relative;
        transition: all 0.2s;
    }

    .sent .bubble {
        background: var(--primary-gradient);
        color: #fff;
        border-radius: 22px 22px 4px 22px;
        box-shadow: var(--shadow-bubble-sent);
        border: none;
    }

    .received .bubble {
        background: var(--received-gradient);
        color: var(--text-dark);
        border: 1px solid #f0f0f0;
        border-radius: 22px 22px 22px 4px;
        box-shadow: var(--shadow-bubble-received);
    }

    .msg-time {
        font-size: 10px;
        margin-top: 6px;
        display: block;
        font-weight: 500;
    }

    .sent .msg-time {
        color: rgba(255, 255, 255, 0.8);
        text-align: right;
    }

    .received .msg-time {
        color: #999;
    }

    .date-divider {
        align-self: center;
        margin: 25px 0;
        background: #f1f3f4;
        padding: 4px 16px;
        border-radius: 20px;
        font-size: 11px;
        color: #666;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Chat Footer / Input */
    .chat-footer {
        padding: 16px 24px;
        border-top: 1px solid rgba(0, 0, 0, 0.05);
        background: #fff;
        flex-shrink: 0;
        z-index: 10;
    }

    .input-wrapper {
        background: #f8f9fa;
        border-radius: 30px;
        padding: 5px 15px;
        display: flex;
        align-items: center;
        gap: 10px;
        border: 1px solid #f1f3f4;
        transition: all 0.3s;
    }

    .input-wrapper:focus-within {
        background: #fff;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(6, 134, 238, 0.1);
    }

    .chat-input {
        flex: 1;
        border: none;
        background: transparent;
        padding: 10px 5px;
        font-size: 15px;
        outline: none !important;
    }

    .action-icons-input {
        display: flex;
        gap: 12px;
        color: #888;
    }

    .send-btn-premium {
        background: var(--primary-gradient);
        color: #fff;
        width: 42px;
        height: 42px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        transition: all 0.3s;
        box-shadow: var(--shadow-bubble-sent);
        cursor: pointer;
    }

    .send-btn-premium:hover:not(:disabled) {
        transform: scale(1.08);
        box-shadow: 0 6px 20px rgba(6, 134, 238, 0.35);
    }

    .send-btn-premium:disabled {
        background: #e0e0e0;
        transform: none;
        box-shadow: none;
        cursor: not-allowed;
    }

    /* Scrollbar */
    .chat-users-list::-webkit-scrollbar,
    .chat-body::-webkit-scrollbar {
        width: 6px;
    }

    .chat-users-list::-webkit-scrollbar-thumb,
    .chat-body::-webkit-scrollbar-thumb {
        background: #e0e0e0;
        border-radius: 10px;
    }

    .chat-users-list::-webkit-scrollbar-track,
    .chat-body::-webkit-scrollbar-track {
        background: transparent;
    }

    .chat-empty-state {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100%;
        color: #ccc;
    }

    .chat-empty-state i {
        font-size: 80px;
        margin-bottom: 20px;
        opacity: 0.5;
    }

    .select2-container--default .select2-selection--single {
        border: none !important;
        background: transparent !important;
        font-weight: 600 !important;
        color: var(--primary-color) !important;
    }

    .custom-dropdown-menu {
        border-radius: 15px !important;
        box-shadow: var(--shadow-md) !important;
        border: 1px solid #eee !important;
        padding: 8px !important;
    }

    .custom-dropdown-menu a {
        padding: 10px 15px !important;
        border-radius: 8px !important;
        font-weight: 500 !important;
    }

    @media (max-width: 991px) {
        .chat-cont-left {
            width: 100%;
            display: block;
        }

        .chat-cont-right {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1000;
        }

        .chat-cont-right.show {
            display: flex;
        }

        .chat-window {
            height: calc(100vh - 120px);
            margin: 10px;
        }
    }
</style>
@section('content')

<div class="content-chat"
    style="background-color:#eee;min-height: 500px !important;padding-top:5px;padding-bottom:5px;">
    <div class="container-fluid">
        <div class="row">
            <!-- <div style="padding-bottom:2px;"><button class="btn btn-danger" id="deleteSelected"><i class="fa fa-trash"></i></button>
                <input type="checkbox" style="margin-left:26.5%;" id="check-all">&nbsp;ALL

                </div> -->
            <div class="col-md-12">
                <div class="chat-window">

                    <div class="chat-cont-left">
                        <div class="chat-header-sidebar">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h4 class="mb-0 fw-bold">Chats</h4>

                            </div>

                            <div class="position-relative">
                                <i class="fa fa-search search-icon-premium"></i>
                                <input type="text" id="search" placeholder="Search conversations..." class="premium-search">
                            </div>
                        </div>

                        <div class="filter-section">
                            <div class="check-all-wrapper">
                                <div class="hide" style="display: none;">
                                    <input type="checkbox" class="form-check-input" id="check-all">
                                    <span class="small text-muted">All</span>
                                </div>
                            </div>
                            <select class="chat premium-filter" id="filter-dropdown">
                                <option value="all">All Chats</option>
                                <option value="favorite">Favorites</option>
                                <option value="unread">Unread</option>
                                <option value="blocked">Blocked</option>
                            </select>
                            <div class="d-flex mr-2">
                                <button class="btn btn-light btn-sm rounded-circle" id="edit-chats-btn" title="Edit">
                                    <i class="fa fa-pencil text-primary"></i>
                                </button>
                                <button class="btn btn-light btn-sm rounded-circle" id="delete-selected-btn" title="Delete Selected" style="display: none;">
                                    <i class="fa fa-trash text-danger"></i>
                                </button>
                            </div>
                        </div>

                        <div class="chat-users-list">
                            @foreach($chats as $chat)
                            @php
                            $isActive = (\App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'id') == request()->i);
                            $statusClass = $chat->is_blocked ? 'blocked' : ($chat->is_favorite ? 'favorite' : '');
                            $isUnread = ($login_user_id != $chat->latest_message_sender_id && $chat->unread_count > 0);
                            @endphp
                            <a href="javascript:void(0);"
                                class="chat-item-premium {{ $isActive ? 'active' : '' }} {{ $statusClass }} {{ $isUnread ? 'unread' : '' }}"
                                id="{{ str_replace(' ', '', \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'name')). '-' . \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'id') }}"
                                unread-ids="{{ json_encode($chat->unread_ids) }}"
                                chat-id="{{ $chat->id }}">

                                <div class="chat-checkbox-wrapper me-3" style="margin-top: 22px; display: none;">
                                    <input type="checkbox" value="{{ $chat->id }}" class="dlt-chat form-check-input" style="width: 12px; height: 12px; cursor: pointer;">
                                </div>

                                <div class="user-avatar-wrapper">
                                    <img src="{{ $chat->ad->main_image_url ?? 'https://via.placeholder.com/60x60' }}" class="ad-thumbnail-sidebar" alt="Ad">
                                    <img src="{{ \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'image_url') ?: 'https://via.placeholder.com/30x30' }}" class="user-small-avatar" alt="User">
                                </div>

                                <div class="chat-info-body">
                                    <div class="ad-name-sidebar">{{ $chat->ad->title ?? "Untitled Ad" }}</div>
                                    <div class="last-msg-sidebar">{{ $chat->latest_message ?? "No messages yet" }}</div>
                                    <div class="small text-muted mb-2">
                                        <i class="fa fa-user-circle-o me-1"></i>{{ \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'name') }}
                                    </div>
                                </div>

                                <div class="chat-meta-sidebar">
                                    <span class="time-sidebar">{{ $chat->latest_message_recieved_time_diff }}</span>
                                    <span class="unread-pill" style="{{ ($login_user_id != $chat->latest_message_sender_id && $chat->unread_count > 0) ? '' : 'display: none;' }}">
                                        {{ $chat->unread_count }}
                                    </span>

                                    <div class="d-flex gap-3 action-btns-sidebar">
                                        <i class="fa fa-heart favorite-item-sidebar {{ $chat->is_favorite ? 'text-danger' : 'text-muted' }}"
                                            data-chat-id="{{ $chat->id }}"
                                            style="font-size: 13px; cursor: pointer; margin-right:10px;"></i>
                                        <i class="fa fa-ban block_user {{ $chat->is_blocked ? 'text-danger' : 'text-warning' }}"
                                            data-chat-id="{{ $chat->id }}"
                                            style="font-size: 13px; cursor: pointer;"
                                            title="Block"></i>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>




                    <div class="chat-cont-right flex-column">
                        @foreach($chats as $chat)
                        @php
                        $isActive = (\App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'id') == request()->i);
                        $otherUserName = \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'name');
                        $otherUserImg = \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'image_url') ?: 'https://via.placeholder.com/50x50';
                        @endphp
                        <div class="chat-body-div h-100 {{ $isActive ? 'show' : '' }}"
                            id="{{ str_replace(' ', '', $otherUserName). '-' . \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'id') }}-chat-body-div"
                            chat-id="{{ $chat->id }}"
                            user="{{ str_replace(' ', '', $otherUserName) . '-' . \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'id') }}">

                            <!-- Premium Header -->
                            <div class="chat-header">
                                <div class="d-flex align-items-center gap-3">
                                    <a href="javascript:void(0)" class="back-user-list d-lg-none">
                                        <i class="fa fa-chevron-left text-primary"></i>
                                    </a>
                                    <div class="avatar shadow-sm">
                                        <img src="{{ $otherUserImg }}" alt="User" width="45" height="45" class="rounded-circle">
                                    </div>
                                    <div class="user-info">
                                        <div class="user-name">{{ $otherUserName }}</div>
                                        <div class="small text-success fw-600"><i class="fa fa-circle me-1" style="font-size: 8px;"></i>Online</div>
                                    </div>
                                </div>

                                <div class="d-flex gap-2">
                                    <button class="btn btn-outline-primary btn-sm rounded-pill px-3 block_user" data-chat-id="{{ $chat->id }}">
                                        {{ $chat->is_blocked ? 'Unblock' : 'Block' }}
                                    </button>
                                    <button class="btn btn-outline-danger btn-sm rounded-pill px-3 report-user-btn" data-bs-toggle="modal" data-bs-target="#reportUserModal">
                                        Report
                                    </button>
                                </div>
                            </div>

                            <!-- Ad Context Banner -->
                            <div class="chat-ad-banner">
                                <a href="{{ env('BASE_URL') }}ads/detail/{{ $chat->ad->id ?? '#' }}" class="d-flex align-items-center gap-3 text-decoration-none text-dark w-100">
                                    <img src="{{ $chat->ad->main_image_url ?? 'https://via.placeholder.com/60x60' }}" class="ad-banner-img shadow-sm" alt="Ad">
                                    <div class="ad-banner-info flex-grow-1">
                                        <h6>{{ $chat->ad->title ?? 'Untitled Ad' }}</h6>
                                        <p>{{ session('app_currency', 'AED') }} {{ $chat->ad->price ?? '0' }}</p>
                                    </div>
                                    <div class="btn btn-primary btn-sm rounded-pill px-3">View Ad</div>
                                </a>
                            </div>

                            @if($chat->status == 'accepted')
                            <!-- Chat Messages Area -->
                            <div class="chat-body" id="chat-scroll-{{ $chat->id }}">
                                <div class="message-body">
                                    @foreach($chat->sorted_messages as $date => $sorted_messages)
                                    <div class="date-divider">
                                        <span>{{ \Carbon\Carbon::parse($date)->format('d M Y') }}</span>
                                    </div>
                                    @foreach($sorted_messages as $message)
                                    @php
                                    $isSent = ($message->message_position == 'right');
                                    @endphp
                                    <div class="msg-wrap {{ $isSent ? 'sent' : 'received' }}">
                                        <div class="bubble">
                                            {{ $message->message }}
                                            <span class="msg-time">{{ $message->sended_at_formatted }}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endforeach
                                </div>
                            </div>

                            <!-- Premium Footer / Input -->
                            <div class="chat-footer" style="{{ $chat->is_blocked ? 'display: none;' : '' }}">
                                <div class="input-wrapper shadow-sm">
                                    <div class="action-icons-input">
                                        <i class="fa fa-plus-circle text-muted" style="cursor: pointer;"></i>
                                        <i class="fa fa-smile-o text-muted" style="cursor: pointer;"></i>
                                    </div>
                                    <input type="text"
                                        class="chat-input input-msg-send"
                                        placeholder="Type your message..."
                                        data-user-id="{{ \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'id') }}"
                                        data-chat-id="{{ $chat->id }}"
                                        onkeyup="checkInput()">
                                    <button class="send-btn-premium msg-send-btn shadow-sm"
                                        data-user-id="{{ \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'id') }}"
                                        data-chat-id="{{ $chat->id }}"
                                        disabled>
                                        <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            @else
                            <div class="chat-empty-state">
                                <i class="fa fa-comments-o text-primary"></i>
                                <h4 class="mt-3">New Chat Request</h4>
                                <p class="text-muted">Do you want to accept this conversation?</p>
                                <div class="d-flex gap-3 mt-3">
                                    <button class="btn btn-primary px-4 rounded-pill accept" chat-id="{{ $chat->id }}">Accept</button>
                                    <button class="btn btn-outline-danger px-4 rounded-pill reject" chat-id="{{ $chat->id }}">Decline</button>
                                </div>
                            </div>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">


<!-- Magnific Popup JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>


@section('page_scripts')
<script type="text/javascript">
    // Use base_url or api_url from master layout to avoid redeclaration error

    $(document).ready(function() {
        // Use local base_url to ensure trailing slash and handle session-based routes
        const site_url = (typeof base_url !== 'undefined' ? base_url : "{{ env('BASE_URL') }}").replace(/\/$/, '') + '/';

        // Consolidated AJAX Setup
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'json'
        });

        window.scrollChatToBottom = function(chatId) {
            const chatWindow = $(`#chat-scroll-${chatId}`);
            if (chatWindow.length) {
                chatWindow.scrollTop(chatWindow[0].scrollHeight);
            }
        };

        window.checkInput = function() {
            $('.input-msg-send').each(function() {
                const btn = $(this).closest('.input-wrapper').find('.msg-send-btn');
                btn.prop('disabled', !$(this).val().trim());
            });
        };

        window.markAsRead = function(chatId, element) {
            $.post(site_url + 'chats/mark-as-read', {
                id: chatId
            }, function() {
                element.removeClass('unread');
                element.find('.unread-pill').fadeOut();
            });
        };

        window.appendMsg = function(message, chatId) {
            const parent = $(`.chat-body-div[chat-id="${chatId}"] .message-body`);
            const isSent = message.message_position === 'right';
            const html = `
                <div class="msg-wrap ${isSent ? 'sent' : 'received'}">
                    <div class="bubble">
                        ${message.message}
                        <span class="msg-time">${message.sended_at_formatted}</span>
                    </div>
                </div>`;
            parent.append(html);
            window.scrollChatToBottom(chatId);
        };

        // 1. Chat Selection
        $(document).on('click', '.chat-item-premium', function(e) {
            e.preventDefault();
            const chatId = $(this).attr('chat-id');

            $('.chat-item-premium').removeClass('active');
            $(this).addClass('active');

            $('.chat-body-div').hide().removeClass('show');
            $(`.chat-body-div[chat-id="${chatId}"]`).css('display', 'flex').addClass('show');

            if ($(this).hasClass('unread')) {
                window.markAsRead(chatId, $(this));
            }

            window.scrollChatToBottom(chatId);

            if (window.innerWidth < 992) {
                $('.chat-cont-right').addClass('show');
            }
        });

        // 2. Mobile Back
        $(document).on('click', '.back-user-list', function() {
            $('.chat-cont-right').removeClass('show');
        });

        // 3. Send Message
        $(document).on('click', '.msg-send-btn', function() {
            const btn = $(this);
            const chatId = btn.data('chat-id');
            const userId = btn.data('user-id');
            const input = btn.closest('.input-wrapper').find('.input-msg-send');
            const msg = input.val().trim();

            if (!msg) return;
            btn.prop('disabled', true);

            $.post(site_url + 'chats/send-message', {
                user_id: userId,
                chat_id: chatId,
                message: msg
            }, function(res) {
                if (res.status) {
                    window.appendMsg(res.data, chatId);
                    input.val('').trigger('keyup');
                    $(`.chat-item-premium[chat-id="${chatId}"] .last-msg-sidebar`).text(msg);
                }
                btn.prop('disabled', false);
            }).fail(() => btn.prop('disabled', false));
        });

        $(document).on('keyup', '.input-msg-send', function(e) {
            window.checkInput();
        });

        $(document).on('keypress', '.input-msg-send', function(e) {
            if (e.which === 13 && !e.shiftKey) {
                e.preventDefault();
                $(this).closest('.input-wrapper').find('.msg-send-btn').click();
            }
        });

        // 3.1 Mark as read on focus
        $(document).on('focus', '.input-msg-send', function() {
            const chatId = $(this).data('chat-id');
            const sidebarItem = $(`.chat-item-premium[chat-id="${chatId}"]`);
            if (sidebarItem.hasClass('unread')) {
                window.markAsRead(chatId, sidebarItem);
            }
        });

        // 4. Search & Filter
        $(document).on('keyup', '.premium-search', function() {
            const val = $(this).val().toLowerCase();
            $('.chat-item-premium').each(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(val) > -1);
            });
        });

        $(document).on('change', '.premium-filter', function() {
            const val = $(this).val();
            if (val === 'all') {
                $('.chat-item-premium').show();
            } else {
                $('.chat-item-premium').hide();
                $(`.chat-item-premium.${val}`).show();
            }
        });

        // 5. Select All
        $(document).on('change', '#check-all', function() {
            $('.chat-item-premium:visible .dlt-chat').prop('checked', $(this).prop('checked'));
        });

        // 6. Sidebar Actions (Edit/Favorite)
        $(document).on('click', '#edit-chats-btn', function() {
            $(this).hide();
            $('#delete-selected-btn').show();
            $('.chat-checkbox-wrapper').show();
            $('.hide').show();
        });

        // Toggle back when trash is clicked
        $(document).on('click', '#delete-selected-btn', function() {
            // Your delete logic here (e.g., AJAX)
            window.closeEditMode();
        });

        window.closeEditMode = function() {
            $('#delete-selected-btn').hide();
            $('#edit-chats-btn').show();
            $('.chat-checkbox-wrapper').hide();
            $('.hide').hide();
            $('#check-all').prop('checked', false);
            $('.dlt-chat').prop('checked', false);
        };

        $(document).on('click', '.favorite-item-sidebar', function(e) {
            e.preventDefault();
            e.stopPropagation();
            const icon = $(this);
            $.post("{{ route('chat.favorite') }}", {
                chat_id: icon.data('chat-id')
            }, function(res) {
                icon.toggleClass('text-danger text-muted');
                icon.closest('.chat-item-premium').toggleClass('favorite', res.is_favorite);
            });
        });

        $(document).on('click', '#userOptionsMenu', function(e) {
            e.stopPropagation();
            $(this).next('.custom-dropdown-menu').toggleClass('show');
        });

        $(document).on('click', '.block_user', function(e) {
            e.preventDefault();
            e.stopPropagation();
            const btn = $(this);
            const chatId = btn.data('chat-id');
            $.post("{{ route('chat.block') }}", {
                chat_id: chatId
            }, function(res) {
                // Update all block buttons for this chat (header and sidebar)
                const allBlockBtns = $(`.block_user[data-chat-id="${chatId}"]`);

                // Update text if it's a button (header)
                allBlockBtns.filter('button').text(res.is_blocked ? 'Unblock' : 'Block');

                // Update color for icons (sidebar)
                allBlockBtns.filter('i').toggleClass('text-danger', res.is_blocked)
                    .toggleClass('text-warning', !res.is_blocked);

                // Sync status indicator and sidebar background
                const chatBody = $(`.chat-body-div[chat-id="${chatId}"]`);
                const sidebarItem = $(`.chat-item-premium[chat-id="${chatId}"]`);

                chatBody.find('.user-info .text-success').toggle(!res.is_blocked);
                sidebarItem.toggleClass('blocked', res.is_blocked);

                // Toggle footer
                if (res.is_blocked) {
                    chatBody.find('.chat-footer').hide();
                } else {
                    chatBody.find('.chat-footer').show();
                }
            });
        });

        $(document).on('click', '.report-user-btn', function() {
            const chatId = $(this).closest('.chat-body-div').attr('chat-id');
            $('#ad-id_user').val(chatId);
        });

        $(document).click(() => $('.custom-dropdown-menu').removeClass('show'));

        // 8. Accept/Reject
        $(document).on('click', '.accept, .reject', function() {
            const status = $(this).hasClass('accept') ? 'accepted' : 'rejected';
            $.post(site_url + 'chats/accept-or-reject', {
                chat_id: $(this).attr('chat-id'),
                status: status
            }, function() {
                window.location.reload();
            });
        });

        // 9. Real-time updates
        setInterval(function() {
            $.get(site_url + 'chats/get-new-messages', function(res) {
                if (res.status) {
                    res.data.forEach(chat => {
                        if (chat.messages.length > 0) {
                            chat.messages.forEach(m => window.appendMsg(m, chat.id));
                            const item = $(`.chat-item-premium[chat-id="${chat.id}"]`);
                            item.find('.last-msg-sidebar').text(chat.latest_message);
                            if (res.login_user_id != chat.latest_message_sender_id && chat.unread_count > 0) {
                                item.addClass('unread').find('.unread-pill').text(chat.unread_count).show();
                            }
                        }
                    });
                }
            });
        }, 8000);

        // 10. Initial State
        const active = $('.chat-item-premium.active');
        if (active.length) window.scrollChatToBottom(active.attr('chat-id'));
    });
</script>
@endsection