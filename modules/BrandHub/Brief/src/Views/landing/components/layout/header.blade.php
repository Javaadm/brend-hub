<header class="main-header main-header_fixed">
    <div class="main-header__container">
        <a class="main-header__logo" href="/">
            <img src="img/logo.svg" alt="">
            <span>by depot</span>
        </a>
        <a class="main-header__hum" href="/">
            <img src="img/icons/hum.svg" alt="">
        </a>
        <div class="main-header__menu">
            <a class="main-header__close" href="#">
                <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.545959" y="20.546" width="29" height="2" rx="1" transform="rotate(-45 0.545959 20.546)" fill="#0068FF" />
                    <rect x="21.0521" y="21.9601" width="29" height="2" rx="1" transform="rotate(-135 21.0521 21.9601)" fill="#0068FF" />
                </svg>
            </a>
            <ul class="main-header__nav">
                <li>
                    <a href="/projects/">Портфолио</a>
                </li>
                <li class="main-header__nav-sub">
                    <a href="#">Услуги</a>
                    <ul>
                        <li><a href="/services/branding">Брендинг</a></li>
                        <li><a href="/services/rebranding">Ребрендинг</a></li>
                        <li><a href="/services/package">Дизайн упаковки</a></li>
                        <li><a href="/services/firmstyle">Фирменный стиль</a></li>
                        <li><a href="/services/naming">Нейминг</a></li>
                        <li><a href="/services/brandbook">Брендбук</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/blog/">Блог</a>
                </li>
                <li>
                    <a href="http://brand-hub.tilda.ws/freelance">Для специалистов</a>
                </li>
            </ul>
            <a class="def-btn main-header__create cursor-pointer" onclick="$('html, body').stop().animate({scrollTop: ($('#step-1').offset().top - 20) + 'px'}, 'slow', 'swing');$('.main-header__menu').removeClass('active');" data-ym-goal="header-click-create-brand">
                <span>Создать бренд</span>
            </a>
        </div>
    </div>
</header>

@push('scripts')
<script>
    $('.main-header__hum').click(function (e) {
        e.preventDefault();
        $('.main-header__menu').addClass('active');
    });
    $('.main-header__close').click(function (e) {
        e.preventDefault();
        $('.main-header__menu').removeClass('active');
    });

    $('.main-header__nav-sub > a').click(function (e) {
        e.preventDefault();
        $(this).next('ul').stop().slideToggle(350);
    });
</script>
@endpush
