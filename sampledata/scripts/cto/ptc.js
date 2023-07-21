// Copyright 2006-2018 ClickTale Ltd., US Patent Pending



window.ClickTaleGlobal = window.ClickTaleGlobal || {}, ClickTaleGlobal.init = window.ClickTaleGlobal.init || {}, function () { function t() { this.started = !1, this.stopCallbacks = [], this.readyCallbacks = [], this.startCallbacks = [], this.xhrCreatedCallback = function () { }, this.shouldStartMonitorCallback = function () { } } function n(t) { return !!t && t.constructor.prototype === Object.prototype } t.onReady = function (o, i) { var a = t.get(), e = a.shouldStartMonitorCallback(); if ("undefined" === typeof e || !1 !== e) { var c = a.readyCallbacks, r = c.length; a.diagnose("onready"); for (var l = 0; l < r; l++)c[l](); if (!a.started) { var d, s = a.config, u = n(o), f = function (t) { a.started = !0, a.addApplication(t), a.startCallbacks.forEach(function (t) { t() }) }; u && (o.onStartCallback = f, (d = n(i)) ? s = i : d = !!s), new ClickTaleMonitor.App(169, u ? o : f, d ? s : o, d ? void 0 : i).onStop(function (n) { a && (a.stopCallbacks.forEach(function (t) { t() }), t.instance = void 0) }) } } else t.instance = void 0 }; var o = t.prototype; if (o.addApplication = function (t) { this.monitor = t }, o.configure = function (t) { this.config = function t(o, i) { for (var a in i = i || {}, o) { var e = o[a]; e instanceof Array ? i[a] = e.slice() : n(e) ? i[a] = t(e, i[a]) : i[a] = e } return i }(t, this.config) }, o.onStart = function (t) { this.monitor && this.monitor.isMonitoring() ? t() : this.startCallbacks.push(t) }, o.onStop = function (t) { this.stopCallbacks.push(t) }, o.onReady = function (t) { this.readyCallbacks.push(t) }, o.onXhrCreated = function (t) { this.xhrCreatedCallback = t }, o.shouldStartMonitor = function (t) { this.shouldStartMonitorCallback = t }, o.diagnose = function (t) { var n = ClickTaleGlobal.diagnostics, o = n && n.invoke; if ("function" == typeof o) o(n.monitor, t); else { var i = n && n.monitor, a = i && i[t]; "function" == typeof a && a() } }, t.get = function () { return t.instance || (t.instance = new t) }, Object.defineProperty) try { Object.defineProperty(t, "config", { get: function () { return t.instance ? t.instance.config : null }, enumerable: !0, configurable: !0 }) } catch (t) { } function i(n, o) { var i = t.instance; if (i && i.monitor) return i.monitor[n].apply(i.monitor, o) } var a = { stop: function () { i("dispose") }, restart: function (t, n) { i("restart", [t, n]) }, shutdown: function () { i("shutdown") }, addEvent: function (t) { i("addEvent", [t]) }, addPageTag: function (t, n, o) { i("addPageTag", [t, 3, o || n]) }, ctData: function (t) { i("ctData", [t]) }, addDynamicAction: function (t, n) { i("addPageTag", [t, 4, n]) }, isMonitoring: function () { return !!i("isMonitoring") }, getPid: function () { return 6000002 }, getState: function () { return t.get().started ? i("getState") : "pending" }, endVisit: function () { i("endVisit") }, Settings: t }, e = window.ClickTaleMonitor || {}; for (var c in a) e[c] = a[c]; window.ClickTaleMonitor = e }(), ClickTaleGlobal.init.pmc = function (t, n) { var o, i, a, e, c = window.ClickTaleScriptSource + n.toLowerCase(); ClickTaleMonitor.Settings.get().configure(t), n && (o = c, e = ClickTaleMonitor.Settings.get(), onloaded = function () { i.onreadystatechange = i.onload = null, e.diagnose("onloaded") }, (a = document.body || document.head) && ((i = function (t) { if (document.documentElement.namespaceURI) try { return document.createElementNS("http://www.w3.org/1999/xhtml", t) } catch (t) { } return document.createElement(t) }("script")).onreadystatechange = function () { "loaded" === i.readyState && onloaded() }, i.onload = onloaded, i.src = o, i.async = !0, i.type = "text/javascript", i.crossOrigin = "anonymous", e.diagnose("onloading"), a.appendChild(i))) };



window.ClickTaleGlobal = window.ClickTaleGlobal || {};

