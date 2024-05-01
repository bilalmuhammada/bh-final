@extends('layout.master')
@section('content')
    @php
        $categories = \App\Helpers\RecordHelper::getCategories();
        $catgories_for_search = $categories->random()->take(5)->get();
    @endphp

    <style>


        /* Style the tab */
        .tabx {
            float: left;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
            border-radius: 5px 0px 0px 5px;
            width: 30%;
            height: 500px;
        }

        /* Style the buttons inside the tab */
        .tabx button {
            display: block;
            background-color: inherit;
            color: black;
            padding: 6px 16px;
            width: 100%;
            border: none;
            border-bottom: 1px solid #eee;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
            font-size: 17px;
            margin: 5px 0px;
        }

        /* Change background color of buttons on hover */
        .tabx button:hover {
            background-color: #ddd;
        }

        /* Create an active/current "tab button" class */
        .tabx button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            float: left;
            padding: 0px 12px;
            border: 1px solid #ccc;
            width: 70%;
            border-left: none;
            height: 500px;
        }

        .image-upload > input {
            display: none;
        }
    </style>

    <div class="cont-w">
        <div class="tabx">
            <div style="padding:10px 0px 0px 10px;">
                <spin><b>INBOX</b></spin>
            </div>
            <hr>
            {{--            <div class="col-md-12">--}}
            {{--                <div class="row">--}}
            {{--                    <span style="font-size:13px;padding: 0px 10px;">Quick Filters</span>--}}
            {{--                </div>--}}
            {{--                <div class="row">--}}
            {{--                    <div style="padding:0px 10px;">--}}
            {{--                        <div class="row" style="padding:0px 10px;">--}}
            {{--                            <div--}}
            {{--                                style="text-align:center;border-radius: 50px;border:1px solid #0000ff;background:none;padding:2px 5px;font-size:12px;margin-right:6px;">--}}
            {{--                                <a href="#">All</a></div>--}}
            {{--                            <div--}}
            {{--                                style="text-align:center;border-radius: 50px;border:1px solid #0000ff;background:none;padding:2px 5px;font-size:12px;margin-right:6px;">--}}
            {{--                                <a href="#">Unread</a></div>--}}
            {{--                            <div--}}
            {{--                                style="text-align:center;border-radius: 50px;border:1px solid #0000ff;background:none;padding:2px 5px;font-size:12px;margin-right:6px;">--}}
            {{--                                <a href="#">Important</a></div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            @forelse($chats as $chat)
                <button
                    class="tablinks media chat-title @if(\App\Helpers\SiteHelper::getSafeValueFromObject($chat->other_user, 'id') == request()->u) chat-with-user-{{ request()->u }} @endif"
                    onclick="openCity(event, '{{ \App\Helpers\SiteHelper::getSafeValueFromObject($chat->other_user, 'name') . '-' . \App\Helpers\SiteHelper::getSafeValueFromObject($chat->other_user, 'id') }}-chat-body-div')"
                    id="{{ \App\Helpers\SiteHelper::getSafeValueFromObject($chat->other_user, 'name') . '-' . \App\Helpers\SiteHelper::getSafeValueFromObject($chat->other_user, 'id') }}"
                    unread-ids="{{ json_encode($chat->unread_ids) }}" chat-id="{{ $chat->id }}">
                    <div class="row">
                        <div><span><img
                                    src="{{  \App\Helpers\SiteHelper::getSafeValueFromObject($chat->other_user, 'image_url', 'https://i.pinimg.com/originals/fe/d9/97/fed9971d943669c993db0be515a18a61.jpg') }}"
                                    alt="img" width="40" height="40" style="border-radius:50px;"></span></div>
                        <div style="padding:0px 15px;">
                            <span
                                style="font-size: 14px;">{{ \App\Helpers\SiteHelper::getSafeValueFromObject($chat->other_user, 'name') }}</span>
                            {{--                            <h6 style="font-size: 12px;"><b>Kenwood AC DC inverter Ton For Sale</b></h6>--}}
                        </div>
                        <div style="font-size: 12px;">
                            <div>{{ $chat->latest_message_recieved_time_diff }}</div>
                        </div>
                    </div>
                </button>
            @empty
                <div class="text-center">
                    Nothing Found
                </div>
            @endforelse
        </div>

        @foreach($chats as $key => $chat)
            <div
                id="{{ \App\Helpers\SiteHelper::getSafeValueFromObject($chat->other_user, 'name') . '-' . \App\Helpers\SiteHelper::getSafeValueFromObject($chat->other_user, 'id') }}-chat-body-div"
                class="tabcontent chart-body"
                style="{{ $key > 0 ? 'display: none' : '' }}" chat-id="{{ $chat->id }}"
                user="{{ \App\Helpers\SiteHelper::getSafeValueFromObject($chat->other_user, 'name') . '-' . \App\Helpers\SiteHelper::getSafeValueFromObject($chat->other_user, 'id') }}">
                <div class="row" style="border-bottom:1px solid #eee;padding:10px;">
                    <div style=""><span><img
                                src="{{  \App\Helpers\SiteHelper::getSafeValueFromObject($chat->other_user, 'image_url', 'https://i.pinimg.com/originals/fe/d9/97/fed9971d943669c993db0be515a18a61.jpg') }}"
                                alt="img"
                                width="40" height="40" style="border-radius:50px;"></span></div>
                    <div style="padding:0px 15px;width:700px;">
                        <span
                            style="font-size: 14px;">{{ \App\Helpers\SiteHelper::getSafeValueFromObject($chat->other_user, 'name') }}</span>
                        <h6 style="font-size: 12px;">{{ $chat->latest_message }}</h6>
                    </div>
                    <div class="row" style="font-size: 12px;width:30px;">
                        <div style="text-align:right;margin-top:8px;"><span><a href="" class="close-chat"><img
                                        src="{{ asset('images/cross.png')}}" width="30" height="30"></a></span></div>
                    </div>
                </div>
            {{--                <div class="row" style="border-bottom:1px solid #eee;padding:10px;">--}}
            {{--                    <div style=""><span><img--}}
            {{--                                src="https://i.pinimg.com/originals/fe/d9/97/fed9971d943669c993db0be515a18a61.jpg"--}}
            {{--                                alt="img"--}}
            {{--                                width="40" height="40" style="border-radius:10px;"></span></div>--}}
            {{--                    <div style="padding:0px 15px;width:650px;">--}}
            {{--                        <h6 style="font-size: 12px;"><b>Kenwood AC DC inverter Ton For Sale</b></h6>--}}
            {{--                        <span style="font-size: 14px;">RS 31,500</span>--}}
            {{--                    </div>--}}
            {{--                    <div class="row" style="font-size: 12px;width:130px;">--}}
            {{--                        <div style="text-align:right;margin-top:8px;margin-left:20px;"><a href="">--}}
            {{--                                <button class="btn" style="background-color:#0000FF;color:white;font-size:12px;">View Ad--}}
            {{--                                </button>--}}
            {{--                            </a></div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="col-md-3 mx-auto mt-1">--}}
            {{--                    <a href="#">--}}
            {{--                        <div--}}
            {{--                            style="text-align:center;border-radius: 50px;border:1px solid #0000ff;background:none;padding:2px 5px;font-size:12px;margin-right:6px;">--}}
            {{--                            FRIDAY, 4 AUGUST--}}
            {{--                        </div>--}}
            {{--                    </a>--}}
            {{--                </div>--}}
            <!------messages-------->
                <div style="height: 347px;overflow-x: hidden;overflow-y: scroll;" class="msg-append">
                    @foreach($chat->messages as $message)
                        <div style="text-align:{{ $message->message_position == 'right' ? 'right' : 'left' }};">
                            <span>{{ $message->message }}</span></div>
                    @endforeach
                </div>
                <!-------------->
                <!------send messages---->
                <div class="row write-area-body"
                     style="border-bottom:1px solid #eee;padding:10px;position:relative;top:30px;border-top:1px solid #eee;position:sticky;">
                    <div style=""><span>
                      <div class="image-upload" style="display:;">
                      <label for="file-input">
{{--                      <img src="{{ asset('images/attachment.png') }}" alt="img" width="20" height="20">--}}
                      </label>

{{--                      <input id="file-input" type="file"/>--}}
                    </div>
                      </span></div>
                    <div style="padding:0px 15px;width:650px;">
                        <input type="text" placeholder=" Type a message" class="form-control write-msg"
                               data-user-id="{{ \App\Helpers\SiteHelper::getSafeValueFromObject($chat->other_user, 'id') }}"
                               data-chat-id="{{ $chat->id }}">
                    </div>
                    <div class="row" style="font-size: 12px;width:130px;">
                        <div style="text-align:right;margin-top:0px;margin-left:60px;">
                            <a class="msg-send-btn"
                               data-user-id="{{ \App\Helpers\SiteHelper::getSafeValueFromObject($chat->other_user, 'id') }}"
                               data-chat-id="{{ $chat->id }}">
                                <img
                                    src="{{ asset('images/arrow.png') }}" width="35" hieght="35"></a>
                        </div>
                    </div>
                </div>
                <!------send messages---->
            </div>
        @endforeach

        <div class="row">
            <div class="col-12">
                <div
                    style="border-bottom:1px solid #eee;padding:10px;position:relative;top:30px;border-top:1px solid #eee;position:sticky; height: 400px; display: none; background: #f1f1f1"
                    class="show-default text-center">
                    Select user for chat
                </div>
            </div>
        </div>

    </div>
    <script>
        function openCity(evt, cityName) {
            console.log(evt)
            $('.show-default').hide();
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        // document.getElementById("defaultOpen").click();
    </script>

@endsection
@section('page_scripts')
    <script>
        $(document).ready(function () {
            $('.chat-with-user-{{ request()->u }}').click();
            ajax_setup();
        });

        function ajax_setup() {
            $.ajaxSetup({
                headers: {
                    // 'Authorization': 'Bearer ' + token,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: 'json'
            });
        }

        $(document).on('click', '.close-chat', function (e) {
            e.preventDefault();

            $(this).parents('.chart-body').hide();
            $('.show-default').show();
        });

        //accept or reject chat request start
        $(document).on('click', '.accept', function (e) {
            e.preventDefault();
            accept_or_reject('accepted', $(this).attr('chat-id'));
        });

        $(document).on('click', '.reject', function (e) {
            e.preventDefault();
            accept_or_reject('rejected', $(this).attr('chat-id'));
        });


        function accept_or_reject(status, chat_id) {
            $.ajax({
                url: api_url + 'chats/accept-or-reject',
                method: 'POST',
                data: {
                    chat_id: chat_id,
                    status: status,
                },
                success: function (response) {
                    window.location.href = '';
                },
                error: function (response) {
                    console.log('error');
                }
            });
        }

        //accept or reject chat request end


        function markMessageAsReaded(id, selector) {
            $.ajax({
                url: api_url + 'chats/mark-as-read',
                method: 'POST',
                data: {
                    id: id
                },
                success: function (response) {
                    $(selector).find('.unread-count').css('display', 'none');
                },
                error: function (response) {
                    console.log('error');
                }
            });
        }

        $(document).on('click', '.chat-title', function (e) {
            e.preventDefault();

            //calling function to mark messages as readed
            markMessageAsReaded($(this).attr('chat-id'), $(this));

            var chat_body_selector = "#" + $(this).attr('id') + "-chat-body-div";
            $('.chat-body-div').css('display', 'none');
            $(chat_body_selector).css('display', 'block');
        });

        $(document).on('click', '.msg-send-btn', function (e) {
            thisElem = $(this);
            e.preventDefault();
            console.log(thisElem)
            var message = $(thisElem).parents('.write-area-body').find('.write-msg');
            send_new_message(message, thisElem);
        });

        //send request on input enter
        $(".write-msg").on('keypress', function (e) {
            console.log(e.which)
            if (e.which === 13) {
                console.log('good')
                // Check if the key pressed is Enter (key code 13)
                e.preventDefault(); // Prevent the form submission

                // send message
                send_new_message($(this), $(this));

            }
        });

        function send_new_message(message, thisElem) {
            $.ajax({
                url: api_url + 'chats/send-message',
                method: 'POST',
                data: {
                    user_id: $(thisElem).attr('data-user-id'),
                    chat_id: $(thisElem).attr('data-chat-id'),
                    message: $(message).val()
                },
                success: function (response) {
                    if (response.status) {
                        send_msg_body(response.data, thisElem);

                        $(message).val('');
                    }
                    // $(selector).find('.unread-count').css('display', 'none');
                },
                error: function (response) {
                    console.log('error');
                }
            });
        }

        setInterval(function () {
            $.ajax({
                url: api_url + 'chats/get-new-messages',
                method: 'GET',
                success: function (response) {
                    if (response.status) {
                        $(response.data).each(function (i, chat) {
                            if (chat.messages.length > 0) {
                                $(chat.messages).each(function (i, msg) {
                                    send_msg_body(msg, '', false, $('#' + chat.other_user.name + '-' + chat.other_user.id + '-chat-body-div'), chat);
                                });

                                $('#' + chat.other_user.name + '-' + chat.other_user.id).find('.user-last-chat').html(chat.latest_message);

                                if (response.login_user_id !== chat.latest_message_sender_id && chat.unread_count > 0) {
                                    $('#' + chat.other_user.name + '-' + chat.other_user.id).find('.unread-count').show();
                                    $('#' + chat.other_user.name + '-' + chat.other_user.id).find('.unread-count').html(chat.unread_count);
                                } else {
                                    $('#' + chat.other_user.name + '-' + chat.other_user.id).find('.unread-count').hide();
                                }
                            }
                        })
                    }
                },
                error: function (response) {
                    console.log('error');
                }
            });
        }, 10000)


        function send_msg_body(message, thisElem, using_button = true, parent, chat) {

            var msg = `<div style="text-align:${message.message_position == 'right' ? 'right' : 'left'};">
                            <span>${message.message}</span></div>`;

            if (using_button === true) {
                $(thisElem).parents('.chart-body').find('.msg-append').append(msg);
            } else {
                console.log(message)
                $(parent).find('.msg-append').append(msg);
            }
        }

        // mark as read message on input focus
        $(document).on('focus', '.write-msg', function () {
            var chat_id = $(this).parents('.chart-body').attr('chat-id');
            var user = $(this).parents('.chart-body').attr('user');
            markMessageAsReaded(chat_id, $('#' + user));
        });

        // chat user filter code here
        // Get references to the input and the list

        $("#search").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#chat-users-list .chat-title").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    </script>
@endsection
