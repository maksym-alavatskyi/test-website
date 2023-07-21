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
		
		

<h1 align="center">FORM A to page B with API </h1>
<p>If first name = tomer  form can't be submitted succesfully(server side).</p>

<script type="text/javascript">
    // Only script specific to this form goes here.
    // General-purpose routines are in a separate file.
    function validateOnSubmit() {
        var elem;
        var errs = 0;
        // execute all element validations in reverse order, so focus gets
        // set to the first one in error.
        if (!validateTelnr(document.forms.demo.telnr, 'inf_telnr', true)) errs += 1;
        if (!validateAge(document.forms.demo.age, 'inf_age', true)) errs += 1;
        if (!validateEmail(document.forms.demo.email, 'inf_email', true)) errs += 1;
        if (!validatePresent(document.forms.demo.from, 'inf_from')) errs += 1;


        if (errs > 1) alert('There are fields which need correction before sending');
        if (errs == 1) alert('There is a field which needs correction before sending');

        return (errs == 0);
    };

  



    function formSubmit(form) {
        // ct: submit attempt
        var valid = validateOnSubmit();
        // ct: valid succ/fail
        if (valid) {
            // ct: submit sent
            ClickTaleRegisterFormSubmitSent(form);
            return true;
        } else {
            // ct: submit not sent
            ClickTaleRegisterFormSubmitNotSent(form);
            return false;
        }
    }


</script>
 




   
     <br /><br />

<form name="demo" onsubmit="return formSubmit(this)" action="API-form-AB-success.php">
<table class="formtab" summary="Demonstration form" bgcolor="#CCFFFF" 
    frame="border">
  <tr>
    <td bgcolor="#FF5050" class="style1">
        <label for="from">Your name:</label></td>
    <td bgcolor="#FF5050"><input type="text" name ="from" id="from" size="35" maxlength="50" 
         onchange="validatePresent(this, 'inf_from');" /></td>
    <td id="inf_from" bgcolor="#FF5050">Required</td>
  </tr>

  <tr>
    <td bgcolor="#FF5050" class="style1"><label for="email">Your e-mail address:</label></td>
    <td bgcolor="#FF5050"><input type="text" name="email" id="email" size="35"  maxlength="50" 
         onchange="validateEmail(this, 'inf_email', true);"/></td>
    <td id="inf_email" bgcolor="#FF5050">Required</td>
  </tr>

  <tr>
    <td bgcolor="#FF5050" class="style1"><label for="age">Your age (years):</label></td>
    <td bgcolor="#FF5050"><input type="text" name="age" id="age" size="35" maxlength="5" 
         onchange="validateAge(this, 'inf_age', true);"/></td>
    <td id="inf_age" bgcolor="#FF5050">&nbsp;</td>
  </tr>

<!-- Note: the element to receive error messages must contain some data (for most, 
     if not all, browsers). A &nbsp; is sufficent. -->

  <tr>
    <td bgcolor="#FF5050" class="style1"><label for="telnr">Your telephone number:</label></td>
    <td bgcolor="#FF5050"><input  type="text" name="telnr" id="telnr" size="35"  maxlength="25" 
         onchange="validateTelnr(this, 'inf_telnr', true);"/></td>
    <td id="inf_telnr" bgcolor="#FF5050">Required. You can use spaces or hyphens if you wish.</td>
  </tr>

  <tr>
    <td bgcolor="#FF5050" class="style1">&nbsp;</td>
    <td bgcolor="#FF5050"><input type="submit" name="Submit" value="Send" style="width: 214px"/></td>
    <td bgcolor="#FF5050">&nbsp;</td>
  </tr>

</table>
</form>





		
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