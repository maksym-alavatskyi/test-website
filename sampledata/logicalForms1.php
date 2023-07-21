<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>ClickTale | Testing Portal | logical Forms 1 </title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" type="text/css" href="contact/style.css" media="all">
<link rel="stylesheet" media="all" href="style/type/folks.css" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/scripts.js"></script>

<script type="text/javascript">
	window.ClickTaleOnRecording = function() {  
	
	
			var  bottomFormEid;

				bottomFormEid = ClickTaleLogicalForm("bottom form", document.getElementById("d3").getElementsByTagName("input"), [document.getElementById("btn111")]);
}

	</script>

<Script type="text/javascript">
	function mySubmit(){
		
		ClickTaleRegisterFormSubmit(bottomFormEid);
		ClickTaleRegisterFormSubmitSent(bottomFormEid);
		ClickTaleRegisterFormSubmitSuccess(bottomFormEid);			
		
	}
	
			
	function setFocus(elementID){
		document.getElementById(elementID).focus();
	}

	function bindEvent(element, type, handler) {
		if(element.addEventListener) {
			element.addEventListener(type, handler, false);
		} else {
			element.attachEvent('on'+type, handler);
		}
	}
	
	
	bindEvent(window, 'load', function() {
    setFocus("frm2txt1");
	});
	
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
		<h1>logical and phsical forms in one page</h1>
			<br>
			<div id="d2">
				<fieldset>
				<legend>phisical form 1:</legend>
				<form id="frmPhisical" name="frmPhisical" action="index.php">
					<input type="text" id="frmPhisicaltxt1" name="frmPhisicaltxt1" tabindex="1" value = "1"/>
					<input type="text" id="frmPhisicaltxt2" name="frmPhisicaltxt2"/>
					<input type="text" id="frmPhisicaltxt3" name="frmPhisicaltxt3"/>
					<input type="text" id="frmPhisicaltxt4" name="frmPhisicaltxt4"/>

					<input type="text" id="frm1txt5" name="frm1txt5" value="5" style="display:none"/>

					<input type="submit"/>
				</form>	
				</fieldset>
			</div>
			<br>

			<div id="d3">
				<fieldset>
				<legend>logical form 2:</legend>
					<input type="text" id="frm2txt1" name="frm2txt1" tabindex="2" value = "2"/>
					<input type="text" id="frm2txt2" name="frm2txt2"/>
					<input type="text" id="frm2txt3" name="frm2txt3"/>
					<input type="text" id="frm2txt4" name="frm2txt4"/>
					<button id="btn111" onclick="mySubmit()"> click to Logical form (2) </button>
				
				</fieldset>
			</div>	
			<br>
			
		
			
			<div id="d4">
				
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


<?php 
	include 'ct_bottom.php'
  ?>


</body>
</html>