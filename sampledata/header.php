<?php
$subd = array_shift((explode(".",$_SERVER['HTTP_HOST'])));
 if($subd =='stage37-p2') { ?>
	<!-- calibration tag -->
	  <script type="text/javascript">
    (function(){var f=function(){function a(a,b){var h;(h=k.match(new RegExp(".*\\W"+b+"\\W+(\\d+)(\\|.*)?")))&&c(a,l[b]=h[1]||d(),b)}function d(){var a=self.crypto||self.msCrypto;if(a){var b=new Uint32Array(2),c=32;a.getRandomValues(b);for(a=b[0]&2097151;0<c--;)a*=2;a+=b[1]-1;return-1===a?0:a}return Math.floor(Math.random()*(Math.pow(2,53)-1))}function c(a,b,c){m.push(a+"="+b);c&&(l[c]=b)}function e(a,c){var b,d,e=document.cookie.split(";");for(b=0;b<e.length;b++)if(d=e[b].trim().match(a))return d[c]||"";return""}
var k,m=[],n=[],l=self.ClickTaleMonitor=self.ClickTaleMonitor||{};k=e(/^ctm=(.*)/,1);return{j:function(e){c("p",e);a(2,"vstr");a(3,"vst");c(4,d(),"pgv")},b:function(a){n.push(a)},i:function(a){for(var b;b=n.shift();)b=b.f(),c(b[0],b[1]);(new Image).src=a+"?t=head&"+m.join("&")},h:e}}();var g={g:function(a){try{return a()}catch(d){return null}},a:function(a,d,c,e){a=f.h(a,c);return this.c(a,d,e)},c:function(a,d,c){return(a=(decodeURIComponent||function(a){return a})(a||"").match(d))?a[c]:null}};var p={f:function(){var a=/.+?\|([^\[|]+)/,d=/s_fid\=(.*)/;return[32,g.g(function(){var c=self.s,d=c&&c.c_r;return d&&g.c(d("s_vi"),a,1)||c&&c.fid||d&&d("s_fid")})||g.a(/s_vi\=(.*)/,a,1,1)||g.a(d,d,0,1)]}};var q={f:function(){return[33,g.g(function(){var a=self.s;return(a=a&&a.visitor)&&a.getMarketingCloudVisitorID()})||g.a(/AMCV_(.*)AdobeOrg\=(.*)/,/MCMID\|(.*?)\|/,2,1)]}};(function(a,d){f.j(a);f.b(p);f.b(q);f.i(d)}).call(null,14,"http://auto-node-9:8080/monitor");})();
</script>
<!-- calibration tag end -->
<?php } ?>


<?php

$subd = array_shift((explode(".",$_SERVER['HTTP_HOST'])));
 if($subd =='next-stage31-app1') { ?>
	<script src="//assets.adobedtm.com/1be23531c4e560eea1c185ad364e680fd84c928e/satelliteLib-74c4b2a71cc5dc636cf4eba5bd97dc66c063fffd.js"></script>
<?php } ?>

<?php if($subd =='cs-ga-standard-lab') { ?>
  <script type='text/javascript'>
    console.log("***** wow <?=$subd?>")
  </script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158602429-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    //gtag('config', 'UA-158602429-1');
  </script>
<?php } ?>
