<div class="lw-messenger-header row">
    <div class="col-md-11">
        <img data-src="<?= imageOrNoImageAvailable($userData['profile_picture_image']) ?>" class="lw-profile-picture lw-online lw-lazy-img lw-photoswipe-gallery-img float-left" alt=""  >
        <div class="lw-messenger-header-meta" >
            <?= $userData['full_name'] ?>
            <div class="text-muted">
                <small>
                    <?= Str::limit($userData['about_me'], 15) ?>
                </small>
            </div>
        </div>
        <div class="float-right pt-3">
            @if(getStoreSettings('allow_pusher') and getStoreSettings('allow_agora'))
            @if(getFeatureSettings('audio_call_via_messenger'))
            <a class="btn btn-primary rounded-circle lw-audio-video-btns p-0 lw-button-width" style="display: none;" id="lwAudioCallDisableBtn"><i class="fas fa-phone-alt " title="<?= __tr('Audio Call') ?>"></i></a>
            <!-- audio call button -->
            <a class="btn btn-primary rounded-circle lw-audio-video-btns p-0 lw-button-width" style="display: none;" href type="button" id="lwAudioCallBtn" data-user-uid="<?= $userData['user_uid'] ?>" data-call-type="audio" data-confirm="#lwCallErrorContainer" title="<?= __tr('Audio Call') ?>"><i class="fas fa-phone-alt "></i></a>
            <!-- /audio call button -->
            @endif

            @if(getFeatureSettings('video_call_via_messenger'))
            <a class="btn btn-primary rounded-circle lw-audio-video-btns p-0 lw-button-width" style="display: none;" id="lwVideoCallDisableBtn" readonly><i class="fas fa-video " title="<?= __tr('Video Call') ?>"></i> </a>
            <!-- video call button -->
            <a class="btn btn-primary rounded-circle lw-audio-video-btns p-0 lw-button-width" style="display: none;" href type="button" id="lwVideoCallBtn" data-user-uid="<?= $userData['user_uid'] ?>" data-call-type="video" data-confirm="#lwCallErrorContainer" title="<?= __tr('Video Call') ?>"><i class="fas fa-video "></i> </a>
            <!-- /video call button -->
            @endif
            @endif
            <div class=" lw-messenger-user-menu">
                <div class="dropdown">
                    <button class="btn btn-primary rounded-circle dropdown-toggle lw-datatable-action-dropdown-toggle lw-button-width" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v lw-fa-ellipsis-v"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                        <!-- delete all chat button -->
                        <a class="dropdown-item lw-disable-link" id="lwDeleteAllChatDisableButton" readonly><i class="fas fa-trash "></i> <?= __tr('Delete All Chat') ?></a>
                        <a class="dropdown-item lw-ajax-link-action" id="lwDeleteAllChatActiveButton" href="<?= route('user.write.delete_all_messages', ['userId' => $userData['user_id']]) ?>" data-method="post" data-callback="userChatResponse" data-post-data='<?= json_encode(['to_user_id' => $userData['user_id']]) ?>' type="button"><i class="fas fa-trash"></i> <?= __tr('Delete All Chat') ?></a>
                        <!-- /delete all chat button -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="lw-messenger-chat-window row">
    <!-- Check if user conversation exists -->

    @if(!__isEmpty($userConversations))
    <!-- Loop over the user conversation -->
    @foreach($userConversations as $conversation)
    @php
        $deleteActionUrl = route('user.write.delete_message', ['chatId' => $conversation['chat_id'], 'userId' => $userData['user_id']]);
    @endphp
    <!-- Check if message received from other user -->
    @if($conversation['is_message_received'])
    <div class="lw-messenger-chat-message row col-md-12 lw-messenger-chat-recipient">
        <!-- message received user profile picture -->
        <img data-src="<?= imageOrNoImageAvailable($userData['profile_picture_image']) ?>" class="lw-profile-picture lw-online lw-lazy-img lw-photoswipe-gallery-img" alt="">
        <!-- /message received user profile picture -->

        <!-- Check if message is only text -->
        @if($conversation['type'] == 1)
        <div class="lw-messenger-chat-item"><?= $conversation['message'] ?>
            <a class="close float-right lw-ajax-link-action lw-single-message-delete" href="{{ $deleteActionUrl }}" data-method="post" data-callback="userChatResponse">
                <span aria-hidden="true">&times;</span>
            </a>
            <span class="lw-messenger-chat-meta"><?= $conversation['created_on'] ?></span>
        </div>
        <!-- Check if message for Uploaded File / Giphy / Sticker -->
        @elseif ($conversation['type'] == 2 or $conversation['type'] == 8 or $conversation['type'] == 12)
        <div class="lw-messenger-chat-item"><img class="chat-lazy-item" data-src="<?= $conversation['message'] ?>" alt="">
            <a class="close float-right lw-ajax-link-action lw-single-message-delete" href="{{ $deleteActionUrl }}" data-method="post" data-callback="userChatResponse">
                <span aria-hidden="true">&times;</span>
            </a>
            <span class="lw-messenger-chat-meta"><?= $conversation['created_on'] ?></span>
        </div>
        @endif
    </div>
    <!-- Check if message send -->
    @else
    <div class="lw-messenger-chat-message lw-messenger-chat-sender row col-md-12">
        @if($conversation['type'] == 1)
        <div class="lw-messenger-chat-item">
            <a type="button" class="close float-right lw-ajax-link-action lw-single-message-delete" href="{{ $deleteActionUrl }}" data-method="post" data-callback="userChatResponse">
                <span aria-hidden="true">&times;</span>
            </a>
            <?= $conversation['message'] ?>
            <span class="lw-messenger-chat-meta"><?= $conversation['created_on'] ?></span>
        </div>
        @elseif ($conversation['type'] == 2 or $conversation['type'] == 8 or $conversation['type'] == 12)
        <div class="lw-messenger-chat-item"><img class="chat-lazy-item" data-src="<?= $conversation['message'] ?>" alt="">
            <span class="lw-messenger-chat-meta"><?= $conversation['created_on'] ?></span>
            <a class="close float-right lw-ajax-link-action lw-single-message-delete" href="{{ $deleteActionUrl }}" data-method="post" data-callback="userChatResponse">
                <span aria-hidden="true">&times;</span>
            </a>
        </div>
        @endif
        <img data-src="<?= imageOrNoImageAvailable($loggedInUserProfilePicture) ?>"  class="lw-profile-picture lw-online lw-photoswipe-gallery-img lw-lazy-img" alt="">
    </div>
    @endif
    <!-- /Check if message received from other user -->
    @endforeach
    <!-- /Loop over the user conversation -->
    @endif
    <!-- Check if user conversation exists -->
