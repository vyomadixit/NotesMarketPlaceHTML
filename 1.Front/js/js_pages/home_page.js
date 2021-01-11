/*----------------------------
-------- Navigation -----------
-----------------------------*/
/* Show and Hide White NAvigation */
$(function () {

    //show or Hide nav on page load
    showHideNav();

    $(window).scroll(function () {

        //show or Hide nav on window scroll
        showHideNav();

    });

    function showHideNav() {
        if ($(window).scrollTop() > 50) {

            // Show white nav
            $("nav").addClass("navbar-light");
            $(".btn-home").addClass("btn-login-nav");

            //Show dark logo
            $(".navbar-brand img").attr("src", "images/Homepage/logo_new.png");

        } else {

            // Hide white
            $("nav").removeClass("navbar-light");
            $(".btn-home").removeClass("btn-login-nav");

            //Show light logo
            $(".navbar-brand img").attr("src", "images/pre-login/top-logo.png");
        }
    }
});




// Smooth Scrolling
$(function () {

    $("a.smooth-scroll").click(function (event) {
  
        event.preventDefault();
  
        //Get Setion ID like #about, #services, etc.
        var section_id = $(this).attr("href");
        
        $("html, body").animate({
          scrollTop: $(section_id).offset().top - 64
      }, 1250, "easeInOutExpo");
    });
  
  });
  /*----------------------------
  -------- Mobile Menu -----------
  -----------------------------*/
  $(function () {
    // show mobile nav
    $("#mobile-nav-open-btn").click(function () {
        $("#mobile-nav").css("height", "100%");
    });
  
    // Hide mobile nav
    $("#mobile-nav-close-btn, #mobile-nav a").click(function () {
        $("#mobile-nav").css("height", "0%");
    });
  });
