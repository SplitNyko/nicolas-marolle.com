(function($){
    $('.ico_menu').click(function(e){
        e.preventDefault();
        $('body').toggleClass('slidebar');
    });

        $('.js-scrollTo').click(function(e){
        e.preventDefault();
        $('body').removeClass('slidebar');
    });
    
    $(".Main").click(function(){
        $("Body").removeClass("slidebar");
    });

    $(window).load(function() {
        $('body').toggleClass('End_Loader').delay(1500).queue(function(next){
        $(this).toggleClass('Overflow');
        next();
        });
    })
})(jQuery);