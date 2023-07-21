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
                document.location.href = "commentsTests.html?ver=" + ver + "&provider=" + provid;
            } else {
                document.location.href = "commentsTests.html?ver=" + vers + "&provider=" + prov;

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
    <title>Change Monitor - Comments Tests</title>
</head>

<body>
    <script type="text/javascript">
        var WRInitTime = (new Date()).getTime();
    </script>
    <h1>Change Monitor - Comments Tests</h1>
    <h4 id="recVer"></h4>
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

                <br />
                <br />
                
                <br />
                <button id="jQbyId_1" onclick="elemTxtCmt()">(1)Element,Text, Comment</button>
                <button id="jQbyId_2" onclick="elemCmtTxt()">(2)Element, Comment, Text</button>
                <button id="jQbyId_3" onclick="elemCmtCmt()">(3)Element, Comment, Comment</button>
                <button id="jQbyId_4" onclick="elemCmtCmtTxt()">(4)Element, Comment, Comment, Text</button>
                <button id="jQbyId_5" onclick="elemCmtCmtElem()">(5)Element, Comment, Comment, Element</button>
                <button id="jQbyId_6" onclick="RunTestOnLength()">(6)Test element,comment,text permutations</button>


                <button id="jQbyId_47" onclick="commentsAndTexts()">(47)Comments and Texts Test</button>
                <button id="jQbyId_48" onclick="commentsAndElements()">(48)Comments and Elements Test</button>





                <br />
                <div id="commentsTestsdiv" class="wrapDiv">
                    This is comments tests area
                    <!-- comment node 1 -->
                </div>

                <div id="commentsEmptydiv" class="wrapDiv"></div>

                

            </td>

        </tr>
        <tr></tr>
        <tr></tr>
    </table>
    <br />
    <div id="ClickTaleDiv" style="display: none;"></div>
    <script type="text/javascript">
        if (typeof jQuery != 'function') {
            vers = prompt('jQuery version ' + ver + ' is not valid. \nplease provide a valid value:', '1.7.2');
            if (!vers) {
                vers = "1.7.2";
            }
            document.location.href = "commentsTests.html?ver=" + vers + "&provider=" + prov;

        } else {

            //tables
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
                $("#jQueryHTMLdiv").html("<div id='dynInternalDiv1'><h1>IM DYN Header in Div 1</h1><div id='jQuryHtmlDyndiv2'><h1>IM DYN Header in Div 2</h1><h4>NO GOGO</h4></div></div>");
                resetTestIsRunning();
            }

            function jQueryEmptyTest() {
                $("#jQueryHTMLdiv").html("<div id='dynInternalDiv1' style='background: red' ><h1 style='background: blue' >IM DYN Header in Div 1</h1><div id='jQuryHtmlDyndiv2' style='background: green'><h1>IM DYN Header in Div 2</h1><h4>NO GOGO</h4></div></div>");
                setTimeout(function () {
                    $("#jQueryHTMLdiv").empty();
                }, 5000);
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



            var lastElemId = 1;
            var addElement = function AppendElement(elme) {
                $("#commentsEmptydiv").append('<div id=' + 'ElemId' + lastElemId + '_DivNum_' + elme + ' style="background-color: green; border-color: blue; border-width: 5px"></div>');
                ++lastElemId;
            }

            var lstTextId = 1;
            var addText = function AppendText(txtToAppend) {
                var txt = (txtToAppend) ? txtToAppend + " - TextElem number:" + lstTextId : "This is text #" + lstTextId;
                ++lstTextId;
                $("#commentsEmptydiv").append(document.createTextNode(txt));
            }

            var lstCmmtId = 1;
            var addComment = function AppendComment(cmtText) {
                var cmmt = (cmtText) ? cmtText + ',#' + "Comment number: " + lstCmmtId : "this is comment #" + lstCmmtId;
                $("#commentsEmptydiv").append("<!--" + cmmt + "-->");
                ++lstCmmtId;
            }

            function permutator(inputArr) {
                var results = [];

                function permute(arr, memo) {
                    var cur, memo = memo || [];

                    for (var i = 0; i < arr.length; i++) {
                        cur = arr.splice(i, 1);
                        if (arr.length === 0) {
                            results.push(memo.concat(cur));
                        }
                        permute(arr.slice(), memo.concat(cur));
                        arr.splice(i, 0, cur[0]);
                    }

                    return results;
                }

                return permute(inputArr);
            }

            function functionName(fun) {
                var ret = fun.toString();
                ret = ret.substr('function '.length);
                ret = ret.substr(0, ret.indexOf('('));
                return ret;
            }

            var testId = 1;

            function RunTestsOnInputCollection(inputCollection) {
                if (inputCollection && inputCollection.length > 0) {
                    var i;
                    //var lastOpName = "firstInTest";
                    for (i = 0; i < inputCollection.length; ++i) {
                        inputCollection[i]("Test_" + testId);
                        //lastOpName = functionName(inputCollection[i]);
                    }
                    ++testId;
                }
            }

            function RunAllPermutationsOnInputCollections(inputCollection) {
                inputCollection.forEach(function (e, i, array) {
                    var permCollection = permutator(e);
                    permCollection.forEach(function (el, idx, arr) {
                        RunTestsOnInputCollection(el);
                    });

                });
            }

            function stringArrayToFunctionArray(stringArray) {
                var outputArray = [];
                var i;
                for (i = 0; i < stringArray.length; ++i) {
                    if (stringArray[i].indexOf('element') === 0) {
                        outputArray[i] = addElement;
                    } else if (stringArray[i].indexOf('comment') === 0) {
                        outputArray[i] = addComment;
                    } else {
                        outputArray[i] = addText;
                    }
                }
                return outputArray;
            }

            var baseArray = ['element', 'comment', 'text'];
            var baseArrayAsFunc = stringArrayToFunctionArray(baseArray);
            var baseArrayPermutations = permutator(baseArray);

            function AddAllOptionsToArrayOfArrays(inArray) {
                var i, outIter = 0,
                    inIter;
                var outArray = [];
                for (inIter = 0; inIter < inArray.length; ++inIter) {
                    for (i = 0; i < 3; ++i, ++outIter) {
                        outArray[outIter] = inArray[inIter].concat(baseArrayAsFunc[i]);
                    }
                }

                return outArray;
            }

            function RunTestOnLengthX(inLength) {
                var i;
                RunAllPermutationsOnInputCollections([baseArrayAsFunc]);
                if (inLength > 3) {
                    var nextSizeCollection = [baseArrayAsFunc];
                    for (i = 0; i < inLength - 3; ++i) {
                        nextSizeCollection = AddAllOptionsToArrayOfArrays(nextSizeCollection);
                        RunAllPermutationsOnInputCollections(nextSizeCollection);
                    }
                }
            }

            function RunTestOnLength() {
                RunTestOnLengthX(4);
            }

            //this is a single line comment

            /*

            this is a multi line comment

            */
            function elemTxtCmt() {
                $("#commentsEmptydiv").append('<div style="background-color: green; border-color: blue; border-width: 5px"></div>');
                $("#commentsEmptydiv").append(document.createTextNode("Text after DIV before comment..."));
                $("#commentsEmptydiv").append("<!-- Comment; end of Elem, Text, Comment-->");
            }

            function elemCmtTxt() {
                $("#commentsEmptydiv").append('<div style="background-color: green; border-color: blue; border-width: 5px"></div>');
                $("#commentsEmptydiv").append("<!-- Comment; after elem, before Text-->");
                $("#commentsEmptydiv").append(document.createTextNode("Text after comment..."));
            }

            function elemCmtCmt() {
                $("#commentsEmptydiv").append('<div style="background-color: green; border-color: blue; border-width: 5px"></div>');
                $("#commentsEmptydiv").append("<!-- Comment 1; after elem -->");
                $("#commentsEmptydiv").append("<!-- Comment 1; after elem -->");
            }

            function elemCmtCmtTxt() {
                $("#commentsEmptydiv").append('<div style="background-color: green; border-color: blue; border-width: 5px"></div><!-- After DIV comment -->');
                $("#commentsEmptydiv").append("<!-- 2nd comment-->");
                $("#commentsEmptydiv").append(document.createTextNode("Text after comment..."));
            }

            function elemCmtCmtElem() {
                $("#commentsEmptydiv").append('<div style="background-color: green; border-color: blue; border-width: 5px"></div><!-- After DIV comment -->');
                $("#commentsEmptydiv").append("<!-- 2nd comment-->");
                $("#commentsEmptydiv").append(document.createTextNode('<div style="background-color: yellow; border-color: blue; border-width: 5px">'));
            }





            function commentsAndTexts() {
                $("#commentsTestsdiv").append(document.createTextNode("Before Comment..."));
                $("#commentsTestsdiv").append("<!-- new comment node-->");
                $("#commentsTestsdiv").append("<!-- new comment node 2222-->");
                $("#commentsTestsdiv").append(document.createTextNode("After Comment..."));
            }

            function commentsAndElements() {
                $("#commentsTestsdiv").append(document.createTextNode("Before Comment..."));
                $("#commentsTestsdiv").append('<div style="background-color: green; border-color: blue; border-width: 5px"></div><!-- After DIV comment -->');
                $("#commentsTestsdiv").append("<!-- new comment node 2222-->");
                $("#commentsTestsdiv").append(document.createTextNode("Text after comment..."));
            }


            var continuePeriodicUIUpdate;

            function updateUI() {
                //var txt1 = "<p>Text.</p>";              // Create text with HTML
                //var txt2 = $("<p></p>").text("Text.");  // Create text with jQuery
                //var txt3 = document.createElement("p");
                //txt3.innerHTML = "Text.";               // Create text with DOM
                //$("internaldiv1").append(txt1, txt2, txt3);
                insAfter("id");
            }

            function periodicUIUpdate() {
                continuePeriodicUIUpdate = setInterval(function () {
                    updateUI();
                }, 50);
            }

            function stopPeriodicUIUpdate() {
                if (!!continuePeriodicUIUpdate)
                    clearInterval(continuePeriodicUIUpdate);
            }

            var periodicOpcaityUpdate;

            //function updateDivOpacity() {
            //    var divToChange = $("#divs").get(0);
            //    $("#book").fadeTo("slow", 0.5, function () {
            //        // Animation complete.
            //    });
            //}

            //function startPeriodicOpacityUpdate() {
            //    periodicOpcaityUpdate = setInterval(function() {}, 50);
            //}

        }
        
        var add = getUrlVars()["addressing"]
        window.ClickTaleSettings = window.ClickTaleSettings || {};
        
        window.ClickTaleSettings.Compression = {
            Method: "deflate"
        };

        window.ClickTaleSettings.ChangeMonitor = {
            Enable: true,
            AddressingMode: "id",
            Providers: [prov],

            OnReadyHandler: function (changeMonitor) {
                changeMonitor.observe();
                //changeMonitor.exlude("#livechat-full");
                /*
                if  (typeof changeMonitor.observer == 'string') {
                    jQuery('#provider').html(changeMonitor.observer);
                }
                */

            },
            OnBeforeReadyHandler: function (settings) {


                settings.Enable = window.ClickTaleGetUID ? !!ClickTaleGetUID() : false;
                return settings;
            },
            Filters: {
                MaxElementCount: 10000,
                MaxBufferSize: 5000000,
                MaxBufferSum: {
                    Threshold: 500000,

                } //,
                //Before: [function (projection, sesseionID, operation) {
                //    debugger;
                //    console.error("DDD content script... before projection processing...");
                //    return true;
                //}]
            }
            //PII: {
            //    Text: [{
            //        selector: ["script",function(els) {
            //            return els.map(function(e) {
            //                return e.firstChild;
            //            });
            //        }],
            //        transform: function (el) {
            //            return "";
            //        }
            //    },
            //    {
            //        selector: "#txtAndElementsRemoveHTMLdiv",
            //        transform: function (el) {
            //            return "***";
            //        }
            //    }],
            //    Attributes: [{
            //        selector: "#txtAndElementsRemoveHTMLdiv",
            //        transform: function () {
            //            return {
            //                value: "***"
            //            }
            //        }
            //    }]
            //}

        };
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