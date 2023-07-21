<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<style>
		table td
		{
			padding: 0px !important;
		}
</style>
<title>ClickTale | Testing Portal | element addressing </title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" type="text/css" href="contact/style.css" media="all">
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
<div class="content">


<!------------------------------------------------------------------------------------------>

<h1>Element Addressing - CBS</h1>
<div id="page">
      
      <style>
        div#page, div#cbs-page {
          background-position:0 93px}
      </style>
      <div id="ad728x90-wrapper">
        <div id="leader-top">
          <div class="clear">
          </div>
        </div>
        <div class="clear">
        </div>
      </div>
      
      <div id="cbs-header-wrapper">
         
      <div id="ui-header-wrapper">
        
        <div id="ui-user-bar">
          <div>
            <ul id="user-bar-wrapper">
              <li id="id-lnk-gbl-login">
                <a href="#!" id="lnk-gbl-login" onclick="CBS.Account.View.LoginInline('id-lnk-gbl-login');">
                  <span>
                    Sign In
                  </span>
                  <em>
                  </em>
                </a>
              </li>
              <li class="divider">
                <div>
                </div>
              </li>
              <li>
                <a href="#!" id="lnk-gbl-signup">
                  <span>
                    Sign Up
                  </span>
                  <em>
                  </em>
                </a>
              </li>
            </ul>
            <div class="clear">
            </div>
          </div>
          
        </div>
        <div id="ui-header-bar">
          <h1 id="ui-logo">
            <a href="#!" title="CBS.com" alt="CBS.com">
              CBS
            </a>
          </h1>
          
          <div id="ui-menu-wrapper">
            
            <ul class="nav-menu">
              <li class="nav-item">
                <a href="#!">
                  Shows
                </a>
                <div id="show-drop-down" class="sub-nav">
                  <div id="nav-top-art">
                  </div>
                  <ul class="sub-nav-group">
                    <h4 class="cbs-show-category">
                      Primetime
                    </h4>
                    
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        Big Brother
                      </a>
                    </li>
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        Blue Bloods
                      </a>
                    </li>
                    
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        Mike & Molly
                      </a>
                    </li>
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        The Millers
                      </a>
                    </li>
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        Mom
                      </a>
                    </li>
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        NCIS
                      </a>
                    </li>
                   
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        Unforgettable
                      </a>
                    </li>
                  </ul>
                  <div class="nav-column-divider-vert">
                  </div>
                  <ul class="sub-nav-group">
                    <h4 class="cbs-show-category">
                      Daytime
                    </h4>
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        The Bold and the Beautiful
                      </a>
                    </li>
                    
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        The Young and the Restless
                      </a>
                    </li>
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        The CBS Dream Team...It's Epic
                      </a>
                    </li>
                    <hr role="separator">
                    <h4 class="cbs-show-category">
                      Late Night
                    </h4>
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        Late Show with David Letterman
                      </a>
                    </li>
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        Live On Letterman
                      </a>
                    </li>
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        The Late Late Show with Craig Ferguson
                      </a>
                    </li>
                    <hr role="separator">
                    <h4 class="cbs-show-category">
                      Contests|Promos
                    </h4>
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        CBS Episode Downloads
                      </a>
                    </li>
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        What's Your Zonk?
                      </a>
                    </li>
                    <hr role="separator">
                    <h4 class="cbs-show-category">
                      TV Classics
                    </h4>
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        7th Heaven
                      </a>
                    </li>
                   
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        Taxi
                      </a>
                    </li>
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        The Twilight Zone
                      </a>
                    </li>
                  </ul>
                  <div class="nav-column-divider-vert">
                  </div>
                  <ul class="sub-nav-group">
                    <h4 class="cbs-show-category">
                      CBS.com Originals
                    </h4>
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        ACM Sessions
                      </a>
                    </li>
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        Anatomy of a TV Hit: CSI
                      </a>
                    </li>
                    
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        Power of Observation
                      </a>
                    </li>
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        Watch! Magazine
                      </a>
                    </li>
                    <hr role="separator">
                    <h4 class="cbs-show-category">
                      Movies & Specials
                    </h4>
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        Academy of Country Music Awards
                      </a>
                    </li>
                  
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        GRAMMY® Red Carpet
                      </a>
                    </li>
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        Kennedy Center Honors
                      </a>
                    </li>
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        People's Choice Awards
                      </a>
                    </li>
                  
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        Victoria's Secret Fashion Show
                      </a>
                    </li>
                    <hr role="separator">
                    <h4 class="cbs-show-category">
                      News & Sports
                    </h4>
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        CBS Evening News
                      </a>
                    </li>
                    <li class="show-list-item">
                      <a href="#!" target="_parent" class="show-nav-link">
                        Super Bowl on CBS
                      </a>
                    </li>
                  </ul>
                  <div id="nav-bottom-art">
                  </div>
                </div>
                
              </li>
              
              <li class="nav-item">
                <a href="#!">
                  Watch
                </a>
              </li>
            
              <li class="nav-item">
                <a href="#!" target="_blank">
                  Sports
                </a>
              </li>
              <li class="nav-item">
                <a href="#!" target="_blank">
                  Shop
                </a>
              </li>
          </ul>
      </div>
      
      
      
      <div id="ui-search-wrapper">
        <form id="cbs-form-site-search" name="cbssitesearch" action="/sitesearch/results/" method="get">
          <div class="ui-search-box">
            <input id="ui-site-search-box" autocomplete="off" type="text" size="20" name="q" value="Search CBS" onkeyup="CBS.Search.AutoComplete(this.value);" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Search CBS';}"/>
          </div>
          <div class="ui-search-btn">
            <a id="ui-site-search-btn" href="#!" onclick="if (document.cbssitesearch.q.value != '') { document.cbssitesearch.submit() } else {alert('Please enter keywords in the search box.')};">
            </a>
          </div>
          
          
          
          <div class="clear">
          </div>
        </form>
        <div id="ui-search-autocomplete">
        </div>
      </div>
      
      <div class="clear">
      </div>
      
      
  </div>
  
      </div>
      
  </div>
  
  
  <!-- master page -->
  <div id="masterPageWrapper">
    
    <div id="skin-top">
    </div>
    
    
    
    <div id="secondaryPageWrapper">
      
      <!-- master content wrapper -->
      <div id="cbs-master-content-wrapper">
        
        <!-- push down ad -->
        <div id="pushdown-wrapper">
          <div id="leader-plus-top">
          </div>
        </div>
        
        <!-- marquee -->
        
        
        <div xmlns="http://www.w3.org/1999/html">
          
          <div id="cbs-marquee-wrapper">
            
            
            
            
            <a href="#!" target="_self" title="The Good Wife - Last Night's Full Episode">
              <img src="http://wwwimage.cbsstatic.com/base/files/gw_hplfe_20140424_tyingknot_marquee.jpg" border="0" width="980" height="412"/>
            </a>
            
            
            
            
            <a href="#!" target="_self" title="The Mentalist - Last Night's Full Episode">
              <img src="http://wwwimage.cbsstatic.com/base/files/mnt_hplfe_20140424_browneyedgirls_marquee.jpg" border="0" width="980" height="412"/>
            </a>
        
            
            
            
            <a href="#!" target="_self" title="Mike & Molly - Preview Tonight's Episode">
              <img src="http://wwwimage.cbsstatic.com/base/files/mm_hpep_20140425_jcsmall_20140425_marquee.jpg" border="0" width="980" height="412"/>
            </a>
            
            
            
          </div>
          
        </div>
        
        
        <!-- alerts -->
        
        <!-- content wrapper -->
        <div id="cbs-content-wrapper">
          
          <!-- carousel -->
          <div id="full-ep-carousel" class="hidden v2c">
          </div>
          <div class="loader">
          </div>
          
          
          <div id="cbs-content-left">
            <div id="cbs-happening">
              
              <div class="cbs-left-box-wrapper">
                <h2 class="cbs-section happening">
                  What's New
                  <div>
                  </div>
                </h2>
              </div>
              
              <div class="cbs-section-content promos">
                
                
     
                
                
                <div class="promo right">
                  <div class="promo-image">
                    <a href="#!"  class="whatNewImg">
                      <img src="http://wwwimage.cbsstatic.com/thumbnails/photos/w288/bt-listicle_whatsnew.jpg" border="0" width="288px" height="162px" alt="Bad Teacher's Top 5 Lessons" title="Bad Teacher's Top 5 Lessons"/>
                    </a>
                  </div>
                  <div class="promo-wrapper">
                    <div class="promo-title">
                      <a href="#!" >
                        Bad Teacher's Top 5 Lessons
                      </a>
                    </div>
                    <div class="promo-copy">
                      Grab your notebook and study up on five grade A lessons to live by. 
                      <a href="#!" class="call-to-action" >
                        Go Now 
                        <span>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
                
                

                
                
                <div class="promo right">
                  <div class="promo-image">
                    <a href="#!" class="video-icon-overlay promo-image-video" >
                    </a>
                    <a href="#!"  class="whatNewImg">
                      <img src="http://wwwimage.cbsstatic.com/thumbnails/photos/w288/cloned_zoe.jpg" border="0" width="288px" height="162px" alt="Zoe Lister-Jones on Late Late Show" title="Zoe Lister-Jones on Late Late Show"/>
                    </a>
                  </div>
                  <div class="promo-wrapper">
                    <div class="promo-title">
                      <a href="#!" >
                        Zoe Lister-Jones on Late Late Show
                      </a>
                    </div>
                    <div class="promo-copy">
                      The Friends With Better Lives star dishes on Brooklyn hipsters and her spirit animal. 
                      <a href="#!" class="call-to-action" >
                        Watch Now 
                        <span>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
                
                
                
                
                <div class="promo right">
                  <div class="promo-image">
                    <a href="#!" class="video-icon-overlay promo-image-video" >
                    </a>
                    <a href="#!"  class="whatNewImg">
                      <img src="http://wwwimage.cbsstatic.com/thumbnails/photos/w288/cloned_hpparvatijeremiah.jpg" border="0" width="288px" height="162px" alt="Survivor Live Replay" title="Survivor Live Replay"/>
                    </a>
                  </div>
                  <div class="promo-wrapper">
                    <div class="promo-title">
                      <a href="#!" >
                        Survivor Live Replay
                      </a>
                    </div>
                    <div class="promo-copy">
                      Jeremiah reveals how he feels about fans asking him out.  
                      <a href="#!" class="call-to-action" >
                        Watch Now 
                        <span>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
                
                <div class="clear">
                </div>
              </div>
              
            </div>
            
            
            
          </div>
          <div id="cbs-content-right">
            <!-- connections -->
            <div id="cbs-connections">
              
              <h2 class="cbs-section connections">
                Connections
                <div>
                </div>
              </h2>
              <div class="content-pane">
                <div class="connection">
                  <div class="connect fb">
                    <a href="#!" class="icon" target="_blank">
                    </a>
                    <a class="link" target="_blank">
                      Like Us
                    </a>
                  </div>
                  <div class="connect tw">
                    <a href="#!" class="icon" target="_blank">
                    </a>
                    <a class="link" target="_blank">
                      Follow Us
                    </a>
                  </div>
                  <div class="connect gplus">
                    <div class="icon">
                      <a href="#!" target="_blank" rel="author" style="text-decoration:none;" target="_new">
                        <img src="https://ssl.gstatic.com/images/icons/gplus-32.png" alt="" style="border:0;width:25px;height:25px;"/>
                      </a>
                      <!--g:plusone annotation="none" href="#!">
