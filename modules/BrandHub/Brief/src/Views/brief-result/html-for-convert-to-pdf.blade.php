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
                @if($offer !== null)
                    <div><strong>Тариф который выбрал клиент</strong></div>
                    <div>
                        <div>
                            @if($offer->id->toString() === '179b3355-a00b-4e1e-b66f-8a307b593756')
                            <div>Брендинг + фирменный стиль</div>
                            <ul>
                                <li>Определение территории позиционирования</li>
                                <li>Логотип</li>
                                <li>Дизайн упаковки<span>*от пакета молока до этикеток крафтового пива</span></li>
                            </ul>
                            @elseif($offer->id->toString() === 'adcfc1db-c578-4d4a-9d0d-8f1ff4217699')
                                <div>Брендинг + дизайн упаковки</div>
                                <ul>
                                    <li>Определение территории позиционирования</li>
                                    <li>Логотип</li>
                                    <li>Дизайн упаковки<span>*от пакета молока до этикеток крафтового пива</span></li>
                                </ul>
                            @elseif($offer->id->toString() === 'e748f9a5-7683-4d5d-ae6a-344df08958e4' || $offer->id->toString() === '4a69a458-c846-403c-9133-2c594cfeea0e')
                                <div>Стартап</div>
                                <ul>
                                    <li>Логотип</li>
                                    <li>Фирменный стиль</li>
                                </ul>
                            @endif
                            <div>{{ $offer->price }}₽/ {{ $offer->time }}</div>
                        </div>
                    </div>

                    <br>
                    <br>
                    <br>
                @endif

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
