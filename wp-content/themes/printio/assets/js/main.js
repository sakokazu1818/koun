jQuery(function($){
  switch(location.pathname) {
    case '/aboutus':
      $('.l-header__btns .aboutus-link').addClass('disabled');
      break;
    case '/news':
      $('.l-header__btns .news-link').addClass('disabled');
      break;
    case '/blog':
      $('.l-header__btns .blog-link').addClass('disabled');
      break;
    case '/contact':
      $('.l-header__btns .contact-link').addClass('disabled');
      break;
  }

  $('.l-menuToggle-wrap').on('click',function(){
    $('body').toggleClass('is-open');
  });

  var $wpPgenavi = $('.wp-pagenavi');
  if ($wpPgenavi) {
    var $prev = $wpPgenavi.find('.previouspostslink');
    if ($prev.length < 1) {
      $wpPgenavi.prepend('<a class="previouspostslink disabled" rel="prev" href="#"><img class="ico_arrow" src="' + path_template_directory_uri + '/assets/images/ico_arrow_02_01.png" /></a>');
    } else {
      $prev.text('')
      $prev.prepend('<img class="ico_arrow" src="' + path_template_directory_uri + '/assets/images/ico_arrow_01_01.png" />');
    }

    var $next = $wpPgenavi.find('.nextpostslink');
    if ($next.length < 1) {
      $wpPgenavi.append('<a class="nextpostslink disabled" rel="next" href="#"><img class="ico_arrow" src="' + path_template_directory_uri + '/assets/images/ico_arrow_02_02.png" /></a>');
    } else {
      $next.text('')
      $next.prepend('<img class="ico_arrow" src="' + path_template_directory_uri + '/assets/images/ico_arrow_01_02.png" />');
    }
  }

  var $paiger = $('.c-pager');
  if ($paiger) {
    var $prev = $paiger.find('.c-pager__prev a');
    if ($prev.length < 1) {
      $paiger.find('.c-pager__prev').prepend('<p>&lt;</p>');
    }

    var $next = $paiger.find('.c-pager__next a');
    if ($next.length < 1) {
      $paiger.find('.c-pager__next').append('<p>&gt;</p>');
    }
  }

  var $contactFormSubmit = $(".contact .wrap-submit input[type='submit']");
  if ($contactFormSubmit) {
    $contactFormSubmit.prop('disabled', true);

    $(".is-form__agree input[type='checkbox']").change(function() {
      if ($(this).prop('checked')) {
        $contactFormSubmit.prop('disabled', false);
      } else {
        $contactFormSubmit.prop('disabled', true);
      }
    });
  }

  $(window).on('load resize', function(){
    var w = $(window).width();
    var x = 768;

    var spMvText = $('.js-sp-p-mainImage__txt');
    var pcMvText = $('.js-pc-p-mainImage__txt');

    var spNotice = $('.sp-notice');
    var pcNotice = $('.pc-notice');

    if (w <= x) {
      pcMvText.css('visibility','hidden');
      spMvText.css('visibility','visible');

      pcNotice.hide();
      spNotice.show();

      var $swiperContainer = $('.swiper-container');
      if ($swiperContainer) {
        var heightSize = $(window).height();
        $swiperContainer.height(heightSize - 100);
      }

      var $error404 = $('.error-404');
      if ($error404) {
        var lFooterHeight = $('.l-footer').height();
        var heightSize = $(window).height();

        $error404.height(heightSize - lFooterHeight -15 - 100);
      }
    } else {
      spMvText.css('visibility','hidden');
      pcMvText.css('visibility','visible');

      spNotice.hide();
      pcNotice.show();
    }

  });
});