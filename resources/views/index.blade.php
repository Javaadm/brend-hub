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
    <div class="wrapper wrapper_fixed">
        <!--=======================================================================================-->
        <header class="main-header main-header_fixed">
            <div class="main-header__container"><a class="main-header__logo" href="/"><img src="img/logo.svg" alt=""><span>by depot</span></a><a class="main-header__hum" href="#"><img src="img/icons/hum.svg" alt=""></a>
                <div class="main-header__menu"><a class="main-header__close" href="#"><svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.545959" y="20.546" width="29" height="2" rx="1" transform="rotate(-45 0.545959 20.546)" fill="#0068FF" />
                            <rect x="21.0521" y="21.9601" width="29" height="2" rx="1" transform="rotate(-135 21.0521 21.9601)" fill="#0068FF" />
                        </svg></a>
                    <ul class="main-header__nav">
                        <li><a href="#">О нас</a></li>
                        <li><a href="#">Проекты</a></li>
                        <li class="main-header__nav-sub"><a href="#">Услуги</a>
                            <ul>
                                <li><a href="#">Брендинг</a></li>
                                <li><a href="#">Ребрендинг</a></li>
                                <li><a href="#">Дизайн упаковки</a></li>
                                <li><a href="#">Фирменный стиль</a></li>
                                <li><a href="#">Нейминг</a></li>
                                <li><a href="#">Брендбук</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Блог</a></li>
                        <li><a href="#">Cотрудничество</a></li>
                    </ul><a class="def-btn main-header__create" href="#"><span>Создать бренд</span></a>
                </div>
            </div>
        </header>
        <!--=======================================================================================-->
        <!--=======================================================================================-->
        <div class="title-sect">
            <div class="title-sect__container">
                <div class="title-sect__hidden">Брендинг теперь делают так</div>
                <div class="title-sect__title">
                    <div class="title-sect__title-block title-rect">Брендинг<span></span>
                        <div class="title-sect__cursor cursor-1"><img class="title-sect__cursor-icon" src="img/icons/cursor-1.svg" alt="">
                            <div class="title-sect__cursor-img"><img src="img/cursor-1.jpg" alt=""></div>
                        </div>
                    </div>
                    <div class="title-sect__title-block">теперь</div>
                    <div class="title-sect__title-block">делают</div>
                    <div class="title-sect__title-block title-select title-rect">так<span></span>
                        <div class="title-sect__cursor cursor-2"><img class="title-sect__cursor-icon" src="img/icons/cursor-2.svg" alt="">
                            <div class="title-sect__cursor-img"><img src="img/cursor-2.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="title-sect__text">
                    <p>У вас есть бизнес. У нас - 3 вопроса.<br>Создадим бренд вместе!</p>
                </div>
            </div>
        </div>
        <!--=======================================================================================-->
        <div class="start-sect">
            <div class="start-sect__container" id="start-steps-form">
                <div class="start-sect__title">
                    <div class="start-sect__title-text">Всего 3 шага</div>
                    <div class="start-sect__title-desc">Заполните наш короткий смарт бриф</div>
                </div>
                <div class="start-sect__stitle">
                    <div class="start-sect__step-desc">Шаг 3</div>
                </div>
                <div class="start-sect__stitle">
                    <div class="start-sect__step-desc">Шаг 2</div>
                </div>
                <div class="start-sect__step active" id="step-1">
                    <div class="start-sect__step-desc">Шаг 1</div>
                    <div class="start-sect__step-title">Настроение и характер</div>
                    <div class="start-sect__step-text">Отметьте понравившиеся варианты дизайна, а мы подберём соответствующую команду</div>
                    <div class="start-sect__tabs"><a class="start-sect__tab active" href="#checks-container-1" data-step-id="#step-3">Для товаров</a><a class="start-sect__tab last" href="#checks-container-2" data-step-id="#step-3-dop">Для услуг</a></div>
                    <div class="start-sect__tabs-container active" id="checks-container-1">
                        <div class="start-sect__tcontent active" id="checks-tab-1">
                            <div class="start-sect__checks">
                                <label class="start-sect__check">
                                    <input type="checkbox" name="case1"><img class="start-sect__check-bg" src="img/check-1.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check start-sect__check_h">
                                    <input type="checkbox" name="case2"><img class="start-sect__check-bg" src="img/check-2.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check start-sect__check_s">
                                    <input type="checkbox" name="case3"><img class="start-sect__check-bg" src="img/check-3.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check">
                                    <input type="checkbox" name="case4"><img class="start-sect__check-bg" src="img/check-4.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check start-sect__check_h">
                                    <input type="checkbox" name="case5"><img class="start-sect__check-bg" src="img/check-5.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check">
                                    <input type="checkbox" name="case6"><img class="start-sect__check-bg" src="img/check-6.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check start-sect__check_s">
                                    <input type="checkbox" name="case7"><img class="start-sect__check-bg" src="img/check-7.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check start-sect__check_h">
                                    <input type="checkbox" name="case8"><img class="start-sect__check-bg" src="img/check-8.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check">
                                    <input type="checkbox" name="case9"><img class="start-sect__check-bg" src="img/check-9.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                            </div>
                            <div class="start-sect__pag">1 / 2</div>
                            <div class="start-sect__step-next"><a class="def-btn next-checks-tab" href="#checks-tab-1-2"><span>Далее</span></a></div>
                        </div>
                        <div class="start-sect__tcontent" id="checks-tab-1-2">
                            <div class="start-sect__checks">
                                <label class="start-sect__check">
                                    <input type="checkbox" name="case1"><img class="start-sect__check-bg" src="img/check-10.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check start-sect__check_h">
                                    <input type="checkbox" name="case2"><img class="start-sect__check-bg" src="img/check-11.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check start-sect__check_s">
                                    <input type="checkbox" name="case3"><img class="start-sect__check-bg" src="img/check-12.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check">
                                    <input type="checkbox" name="case4"><img class="start-sect__check-bg" src="img/check-13.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check start-sect__check_h">
                                    <input type="checkbox" name="case5"><img class="start-sect__check-bg" src="img/check-14.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check">
                                    <input type="checkbox" name="case6"><img class="start-sect__check-bg" src="img/check-15.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check start-sect__check_s">
                                    <input type="checkbox" name="case7"><img class="start-sect__check-bg" src="img/check-16.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check start-sect__check_h">
                                    <input type="checkbox" name="case8"><img class="start-sect__check-bg" src="img/check-17.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check">
                                    <input type="checkbox" name="case9"><img class="start-sect__check-bg" src="img/check-18.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                            </div>
                            <div class="start-sect__pag">2 / 2</div>
                            <div class="start-sect__step-next"><a class="def-btn" id="step-btn-1" href="#step-2" data-checks-container="#checks-container-1"><span>Далее</span></a></div>
                        </div>
                    </div>
                    <div class="start-sect__tabs-container" id="checks-container-2">
                        <div class="start-sect__tcontent active" id="checks-tab-2">
                            <div class="start-sect__checks">
                                <label class="start-sect__check">
                                    <input type="checkbox" name="case1"><img class="start-sect__check-bg" src="img/check-1.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check start-sect__check_h">
                                    <input type="checkbox" name="case2"><img class="start-sect__check-bg" src="img/check-2.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check start-sect__check_s">
                                    <input type="checkbox" name="case3"><img class="start-sect__check-bg" src="img/check-3.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check">
                                    <input type="checkbox" name="case4"><img class="start-sect__check-bg" src="img/check-4.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check start-sect__check_h">
                                    <input type="checkbox" name="case5"><img class="start-sect__check-bg" src="img/check-5.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check">
                                    <input type="checkbox" name="case6"><img class="start-sect__check-bg" src="img/check-6.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check start-sect__check_s">
                                    <input type="checkbox" name="case7"><img class="start-sect__check-bg" src="img/check-7.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check start-sect__check_h">
                                    <input type="checkbox" name="case8"><img class="start-sect__check-bg" src="img/check-8.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check">
                                    <input type="checkbox" name="case9"><img class="start-sect__check-bg" src="img/check-9.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                            </div>
                            <div class="start-sect__pag">1 / 2</div>
                            <div class="start-sect__step-next"><a class="def-btn next-checks-tab" href="#checks-tab-2-2"><span>Далее</span></a></div>
                        </div>
                        <div class="start-sect__tcontent" id="checks-tab-2-2">
                            <div class="start-sect__checks">
                                <label class="start-sect__check">
                                    <input type="checkbox" name="case1"><img class="start-sect__check-bg" src="img/check-1.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check start-sect__check_h">
                                    <input type="checkbox" name="case2"><img class="start-sect__check-bg" src="img/check-2.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check start-sect__check_s">
                                    <input type="checkbox" name="case3"><img class="start-sect__check-bg" src="img/check-3.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check">
                                    <input type="checkbox" name="case4"><img class="start-sect__check-bg" src="img/check-4.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check start-sect__check_h">
                                    <input type="checkbox" name="case5"><img class="start-sect__check-bg" src="img/check-5.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check">
                                    <input type="checkbox" name="case6"><img class="start-sect__check-bg" src="img/check-6.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check start-sect__check_s">
                                    <input type="checkbox" name="case7"><img class="start-sect__check-bg" src="img/check-7.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check start-sect__check_h">
                                    <input type="checkbox" name="case8"><img class="start-sect__check-bg" src="img/check-8.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                                <label class="start-sect__check">
                                    <input type="checkbox" name="case9"><img class="start-sect__check-bg" src="img/check-9.jpg" alt="">
                                    <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                                </label>
                            </div>
                            <div class="start-sect__pag">2 / 2</div>
                            <div class="start-sect__step-next"><a class="def-btn" id="step-btn-1-2" href="#step-2" data-checks-container="#checks-container-2"><span>Далее</span></a></div>
                        </div>
                    </div>
                </div>
                <div class="start-sect__step" id="step-2">
                    <div class="start-sect__step-desc">Шаг 2</div>
                    <div class="start-sect__step-title">Информация о твоей компании</div>
                    <div class="start-sect__step-text">На этом шаге необходимо понять у тебя за бизнес. Укажи чем занимается твоя компания.</div>
                    <div class="start-sect__labels">
                        <input class="start-sect__labels-input" id="labels-input" type="text" placeholder="Укажите категорию бизнеса" data-sw="">
                        <div class="start-sect__labels-items"><a class="start-sect__labels-item" href="#labels-input" data-value="Салон красоты">Салон красоты</a><a class="start-sect__labels-item" href="#labels-input" data-value="Косметика">Косметика</a><a class="start-sect__labels-item" href="#labels-input" data-value="Кофейня">Кофейня</a><a class="start-sect__labels-item" href="#labels-input" data-value="Кальянная">Кальянная</a><a class="start-sect__labels-item" href="#labels-input" data-value="Пиццерия">Пиццерия</a><a class="start-sect__labels-item" href="#labels-input" data-value="Стоматология">Стоматология</a><a class="start-sect__labels-item" href="#labels-input" data-value="Стартап">Стартап</a></div>
                    </div>
                    <div class="start-sect__step-title">Уникальные свойства твоего бренда</div>
                    <div class="start-sect__step-text">Выберите одну или несколько карточек уникальных свойств твоего бренда, это необходимо для подбора того самого дизайнера.</div>
                    <div class="start-sect__dess">
                        <label class="start-sect__des">
                            <input type="checkbox" name="des1">
                            <div class="start-sect__des-bd"></div><img class="start-sect__des-icon" src="img/icons/dicon-1.png" alt="">
                            <div class="start-sect__des-check"><img src="img/icons/check2.svg" alt=""></div>
                            <div class="start-sect__des-title">Индустрия</div>
                            <div class="start-sect__des-text">Это то, что помогает нам оставаться в индустрии, соответствовать ей. Оно не уникальное, а скорее это общая канва для двух.</div>
                        </label>
                        <label class="start-sect__des">
                            <input type="checkbox" name="des2">
                            <div class="start-sect__des-bd"></div><img class="start-sect__des-icon" src="img/icons/dicon-1.png" alt="">
                            <div class="start-sect__des-check"><img src="img/icons/check2.svg" alt=""></div>
                            <div class="start-sect__des-title">Социальная активность</div>
                            <div class="start-sect__des-text">это ивенты связанные с поддержанием социально незащищенных групп: устраиваем инвалидов, благотворительствуем, сажаем деревья</div>
                        </label>
                        <label class="start-sect__des">
                            <input type="checkbox" name="des3">
                            <div class="start-sect__des-bd"></div><img class="start-sect__des-icon" src="img/icons/dicon-2.png" alt="">
                            <div class="start-sect__des-check"><img src="img/icons/check2.svg" alt=""></div>
                            <div class="start-sect__des-title">Материальные активы</div>
                            <div class="start-sect__des-text">это физическое имущество: земля, здания, машины/станки и прочее, что есть у клиента</div>
                        </label>
                        <label class="start-sect__des">
                            <input type="checkbox" name="des4">
                            <div class="start-sect__des-bd"></div><img class="start-sect__des-icon" src="img/icons/dicon-3.png" alt="">
                            <div class="start-sect__des-check"><img src="img/icons/check2.svg" alt=""></div>
                            <div class="start-sect__des-title">Марткетинг и PR</div>
                            <div class="start-sect__des-text">сильный маркетинг, есть амбасадоры бренда, лицо бренда мидийная личность и т.д.</div>
                        </label>
                        <label class="start-sect__des">
                            <input type="checkbox" name="des5">
                            <div class="start-sect__des-bd"></div><img class="start-sect__des-icon" src="img/icons/dicon-4.png" alt="">
                            <div class="start-sect__des-check"><img src="img/icons/check2.svg" alt=""></div>
                            <div class="start-sect__des-title">Награды и заслуги</div>
                            <div class="start-sect__des-text">обладатель наград, премий, лауреат конкурсов в своей сфере, общественное признание и т.д.</div>
                        </label>
                        <label class="start-sect__des">
                            <input type="checkbox" name="des6">
                            <div class="start-sect__des-bd"></div><img class="start-sect__des-icon" src="img/icons/dicon-5.png" alt="">
                            <div class="start-sect__des-check"><img src="img/icons/check2.svg" alt=""></div>
                            <div class="start-sect__des-title">Дизайн и интерьер</div>
                            <div class="start-sect__des-text">уникальный интерьер, аутентичный интерьер</div>
                        </label>
                        <label class="start-sect__des">
                            <input type="checkbox" name="des7">
                            <div class="start-sect__des-bd"></div><img class="start-sect__des-icon" src="img/icons/dicon-6.png" alt="">
                            <div class="start-sect__des-check"><img src="img/icons/check2.svg" alt=""></div>
                            <div class="start-sect__des-title">Продукт</div>
                            <div class="start-sect__des-text">уникальный продукт на рынке, уникальное продуктове предложение, это комплекс - Веган бургер - веганские бургеры</div>
                        </label>
                        <label class="start-sect__des">
                            <input type="checkbox" name="des8">
                            <div class="start-sect__des-bd"></div><img class="start-sect__des-icon" src="img/icons/dicon-7.png" alt="">
                            <div class="start-sect__des-check"><img src="img/icons/check2.svg" alt=""></div>
                            <div class="start-sect__des-title">Ассортимент</div>
                            <div class="start-sect__des-text">уникальный ассортимент - кулинарный шоколад для терки</div>
                        </label>
                        <label class="start-sect__des">
                            <input type="checkbox" name="des9">
                            <div class="start-sect__des-bd"></div><img class="start-sect__des-icon" src="img/icons/dicon-8.png" alt="">
                            <div class="start-sect__des-check"><img src="img/icons/check2.svg" alt=""></div>
                            <div class="start-sect__des-title">Сырье и состав</div>
                            <div class="start-sect__des-text">уникальный состав, то, из чего оно сделано - 100% натуральный, с маслом гуарана</div>
                        </label>
                        <label class="start-sect__des">
                            <input type="checkbox" name="des10">
                            <div class="start-sect__des-bd"></div><img class="start-sect__des-icon" src="img/icons/dicon-9.png" alt="">
                            <div class="start-sect__des-check"><img src="img/icons/check2.svg" alt=""></div>
                            <div class="start-sect__des-title">Страна проихождения</div>
                            <div class="start-sect__des-text">уникальное происхождение - сделано в Германии, пошито в Италии, приехал из Франции </div>
                        </label>
                        <label class="start-sect__des">
                            <input type="checkbox" name="des11">
                            <div class="start-sect__des-bd"></div><img class="start-sect__des-icon" src="img/icons/dicon-10.png" alt="">
                            <div class="start-sect__des-check"><img src="img/icons/check2.svg" alt=""></div>
                            <div class="start-sect__des-title">Технологии и инновации</div>
                            <div class="start-sect__des-text">Это то, что помогает нам оставаться в индустрии, соответствовать ей. Оно не уникальное, а скорее это общая канва для двух.</div>
                        </label>
                        <label class="start-sect__des">
                            <input type="checkbox" name="des12">
                            <div class="start-sect__des-bd"></div><img class="start-sect__des-icon" src="img/icons/dicon-11.png" alt="">
                            <div class="start-sect__des-check"><img src="img/icons/check2.svg" alt=""></div>
                            <div class="start-sect__des-title">Персонал</div>
                            <div class="start-sect__des-text">Это то, что помогает нам оставаться в индустрии, соответствовать ей. Оно не уникальное, а скорее это общая канва для двух.</div>
                        </label>
                    </div>
                    <div class="start-sect__step-title">Давайте познакомимся поближе</div>
                    <input class="form__input start-sect__step-moment" type="text" placeholder="Впишите сюда важные моменты о вашем бизнесе">
                    <div class="start-sect__step-title">Какие дизайны вам нравятся?</div>
                    <div class="start-sect__urls">
                        <input class="start-sect__url form__input" type="url" placeholder="https://example.com">
                    </div><a class="start-sect__add-url" href="#add-url">Добавить еще одну ссылку</a>
                    <div class="start-sect__step-next"><a class="def-btn" id="step-btn-2" href="#step-3"><span>Далее</span></a></div>
                </div>
                <div class="start-sect__step" id="step-3">
                    <div class="start-sect__step-desc">Шаг 3</div>
                    <div class="start-sect__step-title">Ассоциации и эмоции</div>
                    <div class="start-sect__step-text start-sect__step-text_big">Это заключительный шаг на вашем пути построения бренда. Поделитесь своими ассоциациями и эмоциями к выбранным картинкам из первого шага.</div>
                    <div class="start-sect__select">
                        <div class="start-sect__check"><img class="start-sect__check-bg" src="img/check-1.jpg" alt=""></div>
                        <div class="start-sect__tags">
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag1">
                                <div class="start-sect__tag-bg"></div><span>Лаконичность</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag2">
                                <div class="start-sect__tag-bg"></div><span>Крафт</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag3">
                                <div class="start-sect__tag-bg"></div><span>Любовь</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag4">
                                <div class="start-sect__tag-bg"></div><span>Абстракция</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag5">
                                <div class="start-sect__tag-bg"></div><span>Традиционный</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag6">
                                <div class="start-sect__tag-bg"></div><span>Минимализм</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag7">
                                <div class="start-sect__tag-bg"></div><span>Консервативность</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag8">
                                <div class="start-sect__tag-bg"></div><span>Современность</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag9">
                                <div class="start-sect__tag-bg"></div><span>Яркость</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag10">
                                <div class="start-sect__tag-bg"></div><span>Прямолинейность</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag11">
                                <div class="start-sect__tag-bg"></div><span>Загадочность</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag12">
                                <div class="start-sect__tag-bg"></div><span>Теплый</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag13">
                                <div class="start-sect__tag-bg"></div><span>Холодный</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag14">
                                <div class="start-sect__tag-bg"></div><span>Добро</span>
                            </label>
                        </div>
                    </div>
                    <div class="start-sect__select">
                        <div class="start-sect__check"><img class="start-sect__check-bg" src="img/check-12.jpg" alt=""></div>
                        <div class="start-sect__tags">
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag1">
                                <div class="start-sect__tag-bg"></div><span>Лаконичность</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag2">
                                <div class="start-sect__tag-bg"></div><span>Крафт</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag3">
                                <div class="start-sect__tag-bg"></div><span>Любовь</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag4">
                                <div class="start-sect__tag-bg"></div><span>Абстракция</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag5">
                                <div class="start-sect__tag-bg"></div><span>Традиционный</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag6">
                                <div class="start-sect__tag-bg"></div><span>Минимализм</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag7">
                                <div class="start-sect__tag-bg"></div><span>Консервативность</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag8">
                                <div class="start-sect__tag-bg"></div><span>Современность</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag9">
                                <div class="start-sect__tag-bg"></div><span>Яркость</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag10">
                                <div class="start-sect__tag-bg"></div><span>Прямолинейность</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag11">
                                <div class="start-sect__tag-bg"></div><span>Загадочность</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag12">
                                <div class="start-sect__tag-bg"></div><span>Теплый</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag13">
                                <div class="start-sect__tag-bg"></div><span>Холодный</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag14">
                                <div class="start-sect__tag-bg"></div><span>Добро</span>
                            </label>
                        </div>
                    </div>
                    <div class="start-sect__select">
                        <div class="start-sect__check"><img class="start-sect__check-bg" src="img/check-9.jpg" alt=""></div>
                        <div class="start-sect__tags">
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag1">
                                <div class="start-sect__tag-bg"></div><span>Лаконичность</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag2">
                                <div class="start-sect__tag-bg"></div><span>Крафт</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag3">
                                <div class="start-sect__tag-bg"></div><span>Любовь</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag4">
                                <div class="start-sect__tag-bg"></div><span>Абстракция</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag5">
                                <div class="start-sect__tag-bg"></div><span>Традиционный</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag6">
                                <div class="start-sect__tag-bg"></div><span>Минимализм</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag7">
                                <div class="start-sect__tag-bg"></div><span>Консервативность</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag8">
                                <div class="start-sect__tag-bg"></div><span>Современность</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag9">
                                <div class="start-sect__tag-bg"></div><span>Яркость</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag10">
                                <div class="start-sect__tag-bg"></div><span>Прямолинейность</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag11">
                                <div class="start-sect__tag-bg"></div><span>Загадочность</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag12">
                                <div class="start-sect__tag-bg"></div><span>Теплый</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag13">
                                <div class="start-sect__tag-bg"></div><span>Холодный</span>
                            </label>
                            <label class="start-sect__tag">
                                <input type="checkbox" name="tag14">
                                <div class="start-sect__tag-bg"></div><span>Добро</span>
                            </label>
                        </div>
                    </div>
                    <div class="start-sect__step-next"><a class="def-btn" id="step-btn-3" href="#step-4"><span>Далее</span></a></div>
                </div>
                <div class="start-sect__step" id="step-3-dop">
                    <div class="start-sect__step-desc">Шаг 3</div>
                    <div class="start-sect__step-title">Ассоциации и эмоции</div>
                    <div class="start-sect__step-text start-sect__step-text_big">Это заключительный шаг на твоем пути построения бренда, поделитесь в свободной форме своими ассоциациями и эмоциями к выбранным кейсам из первого шага.</div>
                    <div class="start-sect__checks start-sect__checks_items">
                        <div class="start-sect__check"><img class="start-sect__check-bg" src="img/check-1.jpg" alt=""></div>
                        <div class="start-sect__check"><img class="start-sect__check-bg" src="img/check-12.jpg" alt=""></div>
                        <div class="start-sect__check"><img class="start-sect__check-bg" src="img/check-7.jpg" alt=""></div>
                    </div>
                    <div class="start-sect__emotions">
                        <input class="form__input start-sect__step-moment" type="text" placeholder="Дорогой, лакончиный, добрый">
                    </div>
                    <div class="start-sect__step-next"><a class="def-btn" id="step-btn-3-2" href="#step-4"><span>Далее</span></a></div>
                </div>
                <div class="start-sect__step" id="step-4">
                    <div class="start-sect__step-desc">Итог</div>
                    <div class="start-sect__step-title">Спасибо! Это и было ТЗ!</div>
                    <div class="start-sect__step-text">Больше не будет сложных форм и вопросов. Мы выбрали для вас один из пакетов наших услуг. Готовы приступить к работе.</div>
                    <div class="end-dialog__packs">
                        <div class="end-dialog__pack active">
                            <input type="checkbox" checked>
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
                    <div class="start-sect__footer">
                        <div class="start-sect__persons">
                            <label class="start-sect__person">
                                <input type="checkbox" required>
                                <div class="start-sect__person-check"></div>
                                <div class="start-sect__person-text">Согласен с обработкой персональных данных</div>
                            </label>
                            <label class="start-sect__person">
                                <input type="checkbox" required>
                                <div class="start-sect__person-check"></div>
                                <div class="start-sect__person-text">Согласен с пользовательским соглашением</div>
                            </label>
                            <label class="start-sect__person">
                                <input type="checkbox" required>
                                <div class="start-sect__person-check"></div>
                                <div class="start-sect__person-text">Согласен с офертой</div>
                            </label>
                        </div>
                        <div class="end-dialog__btns">
                            <button class="def-btn end-dialog__submit" type="submit"><span>Оплата картой</span></button>
                            <button class="def-btn def-btn_second end-dialog__payment" type="submit"><span>Оплата по расчетному счету</span></button>
                        </div>
                        <div class="start-sect__call"><a href="#">Оставить заявку на консультацию</a><br>
                            <p>Не бойтесь, мы сохраним все ваши данные.<br>Заново заполнять не придется</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden" id="add-url">
            <input class="start-sect__url form__input" type="url" placeholder="https://example.com">
        </div>
        <!--=======================================================================================-->
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
        <!--=======================================================================================-->
        <div class="mart-sect">
            <div class="mart-sect__container">
                <div class="def-title mart-sect__title">Знаем рынок и свое место в нем</div>
                <div class="mart-sect__text">Для разных задач бизнеса подходят разные партнеры с их решениями</div>
                <div class="mart-sect__items">
                    <div class="mart-sect__item mart-sect__item_first"><img class="mart-sect__item-icon" src="img/m-1.png" alt="">
                        <div class="mart-sect__item-title">Лого-генераторы <span>~ 1000 ₽</span></div>
                        <div class="mart-sect__item-text">Конструктор из наборов иконок, шрифтов и стилей. Придется выбирать и делать все самому</div>
                    </div>
                    <div class="mart-sect__item mart-sect__item_select"><img class="mart-sect__item-icon" src="img/m-2.png" alt="">
                        <div class="mart-sect__item-title">Brand hub <span>~ 210 000 ₽</span></div>
                        <div class="mart-sect__item-text">Выделиться среди большой конкуренции микро, малого и среднего бизнесов за счет опыта и эффективного использования методологий</div>
                    </div>
                    <div class="mart-sect__item"><img class="mart-sect__item-icon" src="img/m-3.png" alt="">
                        <div class="mart-sect__item-title">Недорогие специалисты <span>~ 10000 ₽</span></div>
                        <div class="mart-sect__item-text">Свободные специалисты на свободном рынке с очень разным опытом и подходом к работе</div>
                    </div>
                    <div class="mart-sect__item"><img class="mart-sect__item-icon" src="img/m-4.png" alt="">
                        <div class="mart-sect__item-title">Depot <span>~ 1 200 000 ₽</span></div>
                        <div class="mart-sect__item-text">Методичная разработка бренда, дорого, надежно. Продажи увеличатся! Точнее не упадут</div>
                    </div>
                </div>
            </div>
        </div>
        <!--=======================================================================================-->
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
        <div class="proj-sect">
            <div class="proj-sect__container">
                <div class="proj-sect__title">
                    <div class="proj-sect__title-desc">Уже создано:</div>114 брендов в <span>47 сферах</span>
                </div>
                <div class="proj-sect__items"><a class="proj-sect__item proj-sect__item_big" href="#"><img class="lazy" data-src="img/p-7.jpg" alt=""></a><a class="proj-sect__item" href="#"><img class="lazy" data-src="img/p-8.jpg" alt=""></a><a class="proj-sect__item" href="#"><img class="lazy" data-src="img/p-9.jpg" alt=""></a><a class="proj-sect__item proj-sect__item_big" href="#"><img class="lazy" data-src="img/p-10.jpg" alt=""></a><a class="proj-sect__item proj-sect__item_big" href="#"><img class="lazy" data-src="img/p-11.jpg" alt=""></a><a class="proj-sect__item" href="#"><img class="lazy" data-src="img/p-12.jpg" alt=""></a></div>
                <div class="proj-sect__more"><a class="def-btn" href="#"><span>Все проекты</span></a></div>
            </div>
        </div>
        <!--=======================================================================================-->
        <div class="depot-sect">
            <div class="depot-sect__container">
                <div class="depot-sect__text">
                    <div class="def-title">
                        <div class="def-title__first"><img src="img/icons/stroke.svg" alt=""><span>Собственная</span></div><br><span>образовательная программа</span>
                    </div>
                    <p>Постоянно находим и воспитываем новую кровь - <a href="#">Depot.camp</a></p>
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
                <div class="main-footer__logo"><a class="main-header__logo" href="/"><img src="img/footer-logo.svg" alt=""><span>by depot</span></a></div>
                <div class="main-footer__column main-footer__column_first">
                    <ul class="main-footer__soc">
                        <li><a href="#"><img src="img/icons/soc-1.svg" alt=""></a></li>
                        <li><a href="#"><img src="img/icons/soc-2.svg" alt=""></a></li>
                        <li><a href="#"><img src="img/icons/soc-3.svg" alt=""></a></li>
                    </ul>
                    <div class="main-footer__info">
                        <p>© brand hub, 2022</p>
                        <p>Оферта - <a href="#">скачиваение документа</a><br><a class="main-footer__info-link" href="#">Пользовательское соглашение</a><br><a class="main-footer__info-link" href="#">Политика обработки персональных данных</a></p>
                    </div>
                </div>
                <ul class="main-footer__nav">
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Проекты</a></li>
                    <li><a href="#">Блог</a></li>
                    <li><a href="#">Сотрудничество</a></li>
                </ul>
                <ul class="main-footer__nav">
                    <li><a href="#">Брендинг</a></li>
                    <li><a href="#">Ребрендинг</a></li>
                    <li><a href="#">Дизайн упаковки</a></li>
                </ul>
                <ul class="main-footer__nav">
                    <li><a href="#">Фирменный стиль</a></li>
                    <li><a href="#">Нейминг</a></li>
                    <li><a href="#">Брендбук</a></li>
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