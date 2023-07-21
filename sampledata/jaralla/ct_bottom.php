<!-- ClickTale Bottom part -->

<?php 
	include 'projectsList.php';	
	$myId = getGuId($subdomain);
	
 ?>
 <?php if(isStage($subdomain) && !is_null($myId)) {?>
 
 <script type='text/javascript'>

	document.write(unescape("%3Cscript%20src='"+
	(document.location.protocol=='https:'?
	"https://clicktalecdn.sslcs.cdngc.net/www05/ptc/<?=$myId?>.js":
	"http://cdn.clicktale.net/www05/ptc/<?=$myId?>.js")+"'%20type='text/javascript'%3E%3C/script%3E"));
</script>
 
 <?php } else if(!is_null($myId)) {?>
<script type='text/javascript'>
// The ClickTale Balkan Tracking Code may be programmatically customized using hooks:
// 
//   function ClickTalePreRecordingHook() { /* place your customized code here */  }
//
// For details about ClickTale hooks, please consult the wiki page http://wiki.clicktale.com/Article/Customizing_code_version_2

document.write(unescape("%3Cscript%20src='"+
(document.location.protocol=='https:'?
"https://ct.test/ctn/ptc/<?=$myId?>.js?WRDestination=qadump&WRScriptHost=ct.test/ctn":
"http://ct.test/ctn/ptc/<?=$myId?>.js?WRDestination=qadump&WRScriptHost=ct.test/ctn")+"'%20type='text/javascript'%3E%3C/script%3E"));
</script>

<!-- ClickTale end of Bottom part -->
<?php } else { ?>
    <script type='text/javascript'>
	console.log("Cannot find project for this subdomain")
	</script>
<?php } ?>