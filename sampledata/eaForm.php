<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
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
	<script type="text/javascript" src="style/js/jquery.infieldlabel.min.js"></script>
	<script type="text/javascript" src="style/js/twitter.min.js"></script>
	
	<script type="text/javascript">
		 function doNothing(){
			return false;
		 }						 
	 </script>

	<script type="text/javascript">	 
		function getParameterByName(name) 
		{
			name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
			var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
			results = regex.exec(location.search);
			return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
		}
		
		// Usage:
		// var prodId = getParameterByName('prodId');
	</script>
	 
	 
	 <style>
		.cursorPointer { cursor: pointer; }

	 
		table td
		{
			padding: 0px !important;
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
		
		.additional{
            border-color: #FF0000;
            border-width: 1px;
            border-style: solid;
			padding:3px;
			margin:3px;
        }
		
		.additionaldivwithoutid{
            border-color: #FF0000;
            border-width: 1px;
            border-style: dotted;
			padding:3px;
			margin:3px;
        }
		
		.wideborder{
            border-color: #2265A8;
            border-width: 2px;
            border-style: solid;
			padding:50px;
			margin-left:100px;
			margin-right:100px;
        }
		
		
		.divwithnoid{
            border-color: #01DF01;
            border-width: 1px;
            border-style: dotted;
			padding:3px;
			margin:3px;
		}
		
		.divwithid{
            border-color: #29220A;
            border-width: 1px;
            border-style: solid;
			padding:3px;
			margin:3px;
		}
		
		
</style>


	<script type="text/javascript">	
		var params = getParameterByName('on').split(',');
		
		function addDivBeg(attr1, attr2)
		{
				if(params.indexOf('all') >= 0) {document.write('<div '+ attr1 + ' ' + attr2+' >'); return;}
				
				if(attr1=="" && params.indexOf('0') < 0) return;
				if(attr1=="id=1" && params.indexOf('1') < 0) return;
				if(attr1=="id=2" && params.indexOf('2') < 0) return;
				if(attr1=="id=3" && params.indexOf('3') < 0) return;
				if(attr1=="id=4" && params.indexOf('4') < 0) return;
				if(attr1=="id=5" && params.indexOf('5') < 0) return;
				if(attr1=="id=6" && params.indexOf('6') < 0) return;
				if(attr1=="id=7" && params.indexOf('7') < 0) return;
				if(attr1=="id=8" && params.indexOf('8') < 0) return;
				if(attr1=="id=9" && params.indexOf('9') < 0) return;
				
				if(attr1=="id=10" && params.indexOf('10') < 0) return;
				if(attr1=="id=11" && params.indexOf('11') < 0) return;
				if(attr1=="id=12" && params.indexOf('12') < 0) return;
				if(attr1=="id=13" && params.indexOf('13') < 0) return;
				if(attr1=="id=14" && params.indexOf('14') < 0) return;
				if(attr1=="id=15" && params.indexOf('15') < 0) return;
				if(attr1=="id=16" && params.indexOf('16') < 0) return;
				if(attr1=="id=17" && params.indexOf('17') < 0) return;
				if(attr1=="id=18" && params.indexOf('18') < 0) return;				
				if(attr1=="id=19" && params.indexOf('19') < 0) return;					

				if(attr1=="id=20" && params.indexOf('20') < 0) return;				
				if(attr1=="id=21" && params.indexOf('21') < 0) return;
				if(attr1=="id=22" && params.indexOf('22') < 0) return;
				if(attr1=="id=23" && params.indexOf('23') < 0) return;
				if(attr1=="id=24" && params.indexOf('24') < 0) return;
				if(attr1=="id=25" && params.indexOf('25') < 0) return;
				if(attr1=="id=26" && params.indexOf('26') < 0) return;
				if(attr1=="id=27" && params.indexOf('27') < 0) return;
				if(attr1=="id=28" && params.indexOf('28') < 0) return;				
				if(attr1=="id=29" && params.indexOf('29') < 0) return;					                                     

				if(attr1=="id=30" && params.indexOf('30') < 0) return;				
				if(attr1=="id=31" && params.indexOf('31') < 0) return;
				if(attr1=="id=32" && params.indexOf('32') < 0) return;
				if(attr1=="id=33" && params.indexOf('33') < 0) return;
				if(attr1=="id=34" && params.indexOf('34') < 0) return;
				if(attr1=="id=35" && params.indexOf('35') < 0) return;
				if(attr1=="id=36" && params.indexOf('36') < 0) return;
				if(attr1=="id=37" && params.indexOf('37') < 0) return;
				if(attr1=="id=38" && params.indexOf('38') < 0) return;				
				if(attr1=="id=39" && params.indexOf('39') < 0) return;	
				
				document.write('<div '+ attr1 + ' ' + attr2+' >');
		}
		
		function addDivEnd(attr1, attr2)
		{
				
				if(params.indexOf('all') >= 0) {document.write('</div>'); return;}

				if(attr1=="" && params.indexOf('0') < 0) return;
				if(attr1=="id=1" && params.indexOf('1') < 0) return;
				if(attr1=="id=2" && params.indexOf('2') < 0) return;
				if(attr1=="id=3" && params.indexOf('3') < 0) return;
				if(attr1=="id=4" && params.indexOf('4') < 0) return;
				if(attr1=="id=5" && params.indexOf('5') < 0) return;
				if(attr1=="id=6" && params.indexOf('6') < 0) return;
				if(attr1=="id=7" && params.indexOf('7') < 0) return;
				if(attr1=="id=8" && params.indexOf('8') < 0) return;
				if(attr1=="id=9" && params.indexOf('9') < 0) return;
				
				if(attr1=="id=10" && params.indexOf('10') < 0) return;
				if(attr1=="id=11" && params.indexOf('11') < 0) return;
				if(attr1=="id=12" && params.indexOf('12') < 0) return;
				if(attr1=="id=13" && params.indexOf('13') < 0) return;
				if(attr1=="id=14" && params.indexOf('14') < 0) return;
				if(attr1=="id=15" && params.indexOf('15') < 0) return;
				if(attr1=="id=16" && params.indexOf('16') < 0) return;
				if(attr1=="id=17" && params.indexOf('17') < 0) return;
				if(attr1=="id=18" && params.indexOf('18') < 0) return;				
				if(attr1=="id=19" && params.indexOf('19') < 0) return;					

				if(attr1=="id=20" && params.indexOf('20') < 0) return;				
				if(attr1=="id=21" && params.indexOf('21') < 0) return;
				if(attr1=="id=22" && params.indexOf('22') < 0) return;
				if(attr1=="id=23" && params.indexOf('23') < 0) return;
				if(attr1=="id=24" && params.indexOf('24') < 0) return;
				if(attr1=="id=25" && params.indexOf('25') < 0) return;
				if(attr1=="id=26" && params.indexOf('26') < 0) return;
				if(attr1=="id=27" && params.indexOf('27') < 0) return;
				if(attr1=="id=28" && params.indexOf('28') < 0) return;				
				if(attr1=="id=29" && params.indexOf('29') < 0) return;				

				if(attr1=="id=30" && params.indexOf('30') < 0) return;				
				if(attr1=="id=31" && params.indexOf('31') < 0) return;
				if(attr1=="id=32" && params.indexOf('32') < 0) return;
				if(attr1=="id=33" && params.indexOf('33') < 0) return;
				if(attr1=="id=34" && params.indexOf('34') < 0) return;
				if(attr1=="id=35" && params.indexOf('35') < 0) return;
				if(attr1=="id=36" && params.indexOf('36') < 0) return;
				if(attr1=="id=37" && params.indexOf('37') < 0) return;
				if(attr1=="id=38" && params.indexOf('38') < 0) return;				
				if(attr1=="id=39" && params.indexOf('39') < 0) return;

				document.write('</div>');
		}
		
		
		function whatWasAdded()
		{
			var params = getParameterByName('on').split(',');
			document.getElementById("whatWasAddedWithID").innerHTML = document.getElementById("whatWasAddedWithID").innerHTML + ": <b>" + params + "</b>";
			
			if(params.indexOf('0')>=0 || params.indexOf('all')>=0)
			{
				document.getElementById("whatWasAddedWithoutID").innerHTML = document.getElementById("whatWasAddedWithoutID").innerHTML + ": <b>Added</b>";			
			}
			else 
			{
				document.getElementById("whatWasAddedWithoutID").innerHTML = document.getElementById("whatWasAddedWithoutID").innerHTML + ": <b>Not added</b>";						
			}
		}
		
	</script>

</head>
<body onload="whatWasAdded()">

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
	<div id="wrapper" class=divwithid>
		<div class="content">

		<!------------------------------------------------------------------------------------------>
		<div id=main_div class=divwithid>
		
			<h1>Element Addressing</h1>
			<br>
			
			
			<br>
			Defenitions:<br>
			<div id="whatWasAddedWithID" class=additional>Additional div with id <b>(on=all or on=1..20)</b></div>
			<div id="whatWasAddedWithoutID" class=additionaldivwithoutid>Additional div without id <b>(on=all or on=0)</b></div>
			<div class=divwithnoid>Div without id</div>
			<div class=divwithid>Div with id</div>
			 				
			<br>
			<br>
			<br>
			<h2>Form</h2>
			

			<div class=wideborder>
			
			<form id="TheForm" method="post" action="" onsubmit="return false">
				
				<h4>Be my friend: </h4>
				
				<!-- <div> -->
				<script>addDivBeg("id=1", "class=additional")</script>				
				<!-- </div> -->
				<script>addDivEnd("id=1", "class=additional")</script>

				<!-- <div> -->
				<script>addDivBeg("", "class=additionaldivwithoutid")</script>	
				<!-- </div> -->
				<script>addDivEnd("", "class=additionaldivwithoutid")</script>	
									
							
				<!-- <div> -->
				<script>addDivBeg("id=3", "class=additional")</script>				
				
				<div class="divwithnoid">
					<span>[1] Name (autofocus)</span>
					<input type="text" name="name" autofocus>
                </div>
				
				<br>
				
				<div class="divwithid" id="tele">
					<a href="#!" id="addPhone"> [2] Add Dynamic Field using JS <span></span></a>
					<br>
				</div>
				
				<br>
				
				<!-- </div> -->
				<script>addDivEnd("id=3", "class=additional")</script>
				
				<!-- <div> -->
				<script>addDivBeg("id=2", "class=additional")</script>				
				<!-- </div> -->
				<script>addDivEnd("id=2", "class=additional")</script>
				
				<!-- <div> -->
				<script>addDivBeg("id=4", "class=additional")</script>	
				
				<!-- <div> -->
				<script>addDivBeg("", "class=additionaldivwithoutid")</script>	
								
				<div id=someId100 class="divwithid">
					<span>[4] E-Mail</span>
					<input type="text" name="email">
				</div>

				<br>
				
				<!-- </div> -->
				<script>addDivEnd("", "class=additionaldivwithoutid")</script>					
				
				
				[5]<input id="check1" type="checkbox" value="Check1">Show hidden field? (This is input with ID)<br>
				<span id="checkDetails" style="display:none"> [6] <input type="text" name="details" label="Details"> 'input' without ID (in 'span' with ID)</span>
				<br>				
				
				<!-- </div> -->
				<script>addDivEnd("id=4", "class=additional")</script>
				
				<br>
				
				<!-- <div> -->
				<script>addDivBeg("id=5", "class=additional")</script>				
				<!-- </div> -->
				<script>addDivEnd("id=5", "class=additional")</script>

				<!-- <div> -->
				<script>addDivBeg("id=6", "class=additional")</script>		
				
				<div class="divwithnoid">
					<span>[7] URL</span>
					<input type="text" name="url">
				</div>
							
				<!-- </div> -->
				<script>addDivEnd("id=6", "class=additional")</script>

				<br>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget erat euismod, vehicula diam quis, luctus est.
				Aenean luctus nulla vel auctor consectetur. Etiam luctus eu risus et venenatis. Aliquam facilisis in est sed venenatis. 
				Vestibulum eget metus quis enim ultrices euismod. Phasellus tempus lectus sed arcu consequat consequat. Cum sociis natoque
				<br>
				<br>
				
				<!-- <div> -->
				<script>addDivBeg("id=7", "class=additional")</script>

				<div class="divwithnoid">
					<a id="vis_btn" class="cursorPointer">[8] Toggle visibility <span></span></a>
					<br>
					<span id="visDetails" style="visibility:hidden">[9] Visible: <input type="text" name="vis" label="visible"></span>
				</div>
								
				<!-- </div> -->
				<script>addDivEnd("id=7", "class=additional")</script>

				<br>
				
				<!-- <div> -->
				<script>addDivBeg("id=8", "class=additional")</script>		
				
				<div id=someId102 class="divwithid">
					<span>[10] Your comment</span><br>
					<textarea name="comment"></textarea>
				</div>
				
				<br>
				
				<div id="ajax_content" class="divwithid">
					<a id="ajax_btn" class="cursorPointer">[11] Add Dynamic Fields using Ajax (More that one can be added) <span></span></a>
					<br>
				</div>

				<!-- </div> -->
				<script>addDivEnd("id=8", "class=additional")</script>

				<!-- <div> -->
				<script>addDivBeg("id=9", "class=additional")</script>				
				<!-- </div> -->
				<script>addDivEnd("id=9", "class=additional")</script>

				<br>
				
				<!-- <div> -->
				<script>addDivBeg("id=10", "class=additional")</script>		
								
				<div class="divwithnoid">
					Choose one option:
					<br>

					<!-- <div> -->
					<script>addDivBeg("", "class=additionaldivwithoutid")</script>	
					<!-- </div> -->
					<script>addDivEnd("", "class=additionaldivwithoutid")</script>
					
					[13]<input type="radio" name="radios" value="radio1">A <- check ME
					

					
					<br>
					[14]<input type="radio" name="radios" value="radio2">B
					<br>
					[15]<input type="radio" name="radios" value="radio3">C
					<br>
				</div>
			
				<!-- </div> -->
				<script>addDivEnd("id=10", "class=additional")</script>

				<br>
				
				<!-- <div> -->
				<script>addDivBeg("id=11", "class=additional")</script>
				Praesent augue est, tempus sed augue non, sollicitudin rhoncus odio. Cras 
				sit amet pharetra arcu. Phasellus volutpat, erat sit amet aliquam vestibulum, 
				nulla augue volutpat justo, id porta tellus tortor non nibh. Sed ut justo 
				nulla. Nam gravida leo eget nibh imperdiet, sed feugiat purus ultricies.				
				<!-- </div> -->
				<script>addDivEnd("id=11", "class=additional")</script>
				<br>
				<br>

				<!-- <div> -->
				<script>addDivBeg("id=12", "class=additional")</script>	
				
				<div class="divwithnoid">
					
					<!-- <div> -->
					<script>addDivBeg("id=13", "class=additional")</script>	
				
					Radio buttons with the !!! Same ID tag !!!:
					<br>
					<!-- <div> -->
					<script>addDivBeg("id=14", "class=additional")</script>	
					<!-- </div> -->
					<script>addDivEnd("id=14", "class=additional")</script>
					
					[16]<input id="radiobutton" type="radio" name="radios2" value="radio1">A  <- check ME!
					<br>
					[17]<input id="radiobutton" type="radio" name="radios2" value="radio2">B 
					<br>
					[18]<input id="radiobutton" type="radio" name="radios2" value="radio3">C 
					<br>
					
					<!-- </div> -->
					<script>addDivEnd("id=13", "class=additional")</script>
				
				</div>

				<br>
				
				<!-- </div> -->
				<script>addDivEnd("id=12", "class=additional")</script>

				<!-- <div> -->
				<script>addDivBeg("id=15", "class=additional")</script>				
				<!-- </div> -->
				<script>addDivEnd("id=15", "class=additional")</script>
				
				
				<div id=someId103 class="divwithid">

					<!-- <div> -->
					<script>addDivBeg("id=16", "class=additional")</script>	
				
					Radio buttons with different ID tag:
					<br>
					[19]<input id="radiobt1" type="radio" name="radios3" value="radio1">A 
					<br>
					
					<!-- <div> -->
					<script>addDivBeg("id=17", "class=additional")</script>						
					<!-- </div> -->
					<script>addDivEnd("id=17", "class=additional")</script>	
					
					[20]<input id="radiobt2" type="radio" name="radios3" value="radio2">B <- check ME				
					
					<br>
					[21]<input id="radiobt3" type="radio" name="radios3" value="radio3">C
					<br>
					
					<!-- </div> -->
					<script>addDivEnd("id=16", "class=additional")</script>					
				</div>
				
				<br>
				
				<!-- <div> -->
				<script>addDivBeg("id=18", "class=additional")</script>	
					
				<div class="divwithnoid">
					Radio buttons with default checked:
					<br>
					[22]<input type="radio" name="radios4" value="radio1">A 
					<br>
					[23]<input type="radio" name="radios4" value="radio2" checked="checked">B 
					<br>
					[24]<input type="radio" name="radios4" value="radio3">C 
					<br>
				</div>
				
				<!-- </div> -->
				<script>addDivEnd("id=18", "class=additional")</script>	
					
				<br>
					
				<div id=someId105 class="divwithid">
					Check boxes:
					<br>

					<!-- <div> -->
					<script>addDivBeg("id=19", "class=additional")</script>	
					<!-- <div> -->
					<script>addDivBeg("id=20", "class=additional")</script>	

					[25]<input type="checkbox" name="vehicle" value="Bike">I have a car <- check ME<br>

					<!-- </div> -->
					<script>addDivEnd("id=20", "class=additional")</script>	
					<!-- </div> -->
					<script>addDivEnd("id=19", "class=additional")</script>					

					[26]<input type="checkbox" name="vehicle" value="Car">I have a bush  <br>
					[27]<input type="checkbox" name="vehicle" value="Car">I have a QA henchman<br>
					
					<!-- <div> -->
					<script>addDivBeg("", "class=additionaldivwithoutid")</script>	
					
					[28]<input type="checkbox" name="vehicle" value="Car">I have a bike <- check ME <br>
					
					<!-- </div> -->
					<script>addDivEnd("", "class=additionaldivwithoutid")</script>
					
				</div>

				<br>
				<div class="form-row">
					<input id="submit-button" class="submit" type="submit" value="[29] Submit (with id)" onsubmit="return false">
				</div>				
				
			</form>

			</div>
			
			<br>
			<br>
			
			
			
			
		</div>	<!-- End main_div -->
			<br>
			
		<!------------------------------------------------------------------------------------------>		

		</div> <!-- End content -->
	</div>  <!-- End Wrapper -->
  
  <div class="clearfix"></div>
  <div class="push"></div>
</div> <!-- End container-->

<!-- Begin Footer -->
<div id="footer-wrapper">
	<?php 
		include 'footer.php'
	?>
</div>
<!-- End Footer -->


	<script type='text/javascript'>
		
		// 1 --------------------------------------------------
		$("#addPhone").click(function () {
            $("#tele").html('<span class="label">[3] Phone &nbsp&nbsp</span><input type="text" name="tel">')
        });

		// 2 --------------------------------------------------		
        $('#check1').click(function () {
            $("#checkDetails").toggle();
        })

		// 3 -------------------------------------------------
        $("#ajax_btn").click(function () {
            $.ajax({
                url: "ajax_content.inc.php",
                dataType: "html",
                success: function (response) {
                    $('#ajax_content').append("[12x] ");
                    $(response).appendTo('#ajax_content');
                }
            })
        })
		
	</script>

	
	<script>		
		//add jquery visibilty plugin
        jQuery.fn.visible = function () {
            return this.css('visibility', 'visible');
        };

        jQuery.fn.invisible = function () {
            return this.css('visibility', 'hidden');
        };

        jQuery.fn.visibilityToggle = function () {
            return this.css('visibility', function (i, visibility) {
                return (visibility == 'visible') ? 'hidden' : 'visible';
            });
        };
		
		// 4 -------------------------------------------------
		$("#vis_btn").click(function () {
			$("#visDetails").visibilityToggle();		
		})
		
    </script>
	

<?php 
	include 'ct_bottom.php'
?>


</body>
</html>

















