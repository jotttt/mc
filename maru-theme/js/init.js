// You can avoid the document.ready if you put the script at the bottom of the page
$(document).ready(function() {
  // Bind to the click of all links with a #hash in the href
  $('a[href^="#"]').click(function(e) {
    // Prevent the jump and the #hash from appearing on the address bar
    e.preventDefault();
    // Scroll the window, stop any previous animation, stop on user manual scroll
    // Check https://github.com/flesler/jquery.scrollTo for more customizability
    $(window).stop(true).scrollTo(this.hash, {duration:1000, interrupt:true});
  });



    // hide/show top nav according to height
      $(window).scroll(function() {
        var hH = $('#home').outerHeight();
        if($(this).scrollTop()>(hH-50)) {
          $('#myNavbar').css('opacity','1');
        }
        else {
          $('#myNavbar').css('opacity','0');
        }
// change nav style at the end of the page
       /* if( ( $(window).scrollTop() + $(window).height() ) === $(document).height()) {
          $('.btn-black').addClass('contact');
          $('.mug').addClass('white');
          $('.navbar-nav').css('background','transparent');

        }
        else {
          $('.btn-black').removeClass('contact');
          $('.mug').removeClass('white');
          $('.navbar-nav').css('background','rgba(255,255,255,0.8)');
        }*/
      });

      // ignore
      $('.ignore').css({'visibility':'hidden', 'width':'0px'});

      // IE fix for jumpy parallax
      if(navigator.userAgent.match(/Trident\/7\./)) { // if IE
        $('body').on("mousewheel", function () {
          // remove default behavior
          event.preventDefault();

          //scroll without smoothing
          var wheelDelta = event.wheelDelta;
          var currentScrollPosition = window.pageYOffset;
          window.scrollTo(0, currentScrollPosition - wheelDelta);
        });
      }

});
