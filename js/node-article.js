(function ($) {
  $('.article_image_container').each(function() {
      if (!$(this).find('img').length) {
          $('.article-image-push').addClass("none");
      }
});
})(jQuery);
