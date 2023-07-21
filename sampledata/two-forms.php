<?php session_start(); ?>
<?php

//include("config.php");

$user_check=$_SESSION['login_user'];
$user_cookie=$_COOKIE['USER'];
if (($user_check) && $user_cookie==$user_check) {
	header("Location: members.php");
}


$error = '';
$count=0;
$user_cookie=$_COOKIE['USER'];
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	// username and password sent from form 

	$myusername=addslashes($_POST['username']); 
	$mypassword=addslashes($_POST['password']); 
	
	$myusername1=addslashes($_POST['username1']); 
	$mypassword1=addslashes($_POST['password1']); 


	if (($myusername=='test') && ($mypassword=='test')) $count=1; 
	if (($myusername1=='test') && ($mypassword1=='test')) $count=2; 

	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1||$count==2)
	{
		$_SESSION["myusername"]=$myusername;
		$_SESSION['login_user']=$myusername;
		setcookie("USER", $myusername);
		header("Location: members.php");

	//header("location: members.php");
	}
	else if (($myusername1=='') || ($mypassword1==''))
	{
		//first form was sent
		$error="Your Login Name or Password is invalid.<br /><b>* try using 'test' for both.</b>";
	}
	else if
	{
		$error="Your Login Name or Password is invalid.<br /><b>* try using 'test' for both.</b>";
	}
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">


<title>ClickTale | Testing Portal</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" media="all" href="style/type/folks.css" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="style/js/jquery.cycle.all.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/scripts.js"></script>
<script type="text/javascript">
$(function() {
			if ($('#sliderholder-cycle').length) {
			// timeouts per slide (in seconds) 
			var timeouts = [150,390,25]; 
			function calculateTimeout(currElement, nextElement, opts, isForward) { 
			    var index = opts.currSlide; 
			    return timeouts[index] * 1000;
			}
			jQuery('#sliderholder-cycle').cycle({
				fx: 'fade',
				pager: '.slidernav',
				prev:    '.sliderprev',
        		next:    '.slidernext',
				speed: 1000,
				timeoutFn: calculateTimeout,
				pagerEvent: 'click',
    			pauseOnPagerHover: true,
    			cleartype: 1
});
			jQuery('#sliderholder-cycle').css("display", "block");
			jQuery('.slidernav').css("display", "block");
			
			}
}); 
</script>

<script>
function Validate(caller){
	
	var requiredFields= $(caller).closest('form').find('input[class="required"]');
	for (var i=0; i<requiredFields.length;i++){
		if(requiredFields[i].value=='')
		return true; // there are empty required fields
	}
	return false;// all required fields are filled
}



$(document).ready(function(){
	if($('#error_text').text().length){
		if (typeof ClickTaleRegisterFormSubmitFailure == 'function'){
 			//Register a Server-Side Validation FAILURE with ClickTale
			ClickTaleRegisterFormSubmitFailure($('#loginForm'));
		}
	}
	if($('#error_text1').text().length){
		if (typeof ClickTaleRegisterFormSubmitFailure == 'function'){
 			//Register a Server-Side Validation FAILURE with ClickTale
			ClickTaleRegisterFormSubmitFailure($('#loginForm1'));
		}
	}
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
  
  <!-- Begin form -->
  <div align="center" style="width:800px;margin-left:150px;">
	 
	  <div id="error_text" style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
	  
	  <div style="width:300px; border: solid 1px #333333; float:left;" >
			<div style="background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>


			<div style="margin:30px">

			<form action="" method="post" name="myForm" id ="loginForm">
				<label>UserName  :</label>
					<input type="text" name="username" class="required" value=<?php echo "'".$user_cookie."'"; ?>/><br /><br />
				<label>Password  :</label>
					<input type="password" name="password" class="box" /><br/><br />
				<input id="loginBtn" type="submit" value="Submit "/><br />
			</form>


			

			<br>
			<br>
			* Client validation: UserName isn't empty.<br><br>
			* Server validation: UserName/Password are right. 
			</div>
		</div>

		<div style="width:300px; border: solid 1px #333333;float:right; " >
			<div style="background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login 1</b></div>

			<div style="margin:30px">
				
				<div id="error_text1" style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error1; ?></div>
				<form action="" method="post" name="myForm1" id ="loginForm1" >
					<label>UserName  :</label>
						<input type="text" name="username1" class="box" value=<?php echo "'".$user_cookie."'"; ?>/><br /><br />
					<label>Password  :</label>
						<input type="password" name="password1" class="box" /><br/><br />
					<input id="loginBtn1" type="submit" value="Submit "/><br />
				</form>

				<br>
				<br>
				* Client validation: UserName isn't empty.<br><br>
				* Server validation: UserName/Password are right. 
			</div>
		</div>
</div>
  <!-- End form -->
  
  <!-- Begin Wrapper -->
  
  
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

<!--========================================================================================-->
<!--================== SCRIPTs =============================================================-->
<!--========================================================================================-->
<!--========================================================================================-->
<script type="text/javascript">

$(document).ready(function() {	
 /// -------------------------scripts of Nir ------------------------------ //
  //Get all the LI from the #tabMenu UL
  $('#tab-menu > li').click(function(){
    //remove the selected class from all LI    
    $('#tab-menu > li').removeClass('selected');
    //Reassign the LI
    $(this).addClass('selected');
    //Hide all the DIV in .tab-content
    $('.tab-content div.tab').slideUp('slow');
    //Look for the right DIV in boxBody according to the Navigation UL index, therefore, the arrangement is very important.
    $('.tab-content div.tab:eq(' + $('#tab-menu > li').index(this) + ')').slideDown('slow');
  }).mouseover(function() {
    //Add and remove class, Personally I dont think this is the right way to do it, anyone please suggest    
    $(this).addClass('mouseover');
    $(this).removeClass('mouseout');   
  }).mouseout(function() {
    //Add and remove class
    $(this).addClass('mouseout');
    $(this).removeClass('mouseover');    
  });
 /// -------------------------END of scripts of Nir ------------------------------ // 
 
  
 //----------Clicktale  form analytics API ---------------
 $('input[type="submit"]').click(function (e) {
	
		// Validation:
		if(Validate(e.target)) {
			e.preventDefault();
			
			// ClickTale API (not sent, failure):										
			if (typeof ClickTaleRegisterFormSubmitFailure == 'function'){
				//Register a Client-Side Validation FAILURE with ClickTale
				setTimeout(function(){ClickTaleRegisterFormSubmitNotSent(e.target.form)},10);
				setTimeout(function(){ClickTaleRegisterFormSubmitFailure(e.target.form)},10)
			}
			return;				
		}
		
		// Arrive here if Submittion succeded:
		$(e.target.form).submit();		
	}); 
  
   
});


$(function() {
            var offset = $("#tab-menu").offset();
            var topPadding = 15;
            $(window).scroll(function() {
                if ($(window).scrollTop() > offset.top) {
                    $("#tab-menu").stop().animate({
                        marginTop: $(window).scrollTop() - offset.top + topPadding
                    });
                } else {
                    $("#tab-menu").stop().animate({
                        marginTop: 0
                    });
                };
            });
        });
  


</script>

  
<?php 
	include 'ct_bottom.php'
  ?>

</body>
</html>