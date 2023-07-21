function ct_safeClickTaleExec(code) {
    if (typeof ClickTaleExec == 'function') {
        ClickTaleExec(code);
        //TODO comment out next line
        //if (console && console.log) { console.log("exec: " + code); }
    }
}

function ct_triggerClickTaleExecJQ(elementSelector, eventName, live) {
    if (live) {
        jQuery(elementSelector).live(eventName, function (event) {
            ct_safeClickTaleExec("jQuery('" + elementSelector + "').trigger('" + eventName + "');");
        });
    } else {
        jQuery(elementSelector).bind(eventName, function () {
            ct_safeClickTaleExec("jQuery('" + elementSelector + "').trigger('" + eventName + "');");
        });
    }
}

function getLength(el) {
	return $(el).length;
}
//Homepage
// slider
ct_triggerClickTaleExecJQ(".sliderprev","click",false);
ct_triggerClickTaleExecJQ(".slidernext","click",false);

// menu
var len = getLength("#smoothmenu1>ul>li");
for (i=0;i<len;i++) {
	ct_triggerClickTaleExecJQ("#smoothmenu1>ul>li:eq(" + i + ")","mouseenter",false);
	ct_triggerClickTaleExecJQ("#smoothmenu1>ul>li:eq(" + i + ")","mouseleave",false);
}

// tabs
var len = getLength("#tab-menu>li");
for (i=0;i<len;i++) {
	ct_triggerClickTaleExecJQ("#tab-menu>li:eq(" + i + ")","click",false);
}

//Homepage-3
// img
var len = getLength(".one-fourth");
for (i=0;i<len;i++) {
	ct_triggerClickTaleExecJQ(".one-fourth img:eq(" + i + ")","mouseenter",false);
	ct_triggerClickTaleExecJQ(".one-fourth img:eq(" + i + ")","mouseleave",false);
}



//gallery img
var len = getLength("ul.grid img");
for (i=0;i<len;i++) {	
	ct_triggerClickTaleExecJQ("ul.grid img:eq(" + i + ")","mouseenter",false);
	ct_triggerClickTaleExecJQ("ul.grid img:eq(" + i + ")","mouseleave",false);
	ct_triggerClickTaleExecJQ("ul.grid img:eq(" + i + ")","click",false);
}
ct_triggerClickTaleExecJQ("a.pp_next","click",true);
ct_triggerClickTaleExecJQ("a.pp_previous","click",true);
	ct_triggerClickTaleExecJQ("a.pp_close:eq(0)","click",true);



//gallery nav
var len = getLength(".gallerynav>li");
for (i=0;i<len;i++) {
	ct_triggerClickTaleExecJQ(".gallerynav>li:eq(" + i + ") a","click",false);
}

//---Features page---
// Tabs
var len = getLength("ul.tabs li");
for (i=0;i<len;i++) {	
ct_triggerClickTaleExecJQ("ul.tabs li:eq("+i+")","click",false);
}

//toggle
var len = getLength(".toggle h2");
for (i=0;i<len;i++) {	
ct_triggerClickTaleExecJQ(".toggle h2:eq("+i+")","click",false);
}