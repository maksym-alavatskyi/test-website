<?php
    $page_title = "First page";
 
    $as_json = false;
    if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
        $as_json = true;
        ob_start();
    } else {
?>
<!doctype html>
<html>
<head>
<?php
        include "include/header.php";
        echo "<title>" . $page_title . "</title>";
?>
</head>
 
<div id="ClickTaleDiv" style="display: none;"></div>

<script type="text/javascript">
var ClickTaleSSL=1;
//ClickTaleFetchFrom="http://qa.test/LPV/JtabsAjax_tab1Open.html?ct=1";
if(typeof ClickTale=='function') ClickTale(26921,1,"qadump");
</script>
<!-- ClickTale end of Bottom part -->
 
<body>
 
<?php include "include/before_content.php"; ?>
 
<p>This paragraph is shown only when the navigation starts from <strong>first_page.php</strong>.</p>
 
<div id="ajax-content">
<?php } ?>
 
    <p>This is the content of <strong>first_page.php</strong>.</p>
 
<?php
    if ($as_json) {
        echo json_encode(array("page" => $page_title, "content" => ob_get_clean()));
    } else {
?>
</div>
 
<p>This paragraph is shown only when the navigation starts from <strong>first_page.php</strong>.</p>
 
<?php
        include "include/after_content.php";
        echo "</body>\n</html>";
    }
?>