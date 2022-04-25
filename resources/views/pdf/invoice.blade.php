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
    <!--=======================================================================================-->
    <!--=======================================================================================-->
    <!--=======================================================================================-->

    <!--=======================================================================================-->
    <div >
        <div>
            <div>
                <div>Шаг 1</div>
                <br> <br>
                <div>тип заказа: @if(session("type") == 1)Для товаров @else Для услуг @endif</div>

                <br><br><br>
                <div>Шаг 2</div>
                <br>
                <div>Информация о компании</div>
                <div>
                    <div>
                        {{ session("category_label") }}
                    </div>
                </div>

                <br>
                <br>

                <div>Особенности компании которые выбрал клиент</div>
                <div>
                    @foreach ( $dessArray as $des)
                        @if(session("dess")[$loop->index])
                            <br>
                            <label>
                                <img src="img/icons/dicon-{{ $loop->index+1 }}.png" alt="">
                                <div>{{ $des["title"] }}</div>
                                <div>{{ $des["body"] }}</div>
                            </label>
                        @endif
                    @endforeach
                </div>

                <br>
                <br>

                <div>Про бизнесс клиента</div>
                {{ session("moment_business") }}"

                <br>
                <br>

                <div>Дизайны которые нравятся клиенту</div>
                <div>
                    @if(session("urls"))
                        @foreach(session("urls") as $url)
                            {{ $url }}
                            <br>
                        @endforeach
                    @endif
                </div>
            </div>

            <br>
            <br>
            <br>

            @if(session("step") >= 3 and session("type")==1)
                <div>
                    <div>Шаг 3</div>
                    <div>Ассоциации и эмоции</div>
                    @foreach(session("images") as $key=>$image)
                        @if($image["isSelected"])
                            <br>
                            <div>
                                <div><img src="img/check-{{$loop->index+1}}.jpg" alt=""></div>
                                <div>
                                    @foreach($emotionsValue as $keyEmotion =>$emotionValue)
                                        @if(array_key_exists($keyEmotion, $image["emotions"]))
                                            <label>
                                                <span>{{$emotionValue}}</span>
                                            </label>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            @endif

            <br>
            <br>
            <br>

            @if(session("step") >= 3 and session("type")==2)
                <div>
                    <div>Шаг 3</div>
                    <div>Ассоциации и эмоции</div>
                    <div>

                        @foreach(session("images") as $key=>$image)

                            @if($image["isSelected"])
                                <div><img src="img/check-{{$key+19}}.jpg" alt=""></div>
                            @endif
                        @endforeach
                    </div>
                    <div>
                        {{session("emotions_service")}}
                    </div>
                </div>
            @endif

            <br>
            <br>
            <br>

            <div>
                <div>Итог</div>
                <div>Тариф который выбрал клиент:</div>
                <div>

                    @if(session("tariff") == 1)
                        <div>
                            <div>Брендинг + фирменный стиль</div>
                            <ul>
                                <li>Определение территории позиционирования</li>
                                <li>Логотип</li>
                                <li>Фирменный стиль</li>
                            </ul>
                            <div>210 000₽/ 3 недели</div>
                        </div>
                    @endif

                    @if(session("tariff") == 2)
                        <div>
                            <div>Брендинг + дизайн упаковки</div>
                            <ul>
                                <li>Определение территории позиционирования</li>
                                <li>Логотип</li>
                                <li>Дизайн упаковки<span>*от пакета молока до этикеток крафтового пива</span></li>
                            </ul>
                            <div>210 000₽/ 3 недели</div>
                        </div>
                    @endif
                </div>

                <br>
                <br>
                <br>

                <div>Контакты клиента</div>
                <div>
                    <strong>ФИО</strong> : {{ session("name") }}
                    <br>
                    <strong>Телефон</strong>: {{ session("phone") }}
                    <br>
                    <strong>Почта</strong> : {{ session("email") }}
                </div>
            </div>
        </div>
    </div>

</div>

</body>

</html>
