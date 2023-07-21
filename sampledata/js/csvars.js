var cat = document.querySelector(".page-title.category-title>h1");
var product_name = document.querySelector(".product-view .product-name>span.h1");
var url = window.location.href;

// custom var
//site-type
if(url.includes('/ecom/')) {
   window._uxa = window._uxa || [];
   window._uxa.push(['setCustomVariable', 1, 'site-type', 'ecom', 3]);
} else {
  window._uxa = window._uxa || [];
  window._uxa.push(['setCustomVariable', 1, 'site-type', 'testing portal', 3]);
}
// page-type
if(url.includes('ecom/checkout/cart/')) {
   window._uxa = window._uxa || [];
   window._uxa.push(['setCustomVariable', 2, 'page-type', 'cart', 3]);
} else if(url.includes('ecom/checkout/onepage/')) {
  window._uxa = window._uxa || [];
  window._uxa.push(['setCustomVariable', 2, 'page-type', 'checkout', 3]);
} else if(url.includes('/jserror.php')) {
  window._uxa = window._uxa || [];
  window._uxa.push(['setCustomVariable', 2, 'page-type', 'jserror', 3]);
}
else if(url.match(/\/ecom\/[a-z|-]*\/[a-z|-]*.html/g) != null) {
  window._uxa = window._uxa || [];
  window._uxa.push(['setCustomVariable', 2, 'page-type', 'category-page', 3]);
}

// page events
if (product_name) {
  window._uxa.push(['trackPageEvent', product_name.textContent]);
  console.log('sending page event for product ');
}else {
  if(cat) {
    window._uxa.push(['trackPageEvent', cat.textContent]);
    console.log('sending page event for category ');
  }
}
// dynamic var
if(cat !== null) {
  txt = cat.textContent;
  console.log("++++ product_category ++++");
   window._uxa = window._uxa || [];
   window._uxa.push(["trackDynamicVariable", {key: 'product_category', value: txt} ]);
} else if (product_name !== null){
  txt = product_name.textContent;
  window._uxa = window._uxa || [];
  window._uxa.push(["trackDynamicVariable", {key: 'product_name', value: txt} ]);
}

// transaction
if(url.includes('ecom/checkout/onepage/')) {
  if (typeof quoteBaseGrandTotal !== 'undefined') {
    console.log(quoteBaseGrandTotal);
  }
}
if(url.includes('/checkout/onepage/success/')) {
  let res = document.querySelector("div.col-main>p").textContent.match(/Your order # is: ([0-9]*)/)[1];
  console.log('success | id: ' + res);
}
