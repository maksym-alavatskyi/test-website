
<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <meta charset="UTF-8">
    <title>ClickTale | Testing Portal | logical Forms 1</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />

    <link rel="stylesheet" media="all" href="style/type/folks.css" />
    <!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
    <script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
    <script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
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
            background: transparent;
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
                    <div id="logo">
                        <a href="index.php">
                            <img src="style/images/logo.png" alt="Delphic" />
                        </a>
                    </div>
                    <!-- Logo -->
                    <!-- Begin Menu -->
                    <div id="menu-wrapper">
                        <div id="smoothmenu1" class="ddsmoothmenu">
                            
<!-- ClickTale Top part -->
<script type="text/javascript">
    var WRInitTime = (new Date()).getTime();
</script>
<!-- ClickTale end of Top part -->

<ul>
    <li style="border-radius: 50%; border: 1px solid black; width: 12px; height: 12px; padding: 2px"><a style="padding-left: 4px" href="qa_index.php" title="Index">i</a>
        
    </li>

    <!----- Home ------------------------------------------>
    <li><a href="index.php">Home</a>
        <ul>
            <li><a href="index.php">Home 1</a>
            </li>
            <li><a href="index-2.php">Home 2</a>
            </li>
            <li><a href="index-3.php">Home 3</a>
            </li>
            <li><a href="index-4.php">Home 4</a>
            </li>
            <li><a href="index_noCT.php">Home (no CT)</a>
            </li>
            <li><a><b>Configurations</b></a>
                <ul>
                    <li><a href="index.php?ct_configName=Default">Default</a>
                    </li>
                    <li><a href="index.php?ct_configName=upload">UploadPage</a>
                    </li>
					<li><a href="index.php?ct_configName=upload_new">UploadPage new method (since 14.18)</a>
                    </li>
					<li><a href="index.php?ct_configName=FetchWithCookies">FetchWithCookies</a>
                    </li>
                    <li><a href="index.php?ct_configName=AllSensitive">AllSensitive</a>
                    </li>
                    <li><a href="index.php?ct_configName=FetchFrom">FetchFrom</a>
                    </li>
                    <li><a href="index.php?ct_configName=cookieDomain">cookieDomain</a>
                    </li>
                    <li><a href="index.php?ct_configName=upload_deflate">upload+deflate with web workers</a>
                    </li>
                    <li><a href="index.php?ct_configName=upload_deflate_withoutWW">upload+deflate without web workers</a>
                    </li>

                </ul>
            </li>
        </ul>
    </li>

    <!----- Events ------------------------------------------>

    <li><a href="page-buttons.php">Events</a>
        <ul>
            <li><a href="page-buttons.php">Buttons with Events</a>
            </li>

        </ul>
    </li>

    <!----- Gallery ------------------------------------------>
    <li><a href="portfolio-1.php">Gallery</a>
        <ul>
            <li><a href="portfolio-1.php">Gallery with Lightbox</a>
            </li>
            <li><a href="portfolio-2.php">Gallery with Details</a>
            </li>
            <li><a href="portfolio-single.php">Single Gallery Post</a>
            </li>
        </ul>
    </li>

    <!----- Features ------------------------------------------>
    <li><a href="page-tabs-toggle.php">Features</a>
        <ul>
            <li><a href="page-tabs-toggle.php">Tabs &amp; Toggle</a>
            </li>
            <li><a href="services.php">Another Tabs</a>
            </li>
            <li><a href="page-carousel.php">Carousel</a>
            </li>

            <li><a href="page-custom.php">Custom Page</a>
            </li>
            <li><a href="ClickTaleIncludeOnWindowReady.php">IncludeOnWindowReady</a>
            </li>
            <li><a href="credit.php">Credit Card Numbers</a>
            </li>
            <li><a><b>Logical Pages</b></a>
                <ul>
                    <li>
                        <a href="LPV.php">Logical Page Views</a>
                    </li>
                    <li>
                        <a href="LogicalPage-Aviad.php">Logical Page - Ajax pulls with state changes</a>
                    </li>
                </ul>
            </li>
            <li><a href="styles.php">Columns &amp; Tables</a>
            </li>
            <li><a><b>Element Addressing</b></a>
                <ul>
                    <li><a href="element_addressing_flat.php">flat</a>
                    </li>
                    <li><a href="element_addressing_id.php">id</a>
                    </li>
                    <li><a href="element_addressing_name.php">name</a>
                    </li>
                    <li><a href="element_addressing_cbs.php">cbs</a>
                    </li>
                    <li><a href="element_addressing_walmart.php">walmart</a>
                    </li>
					<li><a href="eaLinks.php">EA Links (can add addidional DIVs)</a>
                    </li>
		            <li><a href="eaForm.php">EA Form (can add addidional DIVs)</a>
                    </li>
                </ul>
            </li>
            <li><a href="test_web_worker.php">Web Worker</a>
            </li>
            <li><a href="Element_Path_Rewriter.php">Element Path Rewriter Test</a>
            </li>
			<li><a href="large.php">Large Scale Page</a>
            </li>
        </ul>
    </li>

    <!----- Contact ------------------------------------------>
    <li><a href="contact.php">Test forms</a>
        <ul>
            <li><a href="contact.php">Contact</a>
            </li>
            <li><a href="contact2.php">Contact (AJAX)</a>
            </li>



            <li><a href="cbs-form.php">CBS form</a>
            </li>
            <li><a><b>HTML forms</b></a>
                <ul>
                    <li><a href="registration.php">html form</a>
                    </li>
                    <li><a href="registration-ajax.php">html form - loaded with ajax</a>
                    </li>
                </ul>
            </li>
            <li><a><b>HTML5 forms</b></a>
                <ul>
                    <li><a href="html5form1.php">HTML5 form 1</a>
                    </li>
                    <li><a href="html5form1-ver1.php">HTML5 main form variation </a>
                    </li>
                    <li><a href="html5form1-ver2.php">HTML5 small form variation </a>
                    </li>
                    <li><a href="html5form1-verDyn1.php">Show hidden elements </a>
                    </li>
                    <li><a href="html5form1-verDyn2.php">Add new elements </a>
                    </li>
                    <li><a href="html5form2-CtCustomID.php">ClickTaleCustom ID test</a>
                    </li>
                </ul>
            </li>
            <li><a><b>Contact form versions</b></a>
                <ul>
                    <li><a href="contact_ver01.php">version 01</a>
                    </li>
                    <li><a href="contact_ver02.php">version 02</a>
                    </li>
                    <li><a href="contact_ver03.php">version 03</a>
                    </li>
                    <li><a href="contact_ver04.php">version 04</a>
                    </li>
                </ul>
            </li>
            <li><a><b>Contact forms with div variations </b></a>
                <ul>
                    <li><a href="contactdiv.php">form</a>
                    </li>
                    <li><a href="contactdivwrap.php">div wrapping form</a>
                    </li>
                    <li><a href="contactdivbefore.php">div before form</a>
                    </li>
                    <li><a href="contactdivbefore02.php">div before form - version 02</a>
                    </li>
                    <li><a href="contactdivbefore03.php">div before form - version 03</a>
                    </li>

                </ul>
            </li>
            <li><a><b>NEW API Test forms</b></a>
                <ul>
                    <li><a href="API-form-ajax.php">form - ajax</a>
                    </li>
                    <li><a href="API-form-AA.php">form - A to A</a>
                    </li>
                    <li><a href="API-form-AA-2.php">form - A to A (sent with form argument)</a>
                    </li>
                    <li><a href="API-form-AB.php">form - A to B</a>
                    </li>
                </ul>
            </li>
            <li><a><b>Logical forms</b></a>
                <ul>
                    <li><a href="logicalForms1.php">logical Forms 1</a>
                    </li>
                    <li><a href="logicalForms2.php">logical Forms 2</a>
                    </li>
                    <li><a href="logicalForms3.php">logical Forms with Dynamic Fields</a>
                    </li>
                </ul>
            </li>
			<li><a><b>Log in forms</b></a>
                <ul>
                    <li><a href="login.php">Log in - Regular</a>
                    </li>
                    <li><a href="login_divwrap.php">div wrapping Log in form</a>
                    </li>
                    <li><a href="login_divbefore.php">div before Log in form</a>
                    </li>  
					<li><a href="login_elementinside.php">Log in form with element inside</a>
                    </li>  
					<li><a href="login_hiddenelementinside.php">Log in form with hidden element inside</a>
                    </li>  
					<li><a href="login_noidsonlynames.php">Log in form names instead of ids</a>
                    </li>  
					<li><a href="login_noidsnornames.php">Log in form with no ids nor names</a>
                    </li>  
                </ul>
            </li>
			 <li><a><b>Pages for new FA </b></a>
                <ul>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="step1.php">Wizard Form</a></li>
                    <li><a href="calculator.php">Calculator</a></li>
                    <li><a href="withError.php">With Error</a></li>                   
                </ul>
				<li><a><b>Pages for HM</b></a>
                <ul>
                    <li><a href="hm1_v1.php">Short page w/o div</a></li>
                    <li><a href="hm1_v2.php">Short page with div</a></li>
                    <li><a href="hm2_v1.php">Long page w/o div</a></li>
                    <li><a href="hm2_v2.php">Long page with div</a></li>                   
                </ul>
            </li>
            </li>
        </ul>
    </li>

    <!----- member ------------------------------------------>
    <li><a href="members.php">members</a>
    </li>

    <!----- Log in ------------------------------------------>
   <li><a href='login.php'>Log in</a></li>	
	