</g:plusone-->
                    </div>
                    <a class="link">
                      Add Us
                    </a>
                  </div>
                  <div class="clear">
                  </div>
                </div>
                
              </div>
              
            </div>
            
            <!-- schedule -->
            
            
            <style>
              div#cbs-schedule div.content-pane div.sch-box {
                padding:5px 0 1px 0;
              }
              div#cbs-schedule div.sch-box div.airdate {
                font-size:13px;
              }
              div#cbs-schedule div.sch-box div.row {
                margin-bottom:5px;
              }
              div#cbs-schedule div.sch-box a.show-title {
                font-size:13px;
              }
              div#cbs-schedule a.full-schedule {
                margin-top:0;
              }
            </style>
            
            <div id="cbs-schedule">
              
              <h2 class="cbs-section schedule">
                This Week's Schedule
                <div>
                </div>
              </h2>
              <div class="content-pane">
                
                
               
                <div class="sch-box ">
                  <div class="when">
                    Tuesday
                  </div>
                  
                  <div class="row">
                    
                    <div class="airdate">
                      9/8c
                    </div>
                    <div class="show">
                      <a href="#!" target="_self" class="show-title">
                        NCIS: Los Angeles
                      </a>
                      One More Chance
                    </div>
                    <div class="clear">
                    </div>
                  </div>
                  <div class="row">
                    
                    <div class="airdate">
                      10/9c
                    </div>
                    <div class="show">
                      <a href="#!" target="_self" class="show-title">
                        Person Of Interest
                      </a>
                      Beta
                    </div>
                    <div class="clear">
                    </div>
                  </div>
                  
                </div>
                
                
                <div class="sch-box last">
                  <div class="when">
                    Thursday
                  </div>
                  
                  <div class="row">
                    
                    <div class="airdate">
                      8/7c
                    </div>
                    <div class="show">
                      <a href="#!" target="_self" class="show-title">
                        Big Bang Theory, The
                      </a>
                      The Proton Transmogrification
                    </div>
                    <div class="clear">
                    </div>
                  </div>


                  <div class="row">
                    
                    <div class="airdate">
                      9:30/8:30c
                    </div>
                    <div class="show">
                      <a href="#!" target="_self" class="show-title">
                        Bad Teacher
                      </a>
                      Daddy Issues
                    </div>
                    <div class="clear">
                    </div>
                  </div>
                  <div class="row">
                    
                    <div class="airdate">
                      10/9c
                    </div>
                    <div class="show">
                      <a href="#!" target="_self" class="show-title">
                        Elementary
                      </a>
                      Paint It Black
                    </div>
                    <div class="clear">
                    </div>
                  </div>
                  
                </div>
                
                
                
              </div>
              <a href="#!" class="call-to-action full-schedule">
                Check Full Schedule 
                <span>
                </span>
              </a>
            </div>
          </div>
          <div class="clear">
          </div>
          
          <!-- classics -->
          <div id="cbs-classics-wrapper">
            <div class="cbs-full-box-wrapper">
              <h2 class="cbs-section cbsclassics">
                <a>
                  CBS Classics
                </a>
              </h2>
            </div>
            
            <div class="cbs-shows-scrollable">
              
              <a href="#!" class="browse c-prev">
              </a>
              <a href="#!" class="browse right c-next">
              </a>
              
              <div class="content-pane">
                <div class="items">
                  <div>
                    
                    <div class="item">
                      <a href="#!">
                        <img src="http://wwwimage.cbsstatic.com/base/files/hp_classics_0014_dynasty.jpg" alt="Dynasty" border="0" title="Dynasty" />
                      </a>
                    </div>
                    
                    
                    <div class="item">
                      <a href="#!">
                        <img src="http://wwwimage.cbsstatic.com/base/files/hp_classics_0012_familyties.jpg" alt="Family Ties" border="0" title="Family Ties" />
                      </a>
                    </div> 
                    
                  </div>
                  
                  <div>
                    
                    <div class="item">
                      <a href="#!">
                        <img src="http://wwwimage.cbsstatic.com/base/files/hp_classics_0007_macgyver.jpg" alt="MacGyver" border="0" title="MacGyver" />
                      </a>
                    </div>
                    
                  </div>
                 
                  
                  <div>
                    
                    <div class="item">
                      <a href="#!">
                        <img src="http://wwwimage.cbsstatic.com/base/files/startrek_enterprise_162x88.jpg" alt="Star Trek Enterprise" border="0" title="Star Trek Enterprise" />
                      </a>
                    </div>

                    
                  </div>
                  
                  <div>
                    
                    <div class="item">
                      <a href="#!">
                        <img src="http://wwwimage.cbsstatic.com/base/files/hp_classics_0010_lucy_0.jpg" alt="I Love Lucy" border="0" title="I Love Lucy" />
                      </a>
                    </div>
                    
                    
                    <div class="item">
                      <a href="#!">
                        <img src="http://wwwimage.cbsstatic.com/base/files/hp_classics_0015_thebrady_bunch_0.jpg" alt="The Brady Bunch" border="0" title="The Brady Bunch" />
                      </a>
                    </div>
                   
                    
                  </div>
                  
                  <div>
                    
                    <div class="item">
                      <a href="#!">
                        <img src="http://wwwimage.cbsstatic.com/base/files/hp_classics_0011_happydays.jpg" alt="Happy Days" border="0" title="Happy Days" />
                      </a>
                    </div>
                      
                    
                    <div class="item">
                      <a href="#!">
                        <img src="http://wwwimage.cbsstatic.com/base/files/star_trek_nextgen_162x88.jpg" alt="Star Trek The Next Generation" border="0" title="Star Trek The Next Generation" />
                      </a>
                    </div>
                    
                  </div>
                  
                </div>
              </div>
              
            </div>
          </div>
          
        </div>
        
        <!-- footer -->
        
        <style>
          #magnet-bottom {
            margin:0;
            padding:0;
            position:fixed;
            left:0;
            bottom:0;
            z-index:6900;
            text-align:center;
            width:100%;
          }
          #magnet-bottom iframe {
            margin:0 auto;
            padding:0;
            box-shadow:0px 0px 10px #333;
            -moz-box-shadow:0px 0px 10px #333;
            -webkit-box-shadow:0px 0px 10px #333;
          }
        </style>
        <div id="magnet-bottom">
        </div>
        
        
        
        <div id="cbs-footer">
          <div class="clear">
          </div>
          
          <div id="cbs-footer-wrapper" style="width:auto">
            
            <div class="footer-links">
              <a href="#!">
                CBS Entertainment
              </a>
              
              <span>
                |
              </span>
              <a href="#!">
                About CBS Corporation
              </a>
              
              <span>
                |
              </span>
              <a href="#!">
                Careers
              </a>
              
              <span>
                |
              </span>
              <a href="#!">
                Closed Captioning
              </a>
              
              <span>
                |
              </span>
              <a href="#!">
                Video Description
              </a>
              
              <span>
                |
              </span>
              <a href="#!">
                Privacy Policy
              </a>
              
              <span>
                |
              </span>
              <a href="#!">
                Ad Choice
              </a>
            </div>
            <div class="footer-links">
              <a href="#!">
                Terms of Use
              </a>
              
              <span>
                |
              </span>
              <a href="#!">
                Advertise
              </a>
              
              <span>
                |
              </span>
              <a href="#!">
                Casting
              </a>
              
              <span>
                |
              </span>
              <a href="#!" target="_blank">
                Broadcast Feedback
              </a>
              
              <span>
                |
              </span>
              <a href="#!">
                Site Feedback
              </a>
              
              <span>
                |
              </span>
              <a href="#!" target="_blank">
                Help
              </a>
              
              <span>
                |
              </span>
              <a href="#!">
                Site Map
              </a>
              
              <span>
                |
              </span>
              <a href="#!">
                Eye-lerts
              </a>
              
              <span>
                |
              </span>
              <a href="#!" target="_blank">
                Ratings Guidelines
              </a>
            </div>
            <a class="footer-logo" alt="CBS.com" title="CBS.com">
              CBS.com
            </a>
            
            <div class="footer-copyright">
              &copy;2014 CBS Interactive. All rights reserved.
            </div>
            
          </div>
          
          
          
          
          
          
          
          
          
          
          
          
          <div id="interstitial" style="position:absolute;top:-5000px;left:-5000px;">
          </div>
          
          
          
          
          
          
          
          <style>
            div#masterPageWrapper {
              overflow:hidden;
            }
            div#leader-plus-top {
              padding: 10px 0 }
            div#leader-plus-top:empty {
              padding:0 }
            div#leader-bottom {
              padding-top: 10px }
            div#leader-bottom:empty {
              padding-top:0 }
            div#leader-top > div > table, div#leader-top > div > div, div#leader-top > div > iframe {
              text-align: center;
              margin: 0 auto !important}
            div#leader-plus-top > div > table, div#leader-plus-top > div > div, div#leader-plus-top > div > iframe {
              text-align: center;
              margin: 0 auto !important}
          </style>
        </div>
        
      </div>
      
    </div>
  </div>
  
  </div>
  
  

		
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