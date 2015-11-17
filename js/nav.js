// NAVIGATION TRANISTION
// --------------------------------------------
// Upon scrolling change RCL Navbar from the default postion to fixed
// at the moment it touched the top of the browser. To prevent the page
// from jumping we display an empty spacer that is the same height as
// the navbar.

(function ($) {
$(window).scroll(function() {
    if ($(this).scrollTop() > 34){
        $('.navbar').addClass("fixed"); // Navbar moves to position:fixed
        $('.navbar-spacer ').addClass("show"); // Spacer
        $('.section-header').addClass("fixed");
    }
    else{
        $('.navbar').removeClass("fixed");
        $('.navbar-spacer').removeClass("show");
        $('.section-header').removeClass("fixed");
    }
});
})(jQuery);
