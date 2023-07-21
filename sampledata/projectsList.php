
<?php
$subdomain = array_shift((explode(".",$_SERVER['HTTP_HOST'])));

function getPtcData($file, $index) {
    $data = file($file);
    $returnArray = array();
    foreach($data as $line) {
        $explode = explode(",", $line);
        $returnArray[$explode[0]] = $explode[$index];
    }
    return $returnArray;
};

function getGuId($key) {
	$arr = getPtcData($_SERVER['DOCUMENT_ROOT'].'/projectsList.csv', 1);
	if(!is_null($arr[$key])) {
		$myId = str_replace(array("\r", "\n"), "", $arr[$key]);
	}
	return $myId;
}

function getPartitonId($key) {
	$arr = getPtcData($_SERVER['DOCUMENT_ROOT'].'/projectsList.csv', 2);
	if(!is_null($arr[$key])) {
		$myPartitonId = str_replace(array("\r", "\n"), "", $arr[$key]);

	}
	return $myPartitonId;
}

function isStage($subdom)
{
	 $str = "stage";
	 $str2 = "next-stage";
     $length = strlen($str);
     $length2 = strlen($str2);
     return ((substr($subdom, 0, $length) === $str) || (substr($subdom, 0, $length2) === $str2));
}

function isProd($subdom)
{
	 //$str = "prod";
	 $str2 = "next-prod";
	 $str3 = "next-demo";
     $length = strlen($str);
	 $length2 = strlen($str2);
	 $length3 = strlen($str3);
     return ((substr($subdom, 0, $length) === $str) || (substr($subdom, 0, $length2) === $str2) || (substr($subdom, 0, $length3) === $str3));
}

function isCt2($subdom)
{
	 $str = "ct2";
     $length = strlen($str);
	 $str2 = "next";
     $length2 = strlen($str2);
	 echo "<script>console.log('PHP: checking if this is ct2 subdomain');</script>";
     return ((substr($subdom, 0, $length) === $str) || (substr($subdom, 0, $length2) === $str2));
}

?>
