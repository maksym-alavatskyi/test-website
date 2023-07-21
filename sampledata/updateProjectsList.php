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
  min-height: 40px;
}

.dataRow:nth-child(even){
  background:#FFF;
}
.dataHeader {
	font-weight: 700;
	margin-bottom: 20px;
}
.data1 {
	width: 230px;
	float: left;
}
.data2 {
	width: 350px;
	float: left;
}
.data3 {
	width: 100px;
	float: left;
}
#wrap{
  width:720px;
  margin:0 auto;
  margin-top:80px;
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
.success h2{
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
<title>Projects Mapping</title>
</head>
 <body>
 <div id="wrap">
	<h1>projects mapping</h1>
	<div id="dataDiv">
	<div class="dataRow dataHeader">
		<div class="data1">SubDomain</div>
		<div class="data2">GuId</div>
		<div class="data3">Partition</div>
	</div>
<?php
if(isset($_POST['subdomain']) && !empty($_POST['subdomain']) && isset($_POST['guid']) && !empty($_POST['guid'])) {
    $subdom = $_POST['subdomain'];
	$id = $_POST['guid'];
	$partition = $_POST['partition'];

	if (strlen($subdom) < 2 || strlen($id) < 5) {
		die('<p style="color:red;font-weight: bold;font-size: 26;">ERROR!!! </p><p>data too short</p>');
	}

	$row = 1;
	$isError = FALSE;

	if (($handle = fopen("projectsList.csv", "r")) !== FALSE) {
		$data = fgetcsv($handle, 1000, ",");
	    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			$num = count($data);
			$row++;
		if($data[0] == $subdom) {
				$isError = TRUE;
				break;
			}
		}
		fclose($handle);
	}
	if(!$isError) {
		$list = array($subdom, $id, $partition);
		$fp = fopen('projectsList.csv', 'a');
		fputcsv($fp, $list);
	}

	$csv = array_map('str_getcsv', file('projectsList.csv'));

	foreach ($csv as &$value) {
		echo  "<div class=\"dataRow\">";
		echo "<div class=\"data1\">" . $value[0] . "</div>";
		echo "<div class=\"data2\">" . $value[1] . "</div>";
		echo "<div class=\"data3\">" . $value[2] . "</div>";
		echo  "</div>";
	}
	?>
	</div>

	<?php

	if($isError) {
		echo "<div id= \"msg\" class=\"error\"><h2>" .$subdom ." already exists </h2></div>";
	} else {
		echo "<div id= \"msg\" class=\"success\"><h2> subdomain updated ".  "[" . $subdom . "] </h2></div>";

		fclose($fp);
	}


}
else {
   die('<p style="color:red;font-weight: bold;font-size: 26;">ERROR!!! </p><p>no post data to process</p>');
}
?>
</div>
</body>
</html>
