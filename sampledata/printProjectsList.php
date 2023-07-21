<html>
<head>
<style type="text/css">
*{margin:0;padding:0;}
body{
  background:#FFF;
  font-family:'Open Sans',sans-serif;
}
.dataRow{
	clear: both;
	padding: 5px;
  min-height: 20px;
}
.data1 {
	width: 250px;
	float: left;
}
.data2 {
	width: 350px;
	float: left;
}
#wrap{
  width:750px;
  margin:0 auto;
  margin-top:120px;
  margin-bottom:2%;
  transition:opacity 1s;
  -webkit-transition:opacity 1s;
  text-align: center;
}
#wrap h1, h2{
  padding:20px 0;
  font-size:140%;
  font-weight:300;
  text-align:center;
  color:#fff;
}
.msg h2{
	margin-top: 30px;
	background:#54CC33;
}
.error h2{
	margin-top: 30px;
	background:red;
}
#wrap h1{
	 background:#3399cc;
}
#dataDiv{
	background: #f0f0f0;
	padding: 10px 10px 20px;
}

</style>
</head>
 <body>
 <div id="wrap">
	<h1>projects mapping</h1>
	<div id="dataDiv">
<?php
	$csv = array_map('str_getcsv', file($_SERVER['DOCUMENT_ROOT'].'/projectsList.csv'));

	foreach ($csv as &$value) {
		echo  "<div class=\"dataRow\">";
		echo "<div class=\"data1\">" . $value[0] . "</div>";
		echo "<div class=\"data2\">" . $value[1] . "</div>";
    echo "<div class=\"data3\">" . $value[2] . "</div>";
		echo  "</div>";
	}
	?>
	</div>
</div>

</body>

</html>
