"use strict";

$(function () {

    $(document).on('click', (e) => {
        const ymGoal = e.target.getAttribute('data-ym-goal')
            ?? e.target.parentNode.getAttribute('data-ym-goal')
            ?? e.target.parentNode.parentNode.getAttribute('data-ym-goal');

        if (ymGoal === null) {
            return;
        }

        ym(51242554, 'reachGoal', ymGoal);
    });

    //==================================================================
    var lazyLoadInstance = new LazyLoad({
        elements_selector: ".lazy"
    });
    /* if (lazyLoadInstance) {
        lazyLoadInstance.update();
    } */
    //==========================checks-tab-1-2========================================

    /* const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'vertical',
        loop: true,
            // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },
            // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
            // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 4,
                spaceBetween: 40
            }
        }
    }); */
    //==================================================================

    $('input[name="phone"]').inputmask({
        "mask": "+7 999 999 99 99",
        "autoUnmask": true //"placeholder": "+7 777 777 77 77",
        //"greedy": false,
        //clearMaskOnLostFocus: true
        //"clearIncomplete": true

    }); //==================================================================

    /* $(window).scroll(function () {
        if ($(window).scrollTop() >= $(window).height()) {
            $('.scroll-up').addClass('active');
        } else {
            $('.scroll-up').removeClass('active');
        }
    });
    $('.scroll-up').click(function () {
        $('html, body').stop().animate({
            scrollTop: 0
        }, 'slow', 'swing');
    }); */
    //==================================================================
    //$('#step-2 .start-sect__des-title').css('height', '').equalHeights();
    //==================================================================

    $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',
        fixedContentPos: false,
        fixedBgPos: true,
        overflowY: 'auto',
        closeBtnInside: true,
        preloader: false,
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
    });
    $('.end-dialog__payment').magnificPopup({
        type: 'inline',
        fixedContentPos: false,
        fixedBgPos: true,
        overflowY: 'auto',
        closeBtnInside: true,
        preloader: false,
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-steps-anim').magnificPopup({
        type: 'inline',
        fixedContentPos: false,
        fixedBgPos: true,
        overflowY: 'auto',
        closeBtnInside: true,
        preloader: false,
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in',
        callbacks: {
            beforeOpen: function beforeOpen() {//console.log('Start of popup initialization');
            },
            open: function open() {
                var data = {};
                var caseData = [];
                var desData = [];
                var urlsData = [];
                var tagsData = [];
                $('.start-sect__check input').each(function (n) {
                    var data = {};
                    data[$(this).attr('name')] = $(this).is(':checked') ? 'on' : 'off';
                    caseData.push(data);
                });
                data["case"] = caseData;
                data.vector = $('#labels-input').val();
                $('.start-sect__des input').each(function (n) {
                    var data = {};
                    data[$(this).attr('name')] = $(this).is(':checked') ? 'on' : 'off';
                    desData.push(data);
                });
                data.designs = desData;
                $('.start-sect__urls input').each(function (n) {
                    urlsData.push($(this).val());
                });
                data.urls = urlsData;
                $('.start-sect__tag input').each(function (n) {
                    var data = {};
                    data[$(this).attr('name')] = $(this).is(':checked') ? 'on' : 'off';
                    tagsData.push(data);
                });
                data.tags = tagsData;
                $('#start-hidden').val(JSON.stringify(data));
            }
        }
    }); //==================================================================

    function saveSessionUrl() {
        let urls = [];
        $("input.form__input.start-sect__url").each(function( index ) {
            let val = $( this ).val();
            if (val){
                urls.push(val);
            }
        })
        console.log(urls)
        if(urls) {
            $.post("update-session", {urls: urls});
        }else{
            $.post("update-session", {urls: " "})
        }
    }

    $('.faq-sect__item-title').on('click', f_acc);

    function f_acc() {
        $('.faq-sect__item-text').not($(this).next()).stop().slideUp(300);
        $('.faq-sect__item-title').not($(this)).removeClass('active');
        $(this).toggleClass('active');
        $(this).next().slideToggle(300);
    } //==================================================================


    $('.main-header__hum').click(function (e) {
        e.preventDefault();
        $('.main-header__menu').addClass('active');
    });
    $('.main-header__close').click(function (e) {
        e.preventDefault();
        $('.main-header__menu').removeClass('active');
    }); //==================================================================

    $('.main-header__nav-sub > a').click(function (e) {
        e.preventDefault();
        $(this).next('ul').stop().slideToggle(350);
    }); //==================================================================

    var mqLaptop = window.matchMedia('(max-width: 992px)');

    function mqLaptopCallback(e) {
        if (e.matches) {
            //<992
            $('.main-header__menu').removeClass('active');
        } else {
            //>992
            $('.main-header__nav-sub > ul').removeAttr('style');
        }
    }

    mqLaptop.addEventListener('change', mqLaptopCallback); //==================================================================

    $('#labels-input').keypress(function (e) {
        var which = e.which;
        var text = $(this).val().trim();

        if (which == 13) {
            if (text) {
                $(this).addClass('enter');
                $(this).data('sw', 1);
            }
        }
    });
    $('#labels-input').on('input', function (e) {
        var text = $(this).val().trim();

        if (!text) {
            $(this).removeClass('enter');
            $(this).data('sw', '');
        }
    }); //???????????????? ?????????? ??????????

    $('#name-input').on('change', function (e) {
        validNameInput(this);
    });

    function validNameInput(el) {
        var text = $(el).val().trim();

        if (text.length > 1) {
            $(el).removeClass('error');
            $(el).addClass('enter');
            return true;
        }

        $(el).removeClass('enter');
        $(el).addClass('error');
        return false;
    } //???????????????? ?????????? ????????????????


    $('#phone-input').on('change', function (e) {
        validPhoneInput(this);
    });

    function validPhoneInput(el) {
        var text = $(el).val().trim();

        if (text.length != 10) {
            $(el).removeClass('enter');
            $(el).addClass('error');
            return false;
        }

        $(el).removeClass('error');
        $(el).addClass('enter');
        return true;
    } //???????????????? ?????????? email


    $('#email-input').on('change', function (e) {
        validEmailInput(this);
    });

    function validEmailInput(el) {
        var text = $(el).val().trim();

        if (!validateEmail(text)) {
            $(el).removeClass('enter');
            $(el).addClass('error');
            return false;
        }

        $(el).removeClass('error');
        $(el).addClass('enter');
        return true;
    }

    function validateEmail(email) {
        var pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\ [[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return pattern.test(String(email).toLowerCase());
    } //==================================================================


    $('.start-sect__labels-items').on('click', 'a', function (e) {
        e.preventDefault();
        var text = $(this).data('value');
        var id = this.hash;

        $.post( "update-session", { "category_label":text});
        $(".start-sect__labels-item").removeClass("active");

        if (!$(this).hasClass('active')) {
            addLablelForInput(id, text);
            $(this).toggleClass('active');
            return;
        }

        removeLabelForInput(id, text);
        $(this).toggleClass('active');
    });

    function addLablelForInput(id, text) {
        var input = $(id);
        var value = input.val().trim();

        if (value) {
            value = text;
            input.val(value);
            input.trigger('input');
            return;
        }

        input.val(text);
        input.trigger('input');
    }

    function removeLabelForInput(id, text) {
        var input = $(id);
        var value = input.val().trim();

        if (value) {
            value = value.split(/\s*,\s*/);
            var arr = [];
            value.forEach(function (item) {
                if (!(text == item)) {
                    arr.push(item);
                }
            });
            value = arr.join(', ');
            $(id).val(value);
            $(id).trigger('input');
        }
    } //==================================================================


    $('.start-sect__add-url').click(function (e) {
        e.preventDefault();
        var id = this.hash;
        $('.start-sect__urls').append($(id + ' input').clone());
        saveSessionUrl();
    }); //==================================================================

    $('.end-dialog__pack').click(function (e) {

        $.post( "update-session", { "tariff":$(this).attr("number")});
        if (!$(this).hasClass('active')) {
            $('.end-dialog__pack').removeClass('active');
            $('.end-dialog__pack').removeClass('error');
            $('.end-dialog__packs-error').removeClass('active');
            $(this).addClass('active');
            $(this).find('input').prop('checked', true);
            return;
        }

        $(this).find('input').prop('checked', false);
        $('.end-dialog__pack').removeClass('error');
        $('.end-dialog__packs-error').removeClass('active');
        //$(this).toggleClass('active');

    }); //==================================================================

    $('.end-dialog__btns').on('click', '.def-btn', function (e) {
        var sw = false;
        $('.end-dialog__pack input').each(function () {
            if ($(this).is(':checked')) {
                sw = true;
                return false;
            }
        });

        if (!sw) {
            $('.end-dialog__pack').addClass('error');
            $('.end-dialog__packs-error').addClass('active');
            e.preventDefault();
            return;
        }

        var name = document.querySelector('#name-input');
        var phone = document.querySelector('#phone-input');
        var email = document.querySelector('#email-input');

        if (!validNameInput(name)) {
            e.preventDefault();
            $(name).focus();
            return;
        }

        if (!validPhoneInput(phone)) {
            e.preventDefault();
            $(phone).focus();
            return;
        }

        if (!validEmailInput(email)) {
            e.preventDefault();
            $(email).focus();
        }
    }); //==================================================================

    $('.start-sect__tab').click(function (e) {

        e.preventDefault();
        var id = this.hash;
        $.post( "update-session", { type: id.slice(-1) });
        if(id.slice(-1) == 1){
            $(".end-dialog__pack-title__type").text(" ???????????? ???????????????? ");
        }else{
            $(".end-dialog__pack-title__type").text(" ?????????????????? ?????????? ");
        }

        if(id.slice(-1) == 1){
            if($("#step-3-dop").hasClass("active")){
                $("#step-3-dop").removeClass("active")
                $("#step-3").addClass("active")
            }
        }else{
            if($("#step-3").hasClass("active")){
                $("#step-3-dop").addClass("active")
                $("#step-3").removeClass("active")
            }
        }
        var stepId = $(this).data('step-id');

        if (!$(this).hasClass('active')) {
            $('.start-sect__tab').removeClass('active');
            $(this).addClass('active');
            $('.start-sect__tabs-container').removeClass('active');
            $(id).addClass('active');
            $('#step-btn-2').attr('href', stepId);
        }
    }); //==================================================================

    // $('.next-checks-tab').click(function (e) {
    //     e.preventDefault();
    //     var id = this.hash;
    //     var parent = $(id).parent('.start-sect__tabs-container');
    //     parent.find('.start-sect__tcontent').removeClass('active'); //$('.start-sect__tcontent').removeClass('active');
    //
    //     $(id).addClass('active');
    //     scrollTo('.start-sect__tabs');
    // });

    $('#step-btn-1-3').click(function (e) {
        e.preventDefault();
        var id = this.hash;
        var sw = false;
        var parent = $($(this).data('checks-container'));
        parent.find('.start-sect__checks input').each(function () {
            if ($(this).is(':checked')) {
                sw = true;
                return false;
            }
        });

        if (sw) {
            $(id).stop().slideToggle(300);
            $('.start-sect__stitle').each(function () {
                $(this).css('display', 'none');
            });
            scrollTo(id);
            $('#step-2 .start-sect__des-title').css('height', '').equalHeights();
        } else {
            $('.start-sect__tcontent').removeClass('active');
            $('#checks-tab-1').addClass('active');
            scrollTo('.start-sect__tabs-container');
        }
    });

    $('.next-checks-tab').click(function (e) {
        e.preventDefault();
        var id = this.hash;
        var parent = $(id).parent('.start-sect__tabs-container');
        parent.find('.start-sect__tcontent').removeClass('active'); //$('.start-sect__tcontent').removeClass('active');

        $(id).addClass('active'); //scrollTo('.start-sect__tabs');

        scrollTo('.start-sect__tabs-container');
    });



    //==================================================================

    $('#step-btn-1-2').click(function (e) {
        e.preventDefault();
        var id = this.hash;
        var sw = false;
        var parent = $($(this).data('checks-container'));
        parent.find('.start-sect__checks input').each(function () {
            if ($(this).is(':checked')) {
                sw = true;
                return false;
            }
        });

        if (sw) {
            $.post( "update-session", { step: 2 });
            $(id).stop().slideToggle(300);
            $('.start-sect__stitle').each(function () {
                $(this).css('display', 'none');
            });
            scrollTo(id);
            $('#step-2 .start-sect__des-title').css('height', '').equalHeights();
        } else {
            scrollTo('.start-sect__tabs');
        }
    });
    $('#step-btn-2-2').click(function (e) {

        e.preventDefault();
        var id = this.hash;
        var sw = false;
        var parent = $($(this).data('checks-container'));
        parent.find('.start-sect__checks input').each(function () {
            if ($(this).is(':checked')) {
                sw = true;
                return false;
            }
        });

        if (sw) {
            $.post( "update-session", { step: 2 });
            $(id).stop().slideToggle(300);
            $('.start-sect__stitle').each(function () {
                $(this).css('display', 'none');
            });
            scrollTo(id);
            $('#step-2 .start-sect__des-title').css('height', '').equalHeights();
        } else {
            scrollTo('.start-sect__tabs');
        }
    });

    $('#step-btn-1-2').click(function (e) {
        $.post( "update-session", { "step-1-board": "2" });
    });

    $('#step-btn-1-1').click(function (e) {
        $.post( "update-session", { "step-1-board": "2" });
    });


    $('#step-btn-v2-1-1').click(function (e) {
        $.post( "update-session", { "step-1-board": "2" });
    });
    $('#step-btn-v2-1-2').click(function (e) {
        $.post( "update-session", { "step-1-board": "3" });
    });
    $('#step-btn-v2-1-3').click(function (e) {
        $.post( "update-session", { "step-1-board": "4" });
    });







    //==================================================================

    $('#step-btn-2').click(function (e) {
        saveSessionUrl();
        e.preventDefault();
        var id = this.hash;
        var labels = document.querySelector('#labels-input');
        var sw = false;
        var text = $(labels).val().trim();

        if (!(text.length > 0)) {
            $(labels).addClass('error');
            scrollTo('#step-2');
            $(labels).focus();
            return;
        }

        $(labels).removeClass('error');
        $('.start-sect__des input').each(function () {
            if ($(this).is(':checked')) {
                sw = true;
                return false;
            }
        });

        if (sw) {
            $(id).stop().slideToggle(300);
            scrollTo(id);
            $.post( "update-session", { step: 3 });
        } else {
            scrollTo('.start-sect__dess');
        }
    }); //==================================================================

    $('#step-btn-3').click(function (e) {
        $.post( "update-session", { step: 4 });
        e.preventDefault();
        var id = this.hash;
        $(id).stop().slideToggle(300);
        scrollTo(id);
    });
    $('#step-btn-3-2').click(function (e) {
        $.post( "update-session", { step: 4 });
        e.preventDefault();
        var id = this.hash;
        $(id).stop().slideToggle(300);
        scrollTo(id);
    }); //==================================================================

    $(".start-sect__check input").click(function (e) {
        $.post( "update-session", { image: e.currentTarget.name.substring(4)-1 });
        let card;

        if ($(this).attr("name2")!="product"){
            card = $(".start-sect__check__step_3__"+(e.currentTarget.name.substring(4)).toString());
        }else{
            card = $(".start-sect__select__step_3__"+(e.currentTarget.name.substring(4)).toString());
        }

        if( card.hasClass("active")){
            card.removeClass("active");
        }else{
            card.addClass("active");
        }
    });

    $(".start-sect__color input").click(function (e) {
        $.post( "update-session", { "images-v2-color": e.currentTarget.name.substring(6)-1 });
    });
    $(".start-sect__check.shape input").click(function (e) {
        $.post( "update-session", { "images-v2-shape": e.currentTarget.name.substring(4)-1 });
    });
    $(".start-sect__check-wrapper input").click(function (e) {
        $.post( "update-session", { "images-v2-pattern": e.currentTarget.name.substring(4)-1 });
    });
    $(".start-sect__check.font input").click(function (e) {
        $.post( "update-session", { "images-v2-font": e.currentTarget.name.substring(4)-1 });
    });

    function scrollTo(id) {
        $('html, body').stop().animate({
            scrollTop: "".concat($(id).offset().top, "px")
        }, 'slow', 'swing');
    } //==================================================================

    $("input.start-sect__labels-input").focusout(function (e) {
        var text = $( this ).val();
        $.post( "update-session" , { "category_label":text});
    });

    $("input.start-sect__step-moment-1").focusout(function (e) {
        var text = $( this ).val();
        $.post( "update-session", { "moment_business":text});
    });
    $("input.start-sect__step-moment-2").focusout(function (e) {
        var text = $( this ).val();
        $.post( "update-session", { "emotions_service":text});
    });
    $(".name-input-lead").focusout(function (e) {
        var text = $( this ).val();
        $.post( "update-session", { "name":text});
    });
    $(".phone-input-lead").focusout(function (e) {
        var text = $( this ).val();
        $.post( "update-session", { "phone":text});
    });
    $("#name-input").focusout(function (e) {
        var text = $( this ).val();
        $.post( "update-session", { "name":text});
    });
    $("#phone-input").focusout(function (e) {
        var text = $( this ).val();
        $.post( "update-session", { "phone":text});
    });
    $("#email-input").focusout(function (e) {
        var text = $( this ).val();
        $.post( "update-session", { "email":text});
    });

    $(".lead-name-input").focusout(function (e) {
        var text = $( this ).val();
        // alert(window.location.origin +  "/update-session");
        $.post( window.location.origin +  "/update-session", { "name":text});
    });
    $(".lead-phone-input").focusout(function (e) {
        var text = $( this ).val();
        $.post( window.location.origin +  "/update-session", { "phone":text});
    });
    $(".lead-email-input").focusout(function (e) {
        var text = $( this ).val();
        $.post( window.location.origin +  "/update-session", { "email":text});
    });
    $("input.form__input.start-sect__url").focusout(function (e) {

        saveSessionUrl();
    });
    $('.start-sect__tag input').click(function (e){

        let emotionsId = e.currentTarget.name.substring(3)-1;
        let emotionsText = e.currentTarget.parentNode.children[2].textContent
        console.log(emotionsId)
        console.log($(this).attr("image"))
        console.log(emotionsText)
        $.post( "update-session", { emotionsId: emotionsId, imageId: $(this).attr("image"), emotionsText:emotionsText });
    });

    $(".start-sect__des input").click(function (e) {
        $.post( "update-session", { des: e.currentTarget.name.substring(3)-1 });
    });

    $(".lead-dialog__submit").click(function (e) {
        if(e.currentTarget.name === "order"){
            // alert(window.location.origin +  "/send-order");
            $.get( window.location.origin +  "/send-order");
        }else {
            // alert(window.location.origin +  "/send-lead");
            $.get( window.location.origin + "/send-lead");
        }
        $(this).magnificPopup('close');
    });

    $(".end-dialog__payment").click(function (e) {
        $.get( "send-order");
    });

    $(".thanks-dialog__submit").click(function (e) {
        $(this).magnificPopup('close');

    });
});
