$('#myModal').on('show.bs.modal', function () {
  $('#myInput').trigger('focus')
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