window.ClickTaleSettings = window.ClickTaleSettings || {};



ClickTaleGlobal.init = ClickTaleGlobal.init || {};

ClickTaleGlobal.scripts = ClickTaleGlobal.scripts || {};





(function (d) {

    var dom = "",

        spe = [92, 94, 36, 46, 124, 63, 42, 43, 40, 41, 91, 123],

        rep = [98, 100, 102, 104, 106, 108, 110, 112, 114, 116, 118, 119];

    for (var v, c, i = 0, len = d.length; i < len, c = d.charCodeAt(i); i++) {

        if (c >= 97 & c <= 122) { v = c + 7; v = v > 122 ? v - 26 : v; v = v % 2 == 0 ? v - 32 : v; }

        else if (c >= 48 & c <= 57) { v = 69 + (c - 48) * 2 }

        else if (c == 45) { v = 65 }

        else if (spe.indexOf(c) >= 0) { v = rep[spe.indexOf(c)] }

        else { v = c }

        dom += String.fromCharCode(v);

    }



    ClickTaleGlobal.init.isAllowed = (function () {

        var doms = ["ZaHNLKGAyNhJaXHaLZahPumV/", "uLeaAZaHNLKGHAwGhJaXHaLZahPumV", "uLeaAZaHNLKGAHDHhJaXHaLZahPumV", "uLeaAZaHNLKGiAwGhJaXHaLZahPumV", "uLeaAZaHNLKGAiBZhJaXHaLZahPumV", "uLeaAZaHNLKGAwGhJaXHaLZahPumV", "ZaHNLKGAJThJaXHaLZahPumV", "ZaHNLKGAyNhJaXHaLZahPumV", "ZaHNLKGAyNATkhJaXHaLZahPumV", "ZaHNLKGAZwZhJaXHaLZahPumV", "ZaHNLKGABwhJaXHaLZahPumV"];

        if (location.protocol == "file:") return false;

        for (var i = 0, curr; i < doms.length, curr = doms[i]; i++) {



            if (curr.indexOf(dom) == 0 && curr.length == dom.length)

                return true;

        }

        return true;

    })()

})(window.location.host.toLowerCase().replace(/^((www)?\.)/i, ""));



var autoMonitorConfig;

ClickTaleGlobal.diagnostics = function () { function n(n, t, o) { if (n && t) for (var r in T) { var e = T[r]; e.collect(t) && e.errors.push({ message: n, url: t, lineno: o }) } return !!S && S(n, t, o) } function t(n) { return "function" == typeof n } function o() { return performance ? performance.now() : Date.now() } function r(n) { ++n.sampled > n.repeats ? g(n.name) : e(n) } function e(n) { var t = n.reporter() || {}, o = n.errors.splice(0), r = n.level, e = n.url, l = { loaded: n.loaded, ready: n.ready, started: n.started, level: o.length ? "error" : r, errors: encodeURIComponent(JSON.stringify(o)) }; e && r !== k && (n.timeToLoad > 0 && (l.timeToLoad = n.timeToLoad), a(n, i(i(e + "?t=log&p=" + n.pid, l), t), o)) } function i(n, t) { for (var o in t) n += "&" + I[o] + "=" + t[o]; return n } function a(n, o, r) { var e = L.sendBeacon, i = function (n) { n.errors = r.concat(n.errors) }; if (t(e)) e.call(L, o) || i(n); else { var a = new Image; a.onerror = a.ontimeout = function () { i(n) }, a.timeout = 3e4, a.src = o } } function l(n) { T[n] && (T[n].ready = !0) } function c(n) { var t = T[n]; t && (t.loaded = !0, t.timeToLoad = t.loadStart ? o() - t.loadStart : 0), T[n] = t } function d(n) { T[n] && (T[n].loading = !0, T[n].loadStart = o()) } function u(n) { T[n] && (T[n].started = !0) } function f(n) { T[n] && (T[n].starting = !0) } function s(n, o, r) { var e = window.ClickTaleMonitor; e && (I.monitorState = 40, I.isMonitoring = 42, t(e.getPid) && v(M, e.getPid(), n || "https://conductor.clicktale.net/monitor", /\/monitor-(latest|[\d\.]+).*\.js$/i, function () { var n = t(e.getState) && e.getState(); return !this.errors.length && n.match(/^(chunk|end)$/i) && (this.level = k), { monitorState: n, isMonitoring: t(e.isMonitoring) && e.isMonitoring() } }, o || 5e3, r || 1)) } function m() { g(M) } function v(t, o, r, e, i, a, l) { T[t] = T[t] || new p(t, o, r, e, i, a, l), y || (S = window.onerror, window.onerror = n, y = !0) } function g(n) { var t = T[n]; t && (clearInterval(t.sampler), delete T[n]); for (var o in T) return; y = !1 } function p(n, t, o, e, i, a, l) { var c = this; c.url = o, c.pid = t, c.errors = [], c.name = n, c.level = "alert", c.repeats = l, c.loadStart = c.sampled = c.timeToLoad = 0, c.loading = c.loaded = c.starting = c.started = c.ready = !1, c.reporter = function () { return i.call(c) }, c.collect = function (n) { return !!n.match(e) }, c.sampler = setInterval(function () { r(c) }, a) } function h(n, t, o) { var r = n && n.name, e = T[r]; if (e) { var i = e[t]; "function" == typeof i && i.apply(this, o) } } function w(n, t, o) { return { on: t, off: o, onready: function () { l(n) }, onloaded: function () { c(n) }, onloading: function () { d(n) }, onstarted: function () { u(n) }, onstarting: function () { f(n) } } } var y, S, T = {}, L = navigator, k = "info", M = "monitor", I = { level: 0, loaded: 2, ready: 4, started: 6, errors: 8, timeToLoad: 12 }; return { monitor: w(M, s, m), invoke: h } }();



