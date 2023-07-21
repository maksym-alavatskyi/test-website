<?php session_start(); if(isset($_SESSION[ 'login_user'])){$user_check=$_SESSION[ 'login_user']; $user_cookie=$_COOKIE[ 'USER']; }?>

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
            <li><a href="index-2.php">Insights page A</a>
            </li>
            <li><a href="index-3.php">Insights page B</a>
            </li>
			<li><a href="responsive-1.php">Responsive page</a>
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
			<li><a href="ecom" id="ecomHomepage">Ecom Homepage</a>
            </li>
        </ul>
    </li>

    <!----- Events ------------------------------------------>

    <li><a href="page-buttons.php" id="pageButtons">Events</a>
        <ul>
            <li><a href="page-buttons.php" id="pageButtonsLink">Buttons with Events</a>
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
        <ul id="FeaturesUL">
            <li><a href="page-tabs-toggle.php">Tabs &amp; Toggle</a>
            </li>
			<li><a href="page-tabs-toggle-topdiv.php">Tabs &amp; Toggle div above</a>
            </li>
			<li><a href="page-tabs-toggle-long.php">Tabs &amp; Toggle Long</a>
            </li>
			<li><a href="page-tabs-toggle-long-dynamic.php">Tabs &amp; Toggle Long dynamic</a>
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
            <li>
                <a href="ProxyFeature.php">Proxy Feature</a>
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
                <ul id="ElementAddressingUL">
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
            <li><a><b>Event Triggered Recording</b></a>
                <ul>
                    <li>
                        <a href="eventTriggered1.php">Event Triggered Recording - page 1</a>
                    </li>
                    <li>
                        <a href="eventTriggered2.php">Event Triggered Recording - page 2</a>
                    </li>
                </ul>
            </li>
			<li><a><b>Visual Editor</b></a>
			<ul>
                    <li>
                        <a href="visualeditor.php">Visual Editor Testing Page</a>
                    </li>
                    <li>
                        <a href="vedivs.php">Visual Editor Multi Divs</a>
                    </li>
                </ul>
            </li>
			<li><a href="domainNavigation.php" id="domainNavigation">Domain Navigation</a>
			</li>
			<li><a href="leanPage.php" id="leanPage">Lean Page</a>
			</li>
			<li><a href=abTesting.php>A&#92;B Testing</a></li>
      <li><a href=iframe.php>Iframe</a></li>
            <li><a>Text Extraction</a>
                <ul>
                    <li>
                        <a href="hidden_text.php">Hidden text</a>
                    </li>
                    <li>
                        <a href="hidden_text_to_visible.php">Hidden text to visible</a>
                    </li>
                    <li>
                        <a href="french_text.php">French text</a>
                    </li>
                    <li>
                        <a href="english_text.php">English text</a>
                    </li>
                    <li>
                        <a href="spanish_text.php">Spanish text</a>
                    </li>
                    <li>
                        <a href="german_text.php">German text</a>
                    </li>
                    <li>
                        <a href="italian_text.php">Italian text</a>
                    </li>
                    <li>
                        <a href="dutch_text.php">Dutch text</a>
                    </li>
                    <li>
                        <a href="max_length_text.php">Max length text</a>
                    </li>
                    <li>
                        <a href="danish_text.php">Danish text</a>
                    </li>
                    <li>
                        <a href="norwegian_text.php">Norwegian text</a>
                    </li>
                    <li>
                        <a href="russian_text.php">Russian text</a>
                    </li>
                    <li>
                        <a href="japanese_text.php">Japanese text</a>
                    </li>
                    <li>
                        <a href="chinese_text.php">Chinese text</a>
                    </li>
                    <li>
                        <a href="regex1.php">Regex 1</a>
                    </li>
                    <li>
                        <a href="regex2.php">Regex 2</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>

    <!----- Contact ------------------------------------------>
    <li><a href="contact.php">Test forms</a>
        <ul id="TestFormsUL">
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
                <ul id="ContactDivVariationsUL">
                    <li><a href="contactdiv.php">div form</a>
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
                    <li><a href="login.php">Login</a>
                    </li>
                    <li><a href="step1.php">Wizard Form</a>
                    </li>
                    <li><a href="calculator.php">Calculator</a>
                    </li>
                    <li><a href="withError.php">With Error</a>
                    </li>
                </ul>
                <li><a><b>Pages for HM</b></a>
                    <ul>
                        <li><a href="hm1_v1.php">Short page w/o div</a>
                        </li>
                        <li><a href="hm1_v2.php">Short page with div</a>
                        </li>
                        <li><a href="hm2_v1.php">Long page w/o div</a>
                        </li>
                        <li><a href="hm2_v2.php">Long page with div</a>
                        </li>
                    </ul>
                </li>
            </li>
        </ul>
    </li>

    <!----- member ------------------------------------------>
    <li><a href="members.php">members</a>
    </li>

    <!----- Log in ------------------------------------------>
    <?php if (($user_check) && $user_cookie==$user_check) { echo "<li><a href='logout.php'>Log out</a></li>"; } else echo "<li><a href='login.php'>Log in</a></li>"; ?>


</ul>
