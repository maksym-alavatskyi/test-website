<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>ClickTale | Testing Portal | ShadowDOM3 </title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" media="all" href="style/type/folks.css" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
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
      <h2>Shadow8</h2>
      <p>bla </p>
	  <div id="shadowHost">Don't display this</div>
	  <div><h3>Not Shadow DOM</h3></div>
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

  <!-- bottom -->
<?php
	include 'ct_bottom.php'
  ?>

	<script type="text/javascript">
	window.onload = function() {
      $(function() {
				if (typeof ClickTale == "function"){

					ClickTaleEvent("page-tabs-toggles");
				}
			}) ;
	}
  </script>
  <script>
	var shadowHost = document.querySelector('#shadowHost');
	var root = shadowHost.attachShadow( { mode: 'open' } );
	root.innerHTML = `<style>h3{ color: yellow; } .myButton {	background-color:#44c767; border-radius:28px; border:1px solid #18ab29;	display:inline-block;
					cursor:pointer; color:#ffffff;	font-family:Arial; font-size:17px; padding:16px 31px; text-decoration:none;	text-shadow:0px 1px 0px #2f6627;}
          .content{ padding: 5px; background-color:#f0f0f0; }
          </style>` +
					 `<h3>Shadow DOM</h3>`+
					 `<p>
            <a href="shadow1.php" class="myButton" id="button1">Click Me!</a>
            <div>


            </div>
           </p>`+
					 `<div id="shadowHost"></div>` +
           `<div class="content">
              <p> wow </p>
              <p>Morbi leo mi, nonummy eget, tristique non, rhoncus non, leo. Nullam faucibus mi quis velit. Integer in sapien. Fusce tellus odio, dapibus id, fermentum quis, suscipit id, erat. Fusce aliquam vestibulum ipsum. Aliquam erat volutpat. Pellentesque sapien. Cras elementum. Nulla pulvinar eleifend sem. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque porta. Vivamus porttitor turpis ac leo.</p>

              <p>Maecenas ipsum velit, consectetuer eu, lobortis ut, dictum at, dui. In rutrum. Sed ac dolor sit amet purus malesuada congue. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Suspendisse sagittis ultrices augue. Mauris metus. Nunc dapibus tortor vel mi dapibus sollicitudin. Etiam posuere lacus quis dolor. Praesent id justo in neque elementum ultrices. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. In convallis. Fusce suscipit libero eget elit. Praesent vitae arcu tempor neque lacinia pretium. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus.</p>

              <p>Aenean placerat. In vulputate urna eu arcu. Aliquam erat volutpat. Suspendisse potenti. Morbi mattis felis at nunc. Duis viverra diam non justo. In nisl. Nullam sit amet magna in magna gravida vehicula. Mauris tincidunt sem sed arcu. Nunc posuere. Nullam lectus justo, vulputate eget, mollis sed, tempor sed, magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam neque. Curabitur ligula sapien, pulvinar a, vestibulum quis, facilisis vel, sapien. Nullam eget nisl. Donec vitae arcu.</p>

              <p>Etiam posuere quam ac quam. Maecenas aliquet accumsan leo. Nullam dapibus fermentum ipsum. Etiam quis quam. Integer lacinia. Nulla est. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Integer vulputate sem a nibh rutrum consequat. Maecenas lorem. Pellentesque pretium lectus id turpis. Etiam sapien elit, consequat eget, tristique non, venenatis quis, ante. Fusce wisi. Phasellus faucibus molestie nisl. Fusce eget urna. Curabitur vitae diam non enim vestibulum interdum. Nulla quis diam. Ut tempus purus at lorem.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            </div>`;
            var host2 = root.querySelector('#shadowHost');
            var root2 = host2.attachShadow( { mode: 'open' } );
            root2.innerHTML = `<style>h3{ color: red; } .myButton {	background-color:#black; border-radius:28px; border:1px solid #18ab29;	display:inline-block;
          					cursor:pointer; color:red;	font-family:Arial; font-size:17px; padding:16px 31px; text-decoration:none;	text-shadow:0px 1px 0px #2f6627;}
                    .content{ padding: 5px; background-color:#f0f0f0; }
                    </style>` +
          					 `<h3>Shadow DOM2</h3>` +
          					 `<p>
                      <a href="shadow2.php" class="myButton" id="button2">Click Me2!</a>
                    </p>
                    <div id="shadowHost"></div>`;
            var host3 = root2.querySelector('#shadowHost');
            var root3 = host3.attachShadow( { mode: 'open' } );
            root3.innerHTML = `<style>h3{ color: blue; } .myButton {	background-color:#black; border-radius:28px; border:1px solid #18ab29;	display:inline-block;
          					cursor:pointer; color:red;	font-family:Arial; font-size:17px; padding:16px 31px; text-decoration:none;	text-shadow:0px 1px 0px #2f6627;}
                    .content{ padding: 5px; background-color:#f0f0f0; }
                    </style>` +
          					 `<h3>Shadow DOM3</h3>` +
          					 `<p>
                      <a href="shadow2.php" id="buttonShadow" class="myButton3">Click Me3!</a>
                    </p>`;

	console.log(root);
	console.log(shadowHost);
	console.log("+++++++++");
	console.log(shadowHost.shadowRoot);
	console.log("+++++++++");
  </script>
</body>
</html>
