<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <meta charset="UTF-8">
    <title>ClickTale | Testing Portal | Contact</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="contact/style.css" media="all" />
    <link rel="stylesheet" media="all" href="style/type/folks.css" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
    <script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
    <script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
    <script type="text/javascript" src="style/js/scripts.js"></script>
    <script type="text/javascript" src="style/js/jquery.infieldlabel.min.js"></script>
    <script type="text/javascript" src="style/js/twitter.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>


    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>


    <style type="text/css">
        .content {
            text-align: center;
        }
        .content h1 {
            font-family: 'Open Sans', sans-serif;
            font-size: 3.5em;
        }
    </style>
    <!--TOOLTIP INITIATION -->
    <script>
        $(function() {
            $(document).tooltip();
        });
    </script>

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

            <!--------------------------------------------------------------------------------------------------------------------------------------->
            <!--------------------------------------------------------------------------------------------------------------------------------------->
            <!--------------------------------------------------------------------------------------------------------------------------------------->


            <!-- Begin Content -->
            <div class="content">
                <h1> iFrame Tester</h1>
                <br />
                <span id="isRec"></span>
              <iframe src="/credit.php" allow-scripts width="1500" height="500"/>
            </div>
            <!-- End Content -->

            <!--------------------------------------------------------------------------------------------------------------------------------------->
            <!--------------------------------------------------------------------------------------------------------------------------------------->
            <!--------------------------------------------------------------------------------------------------------------------------------------->


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



    <!-- PROXY SCRIPT-->
    <script>
        window.ClickTaleSettings = window.ClickTaleSettings || {};
        window.ClickTaleSettings.Compression = {
            Method: "deflate"
        };


    </script>
    <!-- END OF PROXY -->
    <?php include 'ct_bottom.php' ?>

    <script>

         //isRecording injector
        setInterval(function() {
            if (ClickTaleIsRecording()) {
                $("#isRec").html("RECORDING");
                $("#isRec").css("color", "green");
            } else {
                $("#isRec").html("NOT RECORDING");
                $("#isRec").css("color", "red");
            }
        }, 2000);

    </script>

</body>

</html>