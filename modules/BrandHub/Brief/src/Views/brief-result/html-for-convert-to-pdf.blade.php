<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Brand-hub - Создаем бренды онлайн | BrandHub - первый онлайн сервис брендинга</title>
    <meta data-n-head="ssr" charset="utf-8">
</head>
<style>
    body {
        font-family: DejaVu Sans, serif
    }
</style>
<body>

<div class="wrapper wrapper_fixed">
    <div >
        <div>
            <div>
                <div><strong>Тип заказа</strong></div>
                <div>@if($business->type === 'product') Для товаров @else Для услуг @endif</div>

                <br>
                <br>
                <br>

                <div><strong>Информация о компании</strong></div>
                <div>
                    <div>
                        {{ $business->activity }}
                    </div>
                </div>

                <br>
                <br>

                <div><strong>Особенности компании которые выбрал клиент</strong></div>
                <div>
                    @foreach($business->advantages as $advantage)
                        <br>
                        <label>
                            <img src="{{ public_path($advantage->iconPath) }}" alt="">
                            <div>{{ $advantage->title }}</div>
                            <div>{{ $advantage->body }}</div>
                        </label>
                    @endforeach
                </div>

                <br>
                <br>

                @if($business->description !== null)
                    <div><strong>Про бизнесс клиента</strong></div>
                    {{ $business->description }}
                    <br>
                    <br>
                @endif

                @if($business->type === 'service')
                    <div><strong>Ассоциации и эмоции</strong></div>
                    <div>
                        @foreach($serviceFlavor->references as $reference)
                            <div>
                                <img src="{{ public_path($reference->imagePath) }}" alt="" />
                            </div>
                            <br>
                        @endforeach
                    </div>
                    <br>
                    <div>
                        {{ $serviceFlavor->emotionInFreeForm }}
                    </div>

                    @if($serviceFlavor->preferredDesigns !== [])
                        <br>
                        <br>
                        <div><strong>Дизайны которые нравятся клиенту</strong></div>
                        <div>
                            @foreach($serviceFlavor->preferredDesigns as $preferredDesign)
                                {{ $preferredDesign->link }}
                                <br>
                            @endforeach
                        </div>
                    @endif
                @endif

                @if($business->type === 'product')
                    <div><strong>Ассоциации и эмоции</strong></div>
                    <div>
                        @foreach($productFlavor->referencesWithEmotions as $referenceWithEmotions)
                            <br>
                            <div>
                                <div><img src="{{ public_path($referenceWithEmotions->reference->imagePath) }}" alt=""></div>
                                <div>
                                    @foreach($referenceWithEmotions->emotions as $emotion)
                                        <label>
                                            <span>{{ $emotion->name }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>

                    @if($productFlavor->preferredDesigns !== [])
                        <br>
                        <br>
                        <div><strong>Дизайны которые нравятся клиенту</strong></div>
                        <div>
                            @foreach($productFlavor->preferredDesigns as $preferredDesign)
                                {{ $preferredDesign->link }}
                                <br>
                            @endforeach
                        </div>
                    @endif
                @endif
            </div>

            <br>
            <br>
            <br>

            <div>
                <div><strong>Контакты клиента</strong></div>
                <div>
                    ФИО: {{ $customer->name }}
                    <br>
                    Телефон: {{ $customer->phone }}
                    <br>
                    Email: {{ $customer->email }}
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
