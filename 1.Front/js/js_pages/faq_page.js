

/*----------------------------
-------- FAQ -----------
-----------------------------*/

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}




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