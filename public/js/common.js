"use strict";



$(function () {
  //==================================================================
  var lazyLoadInstance = new LazyLoad({
    elements_selector: ".lazy"
  });
  /* if (lazyLoadInstance) {
  	lazyLoadInstance.update();
  } */
  //==================================================================

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
    function saveSessionUrl() {
        let urls = [];
        $("input.form__input.start-sect__url").each(function( index ) {
            let val = $( this ).val();
            if (val){
                urls.push(val);
            }
        })
        if(urls) {
            $.post("update-session", {urls: urls});
        }else{
            $.post("update-session", {urls: " "})
        }
    }

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
  }); //Проверка ввода имени

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
  } //Проверка ввода телефона


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
  } //Проверка ввода email


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
    $('.start-sect__urls').append($(id + ' input').clone().focusout(function (e) {
          saveSessionUrl();
      }));
  }); //==================================================================

  $('.end-dialog__pack').click(function () {
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
    $(this).toggleClass('active');
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

  $('#step-btn-1').click(function (e) {
      $.post( "update-session", { step: 1 });
    e.preventDefault();
    var id = this.hash;
    var sw = false;
    $('.start-sect__checks input').each(function () {
      if ($(this).is(':checked')) {
        sw = true;
        return false;
      }
    });

    if (sw) {
      $(id).stop().slideToggle(300);
      scrollTo(id);
      $('#step-2 .start-sect__des-title').css('height', '').equalHeights();
    } else {
      scrollTo('.start-sect__checks');
    }
  }); //==================================================================

  $('#step-btn-2').click(function (e) {
      $.post( "update-session", { step: 2 });
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
    } else {
      scrollTo('.start-sect__dess');
    }
  }); //==================================================================

  function scrollTo(id) {
    $('html, body').stop().animate({
      scrollTop: "".concat($(id).offset().top, "px")
    }, 'slow', 'swing');
  } //==================================================================


    $(".start-sect__check input").click(function (e) {
        $.post( "update-session", { image: e.currentTarget.name.substring(4)-1 });
    });

  $(".start-sect__des input").click(function (e) {
        $.post( "update-session", { des: e.currentTarget.name.substring(3)-1 });
    });

  $(".case-checks-menu-button").click(function (e) {
      $(".case-checks-menu-button-active").removeClass("case-checks-menu-button-active");
      $(".case-checks-menu-stick-active").removeClass("case-checks-menu-stick-active");
      $(".start-sect__checks-active").removeClass("start-sect__checks-active");
      let id_stick = "stick-"+e.currentTarget.id;
      let id_cases = "cases-"+e.currentTarget.id;

      $("#"+id_stick).addClass("case-checks-menu-stick-active");
      $("."+id_cases).addClass("start-sect__checks-active");
      $(this).addClass("case-checks-menu-button-active");
      //$.post( "update-session", { des: e.currentTarget.name.substring(3)-1 });
  });
    $("input.form__input.start-sect__url").focusout(function (e) {
        saveSessionUrl();
    });
    $("input.start-sect__labels-input").focusout(function (e) {
        var text = $( this ).val();
        $.post( "update-session", { "category_label":text});
    });
    $('.start-sect__tag input').click(function (e){
        let emotionsId = e.currentTarget.name.substring(3)-1;
        let emotionsText = e.currentTarget.parentNode.children[2].textContent

        $.post( "update-session", { emotionsId: emotionsId, emotionsText:emotionsText });
    });
    $(window).on('load', function() {

    });
});
