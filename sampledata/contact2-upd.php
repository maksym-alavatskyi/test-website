<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>Clicktale | Contact</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" type="text/css" href="contact/style.css" media="all" />
<link rel="stylesheet" media="all" href="style/type/folks.css" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/scripts.js"></script>
<script type="text/javascript" src="style/js/jquery.infieldlabel.min.js"></script>
<script type="text/javascript" src="style/js/twitter.min.js"></script>
<script type="text/javascript">
	$(function(){ $("label").inFieldLabels(); });
</script>
<script type="text/javascript" charset="utf-8">
/*getTwitters('twitter', {
        id: 'elemisdesign', 
        count: 1, 
        enableLinks: true, 
        ignoreReplies: true,
        template: '<span class="twitterPrefix"><span class="twitterStatus">%text%</span>',
        newwindow: true
});*/
</script>
<script type="text/javascript">  
        
$(document).ready(function() {
	
    $("#ajax-contact-form").submit(function() {
        $('#load').append('<center><img src="ajax-loader.gif" alt="Currently Loading" id="loading" /></center>');

        var fem = $(this).serialize(),
			note = $('#note');
	
        $.ajax({
            type: "POST",
            url: "contact/contact.php",
            data: fem,
            success: function(msg) {
				if ( note.height() ) {			
					note.slideUp(500, function() { $(this).hide(); });
				} 
				else note.hide();

				$('#loading').fadeOut(300, function() {
					$(this).remove();

					// Message Sent? Show the 'Thank You' message and hide the form
					result = (msg === 'OK') ? '<div class="success">Your message has been sent. Thank you!</div>' : msg;

					var i = setInterval(function() {
						if ( !note.is(':visible') ) {
							note.html(result).slideDown(500);
							clearInterval(i);
						}
					}, 40);    
				}); // end loading image fadeOut
            }
        });

        return false;
    });
});


</script>
</head>
<body>
<div id="container"> 
  <!-- Begin Header Wrapper -->
  <div id="page-top">
    <div id="header-wrapper"> 
      <!-- Begin Header -->
      <div id="header">
        <div id="logo"><a href="index.html"><img src="style/images/logo.png" alt="Delphic" /></a></div>
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
    
    <!-- Begin Content -->
    <div class="content">
      <h3>Clicktale Contact Information</h3>
      <p>Maecenas vehicula condimentum consequat. Ut suscipit ipsum eget leo convallis feugiat upsoyut fermentum leo auctor. In consequat turpis at nisiper otue vestibulum at bibendum lectus pulvinar. Integer pulvinar elit tincidunt quam faucibus eget porta est blandit.</p>
      <br />
      <!-- Begin Form -->
      <div class="contact-left">
        <div id="contact-form"> 
          
          <!--begin:notice message block-->
          <div id="note"></div>
          <!--begin:notice message block-->
          
          <form id="ajax-contact-form" method="post" action="contact/contact.php">
            <div class="labels">
              <p>
                <label for="name">Name</label>
                <br />
                <input class="required inpt" type="text" name="name" id="name" value="" />
              </p>
              <p>
                <label for="email">E-Mail</label>
                <br />
                <input class="required inpt" type="text" name="email" id="email" value="" />
              </p>
            </div>
            <div class="comments">
              <p>
                <textarea class="textbox" name="message" rows="6" cols="30"></textarea>
              </p>
              <br />
              <p>
                <label for="answer">5+1=?</label>
                <br />
                <input class="required inpt" type="text" name="answer" id="answer" value="" />
              </p>
            </div>
           <!-- <label id="load" style="display:none"></label>-->
            <input id="submit-button" class="button gray stripe" type="submit" name="submit" value="Send Message" />
          </form>
        </div>
        <!-- End Form --> 
      </div>
      <div class="contact-right">
        <div class="one-half">
          <h4>Israel Office</h4>
          <p>2 Shoham st.<br />
            Ramat Gan, Israel <br />
            <br />
            <span class="highlight3">Fax:</span> 1 800 807 2117 <br />
            <span class="highlight3">Tel:</span> 1 800 807 2118 </p>
        </div>
        <div class="one-half last">
          <h4>USA Office</h4>
          <p>Moon Avenue No:11/21 <br />
            Los Angeles, CA <br />
            <br />
            <span class="highlight3">Fax:</span> +555 797 534 01 <br />
            <span class="highlight3">Tel:</span> +555 636 646 62 </p>
        </div>
        <div class="clear"></div>
        <br />
        <!--<iframe width="400" height="188" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=iw&amp;geocode=&amp;q=%D7%A9%D7%95%D7%94%D7%9D+2,+%D7%A8%D7%9E%D7%AA+%D7%92%D7%9F,+%D7%99%D7%A9%D7%A8%D7%90%D7%9C&amp;aq=0&amp;oq=%D7%A9%D7%95%D7%94%D7%9D+2+&amp;sll=32.069794,34.864996&amp;sspn=0.239146,0.52906&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=%D7%A9%D7%95%D7%94%D7%9D+2,+%D7%A8%D7%9E%D7%AA+%D7%92%D7%9F,+%D7%99%D7%A9%D7%A8%D7%90%D7%9C&amp;ll=32.084829,34.800224&amp;spn=0.013672,0.034332&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=iw&amp;geocode=&amp;q=%D7%A9%D7%95%D7%94%D7%9D+2,+%D7%A8%D7%9E%D7%AA+%D7%92%D7%9F,+%D7%99%D7%A9%D7%A8%D7%90%D7%9C&amp;aq=0&amp;oq=%D7%A9%D7%95%D7%94%D7%9D+2+&amp;sll=32.069794,34.864996&amp;sspn=0.239146,0.52906&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=%D7%A9%D7%95%D7%94%D7%9D+2,+%D7%A8%D7%9E%D7%AA+%D7%92%D7%9F,+%D7%99%D7%A9%D7%A8%D7%90%D7%9C&amp;ll=32.084829,34.800224&amp;spn=0.013672,0.034332&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">הצג מפה גדולה יותר</a></small>-->
		</div>
      <div class="clear"></div>
      <div class="divider"></div>
      
    <!-- End Content --> 
    
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