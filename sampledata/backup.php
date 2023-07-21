<!-- ClickTale Bottom part -->
<script>
var waitForGlobal = function(key, callback) {
  if (window[key]) {
		console.log("in waitForGlobal running callback");
    callback();
  } else {
    setTimeout(function() {
			console.log("in waitForGlobal - waiting");
      waitForGlobal(key, callback);
    }, 100);
  }
};
</script>
<?php
	include $_SERVER['DOCUMENT_ROOT'].'/projectsList.php';
	$myId = getGuId($subdomain);
	$myPartitonId = getPartitonId($subdomain);
  ?>
    <script type='text/javascript'>
      console.log("subdomain: <?=$subdomain?>")
      console.log ("Guid: <?=$myId?>")
      console.log("partitionId: <?=$myPartitonId?>")
    </script>
  <?php

 ?>
 <?php
	if(isCt2($subdomain)){
			include $_SERVER['DOCUMENT_ROOT'].'/ct2Monitor.php';
	}
	if((isStage($subdomain) || isProd($subdomain)) && !is_null($myId) && (stripos($myPartitonId, 'cs-stage') === false) ) {
		if($myPartitonId == 01){
			$myPartitonId = "";
		}
		if($myPartitonId == 29 && $subdomain != "prod29-pd"){  ?>
		 <script type='text/javascript'>
			document.write(unescape("%3Cscript%20src='http://cdn.clicktale.net/www29/ptc/<?=$myId?>.js")+"'%20type='text/javascript'%3E%3C/script%3E");
		</script>
		<?php } else if(0 === strpos($subdomain, 'next-stage31-cto')) { ?>
			<script type='text/javascript'>
			function getPTC() {
				var ptc;
				var key = "__ptc__";
				var qs = queryString(location.search);

				if (ptc = qs["ptc"]) {
					writePTC(localStorage, key, ptc);
				}
				else {
					ptc = readPTC(localStorage, key);
				}

				return ptc || "ptc";
			}

			function queryString(loc) {
				return loc.substring(1).split("&").reduce(function(obj, val) {
					var arr = val.split("=");

					obj[arr[0]] = arr[1];

					return obj;
				}, {});
			}

			function readPTC(storage, key) {
				return storage.getItem(key);
			}

			function writePTC(storage, key, value) {
				storage.setItem(key, value);
			}

			console.log("This is cto subdomain")
			var script = document.createElement("SCRIPT");
			script.async = !!queryString(location.search)["async"];
			script.src = "/scripts/cto/" + getPTC() + ".js";
			document.body.appendChild(script);
			</script>
		<?php }

    else if ($myPartitonId =='cs-m2-stage') { ?>
      <script type='text/javascript'>
        console.log("Loading M2 for review script <?=$myId?>");
        var script = document.createElement("SCRIPT");
        script.src = "https://cdnssl-staging.clicktale.net/uxa/<?=$myId?>.js";
        document.body.appendChild(script);
      </script>
    <?php }

    else if(0 === strpos($subdomain, 'prod01-cm-ir')) { ?>
		 <script type='text/javascript'>
			var script = document.createElement("SCRIPT");
			script.src = "http://cdnpoc.clicktale.net/www<?=$myPartitonId?>/ptc/<?=$myId?>.js";
			document.body.appendChild(script);
		</script>
		<?php } else if(0 === strpos($subdomain, 'next-stage31-p132')) { ?>
			<?php  if(!($myPartitonId =='cs-stage')) { ?>
				<script type='text/javascript'>
			 		console.log("OKAY <?=$myPartitonId?>");
			  </script>
			<?php } ?>
			<script type='text/javascript'>
		 		console.log("!!! <?=$myPartitonId?>");
		  </script>
		<?php } else if(0 === strpos($subdomain, 'next-prod07-p32563')) { ?>
			<!-- Setting for Adobe Integration in us . Getting CT tag + Adobe from a tag mangement owned by Uri Gobey-->
			<script src="//assets.adobedtm.com/fcb21e269bd0/414015695749/launch-cc7294c7296b.min.js" async></script>

		<?php } else if(0 === strpos($subdomain, 'next-prod36-p81')) { ?>
			<!-- Setting for Adobe Integration in eu . Getting CT tag + Adobe from a tag mangement owned by Uri Gobey-->
			<script src="//assets.adobedtm.com/fcb21e269bd0/fc157751d70c/launch-1e8f5fa0c987.min.js" async></script>

		<?php } else if(0 === strpos($subdomain, 'next-stage31-p142')) { ?>
			<!-- Setting for Adobe Integration. Getting CT tag + Adobe from a tag mangement owned by Uri Gobey-->
			<script src="//assets.adobedtm.com/launch-EN104da085ee4e48ecbb9691d3d0b00952.min.js" async></script>
		<?php }

    else{ ?>
		 <script type='text/javascript'>
			 console.log("Loading the ptc - partition <?=$myPartitonId?> | guid <?=$myId?>");
       var partitionId = "<?=$myPartitonId?>";
       var cdnPrefix = partitionId.includes("-staging-cdn") ? "https://cdnssl-staging.clicktale.net/www" :  "https://cdnssl.clicktale.net/www";
		 	 var script = document.createElement("SCRIPT");
			 script.src = cdnPrefix+partitionId.replace("-staging-cdn","") + "/ptc/<?=$myId?>.js";
			 document.body.appendChild(script);
		</script>

	<?php } ?>

<?php } else if($myPartitonId == 91) { ?>
		<script type='text/javascript'>
			console.log("Loading ptc - partition <?=$myPartitonId?> | guid <?=$myId?>");
			var script = document.createElement("SCRIPT");
			script.src = "https://cdnssl-i.clicktale.net/www<?=$myPartitonId?>/ptc/<?=$myId?>.js";
			document.body.appendChild(script);
		</script>
<?php } else if(0 === strpos($subdomain, 'cs-integration-lab')) { ?>
			<!-- Adobe Analytics -->
			<script src="//assets.adobedtm.com/fcb21e269bd0/e9617c69b431/launch-4859a385b4eb.min.js" async></script>

			<!-- CS Tag + Adobe integration with evar-->
			<script type="text/javascript">
			(function() {
			   var mt = document.createElement("script"); mt.type = "text/javascript"; mt.async = true;
			   mt.src = "//t-staging.contentsquare.net/uxa/4ff8ebff449bc.js";
			   document.getElementsByTagName("head")[0].appendChild(mt);
			})();

			window._uxa = window._uxa || [];
			window._uxa.push(["afterPageView", function(context) {
			  var s = typeof s_gi=='function' ? s_gi('ctlcontentsquarelab') : null;
			  if(s && context.pageNumber==1){
				s.eVar3=context.sessionKey;
				s.tl(true,'o','ContentSquare','eVar3');
			  }
			}]);
			</script>
<?php }

