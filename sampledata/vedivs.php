<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <meta charset="UTF-8">
        <title>ClickTale | Testing Portal | Visual Editor Testing Page </title>
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
            function doNothing(){
            return false;
            }						 
        </script>
        <style>
            table td
            {
            padding: 0px !important;
            }
            .additional{
            border-color: #7f2600;
            border-width: 3px;
            border-style: solid;
            }
            div.coloredBorder1{
            border-color: #00FF00;
            border-width: 3px;
            border-style: solid;
            border-style: dotted;
            }
            span.coloredBorder2{
            border-color: #FF0000;
            border-width: 3px;
            border-style: solid;
            border-style: dotted;
            }
            li.coloredBorder3{
            border-color: #0000FF;
            border-width: 3px;
            border-style: solid;
            border-style: dotted;
            }
            selection.coloredBorder4{
            border-color: #00FFFF;
            border-width: 3px;
            border-style: solid;
            border-style: dotted;
            }
            article.coloredBorder5{
            border-color: #FF00FF;
            border-width: 3px;
            border-style: solid;
            border-style: dotted;
            }
			div#A {
			background-color:red; width:200px; height:200px; 
			margin-left:auto; margin-right:auto;}
			div#B {
			text-align: center;
			background-color:green; 
			margin-left:auto; margin-right:auto;
			top:10px;position:relative;width:160px;height:160px;}
			span#span1 {
			background-color:blue; width:30px; height:30px; 
			margin-left:auto; margin-right:auto;}
        </style>
    </head>
    <body onload="createDivs()">
        <div  id="container">
            <!-- Begin Header Wrapper -->
            <div  id="page-top">
                <div  id="header-wrapper">
                    <!-- Begin Header -->
                    <div  id="header">
                        <div  id="logo"><a href="index.php"><img src="style/images/logo.png" alt="Delphic" /></a></div>
                        <!-- Logo --> 
                        <!-- Begin Menu -->
                        <div  id="menu-wrapper">
                            <div  id="smoothmenu1" class="ddsmoothmenu">
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
                <div class="content" style="height: 3500px;">
<!------------------------------------------------------------------------------------------>

<h1><u>Visual Editor Testing Page - Multi Div</u></h1>

<script type="text/javascript">
            function createDivs(){
				for (var i = 1, n = 101; i < n; i++) {
					var divTag = document.createElement("div");					
					divTag.id = "div"+i;
					var oldDiv = divTag.id;
					divTag.innerHTML = Date();
					if(i==1){
						document.querySelector(".content").appendChild(divTag);
					}
					else{
					document.getElementById('div'+(i-1)).appendChild(divTag);
					//document.getElementById('div1').appendChild(divTag);
					}
					//document.body.appendChild(divTag);
					oldDiv=divTag.id;
				}
            }						 
        </script>
<!------------------------------------------------------------------------------------------>
		
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