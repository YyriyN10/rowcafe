jQuery(function() {


  //Get Window Width, Height

  let windWid = jQuery(window).width();
  let windHeig = jQuery(window).height();

  jQuery(window).resize(function () {
    windWid = jQuery(window).width();
    windHeig = jQuery(window).height();
  });

  jQuery('.product-page .button').on('click', function (e){
    e. preventDefault();
    let thisName = jQuery(this).text();
    jQuery('.popup.active .popup__title').text(thisName);

  })

  // Lazy load

  jQuery('.lazy').lazy();

  // What You Get Slider

  jQuery('#what-you-get-slider').slick({
      autoplay: true,
      autoplaySpeed: 3000,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      arrows: false,
      asNavFor: '#what-you-get-pic-slider',
      fade: true
  });

  jQuery('#what-you-get-pic-slider').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    asNavFor: '#what-you-get-slider',
    fade: true
  });

  // Other countries slider

  jQuery('#other-countries-slider').slick({
    autoplay: false,
    autoplaySpeed: 3000,
    slidesToShow: 3,
    slidesToScroll: 1,
    // waitForAnimate: false,
    cssEase: 'linear',
    speed: 100,
    arrows: false,
    infinite: true,
    centerMode: true,
    variableWidth: true,
    centerPadding: '10px',
    initialSlide: 1,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          speed: 300,
        }
      },
      {
        breakpoint: 767,
        settings: {
          speed: 300,
          slidesToShow: 1,
          initialSlide: 0,
          centerMode: false,
          variableWidth: false,
          fade: true
        }
      }
    ]
  });

  jQuery('.partner-mep .other-countries-wrapper .prev').click(function(e){
    e.preventDefault();

    jQuery('#other-countries-slider').slick('slickPrev');
  });

  jQuery('.partner-mep .other-countries-wrapper .next').click(function(e){
    e.preventDefault();

    jQuery('#other-countries-slider').slick('slickNext');
  });

  //Partners Slider

  jQuery('#partner-slider').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 500,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });



  jQuery('.partner-mep .controls-wrapper .prev').click(function(e){
    e.preventDefault();

    jQuery('#partner-slider').slick('slickPrev');
  });

  jQuery('.partner-mep .controls-wrapper .next').click(function(e){
    e.preventDefault();

    jQuery('#partner-slider').slick('slickNext');
  });

  let allPartnerSlides = jQuery('#partner-slider .slick-slide').length;
  let allPartnerCloned = jQuery('#partner-slider .slick-cloned').length;

  jQuery('.partner-mep .controls-wrapper .counter .all').text( allPartnerSlides - allPartnerCloned);

  jQuery('#partner-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){

    jQuery('.partner-mep .controls-wrapper .counter .current').text(nextSlide+1);

  });

  // What You Get Slider

  jQuery('#start-business-easily-img-slider').slick({
    autoplay: false,
    autoplaySpeed: 5000,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    asNavFor: '#coffee-name-slider',
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 575,
        settings: {
          slidesToShow: 2
        }
      }
    ]

  });

  jQuery('#coffee-name-slider').slick({
    autoplay: false,
    autoplaySpeed: 5000,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    focusOnSelect: true,
    asNavFor: '#start-business-easily-img-slider',
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 575,
        settings: {
          slidesToShow: 2
        }
      }
    ]
  });

  //Accordion

  jQuery('#accordion .card:first-child .card-link').removeClass('collapsed');
  jQuery('#accordion .card:first-child .collapse').addClass('show');


  //Coffee Shops

  jQuery('.choose-coffee-shop .content').each(function (){
    let thisShop = jQuery(this);

    thisShop.find('.shop-colors .nav-item:first-child .nav-link').addClass('active');
    thisShop.find('.slider-wrapper .tab-pane:first-child').addClass('active');

    let prevPic = thisShop.find('.shop-colors .nav-item:first-child .nav-link').attr('data-preview');

    thisShop.find('.pic-wrapper img').attr('src', prevPic);

    let prevSlide = thisShop.find('.slider-wrapper .prev');
    let nextSlide = thisShop.find('.slider-wrapper .next');
    let thisSlider = thisShop.find('.slider-wrapper .coffee-shop-slider');

    if ( windWid > 992 ){
      thisSlider.find('.mob-preview').remove();
    }

    thisSlider.slick({
        autoplay: false,
        autoplaySpeed: 5000,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true
    });

    prevSlide.click(function(e){
        e.preventDefault();

      thisSlider.slick('slickPrev');
    });

    nextSlide.click(function(e){
        e.preventDefault();

      thisSlider.slick('slickNext');
    });

    thisShop.find('.shop-colors .nav-item .nav-link').on('click', function (){
      let thisPrevPic = jQuery(this).attr('data-preview');
      thisShop.find('.pic-wrapper img').attr('src', thisPrevPic);
    })


    thisShop.find('.shop-colors .nav-tabs a').on('shown.bs.tab', function(event){
      thisSlider.slick('reinit');
    });
  })


  //Phone Mask
  jQuery('input[type=tel]').intlTelInput({
    preferredCountries: ["ua"],
    nationalMode: false,
    autoPlaceholder: true,

  });


  //Calculator

  jQuery('#test-slider').slick({
    autoplay: false,
    autoplaySpeed: 5000,
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 1,
    infinite: false,
    slidesToScroll: 1,
    arrows: false,

  });

  /*for (let e of document.querySelectorAll('input[type="range"].slider-progress')) {
    e.style.setProperty('--value', e.value);
    e.style.setProperty('--min', e.min == '' ? '0' : e.min);
    e.style.setProperty('--max', e.max == '' ? '100' : e.max);
    e.addEventListener('input', () => e.style.setProperty('--value', e.value));
  }*/

  /*let calcCup = jQuery( "#calc-cup" );
  let midlPrice = jQuery( "#midl-price" );
  let coffeeCount = jQuery( "#coffee-count" );
  let rentPrice = jQuery( "#rent-price" );*/

  let sumField = jQuery('.result-wrapper .sum span');

  jQuery( "#cup-slider" ).slider({
    range: "min",
    value: 19,
    min: 5,
    step: 1,
    max: 200,
    slide: function( event, ui ) {
      jQuery( "#calc-cup span" ).text( ui.value );
      coffeeCalc();
    }
  });

  jQuery( "#calc-cup span" ).text( 19 );

  jQuery( "#midl-price-slider" ).slider({
    range: "min",
    value: 30,
    min: 20,
    step: 1,
    max: 45,
    slide: function( event, ui ) {
      jQuery( "#midl-price span" ).text( ui.value );
      coffeeCalc();
    }
  });

  jQuery( "#midl-price span" ).text( 30 );

  jQuery( "#coffee-count-slider" ).slider({
    range: "min",
    value: 1,
    min: 1,
    step: 1,
    max: 10,
    slide: function( event, ui ) {
      jQuery( "#coffee-count span" ).text( ui.value );
      coffeeCalc();
    }
  });

  jQuery( "#coffee-count span" ).text( 1 );

  jQuery( "#rent-price-slider" ).slider({
    range: "min",
    value: 2100,
    min: 500,
    step: 100,
    max: 10000,
    slide: function( event, ui ) {
      jQuery( "#rent-price span" ).text( ui.value );
      coffeeCalc();
    }
  });

  jQuery( "#rent-price span" ).text( 2100 );

  function coffeeCalc(){
    let capDey = Number(jQuery( "#calc-cup span" ).text());
    let midlPrice = Number(jQuery( "#midl-price span" ).text());
    let caffeCount = Number(jQuery( "#coffee-count span" ).text());
    let rentPrice = Number(jQuery( "#rent-price span" ).text());

    /*let totalSum = ( capDey * midlPrice * caffeCount) - ( caffeCount * rentPrice );*/

    let totalSum = ( (capDey * 30) * midlPrice * caffeCount) - ( caffeCount * rentPrice );

    sumField.text(totalSum);
  }

  let capDey = Number(jQuery( "#calc-cup span" ).text());
  let midlPrice = Number(jQuery( "#midl-price span" ).text());
  let caffeCount = Number(jQuery( "#coffee-count span" ).text());
  let rentPrice = Number(jQuery( "#rent-price span" ).text());

  /*let totalSum = ( capDey * midlPrice * caffeCount) - ( caffeCount * rentPrice );*/
  let totalSum = ( (capDey * 30) * midlPrice * caffeCount) - ( caffeCount * rentPrice );

  sumField.text(totalSum);