</ul>
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
                <!-- page content goes here -->

                <h1>Google analytics test page</h1>

                <form method="post">
                    First name:
                    <br>
                    <input type="text" name="firstname" value="George">
                    <br>
                    <br>Last name:
                    <br>
                    <input type="text" name="lastname" value="Clooney">
                    <br>
                    <br>
                    <input id="GA_Form_submit" type="submit" value="Submit">
                </form>

                <!-- end of page content  -->
            </div>


        </div>
        <!-- End Wrapper -->

        <div class="clearfix"></div>
        <div class="push"></div>
    </div>



    <!-- Begin Footer -->
    <div id="footer-wrapper">
        ?<div id="footer">
    <div id="footer-content"> 
      
      <!-- Begin Copyright -->
      <div id="copyright">
        <p>© Copyright 2013 ClickTale | Testing Portal</p>
      </div>
      <!-- End Copyright --> 
      
      <!-- Begin Social Icons -->
      <div id="socials">
        <ul>
          <li><a href="#"><img src="style/images/icon-rss.png" alt="" /></a></li>
          <li><a href="#"><img src="style/images/icon-twitter.png" alt="" /></a></li>
          <li><a href="#"><img src="style/images/icon-dribble.png" alt="" /></a></li>
          <li><a href="#"><img src="style/images/icon-tumblr.png" alt="" /></a></li>
          <li><a href="#"><img src="style/images/icon-flickr.png" alt="" /></a></li>
          <li><a href="#"><img src="style/images/icon-facebook.png" alt="" /></a></li>
        </ul>
      </div>
      <!-- End Social Icons --> 
      
    </div>
  </div>
     </div>
    <!-- End Footer -->


    <!-- ClickTale Bottom part -->

