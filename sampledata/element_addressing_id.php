<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<style>
		table td
		{
			text-align:center;
			vertical-align:middle;
			height: 30px;
			padding: 0px !important;
		}
		table p {
			margin-bottom: 0px !important;
		}
</style>
<title>ClickTale | Testing Portal | element addressing </title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" type="text/css" href="contact/style.css" media="all">
<link rel="stylesheet" media="all" href="style/type/folks.css" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/scripts.js"></script>



</head>
<body>
<div id="container"> 
  <!-- Begin Header Wrapper -->
  <div id="page-top">
    <div id="header-wrapper"> 
      <!-- Begin Header -->
      <div id="header">
        <div id="logo"><a href="index.php"><img src="style/images/logo.png" alt="Delphic" /></a></div>
        <!-- Logo --> 
        <!-- Begin Menu -->
        <div id="menu-wrapper">
          <div id="smoothmenu1" class="ddsmoothmenu">
            <?php
				include 'menu.php'
			?>
          </div>
        </div>
        <!-- End Menu -->
      </div>
      <!-- End Header --> 
    </div>
  </div>
  <!-- End Header Wrapper --> 
  
  <!-- Begin Wrapper -->
<div id="wrapper">
<div class="content">


<!------------------------------------------------------------------------------------------>

<h1>Element Addressing - ID</h1>

<table style="width:900px">



<!-- Line 1 -->
<tr><td> <a id="id_1">1=a</a>			</td> <td>  <b id="id_2">2=b</b> 			</td> <td>  <g id="id_7">7=g</g> 					</td> <td>  <p id="id_16">16=p</p>			</td> <td>  <dd id="id_36">36=dd</dd> 			</td> <td>  <li id="id_76">76=li</li> 			</td> </tr>
<!-- Line 2 -->
<tr><td> <dl id="id_100">100=dl</dl> 	</td> <td>  <ol id="id_111">111=ol</ol> 	</td> <td>  <small id="id_115">115-small</small>	</td> <td>  <ul id="id_117">117-ul</ul>  	</td> <td>  <h1 id="id_136_1">136=h1</h1> 		</td> <td>  <h2 id="id_136_2">136=h2</h2>  		</td> </tr>
<!-- Line 3 -->
<tr><td> <h3 id="id_136_3">136=h3</h3>    </td> <td>  <h4 id="id_168_1">168=h4</h4>    	</td> <td>	<h5 id="id_168_2">168=h5</h5>           	</td> <td>   <h6 id="id_168_3">168=h6??</h6>  </td> <td>  <span id="id_147">147=span</span>   </td> <td>  <label id="id_268">268=label</label></td> </tr>
<!-- Line 4 -->
<tr>
<td>  <fieldset id="id_582">582=fieldset</fieldset> </td> 
<td> 

				641=area, 873=img, 2061=map: 
				<img src="style\images\planets.gif" width="145" height="126" alt="Planets" usemap="#planetmap" id="id_873">

				<map name="planetmap" id="id_2061">
				  <area shape="rect" coords="0,0,82,126" alt="Sun" href="#!" id="id_641">
				</map>
</td>

<td> 
	 947=svg, 2371=circle: 
	<svg width="100" height="100" id="id_947">
	   <circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow"  id="id_2371"/>
	   Sorry, your browser does not support inline SVG.
	</svg> 
</td>
<td>  <noindex id="id_1134">1134=noindex</noindex>            </td>
<td> 
		
		<select id="id_1587">  
			<option value="volvo" id="id_2703">Volvo</option>
			<option value="saab">Saab</option>
			<option value="opel">Opel</option>
			<option value="audi">Audi</option>
		</select>
</td>
<td>
	1795=canvas:
			<canvas style="width:90px; border:1px solid #000000;" id="id_1795">
				Your browser does not support the HTML5 canvas tag.
			</canvas>
</td>
</tr>
<!-- Line 5 -->
<tr>

<td>  <center id="id_1827">1827=center</center>  </td>
<td>  <input id="id_2153">  </td>
<td>  
	2345=iframe <br/>
			<iframe src="http://www.w3schools.com" width="200" id="id_2345">
			  <p>Your browser does not support iframes.</p>
			</iframe>
</td>
<td>  
	<form id="id_2406">
	2406=form
	</form>
</td>
<td>   <button  type="button" id="id_2722">2722=button</button>        </td>
<td>   <div id="id_2884">2884=div</div>        </td>
</tr>

<!-- Line 6 -->
<tr>
<td>   <textarea  id="id_3124">3124=textarea</textarea>        </td>
		<td>          </td>
		<td>          </td>
		<td>          </td>
		<td>          </td>
		<td>          </td>
		
</tr>

</table>

		
<!------------------------------------------------------------------------------------------>
		
</div>
</div>  <!-- End Wrapper -->
  
  <div class="clearfix"></div>
  <div class="push"></div>
</div>

<!-- Begin Footer -->
<div id="footer-wrapper">
<?php 
	include 'footer.php'
  ?>
</div>
<!-- End Footer -->


<?php 
	include 'ct_bottom.php'
  ?>


</body>
</html>