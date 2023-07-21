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

    <script type="text/javascript">
        $("#toggleUL").toggle(function () {
                $('#listholder ul').fadeIn(300);
                $(this).text('- Collapse all');
            },

            function () {
                $('#listholder ul>li>ul').fadeOut(300);
                $(this).text('+ Expand all');
            });



         // open all links in a new tab
        $("#listholder a").attr("target", "_blank");


         // browser stats
        

        monthFactory = function () {
            var month = new Array();
            month[0] = "01";
            month[1] = "02";
            month[2] = "03";
            month[3] = "04";
            month[4] = "05";
            month[5] = "06";
            month[6] = "07";
            month[7] = "08";
            month[8] = "09";
            month[9] = "10";
            month[10] = "11";
            month[11] = "12";

            var d = new Date();
            var x = document.getElementById("demo");
            return d.getFullYear() - 1 + month[d.getMonth()] + "-" + d.getFullYear() + month[d.getMonth()];
        }
        var datax = unescape("%3Cdiv%20class%3D%27functions%27%3E%3Cdiv%20id%3D%27browser-ww-monthly-" + monthFactory() + "%27%20width%3D%27600%27%20height%3D%27400%27%20style%3D%27width%3A580px%3B%20height%3A%20400px%3B%20float%3Aright%27%3E%3C/div%3E%3C/div%3E%3Cscript%20type%3D%27text/javascript%27%20src%3D%27http%3A//www.statcounter.com/js/fusioncharts.js%27%3E%3C/script%3E%3Cscript%20type%3D%27text/javascript%27%20src%3D%27http%3A//gs.statcounter.com/chart.php%3Fbrowser-ww-monthly-" + monthFactory() + "%27%3E%3C/script%3E%0A%09%09");
        $("#browserData").html(datax);
		
		//weather
		jQuery.ajax({
            url: "http://api.openweathermap.org/data/2.5/weather?q=Ramat Gan,IL&units=metric",
            dataType: "jsonp",
            success: function (parsed_json) {
                var temp = parsed_json['main']['temp'];
                var condition = parsed_json['weather'][0].description;
                var cityName = parsed_json['name']
                jQuery("#browserData").append("<div id='weather'>☁ Current temperature in " + cityName + " is " + Math.round(temp) + "&deg;C (" + condition + ") &nbsp;&nbsp;&nbsp;</div>");
            }
        });
		
    </script>
    <!-- Begin Footer -->
    <div id="footer-wrapper">
        <?php include 'footer.php' ?>
    </div>
    <!-- End Footer -->


    <?php include 'ct_bottom.php' ?>


</body>

</html>