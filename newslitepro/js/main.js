function track_ad_click(link) {
   ga('send', 'event', 'AdClick', 'click', link.href);
}

(function($){


  $(document).ready( function() {

    $("img").unveil(200);

    $('#navbar-bottom button').click( function() {
      var btn = $(this);
      $('#navbar').slideToggle(function() {
        btn.toggleClass('active');
      });
    });
    $('.social-media-links ul li a').empty();
    $('.social-media-links ul li a[href*="facebook.com"]').addClass('socicon-facebook');
    $('.social-media-links ul li a[href*="twitter.com"]').addClass('socicon-twitter');
    $('.social-media-links ul li a[href*="linkedin.com"]').addClass('socicon-linkedin');
    $('.social-media-links ul li a[href*="youtube.com"]').addClass('socicon-youtube');
    $('.social-media-links ul li a[href*="instagram.com"]').addClass('socicon-instagram');
    $('.social-media-links ul li a[href*="pinterest.com"]').addClass('socicon-pinterest');
    


    $('#header-subscribe-link a').click( function() {
      $('#header-subscribe').addClass('active').fadeIn(500);
    });

    $('#header-subscribe .close-button a').click( function() {
      $('#header-subscribe').fadeOut(500, function() {
         $(this).removeClass('active');
      });
      return false;
    });

    $('#header-subscribe form').submit( function() {
      return false;
    });


    $('.search-link a').click( function() {
      $('#search-form').addClass('active').fadeIn(500);
      return false;
    });

    $('#search-form .close-button a').click( function() {
      $('#search-form').fadeOut(500, function() {
         $(this).removeClass('active');
      });
      return false;
    });






    $(window).resize( function() {

      $('#home-carousel').each( function() {

        var carousel = $(this).children('.sleeve');
        var height = 0;
        $(this).find('.carousel-slide .sleeve').each( function(i) {
          height = Math.max(height, $(this).height());
        });

        carousel.css('height', height + 'px');

      });

    });


    $('#home-carousel').imagesLoaded( function() {

      var carouselWrap = $('#home-carousel');
      var carousel = $('#home-carousel').children('.sleeve');

      var html = '';
      html += '<div class="carousel-pager">';
      html += '<ul>';
      var height = 0;
      carouselWrap.find('.carousel-slide').each( function(i) {
        height = Math.max(height, $(this).height());
        html += '<li><a href="#">' + (i+1) + '</a></li>';        
      });
      html += '</ul>';
      html += '</div>';



      carousel.css('min-height', height + 'px');

      carousel.cycle( {
		fx: 'scrollLeft',
		slideResize: true,
		containerResize: true,
		fit: 1,
	 	width: '100%',
	 	height: '100%',
		before: function(currSlideElement, nextSlideElement, options, forwardFlag) {
			carouselWrap.find('.carousel-pager li').removeClass('selected').eq( $(nextSlideElement).prevAll().size() ).addClass('selected');
		}
      }); 

      carouselWrap.append(html);
      carouselWrap.find('.carousel-pager li:first').addClass('selected');
      carouselWrap.find('.carousel-pager li').click( function() {
        $(this).siblings().removeClass('selected');
        carousel.cycle( $(this).prevAll().size() );
        return false;
      });

    
    });





    $('#subscription-form').submit( function() {


      var fm = $(this);
      fm.find('input[type=submit]').attr('disabled', 'disabled');
      
      fm.find('.response').hide();

      if ( !isValidEmailAddress(fm.find('input[type=text]').val()) ) {
        fm.find('.response-invalid-email').slideDown();
        fm.find('input[type=submit]').removeAttr('disabled');
        return false;
      }

      if ( fm.find('input[name=subscriber_confirm]:checked').size() == 0 ) {
        fm.find('.response-no-consent').slideDown();
        fm.find('input[type=submit]').removeAttr('disabled');
        return false;
      }

      $.ajax({
        type: 'POST',
	dataType: 'json',
        url: '/',
        data: $(this).serialize(),
        success: function( data ) {
          if ( data['return'] == 1 ) {
            fm.find('.response-success').slideDown();
            fm.find('input[type=text]').val('');
          }
          else {
            fm.find('.response-error').html( data['info'] );
            fm.find('.response-error').slideDown();
          }

          fm.find('input[type=submit]').removeAttr('disabled');
        },
        error: function() {
          fm.find('.response-error').slideDown();
          fm.find('input[type=submit]').removeAttr('disabled');
        }
      });

      return false;

    });


  });

})(jQuery);



function isValidEmailAddress(emailAddress) {
  var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
  return pattern.test(emailAddress);
};



/**
 * jQuery Unveil
 * A very lightweight jQuery plugin to lazy load images
 * http://luis-almeida.github.com/unveil
 *
 * Licensed under the MIT license.
 * Copyright 2013 Lu�s Almeida
 * https://github.com/luis-almeida
 */

;(function($) {

  $.fn.unveil = function(threshold, callback) {

    var $w = $(window),
        th = threshold || 0,
        retina = window.devicePixelRatio > 1,
        attrib = retina? "data-src-retina" : "data-src",
        images = this,
        loaded;

    this.one("unveil", function() {
      var source = this.getAttribute(attrib);
      source = source || this.getAttribute("data-src");
      if (source) {
        this.setAttribute("src", source);
        if (typeof callback === "function") callback.call(this);
      }
    });

    function unveil() {
      var inview = images.filter(function() {
        var $e = $(this);
        if ($e.is(":hidden")) return;

        var wt = $w.scrollTop(),
            wb = wt + $w.height(),
            et = $e.offset().top,
            eb = et + $e.height();

        return eb >= wt - th && et <= wb + th;
      });

      loaded = inview.trigger("unveil");
      images = images.not(loaded);
    }

    $w.on("scroll.unveil resize.unveil lookup.unveil", unveil);

    unveil();

    return this;

  };

})(window.jQuery || window.Zepto);



