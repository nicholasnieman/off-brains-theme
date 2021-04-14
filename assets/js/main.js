jQuery(document).ready(function($){


  var win = $(window);
  var slideUp = $(".slide-up");
  var slideIn = $(".slide-in");
  var fadeIn = $(".fade-in");

  $('#masthead').animate({
    opacity: 1
  });  

  win.load(function(){
    var viewportHeight = $(window).height();
    var ctaHeight = $('#cta-section').height();
    var headerHeight = $('#masthead').height();
    var ctaTopMargin = (viewportHeight - ctaHeight) / 2 - headerHeight; 

    if (ctaTopMargin > 200) {
      ctaTopMargin = 200;
      console.log(ctaTopMargin);
    }
    $('#cta-section').css('margin-top', ctaTopMargin);
    $('#cta-section').animate({
      opacity: 1
    });
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
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1000, function(){
        window.location.hash = hash;
      });
    }
  });

  $('#service-slider').slick({
    dots: true,
    arrows:false,
    infinite: true,
    autoplay:true,
    autoplaySpeed:3000,
    speed: 1000,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst:true,
    swipe:true,
    responsive: [
      {
        breakpoint: 1000,
        settings: "unslick"
      }
    ]
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

  });

});

