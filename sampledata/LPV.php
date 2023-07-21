<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="style.css" media="all" />

    <link rel="stylesheet" media="all" href="style/type/folks.css" />
    <!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
    <script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
    <script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
    <script type="text/javascript" src="style/js/scripts.js"></script>

    <!--<script type="text/javascript">
        var ClickTaleSSL = 1;
        var ClickTaleIncludedOnDOMReady = true;
        window.ClickTaleSettings = {
            XHRWrapper: {
                Enable: true
            },
            Compression: {
                Method: "deflate"
            },
            Transport: {
                Interval: function () {
                    return 200;
                },
                MaxConcurrentRequests: 5
            }
        };
    </script>-->



    <title>LPV Test Page</title>


    <script type="text/javascript">
        function ct() {
            // Artiom: remove duplecated lines (Whether is it correct?)
            //var ClickTaleSSL=1;
            //if(typeof ClickTale=='function') ClickTale(26952,1,"qadump");
            var ClickTaleSSL = 1;
            if (typeof ClickTale == 'function') ClickTale(26952, 1, "qadump");
            ClickTaleTag("CT");
        }

        function stop() {
            ClickTaleTag("stopping");
            ClickTaleStop();
        }

        function upload() {
            window.ClickTaleIncludedOnDomReady = true;
            ClickTaleUploadPage('<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml">', '</html>');
        }

        function AddButton() {
            var rndTemp = Math.floor((Math.random() * 100) + 1);
            //Create an input type dynamically.
            var element = document.createElement("button");
            element.id = rndTemp;
            var form1 = document.getElementById("frm1");

            //Append the element			
            form1.appendChild(element);
            document.getElementById(rndTemp).innerHTML = rndTemp;
        }

         //function LPV()
         //{
         //	ClickTaleStop();
         //	ClickTaleFetchFrom="http://ctqatest.info/LPV_Main.php";
         //	ClickTaleLogical("http://ctqatest.info/LPV_Main.php");
         //	ClickTaleTag("LPV");
         //}
         //
         //function LPV_Passthrough()
         //{
         //	ClickTaleStop();
         //	ClickTaleFetchFrom="http://ctqatest.info/LPV_Main.php";
         //	ClickTaleLogical("http://ctqatest.info/LPV_Main.php",true);
         //	ClickTaleTag("LPV_passthrough");
         //}
         //function LPV_upload()
         //{
         //	ClickTaleStop();
         //	window.ClickTaleIncludedOnDomReady = true;
         //	ClickTaleUploadPage('<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml">','</html>');
         //	ClickTaleLogical("http://ctqatest.info/LPV_Main.php");
         //	ClickTaleTag("LPV_without_fetchFrom");
         //}

        function LPV_FetchFrom_wo_referrer() {
            ClickTaleStop();
            ClickTaleFetchFrom = "http://ctqatest.info/LPV.php";
            ClickTaleLogical("http://ctqatest.info/LPV.php");
            ClickTaleTag("LPV_FetchFrom_wo_referrer");
        }

        function LPV_FetchFrom_with_referrer() {
            ClickTaleStop();
            ClickTaleFetchFrom = "http://ctqatest.info/LPV.php";
            ClickTaleLogical("http://ctqatest.info/LPV.php", getReffererFromFetchFromInputBox());
            ClickTaleTag("LPV_FetchFrom_with_referrer");
        }

        function LPV_upload_wo_referrer() {
            ClickTaleStop();
            window.ClickTaleIncludedOnDomReady = true;
            ClickTaleUploadPage('<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml">', '</html>');
            ClickTaleLogical("http://ctqatest.info/LPV.php");
            ClickTaleTag("LPV_upload_wo_referrer");
        }

        function LPV_upload_with_referrer() {
            ClickTaleStop();
            window.ClickTaleIncludedOnDomReady = true;
            ClickTaleUploadPage('<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml">', '</html>');
            ClickTaleLogical("http://ctqatest.info/LPV.php", getReffererFromUploadInputBox());
            ClickTaleTag("LPV_upload_with_referrer");
        }

        function LPV_newUpload_with_referrer() {
            ClickTaleStop();
            window.ClickTaleIncludedOnDomReady = true;
            ClickTaleUploadPage();
            ClickTaleLogical("http://ctqatest.info/LPV.php", getReffererFromNewUploadInputBox());
            ClickTaleTag("LPV_newUpload_with_referrer");
        }

        function LPV_newUpload_wo_referrer() {
            ClickTaleStop();
            window.ClickTaleIncludedOnDomReady = true;
            ClickTaleUploadPage();
            ClickTaleLogical("http://ctqatest.info/LPV.php");
            ClickTaleTag("LPV_newUpload_wo_referrer");
        }


        function getRefferer() {
            //return document.baseURI;
            return document.referrer;
        }

        function getReffererFromFetchFromInputBox() {
            var ref = document.getElementsByName('fetchFromReferrer')[0].value;
            return ref;
        }

        function getReffererFromUploadInputBox() {
            var ref = document.getElementsByName('uploadReferrer')[0].value;
            return ref;
        }

        function getReffererFromNewUploadInputBox() {
            var ref = document.getElementsByName('newUploadReferrer')[0].value;
            return ref;
        }

        $(document).ready(function () {
            $("#tabs li").click(function () {

                //      First remove class "active" from currently active tab
                $("#tabs li").removeClass('active');

                //      Now add class "active" to the selected/clicked tab
                $(this).addClass("active");

                //      Hide all tab content
                $(".tab_content").hide();

                //      Here we get the href value of the selected tab
                var selected_tab = $(this).find("a").attr("href");

                //      Show the selected tab content
                $(selected_tab).fadeIn();

                //      At the end, we add return false so that the click on the link is not executed
                return false;
            });
        });
    </script>

    <style type="text/css">
       
        .field {
            overflow: auto;
            padding: 0 0 0.5em;
        }
        span,
        .checkbox p,
        .radio p {
            padding: 0.2em 0 0;
            float: left;
            width: 180px;
        }
        input,
        select {
            float: left;
            width: 160px;
        }
        select {
            width: 163px;
        }
        .error .messages,
        .error .messages li {
            float: left;
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .error .messages li {
            padding: 0.1em 0 0 2em;
            color: #b92d23;
        }
        .error input {
            color: #b92d23;
        }
        .success {
            background: url(style/images/success_icon.png) 350px 0.2em no-repeat;
        }
        .error {
            background: url(style/images/error_icon.png) 350px 0.2em no-repeat;
        }
        fieldset {
            border: none;
        }
        .checkbox p,
        .radio p,
        .checkbox .inputs,
        .radio .inputs {
            float: left;
        }
        .checkbox p,
        .radio p {
            padding: 0;
            margin: 0 0 1em;
        }
        .checkbox .inputs,
        .radio .inputs {
            width: 165px;
        }
        .checkbox .inputs,
        .checkbox .inputs li,
        .radio .inputs,
        .radio .inputs li {
            list-style: none;
            margin: 0 0 1em;
            padding: 0;
        }
        .checkbox .inputs li,
        .radio .inputs li {
            margin: 0 0 0.3em;
        }
        .checkbox li span,
        .checkbox li input,
        .radio li span,
        .radio li input {
            display: inline;
            float: none;
            width: auto;
        }
        .button input {
            width: auto;
        }
        .validate_any {
            position: relative;
        }
        .validate_any.error {
            padding-top: 2em;
            background-position: 0 0.2em;
        }
        #terms_block .messages li {
            padding-top: 0.2em;
        }
        .validate_any .messages {
            position: absolute;
            left: 0;
            top: 0.1em;
        }
        #wrapper ul {
            padding: 0px;
        }
        #wrapper ul li {
            background: transparent;
            padding-left: 30px;
        }
         #tabs {
            list-style: none;
            padding: 5px 0 4px 0;
            margin: 0 0 0 10px;
            font: 0.75em arial;
             
        }
        #tabsWrapper {
            
            
        }
        #tabs li {
            display: inline !important; 
        }
        #tabs li a {
            border: 1px solid #ccc;
            padding: 4px 6px;
            text-decoration: none;
            background-color: #eeeeee;
            border-bottom: none;
            outline: none;
            border-radius: 5px 5px 0 0;
            -moz-border-radius: 5px 5px 0 0;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
        }
        #tabs li a:hover {
            background-color: #dddddd;
            padding: 4px 6px;
        }
        #tabs li.active a {
            border-bottom: 1px solid #fff;
            background-color: #fff;
            padding: 4px 6px 5px 6px;
            border-bottom: none;
        }
        #tabs li.active a:hover {
            background-color: #eeeeee;
            padding: 4px 6px 5px 6px;
            border-bottom: none;
        }
        #tabs li a.icon_accept {
            background-position: 5px;
            background-repeat: no-repeat;
            padding-left: 24px;
        }
        #tabs li a.icon_accept:hover {
            padding-left: 24px;
        }
        #tabs_content_container {
            border: 1px solid #ccc;
            border-top: none;
            padding: 10px;
            width: 400px;
        }
        .tab_content {
            display: none;
            border: 1px #000 solid;
        }
    </style>
