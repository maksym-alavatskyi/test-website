<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    
    <!-- viewport to solve zooming issues with clikctale -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type='text/javascript'>
        // enable XHR wrapper / ChangeMonitor
        // window.ClickTaleSettings = { XHRWrapper: { Enable: true } };
    </script>
    <script type="text/javascript">
        // jQuery version control
        function submitform() {
            var vers = document.form.search.options[document.form.search.selectedIndex].value;
            var provid = document.form.selectProvider.options[document.form.selectProvider.selectedIndex].value;
            if (!vers) {
                document.location.href = "childs_jQuery.html?ver=" + ver + "&provider=" + provid;
            } else {
                document.location.href = "childs_jQuery.html?ver=" + vers + "&provider=" + prov;

            }
        }
        mode = "id";
        // get ver from url
        function getUrlV() {
            var vars = {};
            var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
                vars[key] = value;
            });
            return vars;
        }

        ver = getUrlV()["ver"];
        if (!ver) {
            ver = "1.7.2"
        }
        prov = getUrlV()["provider"];
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
        document.write('<script type="text/javascript" src="http://code.jquery.com/jquery-' + ver + '.js" >');
        document.write('<\/script>');
    </script>
    <script type="text/javascript">
        




        window.ClickTaleSettings = window.ClickTaleSettings || {};

        /* window.ClickTaleSettings.RecordingTime = {
             MaxRecordingTime: 0.08
         };*/

        window.ClickTaleSettings.ChangeMonitor = {
            Enable: true,
            AddressingMode: "id",
            Providers: [prov],
            OnReadyHandler: function (changeMonitor) {
                changeMonitor.observe();
                changeMonitor.exclude("#nir");

                /* if (typeof changeMonitor.observer == 'string') {
                    jQuery('#provider').html(changeMonitor.observer);
                }*/

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
    <title>Change Monitor - ChildList (jQuery)</title>
</head>

<body>
    <script type="text/javascript">
        var WRInitTime = (new Date()).getTime();
    </script>
    <h1>Change Monitor - ChildList (jQuery)</h1>
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
    <table cellpadding="20" border="1" width=width width=width width="100%">
        <tr>
            <td valign="top">

                <h3>by ID</h3>

                <button id="jQbyId_01" onclick="replaceFirst('id')">(01) replace first child</button>
                <button id="jQbyId_02" onclick="addChild('id')">(02) append child -.append()</button>
                <button id="jQbyId_03" onclick="addChildHtml('id')">(03) append child -.html()</button>
                <button id="jQbyId_04" onclick="addTo('id')">(04) append to parent -.appendTo()</button>
                <button id="jQbyId_05" onclick="remChild('id')">(05) remove first child</button>
                <button id="jQbyId_06" onclick="prepChild('id')">(06) prepend child</button>
                <button id="jQbyId_07" onclick="insBefore('id')">(07) insert Div before first div</button>
                <button id="jQbyId_08" onclick="insAfter('id')">(08) insert Div after last div</button>
                <button id="jQbyId_09" onclick="wrapDivs('id')">(09) wrap Div -.wrap()</button>
                <button id="jQbyId_10" onclick="wrapInnerDivs('id')">(10) wrap Inner Div -.wrapInner</button>
                <button id="jQbyId_11" onclick="emptyDivs('id')">(11) empty Divs</button>
                <button id="jQbyId_12" onclick="remove2nodes('id')">(12) remove divs 2+4</button>
                <button id="jQbyId_13" onclick="replaceFunc('id')">(13) replaceWith(function)</button>
                <button id="jQbyId_14" onclick="append2div('id')">(14) append div1 to div2+div3 -append()</button>
                <button id="jQbyId_15" onclick="wrapAll2div('id')">(15) wrap div3+div1 with div2 -wrapAll()</button>
                <button id="jQbyId_16" onclick="replaceThirdWithFirst('id')">(16) replace third with first -replaceWith()</button>
                <button id="jQbyId_17" onclick="appendFunc('id')">(17) append with function -append(function)</button>
                <button id="jQbyId_18" onclick="afterFunc('id')">(18) insert after every div with function -after(function)</button>
                <button id="jQbyId_19" onclick="beforeFunc('id')">(19) insert before every div with function -before(function)</button>
                <button id="jQbyId_20" onclick="remChild2('id')">(20) remove first+third child -remove("#d3,#d1")</button>
                <button id="jQbyId_21" onclick="htmlFunc('id')">(21) change content with .html(function)</button>
                <button id="jQbyId_22" onclick="unWrapDiv('id')">(22) unwrap divs .unwrap()</button>
                <br />
                <br />
                <div id="divs" class="wrapDiv">
                    <div id="d1" style="background: red ">Red</div>
                    <div id="d2" style="background: blue ">Blue</div>
                    <div id="d3" style="background: green ">Green</div>
                </div>
                <br />
                <button id="jQbyId_23" onclick="addMove('id')">(23) add children, remove parent, add parent back</button>
                <button id="jQbyId_24" onclick="addChildAndParentDiv('id')">(24) add child, add parent with same nodetype</button>
                <button id="jQbyId_33" onclick="jQueryHTMLTest()">(25) jQueryHTMLTest</button>

                <div id="stam">
                    <div id="divs2" style="background-color: blueviolet; padding: 20px;">
                    </div>
                    <div id="doritdiv" class="wrapDiv">

                    </div>
                </div>



            </td>
            <td valign="top">

                <h3>by Class</h3>

                <button id="jQbyClass_01" onclick="replaceFirst('cl')">(01) replace first child</button>
                <button id="jQbyClass_02" onclick="addChild('cl')">(02) append child -.append()</button>
                <button id="jQbyClass_03" onclick="addChildHtml('cl')">(03) append child -.html()</button>
                <button id="jQbyClass_04" onclick="addTo('cl')">(04) append to parent -.appendTo()</button>
                <button id="jQbyClass_05" onclick="remChild('cl')">(05) remove first child</button>
                <button id="jQbyClass_06" onclick="prepChild('cl')">(06) prepend child</button>
                <button id="jQbyClass_07" onclick="insBefore('cl')">(07) insert Div before first div</button>
                <button id="jQbyClass_08" onclick="insAfter('cl')">(08) insert Div after last div</button>
                <button id="jQbyClass_09" onclick="wrapDivs('cl')">(09) wrap Div -.wrap()</button>
                <button id="jQbyClass_10" onclick="wrapInnerDivs('cl')">(10) wrap Inner Div -.wrapInner</button>
                <button id="jQbyClass_11" onclick="wrapAllDivs()">(11) wrap all div with class "myClass" -.wrapAll()</button>
                <button id="jQbyClass_12" onclick="emptyDivs('cl')">(12) empty Divs</button>
                <button id="jQbyClass_13" onclick="remove2nodes('cl')">(13) remove divs 2+4</button>
                <button id="jQbyClass_14" onclick="replaceFunc('cl')">(14) replaceWith(function)</button>
                <button id="jQbyClass_15" onclick="append2div('cl')">(15) append div1 to div2+div3</button>
                <button id="jQbyClass_16" onclick="wrapAll2div('cl')">(16) wrap div3+div1 with div2 -wrapAll()</button>
                <button id="jQbyClass_17" onclick="replaceThirdWithFirst('cl')">(17) replace third with first -replaceWith()</button>
                <button id="jQbyClass_18" onclick="appendFunc('cl')">(18) append with function -append(function)</button>
                <button id="jQbyClass_19" onclick="afterFunc('cl')">(19) insert after every div with function -after(function)</button>
                <button id="jQbyClass_20" onclick="beforeFunc('cl')">(20) insert before every div with function -before(function)</button>
                <button id="jQbyClass_21" onclick="remChild2('cl')">(21) remove first+third child -remove(".myClass")</button>
                <button id="jQbyClass_22" onclick="htmlFunc('cl')">(22) change content with .html(function)</button>
                <button id="jQbyClass_23" onclick="unWrapDiv('cl')">(23) unwrap divs .unwrap()</button>
                <br />
                <br />
                <div class="wrapDiv">
                    <div class="myClass" style="background: red ">Red</div>
                    <div class="myClass" style="background: blue ">Blue</div>
                    <div class="myClass" style="background: green ">Green</div>
                </div>
                <br />

                <button id="jQbyClass_24" onclick="addMove('cl')">(24) add children, remove parent, add parent back</button>
                <button id="jQbyClass_25" onclick="addChildAndParentDiv('cl')">(25) add child, add parent with same nodetype</button>

                <div class="stam">
                    <div class="wrapDiv" style="background-color: blueviolet; padding: 20px;">
                    </div>
                </div>

            </td>
        </tr>
        <tr>
            <td colspan="2">
                <h3>Tables</h3>

                <input type="submit" value="(01) td1 .wrapInner() " id="jQbyIdTables_01" />
                <input type="submit" value="(02) table append tr - .append() " id="jQbyIdTables_02" />
                <input type="submit" value="(03) wrap td2 - .wrap() " id="jQbyIdTables_03" />
                <input type="submit" value="(04) insert before td1 - .before() " id="jQbyIdTables_04" />
                <input type="submit" value="(05) prepend to table - .prepend() " id="jQbyIdTables_05" />
                <input type="submit" value="(06) remove td2 - .remove() " id="jQbyIdTables_06" />
                <input type="submit" value="(07) empty table - .empty() " id="jQbyIdTables_07" />
                <br />
                <table id=table1>
                    <tr>
                        <td id="td1">
                            td1
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td id="td2">
                            td2
                        </td>
                        <td></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2">

                <h3>AJAX</h3>

                <input type="submit" value="(01) load() + callback" id="jQbyIdAjax_01" />
                <input type="submit" value="(02) Load a Remote Script" id="jQbyIdAjax_02" />
                <input type="submit" value="(03) $.get()" id="jQbyIdAjax_03" />
                <input type="submit" value="(04) $.post()" id="jQbyIdAjax_04" />
                <input type="submit" value="(05) load data from XML with $.ajax()" id="jQbyIdAjax_05" />
                <br />
                <br />
                <div id="result" class="functions">
                </div>
            </td>
        </tr>
    </table>
    <br />
    <div id="ClickTaleDiv" style="display: none;"></div>
    <script type="text/javascript">
        if (typeof jQuery != 'function') {
            vers = prompt('jQuery version ' + ver + ' is not valid. \nplease provide a valid value:', '1.7.2');
            if (!vers) {
                vers = "1.7.2";
            }
            document.location.href = "childs_jQuery.html?ver=" + vers + "&provider=" + prov;

        } else {

            //tables
            $("#jQbyIdTables_01").click(function () {
                $("#td1").wrapInner("<table border='1'><tr><td></td></tr></table>");
            })

            $("#jQbyIdTables_02").click(function () {
                $("#table1").append("<tr><td>new tr+td append</td></tr>");
            })

            $("#jQbyIdTables_03").click(function () {
                $("#td2").wrap("<td><table border='1'><tr></tr></table></td>");
            })

            $("#jQbyIdTables_04").click(function () {
                $("#td1").parent().before("<tr><td>new tr+td before</td></tr>");
            })

            $("#jQbyIdTables_05").click(function () {
                $("#table1").prepend("<tr><td>new tr+td prepend</td></tr>");
            })

            $("#jQbyIdTables_06").click(function () {
                $("#td2").parent().remove()
            })

            $("#jQbyIdTables_07").click(function () {
                $("#table1").empty()
            })





            //replaceChild

            var n = 10;

            function replaceFirst(by) {

                if (by == "id") {
                    $("#divs > div:eq(0)").replaceWith("<div id='d" + n + "' style='background: pink '>Pink</div>");
                } else {
                    $(".wrapDiv:eq(1) > div:eq(0)").replaceWith("<div style='background: pink '>Pink</div>");
                }
                n++;
            }

            function replaceThirdWithFirst(by) {

                if (by == "id") {
                    $("#divs > div:eq(2)").replaceWith($("#divs > div:eq(0)"));
                } else {
                    $(".wrapDiv:eq(1) > div:eq(2)").replaceWith($(".wrapDiv:eq(1) > div:eq(0)"));
                }
                n++;
            }


            //.append()
            function addChild(by) {
                if (by == "id") {
                    $("#divs").append("<div id='d" + n + "'style=' background: grey '>Grey</div>");
                } else {
                    $(".wrapDiv:eq(1)").append("<div style='background: grey '>Grey</div>");
                }
                n++;
            }


            //.append(function)
            function appendFunc(by) {
                if (by == "id") {
                    $("#divs > div:eq(0)").append(function () {
                        return $("#divs > div:eq(1)");
                    });
                } else {
                    $(".wrapDiv:eq(1) > div:eq(0)").append(function () {
                        return $(".wrapDiv:eq(1) > div:eq(1)");
                    });
                }
                n++;
            }

            //replaceWith with function - replaceWith(function(){}
            function replaceFunc(by) {

                if (by == "id") {
                    $("#divs").replaceWith(function () {
                        return $(this).contents();
                    });
                } else {
                    $(".wrapDiv:eq(1)").replaceWith(function () {
                        return $(this).contents();
                    });
                }
                n++;
            }

            //append div to 2 divs
            function append2div(by) {
                if (by == "id") {
                    if ($("#divs").children().length > 2) {
                        $("#divs > div:eq(2),#divs > div:eq(1)").append($("#divs > div:eq(0)"));

                    } else {
                        alert('must have at least 3 divs')
                    }
                } else {
                    if ($(".wrapDiv:eq(1)").children().length > 2) {
                        $(".wrapDiv:eq(1) > div:eq(2),.wrapDiv:eq(1) > div:eq(1)").append($(".wrapDiv:eq(1) > div:eq(0)"));

                    } else {
                        alert('must have at least 3 divs')
                    }
                }
                n++;
            }

            //wrap div1+3 with div2
            function wrapAll2div(by) {
                if (by == "id") {
                    if ($("#divs").children().length > 2) {
                        $("#divs > div:eq(2),#divs > div:eq(0)").wrapAll($("#divs > div:eq(1)"));

                    } else {
                        alert('must have at least 3 divs')
                    }
                } else {
                    if ($(".wrapDiv:eq(1)").children().length > 2) {
                        $(".wrapDiv:eq(1) > div:eq(2),.wrapDiv:eq(1) > div:eq(0)").wrapAll($(".wrapDiv:eq(1) > div:eq(1)"));

                    } else {
                        alert('must have at least 3 divs')
                    }
                }
                n++;
            }

            //append with .html()
            function addChildHtml(by) {
                if (by == "id") {
                    $("#divs").html($("#divs").html() + "<div id='d" + n + "' style='background: grey '>Grey</div>");
                } else {
                    $(".wrapDiv:eq(1)").html($(".wrapDiv:eq(1)").html() + "<div style='background: grey '>Grey</div>");
                }
                n++;
            }

            //appendTo
            function addTo(by) {
                    if (by == "id") {
                        $("<div id='d" + n + "' style='background: grey '>Grey</div>").appendTo("#divs");
                    } else {
                        $("<div style='background: grey '>Grey</div>").appendTo(".wrapDiv:eq(1)");
                    }
                    n++;
                }
                //removeChild
            function remChild(by) {
                if (by == "id") {
                    $("#divs > div:eq(0)").remove();
                } else {
                    $(".wrapDiv:eq(1) > div:eq(0)").remove();
                }

            }

            //remove(#element)
            function remChild2(by) {
                if (by == "id") {
                    $("#divs > div").remove("#d3,#d1");
                } else {
                    $(".wrapDiv:eq(1) > div:eq(2),.wrapDiv:eq(1) > div:eq(0)").remove(".myClass");
                }

            }


            //unWrapDiv
            function unWrapDiv(by) {
                if (by == "id") {
                    $("#divs > div").unwrap();
                } else {
                    $(".wrapDiv:eq(1) > div").unwrap();
                }

            }

            //prependChild
            function prepChild(by) {
                if (by == "id") {
                    $("#divs").prepend("<div id='d" + n + "' style='background: purple '>Purple</div>");
                } else {
                    $(".wrapDiv:eq(1)").prepend("<div style='background: purple '>Purple</div>");
                }
                n++;
            }


            //insertBefore
            function insBefore(by) {
                if (by == "id") {
                    $("#divs div:first").before("<div id='d" + n + "' style='background: cyan '>Cyan</div>");
                } else {
                    $(".wrapDiv:eq(1) div:first").before("<div style='background: cyan '>Cyan</div>");
                }
                n++;
            }

            //insert After
            function insAfter(by) {
                if (by == "id") {
                    $("#divs div:last").after("<div id='d" + n + "' style='background: magenta '>Magenta</div>");
                } else {
                    $(".wrapDiv:eq(1) div:last").after("<div style='background: magenta '>Magenta</div>");
                }
                n++;
            }


            //insert After with function
            function afterFunc(by) {
                if (by == "id") {
                    $("#divs div").after(function () {
                        return "<div id='d" + n + "' style='background: magenta '>Magenta</div>";
                    });
                } else {
                    $(".wrapDiv:eq(1) div").after(function () {
                        return "<div style='background: magenta '>Magenta</div>";
                    });
                }
                n++;
            }


            //Html with function
            function htmlFunc(by) {
                if (by == "id") {
                    $("#divs").html(function () {
                        return $("#divs > div:eq(1)");
                    });
                } else {
                    $(".wrapDiv:eq(1)").html(function () {
                        return $(".wrapDiv:eq(1) > div:eq(1)");
                    });
                }
                n++;
            }



            //insert before with function
            function beforeFunc(by) {
                if (by == "id") {
                    $("#divs div").before(function () {
                        return "<div id='d" + n + "' style='background: magenta '>Magenta</div>";
                    });
                } else {
                    $(".wrapDiv:eq(1) div").before(function () {
                        return "<div style='background: magenta '>Magenta</div>";
                    });
                }
                n++;
            }

            //wrap
            function wrapDivs(by) {
                if (by == "id") {
                    $("#divs").wrap("<div style='padding:10px; border:1px blue solid' id='d" + n + "' />");
                } else {
                    $(".wrapDiv:eq(1)").wrap("<div style='padding:10px; border:1px blue solid'/>");
                }
                n++;
            }

            function wrapAllDivs() {
                $(".myClass").wrapAll("<div  />");
                n++;
            }

            function wrapInnerDivs(by) {
                if (by == "id") {
                    $("#divs").wrapInner("<div id='d" + n + "'  />");
                } else {
                    $(".wrapDiv:eq(1)").wrapInner("<div  />");
                }
                n++;
            }

            //empty()
            function emptyDivs(by) {
                if (by == "id") {
                    $("#divs").empty();
                } else {
                    $(".wrapDiv:eq(1)").empty();

                }
            }

            //remove2nodes()
            function remove2nodes(by) {
                if (by == "id") {
                    if ($("#divs").children().length > 3) {
                        $("#divs > div:eq(3)").remove();
                        $("#divs > div:eq(1)").remove();
                    } else {
                        alert('must have at least 4 divs')
                    }
                } else {
                    if ($(".wrapDiv:eq(1)").children().length > 3) {
                        $(".wrapDiv:eq(1) > div:eq(3)").remove();
                        $(".wrapDiv:eq(1) > div:eq(1)").remove();
                    } else {
                        alert('must have at least 4 divs')
                    }

                }
            }

            function addMove(by) {
                if (by == "id") {
                    var first = $('<div class="myClass" style="background: red">Red</div>');
                    var second = $('<div class="myClass" style="background: blue">Blue</div>');

                    $("#divs2").append(first.add(second));
                    var divs = $("#divs2").remove();

                    $("#stam").append(divs);
                } else {

                    var first = $('<div class="myClass" style="background: red">Red</div>');
                    var second = $('<div class="myClass" style="background: blue">Blue</div>');
                    $(".wrapDiv:eq(2)").append(first.add(second));
                    var divs = $(".wrapDiv:eq(2)").remove();
                    $(".stam:eq(0)").append(divs);
                }
            }

            function addChildAndParentDiv(by) {
                if (by == "id") {
                    $("#divs2").append('<div class="myClass">another one</div>');
                    $("#divs2").before('<div class="myClass" style="background: cyan">cyan</div>');

                } else {
                    $(".wrapDiv:eq(2)").append('<div class="myClass">another one</div>');
                    $(".wrapDiv:eq(2)").before('<div class="myClass" style="background: cyan">cyan</div>');
                }
            }

            function jQueryHTMLTest() {
                $("#doritdiv").html("<div id='dorit1'><h1>IM DORIT 1</h1><div id='dorit2'><h1>IM DORIT 2</h1><marquee>GOGO</marquee></div></div>");
            }

            //AjaX func

            $.ajaxSetup({
                cache: false
            });
            var ajax_load = "<img class='loading' src='img/load.gif' alt='loading...' />";

            //	load() functions
            var loadUrl = "ajax/load.php";
            $("#load_basic").click(function () {
                $("#result").html(ajax_load).load(loadUrl);
            });

            $("#load_dom").click(function () {
                $("#result")
                    .html(ajax_load)
                    .load(loadUrl + " #picture");
            });

            $("#load_get").click(function () {
                $("#result")
                    .html(ajax_load)
                    .load(loadUrl, "language=php&version=5");
            });

            $("#load_post").click(function () {
                $("#result")
                    .html(ajax_load)
                    .load(loadUrl, {
                        language: "php",
                        version: 5
                    });
            });

            $("#jQbyIdAjax_01").click(function () {
                $("#result")
                    .html(ajax_load)
                    .load(loadUrl, null, function (responseText) {
                        $("#result").append("<div style=' background: yellow '>this text was added by a call back</div>")
                    });
            });

            //	$.getJSON()
            var jsonUrl = "ajax/json.php";
            $("#getJSONForm").submit(function () {
                var q = $("#q").val();
                if (q.length == 0) {
                    $("#q").focus();
                } else {
                    $("#result").html(ajax_load);
                    $.getJSON(
                        jsonUrl,
                        //				"q="+q,
                        {
                            q: q
                        },

                        function (json) {
                            var result = "<p>Language code is \"<strong>" + json.responseData.language + "</strong>\"</p>";
                            $("#result").html(result);
                        });
                }
                return false;
            });

            //	$.getScript()
            var scriptUrl = "ajax/script.php";
            $("#jQbyIdAjax_02").click(function () {
                $("#result").html(ajax_load);
                $.getScript(scriptUrl);
            });

            //	$.get()
            var loadUrlGet = "ajax/get.php";
            $("#jQbyIdAjax_03").click(function () {
                $("#result").html(ajax_load);
                $.get(
                    loadUrlGet, {
                        language: "php",
                        version: 5
                    },

                    function (responseText) {
                        $("#result").html(responseText);
                    },
                    "html");
            });

            //	$.post()
            var loadUrlPost = "ajax/post.php";
            $("#jQbyIdAjax_04").click(function () {
                $("#result").html(ajax_load);
                $.post(
                    loadUrlPost, {
                        language: "php",
                        version: 5
                    },

                    function (responseText) {
                        $("#result").html(responseText);
                    },
                    "html");
            });

            // $.ajax()

            $("#jQbyIdAjax_05").click(function () {

                $("#result").html(ajax_load);

                $.ajax({
                    type: "GET",
                    url: "ajax/sites.xml",
                    dataType: "xml",
                    success: function (xml) {
                        $('#result').empty();
                        $(xml).find('site').each(function () {
                            var id = $(this).attr('id');
                            var title = $(this).find('title').text();
                            var url = $(this).find('url').text();
                            $('<div class="items" id="link_' + id + '"></div>').html('<a href="' + url + '">' + title + '</a>').appendTo('#result');
                            $(this).find('desc').each(function () {
                                var brief = $(this).find('brief').text();
                                var long = $(this).find('long').text();
                                $('<div class="brief"></div>').html(brief).appendTo('#link_' + id);
                                $('<div class="long"></div>').html(long).appendTo('#link_' + id);
                            });
                        });
                    }
                });
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