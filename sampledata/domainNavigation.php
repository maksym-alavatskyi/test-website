<?php session_start(); $sb = htmlspecialchars($_GET["subDomain"]); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>ClickTale | Testing Portal | Home</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" media="all" href="style/type/folks.css" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="style/js/jquery.cycle.all.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/scripts.js"></script>
<script type="text/javascript">
$(function() {
			if ($('#sliderholder-cycle').length) {
			// timeouts per slide (in seconds) 
			var timeouts = [5]; 
			function calculateTimeout(currElement, nextElement, opts, isForward) { 
			    var index = opts.currSlide; 
			    return timeouts[index] * 1000;
			}
			jQuery('#sliderholder-cycle').cycle({
				fx: 'fade',
				pager: '.slidernav',
				prev:    '.sliderprev',
        		next:    '.slidernext',
				speed: 1000,
				//timeoutFn: calculateTimeout,
                timeout: 8000,
				pagerEvent: 'click',
    			pauseOnPagerHover: true,
                pause:   1,
    			cleartype: 1
});
			jQuery('#sliderholder-cycle').css("display", "block");
			jQuery('.slidernav').css("display", "block");
			
			}
}); 
</script>
<script>

function myErrors(myE) {
	console.log(myE);
	throw "Error!!! " + myE.id
}
</script>

<style type="text/css">
			#wrapper {
				    height: 250px;
					margin: 20px auto;
					width: 500px;
					
			}
			.link {
				    margin: 0 auto;
					padding: 20px;
					font-size: 60;
					background-color: rgba(255, 235, 59, 0.39);
					text-align: center;
			}
			#link a {
					
			}
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
	
		<div id="wrapper">
			<div id="link" class="link">
				<a href="http://<?=$sb?>.ctqatest.info">
				My Second Domain
				</a>
			</div>
		</div>


<!-- Begin Footer -->
<div id="footer-wrapper">
  <?php 
	include 'footer.php'
  ?>
</div>
<!-- End Footer --> 

<script type="text/javascript">

$(document).ready(function() {	
  //Get all the LI from the #tabMenu UL
  $('#tab-menu > li').click(function(){
    //remove the selected class from all LI    
    $('#tab-menu > li').removeClass('selected');
    //Reassign the LI
    $(this).addClass('selected');
    //Hide all the DIV in .tab-content
    $('.tab-content div.tab').slideUp('slow');
    //Look for the right DIV in boxBody according to the Navigation UL index, therefore, the arrangement is very important.
    $('.tab-content div.tab:eq(' + $('#tab-menu > li').index(this) + ')').slideDown('slow');
  }).mouseover(function() {
    //Add and remove class, Personally I dont think this is the right way to do it, anyone please suggest    
    $(this).addClass('mouseover');
    $(this).removeClass('mouseout');   
  }).mouseout(function() {
    //Add and remove class
    $(this).addClass('mouseout');
    $(this).removeClass('mouseover');    
  });
});


/* $(function() {
            var offset = $("#tab-menu").offset();
			var containerOffset = $("#wrapper").offset();
            var topPadding = 15;
            $(window).scroll(function() {
                if ($(window).scrollTop() > offset.top) {
					if ($(window).scrollTop() > containerOffset)
					{}
					else
					{
                    $("#tab-menu").stop().animate({
                        marginTop: $(window).scrollTop() - offset.top + topPadding
                    });}
                } else {
                    $("#tab-menu").stop().animate({
                        marginTop: 0
                    });
                };
            });
        }); */
  

  $(document).ready(function () {
        $("#mybut2").click(function () {
           throw new Error("JS Error");
  });
		  });
    $(document).ready(function () {
        $("#mybut3").click(function () {
          ClickTaleSetCustomElementID();
  });
		  });


</script>

  
<?php 
	include 'ct_bottom.php'
  ?>


</body>
</html>