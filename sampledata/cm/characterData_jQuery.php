<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

   
    <script type="text/javascript">
        // jQuery version control
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


        /* mode = getUrlVars()["mode"];
        if (mode != "id") {
            mode = "path"
        } */

        /*if (prov == 'events' || prov == 'observers' || prov == 'jQuery') {
            window.ClickTaleSettings.ChangeMonitor.Provider = prov;
        }
        else {
            if (prov) {
                alert('invalid ChangeMonitor provider. \nprovider will be selected automatically');
                document.location.href = "childs_jQuery.html?ver=" + ver;

            }
            prov = 'auto';
        }*/
    </script>
    
    <script type="text/javascript">
        // get version from jQuery servers
        document.write('<script type="text/javascript" src="http://code.jquery.com/jquery-' + ver + '.js">');
        document.write('<\/script>');
    </script>

<script type="text/javascript">
        window.ClickTaleSettings = window.ClickTaleSettings || {};
        window.ClickTaleSettings.ChangeMonitor = {
            Enable: true,
            
            Providers: [prov],
            OnReadyHandler: function (changeMonitor) {
                changeMonitor.observe();
                

            },
            OnBeforeReadyHandler: function (settings) {
                settings.Enable = window.ClickTaleGetUID ? !!ClickTaleGetUID() : false;
                return settings;
            }
        };
    </script>


    <script>
        // This jQuery plugin will gather the comments within
         // the current jQuery collection, returning all the
         // comments in a new jQuery collection.
         //
         // NOTE: Comments are wrapped in DIV tags.

        jQuery.fn.comments = function (blnDeep) {
            var blnDeep = (blnDeep || false);
            var jComments = $([]);

            // Loop over each node to search its children for
            // comment nodes and element nodes (if deep search).
            this.each(

                function (intI, objNode) {
                    var objChildNode = objNode.firstChild;
                    var strParentID = $(this).attr("id");

                    // Keep looping over the top-level children
                    // while we have a node to examine.
                    while (objChildNode) {

                        // Check to see if this node is a comment.
                        if (objChildNode.nodeType === 8) {

                            // We found a comment node. Add it to
                            // the nodes collection wrapped in a
                            // DIV (as we may have HTML).
                            jComments = jComments.add(
                                "<div rel='" + strParentID + "'>" + objChildNode.nodeValue +
                                "</div>");

                        } else if (
                            blnDeep && (objChildNode.nodeType === 1)) {

                            // Traverse this node deeply.
                            jComments = jComments.add(
                                $(objChildNode).comments(true));

                        }

                        // Move to the next sibling.
                        objChildNode = objChildNode.nextSibling;

                    }

                });

            // Return the jQuery comments collection.
            return (jComments);
        }
    </script>
    <style type="text/css">
        div#d1,
        div.myClass,
        div#comment {
            padding: 20px;
            width: 80%;
            border: 1px black solid;
        }
        #jq {
            color: green;
            float: left;
        }
    </style>
    <title>Change Monitor - characterData (jQuery)</title>
    
</head>

