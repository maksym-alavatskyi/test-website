<?php
	
	$error = '';
	$count=0;
	
	//$mysqli = new mysqli('localhost', 'my_user', 'my_password', 'my_db');
	//$db_connection = new mysqli('fdb4.biz.nf', '1376511_data', 'data110883', '1376511_data'); // anca-test.co.nf
//	$db_connection = new mysqli('localhost', 'ctqatest_user', 'g3e1FhTnuP', 'ctqatest_data');  //--- testing portal
	
	
//	if ($mysqli->connect_error) {
//		die('unable to connect (' . $mysqli->connect_errno . ') '
//				. $mysqli->connect_error);
//		}
	//let's start our session, so we have access to stored data
    session_start();
 
	//let's create the query
	// $insert_query = "INSERT INTO users (
    //             firstName,
    //             lastName,
    //             addressLine1,
    //             addressLine2,
    //             building,
    //             city,
	// 			username,
	// 			password
    //                         ) VALUES (
    //             ' " . $_SESSION['firstName'] . " ',
    //             ' " . $_SESSION['lastName'] . " ',
    //             ' " . $_SESSION['address1'] . " ',
    //             ' " . $_SESSION['address2'] . " ',
    //             ' " . $_SESSION['building'] . " ',
    //             ' " . $_SESSION['city'] . " ',
    //             ' " . $_POST['username'] . " ',
	// 			' " . $_POST['password'] . " ')";
 
 
 //echo "query ".$insert_query;
 
//let's run the query
// mysqli_query($db_connection, $insert_query);
// echo  $_SESSION['firstName'] . ",
                // " . $_SESSION['lastName'] . ",
                // " . $_SESSION['address1'] . ",
                // " . $_SESSION['address2'] . ",
                // " . $_SESSION['building'] . ",
                // " . $_SESSION['city']. ",
                // " . $_POST['username'] . ",
				// " . $_POST['password'] ;

// $db_connection->close();

// Validation:
$myusername = $_POST['username'];
$mypassword = $_POST['password'];


if (($myusername!='test') || ($mypassword !='test')) 
	{  
		$error= $myusername . " ***" .$mypassword;
		header( "Location: step3.php" );
	}
	

   
 
?>
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
		<meta charset="UTF-8">
		<title>ClickTale | Testing Portal | Registration - Finished </title>
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

<!---------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------->		
<!---------------------------------------------------------------------------------------------------------------------->


<!---------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------->		
<!---------------------------------------------------------------------------------------------------------------------->

		
		
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
    <div class="content">
	<div id="error_text" style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
		<h2>Thank you for registering on our portal</h2>
    </div>
   

   
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

<!-- no scriprs here -->

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