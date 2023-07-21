<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <meta charset="UTF-8">
    <title>ClickTale | Testing Portal | logical Forms 1</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />

    <link rel="stylesheet" media="all" href="style/type/folks.css" />
    <!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/myScripts.js"></script>

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
        div#reciever {
            height: 400px;
        }
        span#jq {
            color: green;
            float: none;
        }
        #wrapper {
            width: 100%;
        }
        a.topLinks {
            color: purple;
            float: none;
        }
        .container {
            background-color: white;
        }
        table td {
            height: 40px
        }
        div#loading{
            position:relative;
            margin-top:-20%;
            padding-bottom:20%;
            left:0;
            top:0;
            color:blue;
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

                <h1>LogicalPages Index</h1>
                <span id="jq"></span>
                <div class="container">
                    <nav>
                        <table>
                            <tr>
                                <td>
                                    <a class="topLinks" id="showXML">Show XML</a>
                                </td>
                                <td>
                                    <a class="topLinks" id="showForm">Show form</a>
                                </td>
                                <td>
                                    <a class="topLinks" id="showImage">Show image</a>
                                </td>
                            </tr>
                        </table>

                    </nav>
                    <div id="reciever">

                    </div>
                    <div id="loading"></div>
                    <div id="method">The method used to change the URL is:
                        <br />
                        <span id="methodUsed"></span>
                    </div>
                </div>

            </div>


        </div>
        <!-- End Wrapper -->

        <div class="clearfix"></div>
        <div class="push"></div>
    </div>
    <script src="style/js/validatious.0.9.1.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        v2.Field.prototype.successClass = 'success';
        v2.Field.prototype.instant = true;
        v2.Field.prototype.displayErrors = 1;
        v2.Field.prototype.positionErrorsAbove = false;
        v2.Fieldset.prototype.positionErrorsAbove = false;

         // Password validator
        v2.Validator.add({
            name: 'password',
            message: 'Please use numbers and lower and uppercase letters',
            fn: function(field, value, params) {
                return /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/.test(value);
            }
        });

        document.getElementById("email").focus();

        $("#updates").click(function() {
            $("#update_opt").toggle();
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