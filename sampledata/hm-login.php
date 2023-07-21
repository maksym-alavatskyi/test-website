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



/* $sql="SELECT id FROM admin WHERE username='$myusername' and passcode='$mypassword'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$active=$row['active'];

$count=mysql_num_rows($result); */
if (($myusername=='test') && ($mypassword=='test')) $count=1; 

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
	$_SESSION["myusername"]=$myusername;
	$_SESSION['login_user']=$myusername;
	setcookie("USER", $myusername);
    header("Location: members.php");

//header("location: members.php");
}
else 
{
$error="Your Login Name or Password is invalid.<br /><b>* try using 'test' for both.</b>";
}
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">


<title>ClickTale | Testing Portal | HM - login</title>
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
function validateForm() {
    var x = document.forms["myForm"]["username"].value;
    if (x==null || x=="") {
        $('#error_text').text("User should be filled out");
		//Make sure ClickTale Form Submission API is loaded
		
        return false;
    }
	return true;
}
$(document).ready(function(){
	if($('#error_text').text().length){
		if (typeof ClickTaleRegisterFormSubmitFailure == 'function'){
 			//Register a Server-Side Validation FAILURE with ClickTale
			ClickTaleRegisterFormSubmitFailure();
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
  <div align="center">
  <img src="http://www.wpcells.com/wp-content/uploads/2012/05/Members-Only-300x300.jpg" />
  <div style="width:300px; border: solid 1px #333333; " align="left">
<div style="background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>


<div style="margin:30px">

<form action="" method="post" name="myForm" id ="loginForm" onsubmit="return validateForm()">
<label>UserName  :</label><input type="text" name="username" class="box" value=<?php echo "'".$user_cookie."'"; ?>/><br /><br />
<label>Password  :</label><input type="password" name="password" class="box" /><br/><br />
<input id="loginBtn" type="submit" value="Submit "/><br />
</form>


<div id="error_text" style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

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
 $('#loginBtn').click(function (e) {
	
		// Validation:
		if(!validateForm()) {
			e.preventDefault();
			
			// ClickTale API (not sent, failure):										
			if (typeof ClickTaleRegisterFormSubmitFailure == 'function'){
				//Register a Client-Side Validation FAILURE with ClickTale
				setTimeout(function(){ClickTaleRegisterFormSubmitNotSent($('#loginForm')[0])},10);
				setTimeout(function(){ClickTaleRegisterFormSubmitFailure($('#loginForm')[0])},10)
			}
			return;				
		}
		
		// Arrive here if Submittion succeded:
		$('#loginForm').submit();		
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