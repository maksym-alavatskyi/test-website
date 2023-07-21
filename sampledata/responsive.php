<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>ClickTale | Testing Portal | Responsive Page</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
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
  <div id="wrapper" class="responsive">
    <div class="content">
		<div id="main-responsive">
			<h1></h1>
			<div id="daynamic-size">
				<a href="/" id="btn1" class="linkBtn">button1</a>
				<a href="/" id="btn2" class="linkBtn">button2</a>
				<a href="/" id="btn3" class="linkBtn">button3</a>
				<a href="/" id="btn4" class="linkBtn">button4</a>
				<a href="/" id="btn5" class="linkBtn">button5</a>
				<a href="/" id="btn6" class="linkBtn">button6</a>
			</div>
			<div id="text-responsive">
				<h3>Me fail English? That's unpossible.</h3>
				<p>Beer. Now there's a temporary solution. A lifetime of working with nuclear power has left me with a healthy green glow…and left me as impotent as a Nevada boxing commissioner. Yes! I am a citizen! Now which way to the welfare office? I'm kidding, I'm kidding. I work, I work.</p>
				<p>Jesus must be spinning in his grave! I'm going to the back seat of my car, with the woman I love, and I won't be back for ten minutes! Remember the time he ate my goldfish? And you lied and said I never had goldfish. Then why did I have the bowl, Bart? *Why did I have the bowl?*</p>
				<p>I'll be back. You can't keep the Democrats out of the White House forever, and when they get in, I'm back on the streets, with all my criminal buddies. I don't like being outdoors, Smithers. For one thing, there's too many fat children.</p>
				<p>That's why I love elementary school, Edna. The children believe anything you tell them. Our differences are only skin deep, but our sames go down to the bone. We started out like Romeo and Juliet, but it ended up in tragedy.</p>
				<p>And now, in the spirit of the season: start shopping. And for every dollar of Krusty merchandise you buy, I will be nice to a sick kid. For legal purposes, sick kids may include hookers with a cold. Fame was like a drug. But what was even more like a drug were the drugs.</p>
				<p>Oh, a *sarcasm* detector. Oh, that's a *really* useful invention! Marge, you being a cop makes you the man! Which makes me the woman — and I have no interest in that, besides occasionally wearing the underwear, which as we discussed, is strictly a comfort thing.</p>
				<p>How could you?! Haven't you learned anything from that guy who gives those sermons at church? Captain Whatshisname? We live in a society of laws! Why do you think I took you to all those Police Academy movies? For fun? Well, I didn't hear anybody laughing, did you? Except at that guy who made sound effects. Makes sound effects and laughs. Where was I? Oh yeah! Stay out of my booze. Look out, Itchy! He's Irish!</p>
				<p>Son, a woman is like a beer. They smell good, they look good, you'd step over your own mother just to get one! But you can't stop at one. You wanna drink another woman! Weaseling out of things is important to learn. It's what separates us from the animals…except the weasel.</p>
				<p>Look out, Itchy! He's Irish! Uh, no, you got the wrong number. This is 9-1…2. You don't win friends with salad. Yes! I am a citizen! Now which way to the welfare office? I'm kidding, I'm kidding. I work, I work.</p>
				<p>Hi. I'm Troy McClure. You may remember me from such self-help tapes as "Smoke Yourself Thin" and "Get Some Confidence, Stupid!" Remember the time he ate my goldfish? And you lied and said I never had goldfish. Then why did I have the bowl, Bart? *Why did I have the bowl?*</p>
				<p>Look out, Itchy! He's Irish! Save me, Jeebus. The Internet King? I wonder if he could provide faster nudity… Kids, you tried your best and you failed miserably. The lesson is, never try. Ahoy hoy?</p>
				<p>This is the greatest case of false advertising I've seen since I sued the movie "The Never Ending Story." Books are useless! I only ever read one book, "To Kill A Mockingbird," and it gave me absolutely no insight on how to kill mockingbirds! Sure it taught me not to judge a man by the color of his skin…but what good does *that* do me?</p>
				<p>Aaah! Natural light! Get it off me! Get it off me! I'll be back. You can't keep the Democrats out of the White House forever, and when they get in, I'm back on the streets, with all my criminal buddies.</p>
			</div>
		</div>
    </div>
  </div>
  <!-- End Wrapper -->
  
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
 <!-- bottom -->
<?php 
	include 'ct_bottom.php'
  ?>
	
</body>
</html>