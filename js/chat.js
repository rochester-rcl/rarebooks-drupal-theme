(function ($) {
    $(document).ready(function(){
        var $chatToggle = $('.chat-toggle');
        if($chatToggle.length){
          $chatToggle.off();
          var status = $chatToggle.data("chat-status");
          if(status && status == 'available'){
            $chatToggle.removeClass("chat-offline")
            $chatToggle.text("Chat Online");
            $chatToggle.on('click', function(event){
              window.open("http://www.library.rochester.edu/files/chat/chat.php",
              'mywindowtitle','width=300,height=500');
              return false;
            })
          }
          else{
            $chatToggle.addClass("chat-offline")
            $chatToggle.text("Chat Offline")
            $chatToggle.on('click', function(event){
              event.preventDefault();
              return false;
            });
          }
        }

    });
})(jQuery);
