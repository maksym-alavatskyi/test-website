<!-- ClickTale Bottom part -->

<script type='text/javascript'>
    // get param from url
    function getUrlVars() {
        var vars = {};
        var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
            vars[key] = value;
        });
        return vars;
    }
    // get cookie
    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1);
            if (c.indexOf(name) != -1) return c.substring(name.length, c.length);
        }
        return "";
    }
    // get PID from param or cookie, else use default
    var myPID = getUrlVars()["pid"] || getCookie("myPID");
    if (myPID) {
        document.cookie = "myPID=" + myPID + "; path=/";
        console.log("!!!!! ------------------------ USING CUSTOM PID : " + myPID + " ------------------------------ !!!!!");
        console.log("!!!!! ------------------------ DELETE COOKIES TO RESET ---------------------------- !!!!!");


        pidNote = document.createElement("div");
        pidNote.setAttribute("style", "top:10px; right:10px; position:absolute; border:solid black; padding:5px; background-color: #FFF");
        pidNote.innerHTML = "Custom PID: " + myPID;
        reset = document.createElement("a");
        reset.setAttribute("onclick", "javascript:document.cookie = 'myPID=; expires=Thu, 01-Jan-2010 00:00:01 GMT; path=/';window.location.replace(window.location.href.split('?')[0]);");
        reset.setAttribute("style", "cursor:pointer");
        reset.innerHTML = " reset";
        document.body.appendChild(pidNote);
        pidNote.appendChild(reset);


    } else {
        myPID = "1b7b7f26-3e20-4b6b-8af0-ddd2e771b9d9";
    }

    // var _myPID = getUrlVars()["mypid"] || "1b7b7f26-3e20-4b6b-8af0-ddd2e771b9d9";

    (function () {
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
        var scriptElement = ClickTaleCreateDOMElement('script');
        scriptElement.type = "text/javascript";
        scriptElement.src = (document.location.protocol == 'https:' ?
            'https://ct.test/ctn/ptc/' + myPID + '.js?WRDestination=qadump&WRScriptHost=ct.test/ctn' :
            'http://ct.test/ctn/ptc/' + myPID + '.js?WRDestination=qadump&WRScriptHost=ct.test/ctn');
        document.body.appendChild(scriptElement);
    })();
</script>

<script type='text/javascript'>
    if (myPID != "1b7b7f26-3e20-4b6b-8af0-ddd2e771b9d9") {
        setTimeout(function () {
            isRec = (typeof ClickTaleIsRecording === "function") ? ClickTaleIsRecording() : "PID doesn't exist";
            pidNote.innerHTML += "<br> Recording Status: " + isRec;
        }, 2000);

    }
</script>

<!-- ClickTale end of Bottom part -->


<!--- Site catalyst integration -->
<!--<script type="text/javascript" src="/js/AppMeasurement.js"></script>
 
<script language="JavaScript" type="text/javascript">


  /* You may give each page an identifying name, server, and channel on the next lines.*/
s.pageName=document.title;
//console.log( 'site catalyst +' + s.pageName);
s.server=""
s.channel=""
s.pageType=""
s.prop1=""
s.prop2=""
s.prop3=""
s.prop4=""
s.prop5=""
/* Conversion Variables */
s.campaign=""
s.state=""
s.zip=""
s.events="event1"
s.products=""
s.purchaseID=""

var s_code=s.t();if(s_code)document.write(s_code)
</script>-->
<!--- End of Site catalyst integration -->

<!-- google analytics-->
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-1911294-1']);
    _gaq.push(['_setDomainName', 'http://www.clicktale.com']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>

<!-- end of google analytics-->