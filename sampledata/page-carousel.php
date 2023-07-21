<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>ClickTale | Testing Portal</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" media="all" href="style/type/folks.css" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="style/js/scripts.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
    // Initialise the first and second carousel by class selector.
	// Note that they use both the same configuration options (none in this case).
	jQuery('#car1').jcarousel({
        scroll: 1,
		auto: 3,
		wrap: 'circular'
    });
	jQuery('#car2').jcarousel({
        scroll: 2,
		auto: 4,
		wrap: 'circular'
    });
	
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
  
  	<h2>Carousel with Details</h2>
  	<br />
    <div class="d-carousel">
      <ul class="carousel" id="car1">
        <li> <a href="#"><img src="style/images/art/carousel-1.jpg" alt="" /></a>
          <h4><a href="#">1 Cras varius, sapien egetory sagittis</a></h4>
          <p>Suspendisse potenti. Nibh miry, ultricies ac molestie sit ameter vestibulum eget nunc. Vivamus vitae aliquam odio. Morbi sit amet odio tincidunt. </p>
        </li>
        <li> <a href="#"><img src="style/images/art/carousel-2.jpg" alt="" /></a>
          <h4><a href="#">2 Cras varius, sapien egetory sagittis</a></h4>
          <p>Suspendisse potenti. Nibh miry, ultricies ac molestie sit ameter vestibulum eget nunc. Vivamus vitae aliquam odio. Morbi sit amet odio tincidunt. </p>
        </li>
        <li> <a href="#"><img src="style/images/art/carousel-3.jpg" alt="" /></a>
          <h4><a href="#">3 Cras varius, sapien egetory sagittis</a></h4>
          <p>Suspendisse potenti. Nibh miry, ultricies ac molestie sit ameter vestibulum eget nunc. Vivamus vitae aliquam odio. Morbi sit amet odio tincidunt. </p>
        </li>
        <li> <a href="#"><img src="style/images/art/carousel-4.jpg" alt="" /></a>
          <h4><a href="#">4 Cras varius, sapien egetory sagittis</a></h4>
          <p>Suspendisse potenti. Nibh miry, ultricies ac molestie sit ameter vestibulum eget nunc. Vivamus vitae aliquam odio. Morbi sit amet odio tincidunt. </p>
        </li>
        <li> <a href="#"><img src="style/images/art/carousel-5.jpg" alt="" /></a>
          <h4><a href="#">5 Cras varius, sapien egetory sagittis</a></h4>
          <p>Suspendisse potenti. Nibh miry, ultricies ac molestie sit ameter vestibulum eget nunc. Vivamus vitae aliquam odio. Morbi sit amet odio tincidunt. </p>
        </li>
        <li> <a href="#"><img src="style/images/art/carousel-6.jpg" alt="" /></a>
          <h4><a href="#">6 Cras varius, sapien egetory sagittis</a></h4>
          <p>Suspendisse potenti. Nibh miry, ultricies ac molestie sit ameter vestibulum eget nunc. Vivamus vitae aliquam odio. Morbi sit amet odio tincidunt. </p>
        </li>
        <li> <a href="#"><img src="style/images/art/carousel-7.jpg" alt="" /></a>
          <h4><a href="#">7 Cras varius, sapien egetory sagittis</a></h4>
          <p>Suspendisse potenti. Nibh miry, ultricies ac molestie sit ameter vestibulum eget nunc. Vivamus vitae aliquam odio. Morbi sit amet odio tincidunt. </p>
        </li>
        <li> <a href="#"><img src="style/images/art/carousel-8.jpg" alt="" /></a>
          <h4><a href="#">8 Cras varius, sapien egetory sagittis</a></h4>
          <p>Suspendisse potenti. Nibh miry, ultricies ac molestie sit ameter vestibulum eget nunc. Vivamus vitae aliquam odio. Morbi sit amet odio tincidunt. </p>
        </li>
      </ul>
    </div>
    <div class="clear"></div>

    <br /><br />
    <h2>Carousel</h2>
    <br />
    <div class="d-carousel sgrid">
      <ul class="carousel" id="car2">
        <li> 
          <!-- Begin Full Size Link and Description --> 
          <a href="#" title=""> <img src="style/images/art/carousel-9.jpg" alt="" /><!-- Image Thumbnail --> 
          </a> </li>
        <li> 
          <!-- Begin Full Size Link and Description --> 
          <a href="#" title=""> <img src="style/images/art/carousel-10.jpg" alt="" /><!-- Image Thumbnail --> 
          </a> </li>
        <li> 
          <!-- Begin Full Size Link and Description --> 
          <a href="#" title=""> <img src="style/images/art/carousel-11.jpg" alt="" /><!-- Image Thumbnail --> 
          </a> </li>
        <li> 
          <!-- Begin Full Size Link and Description --> 
          <a href="#" title=""> <img src="style/images/art/carousel-12.jpg" alt="" /><!-- Image Thumbnail --> 
          </a> </li>
        <li> 
          <!-- Begin Full Size Link and Description --> 
          <a href="#" title=""> <img src="style/images/art/carousel-13.jpg" alt="" /><!-- Image Thumbnail --> 
          </a> </li>
        <li> 
          <!-- Begin Full Size Link and Description --> 
          <a href="#" title=""> <img src="style/images/art/carousel-14.jpg" alt="" /><!-- Image Thumbnail --> 
          </a> </li>
        <li> 
          <!-- Begin Full Size Link and Description --> 
          <a href="#" title=""> <img src="style/images/art/carousel-15.jpg" alt="" /><!-- Image Thumbnail --> 
          </a> </li>
        <li> 
          <!-- Begin Full Size Link and Description --> 
          <a href="#" title=""> <img src="style/images/art/carousel-16.jpg" alt="" /><!-- Image Thumbnail --> 
          </a> </li>
      </ul>
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