
			
	
	
	<?php	
			
			$loops = $_POST['t']; 
			
			$myStr = "<ul class='list-head'>
				<li class='listhead-li'>Afrique du Sud,Pietermaritzburg</li>
				<li class='listhead-li'><a class='fontSizeNine' href='/rentacar/handlers/RememberLocationsHandler?oag_code=PZB&amp;from_section=&amp;from_target=reservationOnHomepage.jsp'>Pietermaritzburg Airport</a></li>
				<li class='listhead-lastli'><a class='fontSizeNine' href='/rentacar/handlers/RememberLocationsHandler?oag_code=PZB&amp;from_section=&amp;from_target=reservationOnHomepage.jsp'>PZB</a></li>
			</ul>
			<ul class='list-head'>
				<li class='listhead-li'>Afrique du Sud, Bloemfontein</li>
				<li class='listhead-li'><a class='fontSizeNine' href='/rentacar/handlers/RememberLocationsHandler?oag_code=BFN&amp;from_section=&amp;from_target=reservationOnHomepage.jsp'>Bloemfontein Airport</a></li>
				<li class='listhead-lastli'><a class='fontSizeNine' href='/rentacar/handlers/RememberLocationsHandler?oag_code=BFN&amp;from_section=&amp;from_target=reservationOnHomepage.jsp'>BFN</a></li>
			</ul>
			<ul class='list-head'>
				<li class='listhead-li'>Afrique du Sud, Cape Town</li>
				<li class='listhead-li'><a class='fontSizeNine' href='/rentacar/handlers/RememberLocationsHandler?oag_code=CPT&amp;from_section=&amp;from_target=reservationOnHomepage.jsp'>Cape Town Airport</a></li>
				<li class='listhead-lastli'><a class='fontSizeNine' href='/rentacar/handlers/RememberLocationsHandler?oag_code=CPT&amp;from_section=&amp;from_target=reservationOnHomepage.jsp'>CPT</a></li>
			</ul>
			<ul class='list-head'>
				<li class='listhead-li'>Afrique du Sud, Durban</li>
				
				<li class='listhead-li'><a class='fontSizeNine' href='/rentacar/handlers/RememberLocationsHandler?oag_code=DUR&amp;from_section=&amp;from_target=reservationOnHomepage.jsp'>King Shaka International Airport</a></li>
				<li class='listhead-lastli'><a class='fontSizeNine' href='/rentacar/handlers/RememberLocationsHandler?oag_code=DUR&amp;from_section=&amp;from_target=reservationOnHomepage.jsp'>DUR</a></li>
			</ul>
			";
			
			$responseStr = "";
			
			for ($i=0; $i<$loops; $i++)
			  {
				$responseStr = $responseStr.$myStr	;
			  }
			 echo $responseStr ;
	?>