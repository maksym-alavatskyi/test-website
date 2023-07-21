<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>ClickTale | Testing Portal | Home-2</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" media="all" href="style/type/folks.css" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="style/js/jquery.cycle.all.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/scripts.js"></script>
<script type="text/javascript">
$(function() {
			if ($('#sliderholder-cycle').length) {
			// timeouts per slide (in seconds) 
			var timeouts = [150,390,25]; 
			function calculateTimeout(currElement, nextElement, opts, isForward) { 
			    var index = opts.currSlide; 
			    return timeouts[index] * 1000;
			}
			jQuery('#sliderholder-cycle').cycle({
				fx: 'fade',
				pager: '.slidernav',
				prev:    '.sliderprev',
        		next:    '.slidernext',
				speed: 1000,
				timeoutFn: calculateTimeout,
				pagerEvent: 'click',
    			pauseOnPagerHover: true,
    			cleartype: 1
});
			jQuery('#sliderholder-cycle').css("display", "block");
			jQuery('.slidernav').css("display", "block");
			
			}
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
  
  <!-- Begin Slider -->
  <div id="cycle-wrapper">
   <h1>Insights Page A</h1>
    <div id="sliderholder-cycle"> <img src="style/images/art/slider-1.jpg" width="960" height="380" />
      <div>
        <iframe src="http://player.vimeo.com/video/43761001?title=0&amp;byline=0&amp;portrait=0" width="960" height="380" frameborder="0"></iframe>
      </div>
      <img src="style/images/art/slider-2.jpg" width="960" height="380" /> </div>
    <ul class="slidernav">
    </ul>
    <div class="sliderdir"> <a href="#"><span class="sliderprev">Prev</span></a> <a href="#"><span class="slidernext">Next</span></a> </div>
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
    <div class="one-half">
      <div class="one-sixth"><img src="style/images/icon-big1.png" /></div>
      <div class="three-fourth last">
        <h4>Link to page B</h4>
		<a id="link_b" href="index-3.php">Link 3(no goal)</a>
        <p>Nulla ipsum nunc, gravida tempus varius eu, eleifend non elit. Nam elementum iaculis lorem, et viverra magna tempus vitae. Phasellus pharetra luctus felis. Nullam turpis ante, fermentum vitae fermentum vitae, tempus ut libero.</p>
		<p>Nulla ipsum nunc, gravida tempus varius eu, eleifend non elit. Nam elementum iaculis lorem, et viverra magna tempus vitae. Phasellus pharetra luctus felis....lalalalalalala.</p>
		
      </div>
    </div>
    <div class="one-half last">
      <div class="one-sixth"><img src="style/images/icon-big2.png" /></div>
      <div class="three-fourth last">
        <h4>Link to page C</h4>
		<a id="link_c" href="insights-page-c.php">Link 1</a>
        <p>Nulla ipsum nunc, gravida tempus varius eu, eleifend non elit. Nam elementum iaculis lorem, et viverra magna tempus vitae. Phasellus pharetra luctus felis. Nullam turpis ante, fermentum vitae fermentum vitae, tempus ut libero.</p>
		
      </div>
    </div>
    <div class="clearfix"></div>
    <br />
    <div class="one-half">
      <div class="one-sixth"><img src="style/images/icon-big3.png" /></div>
      <div class="three-fourth last">
        <h4>Link to page D</h4>
		<a id="link_d" href="insights-page-d.php">Link 2</a>
        <p>Nulla ipsum nunc, gravida tempus varius eu, eleifend non elit. Nam elementum iaculis lorem, et viverra magna tempus vitae. Phasellus pharetra luctus felis. Nullam turpis ante, fermentum vitae fermentum vitae, tempus ut libero.</p>
		
      </div>
    </div>
    <div class="one-half last">
      <div class="one-sixth"><img src="style/images/icon-big4.png" /></div>
      <div class="three-fourth last">
        <h4>Heatmaps</h4>
        <p>Nulla ipsum nunc, gravida tempus varius eu, eleifend non elit. Nam elementum iaculis lorem, et viverra magna tempus vitae. Phasellus pharetra luctus felis. Nullam turpis ante, fermentum vitae fermentum vitae, tempus ut libero.</p>
      </div>
    </div>
    <div class="clearfix"></div>
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
  <script type="text/javascript">
      
		$('#link_d').click(function(e){	
				
				console.log('link clicked');
				if (typeof ClickTale == "function"){
					
					ClickTaleEvent("link D clicked");
				}
		});
		
  </script>
  
<?php 
	include 'ct_bottom.php'
  ?>
</body>
</html>