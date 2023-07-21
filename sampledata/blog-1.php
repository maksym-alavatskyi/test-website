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
        <h2 class="title"><a href="blog-single.php" title="">Nullam pharetra vestibulum nunc</a></h2>
        <div class="meta">
          <div class="top-border"></div>
          Posted on
          <div class="date">12 Jan 2011</div>
          by <a href="#" title="">admin</a> under <a href="#" title="">Web Design</a> | <a href="#" title="">21 Comments</a> </div>
        <a href="blog-single.php"><img src="style/images/art/blog1.jpg" alt="" /></a>
        <p>Morbi sagittis dictum fringilla. Aliquam id mi nisi. Aenean sed nisl erat, eu consequat urna. Pellentesque suscipit congue libero a hendrerit. Maecenas ut erat consequat eros aliquam lobortis id sit amet purus. Sed et nisl nibh, et tincidunt est. Vivamus aliquet adipiscing turpis. Nullam pharetra vestibulum nunc, nec vestibulum nibh porttitor eget. Morbi a lacinia urna. Pellentesque sed est in eros pellentesque iaculis in et dolor vestibulum. <a href="#" class="more">Continue Reading &raquo;</a></p>
        <div class="tags">
          <div class="top-border"></div>
          Tags: <a href="#" title="">Web</a>, <a href="#" title="">Journal</a> </div>
      </div>
      <div class="post">
        <h2 class="title"><a href="blog-single.php" title="">Pellentesque suscipit congue</a></h2>
        <div class="meta">
          <div class="top-border"></div>
          Posted on
          <div class="date">12 Jan 2011</div>
          by <a href="#" title="">admin</a> under <a href="#" title="">Web Design</a> | <a href="#" title="">21 Comments</a> </div>
        <a href="blog-single.php"><img src="style/images/art/blog2.jpg" alt="" /></a>
        <p>Morbi sagittis dictum fringilla. Aliquam id mi nisi. Aenean sed nisl erat, eu consequat urna. Pellentesque suscipit congue libero a hendrerit. Maecenas ut erat consequat eros aliquam lobortis id sit amet purus. Sed et nisl nibh, et tincidunt est. Vivamus aliquet adipiscing turpis. Nullam pharetra vestibulum nunc, nec vestibulum nibh porttitor eget. Morbi a lacinia urna. Pellentesque sed est in eros pellentesque iaculis in et dolor vestibulum. <a href="#" class="more">Continue Reading &raquo;</a></p>
        <div class="tags">
          <div class="top-border"></div>
          Tags: <a href="#" title="">Web</a>, <a href="#" title="">Journal</a> </div>
      </div>
      <div class="post">
        <h2 class="title"><a href="blog-single.php" title="">Aenean sed nisl erat</a></h2>
        <div class="meta">
          <div class="top-border"></div>
          Posted on
          <div class="date">12 Jan 2011</div>
          by <a href="#" title="">admin</a> under <a href="#" title="">Web Design</a> | <a href="#" title="">21 Comments</a> </div>
        <div class="video">
          <iframe src="http://player.vimeo.com/video/4887811?title=0&amp;byline=0&amp;portrait=0" width="600" height="338" frameborder="0"></iframe>
        </div>
        <p>Morbi sagittis dictum fringilla. Aliquam id mi nisi. Aenean sed nisl erat, eu consequat urna. Pellentesque suscipit congue libero a hendrerit. Maecenas ut erat consequat eros aliquam lobortis id sit amet purus. Sed et nisl nibh, et tincidunt est. Vivamus aliquet adipiscing turpis. Nullam pharetra vestibulum nunc, nec vestibulum nibh porttitor eget. Morbi a lacinia urna. Pellentesque sed est in eros pellentesque iaculis in et dolor vestibulum. <a href="#" class="more">Continue Reading &raquo;</a></p>
        <div class="tags">
          <div class="top-border"></div>
          Tags: <a href="#" title="">Web</a>, <a href="#" title="">Journal</a> </div>
      </div>
      
      <!-- Begin Page Navigation -->
      <ul class="page-navi">
        <li><a href="#" class="current">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">&raquo;</a></li>
      </ul>
      <!--End Page Navigation --> 
      
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
            <span class="info">12 Feb 2011 | <a href="#" title="">23 Comments</a></span></li>
          <li><a href="#" title=""><img src="style/images/art/blog-th2.jpg" alt="" /></a>
            <h4><a href="#" title="">Maecenas malesuada felis vel quam tincidunt</a></h4>
            <span class="info">8 Jan 2011 | <a href="#" title="">23 Comments</a></span></li>
          <li><a href="#" title=""><img src="style/images/art/blog-th3.jpg" alt="" /></a>
            <h4><a href="#" title="">Maecenas malesuada felis vel quam tincidunt</a></h4>
            <span class="info">11 Dec 2011 | <a href="#" title="">23 Comments</a></span></li>
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