<?php 
session_start(); 

//finally, let's store our posted values in the session variables
$_SESSION['address1'] = $_POST['address1'];
$_SESSION['address2'] = $_POST['address2'];
$_SESSION['building'] = $_POST['building'];
$_SESSION['city'] 	  = $_POST['city'];
 
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>ClickTale | Testing Portal | Registration - Step 3 </title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" type="text/css" href="style-a.css" media="all" />
<link rel="stylesheet" media="all" href="style/type/folks.css" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<script src="//code.jquery.com/jquery-2.0.0.js"></script>
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
  
  
	<!--------------------------------------------------------------------------------------------->
	<!--------------------------------------------------------------------------------------------->
	<!-------------------- HTML ------------------------------------------------------------------->  
	<!-- Begin Wrapper -->
	<div id="wrapper">
		<div class="content">
			<h1> Step 3 - Login </h1>
						
			<br>
			<div id="messageToUser" style="font-size:11px; color:#cc0000; margin-top:10px"></div>
			<br>
			
			<form id="step3" name="myform"  method="post" action="register.php">
				<fieldset>
					<label for="email">Username:</label>
					<input id="username" name="username" type="text" class="required"/> <br/> 
					<label for="password">Password</label>
					<input id="password" name="password" type="password" class="required"/> <br/> 				
				</fieldset>
				<button id="back"   onclick="return false;"> Back </button>	
				<button id="submit"> Finish Registration </button>	
			</form>	
			
		<br>
		Notes:<br>
		* Client validation: firstName's length > 3.<br>
		* Server validation: username/password == test/test.<br>
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
		
	// Check refferrer: ////////////////////////////////////////////////////////
	// If referrer is step3 -> server validation is failed!
	if(document.referrer.search('step3.php') > 0) {
		$('#messageToUser').text("* Username's and password should be test/test");	
		
		// ClickTale API (not sent, failure):										
		if (typeof ClickTaleRegisterFormSubmitFailure == 'function'){
			//Register a Client-Side Validation FAILURE with ClickTale
			ClickTaleRegisterFormSubmitNotSent();
			ClickTaleRegisterFormSubmitFailure()
		}
	}
	
		
	// Add actions for clicking on BACK button:
	// No validation.
	$('#back').click(function(){		
		history.back();
	});


	// Add actions for clicking on NEXT button:
	$('#submit').click(function (e) {
	
		// Validation:
		if($("#username").val().length < 4) {
		
			// Fill the message to special DIV:
			$('#messageToUser').text("* Username's length should be more than 3 symbols");
			e.preventDefault();
			
			// ClickTale API (not sent, failure):										
			if (typeof ClickTaleRegisterFormSubmitFailure == 'function'){
				//Register a Client-Side Validation FAILURE with ClickTale
				ClickTaleRegisterFormSubmitNotSent($('#step3')[0]);
				ClickTaleRegisterFormSubmitFailure($('#step3')[0])
			}
			
			return;				
		}
		
		
		
		// Arrive here if Submition succeded:
		$('#step3').submit(function (){
		// ClickTale API:										
		if (typeof ClickTaleRegisterFormSubmitSuccess == 'function'){
			ClickTaleRegisterFormSubmitSent($('#step3')[0]);
			ClickTaleRegisterFormSubmitSuccess($('#step3')[0])
		}
		
		});		
		// Go to step 3
		//window.location.href = "register.php";
		
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