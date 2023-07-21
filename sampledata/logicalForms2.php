<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>ClickTale | Testing Portal | logical Forms 2 </title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" type="text/css" href="contact/style.css" media="all">
<link rel="stylesheet" media="all" href="style/type/folks.css" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/scripts.js"></script>

<Script type="text/javascript">
	function mySubmit(){
		var r1_checked = document.getElementById('r1').checked;
		if(r1_checked){
			//document.getElementById("frm1").action="form1Submitted.html"
			//document.getElementById("frm1").submit();
			ClickTaleRegisterFormSubmit(greenformEid);
			ClickTaleRegisterFormSubmitSent(greenformEid);
			ClickTaleRegisterFormSubmitSuccess(greenformEid);
			console.log("Green form submitted");
			
		}else{
			//document.getElementById("frm2").action="form2Submitted.html"
			//document.getElementById("frm2").submit();
			ClickTaleRegisterFormSubmit(blueFormEid);
			ClickTaleRegisterFormSubmitSent(blueFormEid);
			ClickTaleRegisterFormSubmitSuccess(blueFormEid);
			console.log("Blue form submitted");

		}
		
		
		
	}
	
		
</script>


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
		<h1>Mix of fields and forms</h1>
    <br>
		<br>
		
			<div id="d2">
				<form name="frm1" id="frm1" >
					<input type="text" id="frm1txt1"  STYLE="color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #72A4D2;" size="10" maxlength="30" tabindex="1" value = "1"/>
					<input type="text" id="frm1txt2"  STYLE="color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #72A4D2;" size="10" maxlength="30"/>
					<input type="text" id="frm1txt3"  STYLE="color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #12F1A1;" size="10" maxlength="30"/>
					<input type="text" id="frm1txt4"  STYLE="color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #12F1A1;" size="10" maxlength="30"/>
				</form>
			</div>
			<br>

			<div id="d3">
				<form name="frm2" id="frm2" >
					<input type="text" id="frm2txt1"  STYLE="color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #12F1A1;" size="10" maxlength="30" tabindex="2" value = "2"/>
					<input type="text" id="frm2txt2"  STYLE="color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #12F1A1;" size="10" maxlength="30"/>
					<input type="text" id="frm2txt3"  STYLE="color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #72A4D2;" size="10" maxlength="30"/>
					<input type="text" id="frm2txt4"  STYLE="color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #72A4D2;" size="10" maxlength="30"/>
				</form>
			</div>	
			<br>
			
		
			<input id="r1" type="radio" name="formSelector" value="form1" checked>Green Form<br>
			<input id="r2" type="radio" name="formSelector" value="form2">Blue Form<br>
		
			
			<div id="d4" style="width:150px">
				
				
				<a href="#" class="button gray" onclick="mySubmit()" style="opacity: 1;" id="imgSubmit">Submit<span></span></a>
			</div>
		


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




<script type='text/javascript'>


			window.ClickTaleSettings=window.ClickTaleSettings||{};

			var greenformEid, blueFormEid;
			window.ClickTaleOnRecording = (function() {
				ClickTaleFormDisableAll();
				
				greenformEid = ClickTaleLogicalForm(
					"Green form", 
					[document.getElementById("frm1txt3"),document.getElementById("frm1txt4"),document.getElementById("frm2txt1"),document.getElementById("frm2txt2")],
					[document.getElementById("imgSubmit")]);
				
				blueFormEid = ClickTaleLogicalForm(
					"blue form", 
					[document.getElementById("frm1txt1"),document.getElementById("frm1txt2"),document.getElementById("frm2txt3"),document.getElementById("frm2txt4")],
					[document.getElementById("imgSubmit")]);
			});
			
			
</script>			
		
<?php 
	include 'ct_bottom.php'
  ?>
</body>
</html>