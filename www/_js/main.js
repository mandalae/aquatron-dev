var categoryTimeout = null;
var brandTimeout = null;
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
        clearTimeout(brandTimeout);
        $("#brand-overlay").slideDown('fast');
    });
    
    $(".js-brandsButton").bind('mouseleave', function(e){
        brandTimeout = setTimeout(function(){
            $("#brand-overlay").slideUp('fast');
        }, 500)
    });
    
    $(".js-categoryButton").bind('mouseenter', function(e){
        clearTimeout(categoryTimeout);
        $("#category-overlay").slideDown('fast');
    });
    
    $(".js-categoryButton").bind('mouseleave', function(e){
        categoryTimeout = setTimeout(function(){
            $("#category-overlay").slideUp('fast');
        }, 500)
    });
});