</div>
<div class="lw-messenger-footer">
    <div class="col-12">
        <form class="lw-ajax-form lw-form" method="post" action="<?= route('user.write.send_message', ['userId' => $userData['user_id']]) ?>" id="lwSendMessageForm" style="display: none;">
            <div class="input-group">
                <input type="text" name="message" class="form-control" aria-describedby="button-addon4" id="lwChatMessage">
                <div class="input-group-append" id="button-addon4">

                    <!-- Message Type for Example: Text / Gif / Sticker / Uploaded Image etc. -->
                    <input type="hidden" name="type" value="1">
                    <!-- /Message Type for Example: Text / Gif / Sticker / Uploaded Image etc. -->

                    <!-- Send Button -->
                    <button class="btn btn-primary" id="lwSendMessageButton" type="button"><i class="fas fa-paper-plane"></i></button>
                    <!-- /Send Button -->

                    <!-- Gif Image  Button -->
                    @if(getStoreSettings('allow_giphy'))
                    <button class="btn btn-outline-secondary lw-open-gif-action" class="lw-gif-images" type="button"><i class="fa fa-images"></i></button>
                    @endif
                    <!-- /Gif Image  Button -->

                    <!-- Sticker Button -->
                    <a class="btn btn-outline-secondary lw-open-stickers-action lw-ajax-link-action" href="<?= route('user.read.get_stickers') ?>" data-callback="__Messenger.fetchStickers"><i class="fas fa-sticky-note mt-2"></i></a>
                    <!-- /Sticker Button -->

                    <button class="input-group-text" id="lwUploadingLoader" style="display: none;">
                        <div class="spinner-border spinner-border-sm" role="status">
                            <span class="sr-only"><?= __tr('Loading...') ?></span>
                        </div>
                    </button>
                    <!-- Upload Media Button -->
                    <button class="btn btn-outline-secondary lw-messenger-file-upload" type="button" id="lwMessengerFileUpload"></button>
                    <!-- Upload Media Button -->
                </div>
            </div>
        </form>

        @if(isAdmin())
        <!--  Accept Message Request Button -->
        <a href="<?= route('fake_user.write.accept_decline_message_request', ['userId' => $userData['user_id'], 'optionalLoggedInUserId'=>$userData['optionalLoggedInUserId']]) ?>" class="btn btn-success btn-sm lw-ajax-link-action" id="lwAcceptChatRequestBtn" data-post-data='<?= json_encode([' message_request_status'=> 1]) ?>' style="display: none;" data-method="post" data-callback="__Messenger.acceptMessageRequest">
            <?= __tr('Accept') ?>
        </a>
        <!--  /Accept Message Request Button -->

        <!--  Decline Message Request Button -->
        <a href="<?= route('fake_user.write.accept_decline_message_request', ['userId' => $userData['user_id'], 'optionalLoggedInUserId'=>$userData['optionalLoggedInUserId']]) ?>" class="btn btn-danger btn-sm lw-ajax-link-action" id="lwDeclineChatRequestBtn" data-post-data='<?= json_encode([' message_request_status'=> 2]) ?>' style="display: none;" data-method="post" data-callback="__Messenger.declineMessageRequest">
            <?= __tr('Decline') ?>
        </a>
        <!--  Decline Message Request Button -->
        @else
        <!--  Accept Message Request Button -->
        <a href="<?= route('user.write.accept_decline_message_request', ['userId' => $userData['user_id']]) ?>"
            class="btn btn-success btn-sm lw-ajax-link-action" id="lwAcceptChatRequestBtn"
            data-post-data='<?= json_encode([' message_request_status'=> 1]) ?>' style="display: none;"
            data-method="post" data-callback="__Messenger.acceptMessageRequest">
            <?= __tr('Accept') ?>
        </a>
        <!--  /Accept Message Request Button -->

        <!--  Decline Message Request Button -->
        <a href="<?= route('user.write.accept_decline_message_request', ['userId' => $userData['user_id']]) ?>"
            class="btn btn-danger btn-sm lw-ajax-link-action" id="lwDeclineChatRequestBtn"
            data-post-data='<?= json_encode([' message_request_status'=> 2]) ?>' style="display: none;"
            data-method="post" data-callback="__Messenger.declineMessageRequest">
            <?= __tr('Decline') ?>
        </a>
        <!--  Decline Message Request Button -->
        @endif

        <div class="text-white" id="lwDeclineMessage" style="display: none;">
            <?= __tr('Message Request Declined') ?>
        </div>

    </div>
