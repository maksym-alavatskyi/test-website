var elements;

!function(){
	document.addEventListener("DOMContentLoaded", function(){
		elements = [			
			{
				el: document.querySelectorAll(".nav-1"),
				id: 10,
				evt: "mouseover"
			},
			{
				el: document.querySelectorAll(".list"),
				id: 11,
				evt: "click"
			},

			{
				el: document.querySelectorAll("[title='Add Tags']"),
				id: 12,
				evt: "click"
			},
			{
				el: [document.querySelectorAll(".product-collateral > .toggle-tabs > li")[1]],
				id: 13,
				evt: "click"
			},
			{
				el: [document.querySelectorAll(".product-collateral > .toggle-tabs > li")[2]],
				id: 14,
				evt: "click"
			},
			{
				el: document.querySelectorAll("button[title='Estimate']"),
				id: 15,
				evt: "click"
			},
			{
				el: document.querySelectorAll("button[title='Subscribe']"),
				id: 16,
				evt: "click"
			},
			{
				el: document.querySelectorAll("#attribute92"),
				id: 17,
				evt: "change"
			},
			{
				el: document.querySelectorAll("#attribute180"),
				id: 18,
				evt: "change"
			},
			{
				el: document.querySelectorAll("#search"),
				id: 20,
				evt: "focus"
			},
			{
				el: document.querySelectorAll("a[title='View Details']"),
				id: 21,
				evt: "click"
			},
			{
				el: document.querySelectorAll("button[title='Add to Cart']"),
				id: 22,
				evt: "click"
			},
			{
				el: document.querySelectorAll(".add-to-links a.link-wishlist"),
				id: 23,
				evt: "click"
			},
			{
				el: document.querySelectorAll(".add-to-links a.link-compare"),
				id: 24,
				evt: "click"
			},
			{
				el: document.querySelectorAll("button[title='Proceed to Checkout']"),
				id: 25,
				evt: "click"
			},
			{
				el: document.querySelectorAll("#onepage-guest-register-button"),
				id: 26,
				evt: "click"
			},
			{
				el: document.querySelectorAll("a#ecomHomepage"),
				id: 27,
				evt: "click"
			},
			{
				el: document.querySelectorAll(".sharing-links a.link-email-friend"),
				id: 30,
				evt: "click"
			},
			{
				el: document.querySelectorAll(".sharing-links a.link-facebook"),
				id: 31,
				evt: "click"
			},
			{
				el: document.querySelectorAll(".sharing-links a.link-twitter"),
				id: 32,
				evt: "click"
			},
			{
				el: [document.querySelectorAll(".product-collateral > .toggle-tabs > li")[3]],
				id: 33,
				evt: "click"
			},
		];
	});   
}();


function addVeEvent(item, index, array) {
    console.log(item.el, item.id, item.evt);
    try {
        elem = item.el;
        for (i = 0; i < elem.length; i++) {
            elem[i].addEventListener(item.evt, function (e) {
                ClickTaleMonitor.addEvent(item.id);
                console.log(item.el, item.id, item.evt);
            });
        }
    } catch (e) {}
}

document.addEventListener("DOMContentLoaded", function (event) {
	elements.forEach(addVeEvent);
})