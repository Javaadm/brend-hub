<div class="start-sect__step" id="step-2">
    <div class="start-sect__step-desc">Шаг 2</div>
    <div class="start-sect__step-title">Информация о вашей компании</div>
    <div class="start-sect__step-text">На этом шаге необходимо понять, что у вас за бизнес. <br>Укажите, чем занимается ваша компания.</div>
    <div class="start-sect__labels">
        <div class="start-sect__error start-sect__step-2-input-error" style="text-align: left;margin-bottom: 14px;"></div>
        <input
            class="start-sect__labels-input"
            name="business_activity"
            onkeyup="step2ReassignBusinessActivityLabel(event.target.value.trim())"
            type="text"
            placeholder="Фабрика окон"
        >
        <div class="start-sect__labels-items">
            <div class="start-sect__labels-item cursor-pointer" onclick="step2SelectBusinessActivity('Салон красоты')" data-value="Салон красоты">Салон красоты</div>
            <div class="start-sect__labels-item cursor-pointer" onclick="step2SelectBusinessActivity('Косметика')" data-value="Косметика">Косметика</div>
            <div class="start-sect__labels-item cursor-pointer" onclick="step2SelectBusinessActivity('Кофейня')" data-value="Кофейня">Кофейня</div>
            <div class="start-sect__labels-item cursor-pointer" onclick="step2SelectBusinessActivity('Кальянная')" data-value="Кальянная">Кальянная</div>
            <div class="start-sect__labels-item cursor-pointer" onclick="step2SelectBusinessActivity('Пиццерия')" data-value="Пиццерия">Пиццерия</div>
            <div class="start-sect__labels-item cursor-pointer" onclick="step2SelectBusinessActivity('Стоматология')" data-value="Стоматология">Стоматология</div>
            <div class="start-sect__labels-item cursor-pointer" onclick="step2SelectBusinessActivity('Медицинский центр')" data-value="Медицинский центр">Медицинский центр</div>
        </div>
    </div>
    <div class="start-sect__step-title">Особенности компании</div>
    <div class="start-sect__step-text">Выберите одну или несколько карточек уникальных свойств вашего бренда, это необходимо для создания платформы бренда.</div>
    <div class="start-sect__error start-sect__step-2-cards-error" style="text-align: left;"></div>
    <div class="start-sect__dess">
        @foreach($advantages as $advantage)
            <label class="start-sect__des">
                <input type="checkbox" name="advantage" value="{{ $advantage->id }}" data-ym-goal="{{ $advantage->ymGoalKey }}">
                <div class="start-sect__des-bd"></div><img class="start-sect__des-icon" src="{{ $advantage->iconPath }}" alt="">
                <div class="start-sect__des-check"><img src="img/icons/check2.svg" alt=""></div>
                <div class="start-sect__des-title">{{ $advantage->title }}</div>
                <div class="start-sect__des-text">{{ $advantage->body }}</div>
            </label>
        @endforeach
    </div>
    <div class="start-sect__step-title">Расскажите о вашем бизнесе</div>
    <textarea class="textarea__input" name="business_description" type="text" placeholder="Описание преимуществ продукта/бизнеса(УТП)"></textarea>

    <div class="start-sect__step-title">Какие дизайны вам нравятся?</div>
    <div class="start-sect__urls">
        <input class="start-sect__url form__input" name="preferred_design_link" type="url" placeholder="https://brand-hub.ru/projects/sleco/" />
    </div>
    <a class="start-sect__add-url cursor-pointer" onclick="step2AddUrlWithPreferredDesign()" data-ym-goal="brief-company-details-click-addlink">
        Добавить еще одну ссылку
    </a>
    <div class="start-sect__step-next">
        <button class="def-btn" onclick="step2NextStep()" data-ym-goal="brief-company-details-click-to-emotions">
            <span>Далее</span>
        </button>
    </div>
    <div id="end-of-step-2"></div>
</div>