<body>
    <script type="text/javascript">
        var WRInitTime = (new Date()).getTime();
    </script>
    <h1>Change Monitor - characterData (jQuery)</h1>
    <h4 id="recVer">wait for info...</h4>
    <div id="jq">
        <img src="http://www.tobia.eu/images/jquery.png" />&nbsp;&nbsp;
    </div>
    <div>
        <form name="form">
            <select name="search" id="selectVersion" onchange="submitform(this.form)">
                <option value="">
                    current version:
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
    <br />
    <br />
    <table cellpadding="20" border="1">
        <tr>
            <td>
                <!-- comment node-->
                <h3>      by ID           </h3>
                <div id="d1" style="background:#ccc">this is the initial text</div>
                <!-- comment node-->
                <br />
                <button id="jQbyIdChar_01">(01) change text (.text())</button>
                <button id="jQbyIdChar_02">(02) change text (.html())</button>
                <button id="jQbyIdChar_03">(03) append text</button>
                <button id="jQbyIdChar_10">(10) append text with &lt;br&gt;</button>
                <button id="jQbyIdChar_04">(04) remove text</button>
                <button id="jQbyIdChar_05" title="you won't see it">(05) remove HTML comment nodes</button>
                <button id="jQbyIdChar_06" title="you won't see it">(06) add HTML comment node</button>
                <button id="jQbyIdChar_07">(07) append text with special characters</button>
                <button id="jQbyIdChar_08">(08) insert Element Between 2 Texts</button>
                <button id="jQbyIdChar_09">(09) remove Text Between 2 Texts</button>
                <br />
                <br />
                <div id="comment">
                    comments div
                    <!-- comment node-->
                </div>
                <p>note: HTML comments are not displayed in browser (check live HTML code)</p>
            </td>
            <td>
                <h3>
                    by Class
                </h3>
                <div class="myClass" style="background:#ccc">this is the initial text</div>
                <br />
                <button id="jQbyClassChar_01">(01) change text (.text())</button>
                <button id="jQbyClassChar_02">(02) change text (.html())</button>
                <button id="jQbyClassChar_03">(03) append text</button>
                <button id="jQbyClassChar_04">(04) remove text</button>
                <button id="jQbyClassChar_05" title="you won't see it">(05) remove HTML comment nodes</button>
                <button id="jQbyClassChar_06" title="you won't see it">(06) add HTML comment node</button>
                <br />
                <br />
                <div class="myClass">
                    comments div
                    <!-- comment node-->
                </div>
                <p>note: HTML comments are not displayed in browser (check live HTML code)</p>
            </td>
        </tr>
    </table>
    <label>Password</label>
    <input type="password" />
    <label>word</label>
    <input type="text" />
    <div id="ClickTaleDiv" style="display: none;"></div>
    <script type="text/javascript">
        if (typeof jQuery != 'function') {
            vers = prompt('jQuery version ' + ver + ' is not valid. \nplease provide a valid value:', '1.7.2');
            if (!vers) {
                vers = "1.7.2";
            }
            document.location.href = "characterData_jQuery.html?ver=" + vers + "&provider=" + prov;

        } else {



            //changeText with .text()
            $("#jQbyIdChar_01").toggle(function () {
                    $("#d1").text("this text was changed with .text() function!");
                    $("#jQbyIdChar_01").text("reset text");
                },

                function () {
                    $("#d1").text("this is the initial text");
                    $("#jQbyIdChar_01").text("change text");
                });

            //changeText with .text() by class
            $("#jQbyClassChar_01").toggle(function () {
                    $(".myClass:first").text("this text was changed with .text() function!");
                    $("#jQbyClassChar_01").text("reset text");
                },

                function () {
                    $(".myClass:first").text("this is the initial text");
                    $("#jQbyClassChar_01").text("change text");
                });

            //changeText with .html()
            $("#jQbyIdChar_02").click(function () {
                $("#d1").hide().html("this text was changed with .html() function!").fadeIn();
            });

            //changeText with .html() by class
            $("#jQbyClassChar_02").click(function () {
                $(".myClass:first").html("this text was changed with .html() function!");
            });

            //appendText
            $("#jQbyIdChar_03").click(function () {
                $("#d1").append(" MORE TEXT!");
            });

            $("#jQbyIdChar_10").click(function () {
                $("#d1").append(" <br>MORE TEXT!");
            });

            //appendText with special chars
            $("#jQbyIdChar_07").click(function () {
                $("#d1").append("\"foo\" special chars 'bar'. \n \b \r '\\b\\r\\n\\f\\t\\/''");
            });

            //appendText by class
            $("#jQbyClassChar_03").click(function () {
                $(".myClass:first").append(" MORE TEXT!");
            });

            //removeText
            $("#jQbyIdChar_04").click(function () {
                $("#d1").empty();
            });

            //removeText by class
            $("#jQbyClassChar_04").click(function () {
                $(".myClass:first").empty();
            });

            //removeComment
            $("#jQbyIdChar_05").click(function () {
                $("#comment").contents().filter(function () {
                    return this.nodeType == 8
                }).remove();
            });

            //removeComment by class
            $("#jQbyClassChar_05").click(function () {
                $(".myClass:last").contents().filter(function () {
                    return this.nodeType == 8
                }).remove();
            });

            //addComment
            $("#jQbyIdChar_06").click(function () {
                $("#comment").append("<!-- new comment node-->");
            });

            //addComment by class
            $("#jQbyClassChar_06").click(function () {
                $(".myClass:last").append("<!-- new comment node-->");
            });

            //insert Element Between 2 Texts
            $("#jQbyIdChar_08").click(function () {
                $("#d1").empty();
                var divs2 = $("#d1").get(0);
                var divs2SecondNode = document.createTextNode(" Second");

                divs2.appendChild(document.createTextNode("First"));
                divs2.appendChild(divs2SecondNode);

                setTimeout(function () {
                    var d2 = $("#d1").clone().get(0);
                    var parentNode = divs2SecondNode.parentNode;

                    parentNode.insertBefore(d2, divs2SecondNode);
                }, 2000)
            });

            //remove Text Between 2 Texts
            $("#jQbyIdChar_09").click(function () {
                $("#d1").empty();
                var divs2 = $("#d1").get(0);
                var divs2SecondNode = document.createTextNode(" Second");

                divs2.appendChild(document.createTextNode("First"));
                divs2.appendChild(divs2SecondNode);
                divs2.appendChild(document.createTextNode(" Third"));
                $(divs2).clone().appendTo(jQuery("#d1"));

                setTimeout(function () {
                    divs2.removeChild(divs2SecondNode);
                }, 2000)
            });

            
            
        }
    </script>
    
    <?php
 include($_SERVER['DOCUMENT_ROOT'].'/ct_bottom.php');
?>
    
    

    <!-- ClickTale end of Bottom part -->
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