<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>ClickTale | Testing Portal | Tabs & Toggle </title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" type="text/css" href="style-a.css" media="all" />
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
		<h1>HTML5 - form with Dynamic ID and ClicktaleCustomID</h1>
		<p><b>Element Addressing</b> - inputs with name or id elements</p>
		<div class="leftdiv">
			<form id="form1" action="#" method="GET">
				<fieldset>
				<legend>Personal Details</legend>
					<label>First Name ( placeholder, autofocus ):</label>
						<input name="fname" type="text" placeholder="Please enter your name" autofocus /><br/>
						
					<label>Last Name:</label>
						<input name="lname" type="text" value="Please enter your last name" onfocus="if(this.defaultValue) this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/><br/>
						
					<label>Date of Birth:</label>
						<input id="birth" name="birth" type="date"/><br/>	
													
					<label>Email:</label>
						<input id="email" type="email" required /><br/>
				</fieldset>
							
				<label>Field URL:</label>
					<input id="website" name="website" type="url" placeholder="please enter url including http://"/><br/>
				
				<label>Recommended Browser</label>
					<input list="browsers" placeholder="Select recommended browser">
						<datalist id="browsers">
							<option value="Internet Explorer">
							<option value="Firefox">
							<option value="Chrome">
							<option value="Opera">
							<option value="Safari">
						</datalist>
					
				<legend>Choose Options</legend>
					<label style="text-align:top;"> Choose fruit:</label>
						<SELECT id="fruit_options" multiple size="5">
							 <OPTION VALUE="o1">Apple
							 <OPTION VALUE="o2">Strawberry
							 <OPTION VALUE="o3">Pear
							 <OPTION VALUE="o4">Banana
							 <OPTION VALUE="o5">Peach
							 <OPTION VALUE="o6">Passion Fruit
							 <OPTION VALUE="o7">Melon
						</SELECT></br>
											
				<input id="submit-button" class="submit" type="submit" value="Submit" style="opacity: 1;">
			</form>
		</div>	
		<div class="rightdiv">
			
		</div>
				
    </div>
    <div style=height:50px;"></div>
  </div>
  <!-- End Wrapper -->
  
  <div class="clearfix"></div>
  <div class="push"></div>
</div>

<script type="text/javascript">
	$(function (){
		var newId='form'+Math.floor((Math.random() * 100) + 1);
		$('#form1').attr("id",newId);
		
		if (window.ClickTaleSetCustomElementID)
			ClickTaleSetCustomElementID($("form[id^='form']")[0], 'CTcustomID');
	});
</script>
<script type="text/javascript">
	 $(function(){
		if(typeof ClickTaleEvent=="function")
			ClickTaleEvent("html5_form");
			ClickTaleEvent("html5_form-ctCustomId");
	})();
  </script>
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