//Progress Bar

  if ( jQuery('.get-better-macretint').length ){


    /*let progressPosition = 0;

    function progressStep(){
      jQuery('#better-macretint-progress').css({'background' : 'conic-gradient(rgb(64, 47, 34)' + progressPosition + '%,rgb(242, 242, 242) ' + progressPosition +'%)'})
    }*/


    /*setTimeout(() => jQuery('#better-macretint-progress [data-role="radial-progress"]').css('--progress-percent', '20'), 1000);*/


    jQuery('.get-better-macretint').viewportChecker({

      offset: 200,

      callbackFunction: function (elem, action) {

        setTimeout(function () {
          jQuery('.get-better-macretint .text-content ul li:nth-child(1)').addClass('active');

          jQuery('#better-macretint-progress [data-role="radial-progress"]').css('--progress-percent', '20');

        }, 1000);

        setTimeout(function () {
          jQuery('.get-better-macretint .text-content ul li:nth-child(2)').addClass('active');

          jQuery('#better-macretint-progress [data-role="radial-progress"]').css('--progress-percent', '40');

        }, 2000);

        setTimeout(function () {
          jQuery('.get-better-macretint .text-content ul li:nth-child(3)').addClass('active');

          jQuery('#better-macretint-progress [data-role="radial-progress"]').css('--progress-percent', '60');

        }, 3000);

        setTimeout(function () {
          jQuery('.get-better-macretint .text-content ul li:nth-child(4)').addClass('active');

          jQuery('#better-macretint-progress [data-role="radial-progress"]').css('--progress-percent', '80');

        }, 4000);

        setTimeout(function () {
          jQuery('.get-better-macretint .text-content ul li:nth-child(5)').addClass('active');

          jQuery('#better-macretint-progress [data-role="radial-progress"]').css('--progress-percent', '100');

        }, 5000);

      }
    });
  }

  //Basic Animation

  const basicAnimationTarget = $('.animate-target');

  const startAnimationDelay = 200;

  basicAnimationTarget.each(function (){

    let thisAnimationBlock = $(this);

    thisAnimationBlock.viewportChecker({

      offset: startAnimationDelay,

      callbackFunction: function (elem, action) {

        jQuery('.visible .first-up').addClass('animate');

        setTimeout(function () {
          jQuery('.visible .second-up').addClass('animate');
        }, 500);

        setTimeout(function () {
          jQuery('.visible .third-up').addClass('animate');
        }, 700);

      }
    });

  })

  //Popup Ch title




  //Fixed Menu

  /*jQuery(document).scroll(function() {

    let y = jQuery(this).scrollTop();

    if (y > 1) {
      jQuery('header').addClass('fixed');
    } else {
      jQuery('header').removeClass('fixed');
    }
  });

  var positionScrolHeader = jQuery(window).scrollTop();

  jQuery(window).scroll(function() {

    let scroll = jQuery(window).scrollTop();

    if(scroll > positionScrolHeader) {

      if ( jQuery('.main-nav.open-menu').length ){
        jQuery('header').addClass('fixed-vis');
      }else{
        jQuery('header').removeClass('fixed-vis');
      }


    } else {
      jQuery('header').addClass('fixed-vis');

    }

    positionScrolHeader = scroll;
  });*/

  //Mob Menu

  /*jQuery('#mob-menu').on('click', function (e) {
    e.preventDefault();

    jQuery(this).toggleClass('active');
    jQuery('header').toggleClass('active-menu');
    jQuery('header nav').toggleClass('open-menu');
    jQuery('html').toggleClass("fixedPosition");

  });*/

  //SCROLL MENU

  /*jQuery('#primary-menu li a').addClass('scroll-to');

  jQuery(document).on('click', '.scroll-to', function (e) {
    e.preventDefault();

    var href = jQuery(this).attr('href');

    jQuery('html, body').animate({
      scrollTop: jQuery(href).offset().top
    }, 1000);

  });*/

  //Смена категории курсов

  /*jQuery('.page-template-template-home .curses-cat-wrapper .cat').on('click', function (e) {
    e.preventDefault();

    jQuery('.page-template-template-home .curses-cat-wrapper .cat').removeClass('active-cat');

    jQuery(this).addClass('active-cat');

    var subCatId = jQuery(this).data('subcatid');

    var allCat = jQuery(this).data('allcat');

    var currentLang = jQuery(this).data('lang');

    var pageCatNavWrapper = jQuery('#mor-curses-dtn-wrap');

    var allCatPosts = Number(jQuery(this).attr('data-allposts'));

    pageCatNavWrapper.attr('data-allposts', allCatPosts);

    var targetAllPosts = Number(pageCatNavWrapper.attr('data-allposts'));

    if ( targetAllPosts <= 6 ){
      pageCatNavWrapper.addClass('d-none');
    }else{
      pageCatNavWrapper.removeClass('d-none');
    }

    var data = {

      action: 'change_curses_category',
      allCat: allCat,
      currentLang: currentLang,
      subCatId: subCatId
    };

    jQuery.post( myajax.url, data, function(response) {

      if(jQuery.trim(response) !== ''){

        jQuery('#curses-list').html(response);
      }
    });

  });*/

  //Вывод больше курсов

  /*if ( jQuery('.page-template-template-home').length ){

    var activeCat = jQuery('.curses-cat-wrapper .cat.active-cat');
    var allPosts = Number(activeCat.attr('data-allposts'));

    jQuery('#mor-curses-dtn-wrap').attr('data-allposts', allPosts);

    var targetAllPosts = Number(jQuery('#mor-curses-dtn-wrap').attr('data-allposts'));

    var btnMore = jQuery('#more-curses');

    btnMore.attr('data-currentcat', activeCat.attr('data-subcatid'));
    btnMore.attr('data-allcat', activeCat.attr('data-allcat'));

    btnMore.on('click', function (e) {
      e.preventDefault();

      var curseLeng = jQuery(this).attr('data-lang');
      var curseCurrentCat = Number(jQuery(this).attr('data-currentcat'));
      var curseAllCat = Number(jQuery(this).attr('data-allcat'));

      var moreCurses = {
        action: 'more_curses',
        currentLang: curseLeng,
        allCat: curseAllCat,
        currentCat: curseCurrentCat
      };

      jQuery.post( myajax.url, moreCurses, function(response) {

        if(jQuery.trim(response) !== ''){

          jQuery('#curses-list').append(response);
        }
      });

      jQuery('#mor-curses-dtn-wrap').addClass('d-none');

    });

  }*/

  //Fancybox Init

  /*jQuery('[data-fancybox]').fancybox({
    protect: true,
    loop : true,
    fullScreen : true,
    scrolling : 'yes',
    image : {
      preload : "auto",
      protect : true
    },
    buttons: [
      "zoom",
      "slideShow",
      "fullScreen",
      "close"
    ]

  });*/

  //Webinar Countdown Timer

  /*if ( jQuery('.courses-template-template-webinar-page').length ){

    let startData = Number(jQuery('#timer').data('start'));

    const date = new Date(startData*1000);

    startData = new Date(date).getTime();

    // Update the count down every 1 second
    let dataTimer = setInterval(function() {

      // Get today's date and time
      let getDate = new Date().getTime();

      // Find the distance between now and the count down date
      let distance = startData - getDate;

      // Time calculations for days, hours, minutes and seconds
      let days = Math.floor(distance / (1000 * 60 * 60 * 24));
      let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      let seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the element with id="demo"

      jQuery('#timer .day .date').text(days);
      jQuery('#timer .hour .date').text(hours);
      jQuery('#timer .minute .date').text(minutes);
      jQuery('#timer .second .date').text(seconds);


      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(dataTimer);

      }
    }, 1000);

  }*/
    // MAP INIT

    /*function initMap() {
        var location = {
            lat: 48.268376,
            lng: 25.9301257
        };

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: location,
            scrollwheel: false
        });

        var marker = new google.maps.Marker({
            position: location,
            map: map
        });

        var marker = new google.maps.Marker({ // кастомный марекр + подпись
            position: location,
            title:"Город, Улица, \n" +
            "Дом, Квартира",
            map: map,
            icon: {
                url: ('img/marker.svg'),
                scaledSize: new google.maps.Size(141, 128)
            }
        });

        jQuery.getJSON("map-style_dark.json", function(data) { // подключения стиля для гугл карты
            map.setOptions({styles: data});
        });

    }

    initMap();*/

    // MOB-MENU

    /*jQuery('#menu-btn').on('click', function (e) {
       e.preventDefault();

       jQuery('#mob-menu').toggleClass('active-menu');
       jQuery(this).toggleClass('open-menu');
    });

    jQuery('#mob-menu a').on('click', function (e) {
        e.preventDefault();

        jQuery('#mob-menu').removeClass('active-menu');
        jQuery('#menu-btn').removeClass('open-menu');
    });*/


    //SCROLL MENU

    /*jQuery(document).on('click', '.scroll-to', function (e) {
        e.preventDefault();

        var href = jQuery(this).attr('href');

        jQuery('html, body').animate({
            scrollTop: jQuery(href).offset().top
        }, 1000);

    });*/

    // CASTOME SLIDER ARROWS

    /*jQuery('.mein-slider').slick({
        autoplay: false,
        autoplaySpeed: 5000,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true

    });

    jQuery('.main-page .arrow-left').click(function(e){
        e.preventDefault();

        jQuery('.mein-slider').slick('slickPrev');
    });

    jQuery('.main-page .arrow-right').click(function(e){
        e.preventDefault();

        jQuery('.mein-slider').slick('slickNext');
    });*/

    // PHONE MASK

    /*jQuery("input[type=tel]").mask("+38(999) 999-99-99");*/

    // DTA VALUE REPLACE

    /*jQuery('.open-form').on('click', function (e) {
        e.preventDefault();
        var type = jQuery(this).data('type');
        jQuery('#type-form').find('input[name=type]').val(type);
    });*/

    // FORM LABEL FOCUS UP

    /*jQuery('.form-control').on('focus', function() {
        jQuery(this).closest('.form-control').find('label').addClass('active');
    });

    jQuery('.form-control').on('blur', function() {
        var jQuerythis = jQuery(this);
        if (jQuerythis.val() == '') {
            jQuerythis.closest('.form-control').find('label').removeClass('active');
        }
    });*/

    // SCROLL TOP.

    /*jQuery(document).on('click', '.up-btn', function() {
        jQuery('html, body').animate({
            scrollTop: 0
        }, 300);
    });*/

    // SHOW SCROLL TOP BUTTON.

    /*jQuery(document).scroll(function() {
        var y = jQuery(this).scrollTop();

        if (y > 800) {
            jQuery('.up-btn').fadeIn();
        } else {
            jQuery('.up-btn').fadeOut();
        }
    });*/

    // UTM

    /*function getQueryVariable(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split('&');
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split('=');
            if (decodeURIComponent(pair[0]) == variable) {
                return decodeURIComponent(pair[1]);
            }
        }
    }
    utm_source = getQueryVariable('utm_source') ? getQueryVariable('utm_source') : "";
    utm_medium = getQueryVariable('utm_medium') ? getQueryVariable('utm_medium') : "";
    utm_campaign = getQueryVariable('utm_campaign') ? getQueryVariable('utm_campaign') : "";
    utm_term = getQueryVariable('utm_term') ? getQueryVariable('utm_term') : "";
    utm_content = getQueryVariable('utm_content') ? getQueryVariable('utm_content') : "";

    var forms = jQuery('form');
    jQuery.each(forms, function (index, form) {
        jQueryform = jQuery(form);
        jQueryform.append('<input type="hidden" name="utm_source" value="' + utm_source + '">');
        jQueryform.append('<input type="hidden" name="utm_medium" value="' + utm_medium + '">');
        jQueryform.append('<input type="hidden" name="utm_campaign" value="' + utm_campaign + '">');
        jQueryform.append('<input type="hidden" name="utm_term" value="' + utm_term + '">');
        jQueryform.append('<input type="hidden" name="utm_content" value="' + utm_content + '">');
    });*/

});

// PRELOADER

/*jQuery(window).on('load', function () {

    jQuery('#loader').fadeOut(400);
});*/
