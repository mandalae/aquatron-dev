var overlayTimeout = null;
$(function(){
    
    $(".js-brandsButton").bind('mouseenter', function(e){
        clearTimeout(overlayTimeout);
        $(".overlay").hide();
        $(this).find(".overlay").slideDown('fast');
    });
    
    $(".js-brandsButton").bind('mouseleave', function(e){
        overlayTimeout = setTimeout(function(){
            $("#brand-overlay").hide();
        }, 500)
    });
    
    $(".js-categoryButton").bind('mouseenter', function(e){
        clearTimeout(overlayTimeout);
        $(".overlay").hide();
        $(this).find(".overlay").slideDown('fast');
    });
    
    $(".js-categoryButton").bind('mouseleave', function(e){
        overlayTimeout = setTimeout(function(){
            $("#category-overlay").hide();
        }, 500)
    });
    
    $(".js-aquatronButton").bind('mouseenter', function(e){
        clearTimeout(overlayTimeout);
        $(".overlay").hide();
        $(this).find(".overlay").slideDown('fast');
    });
    
    $(".js-aquatronButton").bind('mouseleave', function(e){
        overlayTimeout = setTimeout(function(){
            $("#aquatron-overlay").hide();
        }, 500)
    });
    
    $(".js-courseButton").bind('mouseenter', function(e){
        clearTimeout(overlayTimeout);
        $(".overlay").hide();
        $(this).find(".overlay").slideDown('fast');
    });
    
    $(".js-courseButton").bind('mouseleave', function(e){
        overlayTimeout = setTimeout(function(){
            $("#course-overlay").hide();
        }, 500)
    });
    
    setInterval(function(){
        var current = $("#teaser ul li:visible");
        var next = current.next();
        
        if (next.length == 0){
            next = $("#teaser ul li:first");
        }
        
        current.fadeOut('fast');
        next.fadeIn('fast');
    }, 10000);
});