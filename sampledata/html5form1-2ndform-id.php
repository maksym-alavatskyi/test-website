<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>ClickTale | Testing Portal | Tabs & Toggle </title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" type="text/css" href="style-a.css" media="all" />
<link rel="stylesheet" media="all" href="style/type/folks.css" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<script src="http://code.jquery.com/jquery-2.0.0.js"></script>
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
  
  <!-- Begin Wrapper -->
  <div id="wrapper">
    <div class="content">
	<!-- BEGIN captcha theme-->
	 <script type="text/javascript">
		 var RecaptchaOptions = {
			theme : 'clean'
		 };
	 </script>
 	<!-- END captcha theme-->
 
	
	
		
		<div class="left">
			<h1>HTML5 input types form</h1>
			<p>All the fields below are HTML 5 fields. Part of them is not supported yet by some browsers.</p>
			<p><b>Element addressing</b> - inputs have only name attribute</p>
			
			<form id="form1" action="verify.php" method="POST">
				<fieldset>
				<legend>Personal Details</legend>
					<label>First Name ( placeholder, autofocus ):</label>
						<input name="fname" type="text" placeholder="Please enter your name" autofocus /><br/>
						
					<label>Last Name (default value cleared by JS):</label>
						<input name="lname" type="text" value="Please enter your last name" onfocus="if(this.defaultValue) this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/><br/>
						
					<label>Date of Birth:</label>
						<input  name="birth" type="date"/><br/>	
													
					<label>Email:</label>
						<input name="registerEmail" type="email" required /><br/>
				</fieldset>
				
				<fieldset>	
					<legend>Website </legend>
				<label>Field URL:</label>
					<input name="website" type="url" placeholder="please enter url including http://"/><br/>
				
				<label>Recommended Browser</label>
					<input name="browsers" list="browsers" placeholder="Select recommended browser">
						<datalist id="browsers">
							<option value="Internet Explorer">
							<option value="Firefox">
							<option value="Chrome">
							<option value="Opera">
							<option value="Safari">
						</datalist>
				</fieldset>
					
				<fieldset>
					<legend>Address details</legend>
					<label>Phone:</label>
						<input name="phone" type="tel"/><br/>
						
					<label>Country:</label>
						<select name="country" >
						  <option value="select">Israel</option>
						  <option value="en">Great Britain</option>
						  <option value="he">France</option>
						  <option value="ru">Belgium</option>
						 </select><br/>
						
					<label>Street ( autocomplete ON ):</label>
						<input name="address1" type="text" autocomplete="on" /><br/>
						
					<label>Street ( autocomplete OFF ):</label>
						<input name="address2" type="text" autocomplete="off" /><br/>
						
					<label>Field number (1-500)</label>
						<input name="block_no" type="number" min="1" max="500"/><br/>
				</fieldset>
												
				<fieldset>
				<legend>Choose Options</legend>
					<label style="text-align:top;"> Choose fruit:</label>
						<SELECT id="fruit_options" multiple size="5">
							 <OPTION VALUE="o1">Apple
							 <OPTION VALUE="o2">Strawberry
							 <OPTION VALUE="o3">Pear
							 <OPTION VALUE="o4">Banana
							 <OPTION VALUE="o5">Peach
							 <OPTION VALUE="o6">Passion Fruit
							 <OPTION VALUE="o7">Melon
						</SELECT></br>
						
					<label> Choose color:</label>
						<input name="color" type="color"/><br/>
					
					<div id="rangeBlock">
						<label style="text-align:top;line-height:21px;"> Field range:</label>
							<span style="font-size:16px;font-weight:bold;">0</span>
								<input id="range" type="range" min="0" max="20"/>
							<!--<span style="font-size:16px;font-weight:bold;">10</span><br/> -->
							<span id="selectedValue" style="font-size:16px;font-weight:bold;color:red";></span>
					</div>
				</fieldset>
				
				<fieldset>
					<legend>Date and time fields</legend>
					<label>datetime</label>
						<input name="dateandtime" type="datetime" /><br/>
					
					<label>datetime LOCAL</label>
						<input name="dateandtime-local" type="datetime-local" /><br/>
											
					<label>month</label>
						<input name="month" type="month" /><br/>
					
					<label>week</label>
						<input name="week" type="week" /><br/>
					
					<label>time</label>
						<input name="time" type="time" /><br/>
						
				</fieldset>
				
				<fieldset>
					<legend>Hidden and disabled fields</legend>
					<label>Hidden field:</label>
					<input name="hiddenField"type="hidden" value="this_is_hidden_field"/><br/>
					
					<label>disabled field</label>	
					<input type="text" value="this field value cannot be changed" disabled><br/>
					
					<label>readonly field</label>	
					<input type="text" value="this is readonly field" readonly><br/>
					
					<input name="agreeChckbx" type="checkbox" value="agree" checked disabled /> <label for="agreeChckbx">I agree with <a href="#">Terms and conditions</a></label>
					
				</fieldset>
				
				<!-- reCaptcha PHP library>
				<?php
					require_once('recaptchalib.php');
					$publickey = "6LdRxu8SAAAAAJCRede-B4XacvK-dDU0hERLiqXJ"; // you got this from the signup page
					echo recaptcha_get_html($publickey);
				?>
				
				<!-- reCAPTCHA-->
				<script type="text/javascript"
					 src="http://www.google.com/recaptcha/api/challenge?k=6LdRxu8SAAAAAJCRede-B4XacvK-dDU0hERLiqXJ">
				 </script>
				  <noscript>
					 <iframe src="http://www.google.com/recaptcha/api/noscript?k=6LdRxu8SAAAAAJCRede-B4XacvK-dDU0hERLiqXJ"
						 height="300" width="500" frameborder="0"></iframe><br>
					 <textarea name="recaptcha_challenge_field" rows="3" cols="40" >
					 </textarea>
					 <input type="hidden" name="recaptcha_response_field" value="manual_challenge" />
				  </noscript>
				<!-- End reCAPTCHA-->
				
				<input class="submit-button"  type="submit" value="Submit" style="opacity: 1;">
			</form>
			
			<p></p>
			<p></p>
			
		</div>	<!-- enf of the left div-->
		
		<aside>
			<ul>
								
				<li>
					<h1>Second Form - Login</h1>
						<p><b>Element Addressing</b> - Inputs have ID element</p>
						<p>If you are already registered please login using the form above.</p>
					<form action="/login.php" method="POST">
					
							<div class="form-row">
								<div class="form-field">
									<input id="login" name="username" type="input" placeholder="Please enter your username" required/>
								</div>
								<div class="form-field">
									<input id="pwd" name="password" type="input" placeholder="Please enter your password" required/>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="form-row">
								<input type="checkbox" id="rememberChckbx" checked> <span>Remember me</span>
							</div>
						
						<button>Login button</button>
						<div class="clear"></div>
					</form>
				</li>
				<li>
					<a href="page-tabs-toggle.php"> 
						<div>
							<h4>Clickable Div</h4>
							<p>Suspendisse egestas fringilla odio. Donec lacinia tristique ante.
							Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam blandit ultricies nisl. 
							Nullam dapibus, mauris id scelerisque feugiat, sapien augue porta ipsum, ut blandit tellus enim vel mauris.</p>
						</div>
					</a>
					
				</li>
				
				<li><h4>Clickable Image</h4><a href="#"><img src="../style/images/art/portfolio6-th.jpg"></a></li>
				
				<li>
					<div>		
						<h4>Simple text paragraph with links</h4>
						<p>Suspendisse egestas fringilla odio. Donec lacinia tristique ante. <a href="contact.php">Click Here to Contact Us </a>
						Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam blandit ultricies nisl. 
						Nullam dapibus, mauris id scelerisque feugiat, sapien augue porta ipsum, ut blandit tellus enim vel mauris.</p>
					</div>	
										
				</li>
				
				<li><h4>Regular Image</h4><a href="#"><img src="../style/images/art/portfolio1-th.jpg"></a></li>
				
				<li>
					<div>		
						<h4>Simple text paragraph with links</h4>
						<p>Suspendisse egestas fringilla odio. Donec lacinia tristique ante. <a href="contact.php">Click Here to Contact Us </a>
						Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam blandit ultricies nisl. 
						Nullam dapibus, mauris id scelerisque feugiat, sapien augue porta ipsum, ut blandit tellus enim vel mauris.</p>
					</div>	
										
				</li>
			</ul>
		</aside>
    </div>
   
  </div>
  <!-- End Wrapper -->
  
  <div class="clearfix"></div>
  <div class="push"></div>
</div>

<script type="text/javascript">
	$(function (){
		$('input[type="range"]').on('change',function(){
			$('#selectedValue').text($('#range').val());
		});
	
	});
</script>

<script type="text/javascript">
      $(function(){
		if(typeof ClickTaleEvent=="function")
			ClickTaleEvent("html5_form");
			ClickTaleEvent("html5_form-original");
		})();
  </script>
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