<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>ClickTale | Testing Portal</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" media="all" href="style/type/folks.css" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/scripts.js"></script>
<script type="text/javascript" src="style/js/jquery.infieldlabel.min.js"></script>
<script type="text/javascript">
	$(function(){ $("label").inFieldLabels(); });
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
    <div id="post-wrapper">
      <div class="post">
        <h2 class="title">Single Post</h2>
        <div class="meta">
          <div class="top-border"></div>
          Posted on
          <div class="date">12 Jan 2011</div>
          by <a href="#" title="">admin</a> under <a href="#" title="">Web Design</a> | <a href="#" title="">21 Comments</a> </div>
        <img src="style/images/art/blog4.jpg" alt="" />
        <p>Morbi sagittis dictum fringilla. Aliquam id mi nisi. Aenean sed nisl erat, eu consequat urna. Pellentesque suscipit congue libero a hendrerit. Maecenas ut erat consequat eros aliquam lobortis id sit amet purus. Sed et nisl nibh, et tincidunt est. Vivamus aliquet adipiscing turpis. Nullam pharetra vestibulum nunc, nec vestibulum nibh porttitor eget. Morbi a lacinia urna. Pellentesque sed est in eros pellentesque iaculis in et dolor vestibulum sed arcu.</p>
        <div class="top-border"></div>
        <div class="tags"> Tags: <a href="#" title="">Web</a>, <a href="#" title="">Journal</a>, <a href="#" title="">Illustration</a>, <a href="#" title="">Inspiration</a>, <a href="#" title="">Video</a> </div>
      </div>
      
      <!-- Begin Comments -->
      
      <div id="comment-wrapper">
        <h3>4 Responses to "Single Post"</h3>
        
        <!-- Begin Comments -->
        <div id="comments">
          <ol id="singlecomments" class="commentlist">
            <li class= "clearfix">
              <div class="user"><a href="#"><img alt="" src="style/images/art/blog-th1.jpg" height="60" width="60" class="avatar" /></a> <a class="reply-link" href="#">Reply</a></div>
              <div class="message">
                <div class="info">
                  <h3><a href="#">Isabel</a></h3>
                  <span class="date">- April 4, 2010</span> </div>
                <p>Quisque ac risus sit amet quam sollicitudin vestibulum vitae malesuada libero. Mauris magna elit, suscipit non ornare et, blandit a tellus. Pellentesque dignissim ornare elit, quis mattis eros sodales ac.</p>
              </div>
              <div class="clear"></div>
            </li>
            <li class= "clearfix">
              <div class="user"><a href="#"><img alt="" src="style/images/art/blog-th1.jpg" height="60" width="60" class="avatar" /></a> <a class="reply-link" href="#">Reply</a></div>
              <div class="message">
                <div class="info">
                  <h3><a href="#">Jacqueline</a></h3>
                  <span class="date">- April 4, 2010</span> </div>
                <p>Quisque tristique tincidunt metus non aliquam. Quisque ac risus sit amet quam sollicitudin vestibulum vitae malesuada libero. Mauris magna elit, suscipit non ornare et, blandit a tellus. Pellentesque dignissim ornare elit, quis mattis eros sodales ac.</p>
              </div>
              <div class="clear"></div>
              <ul class="children">
                <li class= "clearfix">
                  <div class="user"><a href="#"><img alt="" src="style/images/art/blog-th1.jpg" height="60" width="60" class="avatar" /></a> <a class="reply-link" href="#">Reply</a></div>
                  <div class="message">
                    <div class="info">
                      <h3><a href="#">Mathieu</a></h3>
                      <span class="date">- April 4, 2010</span> </div>
                    <p>Quisque ac risus sit amet quam sollicitudin vestibulum vitae malesuada libero. Mauris magna elit, suscipit non ornare et, blandit a tellus. Pellentesque dignissim ornare elit, quis mattis eros sodales ac.</p>
                  </div>
                  <div class="clear"></div>
                  <ul class="children">
                    <li class= "clearfix">
                      <div class="user"><a href="#"><img alt="" src="style/images/art/blog-th1.jpg" height="60" width="60" class="avatar" /></a> <a class="reply-link" href="#">Reply</a></div>
                      <div class="message">
                        <div class="info">
                          <h3><a href="#">Charlene</a></h3>
                          <span class="date">- April 4, 2010</span> </div>
                        <p>Mauris magna elit, suscipit non ornare et, blandit a tellus. Pellentesque dignissim ornare elit, quis mattis eros.</p>
                      </div>
                      <div class="clear"></div>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ol>
        </div>
        <!-- End Comments --> 
        
        <!-- Begin Form -->
        <div id="comment-form" class="comment-form">
          <h3>Leave a Reply</h3>
          <form name="form_name" method="post">
            <div class="comment-input">
              <p>
                <label for="name">Name</label>
                <br />
                <input type="text" name="name" value="" id="name">
              </p>
              <p>
                <label for="email">Email</label>
                <br />
                <input type="text" name="email" value="" id="email">
              </p>
              <p>
                <label for="website">Website</label>
                <br />
                <input type="text" name="website" value="" id="website">
              </p>
            </div>
            <div class="comment-textarea">
              <textarea name="textarea" id="textarea" rows="5" cols="30"></textarea>
            </div>
            <div class="clear"></div>
            <input id="submit-button" class="button gray stripe" type="submit" name="submit" value="Send Message" />
          </form>
          <div class="clear"></div>
        </div>
        <!-- End Form --> 
        
      </div>
      
      <!-- End Comments --> 
      
    </div>
    <div id="sidebar">
      <div class="sidebox">
        <form id="searchform" method="get">
          <input type="text" id="s" name="s" value="type and hit enter" onfocus="this.value=''" onblur="this.value='type and hit enter'"/>
        </form>
      </div>
      <div class="sidebox">
        <h3>Popular Posts</h3>
        <ul class="post-list">
          <li><a href="#" title=""><img src="style/images/art/blog-th1.jpg" alt="" /></a>
            <h4><a href="#" title="">Maecenas malesuada felis vel quam tincidunt</a></h4>
            <span class="info">12 Jan 2011 | <a href="#" title="">23 Comments</a></span></li>
          <li><a href="#" title=""><img src="style/images/art/blog-th2.jpg" alt="" /></a>
            <h4><a href="#" title="">Maecenas malesuada felis vel quam tincidunt</a></h4>
            <span class="info">12 Jan 2011 | <a href="#" title="">23 Comments</a></span></li>
          <li><a href="#" title=""><img src="style/images/art/blog-th3.jpg" alt="" /></a>
            <h4><a href="#" title="">Maecenas malesuada felis vel quam tincidunt</a></h4>
            <span class="info">12 Jan 2011 | <a href="#" title="">23 Comments</a></span></li>
        </ul>
      </div>
      <div class="sidebox">
        <h3>Archive</h3>
        <ul class="post-list archive">
          <li><a href="#" title="">March 2011 (11)</a></li>
          <li><a href="#" title="">February 2011 (9)</a></li>
          <li><a href="#" title="">January 2011 (5)</a></li>
        </ul>
      </div>
      <div class="sidebox">
        <h3>Tags</h3>
        <ul class="tags">
          <li><a href="#" title="">Design</a></li>
          <li><a href="#" title="">Journal</a></li>
          <li><a href="#" title="">Artwork</a></li>
          <li><a href="#" title="">Books</a></li>
          <li><a href="#" title="">Illustation</a></li>
          <li><a href="#" title="">Resources</a></li>
          <li><a href="#" title="">Fun</a></li>
          <li><a href="#" title="">Travel</a></li>
          <li><a href="#" title="">Inspiration</a></li>
        </ul>
      </div>
      <div class="sidebox">
        <h3>Flickr</h3>
        <ul class="flickr">
          <li><a href="#"><img src="style/images/art/flickr-1.jpg" alt="" /></a></li>
          <li><a href="#"><img src="style/images/art/flickr-2.jpg" alt="" /></a></li>
          <li><a href="#"><img src="style/images/art/flickr-3.jpg" alt="" /></a></li>
          <li><a href="#"><img src="style/images/art/flickr-4.jpg" alt="" /></a></li>
          <li><a href="#"><img src="style/images/art/flickr-5.jpg" alt="" /></a></li>
          <li><a href="#"><img src="style/images/art/flickr-6.jpg" alt="" /></a></li>
        </ul>
      </div>
      <div class="sidebox">
        <h3>Sponsors</h3>
        <ul class="ads">
          <li><a href="#"><img src="style/images/art/ad-1.gif" alt="" /></a></li>
          <li><a href="#"><img src="style/images/art/ad-2.gif" alt="" /></a></li>
          <li><a href="#"><img src="style/images/art/ad-3.gif" alt="" /></a></li>
          <li><a href="#"><img src="style/images/art/ad-4.gif" alt="" /></a></li>
        </ul>
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