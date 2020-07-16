import { TweenMax, TimelineMax, Power0 } from 'gsap';
import ScrollMagic from 'ScrollMagic';
import { ScrollMagicPluginGsap } from 'scrollmagic-plugin-gsap';
import 'scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators';

ScrollMagicPluginGsap(ScrollMagic, TweenMax, TimelineMax);

export default {
  init() {

    // mobile menu click event ----->
    $('#mobile_menu_click').on('click', function(e){
      e.preventDefault();
      $('.mobile-menu').slideDown().addClass('mobile-menu-open');
      $('body').addClass('no-scroll');
      $(this).hide();
      $('#close_button').show();
    });

    $('#close_button').on('click', function (e) {
      e.preventDefault();
      $('.mobile-menu').slideUp().removeClass('mobile-menu-open');
      $('body').removeClass('no-scroll');
      $(this).hide();
      $('#mobile_menu_click').show();
    });
    // mobile menu click event ----->

    // Login popup action ----->
    $('.secondary-nav a[href^="#"]').on('click', function(){
      $('.login-link-container').fadeToggle();
    });

    $('.login-button--mobile').on('click', function () {
      $('.login-links--mobile').slideToggle();
      $('.mobile-menu').addClass('menu-scroll');
    });
    // Login popup action ----->

    // testimonial slider ---->
    $('.testimonial-slider').slick({
      slidesToShow:1,
      slidesToScroll:1,
      autoplay:false,
      draggable: true,
      arrow:true,
      prevArrow: '<div class="slider-button prev"><div class="button-inner"><span class="arrow prev"></span><span class="center-line center-prev"></span></div></div>',
      nextArrow: '<div class="slider-button next"><div class="button-inner"><span class="arrow next"></span><span class="center-line center-next"></span></div></div>',

      responsive: [{

        breakpoint: 768,
        settings: {
          adaptiveHeight: true,
        },

      }],
    });
    // testimonial slider ---->

    // FAQ dropdown action ---->
    $('.single-question-container').on('click', function(){
      $(this).find('.faq-answer').slideToggle();
      $(this).find('.faq-arrow').toggleClass('arrow-flipped');
    });
    // FAQ dropdown action ---->

    // blocks with colored overlay were inheriting margin and spacing that needed to be removed when using columns
    $('.single-colored-box').parent().addClass('colored-box-parent');
    $('.single-colored-box').parent().parent().addClass('colored-box-grandparent');

    // Set the service
    $(document).on('change','.bookly-js-select-service',function(){
      var el = $('.bookly-js-select-service');
      var selectedText = el.find('option:selected').text().replace('Select service','').replace('Select topic','');
      var safeText = selectedText.replace(/\s+/g, '-').replace(/&+/g, 'and').toLowerCase();

      
      $('#get-started-category').attr('value', safeText);
    });

    // Watch for title changes
    // No events to listen to so this is it
    
    $(document).on('DOMSubtreeModified','.bookly-form', function () {
      var text = $('.bookly-page-title').text();
      var compareText = 'You Are All Set!';
      var safeText = $('#get-started-category').val();
      
      if(text === compareText){
        $('.related-articles').hide();
      
        if ($('#' + safeText).length > 0) {
          $('.gs').fadeIn();
          $('#' + safeText).fadeIn();  
        } else {
          $('.gs').hide();
        }
      }
    });
    
    // animations ------>
    $(window).on('load', function(){

      // home hero bg pattern slide up
      $('.background-pattern--full').addClass('animate__slide-up');

    });

// only run scrollmagic animations if it is NOT IE 11

    function GetIEVersion() {
      var sAgent = window.navigator.userAgent;
      var Idx = sAgent.indexOf('MSIE');

      // If IE, return version number.
      if (Idx > 0){

        return parseInt(sAgent.substring(Idx + 5, sAgent.indexOf('.', Idx)));
      }



      else {
        return 0; //It is not IE
      }
    }

    if (GetIEVersion() > 0){
      console.log('IE');
    }
    else {
      TweenMax.fromTo('.home-hero .hand-1', 1, { opacity: 0, rotation: -10, ease: Power0.easeNone }, { opacity: 1, rotation: 10, ease: Power0.easeNone });
      TweenMax.from('.home-hero .hand-2', 1, { x: 150, opacity: 0, delay: .2 });
      TweenMax.to('.animation__slide-up--strategy-block, .animated__strategy-block-content', 1, { y: -100, opacity: 1, delay: .5 });


      // ScrollMagic ------------>

      // Animates sections when scrolled over
      var controller = new ScrollMagic.Controller();

      $('.animation__slide-up, .animation__slide-up--scroll, .button-slide-up, .animate__fade-in, .animate__fade-in--delayed, .animation__slide-in-from-right, .animation__slide-in-from-left, .animation__slide-up--delayed').each(function () {
        // create a scene
        new ScrollMagic.Scene({
          triggerElement: this,
          triggerHook: .9,
          reverse: false,
        })
          .setClassToggle(this, 'element-in-view')
          .addTo(controller); // assign the scene to the controller
      });


      var windowWidth = $(window).width();

      if (windowWidth > 769) {

        $(window).on('load', function () {
          var parallaxController = new ScrollMagic.Controller();

          var handTween = TweenMax.fromTo('.hand-1', 1, { rotation: 10, ease: Power0.easeNone }, { rotation: -10, ease: Power0.easeNone });

          // create a scene
          new ScrollMagic.Scene({
            triggerElement: '.hand-1',
            triggerHook: .2,
            offset: 225,
            duration: 600,
          })
            .setTween(handTween)
            .addTo(parallaxController); // assign the scene to the controller
        });


        var parallaxController2 = new ScrollMagic.Controller();

        var handTween2 = TweenMax.to('.hand-2', 1, { y: -50, ease: Power0.easeNone });

        // create a scene
        new ScrollMagic.Scene({
          triggerElement: '.hand-1',
          triggerHook: .2,
          duration: 500,
        })
          .setTween(handTween2)
          .addTo(parallaxController2); // assign the scene to the controller
      }
    }


  },
  finalize() {

  },
};
