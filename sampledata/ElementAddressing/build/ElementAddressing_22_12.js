!function(){var j=void 0,l=!0,m=null,o=!1,p=this;function s(a,d){var c=a.split("."),b=p;!(c[0]in b)&&b.execScript&&b.execScript("var "+c[0]);for(var e;c.length&&(e=c.shift());)!c.length&&d!==j?b[e]=d:b=b[e]?b[e]:b[e]={}};var t;var u=function(){var a=document.documentElement;return a.compareDocumentPosition||a.contains?function(a,c){var b=9===a.nodeType?a.documentElement:a;return a===c||b.contains(c)||a.compareDocumentPosition&&a.compareDocumentPosition(c)&16}:function(a,c){if(c)for(;c=c.parentNode;)if(c===a)return l;return o}}();var v=o;function w(){return l}var x=o,y={},z={};function A(a){t.console&&t.console.log(a)}function B(a,d){var c=d.firstChild,b=d.ClickTale;b&&"CustomID"in b&&(b=b.CustomID,b||(b in a?(y[b]=l,A("duplicate registration of custom id "+b+"were found on multiple elements")):a[b]=d));for(;c;c=c.nextSibling)1===c.nodeType&&B(a,c)}function C(a){x||(a.c=F(a.c),x=l)}function G(a,d){H(a).CustomID=d}
function F(a){return function(d,c){c in z?(y[c]=l,A("duplicate registration of custom id "+c+" were found on multiple elements")):(a(d,c),v&&(z[c]=d))}}var I=F(G);function H(a){var d=a.ClickTale;d||(d={},a.ClickTale=d);return d}function J(a){return t.getComputedStyle?t.getComputedStyle(a,m):a.currentStyle}var K={};function L(a){K[a]||(K[a]=(a.charCodeAt(0)-64&31)+((a.charCodeAt(1)-64&28)<<3)+((a.charCodeAt(2)-64&30)<<7));return K[a]}
function M(a,d){for(var c=w,b=0,e=d.length,f=o,h=m,i=m,c=c||w,g=0;a&&g<e;g++){f=o;i=d[g];for(h=a.firstChild,b=0;!f&&h;h=h.nextSibling)1===h.nodeType&&L(h.tagName)===i.tagCode&&(b===i.index&&c(h)&&(f=l,a=h),b++)}return(f=f&&"none"!==J(a).display.toLowerCase())?a:m}function N(a,d){var c;if(a.map)c=a.map(d,j);else{c=[];for(var b=a.length,e=window,f=0;f<b;f++)c.push(d.call(e,a[f],f))}return c}
function O(a,d){var c=d.customID,b;if(c){var e;(c in y&&y[c]||!(e=z[c]))&&A("duplicate custom id "+c+" were found on multiple elements");b=e}else a:{if(c=d.elementID){try{b=a.querySelectorAll("#"+c),b.length||(b=a.querySelectorAll("[id='"+c.replace(/'/g,"\\'")+"']"))}catch(f){b=a.querySelectorAll("[id='"+c.replace(/'/g,"\\'")+"']")}if(!b||0===b.length)A("no element with id "+c+" was found.");else{if(1===b.length){b=b[0];break a}A("duplicate id "+c+" were found on multiple elements.")}}b=j}return b}
function P(a,d){for(var c=w,b,e,f=d.length,h=f,i={},g=a.ownerDocument,c=c||w;0<h;h--){b=d[h-1];e=O(g,b);b=b.name;if(!e&&b){e=g;var D=b;b=d;var n=j,r=m,k=b.slice(0,h-1);a:{for(var n=e,E=k.length,q=j,q=j;0<E;E--)if(q=k[E-1],(q=O(n,q))&&1===q.nodeType&&"form"===q.tagName.toLowerCase()){n=q;break a}n=m}if(n){r=n;n=b;b=j;e=e.getElementsByName(D);if(1<e.length){k=j;a:{for(k=0;k<e.length;k++)if("radio"!==e[k].type.toLowerCase()||!u(r,e[k])){k=o;break a}k=l}k?b=M(r,n):A("duplicate name "+D+" found on multiple non radio elements.")}else 1===
e.length&&(e=e[0],u(r,e)?b=e:A("no nested element with name "+D+" found in container."));r=b}e=r}if(e&&c(e))return c=d.slice(h,f),i.b=c,i.a=e,i}i.b=d;i.a=a;return i};s("ct.ElementAddressing.bootstrap",function(a,d){d=!!d;t=a;a.c=G;a.document.addEventListener?a.document.addEventListener("DOMContentLoaded",function(){var c=d;C(a);c&&B(z,a.document.documentElement);v=l},o):document.attachEvent("onreadystatechange",function(){if("complete"===document.readyState){var c=d;C(a);c&&B(z,a.document.documentElement);v=l}})});
s("ct.ElementAddressing.elementFromPath",function(a,d,c){var b=!(a[0]instanceof Array);b&&(a=[a]);a=N(a,function(a){a=P(d,a);a.a&&0<a.b.length&&(a.a=M(a.a,a.b));return!c&&a.a&&"hidden"===J(a.a).visibility.toLowerCase()?m:a.a});return b?a[0]:a});
s("ct.ElementAddressing.pathFromElement",function(a,d){var c=0,b,e=0,f=m,h=[],i=m;b=m;var g=a;if(!d)return window.console&&window.console.log("Base element was not specified"),h;for(;g&&g!==d;)if(1!==g.nodeType)g=g.parentNode;else{e=0;f={};a=g;c=L(g.nodeName);f.tagCode=c;if(b=H(a).CustomID)f.customID=b;g.id&&(f.elementID=g.id);b=g.attributes;if((i=b.getNamedItem("name"))&&i.value)f.name=i.value;for(b=g;b=b.previousSibling;)L(b.nodeName)===c&&e++;f.index=e;g=g.parentNode;h.push(f)}h.reverse();return h});
s("ct.ElementAddressing.elementAndVisibilityFromPath",function(a,d){var c=!(a[0]instanceof Array);c&&(a=[a]);var b=N(a,function(a){a=P(d,a);a.a&&0<a.b.length&&(a.a=M(a.a,a.b));if(a.a){var b={};b.dom=a.a;b.isHidden="hidden"===J(a.a).visibility.toLowerCase();a=b}else a=m;return a});return c?b[0]:b});s("ct.ElementAddressing.setCustomElementID",I);}();