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
    
    <!-- Begin Content -->
    <div class="content">
      <h2>ClickTaleIncludeOnWindowReady</h2>
      <span class="quote-right">Test when window is ready before CT has been loaded (causing error in playback)</span>
      <p> test when window is ready before CT has been loaded (causing error in playback) augue nisl euismod diam, sit amet mollis felis quam sed odio. Aenean tortor leo, cursus ut interdum vitae, vestibulum a est. Proin et tellus nibh. Aenean sit amet augue metus. Donec tincidunt convallis facilisis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam auctor rhoncus dictum. Aliquam porta varius neque, in dictum dui dignissim vel. Aeneana mollis quam. <span class="highlight">Curabitur sed massa sed</span> nulla accumsan imperdiet nec ut ipsum. Maecenas gravida ullamcorper lacus posuere aliquam. Duis mattis sollicitudin sapien vel luctus. Cras leo ante, egestas sed bibendum rutrum, mollis et magna. Maecenas neque neque, aliquet et suscipit vulputate, pulvinar cursus mauris. </p>
      <p> Phasellus volutpat ultrices nisl a vehicula. Morbi vel nulla justo. Quisque luctus, odio et ultrices lacinia, augue nisl euismod diam, <span class="quote-left">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam auctor rhoncus dictum. Aliquam porta.</span> sit amet mollis felis quam sed odio. Aenean tortor leo, cursus ut interdum vitae, vestibulum a est. Proin et tellus nibh. Aenean sit amet augue metus. Donec tincidunt convallis facilisis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam auctor rhoncus dictum. Aliquam porta varius neque, in dictum dui dignissim vel. Aeneana mollis quam. Curabitur sed massa sed nulla accumsan imperdiet nec ut ipsum. Maecenas gravida ullamcorper lacus posuere aliquam. Duis mattis sollicitudin sapien vel luctus. Cras leo ante, egestas sed bibendum rutrum, mollis et magna. Maecenas neque neque, aliquet et suscipit vulputate, pulvinar cursus mauris. </p>
      <div class="divider"></div>
      <h2>Lists</h2>
      <ul>
        <li>Nullam luctus neque sed urna mattis interdum.</li>
        <li>Duis enim lectus euismod non porttitor non, vulputate eget ipsum.</li>
        <li>Proin imperdiet arcu in consequat malesuada, mauris magna volutpat turpis.</li>
      </ul>
      <ul class="check-list">
        <li>Nullam luctus neque sed urna mattis interdum.</li>
        <li>Duis enim lectus euismod non porttitor non, vulputate eget ipsum.</li>
        <li>Proin imperdiet arcu in consequat malesuada, mauris magna volutpat turpis.</li>
      </ul>
      <p>Praesent rhoncus sollicitudin risus at venenatis. Nullam luctus neque sed urna mattis interdum. Donec sagittis sagittis dolor, sit amet cursus felis mattis ut. Donec aliquam semper turpis, vel tincidunt risus gravida quis. Suspendisse malesuada diam quis enim dictum nec gravida nisl gravida. </p>
      <div class="divider"></div>
      <h2>Our Team</h2>
      <p>Praesent rhoncus sollicitudin risus at venenatis. Nullam luctus neque sed urna mattis interdum. Donec sagittis sagittis dolor, sit amet cursus felis mattis ut. Donec aliquam semper turpis, vel tincidunt risus gravida quis. Suspendisse malesuada diam quis enim dictum nec gravida nisl gravida. </p>
      <div class="one-third">
        <h4>Project Manager <em>- Baze Monarch</em></h4>
        <img src="style/images/art/member1.jpg" alt="" class="left" width="90"/> Duis mattis sollicitudin sapien vel luctus. Cras leo ante magara.
        <ul class="social">
          <li><a href="#"></a><img src="style/images/icon-twitter.png" alt="" /></li>
          <li><a href="#"></a><img src="style/images/icon-dribble.png" alt="" /></li>
          <li><a href="#"></a><img src="style/images/icon-tumblr.png" alt="" /></li>
        </ul>
      </div>
      <div class="one-third">
        <h4>Project Assistant <em>- Lexie Joans</em></h4>
        <img src="style/images/art/member2.jpg" alt="" class="left" width="90" /> Maecenas neque neque, aliquet et suscipit vulputate, pulvinar.
        <ul class="social">
          <li><a href="#"></a><img src="style/images/icon-twitter.png" alt="" /></li>
          <li><a href="#"></a><img src="style/images/icon-dribble.png" alt="" /></li>
          <li><a href="#"></a><img src="style/images/icon-tumblr.png" alt="" /></li>
        </ul>
      </div>
      <div class="one-third last">
        <h4>Sales Manager <em>- John Smith</em></h4>
        <img src="style/images/art/member3.jpg" alt="" class="left" width="90" /> Quisque lobortis gravida elit ac dapibus. Ut felis lorem, tristique.
        <ul class="social">
          <li><a href="#"></a><img src="style/images/icon-twitter.png" alt="" /></li>
          <li><a href="#"></a><img src="style/images/icon-dribble.png" alt="" /></li>
          <li><a href="#"></a><img src="style/images/icon-tumblr.png" alt="" /></li>
        </ul>
      </div>
    </div>
    <!-- End Content --> 
    
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
 <div id="ClickTaleDiv" style="display: none;"> 
<script type="text/javascript">
        window.onload = function () {
            console.log("window loaded");

            window.ClickTaleIncludedOnWindowLoad = true;
            var ClickTaleScriptSource = "http://ct.test/ctn/tc/";
			
			var script = document.createElement("SCRIPT");
            script.src = "http://cdn.clicktale.net/www05/tc/WRe14.js";
            script.type = "text/javascript";
            document.body.appendChild(script);
			console.log("script added to body");
			
            /*var srca = (unescape("%3Cscript%20src='"+
	(document.location.protocol=='https:'?
	"https://ct.test/ctn/ptc/1b7b7f26-3e20-4b6b-8af0-ddd2e771b9d9.js?PTCXHTMLCompliant=False&WRDestination=qadump&WRScriptHost=ct.test/ctn":
	"http://ct.test/ctn/ptc/1b7b7f26-3e20-4b6b-8af0-ddd2e771b9d9.js?PTCXHTMLCompliant=False&WRDestination=qadump&WRScriptHost=ct.test/ctn")+"'%20type='text/javascript'%3E%3C/script%3E"));
console.log(srca);

	$('body').append(srca);*/
	
        };
		
		var ClickTaleOnReady = function () {
            if (window.ClickTale) {
                if (typeof window.ClickTale == 'function')
                    window.ClickTale(194, 1, "www05");
					console.log("Clicktale function called");
            }
		}
</script>
</body>
</html>

