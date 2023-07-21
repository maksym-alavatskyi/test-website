<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>ClickTale | Testing Portal | Tabs & Toggle </title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" type="text/css" href="contact/style.css" media="all">
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
	<?php
	 $num = rand(0, 9);
	 $data =  "random value :". $num;
	 echo("<script>console.log('PHP: ".$data."');</script>");
	 
	 switch(true){
	 	case ($num == 0):
			include 'ABTesting/default.html';
		break;
		case ($num > 0 && $num<=8):
			include 'ABTesting/A.html';
		break;
		case ($num == 9):
			include 'ABTesting/B.html';
		break;
		 
	 }
	?>
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

<script type='text/javascript'>	
	document.getElementsByName("lead_nome")[0].focus();
</script>
<?php 
	include 'ct_bottom.php'
  ?>
</body>
</html>