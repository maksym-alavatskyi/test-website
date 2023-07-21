<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Extatic test</title>

    <style>
        .exclude {}
        
        .excludeData {
            background-color: pink;
            line-height: 1;
            min-width: 50px;
            display: inline-block;
            text-align: center;
        }
    </style>

    <script type="text/javascript">
        function submitform() {
            var vers = document.form.search.options[document.form.search.selectedIndex].value;
            var provid = document.form.selectProvider.options[document.form.selectProvider.selectedIndex].value;
            if (!vers) {
                document.location.href = "characterData_jQuery.html?ver=" + ver + "&provider=" + provid;
            } else {
                document.location.href = "characterData_jQuery.html?ver=" + vers + "&provider=" + prov;
            }
        }
        mode = "id"; // get ver from url
        function getUrlVars() {
            var vars = {};
            var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
                vars[key] = value;
            });
            return vars;
        }
        ver = getUrlVars()["ver"];
        if (!ver) {
            ver = "1.7.2"
        }
        prov = getUrlVars()["provider"];
        if (!prov)
            prov = 'auto';
        else
        if (prov != 'events' && prov != 'observers' && prov != 'jQuery' && prov != 'auto') {
            alert('invalid ChangeMonitor provider. \nprovider will be selected automatically');
            prov = 'auto';
        }
    </script>
    <script type="text/javascript">
        // get version from jQuery servers
        document.write('<script type="text/javascript" src="http://code.jquery.com/jquery-' + ver + '.js">');
        document.write('<\/script>');
    </script>
</head>

<body>
    <script type="text/javascript">
        var WRInitTime = (new Date()).getTime();
          
    </script>
    <div id="ClickTaleDiv" style="display: none;">
    </div>
    <div class="wrapper">
        <h1>Auto Exclude Demo</h1>
        <h4 id="recVer">recorder version: 14</h4>
        <div>
            <h3>Enable: <span id="enable"></span></h3>
        </div>
        <div>
            <h3>Repeats: <span id="repeats"></span></h3>
        </div>
        <div>
            <h3>Interval: <span id="interval"></span></h3>
        </div>
        <div id="greenDiv" style="background-color: green; width: 75px; height: 75px; margin: 50px 0 50px 0">
            &nbsp;
        </div>
    </div>
    <button class="exclude" id="run">Start</button>
    <div>
        <h3>CM rounds: <span class="exclude excludeData" id="CMrounds">0</span></h3>
    </div>
    <hr /><br />
    <input id="count" type="text" placeholder="set repeats: default = 10"></input>
    <input id="animInterval" type="text" placeholder="set interval: default = 600"></input>
    <button id="startAnim">Start Animation</button>
    <button id="logicalpages">logical pages</button>
    
    <div id="animdiv" style="background:#98bf21;height:0px;width:100px;position:absolute;"></div>
    <script type='text/javascript'>
        var animdiv = $("#animdiv");
        
        $("#startAnim").click(function () {
            var count = parseInt($("#count").val()) || 10;
            var animInterval = parseInt($("#animInterval").val())/count || 60;
            var i = 0;
            
           ClickTaleEvent("count="+count+" | interval="+animInterval);
            
            var token = setInterval(
                function () {

                    animdiv.height(i+20)
                        
                    i+=20;
                    if (i==300) {
                        i=0;
                    }


                    if (!--count) {
                        clearInterval(token);
                    }
                    
                }, animInterval
            );

        }); 
        
        $("#logicalpages").click(function () {
            ClickTaleStop();
            window.ClickTaleIncludedOnDomReady = true;
            ClickTaleUploadPage();
            ClickTaleLogical("http://www.ctqatest.com/qa/extatic.php","http://www.referrer.com");
            ClickTaleTag("Logical page");   
        });
            



        var enable,
            repeats,
            interval,
            parameter,
            parameters = {},
            search = location.search.replace('?', '').split('&');

        for (var field in search) {
            parameter = search[field].split('=');
            parameters[parameter[0]] = parameter[1];
        }

        enable = parameters["e"] ? (parameters["e"] === "true") : true;
        repeats = parseInt(parameters["r"] || 20);
        interval = parseFloat(parameters["i"] || 3000);

        jQuery("#enable").text(enable);
        jQuery("#repeats").text(repeats);
        jQuery("#interval").text(interval);

        window.ClickTaleSSL = 1;

        window.ClickTaleSettings = {
            Compression: {
                Method: function () {
                    return "deflate";
                },
                ReuseWorkers: true,
                Async: true
            },
            ChangeMonitor: {
                Enable: true,

                OnReadyHandler: function (changeMonitor) {
                    changeMonitor.observe();
                    changeMonitor.exclude(".exclude");
                },
                OnBeforeReadyHandler: function (settings) {
                    settings.Enable = window.ClickTaleGetUID ? !!ClickTaleGetUID() : false;
                    return settings;
                },
                AutoExclude: {
                    Enable: enable,
                    Repeats: repeats,
                    Interval: interval
                },
                FlushMethod: function (c) {
                    var counter = jQuery("#CMrounds");

                    counter.html(parseInt(counter.html()) + 1);

                    typeof ClickTaleExec === "function" && ClickTaleExec(c);
                }
            }
        };
    </script>
    <script id="dror">
        var div = jQuery("#greenDiv"),
            divW = div.width(),
            running = false,
            direction = 1,
            step = 50,
            timer;

        jQuery("#run").click(function () {
            jQuery("#run").html(running ? "Start" : "Stop");

            if (running) {
                running = false;
                clearInterval(timer);
            } else {
                running = true;

                timer = setInterval(function () {
                    var scrW = window.innerWidth,
                        divP = div.position();

                    if (direction > 0) {
                        if (divP.left + divW + step > scrW) {
                            direction = -1;
                        }
                    } else {
                        if (divP.left - step < 0) {
                            direction = 1;
                        }
                    }

                    //div.offset({ top: divP.top, left: divP.left + step * direction });
                    div.offset({
                        left: divP.left + step * direction
                    });
                }, 60);
            }
        });
    </script>
<?php
 include($_SERVER['DOCUMENT_ROOT'].'/ct_bottom.php'); 
?>
    <script type='text/javascript'>
        
        setTimeout(function () {
            var CMVer = ClickTaleGlobal.exports.changeMonitor.version;
        var RecVer = ClickTaleGetVersion()[0] + "." + ClickTaleGetVersion()[1];
        var AMode = "id"; // ClickTaleSettings.ChangeMonitor.AddressingMode ? ClickTaleSettings.ChangeMonitor.AddressingMode : "path";
            jQuery('#recVer').html("Recorder: " + RecVer + " /// CM version: " + CMVer + " /// Addressing Mode: " + AMode);
            if (ClickTaleGlobal.exports.changeMonitor && ClickTaleGlobal.exports.changeMonitor.observer) {
                jQuery('#provider').html("<font color='green'>" + ClickTaleGlobal.exports.changeMonitor.observer + " provider has been found!</font>");
            } else {
                jQuery('#provider').html("<font color='red'>Error: no matching provider has been found!</font>");
            }
        }, 2000);
        
        
        
    </script>
</body>

</html>