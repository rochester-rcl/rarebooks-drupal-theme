(function ($) {
    $(document).ready(function(){
        var $button = $('.register-button');
        var $aTags = $button.find('a');
        if($aTags.length == 0){
          $button.addClass("no-registration-button");
          $registerLink = $aTags[0];
        }
    });
})(jQuery);
