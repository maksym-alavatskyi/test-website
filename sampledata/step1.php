<?php 
session_start(); 
?>
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
		<meta charset="UTF-8">
		<title>ClickTale | Testing Portal | Registration - Step1 </title>
		<link rel="stylesheet" type="text/css" href="style.css" media="all" />
		<link rel="stylesheet" type="text/css" href="style-a.css" media="all" />
		<link rel="stylesheet" media="all" href="style/type/folks.css" />
	<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
	<![endif]-->
		<script src="//code.jquery.com/jquery-2.0.0.js"></script>
		<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
		<script type="text/javascript" src="style/js/scripts.js"></script>
		<script type="text/javascript" src="style/js/jquery.validate.js"></script>

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
  
  
  
  
  <!--------------------------------------------------------------------------------------------->
  <!--------------------------------------------------------------------------------------------->
  <!-------------------- HTML ------------------------------------------------------------------->
  <!-- Begin Wrapper -->
  <div id="wrapper">
    <div class="content">
	<h1>Step 1 - Registration</h1>
	
	<br>
	<div id="messageToUser" style="font-size:11px; color:#cc0000; margin-top:10px"></div>
	<br>
	
	<form id="step1"  method="post" action="">
		<fieldset>
			<label for="firstName">First Name</label>
			<input id="firstName" name="firstName" type="text"  /> <br/> 
			<label for="lastName">Last Name</label>
			<input id="lastName" name="lastName" type="text" /> <br/> 					
		</fieldset>
		
		<button id="next" onclick="return false;">Next</button>	
	</form>
		
		<br>
		Notes:<br>
		* Client validation: firstName isn't empty.<br>
		* Server validation: none.<br>
		<br>
	
    </div>
   
  </div>
  <!-- End Wrapper -->
  <!------------------- end HTML ---------------------------------------------------------------->
  <!--------------------------------------------------------------------------------------------->
  <!--------------------------------------------------------------------------------------------->
  
  
  
  <div class="clearfix"></div>
  <div class="push"></div>
</div>



<!--========================================================================================-->
<!--================== SCRIPTs =============================================================-->
<!--========================================================================================-->
<!--========================================================================================-->
<script>
$(document).ready(function () {

	// Add actions for clicking on NEXT button:
	$('#next').click(function () {
				
			////////////////////////////////////////////////////////////////////////
			// Client validation ///////////////////////////////////////////////////
			if($('#firstName').val() == "") {
									
				// Fill the message to special DIV:
				$('#messageToUser').text("* First name should not be empty!");
				
				// ClickTale API (not sent, failure):										
				if (typeof ClickTaleRegisterFormSubmitFailure == 'function'){
					//Register a Client-Side Validation FAILURE with ClickTale
					console.log("Sould be failure");
					ClickTaleRegisterFormSubmitNotSent($('#step1')[0]);
					ClickTaleRegisterFormSubmitFailure($('#step1')[0])
				}
												
				return;
			} // End Client validation
				
				
			// Arrive here if Submition succeded:
			// ClickTale API:										
			if (typeof ClickTaleRegisterFormSubmitSuccess == 'function'){
				console.log("Sould be success");
				ClickTaleRegisterFormSubmitSent($('#step1')[0]);
				ClickTaleRegisterFormSubmitSuccess($('#step1')[0])
			}
							
			// Go to step 2
			window.location.href = "step2.php";
	
	}); // End: Click to NEXT.
			
});
</script>

<!--========================================================================================-->
<!--=================== end SCRIPTs ========================================================-->
<!--========================================================================================-->




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