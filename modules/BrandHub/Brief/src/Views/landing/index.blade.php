@extends('layouts.public')

@section('content')
<div class="wrapper wrapper_fixed">
    @include('brief::landing.components.layout.header')

    <div class="title-sect">
        <div class="title-sect__container">
            <div class="title-sect__hidden">Брендинг теперь делают так</div>
            <div class="title-sect__title">
                <a href="#on-step-1" style="text-decoration: none; color: black;">
                    <div class="title-sect__title-block title-rect">Брендинг<span></span>
                        <div class="title-sect__cursor cursor-1"><img class="title-sect__cursor-icon" src="img/icons/cursor-1.svg" alt="">
                            <div class="title-sect__cursor-img"><img src="img/cursor-1.jpg" alt=""></div>
                        </div>
                    </div>
                </a>
                <div class="title-sect__title-block">теперь</div>
                <div class="title-sect__title-block">делают</div>
                <a href="#on-step-1" style="text-decoration: none; color: #1E73D7;">
                    <div class="title-sect__title-block title-select title-rect">так<span></span>
                        <div class="title-sect__cursor cursor-2"><img class="title-sect__cursor-icon" src="img/icons/cursor-2.svg" alt="">
                            <div class="title-sect__cursor-img"><img src="img/cursor-2.jpg" alt=""></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="title-sect__text">
                <p>У вас есть бизнес. У нас - 3 вопроса.<br>Создадим бренд вместе!</p>
            </div>
        </div>
    </div>

    <div class="start-sect">
        <div class="start-sect__container" id="start-steps-form">
            <div class="start-sect__title">
                <div class="start-sect__title-text">Всего 3 шага</div>
                <div class="start-sect__title-desc">Заполните наш короткий смарт бриф</div>
            </div>
            <div class="start-sect__stitle">
                <div class="start-sect__step-desc">Шаг 3</div>
            </div>
            <a name="on-step-1"></a>
            <div class="start-sect__stitle">
                <div class="start-sect__step-desc">Шаг 2</div>
            </div>

            @include('brief::landing.components.brief.step1')
            @include('brief::landing.components.brief.step2')
            @include('brief::landing.components.brief.step3')
            @include('brief::landing.components.brief.step4')
        </div>
    </div>

    @include('brief::landing.components.workflow')
    @include('brief::landing.components.market-position')
    @include('brief::landing.components.our-team')
    @include('brief::landing.components.portfolio')
    @include('brief::landing.components.education-program')
    @include('brief::landing.components.qna')

    @include('brief::landing.components.layout.footer')
</div>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/scripts.min.js') }}"></script>
<script src="{{ asset('js/magic_textarea.js') }}"></script>

@if(config('app.env') === 'production')
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(51242554, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/51242554" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <script src="{{ asset('js/analytic.js') }}"></script>
@endif

<script>
    new LazyLoad({elements_selector: '.lazy'});

    const scrollTo = (selector) => $('html, body').stop()
        .animate({scrollTop: $(selector).offset().top + 'px'}, 'slow', 'swing');

    window.matchMedia('(max-width: 992px)').addEventListener(
        'change',
        (e) => e.matches
            ? $('.main-header__menu').removeClass('active') //<992
            : $('.main-header__nav-sub > ul').removeAttr('style') //>992
    );
</script>

@stack('scripts')

@endsection
