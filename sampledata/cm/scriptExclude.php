<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>test CM scripts</title>
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
        document.write('<script type="text/javascript" src="http://code.jquery.com/jquery-' + ver + '.js" >');
        document.write('<\/script>');
    </script>
    <script type="text/javascript">
        window.ClickTaleSettings = window.ClickTaleSettings || {};

        //window.ClickTaleSettings.Protocol = {
        //    Method: "ImpactRecorder"
        //}

        //window.ClickTaleSettings.Proxy = {
        //    WR: "wrqa.clicktale.net/ctn_2/v1/",
        //    ImageFlag: "wrqa.clicktale.net/ctn_2/v1/"
        //};

        window.ClickTaleSettings.ChangeMonitor = {
            Enable: true,
            AddressingMode: "id",
            OnReadyHandler: function (changeMonitor) {
                changeMonitor.observe();
            },
            OnBeforeReadyHandler: function (settings) {
                settings.Enable = window.ClickTaleGetUID ? !!ClickTaleGetUID() : false;
                return settings;
            }
        };
    </script>
</head>
<body>
    <h1>Script Exclude Texts</h1>
        <h4 id="recVer">wait for info...</h4>
    <h4>provider: <span id="provider">...</span></h4>
    <!-- Test Scripts Change Monitor -->
    <script>
        var content;

        $(function () {
            content = jQuery("#content");
        });

        /*function resetClickTaleOnRecording(innerFn) { 
           
            ClickTaleUploadPage();
            ClickTale(26813, 1, "qadump");

            //Removed text when there is a bulk texts.
            ClickTaleOnRecording = function () {
                setTimeout(function () {
                    innerFn();

                    setTimeout(function () {
                        ClickTaleStop();
                        content.empty();
                    }, 1000);
                }, 0);
            };
        }*/

        //checkRemoveTextWhenBulkTexts
        function checkRemoveTextWhenBulkTexts() {
            
            var addedScript = document.createElement('script');
            var textNode3 = document.createTextNode("Katz");

            addedScript.type = "text";
            addedScript.id = "testScript";
            content.append(addedScript);

            addedScript.appendChild(document.createTextNode("Zoe"));
            addedScript.appendChild(document.createTextNode("\n"));
            addedScript.appendChild(textNode3);
            addedScript.appendChild(document.createTextNode("!"));
            // resetClickTaleOnRecording(function () { textNode3.remove(); });
        }

        function checkRemoveTextWhenNoBulkTexts() {
            var addedScript = document.createElement('script');
            var textNode1 = document.createTextNode("Zoe");

            addedScript.type = "text";
            addedScript.id = "testScript";
            document.body.appendChild(addedScript);
            addedScript.appendChild(textNode1);
            // resetClickTaleOnRecording(function () { textNode1.remove(); });
        }

        function checkRemoveElementBetweenTwoTexts() {
            var addedScript = document.createElement('script');
            var para = document.createElement("P");

            para.id = "testP";
            addedScript.type = "text";
            addedScript.id = "testScript";
            document.body.appendChild(addedScript);
            addedScript.appendChild(document.createTextNode("Zoe"));
            addedScript.appendChild(para);
            addedScript.appendChild(document.createTextNode("Katz"));
            // resetClickTaleOnRecording(function () { para.remove(); });
        }

        function moveTextToLocationWhenPreviousHadBulkTexts() {
            var addedScript = document.createElement('script');
            var sndScript = document.createElement("script");
            var textNode2 = document.createTextNode("Katz");

            sndScript.type = addedScript.type = "text";
            addedScript.id = "testScript";
            document.body.appendChild(addedScript);
            sndScript.id = "secondScript";
            document.body.appendChild(sndScript);

            addedScript.appendChild(document.createTextNode("Zoe"));
            addedScript.appendChild(textNode2);
            addedScript.appendChild(document.createTextNode("!"));
            // resetClickTaleOnRecording(function () { sndScript.appendChild(textNode2); });
        }

        function newAddedText() {
            var addedScript = document.createElement('script');
            var textNode1 = document.createTextNode("Zoe");

            addedScript.type = "text/javascript";
            addedScript.id = "testScript";
            document.body.appendChild(addedScript);
            // resetClickTaleOnRecording(function () { addedScript.appendChild(textNode1); });
        }

        function moveTextToLocationWithBulkText() {
            var addedScript = document.createElement('script');
            var elemToMove = document.createTextNode("ooo");
            var addedScript2 = document.createElement('script');

            addedScript2.type = addedScript.type = "text";
            addedScript.id = "testScript";
            document.body.appendChild(addedScript);

            addedScript.appendChild(elemToMove);
            addedScript2.id = "testScript2";
            document.body.appendChild(addedScript2);

            addedScript2.appendChild(document.createTextNode("Zoe"));
            addedScript2.appendChild(document.createTextNode("Katz"));
            addedScript2.appendChild(document.createTextNode("!"));
            // resetClickTaleOnRecording(function () { addedScript2.appendChild(elemToMove); });
        }

        function movedElementBetweenTwoTexts() {
            var addedScript = document.createElement('script');
            var para = document.createElement("P");
            var secondText = document.createTextNode("Katz");

            para.id = "testP";
            addedScript.type = "text";
            addedScript.id = "testScript";
            content.append(para);
            document.body.appendChild(addedScript);

            addedScript.appendChild(document.createTextNode("Zoe"));
            addedScript.appendChild(secondText);
            // resetClickTaleOnRecording(function () { addedScript.insertBefore(para, secondText); });
        }

        function changeTextContent() {
            var addedScript = document.createElement('script');
            var zoeText = document.createTextNode("Zoe");

            addedScript.type = "text";
            addedScript.textContent = "Zoe";
            addedScript.id = "testScript";
            addedScript.appendChild(zoeText);
            document.body.appendChild(addedScript);
            // resetClickTaleOnRecording(function () { zoeText.textContent = "Zoe !"; });
        }

        function moveTextToLocationWhereThereIsNoBulkTextInThatLocation() {
            var addedScript = document.createElement('script');
            var addedScript2 = document.createElement('script');
            var textNode1 = document.createTextNode("Zoe");

            addedScript.type = "text";
            addedScript.id = "testScript";
            document.body.appendChild(addedScript);

            addedScript2.type = "text";
            addedScript2.id = "testScript2";
            document.body.appendChild(addedScript2);

            addedScript.appendChild(textNode1);
            // resetClickTaleOnRecording(function () { addedScript2.appendChild(textNode1); });
        }

        //add buttons functions
        function createElem(elem, id, classButton) {
            elem = document.createElement(elem);
            id ? elem.setAttribute('id', id) : elem.setAttribute('id', '');
            classButton ? elem.setAttribute('class', classButton) : elem.setAttribute('class', '');

            return elem;
        }

        function buildButton(id, content, action, className) {
            buttonElem = createElem('button', id, className);
            document.body.appendChild(buttonElem);
            document.getElementById(id).textContent = content;
            document.getElementById(id).setAttribute('onclick', action);
        }

        //create buttons
        buildButton('RemoveTextWhenBulkTexts', 'checkRemoveTextWhenBulkTexts', 'checkRemoveTextWhenBulkTexts()', 'testButton');
        buildButton('RemoveTextWhenNoBulkTexts', 'checkRemoveTextWhenNoBulkTexts', 'checkRemoveTextWhenNoBulkTexts()', 'testButton');
        buildButton('RemoveElementBetweenTwoTexts', 'checkRemoveElementBetweenTwoTexts', 'checkRemoveElementBetweenTwoTexts()', 'testButton');
        buildButton('moveTextToLocationPreviousHadBulkTexts', 'moveTextToLocationWhenPreviousHadBulkTexts', 'moveTextToLocationWhenPreviousHadBulkTexts()', 'testButton');
        buildButton('newAddedText', 'newAddedText', 'newAddedText()', 'testButton');
        buildButton('moveTextToLocationWithBulkText', 'moveTextToLocationWithBulkText', 'moveTextToLocationWithBulkText()', 'testButton');
        buildButton('changeTextContent', 'changeTextContent', 'changeTextContent()', 'testButton');
        buildButton('moveTextToLocationWhereThereIsNoBulkTextInThatLocation', 'moveTextToLocationWhereThereIsNoBulkTextInThatLocation', 'moveTextToLocationWhereThereIsNoBulkTextInThatLocation()', 'testButton');
    </script>
    <div id="ClickTaleDiv" style="display: none;"></div>
    <div id="content"></div>
    
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
     
    <!-- ClickTale end of Bottom part -->
</body>
</html>
