<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>ClickTale | Testing Portal | Events</title>
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
      <h2>Buttons</h2>
	  Click on buttons to launch events.
      <br /> <br />
	  
      <div class="one-half">
      <a href="#" class="button light-blue" onclick="var d = new Date().getTime(); $('#eventLog').append('Event triggered: button_event_'+d+'<br>');ClickTaleEvent('button_event_'+d)"> Dynmaic event name<span></span></a> <div class="clear"></div><br /><br />
      <a href="#" class="button light-purple" onclick="$('#eventLog').append('Event triggered: light-purple<br>');ClickTaleEvent('light-purple')"> This is a button<span></span></a> <div class="clear"></div><br /><br />
      <a href="#" class="button light-pink" onclick="$('#eventLog').append('Event triggered: light-pink<br>');ClickTaleEvent('light-pink')"> This is a button<span></span></a> <div class="clear"></div><br /><br />
      <a href="#" class="button light-brown" onclick="$('#eventLog').append('Event triggered: light-brown<br>');ClickTaleEvent('light-brown')"> This is a button<span></span></a> <div class="clear"></div><br /><br />
      <a href="#" class="button light-teal" onclick="$('#eventLog').append('Event triggered: light-teal<br>');ClickTaleEvent('light-teal')"> This is a button<span></span></a> <div class="clear"></div><br /><br />
      <a href="#" class="button lime" onclick="$('#eventLog').append('Event triggered: lime<br>');ClickTaleEvent('lime')"> This is a button<span></span></a> <div class="clear"></div><br /><br />
      <a href="#" class="button red" onclick="$('#eventLog').append('Event triggered: red<br>');ClickTaleEvent('red')"> This is a button<span></span></a> <div class="clear"></div><br /><br />
      <a href="#" class="button orange" onclick="$('#eventLog').append('Event triggered: orange<br>');ClickTaleEvent('orange')"> This is a button<span></span></a> <div class="clear"></div><br /><br />
      </div>
      
      
      <div class="one-half last">
      <a href="#" class="button yellow" onclick=" $('#eventLog').append('Event triggered: yellow<br>'); ClickTaleEvent('yellow'); ga('send', 'event', 'GA_YellowButton', 'click on button', 'the new an amazing button') "> This is a button<span></span></a> <div class="clear"></div><br /><br />
      <a href="#" class="button green" onclick="$('#eventLog').append('Event triggered: green<br>');ClickTaleEvent('green')"> This is a button<span></span></a> <div class="clear"></div><br /><br />
      <a href="#" class="button teal" onclick="$('#eventLog').append('Event triggered: teal<br>');ClickTaleEvent('teal')"> This is a button<span></span></a> <div class="clear"></div><br /><br />
      <a href="#" class="button turqoise" onclick="$('#eventLog').append('Event triggered: turqoise<br>');ClickTaleEvent('turqoise')"> This is a button<span></span></a> <div class="clear"></div><br /><br />
      <a href="#" class="button blue" onclick="$('#eventLog').append('Event triggered: blue<br>');ClickTaleEvent('blue')"> This is a button<span></span></a> <div class="clear"></div><br /><br />
      <a href="#" class="button purple" onclick="$('#eventLog').append('Event triggered: purple<br>');ClickTaleEvent('purple')"> This is a button<span></span></a> <div class="clear"></div><br /><br />
      <a href="#" class="button pink" onclick="$('#eventLog').append('Event triggered: pink<br>');ClickTaleEvent('pink')"> This is a button<span></span></a> <div class="clear"></div><br /><br />
      <a href="#" class="button gray" onclick="$('#eventLog').append('Event triggered: gray<br>');ClickTaleEvent('gray')"> This is a button<span></span></a> <div class="clear"></div><br /><br />
      </div>
	  <div id="eventLog"> </div><br />
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
</body>
</html>