<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>Contentsquare | Testing Portal | Iframes </title>
<link rel="stylesheet" type="text/css"f href="style.css" media="all" />
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
      <div style="height: 100vh">
          <h1>Content with an iframe : </h1>
    ​
          <iframe src='<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/step2.php' ?>' height="100%" width="100%" id="iframe">
          </iframe>
      </div>
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
