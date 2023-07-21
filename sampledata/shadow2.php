<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>ClickTale | Testing Portal | ShadowDOM2 </title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" media="all" href="style/type/folks.css" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/scripts.js"></script>
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
  
  <!-- Begin Wrapper -->
  <div id="wrapper">
    <div class="content">
      <h2>Shadow2</h2>
      <p>bla </p>
	  <div id="shadowHost">Don't display this</div>
	  <div><h3>Not Shadow DOM</h3></div>
	  </div>
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
	
	<script type="text/javascript">
	window.onload = function() {
      $(function() {
				if (typeof ClickTale == "function"){
					
					ClickTaleEvent("page-tabs-toggles");
				}
			}) ;
	}
  </script>
  <script>
	var root = document.querySelector('#shadowHost').createShadowRoot();
	root.innerHTML = '<style>h3{ color: red; } .myButton {	background-color:#44c767; border-radius:28px; border:1px solid #18ab29;	display:inline-block;' +
					'cursor:pointer; color:#ffffff;	font-family:Arial; font-size:17px; padding:16px 31px; text-decoration:none;	text-shadow:0px 1px 0px #2f6627;}</style>' +
					 '<h3>Shadow DOM</h3>' + 
					 '<p><a href="shadow1.php" class="myButton">Click Me!</a></p>';
  </script>
</body>
</html>