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

<form action="" method="post" name="myForm" name ="loginForm" onsubmit="return validateForm()">
<label>UserName  :</label><input type="text" name="username" class="box" value=<?php echo "'".$user_cookie."'"; ?>/><br /><br />
<label>Password  :</label><input type="password" name="password" class="box" /><br/><br />
<input name="loginBtn" type="submit" value="Submit "/><br />
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


  
<?php 
	include 'ct_bottom.php'
  ?>

</body>
</html>