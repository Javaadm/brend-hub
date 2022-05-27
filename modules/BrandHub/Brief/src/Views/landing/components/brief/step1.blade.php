<div class="start-sect__step active" id="step-1">
    <div class="start-sect__step-desc">Шаг 1</div>
    <div class="start-sect__step-title">Настроение и характер</div>
    <div class="start-sect__step-text">Отметьте понравившиеся варианты дизайна, <br>а мы подберём соответствующую команду</div>
    <div class="start-sect__tabs">
        <div class="start-sect__tab active cursor-pointer" data-business-type="product" onclick="step1SetBusinessType('product')" data-ym-goal="brief-mood-click-tab-for-packages">Для товаров</div>
        <div class="start-sect__tab last cursor-pointer" data-business-type="service" onclick="step1SetBusinessType('service')" data-ym-goal="brief-mood-click-tab-for-services">Для услуг</div>
    </div>
    <div class="start-sect__error start-sect__step-1-error"></div>
    <div class="start-sect__tabs-container active" data-business-type="product">
        <div class="start-sect__tcontent active" data-page="1">
            <div class="start-sect__checks">
                @foreach(array_slice($productReferences, 0, 9) as $reference)
                    <label class="start-sect__check">
                        <input onchange="step1HandleReferenceCheck('{{ $reference->id }}', 'product', 1)" type="checkbox" name="references" value="{{ $reference->id }}" data-ym-goal="{{ $reference->ymGoalKey }}">
                        <img class="start-sect__check-bg" src="{{ $reference->imagePath }}" alt="">
                        <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                    </label>
                @endforeach
            </div>
            <div class="start-sect__pag">
                <div class="icon material-icons-outlined disabled">chevron_left</div>
                <span class="start-sect__pag-numbers">1 / 2</span>
                <div class="icon material-icons-outlined cursor-pointer" onclick="step1NextPage('product')">chevron_right</div>
            </div>
            <div class="start-sect__step-next">
                <button class="def-btn" onclick="step1NextStep('product')" data-ym-goal="brief-mood-package-click-next">
                    <span>Далее</span>
                </button>
            </div>
        </div>
        <div class="start-sect__tcontent" data-page="2">
            <div class="start-sect__checks">
                @foreach(array_slice($productReferences, 9, 18) as $reference)
                    <label class="start-sect__check">
                        <input onchange="step1HandleReferenceCheck('{{ $reference->id }}', 'product', 2)" type="checkbox" name="references" value="{{ $reference->id }}" data-ym-goal="{{ $reference->ymGoalKey }}">
                        <img class="start-sect__check-bg" src="{{ $reference->imagePath }}" alt="">
                        <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                    </label>
                @endforeach
            </div>
            <div class="start-sect__pag">
                <div class="icon material-icons-outlined cursor-pointer" onclick="step1PrevPage('product')">chevron_left</div>
                <span class="start-sect__pag-numbers">2 / 2</span>
                <div class="icon material-icons-outlined disabled">chevron_right</div>
            </div>
            <div class="start-sect__step-next">
                <button class="def-btn" onclick="step1NextStep('product')" data-ym-goal="brief-mood-package-click-to-company-details">
                    <span>Далее</span>
                </button>
            </div>
        </div>
    </div>
    <div class="start-sect__tabs-container" data-business-type="service">
        <div class="start-sect__tcontent active" data-page="1">
            <div class="start-sect__checks">
                @foreach(array_slice($serviceReferences, 0, 9) as $reference)
                    <label class="start-sect__check">
                        <input onchange="step1HandleReferenceCheck('{{ $reference->id }}', 'service', 1)" type="checkbox" name="references" value="{{ $reference->id }}" data-ym-goal="{{ $reference->ymGoalKey }}">
                        <img class="start-sect__check-bg" src="{{ $reference->imagePath }}" alt="">
                        <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                    </label>
                @endforeach
            </div>
            <div class="start-sect__pag">
                <div class="icon material-icons-outlined disabled">chevron_left</div>
                <span class="start-sect__pag-numbers">1 / 2</span>
                <div class="icon material-icons-outlined cursor-pointer" onclick="step1NextPage('service')">chevron_right</div>
            </div>
            <div class="start-sect__step-next">
                <button class="def-btn" onclick="step1NextStep('service')" data-ym-goal="brief-mood-services-click-next">
                    <span>Далее</span>
                </button>
            </div>
        </div>
        <div class="start-sect__tcontent" data-page="2">
            <div class="start-sect__checks">
                @foreach(array_slice($serviceReferences, 9, 18) as $reference)
                    <label class="start-sect__check">
                        <input onchange="step1HandleReferenceCheck('{{ $reference->id }}', 'service', 2)" type="checkbox" name="references" value="{{ $reference->id }}" data-ym-goal="{{ $reference->ymGoalKey }}">
                        <img class="start-sect__check-bg" src="{{ $reference->imagePath }}" alt="">
                        <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                    </label>
                @endforeach
            </div>
            <div class="start-sect__pag">
                <div class="icon material-icons-outlined cursor-pointer" onclick="step1PrevPage('service')">chevron_left</div>
                <span class="start-sect__pag-numbers">2 / 2</span>
                <div class="icon material-icons-outlined disabled">chevron_right</div>
            </div>
            <div class="start-sect__step-next">
                <button class="def-btn" onclick="step1NextStep('service')" data-ym-goal="brief-mood-services-click-to-company-details">
                    <span>Далее</span>
                </button>
            </div>
        </div>
    </div>
    <div id="end-of-step-1"></div>
