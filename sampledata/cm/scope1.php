<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    
    <head>
	
		<script type='text/javascript'>
			// enable XHR wrapper / ChangeMonitor
			window.ClickTaleSettings = { XHRWrapper: { Enable: true}  };
		</script>
        <script type="text/javascript">

            // jQuery version control
            function submitform() {
                var vers = document.form.search.options[document.form.search.selectedIndex].value;
				var provid = document.form.selectProvider.options[document.form.selectProvider.selectedIndex].value;
                if (!vers) {
                    document.location.href = "scope1.html?ver=" + ver + "&provider=" + provid;
                } else {
                    document.location.href = "scope1.html?ver=" + vers + "&provider=" + prov;

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
			
			
			
			/*if (prov == 'events' || prov == 'observers' || prov == 'jQuery') {
                window.ClickTaleSettings.ChangeMonitor.Provider = prov;
            }
			else {
				if (prov) { 
					alert('invalid ChangeMonitor provider. \nprovider will be selected automatically'); 				
					document.location.href = "scope1.html?ver=" + ver;
					
				}
				prov = 'auto';
			}*/
			
        </script>
        <script type="text/javascript">
            // get version from jQuery servers
            document.write('<script type="text/javascript" src="http://code.jquery.com/jquery-' + ver + '.js" >');
            document.write('<\/script>');
        </script>
        
		<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>

        <style type="text/css">
            .items a, .items a:active, .items a:link, .items a:visited {
                font-size:1.5em;
                color:#3300CC;
                text-decoration:underline;
                display:block;
                margin-top:10px;
            }
            .items a:hover {
                text-decoration:none;
            }
            .brief {
                font-size:1.1em;
                padding-left:10px;
            }
            .long {
                font-size:0.8em;
                padding-left:10px;
            }
            .ex {
                padding: 10px;
                width: 80%;
                border: red 2px dashed;
				margin: 10px;
				background-color:#FFF;
            }
			.in {
                padding: 10px;
                width: 80%;
                border: blue 2px solid;
				margin: 10px;
				background-color:#FFF;
            }
			.el {
                padding: 10px;
                width: 80%;
                background: #999;
				margin: 10px;
            }
			.ex,.in,.out_of_scope{
				padding:20px;
			}
            #jq {
                color: green;
                float:left;
            }
			.ui-state-hover{
				background-color:#FAFAD2;
				
			}
        </style>
        <title>Change Monitor - Scope</title>
    </head>
    
    <body>
	<button id="enable">enable CM</button>
        <script type="text/javascript">
            var WRInitTime = (new Date()).getTime();
        </script>
        	<h1>Change Monitor - Scope</h1>
			<h4></h4>

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
		
		
		
        <BR>
        <BR>
        
  Move #<select name="from" id="from" style="width:100px">
	  <option id="from_01" value="el1">el1</option>
	  <option id="from_04" value="el2">el2</option>
	  <option id="from_07" value="el3">el3</option>
	  
	  <option id="from_10" value="d1">d1</option>
	  <option id="from_13" value="d2">d2</option>
	  
	</select>
	&nbsp to #<select name="to" id="to" style="width:100px">
	  
	  <option id="to_16" value="d1">d1</option>
	  <option id="to_19" value="d2">d2</option>
	  
	  <option id="to_22" value="out_of_scope">out_of_scope</option>
	</select>
                  
<!-- move #<input type="text" name="from" value="" id="from">
to #<input type="text" name="to" value="" id="to"> -->
<button id="scope_02" onclick="fromTo($('#from').val(),$('#to').val())">Submit Change</button> or use Drag-n-Drop to change element positions<br>	
<button id="scope_05" onclick="addText($('#from').val())">add text to Move selection</button><br>

				<button id="scope_08">STOP animation!</button>
				<button id="scope_11">START animation</button>
                    
					
                    <br/>
                    <br/>
					<div id="out_of_scope" class="out_of_scope">
					<div id="d1" class="in">
                    <div id="d2" class="ex">
						<div class="el" id="el1"></div>	
                    </div>
					
					<div class="el" id="el2"></div>	
													
						</div>
						
					<div class="el" id="el3"></div>		
				    </div>
					
					<br/>
					
					
					
					
					
					
                
        <br />
        <div id="ClickTaleDiv" style="display: none;"></div>
        <script type="text/javascript">
            if (typeof jQuery != 'function') {
                vers = prompt('jQuery version ' + ver +' is not valid. \nplease provide a valid value:','1.7.2');
				if (!vers) {
					vers = "1.7.2";
				}
                document.location.href = "scope1.html?ver=" + vers + "&provider=" + prov;

            } else {
			
				$(".el").each(function() {
					$(this).html($(this).html()+$(this).attr("id"));
				});
				$(".ex").each(function() {
					$(this).html($(this).attr("id")+"<h4>-exclude-</h4>"+$(this).html());
				});
				$($(".in").get().reverse()).each(function() {
					$(this).html($(this).attr("id")+"<h4>-include-</h4>"+$(this).html());
				});
				
				  var anim = $(".el");
				  
				  
				  /* Stop animation when button is clicked */
					$("#scope_08").click(function(){
					clearInterval(timeInt);

					anim.stop();
					});
					 
					/* Start animation in the opposite direction */
					$("#scope_11").click(function(){
					

    
						 timeInt = setInterval(function() {
							anim.animate({
							
								width: ['toggle', 'linear'],
								
							}, 1000, function() {
								anim.removeAttr("style");
							});
						}, 6000);
						
						});
					
				$(".el,.in,.ex").draggable({
					
					
					helper: 'clone',
					revert: "invalid"
				});
				$(".in,.ex,.out_of_scope").droppable({
					tolerance: "intersect",
					hoverClass: "ui-state-hover",
				   
					
					drop: function(event, ui) {   
						
						$(this).append($(ui.draggable));
						ClickTaleEvent($(ui.draggable).attr("id") + " >> " +$(this).attr("id"));
						
					}
				});
				
				
				
				
				function fromTo(e1,e2){
					if (e1==e2) {
						alert('please select 2 different elements');
					}
					else {
						ClickTaleEvent(e1 + " >> " + e2);
						e1 = "#"+e1;
						e2 = "#"+e2;
						
					}
					$(e2).append($(e1));
				}
				
				function addText(e1){
						e1 = "#"+e1;
						$(e1).append(" text appendix");
				}
			}
              
        </script>
		<script type='text/javascript'>
setTimeout(function(){
if (ClickTaleGlobal.exports.changeMonitor && ClickTaleGlobal.exports.changeMonitor.observer) {
	jQuery('#provider').html("<font color='green'>" + ClickTaleGlobal.exports.changeMonitor.observer + " provider has been found!</font>");
}
else{
	jQuery('#provider').html("<font color='red'>Error: no matching provider has been found!</font>");
}
}, 1000);

</script> 
<?php
 include($_SERVER['DOCUMENT_ROOT'].'/ct_bottom.php'); 
?>

		<script type="text/javascript"> 
		
		window.ClickTaleSettings = window.ClickTaleSettings || {};
		window.ClickTaleSettings.ChangeMonitor = {
		 Enable: true,
		 AddressingMode: mode,
		 Providers: [prov],
		 OnReadyHandler: function (changeMonitor) {

		 //include:
		   changeMonitor.observe();  
		 
		  
		  //exclude:
		  
		  changeMonitor.observe(".ex"); 

			if  (typeof ClickTaleGlobal.exports.changeMonitor.observer == 'string') {				
				jQuery('#provider').html(ClickTaleGlobal.exports.changeMonitor.observer);	
			}
		 },
		 OnBeforeReadyHandler: function (settings) {
		  settings.Enable = window.ClickTaleGetUID ? !!ClickTaleGetUID() : false;
		   return settings;
		  }
		};
</script>

    </body>

</html>