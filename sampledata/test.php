<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>Contentsquare | Testing Portal | Iframes </title>
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
    <div style="padding: 0 0 10px 0">
      <div id="site-info"></input>
    </div>
    <div class="content">
      <div style="height: 100vh">
          <iframe src='<?php echo 'https://' . $_SERVER['HTTP_HOST'] . '/ecom/' ?>' height="100%" width="100%">
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


<?php
	include 'ct_bottom.php'
  ?>
  <script>
    var root = document.querySelector('#site-info').attachShadow({mode: 'open'});;
    var span = document.createElement('span');
    span.setAttribute('data-qa-value', 'This is a demo website for testing purpose');
    span.textContent = 'This is a demo website for testing purpose';
    root.appendChild(span);
  </script>
</body>

</html>
