<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    
    <head>
		<script type='text/javascript'>
			// enable XHR wrapper / ChangeMonitor
		//	window.ClickTaleSettings = { XHRWrapper: { Enable: true} };
		</script>
        <script type="text/javascript">
            // jQuery version control
            function submitform() {
                var vers = document.form.search.options[document.form.search.selectedIndex].value;
				var provid = document.form.selectProvider.options[document.form.selectProvider.selectedIndex].value;
                if (!vers) {
                    document.location.href = "Attr_jQuery.html?ver=" + ver + "&provider=" + provid;
                } else {
                    document.location.href = "Attr_jQuery.html?ver=" + vers + "&provider=" + prov;
                }
            }
            mode = "id"; // get ver from url	
            function getUrlVars() {
                var vars = {};
                var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
                    vars[key] = value;
                });
                return vars;
            }
            ver = getUrlVars()["ver"];
            if (!ver) {
                ver = "1.7.2"
            }
			
			prov = getUrlVars()["provider"];
			if (!prov) 
				prov = 'auto';
			else 
				if (prov != 'events' && prov != 'observers' && prov != 'jQuery' && prov !='auto') {
					alert('invalid ChangeMonitor provider. \nprovider will be selected automatically'); 
					prov = 'auto';
				}				
			
			/* mode = getUrlVars()["mode"];
			if (mode != "id") { 
				mode = "path" 
			} */
			
			/*if (prov == 'events' || prov == 'observers' || prov == 'jQuery') {
                window.ClickTaleSettings.ChangeMonitor.Provider = prov;
            }
			else {
				if (prov) { 
					alert('invalid ChangeMonitor provider. \nprovider will be selected automatically'); 				
					document.location.href = "childs_jQuery.html?ver=" + ver;
					
				}
				prov = 'auto';
			}*/
        </script>
        <script type="text/javascript"> 
		
		window.ClickTaleSettings = window.ClickTaleSettings || {};
		window.ClickTaleSettings.ChangeMonitor = {
		
		Enable: true,
		AddressingMode: mode,
		
		Providers: [prov],
		OnReadyHandler: function (changeMonitor) {
		changeMonitor.observe(); 
					  
			/*
			if  (typeof changeMonitor.observer == 'string') {				
				jQuery('#provider').html(changeMonitor.observer);	
			}
			*/
			
		 },
		 OnBeforeReadyHandler: function (settings) {
		  
		  
		  settings.Enable = window.ClickTaleGetUID ? !!ClickTaleGetUID() : false;
		   return settings;
		  }
		};    
		