@push('scripts')
<script id="url-input-template" type="text/html">
    <div><input class="start-sect__url form__input" name="preferred_design_link" type="url" placeholder="https://example.com"/></div>
</script>
<script>
    const step2Start = () => {
        $('#step-2').addClass('active');
        scrollTo('#end-of-step-1');
    };

    const step2SelectBusinessActivity = (businessActivityName) => {
        step2HideInputError();

        const $label = $(`.start-sect__labels-item[data-value="${businessActivityName}"]`);

        if ($label.hasClass('active')) {
            return;
        }

        const $businessActivityInput = $('.start-sect__labels-input');
        $businessActivityInput.val(businessActivityName);
        $businessActivityInput.trigger('input');

        $('.start-sect__labels-item').removeClass('active');
        $label.addClass('active');
    };

    const step2ShowInputError = (text) => {
        const $businessActivityInput = $('.start-sect__labels-input');
        $businessActivityInput.addClass('error');
        $('.start-sect__step-2-input-error').html(text).show();
    };

    const step2HideInputError = () => {
        const $businessActivityInput = $('.start-sect__labels-input');
        $businessActivityInput.removeClass('error');
        $('.start-sect__step-2-input-error').html('').slideUp(300);
    };

    const step2ShowCardsError = (text) => $('.start-sect__step-2-cards-error').html(text).show();

    const step2HideCardsError = () => $('.start-sect__step-2-cards-error').html('').slideUp(300);

    const step2ReassignBusinessActivityLabel = (inputValue) => {
        step2HideInputError();

        const $labels = $('.start-sect__labels-item');
        $labels.removeClass('active');
        $labels.each(async (key, element) => $(element).data('value') === inputValue && $(element).addClass('active'));
    };

    const step2AddUrlWithPreferredDesign = () => $('.start-sect__urls').append($('#url-input-template').html());

    const step2NextStep = async () => {
        if (!step2IsValidAndShowErrors()) {
            return;
        }

        step2HideCardsError();

        if (await step1GetSelectedReferencesCount(step1GetBusinessType()) < 2) {
            step1ShowError('Выберите хотя бы 2 варианта');
            step3Reset();
            step4Reset();
            return;
        }

        step3Start();
    };

    const step2GetBusinessActivity = () => $('input[name="business_activity"]').val().trim();

    const step2GetSelectedAdvantagesIds = () => {
        const selectedAdvantagesIds = [];

        $('.start-sect__dess')
            .find('input[name="advantage"]')
            .each(async (key, element) => $(element).is(':checked') && selectedAdvantagesIds.push($(element).val()));

        return selectedAdvantagesIds;
    };

    const step2GetBusinessDescription = () => $('textarea[name="business_description"]').val().trim();

    const step2GetPreferredDesignLinks = () => {
        const preferredDesignLinks = [];

        $('.start-sect__urls')
            .find('input[name="preferred_design_link"]')
            .each(async (key, element) =>
                $(element).val().trim().length > 0
                && preferredDesignLinks.push($(element).val().trim())
            );

        return preferredDesignLinks;
    };

    const step2IsValidAndShowErrors = () => {
        const isValidBusinessActivity = $('.start-sect__labels-input').val().trim().length > 0;

        if (!isValidBusinessActivity) {
            step2ShowInputError('Заполните поле');
            scrollTo('#step-2');
            $('.start-sect__labels-input').focus();
        }

        let selectedAdvantagesCount = 0;
        $('.start-sect__des input').each(async (key, element) => $(element).is(':checked') && selectedAdvantagesCount++);

        const isValidCardsCount = selectedAdvantagesCount > 0;

        if (!isValidCardsCount) {
            step2ShowCardsError('Выберите хотя бы 1 особенность');
        }

        if (isValidBusinessActivity && !isValidCardsCount) {
            scrollTo('.start-sect__labels-items');
        }

        return isValidBusinessActivity && isValidCardsCount;
    };
</script>
@endpush
