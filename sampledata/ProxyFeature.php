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
            $(function () {
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
                    <h1> PROXY FEATURE TESTING PAGE</h1>
                    <br />
                    <p id="pidVal">PID IS:</p>
                    <p id="event"></p>
                    <hr />
                    <br />
                    <p id="prxyData"></p>
                    <br />
                    <h2 id="isRec"></h2>
                    <br />
                    <div id="links"></div>
                    <br />

                    <hr />
                    <h3> CHOOSE PROXY CONFIGURATION </h3>
                    <Table>
                        <tr>
                            <td title="This will change proxy to a default(empty string)">
                                <input class="prox" name="config" type="radio" onclick="PCP.process(0)" />Default
                            </td>

                            <td title="This will change proxy to a local-host self-loop">
                                <input class="prox" name="config" type="radio" onclick="PCP.process(1)" />Apply Proxy
                            </td>

                            <td title="This will change proxy to an unreachable address">
                                <input class="prox" name="config" type="radio" onclick="PCP.process(2)" />Dead-End proxy
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" title="Will use ClickTaleStop function and halt recording">
                                <input type="button" onclick="ClickTaleStop()" value="ClickTaleStop()" />
                            </td>

                        </tr>
                    </Table>

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

            //COOKIES HANDLER
            var proxyCookies = {
                    setCookie: function (cname, cvalue) {
                        var d = new Date();
                        d.setTime(d.getTime() + (1 * 24 * 60 * 60 * 1000));
                        var expires = "expires=" + d.toUTCString();
                        document.cookie = cname + "=" + cvalue + "; " + expires;
                    },

                    getCookie: function (cname) {
                        var name = cname + "=";
                        var ca = document.cookie.split(';');
                        for (var i = 0; i < ca.length; i++) {
                            var c = ca[i];
                            while (c.charAt(0) == ' ') c = c.substring(1);
                            if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
                        }
                        return "";
                    },

                    checkCookie: function (cname) {
                        var user = getCookie(cname);
                        if (user != "") {
                            alert("Proxy Cookie is " + user);
                        }
                        /* else {
                            user = prompt("Please enter your name:", "");
                            if (user != "" && user != null) {
                                setCookie("username", user, 365);
                            }
                        }*/
                    }

                }
                //END OF COOKIE

            var PCP = {
                process: function (indicator) {
                    // 0 is default
                    //1 is proxy
                    //2 is dead end
                    if (indicator == 0) {
                        proxyCookies.setCookie("CTProxyImgFlag", "");
                        proxyCookies.setCookie("CTProxyWR", "");
                    } else if (indicator == 1) {
                        //true case, mapping according to our configuration
                        proxyCookies.setCookie("CTProxyImgFlag", "wrqa.clicktale.net/ctn_2/v1/");
                        proxyCookies.setCookie("CTProxyWR", "wrqa.clicktale.net/ctn_2/v1/");
                        /*window.CTProxyImageFlag = "ipr.clicktale.net/";
                        window.CTProxyWR = "wrpr.clicktale.net/";*/
                    } else {
                        //indicator is 2
                        proxyCookies.setCookie("CTProxyImgFlag", "fakeIF.clicktale.net/");
                        proxyCookies.setCookie("CTProxyWR", "fakeWR.clicktale.net/");
                        /*window.CTProxyImageFlag = "GangnamStyle.clicktale.net/";
                        window.CTProxyWR = "SELEKTA.clicktale.net/";*/
                    }
                    if (typeof ClickTale == "function") {
                        ClickTaleStop();
                    }
                    console.log("Stopped recording - reloading page");
                    location.reload();
                }

            }
            window.ClickTaleSettings.Proxy = {
                ImageFlag: proxyCookies.getCookie("CTProxyImgFlag"),
                WR: proxyCookies.getCookie("CTProxyWR")
            }
            if (window.ClickTaleSettings.Proxy.ImageFlag) {
                window.ClickTaleSettings.Protocol = {
                    Method: "ImpactRecorder"
                }
            }
        </script>
        <!-- END OF PROXY -->
        <?php include 'ct_bottom.php' ?>

            <script>
                //PID INJECTOR
                var pid = ClickTaleGetPID();
                $("#pidVal").html("PID IS: " + pid);
                var subs = "<a href='http://ct.test/subs/Dashboard.aspx?PID=" + pid + "' target='blank'>Watch playbacks (subs)</a>";
                var cta = "<a href='https://ct.test/cta/Projects.aspx' target='blank'>Edit configuration (cta)</a>";
                $("#links").html(subs + "   |   " + cta);

                //isRecording injector
                setInterval(function () {
                    if (ClickTaleIsRecording()) {
                        $("#isRec").html("RECORDING");
                        $("#isRec").css("color", "green");
                    } else {
                        $("#isRec").html("NOT RECORDING");
                        $("#isRec").css("color", "red");
                    }
                }, 2000);
                //Proxy data injector
                if (typeof ClickTaleSettings.Proxy == "object") {
                    //proxy exists
                    console.log("PROXY EXISTS");
                    var ImageFlag = ClickTaleSettings.Proxy.ImageFlag != "" ? ClickTaleSettings.Proxy.ImageFlag : "default (nothing set)";
                    var WrFlag = ClickTaleSettings.Proxy.WR != "" ? ClickTaleSettings.Proxy.WR : "default (nothing set)";
                    $("#prxyData").html("Proxy settings are:<br />ImageFlag: " + ImageFlag + "<br />WR: " + WrFlag);
                    $("#prxyData").css("color", "red");
                } else {
                    //no proxy
                    console.log("PROXY DOES NOT EXIST");
                    $("#prxyData").html("Proxy is not active or is not set!");
                    $("#prxyData").css("color", "red");
                }

                $(function () {
                    var eventName = "PROXY FEATURE";
                    ClickTaleEvent(eventName);
                    $("#event").html("filter by event: " + eventName);
                });
            </script>


    </body>

    </html>