<div class="start-sect__step" id="step-4">
    <div class="start-sect__step-desc">Итог</div>
    <div class="start-sect__step-title">Спасибо! Это и было ТЗ!</div>
    <div class="start-sect__step-text">Больше не будет сложных форм и вопросов. <br>Мы выбрали для вас один из пакетов наших услуг. <br>Готовы приступить к работе.</div>
    <div class="end-dialog__packs">
        <div class="end-dialog__packs-error">
            <div class="start-sect__step-title">Ой, кажется вы забыли выбрать пакет</div>
        </div>
    </div>
    <div class="end-dialog__subtitle">Напишите ваши контакты, чтобы мы вас не потеряли</div>
    <div class="end-dialog__inputs">
        <input
            class="form__input end-dialog__input"
            onkeyup="step4IsNameValidAndShowResult(event.target.value, 'name-input')"
            id="name-input"
            type="text"
            placeholder="Иванов Иван Иванович"
            required
        >
        <input
            class="form__input end-dialog__input"
            onkeyup="step4IsPhoneValidAndShowResult(event.target.value, 'phone-input')"
            id="phone-input"
            type="text"
            name="phone"
            placeholder="+7 777 777 77 77"
            required
        >
        <input
            class="form__input end-dialog__input"
            onkeyup="step4IsEmailValidAndShowResult(event.target.value)"
            id="email-input"
            type="email"
            placeholder="example@example.com"
            required
        >
    </div>
    <div class="start-sect__footer">
        <div class="start-sect__persons">
            <label style="display:none;" class="start-sect__person">
                <input type="checkbox" required>
                <div class="start-sect__person-check"></div>
                <div class="start-sect__person-text">Согласен с обработкой персональных данных</div>
            </label>
            <label style="display:none;" class="start-sect__person">
                <input type="checkbox" required>
                <div class="start-sect__person-check"></div>
                <div class="start-sect__person-text">Согласен с пользовательским соглашением</div>
            </label>
            <label style="display:none;" class="start-sect__person">
                <input type="checkbox" required>
                <div class="start-sect__person-check"></div>
                <div class="start-sect__person-text">Согласен с офертой</div>
            </label>
        </div>
        <div class="end-dialog__btns">
            <button class="def-btn end-dialog__submit" style="display:none;" type="submit" data-ym-goal="brief-checkout-click-online-payment">
                <span>Оплата картой</span>
            </button>
            <a
                onclick="event.preventDefault(); step4SubmitBrandWizardForm();"
                class="def-btn def-btn_second end-dialog__payment cursor-pointer"
                type="submit"
                href="#thanks-dialog2"
                data-ym-goal="brief-checkout-click-payment-bill"
            >
                <span>Оплата по расчетному счету</span>
            </a>
        </div>
        <div class="start-sect__call">
            <a class="popup-with-zoom-anim" name="order" href="#lead-dialog1" data-ym-goal="form-callback-click-start">Оставить заявку на консультацию</a><br>
            <p>Не бойтесь, мы сохраним все ваши данные.<br>Заново заполнять не придется</p>
        </div>
        <div class="thanks-dialog zoom-anim-dialog mfp-hide" id="thanks-dialog2">
            <div class="thanks-dialog__container">
                <div class="thanks-dialog__title">Спасибо!<br>В ближайшее время пришлем вам на почту договор.</div>
                <div class="thanks-dialog__text">После оплаты с вами свяжется менеджер и назначит онлайн-встречу с арт-директором проекта.</div>
                <button class="def-btn thanks-dialog__submit "><span>Спасибо</span></button>
            </div>
        </div>
        <div class="lead-dialog zoom-anim-dialog mfp-hide" id="lead-dialog1">
            <div class="lead-dialog__container">
                <div class="lead-dialog__text">
                    <div class="def-title lead-dialog__title">Поможем и расскажем!</div>
                    <p>Если у вас есть вопросы о формате работы нашего сервиса, или испытываете трудность в прохождении смарт-брифа, оставьте свой номер - мы позвоним, чтобы ответить на все ваши вопросы.</p>
                </div>
                <div class="lead-dialog__form">
                    <input
                        class="form__input lead-dialog__input"
                        id="step4-name-lead"
                        type="text"
                        placeholder="Иванов Иван Иванович"
                        onkeyup="step4IsNameValidAndShowResult(event.target.value, 'step4-name-lead')"
                    />
                    <input
                        class="form__input lead-dialog__input"
                        id="step4-phone-lead"
                        type="text"
                        name="phone"
                        placeholder="+7 777 777 77 77"
                        onkeyup="step4IsPhoneValidAndShowResult(event.target.value, 'step4-phone-lead')"
                    />
                    <button class="def-btn lead-dialog__submit" href="thanks-dialog3" onclick="step4SubmitConsultationRequest()" data-ym-goal="form-callback-success">
                        <span>Отправить</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script id="template__offer" type="text/html">
    <div class="end-dialog__pack {active}" data-id="{id}" onclick="step4SelectOffer('{id}')" data-ym-goal="{ymGoalKey}">
        <input type="checkbox" checked="{isChecked}" />
        <div class="end-dialog__pack-title">{title}</div>
        {includes}
        <div class="end-dialog__pack-price"><strong>{price}₽</strong>/ {time}</div>
    </div>