ClickTaleGlobal.scripts.filter = ClickTaleGlobal.scripts.filter || (function () {

    var recordingThreshold = Math.random() * 100;



    return {

        isRecordingApproved: function (percentage) {

            return recordingThreshold <= percentage;

        }

    }

})();



if (typeof (ct_dispatcher) == 'undefined') {

    ct_dispatcher = {

        configName: null,

        cookieName: "ct_configName",

        getParameterByName: function (name) {

            name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");

            var regexS = "[\\?&]" + name + "=([^&#]*)";

            var regex = new RegExp(regexS, "i");

            var results = regex.exec(window.location.search);

            if (results == null)

                return "";

            else

                return decodeURIComponent(results[1].replace(/\+/g, " "));

        },

        createCookie: function (name, value, days) {

            if (days) {

                var date = new Date();

                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));

                var expires = "; expires=" + date.toGMTString();

            }

            else var expires = "";

            document.cookie = name + "=" + value + expires + "; path=/";

        },

        readCookie: function (name) {

            var nameEQ = name + "=";

            var ca = document.cookie.split(';');

            for (var i = 0; i < ca.length; i++) {

                var c = ca[i];

                while (c.charAt(0) == ' ') c = c.substring(1, c.length);

                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);

            }

            return null;

        }

    };



    var ct_pdc_qs_val = ct_dispatcher.getParameterByName(ct_dispatcher.cookieName);

    if (ct_pdc_qs_val) {

        ct_dispatcher.createCookie(ct_dispatcher.cookieName, ct_pdc_qs_val, 14);

        ct_dispatcher.configName = ct_pdc_qs_val;

    }

    else {

        ct_dispatcher.configName = ct_dispatcher.readCookie(ct_dispatcher.cookieName);

    }

}



if (typeof (ClickTaleCreateDOMElement) != "function") {

    ClickTaleCreateDOMElement = function (tagName) {

        if (document.createElementNS) {

            return document.createElementNS('http://www.w3.org/1999/xhtml', tagName);

        }

        return document.createElement(tagName);

    }

}



if (typeof (ClickTaleAppendInHead) != "function") {

    ClickTaleAppendInHead = function (element) {

        var parent = document.getElementsByTagName('head').item(0) || document.documentElement;

        parent.appendChild(element);

    }

}



if (typeof (ClickTaleXHTMLCompliantScriptTagCreate) != "function") {

    ClickTaleXHTMLCompliantScriptTagCreate = function (code) {

        var script = ClickTaleCreateDOMElement('script');

        script.setAttribute("type", "text/javascript");

        script.text = code;

        return script;

    }

}

//Signature:UWru3a3UIbIcv8RPWc47JuG0Fsqpu/3AbnhGAIc5qBGDjrIA9f1eEy0InS5Tt8wpzgp05n4hApSQRLHiWrHJZZWowpnz8DpQfZLc8ankFzJ10SQRhwXiql+zFVdzNZr3uLjeM09/0zzrz0c/Kylp6tCueDfIVxiY58fWuGetAmo=