<script type='text/javascript'>
    // get param from url
    function getUrlVars() {
        var vars = {};
        var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
            vars[key] = value;
        });
        return vars;
    }
    // get cookie
    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1);
            if (c.indexOf(name) != -1) return c.substring(name.length, c.length);
        }
        return "";
    }
    // get PID from param or cookie, else use default
    var myPID = getUrlVars()["pid"] || getCookie("myPID");
    if (myPID) {
        document.cookie = "myPID=" + myPID + "; path=/";
        console.log("!!!!! ------------------------ USING CUSTOM PID : " + myPID + " ------------------------------ !!!!!");
        console.log("!!!!! ------------------------ DELETE COOKIES TO RESET ---------------------------- !!!!!");


        pidNote = document.createElement("div");
        pidNote.setAttribute("style", "top:10px; right:10px; position:absolute; border:solid black; padding:5px; background-color: #FFF");
        pidNote.innerHTML = "Custom PID: " + myPID;
        reset = document.createElement("a");
        reset.setAttribute("onclick", "javascript:document.cookie = 'myPID=; expires=Thu, 01-Jan-2010 00:00:01 GMT; path=/';window.location.replace(window.location.href.split('?')[0]);");
        reset.setAttribute("style", "cursor:pointer");
        reset.innerHTML = " reset";
        document.body.appendChild(pidNote);
        pidNote.appendChild(reset);


    } else {
        myPID = "1b7b7f26-3e20-4b6b-8af0-ddd2e771b9d9";
    }

    // var _myPID = getUrlVars()["mypid"] || "1b7b7f26-3e20-4b6b-8af0-ddd2e771b9d9";

    function ClickTalePreRecordingHook() {
        console.log("ClickTalePreRecordingHook");
        var CTOR = ((window.ClickTaleOnRecording) ? window.ClickTaleOnRecording : function(){})
        
        window.ClickTaleOnRecording = function () {
            
            console.log("ClickTaleOnRecording-GA")
            <!-- GA-CT integration code begin -->
            if (window['_gaq']) {
                _gaq.push(['_setCustomVar', 1, "CTUID", ClickTaleGetUID(), 1]);
				_gaq.push(['_setCustomVar', 2, "CTSID", ClickTaleGetSID(), 3]);
           //     _gaq.push(['_trackPageview']);
                
            }
            CTOR.apply(this, arguments);
            <!-- GA-CT integration code end-->

        }
    }

    document.write(unescape("%3Cscript%20src='" +
        (document.location.protocol == 'https:' ?
            "https://ct.test/ctn/ptc/" + myPID + ".js?WRDestination=qadump&WRScriptHost=ct.test/ctn" :
            "http://ct.test/ctn/ptc/" + myPID + ".js?WRDestination=qadump&WRScriptHost=ct.test/ctn") + "'%20type='text/javascript'%3E%3C/script%3E"));
