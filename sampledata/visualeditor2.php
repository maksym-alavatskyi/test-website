<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <meta charset="UTF-8">
        <title>ClickTale | Testing Portal | element addressing </title>
        <link rel="stylesheet" type="text/css" href="style.css" media="all" />
        <link rel="stylesheet" type="text/css" href="contact/style.css" media="all">
        <link rel="stylesheet" media="all" href="style/type/folks.css" />
        <!--[if IE 7]>
        <link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
        <![endif]-->
        <script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
        <script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
        <script type="text/javascript" src="style/js/scripts.js"></script>
        <script type="text/javascript">
            function doNothing(){
            return false;
            }						 
        </script>
        <style>
            table td
            {
            padding: 0px !important;
            }
            .additional{
            border-color: #7f2600;
            border-width: 3px;
            border-style: solid;
            }
            div.coloredBorder1{
            border-color: #00FF00;
            border-width: 3px;
            border-style: solid;
            border-style: dotted;
            }
            span.coloredBorder2{
            border-color: #FF0000;
            border-width: 3px;
            border-style: solid;
            border-style: dotted;
            }
            li.coloredBorder3{
            border-color: #0000FF;
            border-width: 3px;
            border-style: solid;
            border-style: dotted;
            }
            selection.coloredBorder4{
            border-color: #00FFFF;
            border-width: 3px;
            border-style: solid;
            border-style: dotted;
            }
            article.coloredBorder5{
            border-color: #FF00FF;
            border-width: 3px;
            border-style: solid;
            border-style: dotted;
            }
        </style>
    </head>
    <body>
        <div  id="container">
            <!-- Begin Header Wrapper -->
            <div  id="page-top">
                <div  id="header-wrapper">
                    <!-- Begin Header -->
                    <div  id="header">
                        <div  id="logo"><a href="index.php"><img src="style/images/logo.png" alt="Delphic" /></a></div>
                        <!-- Logo --> 
                        <!-- Begin Menu -->
                        <div  id="menu-wrapper">
                            <div  id="smoothmenu1" class="ddsmoothmenu">
                                <?php
                                    include 'menu.php'
                                    ?>
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
<!------------------------------------------------------------------------------------------>

<h1><u>Visual Editor Testing Page</u></h1>

<div id="background"></div><br><br>
<br><br><h2><a title="Home"><font size="5">1.Image inside a link:</font></a></h2>

<header id="main"><a href="http://www.bupa.com.au/" id="homelogo"><img src="style/images/simple-start-logo-bupa.png" alt="Bupa image"></a> 


<br><br><h2><a title="Home"><font size="5">2.Image inside a link:</font></a></h2>


<div id="corporateLogo">
        <a href="/find-a-healthier-you"><img id="clogopath" alt="Find a healthier you" src="style/images/transparent1.png"/>
        </a>
    </div>
	
	
<br><br><h2><a title="Home"><font size="5">3.Image inside a span:</font></a></h2>
	
	<div class="icon"><span><img src="style/images/simple-start-img-promo.png" alt="dental icon"></span></div>
	
<br><br><h2><a title="Home"><font size="5">4.Events that inside span:</font></a></h2><br><br>	

<div class="_li">
<div class="pluginSkinLight pluginFontHelvetica">
<div>
<table class="uiGrid _51mz pluginConnectButtonLayoutRoot _3c9t" cellspacing="0" cellpadding="0" id="u_0_0"><tbody><tr class="_51mx"><td class="_51m- hCent"><div><form rel="async" ajaxify="/plugins/like/connect" method="post" action="https://www.facebook.com/plugins/like/connect" onsubmit="return window.Event &amp;&amp; Event.__inlineSubmit &amp;&amp; Event.__inlineSubmit(this,event)" id="u_0_1"><input type="hidden" name="lsd" value="AVoEUU1t" autocomplete="off"><input type="hidden" autocomplete="off" name="href" value="http://www.facebook.com.au/BupaAustralia"><input type="hidden" autocomplete="off" name="action" value="like"><input type="hidden" autocomplete="off" name="nobootload"><input type="hidden" autocomplete="off" name="iframe_referer" value="http://www.bupa.com.au/health-insurance/simple-start"><input type="hidden" autocomplete="off" name="r_ts" value="1419234695"><input type="hidden" autocomplete="off" name="ref"><input type="hidden" autocomplete="off" name="xfbml"><div class="pluginConnectButton"><div class="pluginButton pluginButtonSmall pluginButtonInline pluginConnectButtonDisconnected" title="Like"><div><div class="pluginButtonContainer"><div class="pluginButtonImage"><button type="submit" title="Like"><i class="pluginButtonIcon img sp_plugin-button sx_plugin-button_favblue"></i></button></div><span class="pluginButtonLabel">Like</span></div></div></div><div class="pluginButton pluginButtonSmall pluginButtonPressed pluginButtonInline pluginButtonX pluginConnectButtonConnected hidden_elem" title=""><div><div class="pluginButtonContainer"><div class="pluginButtonImage"><button type="submit" title="Like"><i class="pluginButtonIcon pluginButtonXOff img sp_plugin-button sx_plugin-button_chblue"></i><i class="pluginButtonIcon pluginButtonXOn img sp_plugin-button sx_plugin-button_xblue" title="Unlike"></i></button></div><span class="pluginButtonLabel">Like</span></div></div></div></div></form></div></td><td class="_51m-"><div><div class="pluginCountButton pluginCountNum"><span id="u_0_2"><span class="pluginCountTextConnected">106k</span><span class="pluginCountTextDisconnected">106k</span></span></div><div class="pluginCountButtonNub"><s></s><i></i></div></div></td></tr></tbody></table>

</div></div></div>

<br><br><br><br>


<br><br><h2><a title="Home"><font size="5">5.Events inside a section:</font></a></h2>	

<div id="content1"><section id="homesection" style="height: 190px;">
<div class="inner"><a class="promo-link desktop" href="#promo"> <img src="style/images/simple-start-starburst.png" class="callout" alt="Get Bupa and choose 1 of 3 gifts"> </a>
</section>

<br><br><h2><a title="Home">6.Elements inside a div:</a></h2>

<div id="container">
    <img src="style/images/art/portfolio3-th.jpg" alt="" />
</div>

<script type="text/javascript">
(function() {

var img = document.getElementById('container').firstChild;
img.onload = function() {
    if(img.height > img.width) {
        img.height = '100%';
        img.width = 'auto';
    }
};

}());
</script>
<!------------------------------------------------------------------------------------------>
		
</div>
</div>  <!-- End Wrapper -->
  
  <div class="clearfix"></div>
  <div class="push"></div>
</div>

<!-- Begin Footer -->
<div id="footer-wrapper">
<?php 
	include 'footer.php'
  ?>
</div>
<!-- End Footer -->


<?php 
	include 'ct_bottom.php'
  ?>


</body>
</html>