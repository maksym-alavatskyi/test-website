<?php session_start();?>
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
		<meta charset="UTF-8">
		<title>ClickTale | Testing Portal | Registration -Step1 </title>
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
		
		<!-- FORM 1 ------------------------------------------------------------------------->
		<div class="content">
			<form id="form1"  name = "native 1" method="post">
				<fieldset>
					<label>Select currency 1:</label>					
						<select id="currency_rate1">
							<option value="0.3" selected="selected">USD</option>
							<option value="0.4">EUR</option>
							<option value="1/8">RUR</option>						
						</select>
					<br/> 
				
					<label>Enter Amount:</label>
						<input id="original_amount1" name="amount" type="text" /> 
						<span id='error_text1' class="error_text"></span>
						<button id="calculate_btn1"> Calculate 1</button>
						<br/> 
					
					<label>Amount in NIS 1:</label>
						<span id="result1"> </span>
					
				</fieldset>				
			</form>
		</div>
		<!-- End FORM 1 ---------------------------------------------------------------------->

		<!-- FORM 2 ------------------------------------------------------------------------->
		<div class="content">
			<form id="form2" name = "native 2" method="post">
				<fieldset>
					<label>Select currency 2:</label>					
						<select id="currency_rate2">
							<option value="0.3" selected="selected">USD</option>
							<option value="0.4">EUR</option>
							<option value="1/8">RUR</option>						
						</select>
					<br/> 
				
					<label>Enter Amount:</label>
						<input id="original_amount2" name="amount" type="text" /> 
						<span id='error_text2' class="error_text"></span>
						<button id="calculate_btn2"> Calculate 2 </button>
						<br/> 
					
					<label>Amount in NIS 2:</label>	<span id="result2"> </span>
					
				</fieldset>				
			</form>
		</div>
		<!-- End FORM 2 ---------------------------------------------------------------------->
			
		<!-- FORM 3 ------------------------------------------------------------------------->
		<div class="content">
			<form id="form3" name = "native 3" method="post">
				<fieldset>
					<label>Select currency 3:</label>					
						<select id="currency_rate3">
							<option value="0.4">EUR</option>
							<option value="1/8">RUR</option>						
						</select>
					<br/> 
				
					<label>Enter Amount:</label>
						<input id="original_amount3" name="amount" type="text" /> 
						<span id='error_text3' class="error_text"></span>
						<button id="calculate_btn3"> Calculate 3 </button>
						<br/> 
					
					<label>Amount in NIS 3:</label><span id="result3"> </span>
					
				</fieldset>				
			</form>
		</div>
		<!-- End FORM 3 ---------------------------------------------------------------------->			
			
		   
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
<!------------ calculator scripts---->
	<script>
	
	function sleep(miliseconds) {
           var currentTime = new Date().getTime();

           while (currentTime + miliseconds >= new Date().getTime()) {
           }
       }
	   
	   
