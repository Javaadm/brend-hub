<div class="start-sect__step start-sect__step-3" data-business-type="product">
    <div class="start-sect__step-desc">Шаг 3</div>
    <div class="start-sect__step-title">Ассоциации и эмоции</div>
    <div class="start-sect__step-text start-sect__step-text_big">Это заключительный шаг на вашем пути построения бренда. Поделитесь своими ассоциациями и эмоциями к выбранным картинкам из первого шага.</div>
    <div class="start-sect__error start-sect__step-3-error" style="text-align: left;"></div>
    <div class="start-sect__pref-emotions">

    </div>
    <div class="start-sect__step-next">
        <button class="def-btn" onclick="step3NextStep('product')" data-ym-goal="brief-emotions-package-click-to-checkout">
            <span>Далее</span>
        </button>
    </div>
</div>
<div class="start-sect__step start-sect__step-3" data-business-type="service">
    <div class="start-sect__step-desc">Шаг 3</div>
    <div class="start-sect__step-title">Ассоциации и эмоции</div>
    <div class="start-sect__step-text start-sect__step-text_big">Это заключительный шаг на вашем пути построения бренда, поделитесь в свободной форме своими ассоциациями и эмоциями к выбранным кейсам из первого шага.</div>
    <div class="start-sect__checks start-sect__checks_items">

    </div>
    <div class="start-sect__error start-sect__step-3-error" style="text-align: left;margin-bottom: 12px;"></div>
    <div class="start-sect__emotions">
        <input onkeyup="step3HideError('service')" class="form__input start-sect__step-moment start-sect__step-moment-2" name="text_emotions" type="text" placeholder="Дорогой, лакончиный, добрый">
    </div>
    <div class="start-sect__step-next">
        <button class="def-btn" onclick="step3NextStep('service')" data-ym-goal="brief-emotions-services-click-to-checkout">
            <span>Далее</span>
        </button>
    </div>
</div>

@push('scripts')
<script id="template__emotion-label" type="text/html">
    <label class="start-sect__tag">
        <input type="checkbox" name="emotion" data-reference-id="{referenceId}" value="{id}" data-ym-goal="brief-emotions-add-tag">
        <div class="start-sect__tag-bg"></div>
        <span>{name}</span>
    </label>
</script>
<script id="template__product-reference" type="text/html">
    <div class="start-sect__select start-sect__select__step_3 active" data-id="{id}" style="margin-bottom: 50px;">
        <div class="start-sect__check">
            <img class="start-sect__check-bg" src="{imagePath}" alt="" />
        </div>
        <div class="start-sect__tags">{emotionsLabels}</div>
    </div>
</script>
<script id="template__service-reference" type="text/html">
    <div class="start-sect__check start-sect__check__step_3 active" data-id="{id}">
        <img class="start-sect__check-bg  " src="{imagePath}" alt="" />
    </div>
