<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>ClickTale | Testing Portal | Tabs & Toggle </title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" type="text/css" href="contact/style.css" media="all">
<link rel="stylesheet" media="all" href="style/type/folks.css" />
<link rel="stylesheet" type="text/css" href="style-a.css" media="all" />
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
		<h1> Form elements with both ID and name attributes. </h1>
		<p>
			Please enter details below:
		</p>
	
			<form id="registration" action="thank-you.php" method="GET">
				<label>First Name:</label>
					<input id="fname" name="fname" type="text"  autofocus/><br/>
					
				<label>Last Name:</label>
					<input id="lname" name="lname" type="text" required /><br/>
					
				<label>Date of Birth:</label>
					<input id="birth" name="birth" type="date"/><br/>	
				
				<label>Gender:</label>
					<input id="radio_male" type="radio" name="gender" value="male">Male
					<input id="radio_female" type="radio" name="gender" value="female">Female<br/>
					
				<label>Email:</label>
					<input id="email" name="email" type="email" required/><br/>
					
				<label>Password:</label>
					<input id="pwd" name="pwd" type="password" required/><br/>
				
				<label>Website:</label>
					<input id="website" name="website" type="url"/><br/>
					
				<label>Phone:</label>
					<input id="phone" name="phone" type="tel"/><br/>
					
				<label>Street:</label>
					<input id="addr1"name="address1" type="text"/><br/>
					
				<label>Block #:</label>
					<input id="block_no" name="block_no" type="number" min="1"/><br/>
				
				<label>Language:</label>
					<select id="lang" name="language" >
					  <option value="select">Select Language</option>
					  <option value="en">English</option>
					  <option value="he">Hebrew</option>
					  <option value="ru">Russian</option>
					 </select><br/>
				
				<label> Picture:</label>
					<input id="pic" name="photo" type="file"/><br/>
					
				<input id="subscription" type="checkbox" value="subscribe"/>Would you like to receive updates?<br/>
					<div id="subscription_options" style="display:none;">
						<input name="update_option" type="radio" value="sms" />Send by sms<br/>
						<input name="update_option" type="radio" value="email" />Send by email<br/>
					</div>
				<input type=submit class="submit-button" value="Register" onclick="_gaq.push(['_trackEvent', 'Element addressing forms', 'Form Submitted', 'form with both name and id attributes']);"/>
			</form>
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

<script src="http://code.jquery.com/jquery-2.0.0.js"></script>		
<script type="text/javascript">
	$(function (){
		$('#subscription').click(function(){
			$('#subscription_options').toggle();
		});
		

	});
</script>
<?php 
	include 'ct_bottom.php'
  ?>
</body>
</html>