// Copyright 2006-2018 ClickTale Ltd., US Patent Pending
// PID: 71
// WR destination: www31
// WR version: latest
// Change Monitor version: 1.3.8
// Recording ratio: 1

(function (){
	var dependencyCallback;
        var scriptSyncTokens = ["cm", "wr"];
        var ct2Callback, isRecorderReady;
    var dependencies = scriptSyncTokens.slice(0);
    var clickTaleOnReadyList = window.ClickTaleOnReadyList || (window.ClickTaleOnReadyList = []);
    var indexOf = (function(){if(Array.prototype.indexOf){return function(array,value){return array.indexOf(value)}}return function(array,value){var length=array.length;for(var i=0;i<length;i++){if(array[i]===value){return i}}return -1}})();
    function isValidToken(token) {
        if (indexOf(scriptSyncTokens, token) > -1) {
            var index = indexOf(dependencies, token);

            if (index > -1) {
                dependencies.splice(index, 1);
                return true;
            }
        }

        return false;
    }

    clickTaleOnReadyList.push(function () {
        if (ct2Callback) {
            ct2Callback();
        }

        isRecorderReady = true;
    });

    ClickTaleGlobal.scripts.dependencies = {
        setDependencies: function (deps) {
            scriptSyncTokens = deps;
        },
        onDependencyResolved: function (callback) {
            dependencyCallback = callback;
        },
        notifyScriptLoaded: function (token) {
            if (isValidToken(token)) {
                if (dependencies.length === 0 && typeof dependencyCallback === "function") {
                    dependencyCallback();
                }
            }
        }
    };

    ClickTaleGlobal.scripts.integration = {
        onReady: function (callback) {
            if (isRecorderReady) {
                callback();
            }
            else {
                ct2Callback = callback;
            }
        }
    };
})();


window.ClickTaleGlobal.VisualEditorDesignerExists = !!0;
if (typeof(ClickTaleHooks) == 'undefined') {
    ClickTaleHooks = {
        Hooks : ['PreLoad', 'AfterPreLoad', 'PreRecording', 'AfterPreRecording', 'AdditionalCustomCode', 'AfterAdditionalCustomCode'],
        RunHook : function (hookName) {
			if (typeof window["ClickTale" + hookName + "Hook"] === "function") window["ClickTale" + hookName + "Hook"]();
            var s = 'ClickTaleSettings'; if (!ClickTaleHooks.IsValidHookName(hookName) || !(s in window) || !('PDCHooks' in window[s]) || !(hookName in window[s].PDCHooks)) return;
            var c = window[s].PDCHooks[hookName]; if (c instanceof Array) for (var i=0;i<c.length;i++) if (typeof(c[i]) == "function") c[i](); 
            if (typeof(c) == "function") c();
        },
		IsValidHookName : function (hookName) {
			if(Array.prototype.indexOf) { return ClickTaleHooks.Hooks.indexOf(hookName) >= 0; }
			for(var i = 0; i < ClickTaleHooks.Hooks.length; i++) { if(ClickTaleHooks.Hooks[i] === hookName) { return true; } } return false;
		}
    }
}    
	

window.ClickTaleIsXHTMLCompliant = true;
if (typeof (ClickTaleCreateDOMElement) != "function")
{
	ClickTaleCreateDOMElement = function(tagName)
	{
		if (document.createElementNS)
		{
			return document.createElementNS('http://www.w3.org/1999/xhtml', tagName);
		}
		return document.createElement(tagName);
	}
}

if (typeof (ClickTaleAppendInHead) != "function")
{
	ClickTaleAppendInHead = function(element)
	{
		var parent = document.getElementsByTagName('head').item(0) || document.documentElement;
		parent.appendChild(element);
	}
}

if (typeof (ClickTaleXHTMLCompliantScriptTagCreate) != "function")
{
	ClickTaleXHTMLCompliantScriptTagCreate = function(code)
	{
		var script = ClickTaleCreateDOMElement('script');
		script.setAttribute("type", "text/javascript");
		script.text = code;
		return script;
	}
}	


ClickTaleHooks.RunHook('PreLoad');
// Start of user-defined pre WR code (PreLoad)
//PTC Code Version 7

window.ClickTaleSettings = window.ClickTaleSettings || {};
window.ClickTaleSettings.Protocol = window.ClickTaleSettings.Protocol || {};
window.ClickTaleSettings.PTC = window.ClickTaleSettings.PTC || {};

