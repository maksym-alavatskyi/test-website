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

  	<div id="container_12">
		<h1> If submit failed you move to different page. </h1>
		
		* username/password = test/test <br>
	
		<div class="form">
			<form id="myForm"  method="post">
					<input id="username" name="username" type="text" /> <br/> 
					<input id="password" name="password" type="password" /> <br/> 
					<input id="login_btn" type="submit" value="Login"/>		
			</form>
			
		</div>
		
	
	</div><!--container_12 end-->
  
  
   
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
	(function(){
			$('#login_btn').click(function(e){
			
				var username = $('#username').val();
				var password = $('#password').val();
				
				if((username!='test')&&(password!='test')) {
					window.location="error.php";
					e.preventDefault();					
				}
				else {
				
					// Arrive here (Submition succeded):
					// ClickTale API:										
					if (typeof ClickTaleRegisterFormSubmitSuccess == 'function'){
						//ClickTaleRegisterFormSubmitSent($('#myForm')[0]);
						ClickTaleRegisterFormSubmitSuccess($('#myForm')[0])
					}
		
					$('#container_12').text("Submission succeded!");
					e.preventDefault();					
				}
				
					
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