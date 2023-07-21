<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>ClickTale | Testing Portal | logical Forms 1 </title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />

<link rel="stylesheet" media="all" href="style/type/folks.css" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/formval.js"></script> 
<script type="text/javascript" src="style/js/scripts.js"></script>
 <script type="text/javascript">
        // Only script specific to this form goes here.
        // General-purpose routines are in a separate file.


       function CheckSubmit() {

            var queryString = window.location.search;
            var params = queryString.split('&');
            // if (params.length > 1 && formSubmit(form) ) 

            if (params.length > 1) {

                if (params[0].split('=')[1] == 'tomer') {

                    //if (formSubmit(form)
                    document.getElementById("myDivEl").innerHTML = "FORM was not Successefully Submitted";
					 if (typeof ClickTaleRegisterFormSubmitFailure == "function")
							ClickTaleRegisterFormSubmitFailure();

                }
                else {
                    document.getElementById("myDivEl").innerHTML = params[0].split('=')[1] + "----FORM was Successefully Submitted";
					if (typeof ClickTaleRegisterFormSubmitSuccess == "function")
							ClickTaleRegisterFormSubmitSuccess();
                }


              
            }  
	}
        ;



    
        


</script>

<style type="text/css">
form {
    width: 1000px;
}

.field {
    overflow: auto;
    padding: 0 0 0.5em;
}

span,
.checkbox p,
.radio p {
    padding: 0.2em 0 0;
    float: left;
    width: 180px;
}

input,
select {
    float: left;
    width: 160px;
}

select {
    width: 163px;
}

.error .messages,
.error .messages li {
    float: left;
    margin: 0;
    padding: 0;
    list-style: none;
}

.error .messages li {
    padding: 0.1em 0 0 2em;
    color: #b92d23;
}

.error input {
    color: #b92d23;
}

.success {
    background: url(style/images/success_icon.png) 350px 0.2em no-repeat;
}

.error {
    background: url(style/images/error_icon.png) 350px 0.2em no-repeat;
}

fieldset {
    border: none;
}

.checkbox p,
.radio p, 
.checkbox .inputs,
.radio .inputs {
    float: left;
}

.checkbox p,
.radio p {
    padding: 0;
    margin: 0 0 1em;
}

.checkbox .inputs,
.radio .inputs {
    width: 165px;
}

.checkbox .inputs,
.checkbox .inputs li,
.radio .inputs,
.radio .inputs li {
    list-style: none;
    margin: 0 0 1em;
    padding: 0;
}

.checkbox .inputs li,
.radio .inputs li {
    margin: 0 0 0.3em;
}

.checkbox li span,
.checkbox li input,
.radio li span,
.radio li input {
    display: inline;
    float: none;
    width: auto;
}

.button input {
    width: auto;
}

.validate_any {
    position: relative;
}

.validate_any.error {
    padding-top: 2em;
    background-position: 0 0.2em;
}



#terms_block .messages li {
    padding-top: 0.2em;
}

.validate_any .messages {
    position: absolute;
    left: 0;
    top: 0.1em;
}
#wrapper ul {
	padding: 0px;
}
#wrapper ul li {
	
	 background: transparent ;
	padding-left: 30px;
}

.formtab {
    height: 226px;
    width: 729px;
}
.style1 {
    width: 11.6em;
}
</style>
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
		
		
<h1>Form (A-->B), You get page B </h1>

<div id="myDivEl" align="center" style="background-color: #00FFFF"></div>

<div id="ClickTaleDiv" style="display: none;"></div>


 

		
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

<script type="text/javascript">
  CheckSubmit();
</script>
</body>
</html>