</script>
<script>
    const step3Start = () => {
        const businessType = step1GetBusinessType();
        $(`.start-sect__step-3[data-business-type="${businessType}"]`).stop().slideDown(300);

        scrollTo('#end-of-step-2');
    };

    const step3AppendServiceReference = (id, imagePath) => {
        const $container = $('.start-sect__step-3[data-business-type="service"]').find('.start-sect__checks_items');
        const referenceElement = $('#template__service-reference').html()
            .replace(/{id}/g, id)
            .replace(/{imagePath}/g, imagePath);

        $container.append(referenceElement);
    };

    const step3AppendProductReference = async (id, imagePath) => {
        const $container = $('.start-sect__step-3[data-business-type="product"]').find('.start-sect__pref-emotions');
        const emotionsLabels = await step3GetEmotionsLabelsHtml(id);
        const referenceElement = $('#template__product-reference').html()
            .replace(/{id}/g, id)
            .replace(/{imagePath}/g, imagePath)
            .replace(/{emotionsLabels}/g, emotionsLabels);

        $container.append(referenceElement);
    };

    const step3GetEmotionsLabelsHtml = async (productReferenceId) => {
        const emotions = await getEmotions();
        let emotionsLabels = '';

        emotions.forEach((emotion) => {
            const emotionLabel = $('#template__emotion-label').html()
                .replace(/{referenceId}/g, productReferenceId)
                .replace(/{id}/g, emotion.id)
                .replace(/{name}/g, emotion.name);

            emotionsLabels = emotionsLabels + emotionLabel;
        });

        return emotionsLabels;
    };

    const step3ShowError = (text, businessType) => {
        const $errorContainer = $('.start-sect__step-3-error');

        if (businessType === 'service') {
            $errorContainer.html(text).slideDown(300);
            $('.start-sect__emotions > input').addClass('error');

            return;
        }

        $errorContainer.html(text).show();
        scrollTo(`.start-sect__step-3[data-business-type="${businessType}"]`);
    };

    const step3HideError = (businessType) => {
        const $errorContainer = $('.start-sect__step-3-error');

        if (businessType === 'service') {
            $errorContainer.html('').slideUp(300);
            $('.start-sect__emotions > input').removeClass('error');

            return;
        }

        $errorContainer.html('').hide();
    };

    const step3RemoveProductReference = (id) => {
        const $container = $('.start-sect__step-3[data-business-type="product"]').find('.start-sect__pref-emotions');
        $container.find(`.start-sect__select__step_3[data-id="${id}"]`).remove();
    };

    const step3RemoveServiceReference = (id) => {
        const $container = $('.start-sect__step-3[data-business-type="service"]').find('.start-sect__checks_items');
        $container.find(`.start-sect__check__step_3[data-id="${id}"]`).remove();
    };

    const getEmotions = async () => {
        const response = await $.ajax({
            type: 'GET',
            url: '/api/v1/emotions',
            cache: false,
            dataType: 'json',
            error: (xhr, str) => {
                console.error(xhr.responseJSON);
            }
        });

        return response.emotions;
    };

    const step3GetSelectedLabelsCountForProductReference = async (productReferenceId) => {
        const $container = $('.start-sect__step-3[data-business-type="product"]').find('.start-sect__pref-emotions');
        const $labels = $container
            .find(`.start-sect__select__step_3[data-id="${productReferenceId}"] > .start-sect__tags`)
            .find('.start-sect__tag > input');

        let selectedLabelsCount = 0;
        $labels.each(async (key, element) => $(element).is(':checked') && selectedLabelsCount++);

        return selectedLabelsCount;
    };

    const step3NextStep = async (businessType) => {
        if (!await step3IsValidAndShowError()) {
            return;
        }

        step3HideError(businessType);

        await step4Start();
    };

    const step3IsValidAndShowError = async () => {
        const businessType = step1GetBusinessType();

        if (businessType === 'product' && !await step3IsEveryProductReferenceHasEnoughSelectedLabels(2)) {
            step3ShowError('Выберите хотя бы по 2 ассоциации для каждого дизайна', businessType);

            return false;
        }

        if (businessType === 'service' && $('.start-sect__emotions > input').val().length === 0) {
            step3ShowError('Заполните поле', businessType);

            return false;
        }

        return true;
    };

    const step3IsEveryProductReferenceHasEnoughSelectedLabels = async (minSelectedLabelsCount) => {
        const $selectedProductReferences = $('.start-sect__step-3[data-business-type="product"]')
            .find('.start-sect__pref-emotions')
            .find('.start-sect__select__step_3');

        let hasEnoughSelectedLabels = true;

        await $selectedProductReferences.each(async (key, element) => {
            const selectedLabelsCount = await step3GetSelectedLabelsCountForProductReference($(element).data('id'));

            if (selectedLabelsCount < minSelectedLabelsCount) {
                hasEnoughSelectedLabels = false;
            }
        });

        return hasEnoughSelectedLabels;
    };

    const step3Reset = () => {
        const $stepContainer = $('.start-sect__step-3');
        step3HideError('product');
        step3HideError('service');
        $stepContainer.hide();
        $stepContainer.find('.start-sect__pref-emotions').html('');
        $stepContainer.find('.start-sect__checks').html('');
    };

    const step3GetEmotionsIdsForEveryProductReference = () => {
        const emotionsIdsForProductReferences = {};

        $('input[name="emotion"]').each((key, element) => {
            if (!$(element).is(':checked')) {
                return;
            }

            const referenceId = $(element).data('reference-id');
            const emotionId = $(element).val();

            if (emotionsIdsForProductReferences[referenceId] === undefined) {
                emotionsIdsForProductReferences[referenceId] = [];
            }

            emotionsIdsForProductReferences[referenceId].push(emotionId);
        });

        return emotionsIdsForProductReferences;
    };

    const step3GetTextEmotionsForServiceReferences = () => $('input[name="text_emotions"]').val().trim();
</script>
@endpush