</script>
<script>
    const step4Start = async () => {
        const $offersContainer = $('.end-dialog__packs');

        if ($offersContainer.find('.end-dialog__pack').length > 0) {
            scrollTo('#step-4');

            return;
        }

        const offers = await getOffers(step1GetBusinessType());
        offers.forEach((offer, index) => {
            const offerView = $('#template__offer').html()
                .replace(/{id}/g, offer.id)
                .replace(/{title}/g, offer.title)
                .replace(/{includes}/g, offer.includes)
                .replace(/{price}/g, offer.price)
                .replace(/{time}/g, offer.time)
                .replace(/{ymGoalKey}/g, offer.ymGoalKey)
                .replace(/{isChecked}/g, index === 0)
                .replace(/{active}/g, index === 0 ? 'active' : '');

            $offersContainer.append(offerView);
        });

        $('#step-4').stop().slideDown(300);
        scrollTo('#step-4');
    };

    const getOffers = async (businessType) => {
        const response = await $.ajax({
            type: 'GET',
            url: '/api/v1/offers',
            data: {business_type: businessType},
            cache: false,
            dataType: 'json',
            error: (xhr, str) => {
                console.error(xhr.responseJSON);
            }
        });

        return response.offers;
    };

    const step4SubmitBrandWizardForm = async () => {
        const isNameValid = step4IsNameValidAndShowResult($('#name-input').val(), 'name-input');
        const isPhoneValid = step4IsPhoneValidAndShowResult($('#phone-input').val(), 'phone-input');
        const isEmailValid = step4IsEmailValidAndShowResult($('#email-input').val());

        if (!isNameValid || !isPhoneValid || !isEmailValid) {
            return;
        }

        if (!step2IsValidAndShowErrors()) {
            return;
        }

        if (!await step3IsValidAndShowError()) {
            return;
        }

        step3HideError(step1GetBusinessType());

        await $.ajax({
            type: 'POST',
            url: '/api/v1/brief',
            data: {
                business_type: step1GetBusinessType(),
                selected_references_ids: step1GetSelectedReferencesIds(),
                business_activity: step2GetBusinessActivity(),
                selected_advantages_ids: step2GetSelectedAdvantagesIds(),
                business_description: step2GetBusinessDescription(),
                preferred_design_links: step2GetPreferredDesignLinks(),
                emotions_ids_for_product_references: step3GetEmotionsIdsForEveryProductReference(),
                text_emotions_for_service_references: step3GetTextEmotionsForServiceReferences(),
                selected_offer_id: step4GetSelectedOfferId(),
                name: $('#name-input').val().trim(),
                phone: $('#phone-input').val().trim(),
                email: $('#email-input').val().trim(),
            },
            cache: false,
            dataType: 'json',
            success: (response) => {
                $('.end-dialog__payment').magnificPopup({
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
                $('.end-dialog__payment').hide();
                $('.start-sect__call').hide();
            },
            error: (xhr, str) => {
                console.error(xhr.responseJSON);
            }
        });
    };

    const step4SubmitConsultationRequest = async () => {
        const isNameValid = step4IsNameValidAndShowResult($('#step4-name-lead').val(), 'step4-name-lead');
        const isPhoneValid = step4IsPhoneValidAndShowResult($('#step4-phone-lead').val(), 'step4-phone-lead');

        if (!isNameValid || !isPhoneValid) {
            return;
        }

        await $.ajax({
            type: 'POST',
            url: '/api/v1/consultation',
            data: {
                name: $('#step4-name-lead').val().trim(),
                phone: $('#step4-phone-lead').val().trim(),
            },
            cache: false,
            dataType: 'json',
            success: (response) => $('.lead-dialog__submit').magnificPopup('close'),
            error: (xhr, str) => {
                console.error(xhr.responseJSON);
            }
        });
    };

    const step4Reset = () => {
        $('.end-dialog__packs').find('.end-dialog__pack').remove();
        $('#step-4').stop().slideUp(300);
    };

    const step4GetSelectedOfferId = () => $('.end-dialog__pack.active').data('id');

    const step4SelectOffer = (id) => {
        const $offerCard = $(`.end-dialog__pack[data-id="${id}"]`);

        if ($offerCard.hasClass('active')) {
            return;
        }

        $('.end-dialog__pack').removeClass('active');
        $('.end-dialog__pack > input').prop('checked', false);
        $offerCard.addClass('active');
        $offerCard.find('input').prop('checked', true);
    };

    $('.end-dialog__btns').on('click', '.def-btn', function (e) {
        var sw = false;
        $('.end-dialog__pack input').each(function () {
            if ($(this).is(':checked')) {
                sw = true;
                return false;
            }
        });

        if (!sw) {
            $('.end-dialog__pack').addClass('error');
            $('.end-dialog__packs-error').addClass('active');
            e.preventDefault();
        }
    });

    $('input[name="phone"]').inputmask({
        'mask': '+7 999 999 99 99',
        'autoUnmask': true,
    });

    const step4IsNameValidAndShowResult = (value, id) => {
        const $input = $('#' + id);

        if (value.length === 0) {
            $input.removeClass('enter').addClass('error');

            return false;
        }

        $input.removeClass('error').addClass('enter');

        return true;
    };

    const step4IsPhoneValidAndShowResult = (value, id) => {
        const $input = $('#' + id);

        if (value.length !== 10) {
            $input.removeClass('enter').addClass('error');

            return false;
        }

        $input.removeClass('error').addClass('enter');

        return true;
    };

    const step4IsEmailValidAndShowResult = (value) => {
        const $input = $('#email-input');
        const pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\ [[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if (!pattern.test(String(value).toLowerCase())) {
            $input.removeClass('enter').addClass('error');

            return false;
        }

        $input.removeClass('error').addClass('enter');

        return true;
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

    $('.thanks-dialog__submit').click(function (e) {
        $(this).magnificPopup('close');
    });
</script>
@endpush
