$(function(){
    function pageLoad(){


        // Notification link click handler.
        // JUST FOR DEMO.
        // Can be removed.

        function close(e){
            var $settings = $("#settings"),
                $popover = $settings.siblings(".popover");
            if($popover.length && !$.contains($popover[0], e.target)){
                $settings.popover('hide');
                $(document).off("click", close);
            }
        }

        $("#chat-messages").slimscroll({
            height: '240px',
            size: '5px',
            alwaysVisible: true,
            railVisible: true
        });

        $('.widget').widgster();
    }

    pageLoad();

    PjaxApp.onPageLoad(pageLoad);
});

