<div class="chat-buttons__container">
    <div class="chat-buttons">
        <a class="chat-buttons__button chat-buttons__button-green" style="display: none" href="https://api.whatsapp.com/send/?phone=79163254224&text&app_absent=0" target="_blank">
            <div class="chat-buttons__button-content">
                <div class="icon material-icons-outlined chat-buttons__img">
                    <img src="/img/icons/soc-2.svg" alt="">
                </div>
            </div>
        </a>

        <a class="chat-buttons__button chat-buttons__button-blue" style="display: none" href="https://t.me/brandhub21" target="_blank">
            <div class="chat-buttons__button-content">
                <div class="icon material-icons-outlined chat-buttons__img">
                    <img src="/img/icons/soc-1.svg">
                </div>
            </div>
        </a>

        <div class="chat-buttons__button chat-buttons__button-red" onclick="toggleChatButtons()">
            <div class="chat-buttons__button-content">
                <div class="icon material-icons-outlined chat-buttons__icon">chat_outlined</div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    const toggleChatButtons = () => {
        if ($('.chat-buttons__button-green').css('display') === 'none') {
            $('.chat-buttons__button-blue').fadeIn(200, () => $('.chat-buttons__button-green').fadeIn(200));
            $('.chat-buttons__button-red > .chat-buttons__button-content > .chat-buttons__icon')
                .text('close')
                .css('font-size', '30px')
                .css('height', '30px')
                .css('width', '30px');

            return;
        }

        $('.chat-buttons__button-green').fadeOut(200, () => $('.chat-buttons__button-blue').fadeOut(200));
        $('.chat-buttons__button-red > .chat-buttons__button-content > .chat-buttons__icon')
            .text('chat_outlined')
            .css('font-size', '26px')
            .css('height', '26px')
            .css('width', '26px');
    };
</script>
@endpush

@push('styles')
<style>
    .chat-buttons__img {
        width: 28px;
        height: 28px;
    }
    .chat-buttons__img > img {
        display: block;
    }
    .chat-buttons__icon {
        color: white;
        width: 26px;
        height: 26px;
        font-size: 26px;
    }
    .chat-buttons__container {
        position: fixed;
        bottom: 0;
        right: 0;
        z-index: 40;
    }
    .chat-buttons {
        display: flex;
        align-items: flex-end;
        flex-direction: column;
        padding-right: 1.2rem;
        padding-bottom: 1rem;
    }
    .chat-buttons__button-red {
        background-color: rgba(253,81,42);
    }
    .chat-buttons__button-green {
        background-color: rgba(14,203,110);
    }
    .chat-buttons__button-blue {
        background-color: rgba(0,104,255);
    }
    .chat-buttons__button-content {
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 99999px;
        transition: .15s cubic-bezier(.645,.045,.355,1);
        transition-duration: .15s;
    }
    .chat-buttons__button-content:hover {
        background-color: rgba(255, 255, 255, 0.1);
    }
    .chat-buttons__button {
        cursor: pointer;
        height: 4.5rem;
        width: 4.5rem;
        border-radius: 99999px;
        box-shadow: var(--tw-ring-offset-shadow,0 0 transparent),var(--tw-ring-shadow,0 0 transparent),var(--tw-shadow);
        --tw-shadow: inset 0 0 20px hsla(0,0%,100%,0.4);
        margin-bottom: 10px;
    }
</style>
@endpush
