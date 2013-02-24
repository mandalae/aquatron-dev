$(function(){
    $(".js-formInput").focus(function(e){
        if (!$(this).hasClass('no-bg'))
            $(this).addClass('no-bg');
    });
    $(".js-formInput").blur(function(e){
        if ($(this).val().length == 0)
            $(this).removeClass('no-bg');
    });
    
    $(".js-brandsButton").bind('mouseenter', function(e){
        $("#brand-overlay").slideDown('fast');
    });
    
    $(".js-brandsButton").bind('mouseleave', function(e){
        setTimeout(function(){
            $("#brand-overlay").slideUp('fast');
        }, 500)
    });
});