</div>
<div id="lwBuyStickerText" data-message="<?= __('Are you sure to purchase this sticker') ?>"></div>
<!-- Bottom sheet for Sticker / Gif Image -->
<div class="lw-messenger-bottom-sheet">
    <div class="lw-heading"></div>
    <div class="lw-content">
        <div id="lwStickerImagesContainer"></div>
        <div id="lwGifImagesContainer"></div>
        <!-- <div class="lw-overlay offset-md-4"></div> -->
    </div>
</div>
<!-- /Bottom sheet for Sticker / Gif Image -->
<!-- Modal -->
<div class="modal fade" id="lwUserNotAcceptedMsgRequest" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close lw-not-accepted-dialog-close-btn" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body py-4 text-center">
                <h5><?= __tr('User needs to accept chat request') ?></h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary lw-not-accepted-dialog-close-btn"><?= __tr('Close') ?></button>
            </div>
        </div>
    </div>
</div>

<script>
    __Messenger.recipientUserProfilePicture = "<?= $userData['profile_picture_image'] ?>";
    $(document).ready(function() {
        var lazyInstance = $('.chat-lazy-item').lazy({
        // called once all elements was handled
        onFinishedAll: function() {
            // console.log('finished loading all images');
        }
    });
    
    _.delay(function() {
        var $messengerChatWindow =$('.lw-messenger-chat-window');
        if($messengerChatWindow.length) {
            $('.lw-messenger-chat-window').scrollTop($('.lw-messenger-chat-window')[0].scrollHeight);
        }
        $(window).resize();
    },500);
    });
</script>