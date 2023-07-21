<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>ClickTale | Testing Portal | Tabs & Toggle </title>
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
      <div class="tabbed-content">
        <h3>We love tabs</h3>
        <p>Aenean fermentum luctus viverra. Pellentesque id lectus ante, vel tristique elit. Fusce mattis, purus non consectetur cursus, justo nisi viverra sem, ac lobortis ipsum sapien vel purus. Vivamus aliquet gravida nibh sit amet accumsan. Fusce et lorem nunc. Sed convallis, tortor nec ornare sagittis, velit ligula varius sapien, eu cursus nisl purus sed felis habitant morbi tristique senectus et netus et malesuada fames ac turpis.</p>
        <ul class="tabs">
          <li><a href="#login">Sign In</a></li>
          <li><a href="#register">Sign Up</a></li>
          
        </ul>
        <div class="tab_container">
          <div style="display: none;" id="login" class="tab_content">
            <h3>Vestibulum ullamcorper</h3>
            <p><img src="style/images/art/portfolio4-th.jpg" class="left" />Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc rhoncus tortor quis eros bibendum a tempus est dapibus. Vivamus consectetur quam eu tellus porttitor ultrices. Nunc metus massa, ullamcorper sit amet malesuada a, porttitor in tellus. Vestibulum ullamcorper quam nec lorem aliquam id feugiat risus tincidunt. Etiam molestie, risus eu gravida lobortis, velit sapien aliquam lectus, nec hendrerit lectus erat ac libero. Aenean fermentum luctus viverra. Pellentesque id lectus ante, vel tristique elit. Fusce mattis, purus non consectetur cursus, justo nisi viverra sem, ac lobortis ipsum sapien vel purus. Vivamus aliquet gravida nibh sit amet accumsan. Fusce et lorem nunc. Sed convallis, tortor nec ornare sagittis, velit ligula varius sapien, eu cursus nisl purus sed felis. </p>
            <p> Morbi congue pellentesque quam, eu ultricies. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc rhoncus tortor quis eros bibendum a tempus est dapibus. Vivamus consectetur quam eu tellus porttitor ultrices. Nunc metus massa, ullamcorper sit amet malesuada a, porttitor in tellus. Vestibulum ullamcorper quam nec lorem aliquam id feugiat risus tincidunt. </p>
          </div>
          <div style="display: none;" id="register" class="tab_content">
            <h3>We love tabs</h3>
            <p><img src="style/images/art/portfolio3-th.jpg" class="right" />Etiam molestie, risus eu gravida lobortis, velit sapien aliquam lectus, nec hendrerit lectus erat ac libero. Aenean fermentum luctus viverra. Pellentesque id lectus ante, vel tristique elit. Fusce mattis, purus non consectetur cursus, justo nisi viverra sem, ac lobortis ipsum sapien vel purus. Vivamus aliquet gravida nibh sit amet accumsan. Fusce et lorem nunc. Sed convallis, tortor nec ornare sagittis, velit ligula varius sapien, eu cursus nisl purus sed felis. Morbi congue pellentesque quam, eu ultricies. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc rhoncus tortor quis eros bibendum a tempus est dapibus. Vivamus consectetur quam eu tellus porttitor ultrices. Nunc metus massa, ullamcorper sit amet malesuada a, porttitor in tellus. Vestibulum ullamcorper quam nec lorem aliquam id feugiat risus tincidunt. Aenean fermentum luctus viverra. Pellentesque id lectus ante, vel tristique elit. Fusce mattis, purus non consectetur cursus, justo nisi viverra sem, ac lobortis ipsum sapien vel purus. Vivamus aliquet gravida nibh.</p>
          </div>
          
        </div>
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
  
<?php 
	include 'ct_bottom.php'
  ?>

</body>
</html>