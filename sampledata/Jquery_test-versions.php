<?php 
session_start(); 
?>
<?php

//include("config.php");

//$fullName=$_SESSION['fullName'];


$error = '';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	// username and password sent from form 

	$fullName=addslashes($_POST['fullName']); 
	echo 'fullName:'.$fullName;
	$fullName2=addslashes($_POST['fullName2']); 
	//$mypassword=addslashes($_POST['password']); 
echo 'fullName2:'.$fullName2;
	
	if($fullName=='test')
	{
		$error="User name in form 1 cannot be test";
	}
	else if($fullName2=='test')
	{ 
		$error="User name in form 2 cannot be test";
	}
	else
	{
		header("Location: thank-you.php");
	}

}
?>
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
		<meta charset="UTF-8">
		<title>ClickTale | Testing Portal | Test Versions </title>
		<link rel="stylesheet" type="text/css" href="style.css" media="all" />
		<link rel="stylesheet" type="text/css" href="style-a.css" media="all" />
		<link rel="stylesheet" media="all" href="style/type/folks.css" />
	<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
	<![endif]-->
		<script src="http://code.jquery.com/jquery-2.0.0.js"></script>
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
	<h1>Test Versions</h1>
	
	<br>
	<div id="messageToUser" style="font-size:11px; color:#cc0000; margin-top:10px"></div>
	<br>
	<div id="error_text" style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
	<form id="testForm"  method="post" action="thank-you.php">
		<div>
			<fieldset>
				<label for="fullName">Name*</label>
				<input id="fullName" name="fullName" type="text" class="required" /> <br/> 
				<label for="email">Email*</label>
				<input id="email" name="email" type="email" class ="required"/> <br/> 	
				<label for="tel">Tel</label>
				<input id="tel" name="tel" type="text" /> <br/> 				
				<label for="tel">Tel</label>
				<input id="tel" name="tel" type="text" /> <br/> 
			</fieldset>
			
			<button id="submitBtn">Submit</button>	
		</div>
	</form>
	
		
	<br>
	Notes:<br>
	* required fields<br>
	
	<form id="testForm2"  method="post" action="">
		<div>
			<fieldset>
				<label for="fullName2">Name*</label>
				<input id="fullName2" name="fullName" type="text" class="required" /> <br/> 
				<label for="email2">Email*</label>
				<input id="email2" name="email" type="email" class ="required"/> <br/> 	
				<label for="tel2">Tel</label>
				<input id="tel2" name="tel" type="text" /> <br/> 				
			</fieldset>
			
			<button id="submitBtn2">Submit</button>	
		</div>
	</form>
	
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
	//check if server validation failed 
	if($('#error_text').text().length){
		if (typeof ClickTaleRegisterFormSubmitFailure == 'function'){
 			//Register a Server-Side Validation FAILURE with ClickTale
			ClickTaleRegisterFormSubmitFailure();
		}
	}
	
	
	// Add actions for clicking on NEXT button:
	$(':button').click(function (e) {
				
			////////////////////////////////////////////////////////////////////////
			// Client validation ///////////////////////////////////////////////////
			if(Validate(e.target)) {
				e.preventDefault();	
				//var	targetForm = $(e.target).parents().filter('form');
				var	targetForm = e.target.form;
				// Fill the message to special DIV:
				$('#messageToUser').text("* Please fill all required fields!");
				//alert('Please fill all required fields');
				
				// ClickTale API (not sent, failure):										
				if (typeof ClickTaleRegisterFormSubmitFailure == 'function'){
					//Register a Client-Side Validation FAILURE with ClickTale
					//console.log("Sould be failure");
					ClickTaleRegisterFormSubmitNotSent(targetForm);
					//ClickTaleRegisterFormSubmitFailure(targetForm);
				}
												
				return;
			} // End Client validation
			
				
			// Arrive here if Submition succeded:
			// ClickTale API:
			$(':form').submit(function(){
				if (typeof ClickTaleRegisterFormSubmitSuccess == 'function'){
					//console.log("Sould be success");
					ClickTaleRegisterFormSubmitSent(targetForm);
					ClickTaleRegisterFormSubmitSuccess(targetForm);
				}
			});				
			
	
	}); // End: 
			
});


function Validate(caller){
	
	var requiredFields= $(caller).closest('form').find('input[class="required"]');
	for (var i=0; i<requiredFields.length;i++){
		if(requiredFields[i].value=='')
		return true; // there are empty required fields
	}
	return false;// all required fields are filled
}


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