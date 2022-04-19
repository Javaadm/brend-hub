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

  /* $('#my-menu').mmenu({
  	extensions: {
  		"all": ['theme-white', 'effect-menu-slide', "multiline", 'pagedim-black'],
  		"(max-width: 480px)": ['fullscreen']
  	},
  	navbar: {
  		title: "Меню"
  	},
  	offCanvas: {
  		"position": "right"
  	}
  });
  var api = $("#my-menu").data("mmenu");
  api.bind('open:finish', function () {
  	$('.hamburger').addClass('is-active');
  });
  api.bind('close:finish', function () {
  	$('.hamburger').removeClass('is-active');
  }); */
  //==================================================================

  /* $(".slider-sect .owl-carousel").owlCarousel({
  	loop: false,
  	nav: true,
  	dots: true,
  	items: 1,
  	rewind: true,
  	animateIn: "fadeIn",
  	animateOut: "fadeOut",
  	singleItem: true,
  	smartSpeed: 500,
  	mouseDrag: false,
  	touchDrag: false,
  	autoHeight: true,
  	navText: [
  	  '<i class="projects-sect__prev"><img src="img/icons/next.png" /></i>',
  	  '<i class="projects-sect__next"><img src="img/icons/next.png" /></i>'
  	],
  	//autoplay: true,
  	//autoplayTimeout: 7000,
  	responsive: {
  	  0: {
  		 mouseDrag: true,
  		 touchDrag: true
  	  },
  	  992: {
  		 mouseDrag: false,
  		 touchDrag: false
  	  }
  	}
   }); */
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
    "mask": "+79999999999" //"placeholder": "",
    //"clearMaskOnLostFocus": false

  }); //==================================================================
  //$('selector').css('height', '').equalHeights();
  //==================================================================

  /* $('.popup-with-zoom-anim').magnificPopup({
  	type: 'inline',
  		fixedContentPos: false,
  	fixedBgPos: true,
  		overflowY: 'auto',
  		closeBtnInside: true,
  	preloader: false,
  	
  	midClick: true,
  	removalDelay: 300,
  	mainClass: 'my-mfp-zoom-in'
  }); */
  //==================================================================

  $('.main-header__hub').click(function () {
    $(this).toggleClass('active');
    $('.main-header__content').toggleClass('active');
  }); //==================================================================

  $('.faq-sect__item-title').click(function () {
    var $parent = $(this).parent('.faq-sect__item');

    var _this = this;

    if (!$parent.hasClass('active')) {
      $('.faq-sect__item').removeClass('active');
      $parent.toggleClass('active');
      $('.faq-sect__item').each(function (n, el) {
        if (!$(el).hasClass('active')) {
          $(el).find('.faq-sect__item-text').stop().slideUp(250);
          return;
        }

        $(el).find('.faq-sect__item-text').stop().slideDown(250);
      });
      return;
    }

    $parent.toggleClass('active');
    $(this).next('.faq-sect__item-text').stop().slideUp(250);
  }); //==================================================================
});