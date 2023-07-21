<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>ClickTale | Testing Portal | CBS form </title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />

<link rel="stylesheet" type="text/css" href="cbs-style.css" media="all" />

<link rel="stylesheet" media="all" href="style/type/folks.css" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->

<script src="http://code.jquery.com/jquery-1.6.4.js"></script>	
<script type="text/javascript" src="js/modernizr-latest.js"></script>
<script type="text/javascript" src="js/jquery.placeholder.js"></script>
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
		<h2>Form with use of <a href="http://modernizr.com/">modernizer library</a> to display placeholders in old browsers versions</h2>
		<div class="cbsform">
			 <form id="id-v2_5-account-register-form" action="thank-you.php" method="GET" class="form">
                <fieldset>
				   <div class="form-col">
						<div class="form-field left">
							<input id="firstName" placeholder="First Name" autofocus type="text" name="firstName" rel="required"/><span class="err__"></span>
						</div>
						<div class="form-field right">
							<input id="lastName" placeholder="Last Name" type="text" name="lastName" rel="required"/><span class="err__"></span>
						</div>
						<div class="clear"></div>
					</div>

					<div class="form-col">
						<div class="form-field left">
							<input id="email" placeholder="Email" type="text" name="email" rel="required"/><span class="err__"></span>
						</div>
						<div class="form-field right">
							<input id="confirmEmail" placeholder="Confirm Email" type="text" name="confirmEmail" rel="required"/><span class="err__"></span>
						</div>
						<div class="clear"></div>
					</div>

					<div class="form-col">
						<div class="form-field left">
							<input id="password" placeholder="Password" type="password" name="password" rel="required" autocomplete="off"/><span class="err__"></span>
						</div>
						<div class="form-field right">
							<input id="confirmPassword" placeholder="Confirm Password" type="password" name="confirmPassword" rel="required" autocomplete="off"/><span class="err__"></span>
						</div>
						<div class="clear"></div>
					</div>

					<div class="form-col dob-gender">
						<div class="form-field left">
                            <fieldset>
								<label for="birthday">Birthday</label>
								<select name="month" title="Birthday">
									<option value="">Month</option>
									<option value="1" >Jan</option>
									<option value="2" >Feb</option>
									<option value="3" >Mar</option>
									<option value="4" >April</option>
									<option value="5" >May</option>
									<option value="6" >June</option>
									<option value="7" >July</option>
									<option value="8" >Aug</option>
									<option value="9" >Sept</option>
									<option value="10" >Oct</option>
									<option value="11" >Nov</option>
									<option value="12" >Dec</option>
								</select>
								<select name="day" title="Birthday">
									<option value="">Day</option>
									<option value="1" >1</option>
									<option value="2" >2</option>
									<option value="3" >3</option>
									<option value="4" >4</option>
									<option value="5" >5</option>
									<option value="6" >6</option>
									<option value="7" >7</option>
									<option value="8" >8</option>
									<option value="9" >9</option>
									<option value="10" >10</option>
									<option value="11" >11</option>
									<option value="12" >12</option>
									<option value="13" >13</option>
									<option value="14" >14</option>
									<option value="15" >15</option>
									<option value="16" >16</option>
									<option value="17" >17</option>
									<option value="18" >18</option>
									<option value="19" >19</option>
									<option value="20" >20</option>
									<option value="21" >21</option>
									<option value="22" >22</option>
									<option value="23" >23</option>
									<option value="24" >24</option>
									<option value="25" >25</option>
									<option value="26" >26</option>
									<option value="27" >27</option>
									<option value="28" >28</option>
									<option value="29" >29</option>
									<option value="30" >30</option>
									<option value="31" >31</option>
								</select>
								<select name="year" title="Birthday">
									<option value="">Year</option>
									<option value="2014" >2014</option>
									<option value="2013" >2013</option>
									<option value="2012" >2012</option>
									<option value="2011" >2011</option>
									<option value="2010" >2010</option>
									<option value="2009" >2009</option>
									<option value="2008" >2008</option>
									<option value="2007" >2007</option>
									<option value="2006" >2006</option>
									<option value="2005" >2005</option>
									<option value="2004" >2004</option>
									<option value="2003" >2003</option>
									<option value="2002" >2002</option>
									<option value="2001" >2001</option>
									<option value="2000" >2000</option>
									<option value="1999" >1999</option>
									<option value="1998" >1998</option>
									<option value="1997" >1997</option>
									<option value="1996" >1996</option>
									<option value="1995" >1995</option>
									<option value="1994" >1994</option>
									<option value="1993" >1993</option>
									<option value="1992" >1992</option>
									<option value="1991" >1991</option>
									<option value="1990" >1990</option>
									<option value="1989" >1989</option>
									<option value="1988" >1988</option>
									<option value="1987" >1987</option>
									<option value="1986" >1986</option>
									<option value="1985" >1985</option>
									<option value="1984" >1984</option>
									<option value="1983" >1983</option>
									<option value="1982" >1982</option>
									<option value="1981" >1981</option>
									<option value="1980" >1980</option>
									<option value="1979" >1979</option>
									<option value="1978" >1978</option>
									<option value="1977" >1977</option>
									<option value="1976" >1976</option>
									<option value="1975" >1975</option>
									<option value="1974" >1974</option>
									<option value="1973" >1973</option>
									<option value="1972" >1972</option>
									<option value="1971" >1971</option>
									<option value="1970" >1970</option>
									<option value="1969" >1969</option>
									<option value="1968" >1968</option>
									<option value="1967" >1967</option>
									<option value="1966" >1966</option>
									<option value="1965" >1965</option>
									<option value="1964" >1964</option>
									<option value="1963" >1963</option>
									<option value="1962" >1962</option>
									<option value="1961" >1961</option>
									<option value="1960" >1960</option>
									<option value="1959" >1959</option>
									<option value="1958" >1958</option>
									<option value="1957" >1957</option>
									<option value="1956" >1956</option>
									<option value="1955" >1955</option>
									<option value="1954" >1954</option>
									<option value="1953" >1953</option>
									<option value="1952" >1952</option>
									<option value="1951" >1951</option>
									<option value="1950" >1950</option>
									<option value="1949" >1949</option>
									<option value="1948" >1948</option>
									<option value="1947" >1947</option>
									<option value="1946" >1946</option>
									<option value="1945" >1945</option>
									<option value="1944" >1944</option>
									<option value="1943" >1943</option>
									<option value="1942" >1942</option>
									<option value="1941" >1941</option>
									<option value="1940" >1940</option>
									<option value="1939" >1939</option>
									<option value="1938" >1938</option>
									<option value="1937" >1937</option>
									<option value="1936" >1936</option>
									<option value="1935" >1935</option>
									<option value="1934" >1934</option>
									<option value="1933" >1933</option>
									<option value="1932" >1932</option>
									<option value="1931" >1931</option>
									<option value="1930" >1930</option>
									<option value="1929" >1929</option>
									<option value="1928" >1928</option>
									<option value="1927" >1927</option>
									<option value="1926" >1926</option>
									<option value="1925" >1925</option>
									<option value="1924" >1924</option>
									<option value="1923" >1923</option>
									<option value="1922" >1922</option>
									<option value="1921" >1921</option>
									<option value="1920" >1920</option>
									<option value="1919" >1919</option>
									<option value="1918" >1918</option>
									<option value="1917" >1917</option>
									<option value="1916" >1916</option>
									<option value="1915" >1915</option>
									<option value="1914" >1914</option>
									<option value="1913" >1913</option>
									<option value="1912" >1912</option>
									<option value="1911" >1911</option>
									<option value="1910" >1910</option>
									<option value="1909" >1909</option>
								</select>
								<span class="err__"></span>
							</fieldset>  
						</div>
						<div class="form-field right gender">
							<label>Gender</label>
							<select name="gender">
								<option value="">Select</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
							<span class="err__"></span>
						</div>
						<div class="clear"></div>
					</div>

				   <div class="form-field policies">
						<input type="checkbox" name="_agree" class="checkbox" title="You must agree to the Terms of Use and Privacy Policy">

						<div class="right">
							I have read and agree to the Terms of Use and I understand that, on occasion, I will receive the CBS e-mail newsletter with updates, alerts and promotions.
						</div>
						<div class="clear"></div>
						<span class="err__ tou"></span>
					</div>

					<div class="form-action">
						<input type="submit" value="Sign Up"/>
					</div>

			</fieldset>
	  </form>
	</div>
   
  </div>
  <!-- End Wrapper -->
  
  <div class="clearfix"></div>
  <div class="push"></div>
</div>
<!-- Range field-->
<script type="text/javascript">
	$(function (){
		$('input[type="range"]').on('change',function(){
			$('#selectedValue').text($('#range').val());
		});
		

	});
</script>
<!-- Confirm registration option-->
<script type="text/javascript">
					$(function(){
						var emailInput='<input type="email" name="emailForConfirmation" placeholder="Enter confrmation email address" />';
						var smsInput='<input type="email" name="telForConfirmation" placeholder="Enter confrmation phone number" />';
						$('#emailConfirm').click(function(){
							
							if($(this).is(':checked')&& $('#emailForConfirmation').is(':empty'))
							{
								$("#emailForConfirmation").append(emailInput);
								$("input[name='telForConfirmation']").remove();
							}
						});
						
						$('#smsConfirm').click(function(){
							if($(this).is(':checked')&& $('#telForConfirmation').is(':empty'))
							{
								$("#telForConfirmation").append(smsInput);
								$("input[name='emailForConfirmation']").remove();
							}
						});
					});
				</script>
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