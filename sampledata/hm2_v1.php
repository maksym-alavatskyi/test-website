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

	<script type="text/javascript">
		 function doNothing(){
			return false;
		 }						 
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
<div class="content">



<!------------------------------------------------------------------------------------------>

<h2>HM (long page) - elements with mixed attributes</h2>

    <div id=wmHomePageWrapper>
    </div>
    <header class=wmHeader>
      <span id=header-20 class=futureCustomer>
        <section class="wmTopMainNav container">

          <article class="wmUtilNav pull-right clearfix">
            <nav>
              <ul class=nav>
          
              				<br>
				<br>

                <li id=storeFinderDropdownId>
                  <a onClick="return doNothing()" href="#!" class=dropdown-toggle data-toggle=dropdown title="[1] THIS IS THE LINK">[1] THIS IS THE LINK </a>
				  <br>
				  <br>
				  <button type="button">[2] THIS IS THE BUTTON</button> 
				  <b class=arrow>
                  </b>
                  <ul class=dropdown-menu>
                    <div class=wmStoreFinder>
                      <form>
						<br>
						

						 
                        <input id=wmStoreFinderSubmit type=submit onClick="return doNothing()" value="[3] THIS IS THE SUBMIT"/>
												 
                      </form>
                    </div>
                  </ul>
                </li>
				
			      <br>
				                          <a  onClick="return doNothing" title="Weekly Ad">
                          <img height=100 width=100 src="http://i3.walmartimages.com/images/Site/Categories/HomePage/2013/Week33/0913/WM_TAB_100x110_image.jpg">
                        </a>
				==========================================================================================								
				<br>
				<br>
				<br>

				
                <li id=localAdDropdownId class=listDropdown>
                  <a  onClick="return doNothing" href="#!"  class=dropdown-toggle data-toggle=dropdown title="Weekly Ad">
                    Weekly Ad
                  </a>
                  <b class=arrow>
                  </b>
                  <ul class=dropdown-menu>
                    <div class=wmLocalAds>
                      <div class=localAdSpot>
                        <h5 class=localAdDate>
                          <a  onClick="return doNothing" href="#!"  title="Weekly Ad">
                            Weekly Ad
                          </a>
                        </h5>
                      </div>
                    </div>
                  </ul>
                </li>
                <li id=trackOrdersDropdown class=listDropdown>
                  <a  onClick="return doNothing" href="#!"  class=dropdown-toggle data-toggle=dropdown title="Track My Orders">
                    Track My Orders
                  </a>
                  <b class=arrow>
                  </b>
                  <ul class="dropdown-menu rightFlush">
                    <div class=wmTrackMyOrders>
                      <form action="https://www.walmart.com/cservice/ProcessAjaxFlyoutTrackOrder.do?povid=P1171-C1110.2784+1717.2782-L1" com.walmartlabs.pangaea.services.ems:ems:war:3.320 method=POST ems>
                        <div class=wmTrackErrorMessage>
                        </div>
                        <label class=wmTrackOrderLabel>
                          Please complete both fields
                        </label>
                        <input id=wmTrackOrderEmail name=email class=inputBox value="Email Address"/>
                        <input id=wmTrackOrderNumber name=inputOrderId class=inputBox value="Order Number (Last 6 digits)"/>
                        <a  onClick="return doNothing" href="#!"  class=wmForgotEmail title="Forgot Email or Order Number?">
                          Forgot Email or Order Number?
                        </a>
                        <input id=wmViewOrderStatus  onClick="return doNothing()" type=submit value="View Order Status"/>
                        <div class=orSpacer>
                          Or
                        </div>
                        <p class=wmSignInText>
                          <a  onClick="return doNothing" href="#!"  class=primary-blue title="Sign in">
                            Sign in
                          </a>
                          to see details and track multiple orders.
                        </p>
                      </form>
                    </div>
                  </ul>
                </li>
                <li class=wmHelpLink>
                  <a  onClick="return doNothing" href="#!"  title=Help>
                    Help
                  </a>
                </li>
              </ul>
            </nav>
          </article>
        </section>
        <section class=ribbon>
          <article class="wmBottomMainNav container tabs-3 clearfix">
            <nav class="wmTabs topNav pull-left clearfix">
              <ul>
                <li class="homeTab activeTab">
                  <a  onClick="return doNothing" href="#!"  class=wmMainLogo title="Walmart. Save Money. Live Better.">
                    <!--
