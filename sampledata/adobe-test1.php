<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>ClickTale | Testing Portal | Open Arch1</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" media="all" href="style/type/folks.css" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<?php include 'header.php' ?>
<script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="style/js/jquery.cycle.all.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/scripts.js"></script>
<script type="text/javascript" src="/scripts/open-arch/sdk.js"></script>

</head>
<body>
<script type="text/javascript" src="/scripts/open-arch/main.js"></script>
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
  
  
  <!-- Begin Wrapper -->
  <div id="wrapper"> 
    
    <!-- Begin Intro -->
    <div class="intro" id="myIntro">
		<h1> I'm Just a test page</h1>
    </div>
	 <!-- End Intro --> 
	<div id="myBtns" style="text-align: center;">
		<a href="/" id="btn1" class="linkBtn">Click me</a>
	</div>
   
  
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

 <!-- bottom --> 
<?php 
	include 'ct_bottom.php'
  ?>

</body>
<script type="text/javascript">_satellite.pageBottom();</script>
</html>