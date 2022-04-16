<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Main</title>
    <meta name="theme-color" content="#000">
    <meta name="msapplication-navbutton-color" content="#000">
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
<div class="wrapper">
    <!--=======================================================================================-->
    <header class="main-header">
        <div class="main-header__container"><a class="main-header__logo" href="http://ac.dmitryd2.beget.tech/"><img src="img/logo.svg" alt=""><span>by depot</span></a><a class="main-header__hum" href="#"><img src="img/icons/hum.svg" alt=""></a>
            <div class="main-header__menu"><a class="main-header__close" href="#"><svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.545959" y="20.546" width="29" height="2" rx="1" transform="rotate(-45 0.545959 20.546)" fill="#0068FF" />
                        <rect x="21.0521" y="21.9601" width="29" height="2" rx="1" transform="rotate(-135 21.0521 21.9601)" fill="#0068FF" />
                    </svg></a>
                <ul class="main-header__nav">
                    <li><a href="../../brand-hub.ru/about/index.html">О нас</a></li>
                    <li><a href="../../brand-hub.ru/projects/index.html">Проекты</a></li>
                    <li class="main-header__nav-sub"><a href="../../brand-hub.ru/index.html#services">Услуги</a>
                        <ul>
                            <li><a href="../../brand-hub.ru/services/branding.html">Брендинг</a></li>
                            <li><a href="https://brand-hub.ru/services/rebranding.html">Ребрендинг</a></li>
                            <li><a href="https://brand-hub.ru/services/package.html">Дизайн упаковки</a></li>
                            <li><a href="https://brand-hub.ru/services/firmstyle.html">Фирменный стиль</a></li>
                            <li><a href="https://brand-hub.ru/services/naming.html">Нейминг</a></li>
                            <li><a href="https://brand-hub.ru/services/brandbook.html">Брендбук</a></li>
                        </ul>
                    </li>
                    <li><a href="../../brand-hub.ru/blog/index.html">Блог</a></li>
                    <li><a href="http://brand-hub.tilda.ws/freelance">Cотрудничество</a></li>
                </ul><a class="def-btn main-header__create" href="../../brand-hub.ru/index.html#services"><span>Создать бренд</span></a>
            </div>
        </div>
    </header>
    <!--=======================================================================================-->
    <div class="main-sect">
        <div class="main-sect__container">
            <div class="main-sect__content lazy" data-bg="img/main-bg.jpg">
                <div class="main-sect__title">Брендинг теперь<br>делают так</div>
                <div class="main-sect__text">Поможем бизнесу достучаться до сердец клиентов через брендинг</div>
                <div class="main-sect__footer">
                    <div class="main-sect__label">
                        <div class="main-sect__label-title">Начать в 3 шага</div>
                        <div class="main-sect__label-text">Заполни наш короткий смарт бриф, для того чтобы нам легче было подобрать для тебя команду</div>
                    </div>
                    <div class="main-sect__items">
                        <div class="main-sect__item"><strong>114</strong>брендов</div>
                        <div class="main-sect__item"><strong>47</strong>сфер</div>
                        <div class="main-sect__item"><strong>1000+</strong>специалистов</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=======================================================================================-->
    <div class="start-sect">
        <div class="start-sect__container" id="start-steps-form">
            <div class="start-sect__step active" id="step-1">
                <div class="start-sect__step-desc">Шаг 1</div>
                <div class="start-sect__step-title">Moodboard (Доска настроения)</div>
                <div class="start-sect__step-text">Выбери несколько понравившихся кейсов - это поможет подобрать лучшую команду специалистов</div>
                <div class="start-sect__checks" id="case-steps">

                    @foreach ( session("images") as $image)
                        <label class="start-sect__check">
                            <input type="checkbox" @if($image) checked @endif name="case{{ $loop->index+1 }}" ><img class="start-sect__check-bg" src="img/check-{{ $loop->index+1 }}.jpg" alt="">
                            <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                        </label>
                    @endforeach

                </div>
                <div class="start-sect__step-next"><a class="def-btn" id="step-btn-1" href="#step-2"><span>Далее</span></a></div>
            </div>
            <div class="start-sect__step" id="step-2" @if(session("step")==1 or session("step")==2) style="display: block;" @endif>
                <div class="start-sect__step-desc">Шаг 2</div>
                <div class="start-sect__step-title">Информация о твоей компании</div>
                <div class="start-sect__step-text">На этом шаге необходимо понять у тебя за бизнес. Укажи чем занимается твоя компания.</div>
                <div class="start-sect__labels">
                    <input class="start-sect__labels-input" id="labels-input" type="text" value="{{ session("category_label") }}" placeholder="Укажите категорию бизнеса" data-sw="">
                    <div class="start-sect__labels-items">
                        <a class="start-sect__labels-item @if(session("category_label")==="Салон красоты") active @endif " href="#labels-input" data-value="Салон красоты">Салон красоты</a>
                        <a class="start-sect__labels-item @if(session("category_label")==="Косметика") active @endif " href="#labels-input" data-value="Косметика">Косметика</a>
                        <a class="start-sect__labels-item @if(session("category_label")==="Кофейня") active @endif " href="#labels-input" data-value="Кофейня">Кофейня</a>
                        <a class="start-sect__labels-item @if(session("category_label")==="Кальянная") active @endif " href="#labels-input" data-value="Кальянная">Кальянная</a>
                        <a class="start-sect__labels-item @if(session("category_label")==="Пиццерия") active @endif " href="#labels-input" data-value="Пиццерия">Пиццерия</a>
                        <a class="start-sect__labels-item @if(session("category_label")==="Стоматология") active @endif " href="#labels-input" data-value="Стоматология">Стоматология</a>
                        <a class="start-sect__labels-item @if(session("category_label")==="Стартап") active @endif " href="#labels-input" data-value="Стартап">Стартап</a>
                    </div>
                </div>
                <div class="start-sect__step-title">Уникальные свойства твоего бренда</div>
                <div class="start-sect__step-text">Выберите одну или несколько карточек уникальных свойств твоего бренда, это необходимо для подбора того самого дизайнера.</div>

                <div class="start-sect__dess">
                    @foreach ( $dessArray as $des)
                        <label class="start-sect__des">
                            <input type="checkbox" @if(session("dess")[$loop->index]) checked @endif name="des{{ $loop->index+1 }}">
                            <div class="start-sect__des-bd"></div><img class="start-sect__des-icon" src="img/icons/dicon-{{ $loop->index+1 }}.png" alt="">
                            <div class="start-sect__des-check"><img src="img/icons/check2.svg" alt=""></div>
                            <div class="start-sect__des-title">{{ $des["title"] }}</div>
                            <div class="start-sect__des-text">{{ $des["body"] }}</div>
                        </label>
                    @endforeach

                </div>
                <div class="start-sect__step-title">Какие дизайны вам нравятся?</div>
                <div class="start-sect__step-text">Кидайте ссылку понравившегося дизайна в поле.</div>
                <div class="start-sect__urls">
                    @if(session("urls"))
                        @foreach(session("urls") as $url)
                            <input class="start-sect__url form__input" value="{{ $url }}" type="url" placeholder="https://example.com">
                        @endforeach
                    @else
                        <input class="start-sect__url form__input" type="url" placeholder="https://example.com">
                    @endif
                </div><a class="start-sect__add-url" href="#add-url">Добавить еще одну ссылку</a>
                <div class="start-sect__step-next"><a class="def-btn" id="step-btn-2" href="#step-3"><span>Далее</span></a></div>
            </div>
            <div class="start-sect__step" @if(session("step")==2) style="display: block;" @endif id="step-3">
                <div class="start-sect__step-desc">Шаг 3</div>
                <div class="start-sect__step-title">Ассоциации и эмоции</div>
                <div class="start-sect__step-text">Это заключительный шаг на твоем пути построения бренда, поделись своими ассоциациями и эмоциями к выбранным кейсам из первого шага</div>
                <div class="start-sect__selects">
                    <div class="start-sect__check"><img class="start-sect__check-bg" src="img/check-1.jpg" alt=""></div>
                    <div class="start-sect__check"><img class="start-sect__check-bg" src="img/check-2.jpg" alt=""></div>
                </div>
                <div class="start-sect__tags">
                    @foreach($emotionsValue as $emotionValue)
                        <label class="start-sect__tag">
                            <input type="checkbox" @if(array_key_exists($loop->index, session("emotions"))) checked @endif name="tag{{ $loop->index+1 }}">
                            <div class="start-sect__tag-bg"></div><span>{{$emotionValue}}</span>
                        </label>
                    @endforeach
                </div>
                <div class="start-sect__step-next"><a id="step-btn-3" class="def-btn popup-with-steps-anim" href="#end-dialog"><span>Далее</span></a></div>
            </div>
        </div>
    </div>
    <div class="hidden" id="add-url">
        <input class="start-sect__url form__input" type="url" placeholder="https://example.com">
    </div>
    <!--=======================================================================================-->
    <div class="end-dialog zoom-anim-dialog mfp-hide" id="end-dialog">
        <form class="end-dialog__container">
            <div class="start-sect__step-desc">Заключительный шаг</div>
            <div class="start-sect__step-title">Расскажите про свой классный бизнес!</div>
            <input id="start-hidden" type="hidden" name="start_data" value="">
            <div class="end-dialog__message">
                <input class="form__input" type="text" placeholder="Он классный, потому что...">
            </div>
            <div class="start-sect__step-title">Пакеты услуг</div>
            <div class="start-sect__step-text">Исходя из тех данных, которые мы получили от вас в предыдущих шагах, предлагаем вам рекомендованный пакет услуг для вашего бизнеса.</div>
            <!--Классы которые можно добавлять к end-dialog__pack-->
            <!--error - класс добавляется если пакет не выбран при нажатии submit, возможно его добавление по усмотрению разработчика-->
            <!--stand - класс можно добавлять рекомендуемым пакетам, тоже на усмотрение разработчиков-->
            <div class="end-dialog__packs">
                <div class="end-dialog__pack">
                    <input type="checkbox">
                    <div class="end-dialog__pack-title">Брендинг + фирменный стиль</div>
                    <ul class="end-dialog__pack-list">
                        <li>Определение территории позиционирования</li>
                        <li>Логотип</li>
                        <li>Фирменный стиль</li>
                    </ul>
                    <div class="end-dialog__pack-price"><strong>210 000₽</strong>/ 3 недели</div>
                </div>
                <div class="end-dialog__pack">
                    <input type="checkbox">
                    <div class="end-dialog__pack-title">Брендинг + дизайн упаковки</div>
                    <ul class="end-dialog__pack-list">
                        <li>Определение территории позиционирования</li>
                        <li>Логотип</li>
                        <li>Дизайн упаковки<span>*от пакета молока до этикеток крафтового пива</span></li>
                    </ul>
                    <div class="end-dialog__pack-price"><strong>210 000₽</strong>/ 3 недели</div>
                </div>
                <div class="end-dialog__packs-error">
                    <div class="start-sect__step-title">Ой, кажется вы забыли выбрать пакет</div>
                </div>
            </div>
            <div class="end-dialog__subtitle">Подскажите Ваши контакты, чтобы мы Вас не потеряли</div>
            <div class="end-dialog__inputs">
                <input class="form__input end-dialog__input" id="name-input" type="text" placeholder="Иванов Иван Иванович" required>
                <input class="form__input end-dialog__input" id="phone-input" type="text" name="phone" placeholder="+7 777 777 77 77" required>
                <input class="form__input end-dialog__input" id="email-input" type="email" placeholder="example@example.com" required>
            </div>
            <div class="end-dialog__btns">
                <button class="def-btn end-dialog__submit" type="submit"><span>Оплата картой</span></button>
                <button class="def-btn def-btn_second end-dialog__payment" type="submit"><span>Оплата по расчетному счету</span></button>
            </div>
        </form>
    </div>
    <!--=======================================================================================-->
    <div class="steps-sect">
        <div class="steps-sect__container">
            <div class="steps-sect__items">
                <div class="steps-sect__item">
                    <div class="steps-sect__item-icons"><img src="img/icons/sicon-1.png" alt=""></div>
                    <p>Собираем информация от клиента и <strong>четко следим</strong> за выполнением работы дизайнеров, стратегов, </p>
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
                <div class="steps-sect__title">Ничего не понял!</div><a class="def-btn popup-with-zoom-anim" href="#lead-dialog"><span>Хочу консультацию</span></a>
            </div>
            <div class="lead-dialog zoom-anim-dialog mfp-hide" id="lead-dialog">
                <div class="lead-dialog__container">
                    <div class="lead-dialog__text">
                        <div class="def-title lead-dialog__title">Поможем и расскажем!</div>
                        <p>Если у вас есть вопросы о формате работы нашего сервиса, или испытываете трудность в прохождении смарт-брифа, оставьте свой номер - мы позвоним, чтобы ответить на все ваши вопросы.</p>
                    </div>
                    <div class="lead-dialog__form">
                        <input class="form__input lead-dialog__input" type="text" placeholder="Иванов Иван Иванович">
                        <input class="form__input lead-dialog__input" type="text" name="phone" placeholder="+7 777 777 77 77">
                        <button class="def-btn lead-dialog__submit"><span>Отправить</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=======================================================================================-->
    <div class="com-sect">
        <div class="com-sect__container">
            <div class="def-title com-sect__title">Мощнейшая команда <br>специалистов</div>
            <div class="com-sect__items">
                <div class="com-sect__item com-sect__item_darck">
                    <div class="com-sect__item-title">Дизайнеры</div>
                    <div class="com-sect__item-text">В нашей базе собрано более 100+ дизайнеров с опытом разработки логотипов в разных разных </div>
                </div>
                <div class="com-sect__item com-sect__item_min com-sect__item_darck">
                    <div class="com-sect__item-title">Копирайтеры</div>
                    <div class="com-sect__item-text">Мы отобрали квалифицированных копирайторв, специализирующихся на разработке названий для брендов</div>
                </div>
                <div class="com-sect__item com-sect__item_min com-sect__item_darck">
                    <div class="com-sect__item-title">Арт-директора</div>
                    <div class="com-sect__item-text">Мы отобрали квалифицированных артдиректоров, специализирующихся на разработке брендов</div>
                </div>
                <div class="com-sect__item">
                    <div class="com-sect__item-title">Стратеги</div>
                    <div class="com-sect__item-text">Бренд стратег сделает анализ рынка, определит позиционирование, ценности и преимущества вашего бренда</div>
                </div>
                <div class="com-sect__item">
                    <div class="com-sect__item-title">Эксперты брендинга</div>
                    <div class="com-sect__item-text">Хорошие менеджеры, Хорошие менеджеры, Хорошие менеджеры, Хорошие менеджеры, </div>
                </div>
            </div>
        </div>
    </div>
    <!--=======================================================================================-->
    <div class="mart-sect">
        <div class="mart-sect__container">
            <div class="def-title mart-sect__title">Знаем рынок и свое место в нем</div>
            <div class="mart-sect__text">Текст про цену брендинга в разных агентствах и сервисах</div>
            <div class="mart-sect__items">
                <div class="mart-sect__item mart-sect__item_first"><img class="mart-sect__item-icon" src="img/m-1.png" alt="">
                    <div class="mart-sect__item-title">Лого-генераторы <span>~ 1000 ₽</span></div>
                    <div class="mart-sect__item-text">Турболого, несколько строк текста про турболого</div>
                </div>
                <div class="mart-sect__item mart-sect__item_select"><img class="mart-sect__item-icon" src="img/m-2.png" alt="">
                    <div class="mart-sect__item-title">Brand hub <span>~ 250 000 ₽</span></div>
                    <div class="mart-sect__item-text">Выделиться среди большой конкуренции микро, малого и среднего бизнесов</div>
                </div>
                <div class="mart-sect__item"><img class="mart-sect__item-icon" src="img/m-3.png" alt="">
                    <div class="mart-sect__item-title">Недорогие специалисты <span>~ 5000 ₽</span></div>
                    <div class="mart-sect__item-text">Фрилансеры Фрилансеры Фрилансеры ФрилансерыФрилансеры</div>
                </div>
                <div class="mart-sect__item"><img class="mart-sect__item-icon" src="img/m-4.png" alt="">
                    <div class="mart-sect__item-title">Depot <span>~ 1 200 000 ₽</span></div>
                    <div class="mart-sect__item-text">Методичная разработка бренда, дорого, надежно</div>
                </div>
            </div>
        </div>
    </div>
    <!--=======================================================================================-->
    <div class="hard-sect">
        <div class="hard-sect__container">
            <div class="hard-sect__content">
                <div class="def-title">
                    <div class="def-title__first"><img src="img/icons/stroke.svg" alt=""><span>Work hard</span></div>
                </div>
                <div class="hard-sect__text">Мы работает с разными заказчиками, с микро, малым, средним бизнесом</div><a class="def-btn" href="../../brand-hub.ru/index.html#services"><span>Создать бренд</span></a>
            </div>
            <div class="hard-sect__visual">
                <div class="hard-sect__brand">brandhub</div>
                <div class="hard-sect__circle circle-1">Время</div>
                <div class="hard-sect__circle circle-2">Качество</div>
                <div class="hard-sect__circle circle-3">Цена</div>
            </div>
        </div>
    </div>
    <!--=======================================================================================-->
    <div class="proj-sect">
        <div class="proj-sect__container">
            <div class="proj-sect__title">
                <div class="proj-sect__title-desc">Уже создано:</div>114 брендов в <span>47 сферах</span>
            </div>
            <div class="proj-sect__items"><a class="proj-sect__item proj-sect__item_big" href="#"><img class="lazy" data-src="img/p-1.jpg" alt=""></a><a class="proj-sect__item" href="#"><img class="lazy" data-src="img/p-2.jpg" alt=""></a><a class="proj-sect__item" href="#"><img class="lazy" data-src="img/p-3.jpg" alt=""></a><a class="proj-sect__item proj-sect__item_big" href="#"><img class="lazy" data-src="img/p-4.jpg" alt=""></a><a class="proj-sect__item proj-sect__item_big" href="#"><img class="lazy" data-src="img/p-5.jpg" alt=""></a><a class="proj-sect__item" href="#"><img class="lazy" data-src="img/p-6.jpg" alt=""></a></div>
            <div class="proj-sect__more"><a class="def-btn" href="../../brand-hub.ru/projects/index.html"><span>Все проекты</span></a></div>
        </div>
    </div>
    <!--=======================================================================================-->
    <div class="depot-sect">
        <div class="depot-sect__container">
            <div class="depot-sect__text">
                <div class="def-title">
                    <div class="def-title__first"><img src="img/icons/stroke.svg" alt=""><span>Собственная</span></div><br><span>образовательная программа</span>
                </div>
                <p>Постоянно находим и воспитываем новую кровь - <a href="https://depot.camp/">Depot.camp</a></p>
            </div>
            <div class="depot-sect__img" style="color: #1D1D1D"><img class="lazy" data-src="img/depot.png" alt=""></div>
        </div>
    </div>
    <!--=======================================================================================-->
    <div class="faq-sect">
        <div class="faq-sect__container">
            <div class="faq-sect__title">
                <div class="def-title">Часто задаваемые вопросы</div>
                <div class="faq-sect__text">Мы делаем более 100 проектов в год, клиенты возвращаются к нам с новыми проектами.</div>
            </div>
            <div class="faq-sect__items">
                <div class="faq-sect__item">
                    <div class="faq-sect__item-title">В чем преимущество brand hub?<span></span></div>
                    <div class="faq-sect__item-text">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci iste ipsa aliquam! Temporibus natus quas odit neque ut qui nobis?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero magnam rerum delectus laudantium repellendus est beatae hic accusamus repellat, exercitationem nemo consequuntur atque officiis ducimus, quaerat quam molestias sit aliquid?</p>
                    </div>
                </div>
                <div class="faq-sect__item">
                    <div class="faq-sect__item-title">Как заказать создание бренда?<span></span></div>
                    <div class="faq-sect__item-text">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci iste ipsa aliquam! Temporibus natus quas odit neque ut qui nobis?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero magnam rerum delectus laudantium repellendus est beatae hic accusamus repellat, exercitationem nemo consequuntur atque officiis ducimus, quaerat quam molestias sit aliquid?</p>
                    </div>
                </div>
                <div class="faq-sect__item">
                    <div class="faq-sect__item-title">Какие условия оплаты и сколько длится проект?<span></span></div>
                    <div class="faq-sect__item-text">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci iste ipsa aliquam! Temporibus natus quas odit neque ut qui nobis?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero magnam rerum delectus laudantium repellendus est beatae hic accusamus repellat, exercitationem nemo consequuntur atque officiis ducimus, quaerat quam molestias sit aliquid?</p>
                    </div>
                </div>
                <div class="faq-sect__item">
                    <div class="faq-sect__item-title">Что такое концепция бренда и что в нее входит?<span></span></div>
                    <div class="faq-sect__item-text">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci iste ipsa aliquam! Temporibus natus quas odit neque ut qui nobis?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero magnam rerum delectus laudantium repellendus est beatae hic accusamus repellat, exercitationem nemo consequuntur atque officiis ducimus, quaerat quam molestias sit aliquid?</p>
                    </div>
                </div>
                <div class="faq-sect__item">
                    <div class="faq-sect__item-title">Какой пакет услуг выбрать?<span></span></div>
                    <div class="faq-sect__item-text">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci iste ipsa aliquam! Temporibus natus quas odit neque ut qui nobis?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero magnam rerum delectus laudantium repellendus est beatae hic accusamus repellat, exercitationem nemo consequuntur atque officiis ducimus, quaerat quam molestias sit aliquid?</p>
                    </div>
                </div>
                <div class="faq-sect__item">
                    <div class="faq-sect__item-title">Что делать, если предложенные варианты не понравятся?<span></span></div>
                    <div class="faq-sect__item-text">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci iste ipsa aliquam! Temporibus natus quas odit neque ut qui nobis?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero magnam rerum delectus laudantium repellendus est beatae hic accusamus repellat, exercitationem nemo consequuntur atque officiis ducimus, quaerat quam molestias sit aliquid?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=======================================================================================-->
    <div class="main-footer">
        <div class="main-footer__container">
            <div class="main-footer__logo"><a class="main-header__logo" href="http://ac.dmitryd2.beget.tech/"><img src="img/footer-logo.svg" alt=""><span>by depot</span></a></div>
            <div class="main-footer__column main-footer__column_first">
                <ul class="main-footer__soc">
                    <li><a href="https://t.me/brandhub21"><img src="img/icons/soc-1.svg" alt=""></a></li>
                    <li><a href="https://api.whatsapp.com/send/?phone=79163254224&amp;text&amp;app_absent=0"><img src="img/icons/soc-2.svg" alt=""></a></li>
                    <li><a href="https://www.youtube.com/channel/UCV4psMqFmWWxToZGjSwfovA"><img src="img/icons/soc-3.svg" alt=""></a></li>
                </ul>
                <div class="main-footer__info">
                    <p>© brand hub, 2022</p>
                    <p>Оферта - <a href="https://brand-hub.ru/oferta/">скачивание документа</a><br><a class="main-footer__info-link" href="https://brand-hub.ru/terms/">Пользовательское соглашение</a><br><a class="main-footer__info-link" href="https://brand-hub.ru/policy/">Политика обработки персональных данных</a></p>
                </div>
            </div>
            <ul class="main-footer__nav">
                <li><a href="../../brand-hub.ru/about/index.html">О нас</a></li>
                <li><a href="../../brand-hub.ru/projects/index.html">Проекты</a></li>
                <li><a href="../../brand-hub.ru/blog/index.html">Блог</a></li>
                <li><a href="http://brand-hub.tilda.ws/freelance">Сотрудничество</a></li>
            </ul>
            <ul class="main-footer__nav">
                <li><a href="../../brand-hub.ru/services/branding.html">Брендинг</a></li>
                <li><a href="https://brand-hub.ru/services/rebranding.html">Ребрендинг</a></li>
                <li><a href="https://brand-hub.ru/services/package.html">Дизайн упаковки</a></li>
            </ul>
            <ul class="main-footer__nav">
                <li><a href="https://brand-hub.ru/services/firmstyle.html">Фирменный стиль</a></li>
                <li><a href="https://brand-hub.ru/services/naming.html">Нейминг</a></li>
                <li><a href="https://brand-hub.ru/services/brandbook.html">Брендбук</a></li>
            </ul>
            <div class="main-footer__column">
                <div class="main-footer__text">
                    <p><a href="tel:+74951060614"><span>+7 (495) 106-06-14</span></a></p>
                    <p><a href="email:we@brand-hub.ru">we@brand-hub.ru</a></p>
                    <p>Москва, <br>Пестовский пер 16 стр 2</p>
                </div>
            </div>
        </div>
        <div class="main-footer__img"><img src="img/footer-logo.svg" alt=""></div>
    </div>
    <!--=======================================================================================-->
</div>
<div class="hidden">
</div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/scripts.min.js') }}"></script>
<script src="{{ asset('js/common.js') }}"></script>
</body>

</html>
