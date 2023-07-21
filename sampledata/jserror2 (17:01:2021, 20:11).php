<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>ClickTale | Testing Portal | Js Errors Page </title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" media="all" href="style/type/folks.css" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/scripts.js"></script>
<script src="js/externalError.js" />

function myErrors(myE) {
	console.log(myE);
	throw "Error!!! " + myE.id
}

function typeError(elem) {
	Math.bla();
}

function referenceError(elem) {
	const foo = bar;
}
function rangeError() {
	new Array(50000000000);
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
			<div id="errorBtns" style="text-align: center;">
				<h1>My Errors</h1>
				<div class="errBtnDiv">
					<a onclick="myErrors(this)" id="btn1" class="linkBtn">button1</a>
				</div>
				<div class="errBtnDiv">
					<a onclick="myErrors(this)" id="btn2" class="linkBtn">button2</a>
				</div>
				<div  class="errBtnDiv">
					<a onclick="myErrors(this)" id="btn3" class="linkBtn">button3</a>
				</div>
				<div  class="errBtnDiv">
					<a onclick="myErrors(this)" id="btn4" class="linkBtn">button4</a>
				</div>
				<div  class="errBtnDiv">
					<a onclick="myErrors(this)" id="btn5" class="linkBtn">button5</a>
				</div>
				<div  class="errBtnDiv">
					<a onclick="myErrors(this)" id="btn6" class="linkBtn">button6</a>
				</div>
				<div class="errTypesDiv">
					<div  class="errBtnDiv">
						<a onclick="typeError(this)" id="btn7" class="linkBtn">Type Error</a>
					</div>
					<div  class="errBtnDiv">
						<a onclick="referenceError(this)" id="btn8" class="linkBtn">Reference Error</a>
					</div>
					<div  class="errBtnDiv">
						<a onclick="rangeError(this)" id="btn9" class="linkBtn">Range Error</a>
					</div>
					<div  class="errBtnDiv">
						<a onclick="externalError()" id="btn10" class="linkBtn">Reference Error from a file</a>
					</div>
					<div  class="errBtnDiv">
						<a onclick="notExist()" id="btn11" class="linkBtn">no func</a>
					</div>
				</div>
			</div>
		</div>

    </div>
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

<?php
	include 'ct_bottom.php'
  ?>

</body>
</html>
