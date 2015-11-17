


(function ($) {
  $('.views-row').each(function() {
      if (!$(this).find('img').length) {
          $(this).addClass("no-img");
          $(this).find(".views-field-field-article-tagline, .views-field-field-event-tagline, .views-field-title, .views-row a").each(function(){
            $(this).addClass("no-img");
          });
      }
});
})(jQuery);
