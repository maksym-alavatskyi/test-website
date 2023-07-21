<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <script type='text/javascript'>
        // enable XHR wrapper / ChangeMonitor
        window.ClickTaleSettings = {
            XHRWrapper: {
                Enable: true
            }
        };
    </script>
    <script type="text/javascript">
        // jQuery version control
        function submitform() {
            var vers = document.form.search.options[document.form.search.selectedIndex].value;
            var provid = document.form.selectProvider.options[document.form.selectProvider.selectedIndex].value;
            if (!vers) {
                document.location.href = "childs_out_of_dom.html?ver=" + ver + "&provider=" + provid;
            } else {
                document.location.href = "childs_out_of_dom.html?ver=" + vers + "&provider=" + prov;

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



        /*if (prov == 'events' || prov == 'observers' || prov == 'jQuery') {
                window.ClickTaleSettings.ChangeMonitor.Provider = prov;
            }
			else {
				if (prov) { 
					alert('invalid ChangeMonitor provider. \nprovider will be selected automatically'); 				
					document.location.href = "childs_out_of_dom.html?ver=" + ver;
					
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
        window.ClickTaleSettings = window.ClickTaleSettings || {};
        window.ClickTaleSettings.ChangeMonitor = {
            Enable: true,

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
        
        .wrapDiv div,
        .myClass {
            padding: 20px;
            width: 80%;
            border: 1px black solid;
        }
        
        #jq {
            color: green;
            float: left;
        }
    </style>
    <title>Change Monitor - ChildList edit out of dom (jQuery)</title>
</head>

<body>
    <script type="text/javascript">
        var WRInitTime = (new Date()).getTime();
    </script>
    <h1>Change Monitor - ChildList edit out of dom (jQuery)</h1>
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
    <table cellpadding="20" border="1" width: "100%">
        <tr>
            <td valign="top">

                <h3></h3>

                <button id="jQbyIdOutOfDom_01">edit out of Dom append</button>
                <button id="jQbyIdOutOfDom_02">edit out of Dom remove</button>
                <button id="jQbyIdOutOfDom_03">edit out of Dom text</button>
                <button id="jQbyIdOutOfDom_04">edit out of Dom attr</button>
                <br/>
                <br/>
                <div id="divs" class="wrapDiv">
                    <div id="d1" style="background: red "><span>Red</span>
                    </div>
                    <div id="d2" style="background: blue "><span>Blue</span>
                    </div>
                    <div id="d3" style="background: green "><span>Green</span>
                    </div>
                </div>
                <br/>





            </td>
        </tr>

        <br />
        <div id="ClickTaleDiv" style="display: none;"></div>
        <script type="text/javascript">
            if (typeof jQuery != 'function') {
                vers = prompt('jQuery version ' + ver + ' is not valid. \nplease provide a valid value:', '1.7.2');
                if (!vers) {
                    vers = "1.7.2";
                }
                document.location.href = "childs_out_of_dom.html?ver=" + vers + "&provider=" + prov;

            } else {

                $("#jQbyIdOutOfDom_01").click(function () {
                    var d2 = $("#d2").remove();
                    var child = d2.clone().css("background", "purple").text("purple");

                    d2.append(child).insertAfter($("#d1"));
                });

                $("#jQbyIdOutOfDom_02").click(function () {
                    var d2 = $("#d2").remove();
                    d2.find("span").remove();

                    d2.insertAfter($("#d1"));
                });

                $("#jQbyIdOutOfDom_03").click(function () {
                    var d3 = $("#d3").remove();
                    d3.find("span").text("Green Green Green");

                    d3.insertAfter($("#d2"));
                });
                $("#jQbyIdOutOfDom_04").click(function () {
                    var d3 = $("#d3").remove();
                    d3.find("span").attr("style", "padding:10px;border: 10px solid blue");

                    d3.insertAfter($("#d2"));
                });
            }
        </script>
        <!-- ClickTale Bottom part -->
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
    <div id="ClickTaleDiv"></div>
</body>

</html>