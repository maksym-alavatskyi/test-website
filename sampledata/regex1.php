<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>

 <body>
   <div>
    Only <?php echo rand()?> products left
   </div>
   <div>
    Only five items left
   </div>
   <div>
    Soldes -<?php echo rand(1, 100)?>% left
   </div>
   <div>
    Livraison 3/5 jours
   </div>
   <div>
    Reduction of <?php echo rand(10, 1000)/10?>$
   </div>
   <div>
    This is some new text string and a value of <?php echo rand()?>
   </div>
   <div>
    Price is <?php echo rand(100, 1000)/100?>$
   </div>
   <div>
    FR: <?php echo rand(100,10000)/100?>$ / IS: <?php echo rand(100,10000)/100?>$ / US: <?php echo rand(100,10000)/100?>$
   </div>
   <div>
    4 regex in this example but limit is 3 so it returns an error
   </div>
   <div>
    Invalid regex for testing
   </div>
   <div>
    filler
   </div>
   <div>
    filler
   </div>
   <div>
    filler
   </div>
   <div>
    filler
   </div>
   <div>
    filler
   </div>
   <div>
    filler
   </div>
   <div>
    filler
   </div>
   <div>
    filler
   </div>
   <div>
    filler
   </div>
   <div>
    filler
   </div>

	<?php 
	include 'ct_bottom.php'
	?>
 </body>

</html>