window.ClickTaleSettings.Protocol = {
Method: "ImpactRecorder"
};

window.ClickTaleSettings.Proxy = {
    WR: "ing.clicktale.net/ctn_v2/",
    ImageFlag: "ing.clicktale.net/ctn_v2/"
};

//set the following property only when there are No Load errors in recordings
//window.ClickTaleIncludedOnWindowLoad = true;
//Remove the next line if not using XHTML compliant configuration.
window.ClickTaleIncludedOnDOMReady = true;
window.ClickTaleSettings.PTC.EnableChangeMonitor = false;
window.ClickTaleSettings.PTC.UseTransport = true;

window.ClickTaleSettings.CheckAgentSupport = function (f, v) {
    if (v.t == v.IE && v.v <= 8) {
        window.ClickTaleSettings.PTC.okToRunPCC = false;
        return false;
    } else {
        if (!(v.t == v.IE && v.v <= 10)) {
            window.ClickTaleSettings.PTC.EnableChangeMonitor = true;
            window.ClickTaleSettings.PTC.ConfigChangeMonitor();
        }
        var fv = f(v);
        window.ClickTaleSettings.PTC.okToRunPCC = fv;
        return fv;
    }
};

window.ClickTaleSettings.PTC.RulesObj = [{
    selector: "input[type=\"text\"], input[type=\"tel\"], input[type=\"email\"]",
    changeMon: {
        Attributes: ['value'],
        Text: false
    },
    rewriteApi: {
        Attributes: ['value'],
        Text: false
    }
}];

window.ClickTaleSettings.PTC.RulesObjRemoveEls = [
];

;
(function () {
    if (typeof window.ClickTalePIISelector === 'string' && window.ClickTalePIISelector != '') {
        try {
            var domNodes = document.querySelectorAll(window.ClickTalePIISelector);
            if (domNodes) {
                window.ClickTaleSettings.PTC.RulesObj.push({
                    selector: window.ClickTalePIISelector,
                    changeMon: {
                        Attributes: ['value'],
                        Text: true
                    },
                    rewriteApi: {
                        Attributes: ['value'],
                        Text: true
                    }
                });
            }
        } catch (err) {}
    }
})();

window.ClickTaleSettings.PTC.cloneNodeIE9 = function (node) {
    var clone = node.nodeType === 3 ? document.createTextNode(node.nodeValue) : node.cloneNode(false);

    var child = node.firstChild;
    while (child) {
        if (child.nodeName !== 'SCRIPT') {
            clone.appendChild(window.ClickTaleSettings.PTC.cloneNodeIE9(child));
        } else {
            var script = document.createElement('script');
            clone.appendChild(script);
        }
        child = child.nextSibling;
    }

    return clone;
};

