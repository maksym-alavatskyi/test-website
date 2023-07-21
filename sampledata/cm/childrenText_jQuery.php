<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
    <meta content="utf-8" http-equiv="encoding" />
    <script type='text/javascript'>
    </script>
    <script type="text/javascript">

        // jQuery version control
        function submitform() {
            var vers = document.form.search.options[document.form.search.selectedIndex].value;
            var provid = document.form.selectProvider.options[document.form.selectProvider.selectedIndex].value;
            if (!vers) {
                document.location.href = "children_jQuery.html?ver=" + ver + "&provider=" + provid;
            } else {
                document.location.href = "children_jQuery.html?ver=" + vers + "&provider=" + prov;

            }
        }
        mode = "id";
        // get ver from url
        function getUrlVars() {
            var vars = {};
            var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
                vars[key] = value;
            });
            return vars;
        }

        ver = getUrlVars()["ver"];
        if (!ver) {
            ver = "1.7.2";
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
        document.write('<script type="text/javascript" src="http://code.jquery.com/jquery-' + ver + '.js" >');
        document.write('<\/script>');
    </script>
    <style type="text/css">
        .items a, .items a:active, .items a:link, .items a:visited {
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

        .wrapDiv div, .myClass {
            padding: 20px;
            width: 80%;
            border: 1px black solid;
        }

        #jq {
            color: green;
            float: left;
        }
    </style>
    <script type="text/javascript">
        
        window.ClickTaleSettings = window.ClickTaleSettings || {};
        window.ClickTaleSettings.ChangeMonitor = {
            Enable: true,
            AddressingMode: mode,
            LiveExclude: true,
            Filters: {
                MaxElementCount: 1000,
                MaxBufferSize: 10000000,
                //OptimizeAnimations : "jQuery",
                Before: [],
                After: [
                    function (node, sesseionID, operation) {
                        return true;
                    }]
            },
            Providers: [prov],
            OnReadyHandler: function (changeMonitor) {

                //include:
                changeMonitor.observe();


             
                

            },
            OnBeforeReadyHandler: function (settings) {
                settings.Enable = window.ClickTaleGetUID ? !!ClickTaleGetUID() : false;
                return settings;
            }
        };
    </script>
    <title>Change Monitor - texts mutations</title>
</head>

<body>
    <script type="text/javascript">
        var WRInitTime = (new Date()).getTime();
    </script>
    <h1>Change Monitor - texts mutations</h1>
    <h4 id="recVer">wait for info...</h4>
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
    <table cellpadding="20" border="1" width="100%">
        <tr>
            <td valign="top">

                <h3>by ID</h3>
<div id="d1" style="background: red ">Red</div>
                <div id="d2" style="background: blue ">Blue</div>
                <div id="d3" style="background: green ">Green</div>
                <button id="jQbyId_25" onclick="insertElementBetween2Texts()">(23) insertElementBetween2Texts</button>
                <button id="jQbyId_26" onclick="removeChildAndThenParent()">(26) remove child and then parent</button>
                <button id="jQbyId_27" onclick="removeTextBetween2Texts()">(27) removeTextBetween2Texts</button>
                <button id="jQbyId_33" onclick="jQueryHTMLTest()">(33)jQueryHTMLTest</button>
                <button id="jQbyId_34" onclick="TextAndElementsAlternatelySwitchASYNCTest()">(34)Texts and Elements Switch Alternately Test (ASync)</button>
                <button id="jQbyId_35" onclick="TextAndElementsAlternatelySwitchSyncTest()">(35)Texts and Elements Switch Alternately Test (Sync)</button>
                <button id="jQbyId_36" onclick="moveTextBetweenElementsTest()">(36)Move Text between element Test (Sync)</button>
                <button id="jQbyId_37" onclick="removeElementAfterOneText()">(37)Remove Element after Text Test</button>
                <button id="jQbyId_38" onclick="removeElementAfterTwoText()">(38)Remove Element after Couple Of Texts Test</button>
                <button id="jQbyId_39" onclick="removeElementBetweenTexts()">(39)Remove Element Between Texts Test</button>
                <button id="jQbyId_40" onclick="removeElementBetweenContiguousTexts()">(40)Remove Element Between Contiguous Texts Test</button>
                <button id="jQbyId_41" onclick="removeTextBetweenTextAndElement()">(41)Remove Text Between text and Element Test</button>
                <button id="jQbyId_42" onclick="removeTextAfterTextsBeforeElement()">(42)Remove Text After texts and before Element Test</button>
                <button id="jQbyId_43" onclick="removeInternalTextInTextBulk()">(43)Remove Text in Texts Bulk Test</button>                
                                                
                <div id="stam">
                    <div id="divs2" style="background-color: blueviolet; padding: 20px;">
                    </div>
                </div>

                <div id="jQueryHTMLdiv" class="wrapDiv">
                    <div id='internaldiv1'>
                        <h1>IM STAT Header in Div 1</h1>
                        <div id='internalDiv2'>
                            <h1>IM STAT Header in Div 2</h1>
                            <pre>
                            GOGO                     
                            go Johnny GO
                            </pre>
                        </div>
                    </div>
                </div>

                <div id="txtAndElementsHTMLdiv" class="wrapDiv">
                    <div id='internaldiv11'>
                        <h1> This is header element before </h1>
                        This is text between two Elements ()
                        <h1>This is header element after</h1>
                    </div>
                </div>

                <div id="txtAndElementsRemoveHTMLdiv" class="wrapDiv">
                </div>

                <div id="noTxtContainerDiv" class="wrapDiv">
                    <h1> This is header element before 22 </h1><h1>This is header element after 33</h1>
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
            });

            $("#jQbyIdTables_02").click(function () {
                $("#table1").append("<tr><td>new tr+td append</td></tr>");
            });

            $("#jQbyIdTables_03").click(function () {
                $("#td2").wrap("<td><table border='1'><tr></tr></table></td>");
            });

            $("#jQbyIdTables_04").click(function () {
                $("#td1").parent().before("<tr><td>new tr+td before</td></tr>");
            });

            $("#jQbyIdTables_05").click(function () {
                $("#table1").prepend("<tr><td>new tr+td prepend</td></tr>");
            });

            $("#jQbyIdTables_06").click(function () {
                $("#td2").parent().remove();
            });

            $("#jQbyIdTables_07").click(function () {
                $("#table1").empty();
            });
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
                        alert('must have at least 3 divs');
                    }
                } else {
                    if ($(".wrapDiv:eq(1)").children().length > 2) {
                        $(".wrapDiv:eq(1) > div:eq(2),.wrapDiv:eq(1) > div:eq(1)").append($(".wrapDiv:eq(1) > div:eq(0)"));

                    } else {
                        alert('must have at least 3 divs');
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
                        alert('must have at least 3 divs');
                    }
                } else {
                    if ($(".wrapDiv:eq(1)").children().length > 2) {
                        $(".wrapDiv:eq(1) > div:eq(2),.wrapDiv:eq(1) > div:eq(0)").wrapAll($(".wrapDiv:eq(1) > div:eq(1)"));

                    } else {
                        alert('must have at least 3 divs');
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

            function removeSingleText() {
                var el = jQuery("#d1").get(0);

                el.removeChild(el.firstChild);
            }

            function relocateSingleTextBefore() {
                var el = jQuery("#d1").get(0);
                var el2 = jQuery(".wrapDiv > .myClass").eq(0).get(0);

                if (!!el2 && !!el && !!el.firstChild) {
                    el2.insertBefore(el.firstChild, el2.firstChild);
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
                        alert('must have at least 4 divs');
                    }
                } else {
                    if ($(".wrapDiv:eq(1)").children().length > 3) {
                        $(".wrapDiv:eq(1) > div:eq(3)").remove();
                        $(".wrapDiv:eq(1) > div:eq(1)").remove();
                    } else {
                        alert('must have at least 4 divs');
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
                }
                else {

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

                }
                else {
                    $(".wrapDiv:eq(2)").append('<div class="myClass">another one</div>');
                    $(".wrapDiv:eq(2)").before('<div class="myClass" style="background: cyan">cyan</div>');
                }
            }

            window.testIsRunning = false;
            window.isAsyncTest = false;

            function setTestIsRunning() {
                window.isAsyncTest = true;
                window.testIsRunning = true;                
            }

            function resetTestIsRunning() {
                window.testIsRunning = false;
                window.isAsyncTest = false;
            }



            function insertElementBetween2Texts() {
                setTestIsRunning();
                var divs2 = $("#divs2").get(0);
                var divs2SecondNode = document.createTextNode(" Second");

                divs2.appendChild(document.createTextNode("First"));
                divs2.appendChild(divs2SecondNode);

                setTimeout(function () {
                    var d2 = $("#d2").clone().get(0);
                    var parentNode = divs2SecondNode.parentNode;

                    parentNode.insertBefore(d2, divs2SecondNode);
                    resetTestIsRunning();
                }, 1000);
            }

            function removeTextBetween2Texts() {
                setTestIsRunning();
                var divs2 = $("#divs2").get(0);
                var divs2SecondNode = document.createTextNode(" Second");

                divs2.appendChild(document.createTextNode("First"));
                divs2.appendChild(divs2SecondNode);
                divs2.appendChild(document.createTextNode(" Third"));

                setTimeout(function () {
                    divs2.removeChild(divs2SecondNode);
                    resetTestIsRunning();
                }, 2000);
            }

            function removeChildAndThenParent() {
                setTestIsRunning();
                var parent = $("#d1").get(0);
                parent.removeChild(parent.firstChild);
                parent.parentNode.removeChild(parent);
                resetTestIsRunning();
            }

            function jQueryHTMLTest() {
                setTestIsRunning();
                $("#jQueryHTMLdiv").html("<div id='dynInternalDiv1'><h1>IM DYN Header in Div 1</h1><div id='jQuryHtmlDyndiv2'><h1>IM DYN Header in Div 2</h1><pre>NO GOGO</pre></div></div>");
                resetTestIsRunning();
            }

            function TextAndElementsAlternatelySwitchASYNCTest() {
                setTestIsRunning();
                $("#jQueryHTMLdiv").append('<p id=textAndElemSwitchContainer1 style="background: orange"> </p>');
                var p1 = $("#textAndElemSwitchContainer1").get(0);

                setTimeout(function () {
                    p1.appendChild(document.createElement('br'));
                }, 1);
                setTimeout(function () {
                    p1.appendChild(document.createTextNode("text 1"));
                }, 1);
                setTimeout(function () {
                    p1.appendChild(document.createTextNode("text 1.1"));
                }, 1);
                setTimeout(function () {
                    p1.appendChild(document.createElement('br'));
                }, 1);
                setTimeout(function () {
                    p1.appendChild(document.createTextNode("text 2"));
                    resetTestIsRunning();
                }, 1);

            }

            function TextAndElementsAlternatelySwitchSyncTest() {
                setTestIsRunning();
                var divs2 = $("#divs2").get(0);
                var paragraph = document.createElement('p');
                divs2.appendChild(paragraph);
                paragraph.appendChild(document.createElement('br'));
                paragraph.appendChild(document.createTextNode("text 1"));
                paragraph.appendChild(document.createTextNode("...text 1.1"));
                paragraph.appendChild(document.createElement('br'));
                paragraph.appendChild(document.createTextNode("text 2"));
                resetTestIsRunning();
            }

            function moveTextBetweenElementsTest() {
                setTestIsRunning();
                var txtNode = $("#internaldiv11").get(0).firstElementChild.nextSibling;
                var newParentElem = $("#noTxtContainerDiv").get(0);
                var insertAfterElem = newParentElem.lastChild.previousElementSibling;
                newParentElem.insertBefore(txtNode, insertAfterElem);
                resetTestIsRunning();
            }

            function removeElementAfterOneText() {
                setTestIsRunning();
                $("#txtAndElementsRemoveHTMLdiv").html("This is Dynamic Text");
                var divElem = $('#txtAndElementsRemoveHTMLdiv').get(0);
                var paragraph = document.createElement('p');
                paragraph.style.background = 'rgb(0,102,153)';
                paragraph.style.border = 'thin dotted red';
                divElem.appendChild(paragraph);

                setTimeout(function () {
                    var parentDiv = $('#txtAndElementsRemoveHTMLdiv').get(0);
                    parentDiv.removeChild(parentDiv.childNodes[parentDiv.childNodes.length - 1]);
                }, 2000);

                setTimeout(function () {
                    var parentDiv = $('#txtAndElementsRemoveHTMLdiv').get(0);
                    parentDiv.removeChild(parentDiv.childNodes[parentDiv.childNodes.length - 1]);
                    resetTestIsRunning();
                }, 1000);
            }

            var localInterval_ = null;

            function removeElementAfterTwoText() {
                setTestIsRunning();
                var divElem = $('#txtAndElementsRemoveHTMLdiv').get(0);
                divElem.appendChild(document.createTextNode("dyn text 1..."));
                divElem.appendChild(document.createTextNode("dyn text 2..."));
                divElem.appendChild(document.createTextNode("dyn text 3..."));
                var paragraph = document.createElement('p');
                paragraph.style.background = 'rgb(0,102,153)';
                paragraph.style.border = 'thin dotted red';
                divElem.appendChild(paragraph);

                setTimeout(function () {
                    var parentDiv = $('#txtAndElementsRemoveHTMLdiv').get(0);
                    parentDiv.removeChild(parentDiv.childNodes[parentDiv.childNodes.length - 1]);
                }, 2000);

                setTimeout(function () {
                    var parentDiv = $('#txtAndElementsRemoveHTMLdiv').get(0);                    
                    localInterval_ = window.setInterval(function () {
                        if (parentDiv.childNodes.length === 0) {
                            window.clearInterval(localInterval_);
                            this.localInterval_ = null;
                            resetTestIsRunning();
                        }
                        if (parentDiv.childNodes.length > 0) {
                            parentDiv.removeChild(parentDiv.childNodes[parentDiv.childNodes.length - 1]);
                        }
                    }, 1000);
                }, 4000);
            }

            function cleanTestsDiv(timeOut) {
                setTimeout(function () {
                    var parentDiv = $('#txtAndElementsRemoveHTMLdiv').get(0);
                    localInterval_ = window.setInterval(function () {
                        if (parentDiv.childNodes.length === 0) {
                            window.clearInterval(localInterval_);
                            this.localInterval_ = null;
                            resetTestIsRunning();
                        }
                        if (parentDiv.childNodes.length > 0) {
                            parentDiv.removeChild(parentDiv.childNodes[parentDiv.childNodes.length - 1]);
                        }
                    }, 1000);
                }, timeOut);
            }

            function removeElementBetweenTexts() {
                setTestIsRunning();
                var divElem = $('#txtAndElementsRemoveHTMLdiv').get(0);
                divElem.appendChild(document.createTextNode("dyn text before element 1..."));
                var paragraph = document.createElement('p');
                paragraph.style.background = 'rgb(0,102,153)';
                paragraph.style.border = 'thin dotted green';
                divElem.appendChild(paragraph);
                divElem.appendChild(document.createTextNode("dyn text after element 2..."));

                setTimeout(function () {
                    var parentDiv = $('#txtAndElementsRemoveHTMLdiv').get(0);
                    parentDiv.removeChild(parentDiv.childNodes[2]);
                }, 2000);

                cleanTestsDiv(3000);
            }

            function removeElementBetweenContiguousTexts() {
                setTestIsRunning();
                var divElem = $('#txtAndElementsRemoveHTMLdiv').get(0);
                divElem.appendChild(document.createTextNode("dyn text before element 1..."));
                divElem.appendChild(document.createTextNode("dyn text before element 11..."));
                var paragraph = document.createElement('p');
                paragraph.style.background = 'rgb(0,102,153)';
                paragraph.style.border = 'thin dotted green';
                divElem.appendChild(paragraph);
                divElem.appendChild(document.createTextNode("dyn text after element 2..."));
                divElem.appendChild(document.createTextNode("dyn text after element 22..."));

                setTimeout(function () {
                    var parentDiv = $('#txtAndElementsRemoveHTMLdiv').get(0);
                    parentDiv.removeChild(parentDiv.childNodes[3]);
                }, 2000);

                cleanTestsDiv(3000);
            }

            function removeTextBetweenTextAndElement() {
                setTestIsRunning();
                var divElem = $('#txtAndElementsRemoveHTMLdiv').get(0);
                divElem.appendChild(document.createTextNode("dyn text  1..."));
                divElem.appendChild(document.createTextNode("dyn text  2..."));
                var paragraph = document.createElement('p');
                paragraph.style.background = 'rgb(0,102,153)';
                paragraph.style.border = 'thin dotted green';
                divElem.appendChild(paragraph);

                setTimeout(function () {
                    var parentDiv = $('#txtAndElementsRemoveHTMLdiv').get(0);
                    parentDiv.removeChild(parentDiv.childNodes[2]);
                }, 2000);

                cleanTestsDiv(3000);
            }



            function removeTextAfterTextsBeforeElement() {
                setTestIsRunning();
                var divElem = $('#txtAndElementsRemoveHTMLdiv').get(0);
                divElem.appendChild(document.createTextNode("dyn text  1..."));
                divElem.appendChild(document.createTextNode("dyn text  2..."));
                divElem.appendChild(document.createTextNode("dyn text  3..."));
                var paragraph = document.createElement('p');
                paragraph.style.background = 'rgb(0,102,153)';
                paragraph.style.border = 'thin dotted green';
                divElem.appendChild(paragraph);
                setTimeout(function () {
                    var parentDiv = $('#txtAndElementsRemoveHTMLdiv').get(0);
                    parentDiv.removeChild(parentDiv.childNodes[2]);
                }, 2000);

                cleanTestsDiv(3000);
            }

            function removeInternalTextInTextBulk() {
                setTestIsRunning();
                var divElem = $('#txtAndElementsRemoveHTMLdiv').get(0);
                divElem.appendChild(document.createTextNode("dyn text  1..."));
                divElem.appendChild(document.createTextNode("dyn text  2..."));
                divElem.appendChild(document.createTextNode("dyn text  3..."));
                divElem.appendChild(document.createTextNode("dyn text  4..."));
                divElem.appendChild(document.createTextNode("dyn text  5..."));
                var paragraph = document.createElement('p');
                paragraph.style.background = 'rgb(0,102,153)';
                paragraph.style.border = 'thin dotted red';
                divElem.appendChild(paragraph);
                setTimeout(function () {
                    var parentDiv = $('#txtAndElementsRemoveHTMLdiv').get(0);
                    parentDiv.removeChild(parentDiv.childNodes[3]);
                }, 2000);

                cleanTestsDiv(3000);
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
    </script>
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