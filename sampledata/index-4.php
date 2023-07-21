<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>ClickTale | Testing Portal | Home-4</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" media="all" href="style/type/folks.css" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/scripts.js"></script>
<script type="text/javascript" src="scripts/swfobject/swfobject.js"></script>
<script type="text/javascript">
  var flashvars = {};
  flashvars.cssSource = "piecemaker.css";
  flashvars.xmlSource = "piecemaker.xml";
	
  var params = {};
  params.play = "true";
  params.menu = "false";
  params.scale = "showall";
  params.wmode = "transparent";
  params.allowfullscreen = "true";
  params.allowscriptaccess = "always";
  params.allownetworking = "all";
  
  swfobject.embedSWF('piecemaker.swf', 'piecemaker', '960', '450', '10', null, flashvars,    
  params, null);

</script>
</head>
<body>
<div id="container"> 
  <!-- Begin Header Wrapper -->
  <div id="page-top">
    <div id="header-wrapper"> 
      <!-- Begin Header -->
      <div id="header">
        <div id="logo"><a href="index.php"><img src="style/images/logo.png" alt="Delphic" /></a></div>
        <!-- Logo --> 
        <!-- Begin Menu -->
        <div id="menu-wrapper">
          <div id="smoothmenu1" class="ddsmoothmenu">
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
  
  <!-- Begin Slider -->
  <div id="piecemaker-container">
    <div id="piecemaker">
      <p>Put your alternative Non Flash content here.</p>
    </div>
  </div>
  <!-- End Slider --> 
  
  <!-- Begin Wrapper -->
  <div id="wrapper"> 
    
    <!-- Begin Intro -->
    <div class="intro">
      <h1>Reveal your visitors' mouse moves, clicks, and scorlls with In-Page Web Analytics.
                    Discover what simple webpage changes will dramatically increase conversion rates. </h1>
    </div>
    <!-- End Intro --> 
    
    <!-- Begin About -->
    <div id="about">
      <div class="one-fourth"> <a href="#"><img src="style/images/art/home-1.jpg" alt="" /></a>
        <h4>Elegant Style</h4>
        <p>Morbi non nunc nec ipsum tincidunt luctus aliquam vel nisi. Donec eu accumsan elit.</p>
      </div>
      <div class="one-fourth"> <a href="#"><img src="style/images/art/home-2.jpg" alt="" /></a>
        <h4>Easily Customizable</h4>
        <p>Nulla facilisi. Aenean porttitor cursus aliquet. Praesent sit amet dictum lacus. Risus eget augue.</p>
      </div>
      <div class="one-fourth"> <a href="#"><img src="style/images/art/home-3.jpg" alt="" /></a>
        <h4>Dark and Light Layouts</h4>
        <p>Vivamus placerat viverra posuere. Duis quis luctus diam. Aliquam a mi id vel orci lectus.</p>
      </div>
      <div class="one-fourth last"> <a href="#"><img src="style/images/art/home-4.jpg" alt="" /></a>
        <h4>jQuery Enhanced</h4>
        <p>Sed eu lorem sed lectus interdum vehicula. Praesent sit amet risus eget augue semper.</p>
      </div>
    </div>
    <!-- End About --> 
    
  </div>
  
  <!-- End Wrapper -->
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