<img height=62 width=195 src="http://i3.walmartimages.com/images/Site/Categories/HomePage/2013/Week13/optimized/logo_b5c1050673bc2da31914928b3789793c.png">
-->
  </a>
  </li>
  <li class="trendingTab ">
    <a  onClick="return doNothing" href="#!"  title=Trending>
      <span class=line1>
        Trending
      </span>
      <span class="line2 light-blue">
        Now
      </span>
    </a>
    <span id=number class=trendingBadgeCounter>
    </span>
  </li>
  <li id=storeTab-12 class="myStoreTab ">
    <a  onClick="return doNothing" href="#!"  class=defaultStore title="Your Store">
      <span class=line1>
        Your Store
      </span>
      <span class="line2 light-blue">
        Set It Now
      </span>
    </a>
    <a  onClick="return doNothing" href="#!"  class=setStore title="My Store">
      <span class=line1>
        My Store
      </span>
      <span class="line2 light-blue">
      </span>
    </a>
  </li>
  </ul>
  </nav>
  <form action="#!" class=searchBox id=searchbox name=searchbox onsubmit="">
    <span class=add-on>
      <select class=selectBox onchange="document.searchbox.search_constraint.value = this.options[this.selectedIndex].value">
        <option value=0>
          All Departments
        </option>
        <option value=91083>
          Auto &amp; Tires
        </option>
        <option value=5427>
          Baby
        </option>
        <option value=1085666>
          Beauty
        </option>
        <option value=3920>
          Books
        </option>
        <option value=5438>
          Clothing
        </option>
        <option value=3944>
          Electronics
        </option>
        <option value=1094765>
          Gifts &amp; Registry
        </option>
        <option value=976759>
          Grocery
        </option>
        <option value=976760>
          Health
        </option>
        <option value=4044>
          Home
        </option>
        <option value=1072864>
          Home Improvement
        </option>
        <option value=3891>
          Jewelry
        </option>
        <option value=4096>
          Movies
        </option>
        <option value=4104>
          Music
        </option>
        <option value=2637>
          Party &amp; Occasions
        </option>
        <option value=5428>
          Patio &amp; Garden
        </option>
        <option value=5440>
          Pets
        </option>
        <option value=5431>
          Pharmacy
        </option>
        <option value=5426>
          Photo Center
        </option>
        <option value=4125>
          Sports &amp; Outdoors
        </option>
        <option value=4171>
          Toys
        </option>
        <option value=2636>
          Video Games
        </option>
        <option value=5436>
          Help
        </option>
      </select>
    </span>
    <div id=TypeAhead class=yui-ac>
      </div>
    </div>

    <input type=submit href="" class="bigGoButton " value=Go onClick="return doNothing()">
  </form>
  <input id=cdn_host name=cdnHost type=hidden value="search-cdn.walmart.com"/>
  <input id=index_id name=indexId type=hidden value=145a6280d32c />
  <input id=lookAheadId name=lookAhead type=hidden value=v2 />
  <input id=searchdropdowndivid name=searchdropdowndiv type=hidden value=searchConstraintDivId>
  <article class=myAccountContainer>
    <nav class=wmTabs>
      <ul>
        <li class="cartContainer round">
          <div id=wmPCartID class="wmPCart clearfix" title="View Cart to Checkout">
            <span class=dropdown-toggle data-toggle=dropdown   onClick="return doNothing" href="#!"   id=CartBtnLink>
              <a  onClick="return doNothing" href="#!" >
                <span class="cart empty">
                </span>
              </a>
              <span class=itemCount id=CartBtnCount>
              </span>
            </span>
          </div>
          <ul class="dropdown-menu rightFlush" id=pCartDropDown>
            <div class=pCartContainer>
              <div class="pCartDropContent pCartToggle" id=pCC>
              </div>
            </div>
          </ul>
        </li>
        <li class="myAccount listDropdown">
          <a  onClick="return doNothing" href="#!"  class=dropdown-toggle data-toggle=dropdown title="My Account">
            <span class=line1>
              My Account
            </span>
            <span class="line2 light-blue">
              <small>
                <span class=noAccount>
                  Hello. 
                  <span>
                    Sign In
                  </span>
                </span>
                <span class=withAccount>
                  Hi 
                  <span id=myAccountName-16>
                  </span>
                </span>
              </small>
            </span>
            <b class="arrow alternate">
            </b>
          </a>
          <ul class="dropdown-menu rightFlush">
            <div class="myAccountSubNav clearfix">
              <li class=noAccount>
                <a  onClick="return doNothing" href="#!"  title="Sign in">
                  Sign in
                </a>
                to view your account
              </li>
              <li class=noAccount>
                <a  onClick="return doNothing" href="#!"  title=Create>
                  Create
                </a>
                a new Walmart.com account
              </li>
              <li class=withAccount>
                <a  onClick="return doNothing" href="#!"  title="Track My Orders">
                  Track My Orders
                </a>
              </li>
              <li class=withAccount>
                <a  onClick="return doNothing" href="#!"  title="My Account">
                  My Account
                </a>
              </li>
              <li class=withAccount>
                <a  onClick="return doNothing" href="#!"  title="My Pharmacy Account">
                  My Pharmacy Account
                </a>
              </li>
              <li class=withAccount>
                <a  onClick="return doNothing" href="#!"  title="My VUDU Libary">
                  My VUDU Libary
                </a>
              </li>
              <li class=withAccount>
                <a  onClick="return doNothing" href="#!"  title="Sign Out">
                  Sign Out
                </a>
              </li>
            </div>
          </ul>
        </li>
      </ul>
    </nav>
  </article>
  </article>
  </section>
  </span>
  </header>
  <section id=wmMainContent class=clearfix>
    <div class=homePageNav>
      <nav class="wmLeftNav wmBox00 seeAllItems threeTabs">
        <ul>
          <li class="firstItem noDropBox">
            <div class="leftNavTitle clearfix">
              <a  onClick="return doNothing" href="#!"  title="Value of the Day">
                Value of the Day
              </a>
            </div>
          </li>
          <li>
            <div class="leftNavTitle clearfix" style="border:1px solid black;background-color: #F0FFEE;">
              <div >
                Electronics & Office
              </div>
			  
			  <b>--------------<b><br>
              <b>This is DIV </b><br>
			  <b>--------------<b>
            </div>
           </li>

          <li>
            <div style="border:1px solid black;background-color: #0FFFEE;">
              <div>
                Home, Furniture &amp; Patio
              </div>
              <b class=sprite_leftNav>
              </b>
            </div>
            <div class=leftNavBox>
              <div class=roundedBoxMenuCol4>
                <div class=boxImage style="top:0px; left:560px; width:227px;">
                  <a  onClick="return doNothing" href="#!" >
                  </a>
                </div>
                <div class=boxColumn>
                  <a  onClick="return doNothing" href="#!"  class=mainCategory title=Home>
                    Home
                  </a>
                  <a  onClick="return doNothing" href="#!"  title=Appliances>
                    Appliances
                  </a>
                  <a  onClick="return doNothing" href="#!"  title=Bath>
                    Bath
                  </a>
                  <a  onClick="return doNothing" href="#!"  title=Bedding>
                    Bedding
                  </a>
                  <a  onClick="return doNothing" href="#!"  title=Decor>
                    Decor
                  </a>
                </div>
                <div class=boxColumn style="border:1px solid black;">

                  
                  <a  onClick="return doNothing" href="#!"  title="Kitchen Appliances">
                    Kitchen Appliances
                  </a>
                  <a  onClick="return doNothing" href="#!"  title="Kitchen Storage">
                    Kitchen Storage
                  </a>
                </div>
                <div class=boxColumn>
                 
                  <a  onClick="return doNothing" href="#!"  title="Outdoor Power Equipment">
                    Outdoor Power Equipment
                  </a>
                  <a  onClick="return doNothing" href="#!"  title="Patio Furniture">
                    Patio Furniture
                  </a>
                  <a  onClick="return doNothing" href="#!"  title="Patio & Outdoor Decor ">
                    Patio & Outdoor Decor 
                  </a>
                  <a  onClick="return doNothing" href="#!"  title="Pools & Water Fun">
                    Pools & Water Fun
                  </a>
                  <a  onClick="return doNothing" href="#!"  class=mainCategory title="Wedding Registry">
                    Wedding Registry
                  </a>
                </div>
                <div class=boxColumn>
                </div>
              </div>
            </div>
          </li>

		  
          <li>
            <div class="leftNavTitle clearfix">
              <div>
                Grocery, Household & Pets
              </div>
              <b class=sprite_leftNav>
              </b>
            </div>
            <div class=leftNavBox>
              <div class=roundedBoxMenuCol4>
                <div class=boxImage style="top:0px; left:560px; width:203px;">
                  <a  onClick="return doNothing" href="#!" >
                  </a>
                </div>
                <div class=boxColumn>
                  
                  <a  onClick="return doNothing" href="#!"  title="Fresh Food">
                    Fresh Food
                  </a>
                  <a  onClick="return doNothing" href="#!"  title="Food Gifts">
                    Food Gifts
                  </a>
                  <a  onClick="return doNothing" href="#!"  title="Frozen Foods">
                    Frozen Foods
                  </a>
                  <a  onClick="return doNothing" href="#!"  title="Meal Solutions, Grains & Pasta">
                    Meal Solutions, Grains & Pasta
                  </a>
                  <a  onClick="return doNothing" href="#!"  title="Snacks, Cookies & Chips">
                    Snacks, Cookies & Chips
                  </a>
                </div>
                <div class=boxColumn>
                  <a  onClick="return doNothing" href="#!"  title="Cleaning Center">
                    Cleaning Center
                  </a>
                  <a  onClick="return doNothing" href="#!"  title="Eating Well Tips">
                    Eating Well Tips
                  </a>
                  <a  onClick="return doNothing" href="#!"  title="Food & Entertaining">
                    Food & Entertaining
                  </a>
                  <a  onClick="return doNothing" href="#!"  title="Pets Center">
                    Pets Center
                  </a>
                </div>
                <div class=boxColumn>
                  <a  onClick="return doNothing" href="#!"  class=mainCategory title="Household Essentials">
                    Household Essentials
                  </a>
                  <a  onClick="return doNothing" href="#!"  title=Batteries>
                    Batteries
                  </a>
                  <a  onClick="return doNothing" href="#!"  title="Paper & Plastic">
                    Paper & Plastic
                  </a>
                  <a  onClick="return doNothing" href="#!"  class="mainCategory" title="Grocery Delivery -
