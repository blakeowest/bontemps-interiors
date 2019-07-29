/**
 * Back To Top function
**/

jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.btt-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});
});

/**
 * Smooth Scrolling
**/

jQuery(document).ready(function ($) {
   // Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
});

/**
 * Global smart resize function
**/

(function($,sr){

  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
      var timeout;

      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null; 
          };

          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);

          timeout = setTimeout(delayed, threshold || 100); 
      };
  }
    // smartresize 
    jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');

/**
 * Controls the mobile navigation
**/

jQuery(document).ready(function(){
    $('.navbar-toggle').on('click', function(){
        $(this).toggleClass('collapsed');
        $('.mobile-navbar').slideToggle();
        $('.logo h3').toggleClass('white');
        $('body').toggleClass('no-scroll');
    });
})

jQuery(document).ready(function() {
    $('.navbar-toggle').on('click', function(){
      if($('body').hasClass('no-scroll')) {
        document.ontouchmove = function (e) {
          e.preventDefault();
        }
      } else {
        document.ontouchmove = function (e) {
          return true;
        }
      }
    });
});


/**
 * Allows same height columns
**/
jQuery(document).ready(function($){
    $(function() {
        $('.box').matchHeight();
    });
});

/**
 * Allows same height columns
**/

jQuery(document).ready(function() {
  $(".environments .tile").hover(function(){
    $(this).find('h1').fadeIn(200);
  }, function(){
        $(this).find('h1').fadeOut(200);
     }
  );
});

jQuery(document).ready(function(){
  $(".services .tile").on({
    mouseenter: function () {
        $(this).children('.hover').show();
        $(this).find('.overlay h3').hide();
        $(this).find('.overlay').hide();
    },
    mouseleave: function () {
        $(this).children('.hover').hide();
        $(this).find('.overlay h3').show();
        $(this).find('.overlay').show();
    }
});
});

jQuery(document).ready(function($){
  if($(window).width() >= 991){
    $(window).scroll(function(){
        if ($(window).scrollTop() > 100){
          $('.navigation-section').addClass('sticky');
          $('.navbar-nav>li>a').css({"padding-bottom": "0"});
          $('body').css({"margin-top": "340px"});
          $('.navigation-section .logo').addClass('sticky');
          $('.navigation-section .logo h1').addClass('sticky');
          $('.navigation-section .logo h3').addClass('sticky');
          $('.navigation-section .desktop-navbar .navbar-desktop').addClass('sticky');
        } else {
            $('.navigation-section').removeClass('sticky');
            $('.navbar-nav>li>a').css({"padding-bottom": "15px"});
            $('body').css({"margin-top": "0"});
            $('.navigation-section .logo').removeClass('sticky');
            $('.navigation-section .logo h1').removeClass('sticky');
            $('.navigation-section .logo h3').removeClass('sticky');
            $('.navigation-section .desktop-navbar .navbar-desktop').removeClass('sticky');
          }
    });
  }
});