</head>

<body>
    <div id="container">
        <!-- Begin Header Wrapper -->
        <div id="page-top">
            <div id="header-wrapper">
                <!-- Begin Header -->
                <div id="header">
                    <div id="logo">
                        <a href="index.php">
                            <img src="style/images/logo.png" alt="Delphic" />
                        </a>
                    </div>
                    <!-- Logo -->
                    <!-- Begin Menu -->
                    <div id="menu-wrapper">
                        <div id="smoothmenu1" class="ddsmoothmenu">
                            <?php include 'menu.php' ?>
                        </div>
                    </div>
                    <!-- End Menu -->
                </div>
                <!-- End Header -->
            </div>
        </div>
        <!-- End Header Wrapper -->

        <!-- Begin Wrapper -->
        <div id="wrapper">
            <div class="content">

                <!---------------------------------------------------------------------------->
                
                


                <h1>Logical Page Views</h1>
                <table align="right" height="100%" width="50%" border="solid">
                    <tr>
                        <td>
                            <button onclick="ct()">Start rec</button>
                            <button onclick="stop()">Stop rec</button>
                            <button onclick="upload()">Upload</button>
                            <br>
                            <br>
                            <button onclick="AddButton()">Add New Button (change DOM)</button>
                            <br>
                            <form name="frm1" id="frm1">
                                <input type="text">
                                <br>
                                <br>
                                <input type="radio" name="sex" value="male">Male
                                <br>
                                <input type="radio" name="sex" value="female">Female
                                <br>
                                <input type="radio" name="sex" value="female">undefined
                                <br>
                                <textarea rows="4" cols="50"></textarea>
                            </form>
                            
                            <div id="tabsWrapper">
                    <ul id="tabs">
                        <li class="active">
                            <a href="#tab1">Tab 1</a>
                        </li>
                        <li>
                            <a class="icon_accept" href="#tab2">Tab with icon</a>
                        </li>
                        <li>
                            <a href="#tab3">Long name for the last tab</a>
                        </li>
                    </ul>
                    <div id="tab1" class="tab_content" style="display: block;">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.</p>
                    </div>
                    <div id="tab2" class="tab_content">
                        <p>content for tab 2.</p>
                    </div>
                    <div id="tab3" class="tab_content">
                        <p>bla bla bla</p>
                    </div>
                </div>

                        </td>
                    </tr>
                    <tr>
                        <td>

                            <button onclick="LPV_FetchFrom_wo_referrer()">Start new LP (FetchFrom, w/o Referrer)</button>
                            <br>
                            <button onclick="LPV_FetchFrom_with_referrer()">Start new LP (FetchFrom, with Referrer)</button>
                            <input type="text" name="fetchFromReferrer" value="http://www.CustomReferrer.FetchFrom.com" style="width:300px;float:none">
                            <br>
                            <button onclick="LPV_upload_wo_referrer()">Start new LP (Upload, w/o Referrer)</button>
                            <br>
                            <button onclick="LPV_upload_with_referrer()">Start new LP (Upload, with Referrer)</button>
                            <input type="text" name="uploadReferrer" value="http://www.CustomReferrer.Upload.com" style="width:300px;float:none">
                            <br>
                            <button onclick="LPV_newUpload_wo_referrer()">Start new LP (NEW Upload, w/o Referrer)</button>
                            <br>
                            <button onclick="LPV_newUpload_with_referrer()">Start new LP (NEW Upload, with Referrer)</button>
                            <input type="text" name="newUploadReferrer" value="http://www.CustomReferrer.Upload.com" style="width:300px;float:none">
                            <br>

                            <br>Referer to current page is:&nbsp; "
                            <script>
                                document.write(getRefferer());
                            </script>"
                            <br>
                            <br>* All the buttons perform:
                            <br>1. Stop recording
                            <br>2. Define: FetchFrom OR Upload
                            <br>3. Run ClickTaleLogical (with OR without referrer)
                            <br>
                            <br>

                            <!-- Artiom: Remove unneeded form:
		<form name="frm2" id= "frm2">
			<input type="text"><br><br>
			<input type="radio" name="sex" value="male">Male<br>
			<input type="radio" name="sex" value="female">Female<br>
			<input type="radio" name="sex" value="female">undefined<br>
			<textarea rows="4" cols="50"></textarea>
		</form>
	-->

                        </td>
                    </tr>
                </table>
                

                <!---------------------------------------------------------------------------->

            </div>
        </div>
        <!-- End Wrapper -->

        <div class="clearfix"></div>
        <div class="push"></div>
    </div>



    <!-- Begin Footer -->
    <div id="footer-wrapper">
        <?php include 'footer.php' ?>
    </div>
    <!-- End Footer -->


    <?php include 'ct_bottom.php' ?>


</body>

</html>