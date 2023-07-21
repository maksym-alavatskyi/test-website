<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <meta charset="UTF-8">
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
        <style>
            table td
            {
            padding: 0px !important;
            }
            .additional{
            border-color: #7f2600;
            border-width: 3px;
            border-style: solid;
            }
            div.coloredBorder1{
            border-color: #00FF00;
            border-width: 3px;
            border-style: solid;
            border-style: dotted;
            }
            span.coloredBorder2{
            border-color: #FF0000;
            border-width: 3px;
            border-style: solid;
            border-style: dotted;
            }
            li.coloredBorder3{
            border-color: #0000FF;
            border-width: 3px;
            border-style: solid;
            border-style: dotted;
            }
            selection.coloredBorder4{
            border-color: #00FFFF;
            border-width: 3px;
            border-style: solid;
            border-style: dotted;
            }
            article.coloredBorder5{
            border-color: #FF00FF;
            border-width: 3px;
            border-style: solid;
            border-style: dotted;
            }
        </style>
    </head>
    <body>
        <div  id="container">
            <!-- Begin Header Wrapper -->
            <div  id="page-top">
                <div  id="header-wrapper">
                    <!-- Begin Header -->
                    <div  id="header">
                        <div  id="logo"><a href="index.php"><img src="style/images/logo.png" alt="Delphic" /></a></div>
                        <!-- Logo --> 
                        <!-- Begin Menu -->
                        <div  id="menu-wrapper">
                            <div  id="smoothmenu1" class="ddsmoothmenu">
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
                    <div class="additional">
                        <h1>Element Addressing - Walmart</h1>
                        <header class=wmHeader>
                            <span id=header-20 class=coloredBorder2 >
                                <div class="additional">X</div>
                              		<section class="wmTopMainNav container">
									<div class="additional">
                                    <article class="wmUtilNav pull-right clearfix">
                                        <div class="additional">X</div>
                                        <nav>
                                            <ul class=nav>
                                                <br>
                                                <br>
                                                <li id=storeFinderDropdownId class="coloredBorder3">
                                                    <a onClick="return doNothing()" href="#!" class=dropdown-toggle data-toggle=dropdown title="[1] THIS IS THE LINK">[1] THIS IS THE LINK </a>
                                                    <br>
                                                    <br>
                                                    <button id=buttt type="button">[2] THIS IS THE BUTTON (have ID)</button> 
                                                    <br>
                                                    <div class="additional">X</div>
                                                    <b class=arrow> </b>
                                                    <ul class=dropdown-menu>
                                                        <div class="coloredBorder1" id=stamId>
                                                            <form>
                                                                <br>
                                                                <input  type=submit onClick="return doNothing()" value="[3] THIS IS THE SUBMIT ("/>
                                                                <br>
                                                            </form>
                                                            <div class="additional">X</div>
                                                        </div>
                                                    </ul>
                                                </li>
                                                <br>
                                                <a  onClick="return doNothing" title="Weekly Ad">
                                                <img height=100 width=100 src="http://i3.walmartimages.com/images/Site/Categories/HomePage/2013/Week33/0913/WM_TAB_100x110_image.jpg">
                                                </a>
                                                <div class="additional">X</div>
                                                ==========================================================================================								
                                                <br>
                                                <br>
                                                <div class="additional">X</div>
                                                <br>
                                                <li id=localAdDropdownId class="coloredBorder3">
                                                    <a  onClick="return doNothing" href="#!"  class=dropdown-toggle data-toggle=dropdown title="Weekly Ad">
                                                    Weekly Ad
                                                    </a>
                                                    <b class=arrow>
                                                    </b>
                                                    <ul class=dropdown-menu>
                                                        <div class=wmLocalAds>
                                                            <div class=localAdSpot>
                                                                <div class="additional">X</div>
                                                                <h5 class=localAdDate>
                                                                    <a  onClick="return doNothing" href="#!"  title="Weekly Ad">
                                                                    Weekly Ad
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </ul>
                                                </li>
                                                <li id=trackOrdersDropdown class="coloredBorder3">
                                                    <a  onClick="return doNothing" href="#!"  class=dropdown-toggle data-toggle=dropdown title="Track My Orders">
                                                    Track My Orders
                                                    </a>
                                                    <b class=arrow>
                                                    </b>
                                                    <ul class="dropdown-menu rightFlush">
                                                        <div class="coloredBorder1">
                                                            <form action="https://www.walmart.com/cservice/ProcessAjaxFlyoutTrackOrder.do?povid=P1171-C1110.2784+1717.2782-L1" com.walmartlabs.pangaea.services.ems:ems:war:3.320 method=POST ems>
                                                                <div class=wmTrackErrorMessage>
                                                                    <div class="additional">X</div>
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
                                                                <div class="additional">X</div>
                                                                </a>
                                                                to see details and track multiple orders.
                                                                </p>
                                                            </form>
                                                        </div>
                                                    </ul>
                                                </li>
                                                <li >
                                                    <a  onClick="return doNothing" href="#!"  title=Help>
                                                    Help
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </article>
									</div>
                                </section>
                            </span>
                            <section class=ribbon>
                                <article class="wmBottomMainNav container tabs-3 clearfix">
                                    <nav class="wmTabs topNav pull-left clearfix">
                                        <ul>
                                            <li >
                                                <a  onClick="return doNothing" href="#!"  class=wmMainLogo title="Walmart. Save Money. Live Better.">
                                                    <!--
                                                        <img height=62 width=195 src="http://i3.walmartimages.com/images/Site/Categories/HomePage/2013/Week13/optimized/logo_b5c1050673bc2da31914928b3789793c.png">
                                                        -->
                                                </a>
                                            </li>
                                            <div class="additional">X</div>
                                            <li id=xxx class="coloredBorder3">
                                                <div class="additional">X</div>
                                                <a  onClick="return doNothing" href="#!"  title=Trending>
                                                    <span class=line1>
                                                    Trending
                                                    </span>
                                                    <div class="additional">X</div>
                                                    <span class="line2 light-blue">
                                                    Now
                                                    </span>
                                                </a>
                                                <span>
                                                <a  onClick="return doNothing" href="#!"  class=defaultStore title="Your Store"> 
                                                <span class=line1>
                                                Your Store
                                                </span>
                                                <span class="line2 light-blue">
                                                Set It Now
                                                </span>
                                                </a>
                                                </span>
                                            </li>
                                            <li id=storeTab-12 class=coloredBorder3 ">
                                                <div class="additional">X</div>
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
                                    <div class="additional">X</div>
                                    <form action="#!" class=searchBox id=searchbox name=searchbox onsubmit="">
                                        <div class="additional">X</div>
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
                    </div>
					
					
					
					
					
					
                    <input type=submit href="" class="bigGoButton " value=Go onClick="return doNothing()">
                    </form>
					
					<div class="additional">
					
					
                    <input id=cdn_host name=cdnHost type=hidden value="search-cdn.walmart.com"/>
                    <input id=index_id name=indexId type=hidden value=145a6280d32c />
                    <div class="additional">X</div>
                    <input id=lookAheadId name=lookAhead type=hidden value=v2 />
                    <input id=searchdropdowndivid name=searchdropdowndiv type=hidden value=searchConstraintDivId/>
                    <article class=myAccountContainer>
                    <nav class=wmTabs>
                    <div class="coloredBorder1">
                    <ul>
                    <li class="caafrtContainer round">
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
                    <span class=coloredBorder2 id=myAccountName-16>
                    <div class="additional">X</div>
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
                    </div>
                    </nav>
                    </article>
					</div>
                    </article>
                    </section>
                    </span>
                    </header>
                    <section id=wmMainContent class=coloredBorder4>
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
                                        <div class="leftNavTitle clearfix">
                                            <div>
                                                Electronics & Office
                                            </div>
                                            <b class=sprite_leftNav>
                                            </b>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="leftNavTitle clearfix">
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
                                                <div class=boxColumn>
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
                    </section>
                    <div class=customColumn_One>
                        <article id=wmBN class="coloredBorder5">
                            <div class=wmBNC>
                                <div class="additional">X</div>
                                <div class=wm-widget-overlay-template id=coloredBorder1 title="Free Shipping">
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
                            <div class="coloredBorder1" id=wmPOV-31>
                                <div class="additional">X</div>
                                <div class="coloredBorder1" id=wmPOVSingle-31 >
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
                                    <a class="carousel-control left" href='#wmPOVSingle-31' data-slide=prev rel=nofollow>
                                    &lsaquo;
                                    </a>
                                    <a class="carousel-control right" href='#wmPOVSingle-31' data-slide=next rel=nofollow>
                                    &rsaquo;
                                    </a>
                                </div>
                            </div>
                            <!-- END: POV 1 No Tabs-->
                            <!-- Marker for P13N script -->
                        </section>
                        <article class=wmOMP style="margin-top:20px; margin-bottom:10px; margin-left:auto; margin-right:auto;">
                            <div class=bgOMP>
                                <div class="coloredBorder1" id=OAS_Frame1 style="width:740px;height:101px;">
                                    <div class="additional">X</div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <link rel=stylesheet  onClick="return doNothing" href="#!" >
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
                                    Go and kiss Maayan!
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
                        <article class="span24 subContainerRow clearfix" >
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
                                    <!--img height=225 usemap="#spotLightmap-70" width=1012 src="http://i3.walmartimages.com/images/Site/Categories/HomePage/2013/Week50/0116/28176-47678_HP-1012x200.png"-->
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
                    <section class="coloredBorder5" id=wmDDC >
                        <div class="additional">X</div>
                        <h2 class=title>
                            Special savings, stories and more
                        </h2>
                        <div class="coloredBorder1" id=carDDC >
                            <div class=previous>
                            </div>
                            <div class="vpt nav">
                                <ul>
                                    <li>
                                        <div>
                                            <a  onClick="return doNothing" href="#!"  title="Get the Year&#39;s Coolest Movie, Toys &amp; More">
                                            <img alt="Get the Year&#39;s Coolest Movie, Toys &amp; More" border=0 height=150 width=150 src="http://i3.walmartimages.com/images/Site/2014/Week8/0078693683896_150X150.jpg">
                                            </a>
                                        </div>
                                        <div class=cat2>
                                            <a  onClick="return doNothing" href="#!"  title="Get the Year&#39;s Coolest Movie, Toys &amp; More">
                                            Get the Year&#39;s Coolest Movie, Toys &amp; More
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <a  onClick="return doNothing" href="#!"  title="Keep Your Cool With Fans from $18">
                                            <img alt="Keep Your Cool With Fans from $18" border=0 height=150 width=150 src="http://i3.walmartimages.com/images/Site/2014/Week7/031914/0004601345315_150X150.jpg">
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
                    <article class=wmOMP style="margin-top:30px; margin-bottom:30px; margin-left:auto; margin-right:auto;">
                        <div class=bgOMP>
                            <div class="coloredBorder1" id=OAS_Frame2 style="width:740px;height:101px;">
                            </div>
                        </div>
                    </article>
                    </section>
                    <section class=wmFooter>
                        <div class="bleed-bg clearfix">
                            <div class=bleed-top>      </div>
                            <div class="bleed bleed-bottom">      </div>
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
                                </article>
                                <article class="span4 padding-none">
                                    <h5>
                                        Customer Service
                                    </h5>
                                    <ul>
                                        <li>
                                            <a  onClick="return doNothing" href="#!"  title="Help Center">
                                            Help Center
                                            </a>
                                        </li>
                                        <li>
                                            <a  onClick="return doNothing" href="#!"  title="Track Your Order">
                                            Track Your Order
                                            </a>
                                        </li>
                                        <li>
                                            <a  onClick="return doNothing" href="#!"  title="Returns Policy">
                                            Returns Policy
                                            </a>
                                        </li>
                                        <li>
                                            <a  onClick="return doNothing" href="#!"  title="Return an Item">
                                            Return an Item
                                            </a>
                                        </li>
                                        <li>
                                            <a  onClick="return doNothing" href="#!"  title="Product Recalls">
                                            Product Recalls
                                            </a>
                                        </li>
                                        <li>
                                            <a  onClick="return doNothing" href="#!"  title="Associate Discount">
                                            Associate Discount
                                            </a>
                                        </li>
                                        <li>
                                            <a  onClick="return doNothing" href="#!"  title="Privacy &amp; Security">
                                            Privacy & Security
                                            </a>
                                        </li>
                                        <li>
                                            <a  onClick="return doNothing" href="#!"  title="California Privacy Rights">
                                            California Privacy Rights
                                            </a>
                                        </li>
                                        <li>
                                            <a  onClick="return doNothing" href="#!"  title="Contact Us">
                                            Contact Us
                                            </a>
                                        </li>
                                        <li>
                                            <a  onClick="return doNothing" href="#!"  title=Feedback>
                                            Feedback
                                            </a>
                                        </li>
                                    </ul>
                                </article>
                                <article class="span4 padding-none">
                                    <h5>
                                        In the Spotlight
                                    </h5>
                                    <div class="coloredBorder1" id=gFooterSpotLight >
                                        <div class="additional">X</div>
                                        <ul class=ftlink>
                                            <li>
                                                <span class=showmore>
                                                [+]
                                                </span>
                                                <a  onClick="return doNothing" href="#!"  title=Baby>
                                                Baby
                                                </a>
                                                <ul class=sublink style="display: none">
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="Baby Cribs">
                                                        Baby Cribs
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="Baby Registry">
                                                        Baby Registry
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="Car Seats">
                                                        Car Seats
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title=Diapers>
                                                        Diapers
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="Jogging Strollers">
                                                        Jogging Strollers
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title=Strollers>
                                                        Strollers
                                                        </a>
                                                    <li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class=showmore>
                                                [+]
                                                </span>
                                                <a  onClick="return doNothing" href="#!"  title=Bikes>
                                                Bikes
                                                </a>
                                                <ul class=sublink style="display: none">
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="Cruiser Bikes">
                                                        Cruiser Bikes
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="Fixie Bikes">
                                                        Fixie Bikes
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="Kids Bikes">
                                                        Kids Bikes
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="Mountain Bikes">
                                                        Mountain Bikes
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="Road Bikes">
                                                        Road Bikes
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title=Tricycles>
                                                        Tricycles
                                                        </a>
                                                    <li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class=showmore>
                                                [+]
                                                </span>
                                                <a  onClick="return doNothing" href="#!"  title="Cell Phones">
                                                Cell Phones
                                                </a>
                                                <ul class=sublink style="display: none">
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title=Android>
                                                        Android
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="iPhone 5">
                                                        iPhone 5
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="Prepaid Phones">
                                                        Prepaid Phones
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="Samsung Phones">
                                                        Samsung Phones
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="Straight Talk">
                                                        Straight Talk
                                                        </a>
                                                    <li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class=showmore>
                                                [+]
                                                </span>
                                                <a  onClick="return doNothing" href="#!"  title=Clothing>
                                                Clothing
                                                </a>
                                                <ul class=sublink style="display: none">
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title=Backpacks>
                                                        Backpacks
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="Big and Tall">
                                                        Big and Tall
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title=Dresses>
                                                        Dresses
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="Engagement rings">
                                                        Engagement rings
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title=Leggings>
                                                        Leggings
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title=Lingerie>
                                                        Lingerie
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title=Rings>
                                                        Rings
                                                        </a>
                                                    <li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class=showmore>
                                                [+]
                                                </span>
                                                <a  onClick="return doNothing" href="#!"  title=Electronics>
                                                Electronics
                                                </a>
                                                <ul class=sublink style="display: none">
                                                    <li id="asd" class="coloredBorder3">
                                                        <div class="additional">X</div>
                                                        <a  onClick="return doNothing" href="#!"  title=iPads>
                                                        iPads
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title=Laptops>
                                                        Laptops
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title=Printers>
                                                        Printers
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title=Tablets>
                                                        Tablets
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title=TVs>
                                                        TVs
                                                        </a>
                                                    </li>
                                                    </li>
                                                    </li>
                                                    </li>
                                                    </li>
                                                    </li>
                                                    </li>
                                                    </li>
                                                    </li>
                                                </ul>
                                            <li>
                                                <span class=showmore>
                                                [+]
                                                </span>
                                                <a  onClick="return doNothing" href="#!"  title=Gifts>
                                                Gifts
                                                </a>
                                                <ul class=sublink style="display: none">
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="Gift Cards">
                                                        Gift Cards
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="Gifs for Him">
                                                        Gifs for Him
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="Gifts for Her">
                                                        Gifts for Her
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="Anniversary Gifts">
                                                        Anniversary Gifts
                                                        </a>
                                                    <li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class=showmore>
                                                [+]
                                                </span>
                                                <a  onClick="return doNothing" href="#!"  title="Healthy Living">
                                                Healthy Living
                                                </a>
                                                <ul class=sublink style="display: none">
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="Exercise Equipment">
                                                        Exercise Equipment
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title=Fitbit>
                                                        Fitbit
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title=Nutrition>
                                                        Nutrition
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title=Vitamins>
                                                        Vitamins
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="Weight Loss">
                                                        Weight Loss
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="Yoga Pants">
                                                        Yoga Pants
                                                        </a>
                                                    <li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class=showmore>
                                                [+]
                                                </span>
                                                <a  onClick="return doNothing" href="#!"  title=Home>
                                                Home
                                                </a>
                                                <ul class=sublink style="display: none">
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title=Curtains>
                                                        Curtains
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title=Desks>
                                                        Desks
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title=Furniture>
                                                        Furniture
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="Kitchen Appliances">
                                                        Kitchen Appliances
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title=Mattresses>
                                                        Mattresses
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title=Rugs>
                                                        Rugs
                                                        </a>
                                                    <li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class=showmore>
                                                [+]
                                                </span>
                                                <a  onClick="return doNothing" href="#!"  title=Toys>
                                                Toys
                                                </a>
                                                <ul class=sublink style="display: none">
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title=Barbie>
                                                        Barbie
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title=Dolls>
                                                        Dolls
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="Hot Wheels">
                                                        Hot Wheels
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title=LEGO>
                                                        LEGO
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="WWE Toys">
                                                        WWE Toys
                                                        </a>
                                                    <li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class=showmore>
                                                [+]
                                                </span>
                                                <a  onClick="return doNothing" href="#!"  title="Video Games">
                                                Video Games
                                                </a>
                                                <ul class=sublink style="display: none">
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="Nintendo DS">
                                                        Nintendo DS
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title=PS4>
                                                        PS4
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title=PSP>
                                                        PSP
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title=Wii>
                                                        Wii
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="Xbox One">
                                                        Xbox One
                                                        </a>
                                                    <li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class=showmore>
                                                [+]
                                                </span>
                                                <a  onClick="return doNothing" href="#!"  title="Walmart Specials">
                                                Walmart Specials
                                                </a>
                                                <ul class=sublink style="display: none">
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="Easter 2014">
                                                        Easter 2014
                                                        </a>
                                                    <li>
                                                    <li style="margin-left:20px;">
                                                        <a  onClick="return doNothing" href="#!"  title="Popular Products">
                                                        Popular Products
                                                        </a>
                                                    <li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class=showmore>
                                                [+]
                                                </span>
                                                <a  onClick="return doNothing" href="#!"  title="Buying Guides">
                                                Buying Guides
                                                </a>
                                                <ul class=sublink style="display: none">
                                                </ul>
                                            </li>
                                        </ul>
                                </article>
                            </section>
                            <article class=span5>
								<div class="wmBorderLeft wmBorderBottom">
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
									<div class="additional">X</div>
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
                    <div class="coloredBorder1" id=outOfPage>
                    <div class="additional">X</div>
                    <div class="additional">X</div>
                    </div>
                    <div class=executeAds style="display: hidden">
                    <!-- WALMART.adsDefinitionObject.outOfPage.push( { "unitName": "/55875582/walmart-us/homepage", "divId": "outOfPage", "targeting": [ {"key":"location", "value":"OOP"} ] } ); WALMART.adsDefinitionObject.targeting =[ {"key":"wm_visit_id", "value": getCookie('com.wm.visitor') == null ? '' : getCookie('com.wm.visitor')}, {"key":"ptype", "value":"Category"} ]; WALMART.googleAds.loadGoogleAds(); -->
                    </div>
                    <div class="coloredBorder1" id=povidsforthepage style="display:none;">
                    P1171-C3658.2967+1126.4804-L0 | P1171-C3658.2967+1126.4805-L0 | P1171-C3658.2967+1126.4805-L1 | P1171-C1143.2974+1139.4823-L0 | P1171-C1143.2957+1139.4756-L0 | P1171-C1143.2978+1139.4806-L0 | P1171-C1143.2978+1139.4806-L1 | P1171-C1143.2978+1139.4757-L0 | P1171-C1143.2978+1139.4757-L1 | P1171-C1143.2973+1139.4758-L0 | P1171-C1143.2973+1139.4758-L1 | P1171-C1143.2973+1139.4788-L0 | P1171-C1143.2973+1139.4788-L1 | P1171-C1143.3596+1139.4760-L0 | P1171-C1143.3596+1139.4760-L1 | P1171-C1143.3596+1139.4759-L0 | P1171-C1143.3596+1139.4759-L1 | P1171-C1143.3286+1139.4553-L0 | P1171-C1143.3286+1139.4553-L1 | P1171-C1143.3286+1139.4553-L2 | P1171-C1143.3286+1139.4553-L3 | 
                    </div>
                    </div>
<!------------------------------------------------------------------------------------------>
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