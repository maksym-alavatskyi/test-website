<?php
//include('config.php');
session_start();
$user_check=$_SESSION['login_user'];
$user_cookie=$_COOKIE['USER'];

//$ses_sql=mysql_query("select username from admin where username='$user_check' ");

//$row=mysql_fetch_array($ses_sql);


if ($user_cookie!=$user_check) {
	header("Location: login.php");
} else {
	$login_session=$user_check;
}

if(!isset($login_session))
{

header("Location: login.php");
}
?>