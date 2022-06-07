<div class="steps-sect">
    <div class="steps-sect__container">
        <div class="def-title">Как мы работаем?</div>
        <div class="steps-sect__items">
            <div class="steps-sect__item">
                <div class="steps-sect__item-icons"><img src="img/icons/sicon-1.png" alt=""></div>
                <p>Собираем информацию от клиента и <strong>четко следим</strong> за выполнением работы дизайнеров, стратегов, копирайтеров</p>
            </div>
            <div class="steps-sect__item steps-sect__item_center">
                <p>Мы <strong>строго отбираем</strong> специалистов со <strong>всего мира</strong> и работаем только с <strong>самыми опытными</strong></p>
                <div class="steps-sect__item-footer">
                    <div class="steps-sect__item-item"><img src="img/icons/ficon-1.png" alt=""></div>
                    <div class="steps-sect__item-item"><img src="img/icons/ficon-2.png" alt=""></div>
                    <div class="steps-sect__item-item"><img src="img/icons/ficon-3.png" alt=""></div>
                    <div class="steps-sect__item-item"><img src="img/icons/ficon-4.png" alt=""></div>
                    <div class="steps-sect__item-item"><img src="img/icons/ficon-5.png" alt=""></div>
                    <div class="steps-sect__item-item">1500+<br><span>специалистов</span></div>
                </div>
            </div>
            <div class="steps-sect__item">
                <div class="steps-sect__item-icons"><img src="img/icons/sicon-2.png" alt=""><img src="img/icons/sicon-3.png" alt=""></div>
                <p>Выдаем <strong>классный результат</strong> в <strong>короткий срок</strong></p>
            </div>
        </div>
        <div class="steps-sect__footer"><img class="steps-sect__footer-bg" src="img/icons/stroke-2.svg" alt="">
            <div class="steps-sect__title">Ничего не понял!</div>
            <a class="def-btn popup-with-zoom-anim" href="#lead-dialog2" data-ym-goal="form-callback-click-start">
                <span>Хочу консультацию</span>
            </a>
        </div>
        <div class="thanks-dialog zoom-anim-dialog mfp-hide" id="thanks-dialog3">
            <div class="thanks-dialog__container">
                <div class="thanks-dialog__title">Спасибо за обращение!</div>
                <div class="thanks-dialog__text">Наш консультант вам перезвонит в самое ближайшее время.</div>
                <button class="def-btn thanks-dialog__submit "><span>Хорошо</span></button>
            </div>
        </div>
        <div class="lead-dialog zoom-anim-dialog mfp-hide" id="lead-dialog2">
            <div class="lead-dialog__container">
                <div class="lead-dialog__text">
                    <div class="def-title lead-dialog__title">Поможем и расскажем!</div>
                    <p>Если у вас есть вопросы о формате работы нашего сервиса, или испытываете трудность в прохождении смарт-брифа, оставьте свой номер - мы позвоним, чтобы ответить на все ваши вопросы.</p>
                </div>
                <div class="lead-dialog__form">
                    <input
                        class="form__input lead-dialog__input"
                        id="workflow-name-lead"
                        type="text"
                        placeholder="Иванов Иван Иванович"
                        onkeyup="step4IsNameValidAndShowResult(event.target.value, 'workflow-name-lead')"
                    />
                    <input
                        class="form__input lead-dialog__input"
                        id="workflow-phone-lead"
                        type="text"
                        name="phone"
                        placeholder="+7 777 777 77 77"
                        onkeyup="step4IsPhoneValidAndShowResult(event.target.value, 'workflow-phone-lead')"
                    />
                    <a class="def-btn lead-dialog__submit" href="#thanks-dialog" onclick="event.preventDefault(); submitContactMeForm();" data-ym-goal="form-callback-success">
                        <span>Отправить</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    const submitContactMeForm = async () => {
        const isNameValid = step4IsNameValidAndShowResult($('#workflow-name-lead').val(), 'workflow-name-lead');
        const isPhoneValid = step4IsPhoneValidAndShowResult($('#workflow-phone-lead').val(), 'workflow-phone-lead');

        if (!isNameValid || !isPhoneValid) {
            return;
        }

        await $.ajax({
            type: 'POST',
            url: '/api/v1/consultation',
            data: {
                name: $('#workflow-name-lead').val().trim(),
                phone: $('#workflow-phone-lead').val().trim(),
            },
            cache: false,
            dataType: 'json',
            success: (response) => {
                $('.lead-dialog__submit').magnificPopup({
                    type: 'inline',
                    fixedContentPos: false,
                    fixedBgPos: true,
                    overflowY: 'auto',
                    closeBtnInside: true,
                    preloader: false,
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                }).magnificPopup('open');
            },
            error: (xhr, str) => {
                console.error(xhr.responseJSON);
            }
        });
    };

    $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',
        fixedContentPos: false,
        fixedBgPos: true,
        overflowY: 'auto',
        closeBtnInside: true,
        preloader: false,
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
    });
</script>
@endpush
