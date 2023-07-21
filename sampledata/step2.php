<?php
session_start();
$_SESSION['firstName'] = $_POST['firstName'];
$_SESSION['lastName'] = $_POST['lastName'];
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>ClickTale | Testing Portal | Registration - Step 2 </title>
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
			<h1> Step 2 - Billing Info</h1>

			<br>
			<div id="messageToUser" style="font-size:11px; color:#cc0000; margin-top:10px"></div>
			<br>

      <div  data-cs-encrypt id="output">
          <span>Exported data:</span>
          <br>
          <span data-cs-encrypt>address1 :   <?php echo $_POST["address1"]; ?></span></br>
          <span data-cs-encrypt>address2 :   <?php echo $_POST["address2"]; ?></span></br>
          <span data-cs-encrypt>phone :   <?php echo $_POST["phone"]; ?></span></br>
      </div>
			<form id="step2"  method="post" action="step2.php">
				<fieldset>
					<label for="address1"  >Address Line 1</labe>
					<input data-cs-encrypt id="address1" name="address1" type="text" class="required"/> <br/>

					<label for="address2" >Address Line 2</label>
					<input data-cs-encrypt id="address2" name="address2" type="text" /> <br/>

                   <label for="phone"> phone number:</label>
                  <input data-cs-encrypt type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                    <small>Format: 123-45-678</small><br><br>
                    
					<label for="building" data-cs-encrypt >Building No</label>
					<input id="building" name="building" type="text" /> <br/>

					<label for="city">City</label>
					<input id="city" name="city" type="text" class="required" /> <br/>
				</fieldset>
				<button id="back" onclick="return false;"> Back </button>
				<button id="next" onclick="return false;"> Next </button>
                <button id="submit">export</button>
			</form>

			<br>
				Notes:<br>
				* Client validation: none.<br>
				* Server validation: none.<br>
			<br>
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
    
    window._uxa.push(['trackPageEvent', '@user-identifier@username@contentsquare.com']);

	// Add actions for clicking on BACK button:
	// No validation.
	$('#back').click(function(){
		history.back();
	});


	// Add actions for clicking on NEXT button:
	$('#next').click(function () {

		// Arrive here (Submition succeded):
		// ClickTale API:
		/*
		if (typeof ClickTaleRegisterFormSubmitSuccess == 'function'){
			ClickTaleRegisterFormSubmitSent($('#step2')[0]);
			ClickTaleRegisterFormSubmitSuccess($('#step2')[0])
		}*/

		// Go to step 3
		window.location.href = "step3.php";

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