else if($myPartitonId ==='cs-stage') { ?>
		<script type='text/javascript'>
			console.log("***** This is a CS stage test site <?=$myId?>")
		</script>
			<script type="text/javascript">
			(function() {
			   var mt = document.createElement("script"); mt.type = "text/javascript"; mt.async = true;
			   mt.src = "//t-staging.contentsquare.net/uxa/<?=$myId?>.js";
			   document.getElementsByTagName("head")[0].appendChild(mt);
			})();
			</script>
      <?php if(0 === strpos($subdomain, 'cs-test-01') ||  0 === strpos($subdomain, 'malka-eu-01')) { ?>
        	<script>console.log("loading csvar file")</script>
          <script src="/js/csvars.js"></script>
      <?php } ?>
			<?php if(0 === strpos($subdomain, 'cs-ga-standard-lab')) { ?>
        <script>
        (function () {

            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());

            /*
             *Name: Google Analytics CS Integration
             *Version: 1.0 (csMatchingKey)
             */
            var cn = "_cs_mk";
            var cmk = null;

            var v = "; " + document.cookie;
            var p = v.split("; " + cn + "=");

            if (p.length == 1) {

                cmk = Math.random() + "_" + Date.now();
                var ed = new Date(Date.now() + (30 * 60 * 1000)).toUTCString();

                var tld = (function () {
                    var i = 0,
                        domain = document.domain,
                        p = domain.split("."),
                        s = "_gd" + (new Date()).getTime();
                    while (i < (p.length - 1) && document.cookie.indexOf(s + "=" + s) == -1) {
                        domain = p.slice(-1 - (++i)).join(".");
                        document.cookie = s + "=" + s + ";domain=" + domain + ";";
                    }
                    document.cookie = s + "=;expires=Thu, 01 Jan 1970 00:00:01 GMT;domain=" + domain + ";";
                    return domain;
                })();

                document.cookie = cn + "=" + cmk + "; expires=" + ed + ";path=/;domain=" + tld;

                window._uxa = window._uxa || [];
                window._uxa.push(["trackDynamicVariable", {
                    key: "csMatchingKey",
                    value: cmk
                }]);
            }

            if (cmk) {
                gtag("set", {
                    "custom_map": {
                        "dimension1": "csMatchingKey"
                    }
                });

                gtag("config", "UA-158602429-1", {
                    "csMatchingKey": cmk
                });
            }
            //Google Analytics CS Integration End
            else {
                gtag("config", "UA-158602429-1");
            }

        })();
        </script>
			<?php }
		 } else if($myPartitonId =='cs-prod') {
        if(0 === strpos($subdomain, 'cs-sri-amex1')) {
       ?>
       <script type="text/javascript">

       (function() {
          var mt = document.createElement("script"); mt.type = "text/javascript"; mt.async = true;
          mt.src = "//ct.contentsquare.net/ss/3776/58f9bb16-be1c-40a4-a9f6-764647d60c8c/0/uxa.js";
          mt.integrity = "sha384-EnIcsFhCnZUPZ0t2JMRrbdOInCmUZpNlcqOJLAcAUjaAM1malADPugIIz8Dq/Xh1";
          mt.crossOrigin = 'anonymous'; 
          document.getElementsByTagName("head")[0].appendChild(mt);
       })();
       </script>

       <?php }else {?>
	<script type='text/javascript'>
		console.log("***** This is a CS prod test site <?=$myId?>")
		</script>
		<script type="text/javascript">
		(function() {
			 var mt = document.createElement("script"); mt.type = "text/javascript"; mt.async = true;
			 mt.src = "//t.contentsquare.net/uxa/<?=$myId?>.js";
			 document.getElementsByTagName("head")[0].appendChild(mt);
		})();
		</script>
    <?php if(0 === strpos($subdomain, 'cs-prod-auto-01')  ) { ?>
       <script>console.log("loading csvar file")</script>
        <script src="/js/csvars.js"></script>
<?php
      }
    }
  }else if(!is_null($myId)) {?>

	<script type='text/javascript'>
    console.log("MyId var is null going to default qa source");
		var script = document.createElement("SCRIPT");
		script.src = "https://qa-core.app.clicktale.com/ctn/ptc/<?=$myId?>.js?WRDestination=qadump&WRScriptHost=qa-core.app.clicktale.com/ctn";
		document.body.appendChild(script);
	</script>

<!-- ClickTale end of Bottom part -->
<?php } else { ?>
    <script type='text/javascript'>
	console.log("Cannot find project for this subdomain")
	</script>
<?php } ?>

