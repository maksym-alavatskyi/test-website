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
    <body>
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

<h1><u>Visual Editor Testing Page</u></h1>

<div id="background"></div><br><br>
<br><br><h2><a title="Home"><font size="5">1.Image inside a link:</font></a></h2>

<header id="main"><a href="/visualeditor.php" id="homelogo"><img src="style/images/simple-start-logo-bupa.png" alt="B image"></a> 


<br><br><h2><a title="Home"><font size="5">2.Image inside a link:</font></a></h2>


<div id="corporateLogo">
        <a href="/find-a-healthier-you"><img id="clogopath" alt="Find a healthier you" src="style/images/transparent1.png"/>
        </a>
    </div>
	
	
<br><br><h2><a title="Home"><font size="5">3.Image inside a span:</font></a></h2>
	
	<div class="icon"><span style="padding: 10px;display:block">
	<img src="style/images/simple-start-img-promo.png" alt="dental icon">
	</span>
	</div>
	
<br><br><h2><a title="Home"><font size="5">4.Events that inside span:</font></a></h2><br><br>	


<span> <img id="clogopath" alt="Find a healthier you" src="style/images/like.jpg"/></span>
<br><br><br><br>


<br><br><h2><a title="Home"><font size="5">5.Events inside a section:</font></a></h2>	

<div id="content1"><section id="homesection" style="height: 190px">
<div class="inner"><a class="promo-link desktop" href="#promo"> <img src="style/images/simple-start-starburst.png" class="callout" alt="Get Bupa and choose 1 of 3 gifts"> </a>
</section>

<br><br><h2><a title="Home">6.Elements inside a div:</a></h2>

<div id="container" style="width: 900px; overflow: auto; margin:0px; color:#d42727">
    <img src="style/images/art/portfolio3-th.jpg" alt="" />
</div>

<script type="text/javascript">
(function() {

var img = document.getElementById('container').firstChild;
img.onload = function() {
    if(img.height > img.width) {
        img.height = '100%';
        img.width = 'auto';
    }
};

}());
</script>

<br><br><br><br><br><br><br><br><br><br><br><br>
<h2><a title="Home">7.Span inside a span:</a></h2>
<br><br>
<span id="" class="selectboxit formidable-ajust-widths selectboxit-enabled selectboxit-btn" name="" tabindex="0" unselectable="on"><span class="selectboxit-option-icon-container">
<i id="" class="selectboxit-default-icon selectboxit-option-icon selectboxit-container" unselectable="on"></i>
</span><span id="" class="selectboxit-text" unselectable="on" data-val="/visualeditor.php" aria-live="polite" style="max-width: 200px; font-size: 20pt;">2 Spans</span>
<span id="" class="selectboxit-arrow-container" unselectable="on"id="span3" name="span3" style="background-color:blue;margin-left:auto; margin-right:auto;display:inline-block;top:10px;left:10px;position:relative;width:180px;height:180px">
<i id="" class="selectboxit-arrow selectboxit-default-arrow" unselectable="on"></i></span>
</span>



<br><br><br><br><br><br>
<h2><a title="Home">8.Input inside a span inside div:</a></h2>
<br><br>
<div class="choose-group" id="boilerStatus" title="Boiler Status">               
                <div class="boiler-yes genericRadioGroup radio">      
    <p class="cb normal-radio-style">
    <span class="button-radio">
    <input type="radio" value="Yes" id="describeOptionYes" name="boilerStatus" aria-required="true">
    </span>
     <label for="describeOptionYes">               
            Yes                             
    </label>    
</p>
</div>                
                <div class="genericRadioGroup radio boiler-no">
    <p class="cb normal-radio-style">
    <span class="button-radio">
    <input type="radio" value="No" id="describeOptionNo" name="boilerStatus" aria-required="true">
    </span>
     <label for="describeOptionNo">
            No         
    </label>    
</p>
</div>
            </div>
			
<br><br><br><br><br><br>
<h2><a title="Home">9.Div inside a div:</a></h2>
<br><br>	
<div>
<div id="myDiv" name="myDiv" title="Example Div Element" style="color: #0900C4; font: Helvetica 12pt;border: 10px solid black;"> 
</div>
</div>
	
<br><br><br><br><br><br>
<h2><a title="Home">10.Image inside 3 Divs:</a></h2>
<br><br>		
<div id="telus-beta-info" class="footer-group full-screen-bleed">
    <div class="grid">
      
      <div class="footer-critter">
        <img alt="Tell us what you think" src="style/images/bunny-alt.png">
      </div>
      </div
	 </div>
	 </div>
	 
<br><br><br><br><br><br>
<h2><a title="Home">11.Div-Span-Div and inside Image and Div:</a></h2>
<br><br>		
	 
<div id="A" name="A" title="Example Div Element2" ">
<span id="span1" name="span1" style="background-color:blue;margin-left:auto; margin-right:auto;display:inline-block;top:10px;left:10px;position:relative;width:180px;height:180px">
<div id="B" name="B" title="Example Div Element3" >

<img src="style/images/cave.jpg" style="margin-top: 32px;" class="callout" alt="Cave"}>
</img>

<div id="C" name="C" title="Example Div Element4"">
</div>

</div>
</span>
<div>
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