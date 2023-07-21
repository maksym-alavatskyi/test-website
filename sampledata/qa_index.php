<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <meta charset="UTF-8">
    <title>ClickTale | Testing Portal | QA Index Page</title>
    <script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
    <script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
    <script type="text/javascript" src="style/js/scripts.js"></script>


    <script type="text/javascript" src="js/jquery.easing.js"></script>
    <script type="text/javascript" src="js/jquery.collapse.js"></script>



    <script type="text/javascript">
        $(function () {

            $('#collapser').jqcollapse({
                slide: true,
                speed: 200,
                easing: 'easeOutCubic'
            });

        });
    </script>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            background: #fff;
        }
        .beta_icon {
            background-image: url(img/icon.beta.content.gif);
            height: 46px;
            margin: 0px;
            padding: 0px;
            float: right;
            width: 45px;
            background-repeat: no-repeat;
            background-position: top;
        }
        
        .header1,
        .header2 {
            padding-left: 20px;
            margin-bottom: 5px;
            margin-top: 0px;
            font-weight: bold;
            border-bottom: 2px solid orange;
            color: #FF7219;
        }
        
        #footerholder {
            width: 100%;
            position: fixed;
            bottom: 0px;
            border-top: 1px orange solid;
            padding-top: 10px;
            padding-bottom: 10px;
            background: #fff;
        }
       
        input[type="text"] {
            border: 1px solid #DDDDDD;
            padding-left: 5px;
            -moz-border-radius: 7px;
            -webkit-border-radius: 7px;
            border-radius: 7px;
        }
        input[type="text"]:hover {
            border: 1px solid orange;
        }
        input[type="text"]:focus {
            border: 1px solid #999;
        }
       
        a {
            color: FireBrick
        }
        a:visited {
            color: maroon
        }
        .functions {
            float: right;
        }
        #result {
            background: url(tip.png) no-repeat top 5px right 20px;
        }
        #searchpage {
            width: 30%;
            float: left;
        }
        .rssDiv {
            float: right;
            width: 30%;
            border: 1px solid #D3CAD7;
            padding: 20px;
            margin-bottom: 15px;
            color: #3E3E3E;
        }
        .feedEkList {
            list-style: none outside none;
            background-color: #FFFFFF;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 13px;
        }
        .feedEkList li {
            border-bottom: 1px solid #D3CAD7;
            padding: 5px;
            list-style;
            none;
        }
        .feedEkList li:last-child {
            border-bottom: none;
        }
        .itemTitle a {
            font-weight: bold;
            color: #4EBAFF !important;
            text-decoration: none
        }
        .itemTitle a:hover {
            text-decoration: underline
        }
        .itemDate {
            font-size: 11px;
            color: #AAAAAA;
        }
        iframe {
            width: 100%;
            height: 800px;
            overflow: auto;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />

    <link rel="stylesheet" media="all" href="style/type/folks.css" />
    <!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->


    <style type="text/css">
        form {
            width: 1000px;
        }
        .field {
            overflow: auto;
            padding: 0 0 0.5em;
        }
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

       <iframe src="http://qa.test/index_iframe.html" scrolling="auto"></iframe>
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