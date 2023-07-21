<?php session_start(); $sb = htmlspecialchars($_GET["subDomain"]); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>ClickTale | Testing Portal | Home</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" media="all" href="style/type/folks.css" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<script>

function myErrors(myE) {
	console.log(myE);
	throw "Error!!! " + myE.id
}

function triggerAdobeEvent7() {
	s.events="event7"; 
	s.tl(this,'o',"Adobe Event 7");
}
</script>

<style type="text/css">
			#wrapper {
				    height: 250px;
					margin: 20px auto;
					width: 500px;
					
			}
			.link {
				    margin: 0 auto;
					padding: 20px;
					font-size: 60;
					background-color: rgba(255, 235, 59, 0.39);
					text-align: center;
			}
			#link a {
					
			}
			#adobeEvent7Button
			{
				margin: auto;
				width: 100%;
				padding: 10px;
				background-color: rgba(255, 100, 59, 0.39);
			}
			}
		</style>

</head>
	<body>	
		<div id="wrapper">
			<a href="index.php" id="homeButton">Home</a>
			<div id="link" class="link">
				Im a lean page!
			</div>
			<button id="adobeEvent7Button" class="link" onclick="triggerAdobeEvent7()">
				Trigger adobe event 7
			</button>
		</div>
	<script type="text/javascript"></script>
  
<?php 
	include 'ct_bottom.php'
  ?>
</body>
</html>