window.ClickTaleSettings.PTC.ConfigChangeMonitor = function () {

    if (window.ClickTaleSettings.PTC.EnableChangeMonitor) {
        window.ClickTaleSettings.XHRWrapper = {
            Enable: false
        };
/*
        var script = document.createElement("SCRIPT");
        script.src = (document.location.protocol === "https:" ? "https://cdnssl." : "http://cdn.") + "clicktale.net/www/ChangeMonitor-latest.js";
        document.body.appendChild(script);
*/

        window.ClickTaleSettings.ChangeMonitor = {
            Enable: true,
            AddressingMode: "id",
            OnReadyHandler: function (changeMonitor) {
                changeMonitor.observe();

                var CMRemrule = window.ClickTaleSettings.PTC.RulesObjRemoveEls;
                if (CMRemrule) {
                    for (var i = 0; i < CMRemrule.length; i++) {
                        var rule = CMRemrule[i];
                        var CMlocation = rule['location'];
                        if ((!CMlocation || (CMlocation && document.location[CMlocation['prop']].toLowerCase().search(CMlocation.search) === -1))) {
                            if (rule.changeMon) {
                                changeMonitor.exclude(rule.changeMon);
                            }
                            if (rule.changeMonLive) {
                                changeMonitor.exclude({
                                    selector: rule.changeMonLive,
                                    multiple: true
                                });
                            }
                        }
                    }
                }
            },
            OnBeforeReadyHandler: function (settings) {
                settings.Enable = window.ClickTaleGetUID ? !!ClickTaleGetUID() : false;
                return settings;
            },
            Filters: {
                MaxBufferSize: 300000,
                MaxElementCount: 3000
            },
            PII: {
                Text: [],
                Attributes: []
            }
        }
        var RulesObj = window.ClickTaleSettings.PTC.RulesObj;
        if (RulesObj) {
            window.ClickTaleSettings.ChangeMonitor.PII.Text = window.ClickTaleSettings.ChangeMonitor.PII.Text || [];
            window.ClickTaleSettings.ChangeMonitor.PII.Attributes = window.ClickTaleSettings.ChangeMonitor.PII.Attributes || [];
            for (var i = 0; i < RulesObj.length; i++) {
                var CMrule = RulesObj[i]['changeMon'];
                var CMlocation = RulesObj[i]['location'];
                if (!CMrule || (CMlocation && document.location[CMlocation['prop']].toLowerCase().search(CMlocation.search) === -1)) {
                    continue;
                }
                var selector = RulesObj[i]['selector'];
                var attributesArr = CMrule.Attributes;
                if (attributesArr instanceof Array) {
                    for (var u = 0; u < attributesArr.length; u++) {
                        var attr = attributesArr[u];
                        window.ClickTaleSettings.ChangeMonitor.PII.Attributes.push({
                            selector: selector,
                            transform: (function (attr) {
                                return function (el) {
                                    var attrs = el.attributes;
                                    var attrsToReturn = {}
                                    for (var i = 0; i < attrs.length; i++) {
                                        var name = attrs[i].nodeName;
                                        attrsToReturn[name] = attrs[i].nodeValue;
                                    }
                                    var attrib = el.getAttribute(attr);;
                                    if (typeof attrib === 'string') {
                                        attrsToReturn[attr] = attrib.replace(/\w/g, '-');
                                    }
                                    return attrsToReturn;
                                }
                            })(attr)
                        });
                    }
                }
                if (CMrule.Text) {
                    window.ClickTaleSettings.ChangeMonitor.PII.Text.push({
                        selector: selector,
                        transform: function (el) {
                            return el.textContent.replace(/\w/g, '-');
                        }
                    });
                }
            }
        }
    }
};

window.ClickTaleSettings.Compression = {
    Method: function () {
        return "deflate";
    }
};

window.ClickTaleSettings.Transport = {
    Legacy: false,
    MaxConcurrentRequests: 5
};

ClickTaleGlobal.scripts.integration = ClickTaleGlobal.scripts.integration || {
    onReady: function () {}
};

    try {
        window.settings = ClickTaleMonitor.Settings.get();
        var conf = window.settings.config || {};
        conf.transport = {
            url: monitorUrl
        };

        console.log("monitor url in ptc:" + monitorUrl);

        window.settings.configure(conf);

    } catch (e) {
        console.warn("Problem with PMC service:", e);
    }