</div>

@push('scripts')
<script>
    const step1NextStep = async (businessType) => {
        if (await step1GetSelectedReferencesCount(businessType) < 2) {
            step1ShowError('Выберите хотя бы 2 варианта');
            return;
        }

        $('.start-sect__stitle').css('display', 'none');

        step2Start();
    };

    const step1Reset = () => {
        $('.start-sect__stitle').css('display', 'block');

        step1HideError();
        step1UnselectReferences(step1GetBusinessType());
        step1SetBusinessType('product');
    };

    const step1NextPage = async (businessType) => {
        const currentPage = 1;
        const $container = $(`.start-sect__tabs-container[data-business-type="${businessType}"]`);

        $container.find(`.start-sect__tcontent[data-page="${currentPage}"]`).removeClass('active');
        $container.find(`.start-sect__tcontent[data-page="${currentPage + 1}"]`).addClass('active');

        scrollTo('.start-sect__tabs');
    };

    const step1PrevPage = (businessType) => {
        const currentPage = 2;
        const $container = $(`.start-sect__tabs-container[data-business-type="${businessType}"]`);

        $container.find(`.start-sect__tcontent[data-page="${currentPage}"]`).removeClass('active');
        $container.find(`.start-sect__tcontent[data-page="${currentPage - 1}"]`).addClass('active');

        scrollTo('.start-sect__tabs');
    };

    const step1GetSelectedReferencesCount = async (businessType) => {
        let selectedReferencesCount = 0;

        const $container = $(`.start-sect__tabs-container[data-business-type="${businessType}"]`);
        $container.find(`.start-sect__tcontent`)
            .find('.start-sect__check > input')
            .each(async (key, element) => $(element).is(':checked') && selectedReferencesCount++);

        return selectedReferencesCount;
    };

    const step1ShowError = (text) => {
        $('.start-sect__step-1-error').html(text).slideDown(300);
        scrollTo('.start-sect__tabs');
    };

    const step1HideError = () => $('.start-sect__step-1-error').html('').slideUp(300);

    const step1SetBusinessType = (businessType) => {
        const $tab = $(`.start-sect__tab[data-business-type="${businessType}"]`);

        if ($tab.hasClass('active')) {
            return;
        }

        step1HideError();
        step1UnselectReferences(businessType);
        step3Reset();
        step4Reset();

        $('.start-sect__tab').removeClass('active');
        $('.start-sect__tabs-container').removeClass('active');
        $tab.addClass('active');
        $(`.start-sect__tabs-container[data-business-type="${businessType}"]`).addClass('active');
    };

    const step1UnselectReferences = (businessType) => {
        $('.start-sect__check > input').each((key, el) => $(el).prop('checked', false));

        const $container = $(`.start-sect__tabs-container[data-business-type="${businessType}"]`);
        $container.find('.start-sect__tcontent[data-page="2"]').removeClass('active');
        $container.find('.start-sect__tcontent[data-page="1"]').addClass('active');
    };

    const step1HandleReferenceCheck = async (id, businessType, page) => {
        const $referenceCheckbox = $(`.start-sect__check > input[value="${id}"]`);

        if ($referenceCheckbox.is(':checked') && businessType === 'product') {
            step1HideError();
            step4Reset();
            await step3AppendProductReference(id, $referenceCheckbox.next().attr('src'));
            return;
        }

        if ($referenceCheckbox.is(':checked') && businessType === 'service') {
            step1HideError();
            step4Reset();
            step3AppendServiceReference(id, $referenceCheckbox.next().attr('src'));
            return;
        }

        if (businessType === 'product') {
            step3RemoveProductReference(id);
        }

        if (businessType === 'service') {
            step3RemoveServiceReference(id);
        }

        if (await step1GetSelectedReferencesCount(businessType) < 2) {
            step1ShowError('Выберите хотя бы 2 варианта');

            step3Reset();
            step4Reset();
        }
    };

    const step1GetBusinessType = () => $('.start-sect__tab.active').data('business-type');

    const step1GetSelectedReferencesIds = () => {
        const selectedReferencesIds = [];
        const $container = $(`.start-sect__tabs-container[data-business-type="${step1GetBusinessType()}"]`);

        $container.find(`.start-sect__tcontent`)
            .find('.start-sect__check > input')
            .each(async (key, element) => $(element).is(':checked') && selectedReferencesIds.push($(element).val()));

        return selectedReferencesIds;
    };

    const step1GetSelectedReferences = () => {
        const selectedReferencesIds = [];
        const $container = $(`.start-sect__tabs-container[data-business-type="${step1GetBusinessType()}"]`);

        $container.find(`.start-sect__tcontent`)
            .find('.start-sect__check > input')
            .each(
                async (key, element) => $(element).is(':checked') && selectedReferencesIds.push({
                    id: $(element).val(),
                    imagePath: $(element).next().attr('src')
                })
            );

        return selectedReferencesIds;
    };
</script>
@endpush
