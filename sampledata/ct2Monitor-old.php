<!-- ct2 monitor included -->
<?php 
		if($subdomain == "ct2-test") {
			$monitorUrl =  "http://auto-node-9:8080/monitor";
			$myId = "9999";
		} else {
			$monitorUrl =  "http://conductor.clicktale.net/monitor";
		}
		
		
?>
	<!-- ClickTale Monitor -->
	<script>
	ClickTaleMonitorSettings = {
	transport: {
				  url: "<?=$monitorUrl?>"
		   },
		   identification: {
				  visitTimeSpan: 90000 //time in milisecodns
		   }
	}
	</script>
	<!— monitor.js path -->
	<script src="/monitor/monitor-1.0.0.js"></script>
	<!-- ClickTale Monitor end -->

	<script>
	<!-- Start Monitor -->
	var m = new ClickTaleMonitor.App(<?=$myId?>); 
	</script>
	<script src="/monitor/ve.js"></script>