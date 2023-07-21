<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="style.css" media="all" />

<link rel="stylesheet" media="all" href="style/type/folks.css" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/scripts.js"></script>

<script type="text/javascript">

	var ClickTaleSSL = 1;
	var ClickTaleIncludedOnDOMReady = true;
	window.ClickTaleSettings = {
	XHRWrapper: {
	Enable: true
	},
	Compression: {
	Method: "deflate"
	},
	Transport: {
	Interval: function () {
	return 200;
	},
	MaxConcurrentRequests: 5
	}
	};
	
</script>
	
	
	
		<title>Logical Forms with Dynamic Fields</title>
		
<script type="text/javascript">

	   var fieldsCounter = 0;
	   
        function mySubmit() {
            if (window.console && console.log) { console.log("form has been submitted!!!!!"); }
        }


        function addFields(container) {
            // Number of inputs to create
            var number = 1;
            // Container <div> where dynamic content will be placed
            var container = document.getElementById(container);

            var rnd = Math.floor(Math.random() * 1000) + 1;

            // Append a node with a random text
            container.appendChild(document.createTextNode("Member" + rnd));
            // Create an <input> element, set its type and name attributes
            var input = document.createElement("input");
            input.type = "text";
            input.name = "member" + rnd;
            container.appendChild(input);
            // Append a line break 
            container.appendChild(document.createElement("br"));

        }


        function addFields2(container,hasDifName) {
            // Number of inputs to create
            var number = 1;
            // Container <div> where dynamic content will be placed
            var container = document.getElementById(container);



            // Append a node with a random text
            container.appendChild(document.createTextNode("Member" + ++fieldsCounter));
            // Create an <input> element, set its type and name attributes
            var input = document.createElement("input");
            input.type = "text";
			
            (hasDifName) ? input.name = "member" + fieldsCounter : input.name = "member";
			
            container.appendChild(input);
            // Append a line break 
            container.appendChild(document.createElement("br"));

            //add clicktale event
            ClickTaleEvent("eventCount");
			
        }




        function getUrlVars() {
            var vars = {};
            var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
                vars[key] = value;
            });
            return vars;
        }

        function upload() {
            window.ClickTaleIncludedOnDomReady = true;
            ClickTaleUploadPage('<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">', '</html>');
        }


        pid = getUrlVars()["pid"];
        partition = getUrlVars()["p"];
		
		
	
    </script>