$(document).ready(function () {

		var result1;
		var result2;
		var result3;
			
		$('#calculate_btn1').click(function(e){
		
			// Get params from the form Inputs:
			var currency_rate = parseFloat($('#currency_rate1 option:selected').val(),10);
			var original_amount = parseInt($('#original_amount1').val(),10);


			////////////////////////////////////////////////////////////////////////
			if(original_amount){
				// SUCCESS /////////////////////////////////////////////////////////
				// clear error text (if it was there)
				$('#error_text1').text("");
				
				result = currency_rate*original_amount;
				e.preventDefault();
				
				$('#result1').text(result);
				$('#original_amount1').val('');
				
				// ClickTale API (success):
				 if (typeof ClickTaleRegisterFormSubmitSuccess == 'function'){
					console.log("Sould be success");
					setTimeout(function(){ClickTaleRegisterFormSubmitSent($('#form1')[0])},10)
					setTimeout(function(){ClickTaleRegisterFormSubmitSuccess($('#form1')[0])},10)
				 }
			}
			else {
				// FAILURE ////////////////////////////////////////////////////////
				e.preventDefault();
				$('#error_text1').text("Please enter valid amount");
				
				// ClickTale API (not sent, failure):										
				if (typeof ClickTaleRegisterFormSubmitFailure == 'function'){				
					//Register a Client-Side Validation FAILURE with ClickTale
					console.log("Sould be failure");
					setTimeout(function(){ClickTaleRegisterFormSubmitNotSent($('#form1')[0])},10);
					setTimeout(function(){ClickTaleRegisterFormSubmitFailure($('#form1')[0])},10);			
				}
			}
			////////////////////////////////////////////////////////////////////////
		});
				

		$('#calculate_btn2').click(function(e){
		
			// Get params from the form Inputs:
			var currency_rate = parseFloat($('#currency_rate2 option:selected').val(),10);
			var original_amount = parseInt($('#original_amount2').val(),10);

			// Adding "submit" tag
			// ClickTaleRegisterFormSubmit();				
			////////////////////////////////////////////////////////////////////////
			if(original_amount){
				// SUCCESS /////////////////////////////////////////////////////////
				// clear error text (if it was there)
				$('#error_text2').text("");
				
				result = currency_rate*original_amount;
				e.preventDefault();
				
				$('#result2').text(result);
				$('#original_amount2').val('');
				
				// ClickTale API (success):
				if (typeof ClickTaleRegisterFormSubmitSuccess == 'function'){
					console.log("Sould be success");
					setTimeout(function(){ClickTaleRegisterFormSubmitSent($('#form2')[0])},10)
					setTimeout(function(){ClickTaleRegisterFormSubmitSuccess($('#form2')[0])},10)
				}
			}
			else {
				// FAILURE ////////////////////////////////////////////////////////
				e.preventDefault();
				$('#error_text2').text("Please enter valid amount");
				
				// ClickTale API (not sent, failure):										
				if (typeof ClickTaleRegisterFormSubmitFailure == 'function'){
					//Register a Client-Side Validation FAILURE with ClickTale
					console.log("Sould be failure");
					setTimeout(function(){ClickTaleRegisterFormSubmitNotSent($('#form2')[0])},10);
					setTimeout(function(){ClickTaleRegisterFormSubmitFailure($('#form2')[0])},10);	
				}
			}
			////////////////////////////////////////////////////////////////////////
		});
								
				
		$('#calculate_btn3').click(function(e){
		
			// Get params from the form Inputs:
			var currency_rate = parseFloat($('#currency_rate3 option:selected').val(),10);
			var original_amount = parseInt($('#original_amount3').val(),10);
					
			// Adding "submit" tag
			// ClickTaleRegisterFormSubmit();	
			////////////////////////////////////////////////////////////////////////
			if(original_amount){
				// SUCCESS /////////////////////////////////////////////////////////
				// clear error text (if it was there)
				$('#error_text3').text("");
				
				result = currency_rate*original_amount;
				e.preventDefault();
				
				$('#result3').text(result);
				$('#original_amount3').val('');
				
				// ClickTale API (success):
				if (typeof ClickTaleRegisterFormSubmitSuccess == 'function'){
					console.log("Sould be success");
					setTimeout(function(){ClickTaleRegisterFormSubmitSent($('#form3')[0])},10)
					setTimeout(function(){ClickTaleRegisterFormSubmitSuccess($('#form3')[0])},10)
				}
			}
			else {
				// FAILURE ////////////////////////////////////////////////////////
				e.preventDefault();
				$('#error_text3').text("Please enter valid amount");
				
				// ClickTale API (not sent, failure):										
				if (typeof ClickTaleRegisterFormSubmitFailure == 'function'){
					//Register a Client-Side Validation FAILURE with ClickTale
					console.log("Sould be failure");
					setTimeout(function(){ClickTaleRegisterFormSubmitNotSent($('#form3')[0])},10);
					setTimeout(function(){ClickTaleRegisterFormSubmitFailure($('#form3')[0])},10);	
				}
			}
			////////////////////////////////////////////////////////////////////////
		});		
		})();
		
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