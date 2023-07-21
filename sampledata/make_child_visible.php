<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>

<body>

	<button class="myButton" id="makeVisible" onclick="makeVisible()">Make Visible</button>

	<div id="content" style="display: none">
		Parent text
		<div>
			Child content
		</div>
	</div>
	<div>text</div>
	<div>text</div>
	<div>text</div>
	<div>text</div>
	<div>text</div>
	<div>text</div>
	<div>text</div>
	<div>text</div>
	<div>text</div>
	<div>text</div>
	<div>text</div>
	<div>text</div>
	<div>text</div>
	<div>text</div>
	<div>text</div>
	<div>text</div>
	<div>text</div>
	<div>text</div>

	<script type="text/javascript">
		function makeVisible() {
			var x = document.getElementById("content");
			if (x.style.display === "none") {
				x.style.display = "block";
			}
		}
	</script>


	<?php 
	include 'ct_bottom.php'
	?>
</body>

</html>
