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
<title>ClickTale | Testing Portal | HM </title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" type="text/css" href="contact/style.css" media="all">
<link rel="stylesheet" media="all" href="style/type/folks.css" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/scripts.js"></script>

	<script type="text/javascript">
		 function doNothing(){
			return false;
		 }						 
	 </script>



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

<h2>HM (short page) - elements with name/id/none attributes</h2>

<table style="width:900px">


<!-- Line 1 -->
<tr><td> <a id="id_1">1=a</a>			</td> <td>  <b name="name_2">2=b</b> 			</td> <td>  <g id="id_7">7=g</g> 					</td> <td>  <p name="name_16">16=p</p>			</td> <td>  <dd id="id_36">36=dd</dd> 			</td> <td>  <li name="name_76">76=li</li> 			</td> </tr>
<!-- Line 2 -->
<tr><td> <dl name="name_100">100=dl</dl> 	</td> <td>  <ol id="id_111">111=ol</ol> 	</td> <td>  <small name="name_115">115-small</small>	</td> <td>  <ul name="name_117">117-ul</ul>  	</td> <td>  <h1 id="id_136_1">136=h1</h1> 		</td> <td>  <h2  name="name_136_2">136=h2</h2>  		</td> </tr>
<!-- Line 3 -->
<tr><td> <h3 name="name_136_3">136=h3</h3>    </td> <td>  <h4 id="id_168_1">168=h4</h4>    	</td> <td>	<h5 name="name_168_2">168=h5</h5>           	</td> <td>   <h6 name="name_168_3">168=h6??</h6>  </td> <td>  <span id="id_147">147=span</span>   </td> <td>  <label name="name_268">268=label</label></td> </tr>
<!-- Line 4 -->
<tr>
<td>  <fieldset id="id_582">582=fieldset</fieldset> </td> 
<td> 

				641=area, 873=img, 2061=map: 
				<img src="style\images\planets.gif" width="145" height="126" alt="Planets" usemap="#name_2061" name="name_873">

				<map name="name_2061">
				  <area shape="rect" coords="0,0,82,126" alt="Sun" href="#!" name="name_641">
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
		 
		<select name="name_1587">  
			<option value="volvo" name="name_2703">Volvo</option>
			<option value="saab">Saab</option>
			<option value="opel">Opel</option>
			<option value="audi">Audi</option>
		</select>
</td>
<td>
	1795=canvas:
			<canvas style="width:90px; border:1px solid #000000;" name="name_1795">
				Your browser does not support the HTML5 canvas tag.
			</canvas>
</td>
</tr>
<!-- Line 5 -->
<tr>

<td>  <center id="id_1827">1827=center</center>  </td>
<td>  <input id="id_2153">  </td>
<td>  
	2345=iframe<br/>
			<iframe src="http://www.w3schools.com" width="200" name="name_2345">
			  <p>Your browser does not support iframes.</p>
			</iframe>
</td>
<td>  
	<form name="name_2406">
	2406=form
	</form>
</td>
<td>   <button  type="button" name="name_2722">2722=button</button>        </td>
<td>   <div name="name_2884">2884=div</div>        </td>
</tr>

<!-- Line 6 -->
<tr>
<td>   <textarea  id="id_3124">3124=textarea</textarea>        </td>
<td> <a onClick="return doNothing()" href="#!" data-toggle=dropdown title="[1] THIS IS THE LINK">[1] THIS IS THE LINK </a>  </td>
<td> 
	<button type="button">[2] THIS IS THE BUTTON</button> 
	<b class=arrow></b>         
</td>

<td> <input id=wmStoreFinderSubmit type=submit onClick="return doNothing()" value="[3] THIS IS THE SUBMIT"/> </td>

<td>x          </td>
<td>x          </td>
		
</tr>


</table>

		
<!------------------------------------------------------------------------------------------>
		
</div>
</div>  <!-- End Wrapper -->
  
  <div class="clearfix"></div>
  <div class="push"></div>
</div>

<!-- Begin Footer -->
<div id="footer-wrapper" padding-top="20px">
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