<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <script type='text/javascript'>
        // enable XHR wrapper / ChangeMonitor

        window.ClickTaleSettings = window.ClickTaleSettings || {};
        window.ClickTaleSettings.XHRWrapper = {
            Enable: false
        };
    </script>
    <script type="text/javascript">
        // jQuery version control
        function submitform() {
            var vers = document.form.search.options[document.form.search.selectedIndex].value;
            var provid = document.form.selectProvider.options[document.form.selectProvider.selectedIndex].value;
            if (!vers) {
                document.location.href = "safeguard.html?ver=" + ver + "&provider=" + provid;
            } else {
                document.location.href = "safeguard.html?ver=" + vers + "&provider=" + prov;

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
        /* mode = getUrlVars()["mode"];
			if (mode != "id") { 
				mode = "path" 
			} */

        maxEl = parseInt(getUrlVars()["maxEl"]);
        if (!maxEl) {
            maxEl = 3000;
        }

        maxBuf = parseInt(getUrlVars()["maxBuf"]);
        if (!maxBuf) {
            maxBuf = 300000;
        }

        maxSum = parseInt(getUrlVars()["maxSum"]);
        if (!maxSum) {
            maxSum = 6000000;
        }



        /*if (prov == 'events' || prov == 'observers' || prov == 'jQuery') {
                window.ClickTaleSettings.ChangeMonitor.Provider = prov;
            }
			else {
				if (prov) { 
					alert('invalid ChangeMonitor provider. \nprovider will be selected automatically'); 				
					document.location.href = "safeguard.html?ver=" + ver;
					
				}
				prov = 'auto';
			}*/
    </script>
    <script type="text/javascript">
        // get version from jQuery servers
        document.write('<script type="text/javascript" src="http://code.jquery.com/jquery-' + ver + '.js" >');
        document.write('<\/script>');
        </script>
<script type="text/javascript">
        window.ClickTaleSettings = window.ClickTaleSettings || {}
        window.ClickTaleSettings.ChangeMonitor = {
            Enable: true,
            AddressingMode: mode,
            Filters: {
                MaxElementCount: maxEl,
                MaxBufferSize: maxBuf,
                MaxBufferSum: {
                    Threshold: maxSum
                        /*OnError: function () {
                            console.error(ClickTaleGetSID());
                            console.log("MaxBufferSum has reached limit: " + maxSum);
                            window.ClickTaleStop();
                            //window.ClickTaleNote("MaxBufferSum has reached limit: " + maxSum);
                        }*/
                }
                /*Before : [],
                   After : [function(buffer, sesseionID, operation){
						console.log("buffer size: "+buffer.ya.length);
						//$('#buflog').prepend(buffer.ya.length+"<br>");
                       return true;
                   }] */
            },
            //FlushMethod: function(){},
            Providers: [prov],

            OnReadyHandler: function (changeMonitor) {
                changeMonitor.observe(document.documentElement);

                /*
			if  (typeof changeMonitor.observer == 'string') {				
				jQuery('#provider').html(changeMonitor.observer);	
			}
			*/

            },
            OnBeforeReadyHandler: function (settings) {
                settings.Enable = window.ClickTaleGetUID ? !!ClickTaleGetUID() : false;
                return settings;
            }
        };
    </script>

    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="http://www.hertz.fr/rentacar/assets/css/all/integrated/locations/tabsview/style.css" />

    <style type="text/css">
        .items a,
        .items a:active,
        .items a:link,
        .items a:visited {
            font-size: 1.5em;
            color: #3300CC;
            text-decoration: underline;
            display: block;
            margin-top: 10px;
        }
        
        .items a:hover {
            text-decoration: none;
        }
        
        .brief {
            font-size: 1.1em;
            padding-left: 10px;
        }
        
        .long {
            font-size: 0.8em;
            padding-left: 10px;
        }
        
        .ex {
            padding: 10px;
            width: 80%;
            border: red 2px dashed;
            margin: 10px;
            background-color: #FFF;
        }
        
        .in {
            padding: 10px;
            width: 80%;
            border: blue 2px solid;
            margin: 10px;
            background-color: #FFF;
        }
        
        .el {
            padding: 10px;
            width: 80%;
            background: #999;
            margin: 10px;
        }
        
        .ex,
        .in,
        .out_of_scope {
            padding: 20px;
        }
        
        #jq {
            color: green;
            float: left;
        }
        
        .ui-state-hover {
            background-color: #FAFAD2;
        }
    </style>
    <title>Change Monitor - Safe Guard</title>
</head>

<body>
    <script type="text/javascript">
        var WRInitTime = (new Date()).getTime();
    </script>

    <h1>Change Monitor - Safe Guard</h1>
    <h4>recorder version: 14</h4>

    <div id="jq">
        <img src="http://www.tobia.eu/images/jquery.png" />&nbsp;&nbsp;</div>
    <div>
        <form name="form">
            <select name="search" id="selectVersion" onchange="submitform(this.form)">
                <option value="">current version:
                    <script type="text/javascript">
                        document.write(ver);
                    </script>
                </option>
                <option value="1.4">&nbsp;&nbsp;-&nbsp;1.4&nbsp;-&nbsp;&nbsp;</option>
                <option value="1.5">&nbsp;&nbsp;-&nbsp;1.5&nbsp;-&nbsp;&nbsp;</option>
                <option value="1.6">&nbsp;&nbsp;-&nbsp;1.6&nbsp;-&nbsp;&nbsp;</option>
                <option value="1.7.2">&nbsp;&nbsp;-&nbsp;1.7.2&nbsp;-&nbsp;&nbsp;</option>
                <option value="1.8.3">&nbsp;&nbsp;-&nbsp;1.8.3&nbsp;-&nbsp;&nbsp;</option>
            </select>
            <select name="selectProvider" id="selectProvider" onchange="submitform(this.form)">
                <option value="">&nbsp;&nbsp;-&nbsp;SELECT&nbsp;-&nbsp;&nbsp;</option>
                <option value="">&nbsp;&nbsp;-&nbsp;auto&nbsp;-&nbsp;&nbsp;</option>
                <option value="observers">&nbsp;&nbsp;-&nbsp;observers&nbsp;-&nbsp;&nbsp;</option>
                <option value="events">&nbsp;&nbsp;-&nbsp;events&nbsp;-&nbsp;&nbsp;</option>
                <option value="jQuery">&nbsp;&nbsp;-&nbsp;jQuery&nbsp;-&nbsp;&nbsp;</option>

            </select>
            selected provider: <span id="provider"></span>
        </form>
    </div>



    <BR>
    <BR>



    <input type="submit" value="(01) load hertz.fr data with AJAX" id="safeguard_01" />
    <br>
    <input type="text" value="insert loops number" id="loopTimes" onfocus="this.value = '';" />
    <input type="submit" value="(02) load data with AJAX" id="safeguard_02" />
    <input type="submit" value="(03) clear data" id="safeguard_03" />
    <input type="submit" value="(04) Logical Pages" id="safeguard_04" />



    <br/>
    <br/>

    <div id="result" class="functions" style="width:80%; "></div>

    <br/>







    <br />
    <div style="position:fixed; padding:10px; right:20px; top: 20px; background: #f0f0f0">last buffer size:
        <div id="buflog"></div>
    </div>
    <div id="ClickTaleDiv" style="display: none;"></div>
    <script type="text/javascript">
        var start;
        if (typeof jQuery != 'function') {
            vers = prompt('jQuery version ' + ver + ' is not valid. \nplease provide a valid value:', '1.7.2');
            if (!vers) {
                vers = "1.7.2";
            }
            document.location.href = "safeguard.html?ver=" + vers + "&provider=" + prov;

        } else {

            var ajax_load = "<img class='loading' src='img/load.gif' alt='loading...' />";

            $("#safeguard_01").click(function () {

                $("#result").html("<b>loading...</b>");

                $.ajax({
                    type: "GET",
                    url: "ajax/safeguardAjax.php",
                    dataType: "html",
                    success: function (response) {
                        $('#result').empty();
                        $(response).appendTo('#result');


                    }
                });
            });

            $("#safeguard_02").click(function () {
                loopData($("#loopTimes").val());
            });


            $("#safeguard_03").click(function () {
                $("#result").empty();
            });

            $("#safeguard_04").click(function () {
                ClickTaleStop();
                window.ClickTaleIncludedOnDomReady = true;
                ClickTaleUploadPage();
                ClickTaleLogical(window.location.href);
                ClickTaleTag("LPV_safeGuards_uploadPage");
                console.info("LPV_safeGuards_uploadPage");
            });

            function loopData(t) {
                t = parseInt(t);
                if (isNaN(t)) {
                    alert('please insert a number')
                } else {
                    $("#result").html("<b>loading...</b>");
                    $.ajax({
                        type: "POST",
                        url: "ajax/safeguardAjaxLoop.php",
                        data: {
                            't': t
                        },
                        dataType: "html",
                        cache: false,
                        success: function (response) {
                            $('#result').html("<h4>response length: " + response.length + "</h4>");
                            $(response).appendTo('#result');
                        }
                    });

                }
            }
        }
    </script>

    <script type='text/javascript'>
        setTimeout(function () {
            if (ClickTaleGlobal.exports.changeMonitor && ClickTaleGlobal.exports.changeMonitor.observer) {
                jQuery('#provider').html("<font color='green'>" + ClickTaleGlobal.exports.changeMonitor.observer + " provider has been found!</font>");
            } else {
                jQuery('#provider').html("<font color='red'>Error: no matching provider has been found!</font>");
            }
        }, 1000);
    </script>
<?php
 include($_SERVER['DOCUMENT_ROOT'].'/ct_bottom.php'); 
?>

    <script type="text/javascript">
        var ctor = ClickTaleOnReady;
        ClickTaleOnReady = function () {

            ctor();

            var ctEvent = ClickTaleEvent;
            ClickTaleEvent = function (ev) {
                console.error(ev);
                ctEvent.apply(this, arguments);

            }
        };



        window.ClickTaleSettings.Compression = {
            Method: "deflate"
        };
    </script>

    <!-- ClickTale end of Bottom part -->



</body>

</html>