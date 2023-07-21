<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta charset="UTF-8">
<title>ClickTale | Testing Portal | Tabs & Toggle - Long </title>
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
  <div id="wrapper">
	<div class="content">
		<div class="tabbed-content" style = "min-height: 50px">
		
			<?php
			//This generates a random number between 1 & 30 (30 is the
			//amount of images you have)
			$random = rand(1,3);
						
			//Generate image tag (feel free to change src path)		
			$image = <<<EndOfHtml
			<img src="style/images/PicturesForDynamicPage/Img ({$random}).jpg" alt="{$random}" style="width: 30%; height: 30%; display: block; margin-left: auto;  margin-right: auto;" id="DynamicImageId"/>
EndOfHtml;
			?>

			<!-- Print image tag -->
			<?php print $image; ?>
		</div>
	</div>
    <div class="content">
      <div class="tabbed-content">
        <h3>We love tabs</h3>
        <p>Aenean fermentum luctus viverra. Pellentesque id lectus ante, vel tristique elit. Fusce mattis, purus non consectetur cursus, justo nisi viverra sem, ac lobortis ipsum sapien vel purus. Vivamus aliquet gravida nibh sit amet accumsan. Fusce et lorem nunc. Sed convallis, tortor nec ornare sagittis, velit ligula varius sapien, eu cursus nisl purus sed felis habitant morbi tristique senectus et netus et malesuada fames ac turpis.</p>
        <ul class="tabs">
          <li><a href="#tab1">This is</a></li>
          <li><a href="#tab2">Tabbed</a></li>
          <li><a href="#tab3">Form</a></li>
        </ul>
        <div class="tab_container">
          <div style="display: none;" id="tab1" class="tab_content">
            <h3>Welcome to our Testing Portal</h3>
            <p><a href="#"><img src="style/images/art/portfolio4-th.jpg" class="left" /></a> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc rhoncus tortor quis eros bibendum a tempus est dapibus. Vivamus consectetur quam eu tellus porttitor ultrices. Nunc metus massa, ullamcorper sit amet malesuada a, porttitor in tellus. Vestibulum ullamcorper quam nec lorem aliquam id feugiat risus tincidunt. Etiam molestie, risus eu gravida lobortis, velit sapien aliquam lectus, nec hendrerit lectus erat ac libero. Aenean fermentum luctus viverra. Pellentesque id lectus ante, vel tristique elit. Fusce mattis, purus non consectetur cursus, justo nisi viverra sem, ac lobortis ipsum sapien vel purus. Vivamus aliquet gravida nibh sit amet accumsan. Fusce et lorem nunc. Sed convallis, tortor nec ornare sagittis, velit ligula varius sapien, eu cursus nisl purus sed felis. </p>
			<p id="buttons">
				<input type = "button" value = "Click me! I am an input"/> 
				<button type="button"> Click Me! I am a button </button>
			</p>
            <p> <a href="#">Morbi congue pellentesque quam, eu ultricies. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc rhoncus tortor quis eros bibendum a tempus est dapibus. Vivamus consectetur quam eu tellus porttitor ultrices. Nunc metus massa, ullamcorper sit amet malesuada a, porttitor in tellus. Vestibulum ullamcorper quam nec lorem aliquam id feugiat risus tincidunt. </a></p>
          </div>
          <div style="display: none;" id="tab2" class="tab_content">
            <h3>We love tabs</h3>
            <p><img src="style/images/art/portfolio3-th.jpg" class="right" />Etiam molestie, risus eu gravida lobortis, velit sapien aliquam lectus, nec hendrerit lectus erat ac libero.
			Aenean fermentum luctus viverra. Pellentesque id lectus ante, vel tristique elit. Fusce mattis, purus non consectetur cursus, justo nisi viverra sem,
			ac lobortis ipsum sapien vel purus. Vivamus aliquet gravida nibh sit amet accumsan. Fusce et lorem nunc. Sed convallis, tortor nec ornare sagittis, 
			velit ligula varius sapien, eu cursus nisl purus sed felis. Morbi congue pellentesque quam, eu ultricies. Pellentesque habitant morbi tristique senectus 
			et netus et malesuada fames ac turpis egestas. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
			Nunc rhoncus tortor quis eros bibendum a tempus est dapibus. Vivamus consectetur quam eu tellus porttitor ultrices. Nunc metus massa, ullamcorper sit amet malesuada 
			a, porttitor in tellus. Vestibulum ullamcorper quam nec lorem aliquam id feugiat risus tincidunt. Aenean fermentum luctus viverra. Pellentesque id lectus ante, vel tristique elit.
			Fusce mattis, purus non consectetur cursus, justo nisi viverra sem, ac lobortis ipsum sapien vel purus. Vivamus aliquet gravida nibh.</p>
          </div>
          <div style="display: none;" id="tab3" class="tab_content">
            <h3>Don't you?</h3>
            <p>Nulla non tortor eget ligula dapibus semper non ut mauris. Nam feugiat, lorem a tempus auctor, odio nisl porttitor lacus, ut ultrices neque massa a odio. Pellentesque sit amet leo dictum nisl tempor malesuada id ut magna. Etiam non mauris eget massa sagittis euismod. Aliquam lectus nulla, consequat eget molestie id, malesuada sit amet lectus. Pellentesque eget justo sit amet nunc adipiscing semper at ac quam. Praesent a volutpat nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
				<div style="width:300px; border: solid 1px #333333; " align="left">
					<div style="background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>


					<div style="margin:30px">

					<form action="" method="post">
					<label>UserName  :</label><input type="text" name="username" class="box" value=''/><br /><br />
					<label>Password  :</label><input type="password" name="password" class="box" /><br/><br />
					<input type="submit" value=" Submit "/><br />
					</form>
					
					<div style="font-size:11px; color:#cc0000; margin-top:10px"></div>
					</div>
					</div>
					
					<div style="width:300px; border: solid 1px #333333; padding:10px;margin-top:10px; " align="left">
					</br>
					Search Google:
					<input type="search" name="googlesearch"><br/><br />
					<button type="button">Button with type Button</button>
					</div>
					
            <p> Morbi congue pellentesque quam, eu ultricies. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc rhoncus tortor quis eros bibendum a tempus est dapibus. Vivamus consectetur quam eu tellus porttitor ultrices. Nunc metus massa, ullamcorper sit amet malesuada a, porttitor in tellus. Vestibulum ullamcorper quam nec lorem aliquam id feugiat risus tincidunt. </p>
			
          </div>
        </div>
      </div>
    </div>
	<div class="content">
		<div id="section1">
			<h3>Section 1</h3>
			<p>
			The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex. Two driven jocks help fax my big quiz. Quick, Baz, get my woven flax jodhpurs! "Now fax quiz Jack!" my brave ghost pled. Five quacking zephyrs jolt my wax bed. Flummoxed by job, kvetching W. zaps Iraq. Cozy sphinx waves quart jug of bad milk. A very bad quack might jinx zippy fowls. Few quips galvanized the mock jury box. Quick brown dogs jump over the lazy fox. The jay, pig, fox, zebra, and my wolves quack! Blowzy red vixens fight for a quick jump. Joaquin Phoenix was gazed by MTV for luck. A wizard’s job is to vex chumps quickly in fog. Watch "Jeopardy!", Alex Trebek's fun TV quiz game. Woven silk pyjamas exchanged for blue quartz. Brawny gods just
			</p>
			<p>
			Lorem ipsum dolor sit amet, nulla prompta mnesarchum vix ei. Facer dictas an vix. Partem dictas voluptua mel eu, animal consectetuer qui ex, at sit suas nobis scripserit. Duis inermis abhorreant nec ad. Eruditi fabulas ex pri. Est graeci discere ea, mei decore aliquid at.
			</p>
			<p>
			Sit eius option eligendi no, mel soluta ocurreret vituperata no. Ius melius delenit ne. Alterum qualisque cum ut, ludus tibique nam ut. Omnis legimus definitionem at duo, quo ad vero zril splendide.			
			Itaque hic ipse iam pridem est reiectus; Fortitudinis quaedam praecepta sunt ac paene leges, quae effeminari virum vetant in dolore. Hoc Hieronymus summum bonum esse dixit. Confecta res esset. Tum Piso: Quoniam igitur aliquid omnes, quid Lucius noster? Apparet statim, quae sint officia, quae actiones.
			</p>
		</div>
		<div id="section2">
			<h3>Section 2</h3>
			<p>
			Candy pastry marzipan. Brownie candy canes pie danish muffin. Carrot cake marzipan caramels pie bear claw sweet sugar plum wafer liquorice. Soufflé biscuit chupa chups chocolate bar cheesecake gummi bears wafer chocolate lemon drops. Tootsie roll biscuit lemon drops ice cream sesame snaps cheesecake candy canes cake candy canes. Macaroon jelly-o apple pie apple pie biscuit oat cake. Apple pie jelly beans candy cake dragée dessert jujubes cake jelly. Pie icing marshmallow fruitcake pastry lemon drops chocolate bar. Lollipop chupa chups gummies carrot cake icing fruitcake candy canes. Jelly-o pie cheesecake. Cookie jujubes carrot cake toffee croissant. Danish caramels halvah. Dragée sugar plum croissant muffin soufflé biscuit halvah chocolate cake biscuit.
			</p>
			<p>
			Sweet roll sugar plum apple pie soufflé chupa chups muffin gummies chupa chups. Marzipan danish cookie carrot cake pastry sweet roll lollipop. Pie muffin icing carrot cake lollipop marshmallow sugar plum tootsie roll. Dragée cookie carrot cake candy donut macaroon. Cake tootsie roll apple pie chupa chups. Sesame snaps liquorice cotton candy biscuit halvah donut. Cotton candy marzipan marshmallow soufflé sweet roll dragée dragée jujubes. Marshmallow donut fruitcake pie. Chocolate bar cookie candy gingerbread. Donut liquorice pie dragée toffee. Gingerbread donut sweet roll danish oat cake halvah halvah halvah. Chocolate cake caramels jelly beans sweet candy canes dragée.
			</p>
			<p>
			Cras vel risus et sapien condimentum convallis vel quis lectus. In nec tortor at mauris mattis aliquet nec ac enim. Nulla ac fermentum dui. Etiam viverra est id mauris consectetur dictum. Cras eu metus bibendum ligula molestie suscipit. Sed odio lectus, semper vel risus at, porta feugiat lectus. Phasellus a dui et nunc ultricies finibus. Quisque vitae viverra diam, at euismod odio. Cras placerat, diam quis tempor placerat, diam odio laoreet lectus, id condimentum est lacus vitae nisi. Cras nec felis nisl. Duis turpis ipsum, vulputate non odio nec, ultrices vehicula lorem. Aliquam sit amet arcu blandit, aliquam lorem nec, rhoncus lorem. Sed pellentesque vulputate velit. Nullam molestie dictum varius.
			</p>
			<ul>
				<li>Dapibus turpis odio suscipit amet posuere gravida ultricies, nulla primis ultricies augue ullamcorper interdum hac, id primis vivamus nunc nam sem</li>
				<li>Primis arcu primis himenaeos lobortis dui vestibulum est nunc eleifend, facilisis sapien curabitur turpis morbi donec dolor odio, placerat nullam ut pulvinar libero odio tempus luctus dapibus dictum non lorem magna lacinia diam porttitor</li>
				<li>Ultricies placerat elit vitae diam sagittis mauris rutrum, urna ante dolor suspendisse orci aenean, sem hac suspendisse tincidunt ligula luctus</li>
				<li>Duis sit sagittis hac non dictumst luctus duis, convallis amet donec eget egestas tortor et sapien, senectus fames orci risus duis pulvinar</li>
				<li>Laoreet vel rhoncus quam dui sagittis tristique nec ultrices faucibus, purus quam a condimentum leo hendrerit sociosqu convallis, habitant interdum varius lacinia platea porta metus habitant</li>
			</ul>
		</div>
		<div id="section3">
			<h3>Section 3</h3>
			<p>
			Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui.
			</p>
			<ul>
			<li>Fames sem faucibus pulvinar cursus pellentesque eros lectus euismod, sed netus risus nostra proin curabitur dui mauris, malesuada tempus etiam litora mollis sociosqu mollis</li>
			<li>Vel bibendum gravida morbi fermentum semper phasellus quisque, faucibus dictumst quisque ligula consectetur nam quisque tempus, curabitur interdum diam fermentum quis nibh</li>
			<li>Lectus per augue erat curae sit turpis nostra litora, lectus cubilia commodo himenaeos etiam cubilia leo feugiat nibh, vulputate posuere adipiscing mattis viverra vitae vehicula</li>
			<li>Elit aenean neque ut volutpat tempus placerat vitae aptent consequat sociosqu mattis, imperdiet aptent class neque donec aenean pretium fames litora</li>
			<li>A amet maecenas himenaeos odio aenean class facilisis tempor viverra, quam commodo quisque ut vestibulum egestas ipsum viverra integer justo, suscipit lacus augue diam sed curabitur curae faucibus pharetra vestibulum varius taciti neque non curabitur</li>
			<li>Non est sodales metus est purus nisl consequat mattis ut quis, pulvinar potenti porttitor nunc aenean luctus mauris a in</li>
			<li>Felis placerat facilisis justo gravida habitasse pretium aliquet nibh mattis turpis, a scelerisque feugiat nostra adipiscing urna per ad ipsum, ullamcorper sapien ad dictumst elit ut a est vestibulum turpis aenean vulputate purus nibh</li>
			<li>Convallis eget donec nec semper litora ut ultrices, phasellus tortor consectetur consequat quisque varius vivamus, massa potenti suspendisse enim class augue</li>
			</ul>
			<p>
			Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui.
			</p>
		</div>	
		<div id="section4">
			<h3>Section 4</h3>
			<p>
			You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man.
			</p>
			<p>
			Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass.
			</p>
			<p>
			Integer et vestibulum ipsum. Phasellus pharetra fermentum rutrum. Etiam ornare dapibus massa, sit amet consequat libero auctor in. Cras egestas massa in pulvinar placerat. Integer ullamcorper tellus at tincidunt blandit. Cras et viverra velit. Fusce eu porttitor odio. Nullam placerat iaculis mi, vel vestibulum felis auctor eu. Duis pretium turpis eu tellus mattis ornare. Phasellus molestie vel augue gravida efficitur. Suspendisse posuere neque id quam scelerisque, nec suscipit odio ullamcorper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent vel leo id nisl ultrices fringilla nec sed erat. Donec dui tellus, sollicitudin nec gravida sed, efficitur dictum lorem. Morbi interdum ante vel velit rutrum, id convallis lacus hendrerit.
			</p>
			<p>Deep v bitters PBR, food truck disrupt flannel cronut sartorial you probably haven't heard of them. Stumptown keytar selfies, freegan Helvetica YOLO forage salvia Etsy. Shoreditch chillwave pickled, salvia seitan Etsy small batch chambray pour-over asymmetrical. Sartorial hoodie cronut readymade tilde vegan. Scenester forage Williamsburg Pitchfork, Tumblr meh tote bag next level freegan. Locavore distillery tofu flexitarian XOXO, chambray freegan flannel Banksy. Tofu drinking vinegar Wes Anderson pickled next level.</p>
		</div>	
		<div id="section5">
			<h3>Section 5</h3>
			<p>
			One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops
			</p>
			<p>
			Mel constituto accommodare cu, <a href="/">This is my link</a> sea at malis euismod, has ut officiis qualisque cotidieque. In aliquam convenire molestiae vim, no sea tollit putent animal, deleniti phaedrum omittantur per ut. Nec placerat voluptaria eu. Nam lorem regione ne, ei accusata principes est. Phaedrum corrumpit cu pri, his ex possit graeco nominavi, sit elit lucilius definiebas in. Mei veri eligendi ut.
			</p>
			<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that</p>


		</div>	
		<div id="section6">
			<h3>Section 6</h3>
			<p>
			A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath
			</p>
			<p>
			Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
			</p>
			<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that</p>


		</div>	
		<div id="section7">
			<h3>Section 7</h3>
			<p>
			The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is.The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators
			</p>
			<p>
			Eos ne summo audiam tritani, epicurei comprehensam in duo, et platonem iudicabit disputationi vix. Epicuri verterem sed id, vel suas idque munere et. Nam nibh timeam cu. Dicant vidisse inciderint ne has, ius ridens timeam te, ex mei utinam eloquentiam. Eam justo argumentum in, vis alia deseruisse no. Prima volutpat conclusionemque pri id, maiorum voluptaria quo ad. Qui et altera facete animal, ea option assentior adversarium vix, nec impedit complectitur eu.
			</p>
			<p>
			Eos ne summo audiam tritani, epicurei comprehensam in duo, et platonem iudicabit disputationi vix. Epicuri verterem sed id, vel suas idque munere et. Nam nibh timeam cu. Dicant vidisse inciderint ne has, ius ridens timeam te, ex mei utinam eloquentiam. Eam justo argumentum in, vis alia deseruisse no. Prima volutpat conclusionemque pri id, maiorum voluptaria quo ad. Qui et altera facete animal, ea option assentior adversarium vix, nec impedit complectitur eu.
			</p>
			<p>
			The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is.The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators
			</p>
			<p>
			Eos ne summo audiam tritani, epicurei comprehensam in duo, et platonem iudicabit disputationi vix. Epicuri verterem sed id, vel suas idque munere et. Nam nibh timeam cu. Dicant vidisse inciderint ne has, ius ridens timeam te, ex mei utinam eloquentiam. Eam justo argumentum in, vis alia deseruisse no. Prima volutpat conclusionemque pri id, maiorum voluptaria quo ad. Qui et altera facete animal, ea option assentior adversarium vix, nec impedit complectitur eu.
			</p>
			<p>
			Eos ne summo audiam tritani, epicurei comprehensam in duo, et platonem iudicabit disputationi vix. Epicuri verterem sed id, vel suas idque munere et. Nam nibh timeam cu. Dicant vidisse inciderint ne has, ius ridens timeam te, ex mei utinam eloquentiam. Eam justo argumentum in, vis alia deseruisse no. Prima volutpat conclusionemque pri id, maiorum voluptaria quo ad. Qui et altera facete animal, ea option assentior adversarium vix, nec impedit complectitur eu.
			</p>
		</div>	
		<div id="section8">
			<h3>Section 8</h3>
			<p>
			"Thinking murder at hand, and smelling in the dark for the blood, he and all his armed mates and harpooneers rushed for the forecastle. In a few minutes the scuttle was opened, and, bound hand and foot, the still struggling ringleader was shoved up into the air by his perfidious allies, who at once claimed the honour of securing a man who had been fully ripe for murder. But all these were collared, and dragged along the deck like dead cattle; and, side by side, were seized up into the mizzen rigging, like three quarters of meat, and there they hung till morning. 'Damn ye,' cried the Captain, pacing to and fro before them, 'the vultures would not touch ye, ye villains!'
			</p>
			<p>
			Venenatis semper, et maecenas dui tortor, tempus est viverra. Curabitur tristique, integer phasellus blandit, risus sapien pellentesque litora. Eget nam ut, amet tempor facilisis eget mauris, quis semper dignissim porta primis nulla. Pellentesque elit duis, viverra quis tortor, sagittis sed platea sit, per nibh consectetuer volutpat id natoque diam. Et sollicitudin in tempor, tristique doloribus mauris auctor molestie orci dapibus, urna mattis porttitor molestie. Sed lacus aliquam vulputate ac congue in.
			Porttitor diam congue auctor malesuada praesent, nunc ultricies vitae ultricies, in rhoncus praesent. Ut volutpat et nascetur arcu diam wisi. Nec augue, vehicula mauris amet nec erat ipsum, facilisis dolor. Mattis felis, consectetuer eget urna quis blandit quo, nulla dui ipsum cras eu elementum sed, vel ac autem. Tristique tempor mi platea, nunc est non amet est et amet, arcu morbi faucibus sagittis commodo pulvinar, amet vel. Condimentum justo, orci neque porta litora suspendisse congue, tortor nec neque orci sapien elit quis, vivamus mattis habitant urna dolor. Sed id in lorem id morbi ultrices, vestibulum urna, dolorem in imperdiet est cras eu dolor, vitae sollicitudin ut nulla velit blandit, magna feugiat dictum ultricies condimentum. Nec inceptos porta, proin mus amet lacus vulputate libero aliquet, eleifend vehicula cumque, ipsum vehicula, amet etiam malesuada. Eget mauris convallis nullam, magna sed praesent turpis ut donec. Maecenas euismod lectus nunc odio id, litora a. Libero vulputate, taciti tortor nulla consequat, qui porttitor.
			</p>
		</div>
		<div id="section9">
			<h3>Section 9</h3>
			<p>
			Picanha pancetta tri-tip ham cupim. Tongue porchetta ham tri-tip chicken. Landjaeger sirloin pork loin, pastrami kielbasa leberkas short ribs jowl tri-tip. Sirloin boudin corned beef filet mignon, sausage ham hock doner alcatra landjaeger turducken. Picanha beef doner alcatra cupim brisket sirloin salami flank filet mignon pork. Alcatra leberkas tail meatloaf shank fatback t-bone picanha ball tip sirloin pig ham hock. Doner tail turducken, meatloaf porchetta ham pastrami meatball short loin picanha.
			</p>
			<p>
			Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.
			</p>
			<p>
			Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass.
			</p>
			<p>
			A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath
			</p>
			<p>
			Picanha pancetta tri-tip ham cupim. Tongue porchetta ham tri-tip chicken. Landjaeger sirloin pork loin, pastrami kielbasa leberkas short ribs jowl tri-tip. Sirloin boudin corned beef filet mignon, sausage ham hock doner alcatra landjaeger turducken. Picanha beef doner alcatra cupim brisket sirloin salami flank filet mignon pork. Alcatra leberkas tail meatloaf shank fatback t-bone picanha ball tip sirloin pig ham hock. Doner tail turducken, meatloaf porchetta ham pastrami meatball short loin picanha.
			</p>
			<p>
			Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.
			</p>
			<p>
			Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass.
			</p>
			<p>
			A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath
			</p>
		</div>	
		<div id="section10">
			<h3>Section 10</h3>
			<p>
			Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then
			</p>
			<p>
			Sit agam iisque ea, sea te vidit vocent. Id mel hinc justo dolorum, te pertinax delicata constituto pro, civibus interesset vis te. <a href="/" id="link1">Just a link</a> Mea nullam utamur in. Iusto nemore consulatu te mel. Ex quo quaeque fastidii.
			</p>
			<p>
			Tu autem negas fortem esse quemquam posse, qui dolorem malum putet. Quid, de quo nulla dissensio est? Tollenda est atque extrahenda radicitus. Cur tantas regiones barbarorum pedibus obiit, tot maria transmisit? Quae qui non vident, nihil umquam magnum ac cognitione dignum amaverunt. Sed vos squalidius, illorum vides quam niteat oratio. Ut proverbia non nulla veriora sint quam vestra dogmata. Sic exclusis sententiis reliquorum cum praeterea nulla esse possit, haec antiquorum valeat necesse est. Hinc ceteri particulas arripere conati suam quisque videro voluit afferre sententiam. Non est enim vitium in oratione solum, sed etiam in moribus.
			</p>
			<p>
			Atque ab isto capite fluere necesse est omnem rationem bonorum et malorum. Quae autem natura suae primae institutionis oblita est? Ita graviter et severe voluptatem secrevit a bono. Qui enim existimabit posse se miserum esse beatus non erit.
			</p>
			<p>
			Septem autem illi non suo, sed populorum suffragio omnium nominati sunt. Hic ambiguo ludimur. Multa sunt dicta ab antiquis de contemnendis ac despiciendis rebus humanis; Ergo illi intellegunt quid Epicurus dicat, ego non intellego? Sin aliud quid voles, postea. Nescio quo modo praetervolavit oratio. Quicquid porro animo cernimus, id omne oritur a sensibus; Scaevolam M. Utilitatis causa amicitia est quaesita.
			</p>
			<p>
			Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then
			</p>
			<p>
			Tu autem negas fortem esse quemquam posse, qui dolorem malum putet. Quid, de quo nulla dissensio est? Tollenda est atque extrahenda radicitus. Cur tantas regiones barbarorum pedibus obiit, tot maria transmisit? Quae qui non vident, nihil umquam magnum ac cognitione dignum amaverunt. Sed vos squalidius, illorum vides quam niteat oratio. Ut proverbia non nulla veriora sint quam vestra dogmata. Sic exclusis sententiis reliquorum cum praeterea nulla esse possit, haec antiquorum valeat necesse est. Hinc ceteri particulas arripere conati suam quisque videro voluit afferre sententiam. Non est enim vitium in oratione solum, sed etiam in moribus.
			</p>
			<p>
			Atque ab isto capite fluere necesse est omnem rationem bonorum et malorum. Quae autem natura suae primae institutionis oblita est? Ita graviter et severe voluptatem secrevit a bono. Qui enim existimabit posse se miserum esse beatus non erit.
			</p>
			<p>
			Septem autem illi non suo, sed populorum suffragio omnium nominati sunt. Hic ambiguo ludimur. Multa sunt dicta ab antiquis de contemnendis ac despiciendis rebus humanis; Ergo illi intellegunt quid Epicurus dicat, ego non intellego? Sin aliud quid voles, postea. Nescio quo modo praetervolavit oratio. Quicquid porro animo cernimus, id omne oritur a sensibus; Scaevolam M. Utilitatis causa amicitia est quaesita.
			</p>
		</div>			
	</div>
    <div class="content">
      <h3>We love toggle</h3>
      <p>Aenean fermentum luctus viverra. Pellentesque id lectus ante, vel tristique elit. Fusce mattis, purus non consectetur cursus, justo nisi viverra sem, ac lobortis ipsum sapien vel purus. Vivamus aliquet gravida nibh sit amet accumsan. Fusce et lorem nunc. Sed convallis, tortor nec ornare sagittis, velit ligula varius sapien, eu cursus nisl purus sed felis habitant morbi tristique senectus et netus et malesuada fames ac turpis. </p>
      <!-- Begin Toggle -->
      <div class="toggle">
        <h2 class="trigger">+ Click to title</h2>
        <div class="togglebox">
          <div>
            <h3>Vestibulum ullamcorper</h3>
            <p><img src="style/images/art/portfolio5-th.jpg" class="left" />Pellentesque habitant morbi <a href="#">tristique senectus et netus et malesuada </a>fames ac turpis egestas. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc rhoncus tortor quis eros bibendum a tempus est dapibus. Vivamus consectetur quam eu tellus porttitor ultrices. Nunc metus massa, ullamcorper sit amet malesuada a, porttitor in tellus. Vestibulum ullamcorper quam nec lorem aliquam id feugiat risus tincidunt. Etiam molestie, risus eu gravida lobortis, velit sapien aliquam lectus, nec hendrerit lectus erat ac libero. Aenean fermentum luctus viverra. Pellentesque id lectus ante, vel tristique elit. Fusce mattis, purus non consectetur cursus, justo nisi viverra sem, ac lobortis ipsum sapien vel purus. Vivamus aliquet gravida nibh sit amet accumsan. Fusce et lorem nunc. Sed convallis, tortor nec ornare sagittis, velit ligula varius sapien, eu cursus nisl purus sed felis. </p>
            <p> Morbi congue pellentesque quam, eu ultricies. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc rhoncus tortor quis eros bibendum a tempus est dapibus. Vivamus consectetur quam eu tellus porttitor ultrices. Nunc metus massa, ullamcorper sit amet malesuada a, porttitor in tellus. Vestibulum ullamcorper quam nec lorem aliquam id feugiat risus tincidunt. </p>
          </div>
        </div>
      </div>
      <!-- End Toggle -->
      
      <div class="toggle">
        <h2 class="trigger">+ Click to title</h2>
        <div class="togglebox">
          <div>
            <h3>We love toggle</h3>
            <p><a href="#"><img src="style/images/art/portfolio6-th.jpg" class="right" /></a> Etiam molestie, risus eu gravida lobortis, velit sapien aliquam lectus, nec hendrerit lectus erat ac libero. Aenean fermentum luctus viverra. Pellentesque id lectus ante, vel tristique elit. Fusce mattis, purus non consectetur cursus, justo nisi viverra sem, ac lobortis ipsum sapien vel purus. Vivamus aliquet gravida nibh sit amet accumsan. Fusce et lorem nunc. Sed convallis, tortor nec ornare sagittis, velit ligula varius sapien, eu cursus nisl purus sed felis. Morbi congue pellentesque quam, eu ultricies. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc rhoncus tortor quis eros bibendum a tempus est dapibus. Vivamus consectetur quam eu tellus porttitor ultrices. Nunc metus massa, ullamcorper sit amet malesuada a, porttitor in tellus. Vestibulum ullamcorper quam nec lorem aliquam id feugiat risus tincidunt. Aenean fermentum luctus viverra. Pellentesque id lectus ante, vel tristique elit. Fusce mattis, purus non consectetur cursus, justo nisi viverra sem, ac lobortis ipsum sapien vel purus. Vivamus aliquet gravida nibh.</p>
          </div>
        </div>
      </div>
      <div class="toggle">
        <h2 class="trigger">+ Click to title</h2>
        <div class="togglebox">
          <div>
            <h3>Don't you?</h3>
            <p>Nulla non tortor eget ligula dapibus <a href="#"> semper non ut mauris</a>. Nam feugiat, lorem a tempus auctor, odio nisl porttitor lacus, ut ultrices neque massa a odio. Pellentesque sit amet leo dictum nisl tempor malesuada id ut magna. Etiam non mauris eget massa sagittis euismod. Aliquam lectus nulla, consequat eget molestie id, malesuada sit amet lectus. Pellentesque eget justo sit amet nunc adipiscing semper at ac quam. Praesent a volutpat nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <p> Morbi congue pellentesque quam, eu ultricies. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc rhoncus tortor quis eros bibendum a tempus est dapibus. Vivamus consectetur quam eu tellus porttitor ultrices. Nunc metus massa, ullamcorper sit amet malesuada a, porttitor in tellus. Vestibulum ullamcorper quam nec lorem aliquam id feugiat risus tincidunt. </p>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="page-buttons.php">Events</a></li>
				<li><a href="portfolio-1.php">Gallery</a></li>
				<li><a href="services.php">Features</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
          </div>
        </div>
      </div>
    </div>
	<div class="content" style="text-align: center;">
		<a href="/" id="btn1" class="linkBtn">button1</a>
		<a href="/" id="btn2" class="linkBtn">button2</a>
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
  
<?php 
	include 'ct_bottom.php'
  ?>
	
</body>
</html>