<?php
    $page_title = "Third page";
    $page_content = "<p>This is the content of <strong>third_page.php</strong>. This content is stored into a php variable.</p>";
 
    if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
        echo json_encode(array("page" => $page_title, "content" => $page_content));
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
  
<script type="text/javascript">
var ClickTaleSSL=1;
//ClickTaleFetchFrom="http://qa.test/LPV/JtabsAjax_tab1Open.html?ct=1";
if(typeof ClickTale=='function') ClickTale(26921,1,"qadump");
</script>
<!-- ClickTale end of Bottom part -->

<body>
 
<?php include "include/before_content.php"; ?>
 
<p>This paragraph is shown only when the navigation starts from <strong>third_page.php</strong>.</p>
 
<div id="ajax-content">
<?php echo $page_content; ?>
</div>
 
<p>This paragraph is shown only when the navigation starts from <strong>third_page.php</strong>.</p>
 
<?php
        include "include/after_content.php";
        echo "</body>\n</html>";
    }
?>