window.ClickTaleSettings.RewriteRules = {
    OnBeforeRewrite: function (rewriteApi) {
        var bodyClone = ((document.documentMode && document.documentMode <= 9) ? ClickTaleSettings.PTC.cloneNodeIE9(document.body) : document.body.cloneNode(true));

        if (window.ClickTaleSettings.PTC.RulesObj) {
            rewriteApi.add(function (buffer) {


                var RulesObj = window.ClickTaleSettings.PTC.RulesObj;
                for (var i = 0; i < RulesObj.length; i++) {
                    var rewriteApirule = RulesObj[i]['rewriteApi'];
                    var rewriteApilocation = RulesObj[i]['location'];
                    if (!rewriteApirule || (rewriteApilocation && document.location[rewriteApilocation['prop']].toLowerCase().search(rewriteApilocation.search) === -1)) {
                        continue;
                    }
                    var selector = RulesObj[i]['selector'];
                    var elements = bodyClone.querySelectorAll(selector);

                    Array.prototype.forEach.call(elements, function (el, ind) {
                        var attributesArr = rewriteApirule.Attributes;
                        if (attributesArr instanceof Array) {

                            for (var u = 0; u < attributesArr.length; u++) {
                                var attr = attributesArr[u];
                                var attrib = el.getAttribute(attr);
                                if (typeof attrib === 'string') {
                                    el.setAttribute(attr, attrib.replace(/\w/g, '-'));
                                }
                            }

                        }
                        if (rewriteApirule.Text) {
                            var children = el.childNodes;
                            Array.prototype.forEach.call(children, function (child) {
                                if (child && child.nodeType === 3) {
                                    child.textContent = child.textContent.replace(/\w/g, '-');
                                }
                            });
                        }
                    });
                }

                //work on body
                var RulesObjRemoveEls = window.ClickTaleSettings.PTC.RulesObjRemoveEls;
                if (RulesObjRemoveEls) {
                    for (var i = 0; i < RulesObjRemoveEls.length; i++) {
                        if (RulesObjRemoveEls[i].rewriteApi) {
                            var elementsToRemove = bodyClone.querySelectorAll(RulesObjRemoveEls[i].rewriteApi);
                            Array.prototype.forEach.call(elementsToRemove, function (el, ind) {
                                if (el.parentNode) {
                                    el.parentNode.removeChild(el);
                                }
                            });
                        }
                        if (RulesObjRemoveEls[i].rewriteApiReplace) {
                            var elementsToReplace = bodyClone.querySelectorAll(RulesObjRemoveEls[i].rewriteApiReplace);
                            Array.prototype.forEach.call(elementsToReplace, function (el, ind) {
                                if (el.parentNode) {
                                    var comment = document.createComment(el.outerHTML);
                                    el.parentNode.replaceChild(comment, el);
                                }
                            });
                        }
                    }
                }

                buffer = buffer.replace(/(<body[^>]*>)[\s\S]*?<\/body>/gi, function (m, g1) {
                    if (g1) {
                        return g1 + bodyClone.innerHTML.replace(/<script\b([^>]*)>([\s\S]*?)<\/script>/gi, '<script><\/script>').replace(/(<div id="?ClickTaleDiv"?[^>]+>)\s*<script[^>]+><\/script>\s*(<\/div>)/i, '$1$2') + '<\/body>';
                    }
                    return m;
                });

                return buffer;
            });
        }
        rewriteApi.add({
            pattern: /(<head[^>]*>)/i,
            replace: '$1<script type="text\/javascript" class="cm-ignore" src="http:\/\/dummytest.clicktale-samples.com\/GlobalResources\/jquery.js"><\/script>'
        });
    }
};

var settings = ClickTaleMonitor.Settings.get();

settings.configure({}); 

!function () { 
    var notStarted = true; 

    notStarted && settings.onStart(function () { 
        notStarted = false; 
        ClickTaleMonitor.Settings.instance.monitor.configAutoEvents(); 
 }); 
 } (); 
// End of user-defined pre WR code
ClickTaleHooks.RunHook('AfterPreLoad');

var isHttps = document.location.protocol == 'https:',
	scriptSource = window.ClickTaleScriptSource,
	pccSource = scriptSource;

if (!scriptSource) {
	window.ClickTaleScriptSource = isHttps ? 'https://cdnssl.clicktale.net/www/' : 'http://cdn.clicktale.net/www/';
}

ClickTaleGlobal.init.isAllowed && typeof ClickTaleGlobal.init.pmc === "function" && ClickTaleGlobal.init.pmc(autoMonitorConfig, "monitor-1.4.86poc3.js");

if(!ClickTaleGlobal.init.pccRequested) {
	var pccSrc = pccSource ? pccSource + 'e4c488d4-4cae-4b6b-a1d8-d1f8871daa3e.js?DeploymentConfigName=ctLogical_test&Version=5879' : (isHttps ? 'https://cdnssl.clicktale.net/www31/pcc/3cf12c38-f05f-4857-95b8-53b4e0f73dc3.js?DeploymentConfigName=ctLogical_test&Version=5879' : 'http://cdn.clicktale.net/www31/pcc/3cf12c38-f05f-4857-95b8-53b4e0f73dc3.js?DeploymentConfigName=ctLogical_test&Version=5879');
		var pccScriptElement = ClickTaleCreateDOMElement('script');
	pccScriptElement.type = "text/javascript";
	pccScriptElement.crossOrigin = "anonymous";
	pccScriptElement.src = pccSrc;
	ClickTaleGlobal.init.isAllowed && document.body.appendChild(pccScriptElement);
		ClickTaleGlobal.init.pccRequested = true;
}
	window.ClickTaleGlobal.PCCExists = true;
	
window.ClickTalePrevOnReady = typeof window.ClickTaleOnReady == 'function' ? window.ClickTaleOnReady : void 0;

