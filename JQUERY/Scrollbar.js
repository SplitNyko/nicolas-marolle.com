<script src="/Scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
    (function($){
        $(window).on("load",function(){
            $(".content").mCustomScrollbar(
                axis:"y"
            );
        });
    })(jQuery);
</script>