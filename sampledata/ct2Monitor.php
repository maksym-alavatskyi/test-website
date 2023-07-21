<!-- ct2 monitor included -->
<?php 
		$monitorvisitTimeSpan = "90000";
		if($subdomain == "ct2-test") {
			$monitorUrl =  "http://auto-node-9:8080/monitor";
			
        } else if(($myPartitonId == "integration") ||($myPartitonId == "91")){
            $monitorUrl =  "https://conductor-i.clicktale.net/monitor";
			$monitorvisitTimeSpan = "600000";
        } else if(($myPartitonId == "31")||($myPartitonId == "10") ||($myPartitonId == "39")) {
			$monitorUrl =  "https://conductor-s.clicktale.net/monitor";
		} else if($myPartitonId == "prod" || $myPartitonId != "") {
			$monitorUrl =  "https://conductor.clicktale.net/monitor";
		} else {
			$monitorUrl = "Please set PartitonId";
		}	
		
?>	
	
	<script>
	console.log("monitor params: [Id: <?=$myId?> | Env: <?=$myPartitonId?> | Endpoint: <?=$monitorUrl?>] | visitTimeSpan: <?=$monitorvisitTimeSpan?>");
	var monitorUrl = "<?=$monitorUrl?>";
	var monitorvisitTimeSpan = "<?=$monitorvisitTimeSpan?>";
    </script>
	