$(document).ready(function() {
/*-------------------------------------
| Remove Padding-right On Modal click
-------------------------------------*/
$('#lightbox').on('shown.bs.modal', function() {
       $("body.modal-open").removeAttr("style");
 });

 $('#lightbox2').on('shown.bs.modal', function() {
        $("body.modal-open").removeAttr("style");
  });

$('#lightbox').on('shown', function() {
        $("body.modal-open").removeAttr("style");
});

$('#lightbox2').on('shown', function() {
        $("body.modal-open").removeAttr("style");
});

/*-------------------------------------
| Smooth Scroll
-------------------------------------*/
        function scrollHome () {
        	$('html,body').animate({
                scrollTop: $(".home2").offset().top},
                'slow');
        }

        function scrollAbout () {
        	$('html,body').animate({
                scrollTop: $("#about").offset().top},'slow');
        }

        function scrollServices () {
                $('html,body').animate({
                scrollTop: $('#services').offset().top},'slow');
        }

        function scrollContact () {
                $('html,body').animate({
                scrollTop: $('.contact3').offset().top},'slow');
        }

        $(".home").click(scrollHome);
        $(".about").click(scrollAbout);
        $(".services").click(scrollServices);
        $(".B2T").click(scrollServices);
        $(".contact2").click(scrollContact);

/*-------------------------------------
| Image Fade When Scrolling
-------------------------------------*/
        function showImages(el) {
                var windowHeight = jQuery( window ).height();
                $(el).each(function(){
                    var thisPos = $(this).offset().top;

                    var topOfWindow = $(window).scrollTop();
                    if (topOfWindow + windowHeight - 200 > thisPos ) {
                        $(this).addClass("fadeIn");
                    }
                });
            }

            // if the image in the window of browser when the page is loaded, show that image
            $(document).ready(function(){
                    showImages('.star');
            });

            // if the image in the window of browser when scrolling the page, show that image
            $(window).scroll(function() {
                    showImages('.star');
            });

/*-------------------------------------
| Slide In On View animation
-------------------------------------*/
var $animation_elements = $('.animation-element');
var $window = $(window);

function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);

  $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);

    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
      $element.addClass('in-view');
    } else {
      $element.removeClass('in-view');
    }
  });
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');

/*-------------------------------------
| Show Service On CLick
-------------------------------------*/
function displayPainting () {
  $('.instruction').addClass('hidden');

  $('#paint').removeClass('hidden');
  $('.B2T').removeClass('hidden');
  $('#painting').removeClass('hidden');

  $('#carpet').addClass('hidden');
  $('#janitorial').addClass('hidden');
  $('.B2T').addClass('show');
  $('#painting').addClass('show');
}

function displayCarpet () {
  $('.instruction').addClass('hidden');

  $('#carpet').removeClass('hidden');
  $('.B2T').removeClass('hidden');
  $('#janitorial').removeClass('hidden');

  $('#paint').addClass('hidden');
  $('#painting').addClass('hidden');
  $('.B2T').addClass('show');
  $('#janitorial').addCLass('show');
}

$('.PS').click(displayPainting);
$('.CC').click(displayCarpet);
});