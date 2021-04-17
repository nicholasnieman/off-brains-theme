jQuery(document).ready(function($){


  var win = $(window);
  var slideUp = $(".slide-up");
  var slideIn = $(".slide-in");
  var fadeIn = $(".fade-in");
  var sections = ['#hero-cta', '#about-us', '#what-we-do', '#our-designs'];
  var headerHeight = $('#masthead').height();
  var viewportHeight = $(window).height();
  var viewportWidth = $(window).width();
  var mobileBreakPoint = 1000;
  var ctaHeight = $('#cta-section').height();
  var ctaTopMargin = (viewportHeight - ctaHeight) / 2 - headerHeight; 

    if (ctaTopMargin > 200) {
      ctaTopMargin = 200;
    } else if (ctaTopMargin < 50) {
      ctaTopMargin = 50;
    }

  $('#masthead').animate({
    opacity: 1
  });  

  var toggleNav = function() {
    var navWidth = $('#main-nav').width();
    $('#mobile-nav-icon').toggleClass("mobile-nav-open");
    if ($('#mobile-nav-icon').hasClass("mobile-nav-open")) {
      $('#main-nav').css({ right: "0" });
      $('body').css('overflow', 'hidden');
    } else {
      $('#main-nav').css({ right: navWidth });
      $('body').css('overflow', 'auto');
    }
  }

  $('#mobile-nav-icon').on('click', toggleNav);

  $('#cta-section').css('margin-top', ctaTopMargin);
  $('#cta-section').animate({
    opacity: 1
  });

  $('.design').on('click', function(event) {
    var imgSrc = themeUrl.templateUrl +"/assets/img/" + $(this).attr('id') + ".jpg";
    $('#design-modal-img').attr('src', imgSrc);
    $('#design-modal').show();
    $('body').css('overflow', 'hidden');
  })

  $('#design-modal-close-icon, #design-modal-background').on('click', function(event) {
    $('#design-modal-img-container').scrollTop(0);
    $('#design-modal').hide();
    $('body').css('overflow', 'auto');
  })

  $("a").on('click', function(event) {
    if (this.hash !== "") {
      var viewportWidth = $(window).width();
      if (viewportWidth <= mobileBreakPoint && $(this).hasClass("nav-link")) {
        toggleNav();
      }
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1000, function(){
        window.location.hash = hash;
      });
    }
  });

  $.fn.visible = function(partial) {
    var $t            = $(this),
        $w            = $(window),
        viewTop       = $w.scrollTop(),
        viewBottom    = viewTop + $w.height(),
        _top          = $t.offset().top,
        _bottom       = _top + $t.height(),
        compareTop    = partial === true ? _bottom : _top,
        compareBottom = partial === true ? _top : _bottom;
    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
  };

  win.scroll(function(event) {

    var scroll = win.scrollTop();
    var x = 0;

    if(scroll > 0) {
      $("#masthead").addClass("sticky-header");
    } else {
      $("#masthead").removeClass("sticky-header");
    }

    slideUp.each(function(i, el) {
      var el = $(el);
      if (el.visible(true)) {
        el.addClass("come-in"); 
      } 
    });    

    slideIn.each(function(i, el) {
      var el = $(el);
      if (el.visible(true)) {
        el.addClass("slide-in-visible"); 
      } 
    });    

    fadeIn.each(function(i, el) {
      var el = $(el);
      if (el.visible(true)) {
        el.addClass("fade-in-visible"); 
      } 
    });

    if (viewportWidth > mobileBreakPoint) {

      $(sections).each(function(i, el) {
        var el = $(el);
        navLink = "#" + el.attr('id') + "-link";
        if (el.visible(true) && x < 1) {
          $(navLink).css('color', '#8ae1ab');
          x++;
          } else {
          $(navLink).css('color', '#ffffff');
          x == 0;
        }
      });

    }

  });

  $('#service-slider').slick({
    dots: true,
    arrows:false,
    infinite: false,
    autoplay:true,
    autoplaySpeed: 5000,
    speed: 300,
    centerMode: false,
    swipeToSlide: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst:true,
    swipe:true,
    touchThreshold: 1000,
    responsive: [
      {
        breakpoint: 700,
        settings: "unslick"
      }
    ]
  });    

  if( viewportWidth <= 700) {
    $('#design-grid').slick({
      dots: true,
      arrows:false,
      infinite: false,
      autoplay:true,
      autoplaySpeed: 5000,
      speed: 300,
      centerMode: true,
      swipeToSlide: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      mobileFirst:true,
      swipe:true,
      touchThreshold: 1000,
      responsive: [
        {
          breakpoint: 700,
          settings: "unslick"
        }
      ]
    });
  }

});

