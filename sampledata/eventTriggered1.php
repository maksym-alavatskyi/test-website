<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <meta charset="UTF-8">
    <title>ClickTale | Testing Portal | Event Triggered Recording 1 </title>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />

    <link rel="stylesheet" media="all" href="style/type/folks.css" />
    <!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
    <script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
    <script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
    <script type="text/javascript" src="style/js/scripts.js"></script>


    <style type="text/css">
        form {
            width: 1000px;
        }
        
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
                        <a href="index.php"><img src="style/images/logo.png" alt="Delphic" />
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
                <!-- page content goes here -->

                <h2>Event Triggered Recording</h2>


                <button id="btn1">Event 1: Trigger recording</button>

                <button id="animBtn">Start Animation</button>

                <div id=adiv style="position:relative;left:600px;margin:10px;background:#98bf21;height:100px;width:100px;"></div>
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <div id="notes"></div>
                <br />
                <br />


                <!-- end of page content  -->
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

    <script type="text/javascript">
        function writeNote(noteTxt) {
            $("#notes").append(noteTxt + "<br />");
        }

        $("#btn1").click(function () {
            ClickTaleEvent("@ET@");
            writeNote("event @ET@ triggered. recording should be saved");
        });

        var i=1;
        $(document).ready(function () {
            $("#animBtn").click(function () {
                var div = $("#adiv");
                div.animate({
                    height: '300px',
                    opacity: '0.4'
                }, "slow");
                div.animate({
                    width: '300px',
                    opacity: '0.8'
                }, "slow");
                div.html("Animate This");
                div.animate({
                    height: '100px',
                    opacity: '0.4'
                }, "slow");
                div.animate({
                    width: '100px',
                    opacity: '0.8'
                }, "slow");
                div.html("Animate This "+i++);
                
            });
        });
    </script>

</body>

</html>