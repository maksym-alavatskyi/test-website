<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>ClickTale | Testing Portal | Contact</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" type="text/css" href="contact/style.css" media="all" />
<link rel="stylesheet" media="all" href="style/type/folks.css" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/scripts.js"></script>
<script type="text/javascript" src="style/js/jquery.infieldlabel.min.js"></script>
<script type="text/javascript" src="style/js/twitter.min.js"></script>


<style type="text/css">
#contact-form input {
    display: inline;
    height: auto;
    width: auto;
}
</style>

<script type="text/javascript">
	$(function(){ $("label").inFieldLabels(); });
</script>

<script type="text/javascript" src="style/js/jquery.validate.js"></script>

  <script type="text/javascript">
		SubmittingForm=function() {
			$("#fvujq-form1").empty();
			$("#log").text("The form is sent. thank you");
			window.open("index.php","_self");
		}

		$(document).ready(function() {
			$("#fvujq-form1").validate({
				submitHandler:function(form) {
					SubmittingForm();
				},
				rules: {
					name: "required",		// simple rule, converted to {required:true}
					email: {				// compound rule
						required: true,
						email: true
					},
					url: {
						url: true
					},
					comment: {
						required: true
					},
					radios: {
						required: true
					}
				},
				messages: {
					comment: "Please enter a comment."
				}
			});
		});

		jQuery.validator.addMethod(
			"selectNone",
			function(value, element) {
				if (element.value == "none")
				{
					return false;
				}
				else return true;
			},
			"Please select an option."
		);

		$(document).ready(function() {
			$("#fvujq-form2").validate({
				submitHandler:function(form) {
					SubmittingForm();
				},
				rules: {
					sport: {
						selectNone: true
					}
				}
			});
		});
		
		
// get ver from url	
            function getUrlVars() {
                var vars = {};
                var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
                    vars[key] = value;
                });
                return vars;
            }

            extraDiv = getUrlVars()["extraDiv"];

	</script>
		  
