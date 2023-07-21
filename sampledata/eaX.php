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
		
		
		."divwithnoid"{
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
		<div id=outer_div class=divwithid>
		<div id=inner_div class=divwithid>
		
			<h1>Element Addressing</h1>
			<br>
						
			Dynamic changes: <input type="text" id="newParam">			
			<button onclick="myFunction()">Click me</button>
			<br>
			


			

			<br>
			Defenitions:<br>
			<div id="whatWasAddedWithID" class=additional>Additional div with id</div>
			<div id="whatWasAddedWithoutID" class=additionaldivwithoutid>Additional div without id</div>
			<div class="divwithnoid">Div without id</div>
			<div class=divwithid>Div with id</div>
			 
			<div ></div> 
			
			<br>
			<br>
			<br>

			<h2>Anchoring DIVs</h2>
	
		<div class=wideborder>
			
			<!-- <div> -->
			<script>addDivBeg("id=1", "class=additional")</script>	
			
				<!-- <div> -->
				<script>addDivBeg("id=2", "class=additional")</script>				
				<!-- </div> -->
				<script>addDivEnd("id=2", "class=additional")</script>
				
				<!-- <div> -->
				<script>addDivBeg("", "class=additionaldivwithoutid")</script>	
				<input id="id1" class="submit" type="submit" value="[1.1] Submit (with id)" onsubmit="return false" >
				<!-- </div> -->
				<script>addDivEnd("", "class=additionaldivwithoutid")</script>
				
				<!-- <div> -->
				<script>addDivBeg("id=3", "class=additional")</script>	
				<a id="id2" onClick="return doNothing()" href="#!" >[1.2] LINK (with id)</a>
				<!-- </div> -->
				<script>addDivEnd("id=3", "class=additional")</script>
				
				<!-- <div> -->
				<script>addDivBeg("", "class=additionaldivwithoutid")</script>	
				<button id="id3" type="button">[1.3] BUTTON (with id)</button> 
				<!-- </div> -->
				<script>addDivEnd("", "class=additionaldivwithoutid")</script>
					
				
				
				<!-- <div> -->
				<script>addDivBeg("id=4", "class=additional")</script>				
				<!-- </div> -->
				<script>addDivEnd("id=4", "class=additional")</script>
			
			<!-- </div> -->
			<script>addDivEnd("id=1", "class=additional")</script>
					
			<br>
			<br>
			
			<!-- <div> -->
			<script>addDivBeg("id=5", "class=additional")</script>		
				
				<!-- <div> -->
				<script>addDivBeg("", "class=additionaldivwithoutid")</script>
			
					<div id=div1 class=divwithid>
						<a onClick="return doNothing()" href="#!" >[2.1] LINK (without ID)</a>
						<button type="button">[2.2] BUTTON (without ID)</button> 
						<input type=submit onClick="return doNothing()" value="[2.3] SUBMIT (without ID)"/>
						
						<!-- <div> -->
						<script>addDivBeg("id=6", "class=additional")</script>				
						<!-- </div> -->
						<script>addDivEnd("id=6", "class=additional")</script>					
					</div> 			
					
					<br>
			
					<div id=divCTIDdiv1 class=divwithid>

						<!-- <div> Note: id should be 7 for CTID adding!!!!!!!!!!!!!!!!!!!!! -->
						<script>addDivBeg("id=7", "class=additional")</script>				
						
						<a onClick="return doNothing()" href="#!" >[3.1] LINK (with CTID)</a>
						<button type="button">[3.2] BUTTON (with CTID)</button> 
						<input type=submit onClick="return doNothing()" value="[3.3] SUBMIT (with CTID)"/>

						<!-- </div> Note: id should be 3 for CTID adding!!!!!!!!!!!!!!!!!!!!! -->
						<script>addDivEnd("id=7", "class=additional")</script>
						
					</div>
							
					<br>

					<!-- <div> -->
					<script>addDivBeg("id=8", "class=additional")</script>	
					
					<div class="divwithnoid"> 					
						<div class=ClassDivCTIDdiv2> 
						DIV with CTID
							<div class="divwithnoid"> 
								<a onClick="return doNothing()" href="#!" >[4.1] LINK</a>
								<button type="button">[4.2] BUTTON</button> 
								<input type=submit onClick="return doNothing()" value="[4.3] SUBMIT"/>	
							</div>
						</div>
					</div>				
				
					<!-- </div> -->
					<script>addDivEnd("id=8", "class=additional")</script>
			
				<!-- </div> -->			
				<script>addDivEnd("", "class=additionaldivwithoutid")</script>
				
			<!-- </div> -->			
			<script>addDivEnd("id=5", "class=additional")</script>
			
			<br>
			
			<!-- ELEMENT ADDRESSING - ADDING CTID -->
			<script type="text/javascript">
				$(function (){			

					// Add CTID to element. 3 elements have onw CTIDs	
					if(document.getElementById("7") == null) 
					{
						ClickTaleSetCustomElementID(document.getElementById("divCTIDdiv1").childNodes[5], 'ctid1');
						ClickTaleSetCustomElementID(document.getElementById("divCTIDdiv1").childNodes[7], 'ctid2');
						ClickTaleSetCustomElementID(document.getElementById("divCTIDdiv1").childNodes[9], 'ctid3');
					}
					else 
					{
						ClickTaleSetCustomElementID(document.getElementById("7").childNodes[1], 'ctid1');
						ClickTaleSetCustomElementID(document.getElementById("7").childNodes[3], 'ctid2');
						ClickTaleSetCustomElementID(document.getElementById("7").childNodes[5], 'ctid3');	
					}

					// Add CTID to some div - it will be ancoring div for 3 links.
					ClickTaleSetCustomElementID(document.getElementsByClassName("ClassDivCTIDdiv2")[0], 'divCTIDdiv2');
					
					
							
					ClickTaleSetCustomElementID(document.getElementsByName("radiosCTID")[0], 'ctidRadio1');
					ClickTaleSetCustomElementID(document.getElementsByName("radiosCTID")[1], 'ctidRadio2');
					ClickTaleSetCustomElementID(document.getElementsByName("radiosCTID")[2], 'ctidRadio3');
					

				});
			</script>			

			
			<!-- <div> -->	 
			<script>addDivBeg("id=9", "class=additional")</script>
			<!-- </div> -->					
			<script>addDivEnd("id=9", "class=additional")</script>

			<!-- <div> -->
			<script>addDivBeg("", "class=additionaldivwithoutid")</script>
			<!-- </div> -->					
			<script>addDivEnd("", "class=additionaldivwithoutid")</script>
						

			<!-- <div> -->	
			<script>addDivBeg("id=10", "class=additional")</script>
			
			<!-- <div> -->	
			<script>addDivBeg("id=11", "class=additional")</script>
			
			<div id=div2 class=divwithid>
				<div class="divwithnoid"> 
				</div>
				<div class="divwithnoid"> 
				</div>
				<div class="divwithnoid"> 
					<div class="divwithnoid"> 
						<div class="divwithnoid"> 
							<a onClick="return doNothing()" href="#!" >[5.1] LINK</a>

							<!-- <div> -->
							<script>addDivBeg("id=12", "class=additional")</script>
							<!-- </div> -->					
							<script>addDivEnd("id=12", "class=additional")</script>

							<!-- <div> -->
							<script>addDivBeg("", "class=additionaldivwithoutid")</script>
							<!-- </div> -->					
							<script>addDivEnd("", "class=additionaldivwithoutid")</script>
							
						</div> 
					</div> 
				</div>			
			</div> <!-- End div2 -->


			<div id=div3 class=divwithid>
				<div class="divwithnoid"> 
				</div>
				<div class="divwithnoid"> 
					<div class="divwithnoid"> 
						<button type="button">[5.2] BUTTON</button> 

						<!-- <div> -->
						<script>addDivBeg("", "class=additionaldivwithoutid")</script>
						<!-- </div> -->					
						<script>addDivEnd("", "class=additionaldivwithoutid")</script>
						
					</div> 
				</div>			
			</div> <!-- End div3 -->

			<div id=div4 class=divwithid>
				<div class="divwithnoid"> 
				</div>
				<div class="divwithnoid"> 
					<div class="divwithnoid"> 
						<input type=submit onClick="return doNothing()" value="[5.3] SUBMIT"/>	
						<!-- <div> -->
						<script>addDivBeg("id=13", "class=additional")</script>
						<!-- </div> -->					
						<script>addDivEnd("id=13", "class=additional")</script>
					</div> 
				</div>			
			</div> <!-- End div4 -->
			
			
			<!-- </div> -->
			<script>addDivEnd("id=11", "class=additional")</script>
			
			<!-- </div> -->
			<script>addDivEnd("id=10", "class=additional")</script>
			
			
			<!-- <div> -->
			<script>addDivBeg("", "class=additionaldivwithoutid")</script>
			<!-- </div> -->					
			<script>addDivEnd("", "class=additionaldivwithoutid")</script>
			
	</div> <!-- class=wideborder -->
	
			<br>
			<br>
			<br>
			<h2>Form</h2>
			

			<div class=wideborder>
			
			<form id="TheForm" method="post" action="" onsubmit="return false">
				
				<h4>Be my friend: </h4>
				
				<!-- <div> -->
				<script>addDivBeg("id=14", "class=additional")</script>				
				<!-- </div> -->
				<script>addDivEnd("id=14", "class=additional")</script>

				<!-- <div> -->
				<script>addDivBeg("", "class=additionaldivwithoutid")</script>	
				<!-- </div> -->
				<script>addDivEnd("", "class=additionaldivwithoutid")</script>	
			
				<!-- <div> -->
				<script>addDivBeg("id=15", "class=additional")</script>				
				
				<div class=""divwithnoid"">
					<span class="label">[6] Name (autofocus) (no id, name="name")</span>
					<input type="text" name="name" autofocus>
                </div>

				<!-- </div> -->
				<script>addDivEnd("id=15", "class=additional")</script>
				
				<!-- <div> -->
				<script>addDivBeg("id=16", "class=additional")</script>				
				<!-- </div> -->
				<script>addDivEnd("id=16", "class=additional")</script>
				
				<!-- <div> -->
				<script>addDivBeg("id=17", "class=additional")</script>	
				
				<!-- <div> -->
				<script>addDivBeg("", "class=additionaldivwithoutid")</script>	
								
				<div id=someId1 class="divwithid">
					<span class="label">[7] E-Mail (name="email" id="emailID")</span>
					<input type="text" name="email" id="emailID">
				</div>

				<!-- </div> -->
				<script>addDivEnd("", "class=additionaldivwithoutid")</script>					
				
				<!-- </div> -->
				<script>addDivEnd("id=17", "class=additional")</script>
				
				<!-- <div> -->
				<script>addDivBeg("id=18", "class=additional")</script>				
				<!-- </div> -->
				<script>addDivEnd("id=18", "class=additional")</script>

				<!-- <div> -->
				<script>addDivBeg("id=19", "class=additional")</script>		
				
				<div class=""divwithnoid"">
					<span class="label">[8] URL (id="urlID", no name)</span>
					<input type="text" id="urlID"> <!--"name="url"-->
				</div>
							
				<!-- </div> -->
				<script>addDivEnd("id=19", "class=additional")</script>

				<!-- <div> -->
				<script>addDivBeg("id=20", "class=additional")</script>				
				<!-- </div> -->
				<script>addDivEnd("id=20", "class=additional")</script>

				<!-- <div> -->
				<script>addDivBeg("id=21", "class=additional")</script>		
				
				<div id=someId2 class="divwithid">
					<span>[9] Your comment (no id, no name)</span>
					<textarea ></textarea> <!-- name="comment" -->
				</div>

				<!-- </div> -->
				<script>addDivEnd("id=21", "class=additional")</script>

				<!-- <div> -->
				<script>addDivBeg("id=22", "class=additional")</script>				
				<!-- </div> -->
				<script>addDivEnd("id=22", "class=additional")</script>

				<!-- <div> -->
				<script>addDivBeg("id=23", "class=additional")</script>		
				
				<div class=""divwithnoid"">
					Same: TYPE, NAME. Different: ID, VALUE
					<br>

					<!-- <div> -->
					<script>addDivBeg("", "class=additionaldivwithoutid")</script>	
					<!-- </div> -->
					<script>addDivEnd("", "class=additionaldivwithoutid")</script>
					
					[10.1]<input id="id_10_1" type="radio" name="radios" value="radio1">A							
					<br>
					[10.2]<input id="id_10_2" type="radio" name="radios" value="radio2">B 
					<br>
					[10.3]<input id="id_10_3" type="radio" name="radios" value="radio3">C 
					<br>
				</div>
			
				<!-- </div> -->
				<script>addDivEnd("id=23", "class=additional")</script>

				<!-- <div> -->
				<script>addDivBeg("id=24", "class=additional")</script>				
				<!-- </div> -->
				<script>addDivEnd("id=24", "class=additional")</script>

				<!-- <div> -->
				<script>addDivBeg("id=25", "class=additional")</script>	
				
				<div class=""divwithnoid"">
					
					<!-- <div> -->
					<script>addDivBeg("id=26", "class=additional")</script>	
				
					Same: TYPE, NAME. Different: ID, VALUE.
					<br>
					<!-- <div> -->
					<script>addDivBeg("id=27", "class=additional")</script>	
					<!-- </div> -->
					<script>addDivEnd("id=27", "class=additional")</script>

					[11.1]<input id="radiobutton1" type="radio" name="radios2" value="radio1">A

					<br>
					[11.2]<input id="radiobutton2" type="radio" name="radios2" value="radio2">B 
					<br>
					[11.3]<input id="radiobutton3" type="radio" name="radios2" value="radio3">C 
					<br>
					
					<!-- </div> -->
					<script>addDivEnd("id=26", "class=additional")</script>
				
				</div>

				<!-- </div> -->
				<script>addDivEnd("id=25", "class=additional")</script>

				<!-- <div> -->
				<script>addDivBeg("id=28", "class=additional")</script>				
				<!-- </div> -->
				<script>addDivEnd("id=28", "class=additional")</script>
				
				
				<div id=someId3 class="divwithid">

					<!-- <div> -->
					<script>addDivBeg("id=29", "class=additional")</script>	
				
					Same: TYPE, NAME. Different: ID, VALUE
					<br>
					[12.1]<input id="radiobt1" type="radio" name="radios3" value="radio1">A 
					<br>
					
					<!-- <div> -->
					<script>addDivBeg("id=30", "class=additional")</script>						
					<!-- </div> -->
					<script>addDivEnd("id=30", "class=additional")</script>	
					
					[12.2]<input id="radiobt2" type="radio" name="radios3" value="radio2">B 										
					<br>
					[12.3]<input id="radiobt3" type="radio" name="radios3" value="radio3">C 
					<br>
					
					<!-- </div> -->
					<script>addDivEnd("id=29", "class=additional")</script>					
				</div>

				<!-- <div> -->
				<script>addDivBeg("id=31", "class=additional")</script>	
					
				<div class=""divwithnoid"">
					Same: TYPE, NAME. Different: ID, VALUE (One radio is checked by default)
					<br>
					[13.1]<input id="id_13_1"  type="radio" name="radios4" value="radio1">A 
					<br>
					[13.2]<input id="id_13_2" type="radio" name="radios4" value="radio2" checked="checked">B 
					<br>
					[13.3]<input id="id_13_3" type="radio" name="radios4" value="radio3">C 
					<br>
				</div>
				
				<!-- </div> -->
				<script>addDivEnd("id=31", "class=additional")</script>	
				
				<div id=someId4 class="divwithid">
					
					<!-- <div> -->
					<script>addDivBeg("id=32", "class=additional")</script>	
					
						<div class=""divwithnoid"">
							Same: TYPE, NAME. Different: CTID. No: VALUE, ID
							<br>
							[14.1]<input type="radio" name="radiosCTID">A (with CTID)
							<br>
							[14.2]<input type="radio" name="radiosCTID">B (with CTID)
							<br>
							[14.3]<input type="radio" name="radiosCTID">C (with CTID)
							<br>
						</div>	
						
					<!-- </div> -->
					<script>addDivEnd("id=32", "class=additional")</script>						
					
				</div>
				

					
					
				<div id=someId5 class="divwithid">
					Check boxes - Same: TYPE, NAME. Different: VALUE. No: ID
					<br>

					<!-- <div> -->
					<script>addDivBeg("id=33", "class=additional")</script>	
					
						<!-- <div> -->
						<script>addDivBeg("id=34", "class=additional")</script>	
						<!-- </div> -->
						<script>addDivEnd("id=34", "class=additional")</script>	
						
					<!-- </div> -->
					<script>addDivEnd("id=33", "class=additional")</script>		
					
					[15.1]<input type="checkbox" name="vehicle" value="Bike">I have a bike<br>
					[15.2]<input type="checkbox" name="vehicle" value="Car">I have a car  <br>
					[15.3]<input type="checkbox" name="vehicle" value="qa">I have a QA <br>
					
					<!-- <div> -->
					<script>addDivBeg("", "class=additionaldivwithoutid")</script>	
					<!-- </div> -->
					<script>addDivEnd("", "class=additionaldivwithoutid")</script>
					
					[15.4]<input type="checkbox" name="vehicle" value="buee"> I have a Buee<br>
										
				</div>

				<div id=someId6 class="divwithid">
					Check boxes - Same: TYPE, NAME. Different: ID, VALUE
					<br>					
					
					<!-- <div> -->
					<script>addDivBeg("id=36", "class=additional")</script>	
					
					[16.1]<input id="c1" type="checkbox" name="vehicle" value="Bike"> I have a bike <br>				

					<!-- <div> -->
					<script>addDivBeg("", "class=additionaldivwithoutid")</script>	
					<!-- </div> -->
					<script>addDivEnd("", "class=additionaldivwithoutid")</script>
					
					[16.2]<input id="c2" type="checkbox" name="vehicle" value="Car"> I have a car <br>
					[16.3]<input id="c3" type="checkbox" name="vehicle" value="qa"> I have a QA<br>									
					
					<!-- <div> -->
					<script>addDivBeg("id=35", "class=additional")</script>	
					<!-- </div> -->
					<script>addDivEnd("id=35", "class=additional")</script>
					
					[16.4]<input id="c4" type="checkbox" name="vehicle" value="buee"> I have a Buee  <br>				

					<!-- </div> -->
					<script>addDivEnd("id=36", "class=additional")</script>
					
				</div>


				<div id=someId7 class="divwithid">
				
					<!-- <div> -->
					<script>addDivBeg("id=37", "class=additional")</script>	
					
						Check boxes - Same: TYPE. Different: ID, VALUE, NAME
						<br>		
						
						[17.1]<input id="d1" type="checkbox" name="name1" value="Bike">I have a bike<br>									
						[17.2]<input id="d2" type="checkbox" name="name2" value="Car">I have a car<br>
						[17.3]<input id="d3" type="checkbox" name="name3" value="qa">I have a QA<br>					

						<!-- <div> -->
						<script>addDivBeg("", "class=additionaldivwithoutid")</script>	
						<!-- </div> -->
						<script>addDivEnd("", "class=additionaldivwithoutid")</script>
						
						[17.4]<input id="d4" type="checkbox" name="name4" value="buee">I have a Buee  <br>										
				
					<!-- </div> -->
					<script>addDivEnd("id=37", "class=additional")</script>
				</div>
				
				<br>
				
				<div class="form-row">
					<input id="submit-button" class="submit" type="submit" value="[18] Submit (with id)" onsubmit="return false">
				</div>				
				
			</form>

			</div>
			
			<br>
			<br>
			
			
			
			
		</div>	<!-- End inner_div -->
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


<?php 
	include 'ct_bottom.php'
?>


</body>

			<script>
				var outer_div = document.getElementById("outer_div");
				var inner_div = document.getElementById("inner_div");
				
				var addDiv1 = document.createElement('div');
				addDiv1.id = 'DynamicDiv';
				addDiv1.className = 'additional';

				
				var addDiv2 = document.createElement('div');
				addDiv2.id = 'DynamicDiv2';
				addDiv2.className = 'additional';
				addDiv2.innerHTML = '<br><br><br><br><br>';
				
				function myFunction() {
				
					var gotValue =  document.getElementById("newParam").value;
				
					if (gotValue=="0")
					{
						outer_div.appendChild(inner_div);
						outer_div.removeChild(addDiv1);	
						outer_div.removeChild(addDiv2);	

					}
					else if(gotValue=="1")
					{								
						outer_div.removeChild(inner_div);	
						outer_div.appendChild(addDiv1);						
						addDiv1.appendChild(inner_div);
					}
					else if (gotValue=="2")
					{
						outer_div.removeChild(inner_div);
						//outer_div.removeChild(addDiv1);
						
						outer_div.appendChild(addDiv2);
						outer_div.appendChild(inner_div);
						
					}
					else 
					{
						document.getElementById("newParam").value = "0/1/2 ???";
					}
					
				};
			</script>
		
</html>

















