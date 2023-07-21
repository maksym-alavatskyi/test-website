$(function() {
    var button = $('#DivButton');
    var box = $('#DivBox');
    var div = $('#DivForm');
    button.removeAttr('href');
    button.mouseup(function(toggle_div) {
        box.toggle();
        button.toggleClass('active');
		window.location.hash = '#InnerDiv';
		ClickTaleFetchFrom="http://qa.test/LPV/divs1_open.html#InnerDiv";
		ClickTaleLogical("http://qa.test/LPV/divs1_open.html#InnerDiv");
    });
    div.mouseup(function() { 
        return false;
    });
    
	$(this).mouseup(function(toggle_div) {
        if(!($(toggle_div.target).parent('#DivButton').length > 0)) {
            button.removeClass('active');
            box.hide();
			ClickTaleStop();
        }
    });	
	
	
});
