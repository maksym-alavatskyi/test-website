<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>ClickTale | Testing Portal</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" media="all" href="style/css/prettyPhoto.css" />
<link rel="stylesheet" media="all" href="style/type/folks.css" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/quicksand.js"></script>
<script type="text/javascript" src="style/js/portfolio.js"></script>
<script type="text/javascript" src="style/js/scripts.js"></script>
<script type="text/javascript" src="style/js/jquery.prettyPhoto.js"></script>
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
    <div id="portfolio"> 
      <!-- Begin Portfolio Navigation -->
      <ul class="gallerynav">
        <li class="selected-1"><a href="#" data-value="all">All<span></span></a></li>
        <li><a href="#" data-value="illustration">Illustration<span></span></a></li>
        <li><a href="#" data-value="photography">Photography<span></span></a></li>
        <li><a href="#" data-value="video">Video<span></span></a></li>
        <li><a href="#" data-value="web">Web Design<span></span></a></li>
      </ul>
      <!-- End Portfolio Navigation --> 
      
      <!-- Begin Portfolio Elements -->
      <ul id="gallery" class="grid">
        
        <!-- Begin Image 1 -->
        <li data-id="id-1" class="photography"> <a href="portfolio-single.php" title=""> <img src="style/images/art/portfolio1-th.jpg" alt="" /></a> </li>
        <!-- End Image 1 -->
        
        <li data-id="id-2" class="illustration"> <a href="portfolio-single.php" title=""> <img src="style/images/art/portfolio2-th.jpg" alt="" /></a> </li>
        <li data-id="id-3" class="video"> <a href="portfolio-single.php" title=""> <img src="style/images/art/portfolio3-th.jpg" alt="" /></a> </li>
        <li data-id="id-4" class="web"> <a href="portfolio-single.php" title=""> <img src="style/images/art/portfolio4-th.jpg" alt="" /></a> </li>
        <li data-id="id-5" class="photography"> <a href="portfolio-single.php" title=""> <img src="style/images/art/portfolio5-th.jpg" alt="" /></a> </li>
        <li data-id="id-6" class="illustration"> <a href="portfolio-single.php" title=""> <img src="style/images/art/portfolio6-th.jpg" alt="" /></a> </li>
        <li data-id="id-7" class="video"> <a href="portfolio-single.php" title=""> <img src="style/images/art/portfolio7-th.jpg" alt="" /></a> </li>
        <li data-id="id-8" class="web"> <a href="portfolio-single.php" title=""> <img src="style/images/art/portfolio8-th.jpg" alt="" /></a> </li>
        <li data-id="id-9" class="illustration"> <a href="portfolio-single.php" title=""> <img src="style/images/art/portfolio9-th.jpg" alt="" /></a> </li>
        <li data-id="id-10" class="photography"> <a href="portfolio-single.php" title=""> <img src="style/images/art/portfolio10-th.jpg" alt="" /></a> </li>
        <li data-id="id-11" class="video"> <a href="portfolio-single.php" title=""> <img src="style/images/art/portfolio11-th.jpg" alt="" /></a> </li>
        <li data-id="id-12" class="web"> <a href="portfolio-single.php" title=""> <img src="style/images/art/portfolio12-th.jpg" alt="" /></a> </li>
        <li data-id="id-13" class="photography"> <a href="portfolio-single.php" title=""> <img src="style/images/art/portfolio13-th.jpg" alt="" /></a> </li>
        <li data-id="id-14" class="illustration"> <a href="portfolio-single.php" title=""> <img src="style/images/art/portfolio14-th.jpg" alt="" /></a> </li>
        <li data-id="id-15" class="photography"> <a href="portfolio-single.php" title=""> <img src="style/images/art/portfolio15-th.jpg" alt="" /></a> </li>
        <li data-id="id-16" class="illustration"> <a href="portfolio-single.php" title=""> <img src="style/images/art/portfolio16-th.jpg" alt="" /></a> </li>
      </ul>
      <!-- End Portfolio Elements --> 
      
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
<script type="text/javascript">
		$(document).ready(function(){
			
			$("ul.grid img").hide()
			$("ul.grid img").each(function(i) {
			  $(this).delay(i * 200).fadeIn();
			});
			
		});
</script>
<?php 
	include 'ct_bottom.php'
  ?></body>
</html>