</script>

<script type='text/javascript'>
    if (myPID != "1b7b7f26-3e20-4b6b-8af0-ddd2e771b9d9") {
        setTimeout(function () {
            isRec = (typeof ClickTaleIsRecording === "function") ? ClickTaleIsRecording() : "PID doesn't exist";
            pidNote.innerHTML += "<br> Recording Status: " + isRec;
        }, 2000);

    }
</script>

<!-- ClickTale end of Bottom part -->


<!--- Site catalyst integration -->
<!--<script type="text/javascript" src="/js/AppMeasurement.js"></script>
 
<script language="JavaScript" type="text/javascript">


  /* You may give each page an identifying name, server, and channel on the next lines.*/
s.pageName=document.title;
//console.log( 'site catalyst +' + s.pageName);
s.server=""
s.channel=""
s.pageType=""
s.prop1=""
s.prop2=""
s.prop3=""
s.prop4=""
s.prop5=""
/* Conversion Variables */
s.campaign=""
s.state=""
s.zip=""
s.events="event1"
s.products=""
s.purchaseID=""

var s_code=s.t();if(s_code)document.write(s_code)
</script>-->
<!--- End of Site catalyst integration -->

<!-- google analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1911294-7', 'auto');
  ga('send', 'pageview');

</script>

<!-- end of google analytics-->
    <script>
        $('#GA_Form_submit').click(function () {
            ga('send', 'event', 'button', 'click', 'GA_Form_submit');
            ClickTaleEvent("CT_form_submit");
        });
        
    </script>
</body>

</html>