</script>
</head>
<body>
<script type="text/javascript">
		   if (extraDiv == 'true') {
				$('#fvujq-form1').before('<div> Extra div for testing Form Analytics</div>');
		   }
         
		  </script>
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
    
    <!-- Begin Content -->
    <div class="content">
      <h3>Clicktale Contact Information - version 02</h3>
      <p>Maecenas vehicula condimentum consequat. Ut suscipit ipsum eget leo convallis feugiat upsoyut fermentum leo auctor. In consequat turpis at nisiper otue vestibulum at bibendum lectus pulvinar. Integer pulvinar elit tincidunt quam faucibus eget porta est blandit.</p>
      <br />
      <!-- Begin Form -->
      <div class="contact-left">
        <div id="contact-form"> 
          
          <!--begin:notice message block-->
          <div id="note"></div>
          <!--begin:notice message block-->
		  
		   

		  
		  
          <form id="fvujq-form1" method="post" action="" onsubmit="">
	
  		<div class="form-row">
      <span class="label" >Name * (autofocus)</span>
      <input type="text" name="name" autofocus>
  		</div>
  		<div class="form-row">
      <span class="label">E-Mail *</span>
      <input type="text" name="email">
  		</div>
		<div class="form-row">
      <span class="label">Second E-Mail</span>
      <input type="text" name="email2">
  		</div>
		
  		<div class="form-row">
      <span class="label">URL&nbsp;&nbsp;&nbsp;</span>
      <input type="text" name="url">
  		</div>
		<div class="form-row" id="tele">
      <a href="#" class="button light-blue" id="addPhone"> Add Phone <span></span></a><br><br>
  		</div>
  		<div class="form-row">
      <span class="label">Your comment *</span>
      <textarea name="comment"></textarea>
  		</div>
		<div class="form-row">			
			<br>Check Box? <input id="check1" type="checkbox" value="Check1"><span id="checkDetails" style="display:none"> + Details: <input type="text" name="details" label="Details"></span>
			<br><br>
			Choose one option: <br><br>
			<input type="radio" name="radios" value="radio1"> A<br>
			<input type="radio" name="radios" value="radio2"> B<br>
			<input type="radio" name="radios" value="radio3"> C<br>
				<label for="radios" generated="true" class="error"></label><br><br>
					
		</div>
		<div class="form-row">			
			Radio buttons with the same ID tag: <br><br>
			<input id="radiobutton" type="radio" name="radios2" value="radio1"> A<br>
			<input id="radiobutton" type="radio" name="radios2" value="radio2"> B<br>
			<input id="radiobutton" type="radio" name="radios2" value="radio3"> C<br>
				<br><br>
					
		</div>
		<div class="form-row">			
			Radio buttons with different ID tag: <br><br>
			<input id="radiobt1" type="radio" name="radios3" value="radio1"> A<br>
			<input id="radiobt2" type="radio" name="radios3" value="radio2"> B<br>
			<input id="radiobt3" type="radio" name="radios3" value="radio3"> C<br>
				<br><br>
					
		</div>
		<div class="form-row">			
			Radio buttons with default checked: <br><br>
			<input  type="radio" name="radios4" value="radio1" > A<br>
			<input  type="radio" name="radios4" value="radio2" checked="checked"> B<br>
			<input  type="radio" name="radios4" value="radio3"> C<br>
				<br><br>
					
		</div>
  		<div class="form-row">
      <input id="submit-button" class="submit" type="submit" value="Submit">
  		</div>
 	</form>
   </div>
        <!-- End Form --> 
      </div>
      <div class="contact-right">
        <div class="one-half">
          <h4>Israel Office</h4>
          <p>2 Shoham st.<br />
            Ramat Gan, Israel <br />
            <br />
            <span class="highlight3">Fax:</span> 1 800 807 2117 <br />
            <span class="highlight3">Tel:</span> 1 800 807 2118 </p>
        </div>
        <div class="one-half last">
          <h4>USA Office</h4>
          <p>Moon Avenue No:11/21 <br />
            Los Angeles, CA <br />
            <br />
            <span class="highlight3">Fax:</span> +555 797 534 01 <br />
            <span class="highlight3">Tel:</span> +555 636 646 62 </p>
        </div>
        <div class="clear"></div>
        <br />
        <!--<iframe width="400" height="188" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=iw&amp;geocode=&amp;q=%D7%A9%D7%95%D7%94%D7%9D+2,+%D7%A8%D7%9E%D7%AA+%D7%92%D7%9F,+%D7%99%D7%A9%D7%A8%D7%90%D7%9C&amp;aq=0&amp;oq=%D7%A9%D7%95%D7%94%D7%9D+2+&amp;sll=32.069794,34.864996&amp;sspn=0.239146,0.52906&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=%D7%A9%D7%95%D7%94%D7%9D+2,+%D7%A8%D7%9E%D7%AA+%D7%92%D7%9F,+%D7%99%D7%A9%D7%A8%D7%90%D7%9C&amp;ll=32.084793,34.800224&amp;spn=0.006836,0.017123&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=iw&amp;geocode=&amp;q=%D7%A9%D7%95%D7%94%D7%9D+2,+%D7%A8%D7%9E%D7%AA+%D7%92%D7%9F,+%D7%99%D7%A9%D7%A8%D7%90%D7%9C&amp;aq=0&amp;oq=%D7%A9%D7%95%D7%94%D7%9D+2+&amp;sll=32.069794,34.864996&amp;sspn=0.239146,0.52906&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=%D7%A9%D7%95%D7%94%D7%9D+2,+%D7%A8%D7%9E%D7%AA+%D7%92%D7%9F,+%D7%99%D7%A9%D7%A8%D7%90%D7%9C&amp;ll=32.084793,34.800224&amp;spn=0.006836,0.017123&amp;z=15&amp;iwloc=A" style="color:#0000FF;text-align:left">הצג מפה גדולה יותר</a></small>-->
		</div>
      <div class="clear"></div>
      <div class="divider"></div>
      
      <div class="clear"></div>
    </div>
    <!-- End Content --> 
    
  </div>
  <!-- End Wrapper -->
  
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
 <script type="text/javascript">
		   if (extraDiv == 'true') {
				$('#fvujq-form1').before('<div id="extra" style="padding:20px; color: red;"> Extra div for testing Form Analytics</div>');
		   }
         
		  </script>
 
<script type='text/javascript'>
var n=1;
$("#addPhone").click(function(){
	$("#tele").html('<span class="label">Phone &nbsp&nbsp</span><input type="text" name="tel">')
});

	$('#check1').click(function(){
            
                $("#checkDetails").toggle();
            })
			
	$(function() {
				if (typeof ClickTale == "function"){
					
					ClickTaleEvent("contact_ver02");
					ClickTaleEvent("contact_versions");
				}
	})
</script>

<?php 
	include 'ct_bottom.php'
  ?>
</body>
</html>