</script>
        <script type="text/javascript">
            // get version from jQuery servers
            document.write('<script type="text/javascript" src="http://code.jquery.com/jquery-' + ver + '.js">');
            document.write('<\/script>');
        </script>
		
		
		
        <style type="text/css">
            #tabs {
                list-style: none;
                padding: 5px 0 4px 0;
                margin: 0 0 0 10px;
                font: 0.75em arial;
            }
            #tabs li {
                display: inline;
            }
            #tabs li a {
                border: 1px solid #ccc;
                padding: 4px 6px;
                text-decoration: none;
                background-color: #eeeeee;
                border-bottom: none;
                outline: none;
                border-radius: 5px 5px 0 0;
                -moz-border-radius: 5px 5px 0 0;
                -webkit-border-top-left-radius: 5px;
                -webkit-border-top-right-radius: 5px;
            }
            #tabs li a:hover {
                background-color: #dddddd;
                padding: 4px 6px;
            }
            #tabs li.active a {
                border-bottom: 1px solid #fff;
                background-color: #fff;
                padding: 4px 6px 5px 6px;
                border-bottom: none;
            }
            #tabs li.active a:hover {
                background-color: #eeeeee;
                padding: 4px 6px 5px 6px;
                border-bottom: none;
            }
            #tabs li a.icon_accept {
                background-position: 5px;
                background-repeat: no-repeat;
                padding-left: 24px;
            }
            #tabs li a.icon_accept:hover {
                padding-left: 24px;
            }
            #tabs_content_container {
                border: 1px solid #ccc;
                border-top: none;
                padding: 10px;
                width: 400px;
            }
            .tab_content {
                display: none;
            }
            table div {
                padding:20px;
                width:80%;
                border:1px black solid;
            }
            .myClass1 {
                background: black;
                color: white;
            }
            .myClass2 {
                border: 2px red dashed;
            }
            #jq {
                color: green;
                float:left;
            }
        </style>
        <title>Change Monitor - Attributes (jQuery)</title>
    </head>
    
    <body>
        <script type="text/javascript">
            var WRInitTime = (new Date()).getTime();
        </script>
         <h1>Change Monitor - Attributes (jQuery)</h1>
		 <h4 id="recVer">wait for info...</h4>

        <div id="jq">
            <img src="http://www.tobia.eu/images/jquery.png" />&nbsp;&nbsp;</div>
        <div>
            <form name="form">
                <select name="search" id="selectVersion" onchange="submitform(this.form)">
                    <option value="">current version:
                        <script type="text/javascript">
                            document.write(ver);
                        </script>
                    </option>
                    <option value="1.4">&nbsp;&nbsp;-&nbsp;1.4&nbsp;-&nbsp;&nbsp;</option>
                    <option value="1.5">&nbsp;&nbsp;-&nbsp;1.5&nbsp;-&nbsp;&nbsp;</option>
                    <option value="1.6">&nbsp;&nbsp;-&nbsp;1.6&nbsp;-&nbsp;&nbsp;</option>
                    <option value="1.7.2">&nbsp;&nbsp;-&nbsp;1.7.2&nbsp;-&nbsp;&nbsp;</option>
                    <option value="1.8.3">&nbsp;&nbsp;-&nbsp;1.8.3&nbsp;-&nbsp;&nbsp;</option>
                </select>
				<select name="selectProvider" id="selectProvider" onchange="submitform(this.form)">
                    
                    <option value="">&nbsp;&nbsp;-&nbsp;SELECT&nbsp;-&nbsp;&nbsp;</option>
                    <option value="">&nbsp;&nbsp;-&nbsp;auto&nbsp;-&nbsp;&nbsp;</option>
                    <option value="observers">&nbsp;&nbsp;-&nbsp;observers&nbsp;-&nbsp;&nbsp;</option>
                    <option value="events">&nbsp;&nbsp;-&nbsp;events&nbsp;-&nbsp;&nbsp;</option>
                    <option value="jQuery">&nbsp;&nbsp;-&nbsp;jQuery&nbsp;-&nbsp;&nbsp;</option>
                    
                </select>
				selected provider: <span id="provider"></span>
            </form>
        </div>
        <table cellpadding="10" style="width: 100%">
            <tr>
                <td style="width: 50%">
                     <h3>by ID</h3>

                    <table cellpadding="20" border="1" style="width: 100%">
                        <tr>
                            <td width="50%">
                                <div id="d1">Div 1</div>
                                <button id="jQbyIdAttr_01">(01) add class 1</button>
                                <button id="jQbyIdAttr_02">(02) add class 2</button>
                                <button id="jQbyIdAttr_03">(03) remove classes</button>
                                <br/>
                                <br/>
                                <div id="d12">Div 2</div>
                                <button id="jQbyIdAttr_04">(04) add Div 1 classes to Div 2 -.add()</button>
                            </td>
                            <td width="50%">
                                <ul id="tabs">
                                    <li class="active">
                                        <a href="#tab1">Tab 1</a>
                                    </li>
                                    <li>
                                        <a class="icon_accept" href="#tab2">Tab with icon</a>
                                    </li>
                                    <li>
                                        <a href="#tab3">Long name for the last tab</a>
                                    </li>
                                </ul>
                                <div id="tab1" class="tab_content" style="display: block;">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh
                                        urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat
                                        suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin
                                        nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur
                                        nibh quis urna gravida mollis.</p>
                                </div>
                                <div id="tab2" class="tab_content">
                                    <p>content for tab 2.</p>
                                </div>
                                <div id="tab3" class="tab_content">
                                    <p>bla bla bla</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div id="d2" title="div title before change">Hover to see title (or check console log)</div>
                                <button id="jQbyIdAttr_05">(05) change Div title</button>
                                <button id="jQbyIdAttr_06">(06) remove Div title</button>
                                <button id="jQbyIdAttr_07">(07) change Div width</button>
                                <button id="jQbyIdAttr_08">(08) change Div height</button>
                                <button id="jQbyIdAttr_09">(09) change Div offset</button>
                                <br />
                                <br />
                            </td>
                            <td>
                                <div id="bgdiv" >
                                    <p>some text </p>
                                </div>
                                <button id="jQbyIdAttr_23">(23) add background image</button>
                                <button id="jQbyIdAttr_24">(24) add background base64 image</button>
                                <br />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button id="jQbyIdAttr_10">(10) insert new Div</button>
                            </td>
                            <td>
                                <input id="chkBox2" type="checkbox" name="test1" value="qa1" />simple checkbox
                                <br />
                                <input id="chkBox" type="checkbox" name="test" value="qa" />checkbox with event
                                <button id="jQbyIdAttr_20">(20) change checkbox Property</button>
                                <br />
                                <br />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input id="textBox" type="text" name="text" disabled="disabled" value=""
                                />text box
                                <br />
                                <button id="jQbyIdAttr_11">(11) enable/disable text box</button>
                                <button id="jQbyIdAttr_12">(12) Change text box val</button>
                                <br />
                                <br />
                            </td>
                            <td>A
                                <input type="radio" name="opt" id="optA" />
                                <br />B
                                <input type="radio" name="opt" id="optB" />
                                <br />C
                                <input type="radio" name="opt" id="optC" />
                                <br/>
                                <button id="jQbyIdAttr_21">(21) Radio button change</button>
                                <button id="jQbyIdAttr_22">(22) unselect all</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div id="d4">test CSS Div</div>
                                <button id="jQbyIdAttr_13">(13) add css styling</button>
                                <button id="jQbyIdAttr_14">(14) remove css styling</button>
                            </td>
                            <td>
                                <div id="d3" style="background: blue"></div>
                                <button id="jQbyIdAttr_15">(15) toggle Div</button>
                                <button id="jQbyIdAttr_16">(16) fade Div</button>
                                <button id="jQbyIdAttr_17">(17) slide Div</button>
                                <button id="jQbyIdAttr_18">(18) animate Div</button>
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="width: 50%">
                     <h3>by Class</h3>

                    <table cellpadding="20" border="1" style="width: 100%">
                        <tr>
                            <td width="50%">
                                <div id="d1_cl" class="myClass">Div 1</div>
                                <button id="jQbyClassAttr_01">(01) add class 1</button>
                                <button id="jQbyClassAttr_02">(02) add class 2</button>
                                <button id="jQbyClassAttr_03">(03) remove classes</button>
                                <br/>
                                <br/>
                                <div id="d12_cl" class="myClass">Div 2</div>
                                <button id="jQbyClassAttr_04">(04) add Div 1 classes to Div 2 -.add()</button>
                            </td>
                            <td width="50%"></td>
                        </tr>
                        <tr>
                            <td>
                                <div id="d2_cl" class="myClass" title="div title before change">Hover to see title (or check console log)</div>
                                <button id="jQbyClassAttr_05">(05) change Div title</button>
                                <button id="jQbyClassAttr_06">(06) remove Div title</button>
                                <button id="jQbyClassAttr_07">(07) change Div width</button>
                                <button id="jQbyClassAttr_08">(08) change Div height</button>
                                <button id="jQbyClassAttr_09">(09) change Div offset</button>
                                <br />
                                <br />
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <td>
                                    <input id="chkBox2_cl" type="checkbox" name="test1" value="qa1" />simple checkbox
                                    <br />
                                    <input id="chkBox_cl" class="chckBox" type="checkbox" name="test" value="qa"
                                    />checkbox with event
                                    <button id="jQbyClassAttr_20">(20) change checkbox Property</button>
                                    <br />
                                    <br />
                                </td>
                        </tr>
                        <tr>
                            <td>
                                <input id="textBox_cl" type="text" name="text" class="txtBox" disabled="disabled"
                                value="" />text box
                                <br />
                                <button id="jQbyClassAttr_10">(10) enable/disable text box</button>
                                <button id="jQbyClassAttr_11">(11) Change text box val</button>
                                <br />
                                <br />
                            </td>
                            <td>A
                                <input type="radio" name="opt_cl" id="optA_cl" />
                                <br />B
                                <input type="radio" name="opt_cl" id="optB_cl" />
                                <br />C
                                <input type="radio" name="opt_cl" id="optC_cl" />
                                <br/>
                                <button id="jQbyClassAttr_22">(22) unselect all</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div id="d4_cl" class="myClass">test CSS Div</div>
                                <button id="jQbyClassAttr_12">(12) add css styling</button>
                                <button id="jQbyClassAttr_13">(13) remove css styling</button>
                            </td>
                            <td>
                                <div id="d3_cl" class="myClass" style="background: blue"></div>
                                <button id="jQbyClassAttr_15">(15) toggle Div</button>
                                <button id="jQbyClassAttr_16">(16) fade Div</button>
                                <button id="jQbyClassAttr_17">(17) slide Div</button>
                                <button id="jQbyClassAttr_18">(18) animate Div</button>
                            </td>
                        </tr>
                    </table>
                    </td>
            </tr>
        </table>
        <div id="ClickTaleDiv" style="display: none;"></div>
		
        <script type="text/javascript">
            if (typeof jQuery != 'function') {
                vers = prompt('jQuery version ' + ver +' is not valid. \nplease provide a valid value:','1.7.2');
				if (!vers) {
					vers = "1.7.2";
				}
                document.location.href = "attr_jQuery.html?ver=" + vers + "&provider=" + prov;

            } else {

                //add class1
                $("#jQbyIdAttr_01").click(function () {
                    $("#d1").addClass("myClass1");
                })

                //add class1 by class
                $("#jQbyClassAttr_01").click(function () {
                    $(".myClass:first").addClass("myClass1");
                })

                //add class2
                $("#jQbyIdAttr_02").click(function () {
                    $("#d1").addClass("myClass2");
                })

                //add class2 by class
                $("#jQbyClassAttr_02").click(function () {
                    $(".myClass:first").addClass("myClass2");
                })


                //remove classes
                $("#jQbyIdAttr_03").click(function () {
                    $("#d1").removeClass();
                })

                //remove classes by class
                $("#jQbyClassAttr_03").click(function () {
                    $(".myClass:first").removeClass().attr("class", "myClass");
                })

                //add div 2
                $("#jQbyIdAttr_04").click(function () {
                    var divCss = $("#d1").attr("class");
                    $("#d1").add("#d12").attr("class", divCss)
                })

                //add div 2 by class
                $("#jQbyClassAttr_04").click(function () {
                    var divCss = $(".myClass:first").attr("class");
                    $(".myClass:first").add(".myClass:eq(1)").attr("class", divCss)
                })

                //changeTitle
                $("#jQbyIdAttr_05").click(function () {
                    console.log("old title: " + $("#d2").attr("title"));
                    $("#d2").attr({
                        title: "div title has changed"
                    });
                    console.log("new title: " + $("#d2").attr("title"));
                })

                //changeTitle by class
                $("#jQbyClassAttr_05").click(function () {
                    console.log("old title: " + $("#d2").attr("title"));
                    $(".myClass:eq(2)").attr({
                        title: "div title has changed"
                    });
                    console.log("new title: " + $(".myClass:eq(2)").attr("title"));
                })

                //removeTitle
                $("#jQbyIdAttr_06").click(function () {
                    console.log("old title: " + $("#d2").attr("title"))
                    $("#d2").removeAttr("title");
                    console.log("new title: " + $("#d2").attr("title"))
                })

                //removeTitle by class
                $("#jQbyClassAttr_06").click(function () {
                    console.log("old title: " + $("#d2").attr("title"))
                    $(".myClass:eq(2)").removeAttr("title");
                    console.log("new title: " + $(".myClass:eq(2)").attr("title"))
                })

                //changeWidth
                $("#jQbyIdAttr_07").click(function () {
                    $("#d2").width(120);
                    console.log("Div width has changed");
                })


                //changeWidth by class
                $("#jQbyClassAttr_07").click(function () {
                    $(".myClass:eq(2)").width(120);
                    console.log("Div width has changed");
                })

                //changeHeight
                $("#jQbyIdAttr_08").click(function () {
                    $("#d2").height(150);
                    console.log("Div Height has changed");
                })

                //changeHeight by class
                $("#jQbyClassAttr_08").click(function () {
                    $(".myClass:eq(2)").height(150);
                    console.log("Div Height has changed");
                })

                //changeOffset
                $("#jQbyIdAttr_09").click(function () {
                    $("#d2").offset({
                        top: 340,
                        left: 20
                    });
                    console.log("Div Offset has changed");
                })

                //changeOffset by class
                $("#jQbyClassAttr_09").click(function () {
                    $(".myClass:eq(2)").offset({
                        top: 340,
                        left: 900
                    });
                    console.log("Div Offset has changed");
                })

                //insertDiv
                $("#jQbyIdAttr_10").click(function () {
                    $("#jQbyIdAttr_10").before($("<div>").text("new div").attr("id", "testID"));
                    //$("#insertDiv").after("<button id='changeDivText'>change text of new div<\/button>");
                    $("#jQbyIdAttr_10").after("<button id='jQbyIdAttr_19'>(19) change align to new div<\/button>");
                    $("#jQbyIdAttr_10").attr("disabled", "disabled");
                })

                //change align to new div
                $("#jQbyIdAttr_19").live("click", function () {

                    $("#testID").attr("align", "right");
                    console.log("div align changed");
                })


                //changeCheckBox  
                $("#chkBox:checkbox").bind("change", function () {
                    if ($(this).attr("checked")) {
                        $("#jQbyIdAttr_20").after("<span id='chkDiv' style='background: green; color: white; padding:5px '>box checked!</span>");
                    } else {
                        $("#chkDiv").remove();
                    }
                });

                $("#jQbyIdAttr_20").toggle(function () {
                    $("#chkBox").prop("checked", "checked");
                    $("#chkBox:checkbox").trigger("change");
                },

                function () {
                    $("#chkBox").prop("checked", false);
                    $("#chkBox:checkbox").trigger("change");
                })


                //changeCheckBox  by class
                $(".chckBox:checkbox").bind("change", function () {
                    if ($(this).attr("checked")) {
                        $("#jQbyClassAttr_20").after("<span id='chkDiv' style='background: green; color: white; padding:5px '>box checked!</span>");
                    } else {
                        $("#chkDiv").remove();
                    }
                });

                $("#jQbyClassAttr_20").toggle(function () {
                    $(".chckBox:checkbox").prop("checked", "checked");
                    $(".chckBox:checkbox").trigger("change");
                },

                function () {
                    $(".chckBox:checkbox").prop("checked", false);
                    $(".chckBox:checkbox").trigger("change");
                })


                //changeTextProp
                $("#jQbyIdAttr_11").toggle(function () {
                    $("#textBox").prop("disabled", false)
                }, function () {
                    $("#textBox").prop("disabled", true)
                })

                $("#jQbyIdAttr_12").click(function () {
                    $("#textBox").attr("value", "test");
                })

                //changeTextProp by class
                $("#jQbyClassAttr_10").toggle(function () {
                    $(".txtBox:first").prop("disabled", false)
                }, function () {
                    $(".txtBox:first").prop("disabled", true)
                })

                $("#jQbyClassAttr_11").click(function () {
                    $(".txtBox:first").attr("value", "test");
                })



                //changeRadioProp

                $("[name=opt]").bind("change", function () {
                    $("#radioDiv").remove();
                    $(this).after("<span id='radioDiv' style='background: green; color: white; padding:5px '>checked!</span>");

                });

                $("#jQbyIdAttr_21").toggle(function () {
                    $("#optA").prop("checked", true);
                    $("#optA").trigger("change");
                },

                function () {
                    $("#optB").prop("checked", true);
                    $("#optB").trigger("change");
                },

                function () {
                    $("#optC").prop("checked", true);
                    $("#optC").trigger("change");
                });


                //changeRadioProp by class

                $("[name=opt_cl]").bind("change", function () {
                    $(".radioDiv:first").remove();
                    $(this).after("<span id='radioDiv' class='radioDiv' style='background: green; color: white; padding:5px '>checked!</span>");

                });


                // unselect Radio
                $("#jQbyIdAttr_22").click(function () {
                    $("[name=opt]").prop("checked", false);
                    $("#radioDiv").remove();
                });

                // unselect Radio by class
                $("#jQbyClassAttr_22").click(function () {
                    $("[name=opt_cl]").prop("checked", false);
                    $(".radioDiv:first").remove();
                });

                //changeSelect
                $("#changeSelect").toggle(function () {
                    $('select').val('B');
                }, function () {
                    $('select').val('C')
                }, function () {
                    $('select').val('D')
                }, function () {
                    $('select').val('A')
                })


                //div effects

                $("#jQbyIdAttr_15").click(function () {
                    $("#d3").toggle();
                })

                $("#jQbyIdAttr_16").click(function () {
                    $("#d3").fadeToggle("slow");
                })
                $("#jQbyIdAttr_17").click(function () {
                    $("#d3").slideToggle("slow");
                })

                $("#jQbyIdAttr_18").click(function () {
                    $("#d3").animate({
                        height: '300px',
                        opacity: '0.4'
                    }, "slow");
                    $("#d3").animate({
                        width: '300px',
                        opacity: '0.8'
                    }, "slow");
                    $("#d3").animate({
                        height: '100px',
                        opacity: '0.1'
                    }, "slow");
                    $("#d3").animate({
                        height: '',
                        width: '80%',
                        opacity: '1'
                    }, "slow");
                });

                //div effects by class

                $("#jQbyClassAttr_15").click(function () {
                    $(".myClass").eq(4).toggle();
                })

                $("#jQbyClassAttr_16").click(function () {
                    $(".myClass").eq(4).fadeToggle("slow");
                })
                $("#jQbyClassAttr_17").click(function () {
                    $(".myClass").eq(4).slideToggle("slow");
                })

                $("#jQbyClassAttr_18").click(function () {
                    $(".myClass").eq(4).animate({
                        height: '300px',
                        opacity: '0.4'
                    }, "slow");
                    $(".myClass").eq(4).animate({
                        width: '300px',
                        opacity: '0.8'
                    }, "slow");
                    $(".myClass").eq(4).animate({
                        height: '100px',
                        opacity: '0.1'
                    }, "slow");
                    $(".myClass").eq(4).animate({
                        height: '',
                        width: '80%',
                        opacity: '1'
                    }, "slow");
                });

                $(document).ready(function () {
                    $("#tabs li").click(function () {

                        //      First remove class "active" from currently active tab
                        $("#tabs li").removeClass('active');

                        //      Now add class "active" to the selected/clicked tab
                        $(this).addClass("active");

                        //      Hide all tab content
                        $(".tab_content").hide();

                        //      Here we get the href value of the selected tab
                        var selected_tab = $(this).find("a").attr("href");

                        //      Show the selected tab content
                        $(selected_tab).fadeIn();

                        //      At the end, we add return false so that the click on the link is not executed
                        return false;
                    });
                });


                //add css
                $("#jQbyIdAttr_13").click(function () {
                    $("#d4").css({
                        'background-color': 'yellow',
                        'font-weight': 'bolder',
                        'font-family': 'verdana'
                    });
                });

                //remove css
                $("#jQbyIdAttr_14").click(function () {
                    $("#d4").removeAttr("style");
                });


                //add css by class
                $("#jQbyClassAttr_12").click(function () {
                    $(".myClass").eq(3).css({
                        'background-color': 'yellow',
                        'font-weight': 'bolder',
                        'font-family': 'verdana'
                    });
                });

                //remove css by class
                $("#jQbyClassAttr_13").click(function () {
                    $(".myClass").eq(3).removeAttr("style");
                });
                
                //add bg
                $("#jQbyIdAttr_23").click(function () {
                    $("#bgdiv").css("background-image", "url(http://www.w3schools.com/cssref/smiley.gif)");  
                });
                $("#jQbyIdAttr_24").click(function () {
                    $("#bgdiv").css("background-image", "url(data:image/png;base64,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)");  
                });

            }
        </script>

<!-- ClickTale Bottom part -->

<?php
 include($_SERVER['DOCUMENT_ROOT'].'/ct_bottom.php');
?>

		

<script type='text/javascript'>
        
        setTimeout(function () {
            var CMVer = ClickTaleGlobal.exports.changeMonitor.version;
        var RecVer = ClickTaleGetVersion()[0] + "." + ClickTaleGetVersion()[1];
        var AMode = "id"; // ClickTaleSettings.ChangeMonitor.AddressingMode ? ClickTaleSettings.ChangeMonitor.AddressingMode : "path";
            jQuery('#recVer').html("Recorder: " + RecVer + " /// CM version: " + CMVer + " /// Addressing Mode: " + AMode);
            if (ClickTaleGlobal.exports.changeMonitor && ClickTaleGlobal.exports.changeMonitor.observer) {
                jQuery('#provider').html("<font color='green'>" + ClickTaleGlobal.exports.changeMonitor.observer + " provider has been found!</font>");
            } else {
                jQuery('#provider').html("<font color='red'>Error: no matching provider has been found!</font>");
            }
        }, 2000);
        
        
        
    </script>
<!-- ClickTale end of Bottom part -->
		
    </body>

</html>