<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    
    <head>
	
	<script type='text/javascript'>
			// enable XHR wrapper / ChangeMonitor
			//window.ClickTaleSettings = { XHRWrapper: { Enable: true} };
		</script>
        <script type="text/javascript">
		
		

            // jQuery version control
            function submitform() {
                var vers = document.form.search.options[document.form.search.selectedIndex].value;
                if (!vers) {
                    alert('Please select a jQuery version');
                } else {
                    document.location.href = "ajax.html?ver=" + vers;

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
			
			upload = getUrlVars().upload;
        </script>
        <script type="text/javascript">
            // get version from jQuery servers
            document.write('<script type="text/javascript" src="http://code.jquery.com/jquery-' + ver + '.js" >');
            document.write('<\/script>');
        </script>
        
		
		
		<style>
		#jq {
                color: green;
                float:left;
            }
		</style>
       
        <title>Change Monitor - Ajax (jQuery)</title>
		
		
		
		<script type='text/javascript'>
			document.write(unescape("%3Cscript%20src='" +
			(document.location.protocol == 'https:' ? 'https://clicktale.pantherssl.com/' : 'http://s.clicktale.net/') +
			"XHRWrapper.js'%20type='text/javascript'%3E%3C/script%3E"));
		</script>

    </head>
	
	<body>
		<script type="text/javascript">
            var WRInitTime = (new Date()).getTime();
			
			

                    $.ajax({
                        type: "GET",
                        url: "ajax/sites2.xml",
                        dataType: "xml",
                        success: function (xml) {
                            $('#result').empty();
                            $(xml).find('site').each(function () {
                                var id = $(this).attr('id');
                                var title = $(this).find('title').text();
                                var url = $(this).find('url').text();
                                $('<div class="items" id="link_' + id + '"></div>').html('<a href="' + url + '">' + title + '</a>').appendTo('#result');
                                $(this).find('desc').each(function () {
                                    var brief = $(this).find('brief').text();
                                    var long = $(this).find('long').text();
                                    $('<div class="brief"></div>').html(brief).appendTo('#link_' + id);
                                    $('<div class="long"></div>').html(long).appendTo('#link_' + id);
                                });
                            });
                        }
                    });
					
					 $.ajax({
                        type: "GET",
                        url: "ajax/responseTest.php",
                        dataType: "html",
                        success: function (response) {
                            $('#result2').empty();
							$(response).appendTo('#result2');
							
                            
                        }
                    });
        </script>
		 <h1>Change Monitor - Ajax (jQuery)</h1>
		 <h4>recorder version: 14</h4>
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
            </form>
        </div>
		<br/><br/>
	<table style="width:100%;">
	<tr>
	<td>
				<h3>AJAX testing</h3>

                    <input type="submit" value="(01) load() + callback" id="jQbyIdAjax_01" />
                    <input type="submit" value="(02) Load a Remote Script" id="jQbyIdAjax_02" />
                    <input type="submit" value="(03) $.get()" id="jQbyIdAjax_03" />
                    <input type="submit" value="(04) $.post()" id="jQbyIdAjax_04" />
                    <input type="submit" value="(05) load data from XML with $.ajax()" id="jQbyIdAjax_05"
                    />
                    <br/>
                    <br/>
					
                    <div id="result" class="functions" style="float:left;width:50%; padding-right:20px;"></div>
					<div id="result2" ><img class='loading' src='img/load.gif' alt='loading...' /></div>
					 
	</td>
	
	</tr>
	</table>
	
	<script type="text/javascript">
            if (typeof jQuery != 'function') {
                vers = prompt('jQuery version ' + ver +' is not valid. \nplease provide a valid value:','1.7.2');
				if (!vers) {
					vers = "1.7.2";
				}
                document.location.href = "ajax.html?ver=" + vers;

            } else {
			
			//AjaX func

                $.ajaxSetup({
                    cache: false
                });
                var ajax_load = "<img class='loading' src='img/load.gif' alt='loading...' />";

                //	load() functions
                var loadUrl = "ajax/load.php";
                $("#load_basic").click(function () {
                    $("#result").html(ajax_load).load(loadUrl);
                });

                $("#load_dom").click(function () {
                    $("#result")
                        .html(ajax_load)
                        .load(loadUrl + " #picture");
                });

                $("#load_get").click(function () {
                    $("#result")
                        .html(ajax_load)
                        .load(loadUrl, "language=php&version=5");
                });

                $("#load_post").click(function () {
                    $("#result")
                        .html(ajax_load)
                        .load(loadUrl, {
                        language: "php",
                        version: 5
                    });
                });

                $("#jQbyIdAjax_01").click(function () {
                    $("#result")
                        .html(ajax_load)
                        .load(loadUrl, null, function (responseText) {
                        $("#result").append("<div style=' background: yellow '>this text was added by a call back</div>")
                    });
                });

                //	$.getJSON()
                var jsonUrl = "ajax/json.php";
                $("#getJSONForm").submit(function () {
                    var q = $("#q").val();
                    if (q.length == 0) {
                        $("#q").focus();
                    } else {
                        $("#result").html(ajax_load);
                        $.getJSON(
                        jsonUrl,
                        //				"q="+q,
                        {
                            q: q
                        },

                        function (json) {
                            var result = "<p>Language code is \"<strong>" + json.responseData.language + "</strong>\"</p>";
                            $("#result").html(result);
                        });
                    }
                    return false;
                });

                //	$.getScript()
                var scriptUrl = "ajax/script.php";
                $("#jQbyIdAjax_02").click(function () {
                    $("#result").html(ajax_load);
                    $.getScript(scriptUrl);
                });

                //	$.get()
                var loadUrlGet = "ajax/get.php";
                $("#jQbyIdAjax_03").click(function () {
                    $("#result").html(ajax_load);
                    $.get(
                    loadUrlGet, {
                        language: "php",
                        version: 5
                    },

                    function (responseText) {
                        $("#result").html(responseText);
                    },
                        "html");
                });

                //	$.post()
                var loadUrlPost = "ajax/post.php";
                $("#jQbyIdAjax_04").click(function () {
                    $("#result").html(ajax_load);
                    $.post(
                    loadUrlPost, {
                        language: "php",
                        version: 5
                    },

                    function (responseText) {
                        $("#result").html(responseText);
                    },
                        "html");
                });

                // $.ajax()

                $("#jQbyIdAjax_05").click(function () {

                    $("#result").html(ajax_load);

                    $.ajax({
                        type: "GET",
                        url: "ajax/sites.xml",
                        dataType: "xml",
                        success: function (xml) {
                            $('#result').empty();
                            $(xml).find('site').each(function () {
                                var id = $(this).attr('id');
                                var title = $(this).find('title').text();
                                var url = $(this).find('url').text();
                                $('<div class="items" id="link_' + id + '"></div>').html('<a href="' + url + '">' + title + '</a>').appendTo('#result');
                                $(this).find('desc').each(function () {
                                    var brief = $(this).find('brief').text();
                                    var long = $(this).find('long').text();
                                    $('<div class="brief"></div>').html(brief).appendTo('#link_' + id);
                                    $('<div class="long"></div>').html(long).appendTo('#link_' + id);
                                });
                            });
                        }
                    });
                });
            }
			
			
			
		</script>
		
		<div id="ClickTaleDiv" style="display: none;"></div>
					
<?php include($_SERVER['DOCUMENT_ROOT'].'/ct_bottom.php');?>

		<script type="text/javascript"> 
		
		window.ClickTaleSettings = window.ClickTaleSettings || {};
		window.ClickTaleSettings.ChangeMonitor = {
		 Enable: true,
		// AddressingMode: "id",
		// Providers: [prov],
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


<!-- ClickTale end of Bottom part -->
		
    </body>

</html>