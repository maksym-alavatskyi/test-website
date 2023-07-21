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
s
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/scripts.js"></script>

<script src="http://code.jquery.com/jquery-1.7.2.min.js" type="text/javascript"></script>
		<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        
		
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css"
        />
        
        
        <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css"
        />
        <style>
            #map {
                width:500px;
                height:500px;
            }
            td {
                vertical-align:top
            }
            #draggable {
                width: 100px;
                height: 100px;
                padding: 0.5em;
                float: left;
                margin: 10px 10px 10px 0;
            }
            #droppable {
                width: 150px;
                height: 150px;
                padding: 0.5em;
                float: left;
                margin: 10px;
            }
            #resizable {
                width: 150px;
                height: 150px;
                padding: 0.5em;
            }
            #resizable h3 {
                text-align: center;
                margin: 0;
            }
            #feedback {
                font-size: 1.4em;
            }
            #selectable .ui-selecting {
                background: #FECA40;
            }
            #selectable .ui-selected {
                background: #F39814;
                color: white;
            }
            #selectable {
                list-style-type: none;
                margin: 0;
                padding: 0;
                width: 450px;
            }
            #selectable li {
                margin: 3px;
                padding: 1px;
                float: left;
                width: 100px;
                height: 80px;
                font-size: 4em;
                text-align: center;
            }
            .column {
                width: 170px;
                float: left;
                padding-bottom: 100px;
            }
            .portlet {
                margin: 0 1em 1em 0;
            }
            .portlet-header {
                margin: 0.3em;
                padding-bottom: 4px;
                padding-left: 0.2em;
            }
            .portlet-header .ui-icon {
                float: right;
            }
            .portlet-content {
                padding: 0.4em;
            }
            .ui-sortable-placeholder {
                border: 1px dotted black;
                visibility: visible !important;
                height: 50px !important;
            }
            .ui-sortable-placeholder * {
                visibility: hidden;
            }
            label, input {
                display:block;
            }
            input.text {
                margin-bottom:12px;
                width:95%;
                padding: .4em;
            }
            fieldset {
                padding:0;
                border:0;
                margin-top:25px;
            }
            div#users-contain {
                width: 350px;
                margin: 20px 0;
            }
            div#users-contain table {
                margin: 1em 0;
                border-collapse: collapse;
                width: 100%;
            }
            div#users-contain table td, div#users-contain table th {
                border: 1px solid #eee;
                padding: .6em 10px;
                text-align: left;
            }
            .ui-dialog .ui-state-error {
                padding: .3em;
            }
            .validateTips {
                border: 1px solid transparent;
                padding: 0.3em;
            }
            #red, #green, #blue {
                float: left;
                clear: left;
                width: 300px;
                margin: 15px;
            }
            #swatch {
                width: 120px;
                height: 100px;
                margin-top: 18px;
                margin-left: 350px;
                background-image: none;
            }
            #red .ui-slider-range {
                background: #ef2929;
            }
            #red .ui-slider-handle {
                border-color: #ef2929;
            }
            #green .ui-slider-range {
                background: #8ae234;
            }
            #green .ui-slider-handle {
                border-color: #8ae234;
            }
            #blue .ui-slider-range {
                background: #729fcf;
            }
            #blue .ui-slider-handle {
                border-color: #729fcf;
            }
        </style>
        <script>
            //drag,drop
            $(function () {
                $("#draggable").draggable();
                $("#droppable").droppable({
                    drop: function (event, ui) {
                        $(this)
                            .addClass("ui-state-highlight")
                            .find("p")
                            .html("Dropped!");
                    }
                });
            });

            //resize
            $(function () {
                $("#resizable").resizable();
            });

            //selectable
            $(function () {
                $("#selectable").selectable();
            });

            //sortable
            $(function () {
                $(".column").sortable({
                    connectWith: ".column"
                });

                $(".portlet").addClass("ui-widget ui-widget-content ui-helper-clearfix ui-corner-all")
                    .find(".portlet-header")
                    .addClass("ui-widget-header ui-corner-all")
                    .prepend("<span class='ui-icon ui-icon-minusthick'></span>")
                    .end()
                    .find(".portlet-content");

                $(".portlet-header .ui-icon").click(function () {
                    $(this).toggleClass("ui-icon-minusthick").toggleClass("ui-icon-plusthick");
                    $(this).parents(".portlet:first").find(".portlet-content").toggle();
                });

                $(".column").disableSelection();
            });

            //accordion
            $(function () {
                $("#accordion").accordion({
                    collapsible: true
                });
            });

            //autocomplete	
            $(function () {
                var availableTags = [
                    "ActionScript",
                    "AppleScript",
                    "Asp",
                    "BASIC",
                    "C",
                    "C++",
                    "Clojure",
                    "COBOL",
                    "ColdFusion",
                    "Erlang",
                    "Fortran",
                    "Groovy",
                    "Haskell",
                    "Java",
                    "JavaScript",
                    "Lisp",
                    "Perl",
                    "PHP",
                    "Python",
                    "Ruby",
                    "Scala",
                    "Scheme"];
                $("#tags").autocomplete({
                    source: availableTags
                });
            });
            //date picker
            $(function () {
                $("#datepicker").datepicker();
            });

            //modal box form
            $(function () {
                var name = $("#name"),
                    email = $("#email"),
                    password = $("#password"),
                    allFields = $([]).add(name).add(email).add(password),
                    tips = $(".validateTips");

                function updateTips(t) {
                    tips.text(t)
                        .addClass("ui-state-highlight");
                    setTimeout(function () {
                        tips.removeClass("ui-state-highlight", 1500);
                    }, 500);
                }

                function checkLength(o, n, min, max) {
                    if (o.val().length > max || o.val().length < min) {
                        o.addClass("ui-state-error");
                        updateTips("Length of " + n + " must be between " + min + " and " + max + ".");
                        return false;
                    } else {
                        return true;
                    }
                }

                function checkRegexp(o, regexp, n) {
                    if (!(regexp.test(o.val()))) {
                        o.addClass("ui-state-error");
                        updateTips(n);
                        return false;
                    } else {
                        return true;
                    }
                }

                $("#dialog-form").dialog({
                    autoOpen: false,
                    height: 300,
                    width: 350,
                    modal: true,
                    buttons: {
                        "Create an account": function () {
                            var bValid = true;
                            allFields.removeClass("ui-state-error");

                            bValid = bValid && checkLength(name, "username", 3, 16);
                            bValid = bValid && checkLength(email, "email", 6, 80);
                            bValid = bValid && checkLength(password, "password", 5, 16);

                            bValid = bValid && checkRegexp(name, /^[a-z]([0-9a-z_])+$/i, "Username may consist of a-z, 0-9, underscores, begin with a letter.");
                            // From jquery.validate.js (by joern), contributed by Scott Gonzalez: http://projects.scottsplayground.com/email_address_validation/
                            bValid = bValid && checkRegexp(email, /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i, "eg. ui@jquery.com");
                            bValid = bValid && checkRegexp(password, /^([0-9a-zA-Z])+$/, "Password field only allow : a-z 0-9");

                            if (bValid) {
                                $("#users tbody").append("<tr>" +
                                    "<td>" + name.val() + "</td>" +
                                    "<td>" + email.val() + "</td>" +
                                    "<td>" + password.val() + "</td>" +
                                    "</tr>");
                                $(this).dialog("close");
                            }
                        },
                        Cancel: function () {
                            $(this).dialog("close");
                        }
                    },
                    close: function () {
                        allFields.val("").removeClass("ui-state-error");
                    }
                });

                $("#create-user")
                    .button()
                    .click(function () {
                    $("#dialog-form").dialog("open");
                });
            });

            //slider

            function hexFromRGB(r, g, b) {
                var hex = [
                r.toString(16),
                g.toString(16),
                b.toString(16)];
                $.each(hex, function (nr, val) {
                    if (val.length === 1) {
                        hex[nr] = "0" + val;
                    }
                });
                return hex.join("").toUpperCase();
            }

            function refreshSwatch() {
                var red = $("#red").slider("value"),
                    green = $("#green").slider("value"),
                    blue = $("#blue").slider("value"),
                    hex = hexFromRGB(red, green, blue);
                $("#swatch").css("background-color", "#" + hex);
            }
            $(function () {
                $("#red, #green, #blue").slider({
                    orientation: "horizontal",
                    range: "min",
                    max: 255,
                    value: 127,
                    slide: refreshSwatch,
                    change: refreshSwatch
                });
                $("#red").slider("value", 255);
                $("#green").slider("value", 140);
                $("#blue").slider("value", 60);
            });

            //spinner
            $(function () {
                function latlong() {
                    return new google.maps.LatLng($("#lat").val(), $("#lng").val());
                }

                function position() {
                    map.setCenter(latlong());
                }
                $("#lat, #lng").spinner({
                    step: .001,
                    change: position,
                    stop: position
                });

                var map = new google.maps.Map($("#map")[0], {
                    zoom: 8,
                    center: latlong(),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });
            });

            //tooltip
            $(function () {
                $("#show-option").tooltip({
                    track: true,
                    show: {

                        effect: "slideDown",
                        delay: 250
                    }
                });
                $("#hide-option").tooltip({
                    track: true,
                    hide: {
                        effect: "explode",
                        delay: 250
                    }
                });
                $("#open-event").tooltip({
                    show: null,

                    position: {
                        my: "left top",
                        at: "left bottom"
                    },
                    open: function (event, ui) {
                        ui.tooltip.animate({
                            top: ui.tooltip.position().top + 10
                        }, "fast");
                    }
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
  
  <!-- Begin Content -->
  <div class="content">
     <table cellpadding="20" border="1">
            <tr>
                <td width="25%">
                    
<h3>Drag / Drop</h3>

                    <div id="draggable" class="ui-widget-content">
                        <p>Drag me to my target</p>
                    </div>
                    <div id="droppable" class="ui-widget-header">
                        <p>Drop here</p>
                    </div>
                </td>
                <td width="25%">
                    
<h3>Select single/multiple</h3>

                    <ol id="selectable">
                        <li class="ui-state-default">1</li>
                        <li class="ui-state-default">2</li>
                        <li class="ui-state-default">3</li>
                        <li class="ui-state-default">4</li>
                        <li class="ui-state-default">5</li>
                        <li class="ui-state-default">6</li>
                        <li class="ui-state-default">7</li>
                        <li class="ui-state-default">8</li>
                        <li class="ui-state-default">9</li>
                        <li class="ui-state-default">10</li>
                        <li class="ui-state-default">11</li>
                        <li class="ui-state-default">12</li>
                    </ol>
                </td>
                <td width="25%">
                    
<h3>Accordion</h3>

                    <div id="accordion">
                         <h3>Section 1</h3>

                        <div>
                            <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo
                                ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</p>
                        </div>
                         <h3>Section 2</h3>

                        <div>
                            <p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In suscipit
                                faucibus urna.</p>
                        </div>
                         <h3>Section 3</h3>

                        <div>
                            <p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                                Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                                ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia
                                ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.</p>
                            <ul>
                                <li>List item one</li>
                                <li>List item two</li>
                                <li>List item three</li>
                            </ul>
                        </div>
                         <h3>Section 4</h3>

                        <div>
                            <p>Cras dictum. Pellentesque habitant morbi tristique senectus et netus et
                                malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus
                                orci luctus et ultrices posuere cubilia Curae; Aenean lacinia mauris vel
                                est.</p>
                            <p>Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                inceptos himenaeos.</p>
                        </div>
                    </div>
                </td>
                <td width="25%">
                    
<h3>Date picker</h3>

                    <p>Date:
                        <input type="text" id="datepicker" />
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    
<h3>Resizable box</h3>

                    <div id="resizable" class="ui-widget-content">
                         <h3 class="ui-widget-header">Resizable</h3>

                    </div>
                </td>
                <td>
                    
<h3>Sortable items + collapse / expand</h3>

                    <div class="column">
                        <div class="portlet">
                            <div class="portlet-header">Feeds</div>
                            <div class="portlet-content">drag this box to re-order</div>
                        </div>
                        <div class="portlet">
                            <div class="portlet-header">News</div>
                            <div class="portlet-content">drag this box to re-order</div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="portlet">
                            <div class="portlet-header">Shopping</div>
                            <div class="portlet-content">drag this box to re-order</div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="portlet">
                            <div class="portlet-header">Links</div>
                            <div class="portlet-content">drag this box to re-order</div>
                        </div>
                        <div class="portlet">
                            <div class="portlet-header">Images</div>
                            <div class="portlet-content">drag this box to re-order</div>
                        </div>
                    </div>
                </td>
                <td>
                    
<h3>Autocomplete</h3>

                    <div class="ui-widget">
                        <label for="tags">Tags:</label>
                        <input id="tags" />
                    </div>
                </td>
                <td>
                    
<h3>Form + dialog box</h3>

                    <div id="dialog-form" title="Create new user">
                        <p class="validateTips">All form fields are required.</p>
                        <form>
                            <fieldset>
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="text ui-widget-content ui-corner-all"
                                />
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" value="" class="text ui-widget-content ui-corner-all"
                                />
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" value=""
                                class="text ui-widget-content ui-corner-all" />
                            </fieldset>
                        </form>
                    </div>
                    <div id="users-contain" class="ui-widget">
                         <h3>Existing Users:</h3>

                        <table id="users" class="ui-widget ui-widget-content">
                            <thead>
                                <tr class="ui-widget-header ">
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John Doe</td>
                                    <td>john.doe@example.com</td>
                                    <td>johndoe1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <button id="create-user">Create new user</button>
                </td>
            </tr>
            <tr>
                <td>
                    
<h3>
    Simple Colorpicker
</h3>

                    <div id="red"></div>
                    <div id="green"></div>
                    <div id="blue"></div>
                    <div id="swatch" class="ui-widget-content ui-corner-all"></div>
                </td>
                <td>
                    
<h3>Map spinner</h3>

                    <label for="lat">Latitude</label>
                    <input id="lat" name="lat" value="32.084556" />
                    <br />
                    <label for="lng">Longitude</label>
                    <input id="lng" name="lng" value="34.800589" />
                    <div id="map"></div>
                </td>
                <td>
                    
<h3>Tooltips</h3>

                    
<h3>There are various ways to customize the animation of a tooltip. <br/>
You can use the <a id="show-option" href="#" title="slide down on show">show</a> and
<a id="hide-option" href="#" title="explode on hide">hide</a> options.<br/>
You can also use the <a id="open-event" href="#" title="move down on show">open event</a>.</h3>

                </td>
                <td></td>
            </tr>
        </table>
        
    
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