<span class=beta>
Beta
</span>
" >
  Grocery Delivery -
  <span class=beta>
    Beta
  </span>
                  </a>
                </div>
                <div class=boxColumn>
                </div>
              </div>
            </div>
          </li>
          <li class=noDropBox>
            <div class="leftNavTitle clearfix">
              <a  onClick="return doNothing" href="#!"  title="Mother&#39;s Day">
                Mother&#39;s Day
              </a>
            </div>
          </li>
          <li class="lastItem noDropBox">
            <div class="leftNavTitle clearfix">
              <a  onClick="return doNothing" href="#!"  title="See All Departments">
                See All Departments
              </a>
            </div>
          </li>
        </ul>
      </nav>
    </div>
    <div class=customColumn_One>
      <article class=wmBN id=wmBN style="margin-top:0px; margin-bottom:15px; margin-left:auto; margin-right:auto;">
        <div class=wmBNC>
          <style>
            .wm-widget-overlay .ui-dialog-content{
              background:#fff}
            #gotShelfClick:hover{
              cursor:pointer}
            .wm-widget-overlay{
              background:#fff;
              border:0}
            .wm-widget-overlay .ui-dialog-content{
              box-shadow:none;
              -moz-box-shadow:none;
              -webkit-box-shadow:none;
              border:0;
              border:0 none transparent!important;
              #widget_className_gotShelf .wm-widget-overlay-closeBox{
                display:inline-block;
                padding-top:2px}
          </style>
          
          <div class=wm-widget-overlay-template id=freeShippingOverlay title="Free Shipping">
            <img usemap="#freeShipDetail" src="http://i.walmartimages.com/i/if/hmp/fusion/11369_33169_ShippingProgram_SiteModule.jpg" alt="Free shipping offers."/>
            <map id=freeShipDetail name=freeShipDetail>
              <area shape=rect coords="470,490,591,527"  onClick="return doNothing" href="#!"  alt="See details" title="See details"/>
            </map>
          </div>
        </div>
      </article>
      <!-- SHOP001-povContainer -->
      <section class=wmPOVSection style="margin-top:10px; margin-bottom:4px; margin-left:auto; margin-right:auto;">
        <!-- BEGIN: POV Single Style-->
        <div id=wmPOV-31 class="wmPOVSingle clearfix">
          <div id=wmPOVSingle-31 class="carousel slide">
            <div class=carousel-inner>

              <div class=item data-title="Title 1">
                <!-- SHOP001-povModuleContainer -->
                <i data-img=true data-alt="alternate text" data-height=381 data-usemap="#planetmap-30" data-width=806 data-src="http://i3.walmartimages.com/images/Site/2014/Week13/28690-54889_HP_POV_MD.png">
                </i>
                <!-- SHOP001-povFloatContainer -->
                <!-- SHOP001-povClikableAreaContainer -->
                <map name=planetmap-30>
                  <area shape=polygon coords="599,1,806,1,806.205,647,99"  onClick="return doNothing" href="#!"  alt="Empowering Women Together"/>
                  <area shape=rect coords="1,1,808,381"  onClick="return doNothing" href="#!"  alt="Mother&#39;s Day"/>
                </map>
              </div>
            </div>
            <a class="carousel-control left" onClick="return doNothing" href="#!" data-slide=prev rel=nofollow>
              &lsaquo; &lsaquo; &lsaquo; &lsaquo; &lsaquo; &lsaquo; ---
            </a>
            <a class="carousel-control right" onClick="return doNothing" href="#!" data-slide=next rel=nofollow>
              --- &rsaquo; &rsaquo; &rsaquo; &rsaquo; &rsaquo; &rsaquo; 
            </a>
          </div>
        </div>
        <!-- END: POV 1 No Tabs-->
        <!-- Marker for P13N script -->
        
      </section>
      <article class=wmOMP style="margin-top:20px; margin-bottom:10px; margin-left:auto; margin-right:auto;">
        <div class=bgOMP>
          <div id=OAS_Frame1 style="width:740px;height:101px;">
          </div>
        </div>
      </article>
    </div>
    <link rel=stylesheet  onClick="return doNothing" href="#!" >
    <div id=WM_Home_IRS_Spot_1 class=irs>
    </div>
    <section class="wmSpotLight container" style="margin-top:15px; margin-bottom:15px; margin-left:auto; margin-right:auto;">
      <article class="span24 subContainerRow clearfix" style="height:100px;margin-top:0px; margin-bottom:0px; margin-left:auto; margin-right:auto;">
        <article class="span24 wm2upProducts">
          <div class=parentPositionDiv>
            <!-- Start Fix for UserStory PGSHP-88 -->
            <h3 class=wmSpotlightHeadlineModule style="top:px; left:px; color: ;">
            </h3>
            <div class="fromPrice clearfix" style="top:px; left:px;">
              <div class=fromPriceText style="color: ">
              </div>
              <div class=priceDollar style="color: ">
              </div>
            </div>
            <!-- End Fix for UserStory PGSHP-88 -->
            <a  onClick="return doNothing" href="#!" >
              <img height=100 usemap="#spotLightmap-36" width=1012 src="http://i3.walmartimages.com/images/Site/2014/Week13/29517-56097_HP_apple_z2.png">
            </a>
          </div>
          <!-- SHOP002-spotLightClickableAreaContainer -->
        </article>
      </article>
    </section>
    <section class="wmSpotLight container" style="margin-top:15px; margin-bottom:15px; margin-left:auto; margin-right:auto;">
      <article class="span24 subContainerRow clearfix" style="height:41px;margin-top:5px; margin-bottom:-20px; margin-left:auto; margin-right:auto;">
        <article class="span24 wm2upProducts">
          <div class=parentPositionDiv>
            <!-- Start Fix for UserStory PGSHP-88 -->
            <h3 class=wmSpotlightHeadlineModule style="top:px; left:px; color: ;">
            </h3>
            <div class="fromPrice clearfix" style="top:px; left:px;">
              <div class=fromPriceText style="color: ">
              </div>
              <div class=priceDollar style="color: ">
              </div>
            </div>
            <!-- End Fix for UserStory PGSHP-88 -->
          </div>
          <!-- SHOP002-spotLightClickableAreaContainer -->
        </article>
      </article>
    </section>

    <section class="wmSpotLight container" style="margin-top:15px; margin-bottom:15px; margin-left:auto; margin-right:auto;">
      <article class="span24 subContainerRow clearfix" style="height:225px;margin-top:0px; margin-bottom:0px; margin-left:auto; margin-right:auto;">
        <article class="wm2UpProducts right-border">
          <div class=parentPositionDiv>
            <!-- Start Fix for UserStory PGSHP-88 -->
            <h3 class=wmSpotlightHeadlineModule style="top:px; left:px; color: ;">
            </h3>
            <div class="fromPrice clearfix" style="top:px; left:px;">
              <div class=fromPriceText style="color: ">
              </div>
              <div class=priceDollar style="color: ">
              </div>
            </div>
          </div>
          <!-- SHOP002-spotLightClickableAreaContainer -->
        </article>
        <article class="wm2UpProducts ">
          <div class=parentPositionDiv>
            <!-- Start Fix for UserStory PGSHP-88 -->
            <h3 class=wmSpotlightHeadlineModule style="top:px; left:px; color: ;">
            </h3>
            <div class="fromPrice clearfix" style="top:px; left:px;">
              <div class=fromPriceText style="color: ">
              </div>
              <div class=priceDollar style="color: ">
              </div>
            </div>
            <!-- End Fix for UserStory PGSHP-88 -->
            <a  onClick="return doNothing" href="#!"  title="Shop Air Conditioners & Fans">
            </a>
          </div>
          <div class="headlineBlock hlbBtm">
            <a  onClick="return doNothing" href="#!"  title="Shop Air Conditioners & Fans">
              Shop Air Conditioners & Fans 
              <i class=cssArrow>
              </i>
            </a>
          </div>
          <!-- SHOP002-spotLightClickableAreaContainer -->
        </article>
      </article>
    </section>
    <section class="wmSpotLight container" style="margin-top:15px; margin-bottom:15px; margin-left:auto; margin-right:auto;">
      <article class="span24 subContainerRow clearfix" style="height:125px;margin-top:0px; margin-bottom:0px; margin-left:auto; margin-right:auto;">
        <article class="span24 wm2upProducts">
          <div class=parentPositionDiv>
            <!-- Start Fix for UserStory PGSHP-88 -->
            <h3 class=wmSpotlightHeadlineModule style="top:px; left:px; color: ;">
            </h3>
            <div class="fromPrice clearfix" style="top:px; left:px;">
              <div class=fromPriceText style="color: ">
              </div>
              <div class=priceDollar style="color: ">
              </div>
            </div>
            <!-- End Fix for UserStory PGSHP-88 -->
            <img height=225 usemap="#spotLightmap-70" width=1012 src="http://i3.walmartimages.com/images/Site/Categories/HomePage/2013/Week50/0116/28176-47678_HP-1012x200.png">
          </div>
          <!-- SHOP002-spotLightClickableAreaContainer -->
          <map name=spotLightmap-70>
            <area shape=rect coords="1,1,388,224"  onClick="return doNothing" href="#!"  alt="Savings Center"/>
            <area shape=rect coords="381,3,579,224"  onClick="return doNothing" href="#!"  alt=Clearance />
            <area shape=rect coords="582,1,774,224"  onClick="return doNothing" href="#!"  alt=Rollbacks />
            <area shape=rect coords="778,1,1011,222"  onClick="return doNothing" href="#!"  alt="Special Buys"/>
          </map>
        </article>
      </article>
    </section>
    <section class="wmRR span24 clearfix" id=wmDDC style="margin-top:15px; margin-bottom:30px; margin-left:auto; margin-right:auto;">
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
      <h2 class=title>
        Special savings, stories and more
      </h2>
      <div id=carDDC class=car>
        <div class=previous>
        </div>
        <div class="vpt nav">
          <ul>
            <li>
              <div class=cat2>
                <a  onClick="return doNothing" href="#!"  title="Get the Year&#39;s Coolest Movie, Toys &amp; More">
                  Get the Year&#39;s Coolest Movie, Toys &amp; More
                </a>
              </div>
            </li>
            <li>
              <div>
                <a  onClick="return doNothing" href="#!"  title="Keep Your Cool With Fans from $18">
                </a>
              </div>
              <div class=cat2>
                <a  onClick="return doNothing" href="#!"  title="Keep Your Cool With Fans from $18">
                  Keep Your Cool With Fans from $18 
                </a>
              </div>
            </li>

            <li>
              <div>
                <a  onClick="return doNothing" href="#!"  title="Get More, Save More with Value Bundles">
                  <i data-img=true data-alt="Get More, Save More with Value Bundles" data-border=0 data-height=150 data-width=150 data-src="http://i3.walmartimages.com/images/Site/Categories/HomePage/2013/Week48/1221/FC6.jpg">
                  </i>
                </a>
              </div>
              <div class=cat2>
                <a  onClick="return doNothing" href="#!"  title="Get More, Save More with Value Bundles">
                  Get More, Save More with Value Bundles
                </a>
              </div>
            </li>
          </ul>
        </div>
        <div class=next>
        </div>
      </div>
    </section>
    
    <!-- end .wmMarketingLinks -->
    <div id=WM_Home_IRS_Spot_2 class=irs>
    </div>
    
    
    <article class=wmOMP style="margin-top:30px; margin-bottom:30px; margin-left:auto; margin-right:auto;">
      <div class=bgOMP>
        <div id=OAS_Frame2 style="width:740px;height:101px;">
        </div>
      </div>
    </article>
  </section>
  <section class=wmFooter>
    <div class="bleed-bg clearfix">
      <div class=bleed-top>
      </div>
      <div class="bleed bleed-bottom">
      </div>
    </div>
    <section class=container>
      <article class=span4>
        <h5>
          Walmart Credit Card
        </h5>
        <ul>
          <li>
            <a  onClick="return doNothing" href="#!"  title="Apply Now">
              Apply Now.
            </a>
          </li>
          <li class=wmCCard>
            <a  onClick="return doNothing" href="#!"  title="Walmart Credit Card.">
            </a>
          </li>
        </ul>
        <h5 class=marginTop>
          Financial Services
        </h5>
        <ul>
          <li>
            <a  onClick="return doNothing" href="#!"  title="Walmart Credit Card">
              Walmart Credit Card
            </a>
          </li>
          <li>
            <a  onClick="return doNothing" href="#!"  title="Walmart MoneyCenter">
              Walmart MoneyCenter
            </a>
          </li>
          <li>
            <a  onClick="return doNothing" href="#!"  title="Manage Account &amp; Pay Bill">
              Manage Account & Pay Bill
            </a>
          </li>
        </ul>
      </article>
      <section class=span15>
        <article class="span4 small">
          <h5>
            Get to know us
          </h5>
          <ul>
            <li>
              <a  onClick="return doNothing" href="#!"  title=Corporate>
                Corporate
              </a>
            </li>
            <li>
              <a  onClick="return doNothing" href="#!"  title="Our Story">
                Our Story
              </a>
            </li>
            <li>
              <a  onClick="return doNothing" href="#!"  title="News &amp; Views">
                News & Views
              </a>
            </li>
            <li>
              <a  onClick="return doNothing" href="#!"  title="Giving Back">
                Giving Back
              </a>
            </li>
            <li>
              <a  onClick="return doNothing" href="#!"  title="Global Responsibility">
                Global Responsibility
              </a>
            </li>
            <li>
              <a  onClick="return doNothing" href="#!"  title=Investors>
                Investors
              </a>
            </li>
            <li>
              <a  onClick="return doNothing" href="#!"  title=Suppliers>
                Suppliers
              </a>
            </li>
            <li>
              <a  onClick="return doNothing" href="#!"  title=Careers>
                Careers
              </a>
            </li>
            <li>
              <a  onClick="return doNothing" href="#!"  title="@WalmartLabs">
                @WalmartLabs
              </a>
            </li>
          </ul>
        </article>
        <article class="span4 padding-none">
          <h5>
            Walmart.com
          </h5>
          <ul>
            <li>
              <a  onClick="return doNothing" href="#!"  title="About Walmart.com">
                About Walmart.com
              </a>
            </li>
            <li>
              <a  onClick="return doNothing" href="#!"  title="Terms of Use">
                Terms of Use
              </a>
            </li>
            <li>
              <a  onClick="return doNothing" href="#!"  title="Affiliate Program">
                Affiliate Program
              </a>
            </li>
            <li>
              <a  onClick="return doNothing" href="#!"  title="Sponsorship Submission">
                Sponsorship Submission
              </a>
            </li>
            <li>
              <a  onClick="return doNothing" href="#!"  title="International Customers">
                International Customers
              </a>
            </li>
            <li>
              <a  onClick="return doNothing" href="#!"  title="About Our Ads">
                About Our Ads
              </a>
            </li>
            <li>
              <a  onClick="return doNothing" href="#!"  title="Store Finder">
                Store Finder
              </a>
            </li>
            <li>
              <a  onClick="return doNothing" href="#!"  title="Printable Coupons">
                Printable Coupons
              </a>
            </li>
            <li>
              <a  onClick="return doNothing" href="#!"  title="See All Departments">
                See All Departments
              </a>
            </li>
            <li>
              <a  onClick="return doNothing" href="#!"  title="View Mobile Site">
                View Mobile Site
              </a>
            </li>
          </ul>
        </article>
        <article class="span4 padding-none">
          
          <h6>
            Sign up for savings
          </h6>
          <p class=caption>
            Get Walmart values delivered to your inbox.
          </p>
          <form name=form1 method=POST target=_top action=x onSubmit="validateForm('email_source_id', '1178', 'email_subscribe','1', 'form1', this);return false;">
            <input id=emailAddress class="span5 margin-bottom-20" type=email name=emailAddress required=true value="enter email address"/>
            <span class=line1>
              <input id=emailSubmit class="button small sumbit" type=submit name=emailSubmit value="Sign Up"/>
              <p class="pull-right privacyLink">
                <a  onClick="return doNothing" href="#!"  title="Privacy Policy">
                  Privacy Policy
                </a>
              </p>
            </span>
          </form>
        </div>
        <div>
          <p class=caption>
            Keep up with our latest values, tips & tidbits
          </p>
          <ul class=wmSocialList>
            <li>
              <a  onClick="return doNothing" href="#!"  class="socialIcon facebook" title="Walmart on facebook">
              </a>
            </li>
            <li>
              <a  onClick="return doNothing" href="#!"  class="socialIcon pintrest" title="Walmart on pintrest">
              </a>
            </li>
            <li>
              <a  onClick="return doNothing" href="#!"  class="socialIcon google" title="Walmart on google+">
              </a>
            </li>
          </ul>
          <span class="wmSocialList pull-right">
            <a class="socialIcon mobileApps">
            </a>
            <span class=caption>
              <a  onClick="return doNothing" href="#!" >
                mobile apps
              </a>
            </span>
          </span>
        </div>
      </article>
      <section class=internationalSites>
        Visit our international sites:&nbsp; 
        <a  onClick="return doNothing" href="#!"  title=Argentina>
          Argentina
        </a>
        &nbsp;|&nbsp; 
        <a  onClick="return doNothing" href="#!"  title=Brazil>
          Brazil
        </a>
        &nbsp;|&nbsp; 
        <a  onClick="return doNothing" href="#!"  title=Canada>
          Canada
        </a>
        &nbsp;|&nbsp; 
        <a  onClick="return doNothing" href="#!"  title=Chile>
          Chile
        </a>
        &nbsp;|&nbsp; 
        <a  onClick="return doNothing" href="#!"  title=China>
          China
        </a>
        &nbsp;|&nbsp; 
        <a  onClick="return doNothing" href="#!"  title=Japan>
          Japan
        </a>
        &nbsp;|&nbsp; 
        <a  onClick="return doNothing" href="#!"  title=Mexico>
          Mexico
        </a>
        &nbsp;|&nbsp; 
        <a  onClick="return doNothing" href="#!"  title="United Kingdom">
          United Kingdom
        </a>
      </section>
    </section>
    <section class=wmFooter-copyright>
      <p>
        &copy; 2014 Wal-Mart Stores, Inc.
      </p>
    </section>
  </section>
  <div class=executeAds style="display: hidden">
    <!-- WALMART.adsDefinitionObject.ads.push( { "unitName": "/55875582/walmart-us/homepage", "size": [728, 90], "divId": "OAS_Frame1", "targeting": [ {"key":"location", "value":"Frame1"} ] } ); -->
  </div>
  <div class=executeAds style="display: hidden">
    <!-- WALMART.adsDefinitionObject.ads.push( { "unitName": "/55875582/walmart-us/homepage", "size": [728, 90], "divId": "OAS_Frame2", "targeting": [ {"key":"location", "value":"Frame2"} ] } ); -->
  </div>
  <div id=outOfPage>
  </div>
  <div class=executeAds style="display: hidden">
    <!-- WALMART.adsDefinitionObject.outOfPage.push( { "unitName": "/55875582/walmart-us/homepage", "divId": "outOfPage", "targeting": [ {"key":"location", "value":"OOP"} ] } ); WALMART.adsDefinitionObject.targeting =[ {"key":"wm_visit_id", "value": getCookie('com.wm.visitor') == null ? '' : getCookie('com.wm.visitor')}, {"key":"ptype", "value":"Category"} ]; WALMART.googleAds.loadGoogleAds(); -->
  </div>
  <div style="display:none" id=webanalytics>
    <!-- SiteCatalyst code version: H.23.3 Copyright 1996-2009 Adobe, Inc. All Rights Reserved More info available at http://www.omniture.com -->
    
    
    
    <!-- End SiteCatalyst code version: H.23.3 -->
  </div>
  <span class=wmServerLog>
    ndc-emsvcs-app52 
  </span>
  <div id=povidsforthepage style="display:none;">
    P1171-C3658.2967+1126.4804-L0 | P1171-C3658.2967+1126.4805-L0 | P1171-C3658.2967+1126.4805-L1 | P1171-C1143.2974+1139.4823-L0 | P1171-C1143.2957+1139.4756-L0 | P1171-C1143.2978+1139.4806-L0 | P1171-C1143.2978+1139.4806-L1 | P1171-C1143.2978+1139.4757-L0 | P1171-C1143.2978+1139.4757-L1 | P1171-C1143.2973+1139.4758-L0 | P1171-C1143.2973+1139.4758-L1 | P1171-C1143.2973+1139.4788-L0 | P1171-C1143.2973+1139.4788-L1 | P1171-C1143.3596+1139.4760-L0 | P1171-C1143.3596+1139.4760-L1 | P1171-C1143.3596+1139.4759-L0 | P1171-C1143.3596+1139.4759-L1 | P1171-C1143.3286+1139.4553-L0 | P1171-C1143.3286+1139.4553-L1 | P1171-C1143.3286+1139.4553-L2 | P1171-C1143.3286+1139.4553-L3 | 
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