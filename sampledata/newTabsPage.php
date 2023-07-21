<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>ClickTale | Testing Portal | Tabs & Toggle | Page State</title>
<link rel="stylesheet" type="text/css" href="style2.css" media="all" />
<link rel="stylesheet" media="all" href="style/type/folks2.css" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/scripts2.js"></script>
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
        <ul class="2tabs">
          <li><a href="#tab1">This is</a></li>
          <li><a href="#tab2">Tabbed</a></li>
          <li><a href="#tab3">Form</a></li>
        </ul>
        <div class="tab_container">
          <div style="display: none;" id="tab1" class="tab_content">
            <h3>Welcome to our Testing Portal</h3>
            <p><a href="#"><img src="style/images/art/portfolio4-th.jpg" class="left" /></a> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc rhoncus tortor quis eros bibendum a tempus est dapibus. Vivamus consectetur quam eu tellus porttitor ultrices. Nunc metus massa, ullamcorper sit amet malesuada a, porttitor in tellus. Vestibulum ullamcorper quam nec lorem aliquam id feugiat risus tincidunt. Etiam molestie, risus eu gravida lobortis, velit sapien aliquam lectus, nec hendrerit lectus erat ac libero. Aenean fermentum luctus viverra. Pellentesque id lectus ante, vel tristique elit. Fusce mattis, purus non consectetur cursus, justo nisi viverra sem, ac lobortis ipsum sapien vel purus. Vivamus aliquet gravida nibh sit amet accumsan. Fusce et lorem nunc. Sed convallis, tortor nec ornare sagittis, velit ligula varius sapien, eu cursus nisl purus sed felis. </p>
			<p id="buttons">
				<input type = "button" value = "Click me! I am an input"/> 
				<button type="button"> Click Me! I am a button </button>
			</p>
            <p> <a href="#">Morbi congue pellentesque quam, eu ultricies. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc rhoncus tortor quis eros bibendum a tempus est dapibus. Vivamus consectetur quam eu tellus porttitor ultrices. Nunc metus massa, ullamcorper sit amet malesuada a, porttitor in tellus. Vestibulum ullamcorper quam nec lorem aliquam id feugiat risus tincidunt. </a></p>
          </div>
          <div style="display: none;" id="tab2" class="tab_content">
            <h3>We love tabs</h3>
            <p><img src="style/images/art/portfolio3-th.jpg" class="right" />Etiam molestie, risus eu gravida lobortis, velit sapien aliquam lectus, nec hendrerit lectus erat ac libero.
			Aenean fermentum luctus viverra. Pellentesque id lectus ante, vel tristique elit. Fusce mattis, purus non consectetur cursus, justo nisi viverra sem,
			ac lobortis ipsum sapien vel purus. Vivamus aliquet gravida nibh sit amet accumsan. Fusce et lorem nunc. Sed convallis, tortor nec ornare sagittis, 
			velit ligula varius sapien, eu cursus nisl purus sed felis. Morbi congue pellentesque quam, eu ultricies. Pellentesque habitant morbi tristique senectus 
			et netus et malesuada fames ac turpis egestas. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
			Nunc rhoncus tortor quis eros bibendum a tempus est dapibus. Vivamus consectetur quam eu tellus porttitor ultrices. Nunc metus massa, ullamcorper sit amet malesuada 
			a, porttitor in tellus. Vestibulum ullamcorper quam nec lorem aliquam id feugiat risus tincidunt. Aenean fermentum luctus viverra. Pellentesque id lectus ante, vel tristique elit.
			Fusce mattis, purus non consectetur cursus, justo nisi viverra sem, ac lobortis ipsum sapien vel purus. Vivamus aliquet gravida nibh.</p>
          </div>
          <div style="display: none;" id="tab3" class="tab_content">
            <h3>Don't you?</h3>
            <p>Nulla non tortor eget ligula dapibus semper non ut mauris. Nam feugiat, lorem a tempus auctor, odio nisl porttitor lacus, ut ultrices neque massa a odio. Pellentesque sit amet leo dictum nisl tempor malesuada id ut magna. Etiam non mauris eget massa sagittis euismod. Aliquam lectus nulla, consequat eget molestie id, malesuada sit amet lectus. Pellentesque eget justo sit amet nunc adipiscing semper at ac quam. Praesent a volutpat nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
				<div style="width:300px; border: solid 1px #333333; " align="left">
					<div style="background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>


					<div style="margin:30px">

					<form action="" method="post">
					<label>UserName  :</label><input type="text" name="username" class="box" value=''/><br /><br />
					<label>Password  :</label><input type="password" name="password" class="box" /><br/><br />
					<input type="submit" value=" Submit "/><br />
					</form>
					
					<div style="font-size:11px; color:#cc0000; margin-top:10px"></div>
					</div>
					</div>
					
					<div style="width:300px; border: solid 1px #333333; padding:10px;margin-top:10px; " align="left">
					</br>
					Search Google:
					<input type="search" name="googlesearch"><br/><br />
					<button type="button">Button with type Button</button>
					</div>
					
            <p> Morbi congue pellentesque quam, eu ultricies. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc rhoncus tortor quis eros bibendum a tempus est dapibus. Vivamus consectetur quam eu tellus porttitor ultrices. Nunc metus massa, ullamcorper sit amet malesuada a, porttitor in tellus. Vestibulum ullamcorper quam nec lorem aliquam id feugiat risus tincidunt. </p>
			
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <h3>We love toggle</h3>
      <p>Aenean fermentum luctus viverra. Pellentesque id lectus ante, vel tristique elit. Fusce mattis, purus non consectetur cursus, justo nisi viverra sem, ac lobortis ipsum sapien vel purus. Vivamus aliquet gravida nibh sit amet accumsan. Fusce et lorem nunc. Sed convallis, tortor nec ornare sagittis, velit ligula varius sapien, eu cursus nisl purus sed felis habitant morbi tristique senectus et netus et malesuada fames ac turpis. </p>
      <!-- Begin Toggle -->
      <div class="toggle">
        <h2 class="trigger">+ Click to title</h2>
        <div class="togglebox">
          <div>
            <h3>Vestibulum ullamcorper</h3>
            <p><img src="style/images/art/portfolio5-th.jpg" class="left" />Pellentesque habitant morbi <a href="#">tristique senectus et netus et malesuada </a>fames ac turpis egestas. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc rhoncus tortor quis eros bibendum a tempus est dapibus. Vivamus consectetur quam eu tellus porttitor ultrices. Nunc metus massa, ullamcorper sit amet malesuada a, porttitor in tellus. Vestibulum ullamcorper quam nec lorem aliquam id feugiat risus tincidunt. Etiam molestie, risus eu gravida lobortis, velit sapien aliquam lectus, nec hendrerit lectus erat ac libero. Aenean fermentum luctus viverra. Pellentesque id lectus ante, vel tristique elit. Fusce mattis, purus non consectetur cursus, justo nisi viverra sem, ac lobortis ipsum sapien vel purus. Vivamus aliquet gravida nibh sit amet accumsan. Fusce et lorem nunc. Sed convallis, tortor nec ornare sagittis, velit ligula varius sapien, eu cursus nisl purus sed felis. </p>
            <p> Morbi congue pellentesque quam, eu ultricies. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc rhoncus tortor quis eros bibendum a tempus est dapibus. Vivamus consectetur quam eu tellus porttitor ultrices. Nunc metus massa, ullamcorper sit amet malesuada a, porttitor in tellus. Vestibulum ullamcorper quam nec lorem aliquam id feugiat risus tincidunt. </p>
          </div>
        </div>
      </div>
      <!-- End Toggle -->
      
      <div class="toggle">
        <h2 class="trigger">+ Click to title</h2>
        <div class="togglebox">
          <div>
            <h3>We love toggle</h3>
            <p><a href="#"><img src="style/images/art/portfolio6-th.jpg" class="right" /></a> Etiam molestie, risus eu gravida lobortis, velit sapien aliquam lectus, nec hendrerit lectus erat ac libero. Aenean fermentum luctus viverra. Pellentesque id lectus ante, vel tristique elit. Fusce mattis, purus non consectetur cursus, justo nisi viverra sem, ac lobortis ipsum sapien vel purus. Vivamus aliquet gravida nibh sit amet accumsan. Fusce et lorem nunc. Sed convallis, tortor nec ornare sagittis, velit ligula varius sapien, eu cursus nisl purus sed felis. Morbi congue pellentesque quam, eu ultricies. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc rhoncus tortor quis eros bibendum a tempus est dapibus. Vivamus consectetur quam eu tellus porttitor ultrices. Nunc metus massa, ullamcorper sit amet malesuada a, porttitor in tellus. Vestibulum ullamcorper quam nec lorem aliquam id feugiat risus tincidunt. Aenean fermentum luctus viverra. Pellentesque id lectus ante, vel tristique elit. Fusce mattis, purus non consectetur cursus, justo nisi viverra sem, ac lobortis ipsum sapien vel purus. Vivamus aliquet gravida nibh.</p>
          </div>
        </div>
      </div>
      <div class="toggle">
        <h2 class="trigger">+ Click to title</h2>
        <div class="togglebox">
          <div>
            <h3>Don't you?</h3>
            <p>Nulla non tortor eget ligula dapibus <a href="#"> semper non ut mauris</a>. Nam feugiat, lorem a tempus auctor, odio nisl porttitor lacus, ut ultrices neque massa a odio. Pellentesque sit amet leo dictum nisl tempor malesuada id ut magna. Etiam non mauris eget massa sagittis euismod. Aliquam lectus nulla, consequat eget molestie id, malesuada sit amet lectus. Pellentesque eget justo sit amet nunc adipiscing semper at ac quam. Praesent a volutpat nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <p> Morbi congue pellentesque quam, eu ultricies. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc rhoncus tortor quis eros bibendum a tempus est dapibus. Vivamus consectetur quam eu tellus porttitor ultrices. Nunc metus massa, ullamcorper sit amet malesuada a, porttitor in tellus. Vestibulum ullamcorper quam nec lorem aliquam id feugiat risus tincidunt. </p>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="page-buttons.php">Events</a></li>
				<li><a href="portfolio-1.php">Gallery</a></li>
				<li><a href="services.php">Features</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
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
	
	<script type="text/javascript">
	window.onload = function() {
      $(function() {
				if (typeof ClickTale == "function"){
					
					ClickTaleEvent("page-tabs-toggles");
				}
			}) ;
	}
  </script>
</body>
</html>