window.ClickTaleOnReady = function() {
	var PID=71, 
		Ratio=1, 
		PartitionPrefix="www31",
		SubsId=69748;
	
	if (window.navigator && window.navigator.loadPurpose === "preview") {
       return;
	};
		
	ClickTaleHooks.RunHook('PreRecording');
	// Start of user-defined header code (PreInitialize)
	

if (typeof ClickTaleEvent == 'function') {
    ClickTaleEvent('ChangeMonitor');
}

if (typeof ClickTaleUploadPage == 'function') {
    window.ClickTaleUploadPage();
}

	// End of user-defined header code (PreInitialize)
    ClickTaleHooks.RunHook('AfterPreRecording');
	
	window.ClickTaleIncludedOnDOMReady=true;
	
	ClickTaleGlobal.init.isAllowed && ClickTale(PID, Ratio, PartitionPrefix, SubsId);
	
	if((typeof ClickTalePrevOnReady == 'function') && (ClickTaleOnReady.toString() != ClickTalePrevOnReady.toString()))
	{
    	ClickTalePrevOnReady();
	}
	
	ClickTaleHooks.RunHook('AdditionalCustomCode');
	// Start of user-defined footer code
	
	// End of user-defined footer code
	ClickTaleHooks.RunHook('AfterAdditionalCustomCode');
}; 
(function() {
	var div = ClickTaleCreateDOMElement("div");
	div.id = "ClickTaleDiv";
	div.style.display = "none";
	document.body.appendChild(div);

	
		var cmScript = ClickTaleCreateDOMElement("script");
	cmScript.crossOrigin = "anonymous";
	cmScript.src = window.ClickTaleScriptSource + 'ChangeMonitor-1.3.8.js';
	cmScript.type = 'text/javascript';
		cmScript.async = true;
		ClickTaleGlobal.init.isAllowed && document.body.appendChild(cmScript);
	
	var wrScript = ClickTaleCreateDOMElement("script");
	wrScript.crossOrigin = "anonymous";	
	wrScript.src = window.ClickTaleScriptSource + 'WR-latest.js';
	wrScript.type = 'text/javascript';
		wrScript.async = true;
		ClickTaleGlobal.init.isAllowed && document.body.appendChild(wrScript);
})();

!function(){function t(){window.addEventListener&&window.addEventListener("message",e,!1)}function e(t){var e,o=new RegExp("(subs(|d{2}).clicktale.com|qa-core.app.clicktale.com)($|:)"),c=new RegExp("qa-core.app.clicktale.com"),a=!1,l=t.origin;try{e=JSON.parse(t.data)}catch(s){return}o.test(t.origin)!==!1&&(window.ct_ve_parent_window=t.source,c.test(t.origin)===!0&&(a=!0),"CT_testRules"==e.name&&(sessionStorage.setItem("CT_testRules",!0),console.log((new Date).toJSON(),"PostPTC: testRules ",sessionStorage.getItem("CT_testRules")),window.ct_ve_parent_window.postMessage({name:"testRulesRecieved",params:{}},"*")),"CTload_ve"===e["function"]&&"function"==typeof ClickTaleGetPID&&null!==ClickTaleGetPID()&&(i(l,a),n(l,a)))}function o(t){return document.createElementNS?document.createElementNS("http://www.w3.org/1999/xhtml",t):document.createElement(t)}function n(t,e){var n=o("script");n.setAttribute("type","text/javascript"),n.setAttribute("id","ctVisualEditorClientModule");var i;i=e?document.location.protocol+"//qa-core.app.clicktale.com/VisualEditor/Client/dist/veClientModule.js":document.location.protocol+"//"+t.match(/subs\d*/)[0]+".app.clicktale.com/VisualEditor/Client/dist/veClientModule.js",n.src=i,document.getElementById("ctVisualEditorClientModule")||document.body.appendChild(n)}function i(t,e){console.log((new Date).toJSON(),"PostPTC: start loading test rules");var n=o("script");n.setAttribute("type","application/javascript"),n.setAttribute("id","ctTestRulesModule"),n.onload=function(){sessionStorage.setItem("CT_testRules_Loaded",!0),console.log((new Date).toJSON(),"PostPTC: test rules loaded")};var i,c=ClickTaleGetPID();i=e?document.location.protocol+"//qa-core.app.clicktale.com/VisualEditor/api/rulesEngineContent/TestPCC/"+c:document.location.protocol+"//"+t.match(/subs\d*/)[0]+".app.clicktale.com/VisualEditor/api/rulesEngineContent/TestPCC/"+c,n.src=i,document.getElementById("ctTestRulesModule")||document.body.appendChild(n)}try{var c=window.chrome,a=window.navigator&&window.navigator.vendor;null!==c&&void 0!==c&&"Google Inc."===a&&t()}catch(l){}}();