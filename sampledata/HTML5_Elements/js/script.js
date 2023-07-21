$(document).ready(function() {
    $(":input").each(function(){
        var typeVal = $(this).attr("type");
        $(this).attr("placeholder",typeVal);
    });
});


