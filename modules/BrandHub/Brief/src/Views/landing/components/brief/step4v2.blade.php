<div class="start-sect__step" id="step-4">
    <div class="start-sect__step-desc">Итог</div>
    <div class="start-sect__step-title">Ура! Бриф завершен!</div>
    <div class="start-sect__step-text">Больше не будет сложных форм и вопросов.<br>Мы выбрали для вас один из пакетов наших услуг. Готовы приступить к работе.</div>
    <div class="end-dialog__subtitle">Напишите ваши контакты, чтобы мы вас не потеряли</div>
    <div class="end-dialog__inputs">
        <input class="form__input end-dialog__input" id="name-input" onkeyup="step4IsNameValidAndShowResult(event.target.value, 'name-input')" type="text" placeholder="Иванов Иван Иванович" required>
        <input class="form__input end-dialog__input" id="phone-input" onkeyup="step4IsPhoneValidAndShowResult(event.target.value, 'phone-input')" type="text" name="phone" placeholder="+7 777 777 77 77" required>
        <input class="form__input end-dialog__input" id="email-input" onkeyup="step4IsEmailValidAndShowResult(event.target.value)" type="email" placeholder="example@example.com" required>
    </div>
    <div class="start-sect__footer">
        <div class="start-sect__persons">
            <label class="start-sect__person">
                <div class="start-sect__person-text">Нажимая на кнопку, я соглашаюсь <br>с <a href="/files/policy.pdf" target="_blank" data-ym-goal="form-personal-policy-click">обработкой персональных данных</a></div>
            </label>
        </div>
        <div class="end-dialog__btns">
            <a href="#thanks-dialog" class="def-btn end-dialog__submit" type="submit" onclick="event.preventDefault(); step4SubmitBrandWizardForm();" data-ym-goal="form-callback-success">
                <span>Отправить заявку</span>
            </a>
        </div>
        <div class="start-sect__ecolumn"></div>
    </div>
    <div class="thanks-dialog zoom-anim-dialog mfp-hide" id="thanks-dialog">
        <div class="thanks-dialog__container">
            <div class="thanks-dialog__title">Спасибо за обращение!</div>
            <div class="thanks-dialog__text">Наш консультант вам перезвонит в самое ближайшее время.</div>
            <button class="def-btn thanks-dialog__submit "><span>Хорошо</span></button>
        </div>
    </div>
</div>

@push('scripts')
<script>
    const step4Start = () => {
        $('#step-4').stop().slideDown(300);
        scrollTo('#step-4');
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
                name: $('#name-input').val().trim(),
                phone: $('#phone-input').val().trim(),
                email: $('#email-input').val().trim(),
            },
            cache: false,
            dataType: 'json',
            success: (response) => {
                $('.end-dialog__submit').magnificPopup({
                    type: 'inline',
                    fixedContentPos: false,
                    fixedBgPos: true,
                    overflowY: 'auto',
                    closeBtnInside: true,
                    preloader: false,
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in',
                    callbacks: {
                        close: () => {
                            step4Reset();
                            step3Reset();
                            step2Reset();
                            step1Reset();

                            scrollTo('#end-of-step-1');

                            return true;
                        }
                    }
                }).magnificPopup('open');
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
            success: (response) => $.magnificPopup.close(),
            error: (xhr, str) => {
                console.error(xhr.responseJSON);
            }
        });
    };

    const step4Reset = () => $('#step-4').stop().slideUp(300);

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

    $('.thanks-dialog__submit').click(function (e) {
        $(this).magnificPopup('close');
    });
</script>
@endpush