<?php
	if(0 === strpos($subdomain, 'ct2-')) { ?>
	<!--script type='text/javascript'>
		 var settings = ClickTaleMonitor.Settings.get();
		 var conf = settings.config || {}
		 conf.transport = {
		   url: "<?=$monitorUrl?>"
		 };
		 settings.configure(conf);

		</script-->

		<script>
			console.log("### running ve.js ct2- spoted ###");
		</script>
		<script src="/monitor/ve.js"></script>


	<?php }
	else if((0 === strpos($subdomain, 'next-prod36-bus'))||(0 === strpos($subdomain, 'next-prod07-p1'))||(0 === strpos($subdomain, 'next-stage31-bus'))||(0 === strpos($subdomain, 'next-stage31-awa'))) { ?>
		<script>
			console.log("### no ve.js  ###");
		</script>
	<?php }
	else if(isCt2($subdomain)){ ?>
		<!--<script type='text/javascript'>

				  var settings = ClickTaleMonitor.Settings.get();

				 settings.configure({
					 transport: {
						 url: "<?=$monitorUrl?>"
					 },
				    identification: {
						   visitTimeSpan: <?=$monitorvisitTimeSpan?> //time in milisecodns
				    }
				 });
		</script>
		<script>
			console.log("### running ve.js isCt2 returned true ###");
		</script>
		<script src="/monitor/ve.js"></script>-->
	<?php }?>

	<!--<script type="text/javascript" src="/scripts/adobe/<?=$subdomain?>-AppMeasurement.js"></script>-->
	<?php
	 if(0 === strpos($subdomain, 'ct2-integ-app')) { ?> { ?>
		<script>
			console.log("### Loading adobe ###");
		</script>
		<script src="//assets.adobedtm.com/1be23531c4e560eea1c185ad364e680fd84c928e/satelliteLib-f6e3dba77c08eedefce759062dfab14242d24e6e.js"></script>
	 <?php }?>