<style type="text/css">


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
		
		<h1>Logical Forms with Dynamic Fields</h1>
		<div id="divbody">
        <!-- ClickTale Top part -->
        <script type="text/javascript">
            var WRInitTime = (new Date()).getTime();
        </script>
        <!-- ClickTale end of Top part -->
        <button id="addInput" onclick="addFields2('d2',true); ">
            add input to logical form 1
        </button>
		<button id="addInput" onclick="addFields2('d2',false); ">
            add input to logical form 1 (with same name attribute)
        </button>
        <button id="ajax_btn">
            add input to logical form 1 via Ajax
        </button>
        <button id="addInput2" onclick="addFields2('d3',true); ">
            add input to logical form 2
        </button>
        <button id="changeVisability" onclick="VisibilityChange()">
            change Visability</button>
        <button id="changeVisability" onclick="DisplayChange()">
            change Display</button>
        <form name="frmBody" id="frmBody">
        <br>
        <br>
        <div id="d1">
            <br>
            <div id="d2">
                <fieldset>
                    <legend>logical form 1:</legend>
                    <input type="text"  id="frm1txt1" name="frm1txt1"/>
                    <input type="text"  id="frm1txt2" name="frm1txt2"/>
                    <input type="text"  id="frm1txt3" name="frm1txt3"/>
                    <input type="text"  id="frm1txt4" name="frm1txt4"/>
                </fieldset>
            </div>
            <br>
            <div id="d3">
                <fieldset>
                    <legend>logical form 2:</legend>
                    <input type="text" id="frm2txt1" name="frm2txt1" />
                    <input type="text" id="frm2txt2" name="frm2txt2" />
                    <input type="text" id="frm2txt3" name="frm2txt3" />
                    <input type="text" id="frm2txt4" name="frm2txt4" style="display: block" />
                </fieldset>
            </div>
            <br>
            <input id="r1" type="radio" name="formSelector" value="form1" checked>form1<br>
            <input id="r2" type="radio" name="formSelector" value="form2">form2<br>
        </div>
        </form>
        <div id="d4">
            <!--<img src="submit.png" id="imgSubmit" onclick="mySubmit()">-->
            <button id="btn111" onclick="mySubmit()">
                click to submit
            </button>
        </div>
        
        <script type="text/javascript">
            try {
				var disp = document.getElementById('frm2txt4').style.display;
				function DisplayChange() {
					if (disp == 'block') {
						document.getElementById('frm2txt4').style.display = 'none';
						disp = 'none';
					} else {
						document.getElementById('frm2txt4').style.display = 'block';
						disp = 'block';
					}
				}
	
				var visa = document.getElementById('frm1txt4').style.visibility;
				function VisibilityChange() {
					if (visa == 'visible') {
						document.getElementById('frm1txt4').style.visibility = 'hidden';
						visa = 'hidden'
					} else {
						document.getElementById('frm1txt4').style.visibility = 'visible';
						visa = 'visible'
					}
				}
			}
			catch(e) {console.log(e)}

            $("#ajax_btn").click(function () {
                $.ajax({
                    url: "ajax_content.inc.php",
                    dataType: "html",
                    success: function (response) {
                        // $('#ajax_content').empty();
                        $(response).appendTo('#d2');
						topFormEid = ClickTaleLogicalForm(topFormEid, document.getElementById('d2').getElementsByTagName('input'), [document.getElementById('btn111')]);


                    }
                })
            })
	
	var topFormEid = "top form";
    var bottomFormEid = "bottom form";
	
	var PCC = function () {

    
 


    jQuery("#addInput").bind("click", function () {
        if (typeof ClickTaleExec == 'function') {
            ClickTaleExec("jQuery('#addInput').click()");
			ClickTaleLogicalForm(topFormEid, document.getElementById("d2").getElementsByTagName("input"), [document.getElementById("btn111")]);
        }
    });
	jQuery("#addInput2").bind("click", function () {
        if (typeof ClickTaleExec == 'function') {
            ClickTaleExec("jQuery('#addInput2').click()");
			bottomFormEid = ClickTaleLogicalForm(bottomFormEid, document.getElementById('d3').getElementsByTagName('input'), [document.getElementById('btn111')]);
        }
    });

    ClickTaleFormDisableAll();

    // defining initial logical top form 
    topFormEid = ClickTaleLogicalForm(topFormEid, document.getElementById("d2").getElementsByTagName("input"), [document.getElementById("btn111")]);

    // defining initial logical bottom form 
    bottomFormEid = ClickTaleLogicalForm(bottomFormEid, document.getElementById("d3").getElementsByTagName("input"), [document.getElementById("btn111")]);

    if (typeof mySubmit == "function") {
        var oldMySubmit = mySubmit;
        mySubmit = function () {
            oldMySubmit.call(arguments, this);
            var r1_checked = document.getElementById('r1').checked;
            if (r1_checked) {

                // redefine logical top form 
                //topFormEid = ClickTaleLogicalForm(topFormEid, document.getElementById("d2").getElementsByTagName("input"), [document.getElementById("btn111")]);

                if (typeof ClickTaleRegisterFormSubmit == "function") {
                    ClickTaleRegisterFormSubmit(topFormEid);
                }

                if (typeof ClickTaleRegisterFormSubmitSent == "function") {
                    ClickTaleRegisterFormSubmitSent(topFormEid);
                }
                if (typeof ClickTaleRegisterFormSubmitSuccess == "function") {
                    ClickTaleRegisterFormSubmitSuccess(topFormEid);
                }

            } else {

                // redefine logical bottom form 
               // bottomFormEid = ClickTaleLogicalForm(bottomFormEid, document.getElementById("d3").getElementsByTagName("input"), [document.getElementById("btn111")]);

                if (typeof ClickTaleRegisterFormSubmit == "function") {
                    ClickTaleRegisterFormSubmit(bottomFormEid);
                }

                if (typeof ClickTaleRegisterFormSubmitSent == "function") {
                    ClickTaleRegisterFormSubmitSent(bottomFormEid);
                }
                if (typeof ClickTaleRegisterFormSubmitSuccess == "function") {
                    ClickTaleRegisterFormSubmitSuccess(bottomFormEid);
                }
            }
        }
    }
}
//---------------------------------------------------------on record ready-----------------------------------------------
onRecordReady = function (handler) {
    window['okToStartOn2'] = 0;

    jQuery(document).ready(function () {
        if (window.console && console.log) { console.log("DOM Ready"); }
        allReady();
    });

    function allReady() {
        if (2 == ++window['okToStartOn2']) {
            if (window.console && console.log) { console.log("Code Is Running..."); }
            handler();
        }
    }
    if (typeof window['ClickTaleIsRecording'] !== 'undefined' && window['ClickTaleIsRecording']() === true) {
        if (window.console && console.log) { console.log("ClickTale Has Begun To Record"); }
        allReady();
    }
    else {
        window['ClickTaleOnRecording'] = function () {
            if (window.console && console.log) { console.log("ClickTale Has Begun To Record"); }
            allReady();
        }
    }
}
onRecordReady(PCC);
	
        </script>
        
    </div>
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