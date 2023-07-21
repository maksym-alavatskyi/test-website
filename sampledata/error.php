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

	<div id="container" class="container_12">
		<div style="min-height: 250px;text-align:center;">
			<p>
				<h2>entered data was wrong - please click back and refill data</h2>
				<div id="reminder"> <div>
				<button id="back_btn">Back</button>
			</p>
		</div>
	
		
	</div><!--container end--><!--container_12 end-->
  
  
   
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

</script>


<script>
		(function(){
			$('#back_btn').click(function(){
					window.history.back();
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