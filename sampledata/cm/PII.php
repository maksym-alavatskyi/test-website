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
                document.location.href = "PII.html?ver=" + ver + "&provider=" + provid;
            } else {
                document.location.href = "PII.html?ver=" + vers + "&provider=" + prov;

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
    <script type="text/javascript">
        window.ClickTaleSettings = window.ClickTaleSettings || {};
        window.ClickTaleSettings.Compression = {
            Method: "deflate"
        };

        window.ClickTaleSettings.ChangeMonitor = {
            Enable: true,
            SelectorEngine: "jQuery",
            //AddressingMode: mode,

            PII: {
                Text: [{
                        selector: [".class1",
                            function (elements) {
                                return elements.map(function (el) {
                                    return el.nextSibling;
                                });
                        }],
                        transform: function (el) {
                            console.warn("PII Text Class1");
                            return "***";
                        }
                    },
                    {
                        selector: [".showThis",
                            function (elements) {
                                return elements.map(function (el) {
                                    if (el.previousSibling) {
                                        return el.previousSibling;
                                    }
                                    return document.createTextNode("");
                                });
                        }],
                        transform: function (el) {
                            console.warn("PII Text before hide");
                            return "***";
                        }
                    },
                    {
                        selector: ["#addTextAfter_btn",
                            function (elements) {
                                return elements.map(function (el) {
                                    return el.nextSibling;
                                });
                        }],
                        transform: function (el) {
                            console.warn("PII Text after hide");
                            return "***";
                        }
                    },
                   /* {
                        selector: "#addTextAfter_btn + span",
                            
                        transform: function (el) {
                            console.warn("PII Text after hide");
                            return "***";
                        }
                    },*/

                    {
                        selector: ["textarea",
                            function (elements) {
                                return elements
                        }],
                        transform: function (el) {
                            console.warn("PII Text textarea");
                            return "***";
                        }
                    },
                    {
                        selector: "#button",
                        transform: function (el) {
                            return "***";
                        }
                    },
                    {
                        selector: "#fullName",
                        transform: function (el) {
                            console.warn("PII Text #fullName");
                            return "***";
                        }
                    },
                    {
                        selector: "#email",

                        transform: function (el) {
                            el = el.firstChild;
                            console.warn("PII Text #email");
                            return "***";
                        }
                }],
                Attributes: [{
                    selector: "input[type=text]",
                    transform: function (el) {

                        var attrs = {};

                        console.warn("PII Attributes");

                        for (var i = 0; i < el.attributes.length; i++) {
                            var prop = el.attributes.item(i);

                            attrs[prop.name] = prop.value;
                        }

                        attrs.value = "***";
                        attrs.placeholder = "***";
                        attrs.title = "***";


                        return attrs;
                    }
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
        
        .form-div {
            border: 1px #ccc solid;
            padding: 10px;
        }
        
        .form-div .submit {
            margin-left: 155px;
            margin-top: 10px;
        }
        
        .form-div .label {
            display: block;
            float: left;
            width: 150px;
            margin-right: 5px;
        }
        
        .form-div .form-row {
            padding: 5px 0;
            clear: both;
        }
        
        .form-div label.error {
            width: 150px;
            display: block;
            float: left;
            color: red;
            padding-left: 10px;
        }
        
        .form-div input[type=text],
        select,
        textarea {
            width: 150px;
            float: left;
        }
        
        .form-div textarea {
            height: 50px;
        }
    </style>
    <title>Change Monitor - PII</title>
</head>

<body>
    <script type="text/javascript">
        var WRInitTime = (new Date()).getTime();
    </script>
    <h1>Change Monitor - PII</h1>
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
    <br>
    <br>
    <div class="form-div">
        <form id="form1" method="post" action="" onsubmit="">
            <div class="form-row">
                <span class="label">Name *</span>
                <input type="text" name="name">
                <span style="margin-left:100px" class="label">Name copy*</span>
                <input type="text" name="name2">
            </div>
            <div class="form-row">
                <span class="label">E-Mail *</span>
                <input type="text" name="email" value="@email">
                <span style="margin-left:100px" class="label">E-Mail copy *</span>
                <input type="text" name="email2">

            </div>
            <div class="form-row">
                <span class="label">URL&nbsp;&nbsp;&nbsp;</span>
                <input type="text" name="url" placeholder="http://yourlink.net">
                <span style="margin-left:100px" class="label">URL copy&nbsp;&nbsp;&nbsp;</span>
                <input type="text" name="url2">
            </div>
            <div class="form-row">
                <span class="label">Your comment *</span>
                <textarea name="comment"></textarea>
                <span style="margin-left:100px" class="label">Your comment copy*</span>
                <textarea name="comment2"></textarea>
            </div>


            <div class="form-row">
                <button type="button" id="send_btn">Submit</button>
                <button type="button" id="replaceValue_btn">Replace form elements values</button>
                <button type="button" id="copy_btn">Copy values to new Elements</button>
                <button type="button" id="clone_btn">Clone input Elements</button>
            </div>
        </form>
        <div class="form-div">
            <div>Name: <span id="fullName"></span>
            </div>
            <div>Email: <span id="email"></span>
            </div>

        </div>
        <br>
        <div>
            <div id="clone-div"></div>
        </div>
        <br>
        <br>
        <br>
    </div>
    <div class="form-div">
        <div id="showHideDiv">
            <div class="showThis">SHOW THIS</div>

            <button type="button" id="addWrappedTextBefore_btn">Add Wrapped Text Before</button>
            <button type="button" id="addTextBefore_btn">Add Text Before</button>
            <button type="button" id="addWrappedTextAfter_btn">Add Wrapped Text After</button>
            <button type="button" id="addTextAfter_btn">Add Text After</button><span></span>
            <br>
            <button type="button" id="HideThis_btn">Clone</button>
        </div>
    </div>
    <br>
    <div class="form-div">
        <form>
            <div id="all">
                <div class="class1">Noam</div>
                First Name
                <div class="class1"></div>
                Last Name
                <div class="class1"></div>
                Gender
                <div>
                    <input type="text" value="Address" class="class2" />
                </div>
            </div>
            <div>
                <button type="button" id="button">Clone All</button>
            </div>

        </form>
    </div>



    <script type='text/javascript'>
        jQuery("#button").click(function () {
            var all = jQuery("#all");

            all.html(all.html());
        });

        jQuery("#HideThis_btn").click(function () {
            var showHideDiv = jQuery("#showHideDiv");

            showHideDiv.html(showHideDiv.html());
        });

        jQuery("#addTextBefore_btn").click(function () {
            var showThis = jQuery(".showThis");
            /*var textNode = showThis.get(0).previousSibling
            
            textNode.parentNode.removeChild(textNode);*/
            showThis.before("HIDE THIS ");
        });

        jQuery("#addWrappedTextBefore_btn").click(function () {
            var showThis = jQuery(".showThis");

            showThis.before("<span>HIDE THIS </span>");
        });

        jQuery("#addTextAfter_btn").click(function () {
            var addTextAfter = jQuery("#addTextAfter_btn");

            addTextAfter.after("HIDE THIS ");
        });

        jQuery("#addWrappedTextAfter_btn").click(function () {
            var addTextAfter = jQuery("#addTextAfter_btn");

            addTextAfter.after("<span>HIDE THIS </span>");
        });


        jQuery("#copy_btn").click(function () {
            $("#fullName").html(getInputValue($("[name='name']")));
            $("#email").html(getInputValue($("[name='email']")));

        });

        jQuery("#send_btn").click(function () {
            $("[name='name2']").attr("value", $("[name='name']").attr("value"));
            $("[name='email2']").attr("value", $("[name='email']").attr("value"));
            $("[name='url2']").attr("value", $("[name='url']").attr("value"));
            $("[name='url2']").attr("placeholder", $("[name='url']").attr("placeholder"));
            $("[name='comment2']").append($("[name='comment']").attr("value"));
        });

        jQuery("#replaceValue_btn").click(function () {
            $("[name='name']").attr("value", "John Doe");
            $("[name='email']").attr("value", "Johndoe@mail.com");
            $("[name='url']").attr("value", "http://whostheman.com");
            $("[name='comment']").append("Hello World!");
        });

        jQuery("#clone_btn").click(function () {

            $("#clone-div").append($("input[name='name']").eq(0).clone());
            $("#clone-div").append($("input[name='email']").eq(0).clone());
            $("#clone-div").append($("input[name='url']").eq(0).clone());
            $("#clone-div").append($("textarea[name='comment']").eq(0).clone());

        });

        var getInputValue = function (el) {
            return el.attr("Value");
        }
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
    <div id="ClickTaleDiv"></div>
</body>

</html>