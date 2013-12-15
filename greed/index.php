<html>
	<head>
		<title>Greed Game Concept</title>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="./js/jquery.avgrund.js"></script>
		<link rel="stylesheet" href="./css/avgrund.css">
	</head>
	<body>
		<div id="container" style="width:500px; margin:0 auto;">
			<div class="header" style="background:lightyellow; margin-bottom:30px;">
				<!-- Intro text -->
				<div class="learn" style="width:200px; margin: 20px auto; cursor:pointer;">
					<h3>Learn about Greed!</h3>
				</div>
				
				<!-- How it works -->
				<div class="how" style="width:200px; margin: 20px auto; cursor:pointer;">
					<h3>How it works</h3>
				</div>
				
				<!-- gameplay -->
				<div class="gameplay" style="width:200px; margin: 20px auto; cursor:pointer;">
					<h3>Gameplay</h3>
				</div>
				
				<!-- item prices -->		
				<div class="item_price" style="width:200px; margin: 20px auto; cursor:pointer; display:none;"> 
					<h3>Item prices</h3>
				</div>
			</div>

			
			<!-- intro text -->
			<div id="learn" style="display:none;">
				<p>Welcome to the land of Greed! This is an early prototype game for a mobile app planned for development in 2014!</p>
				<p>Greed was designed to be a simple, intuitive game concept for mobile. This is my first attempt at a mobile app and it is intended to be an easy-to-play mobile game that combines a turn-based game with both luck and strategy.</p>
			</div>			
			
			<!-- How it works -->
			<div id="how" style="display:none;">
				<p>Greed is a 1v1 turn-based fighting game. Each turn has 3 components. Rolling dice to aqquire gold, spending gold to unlock items, and attacking.  </p>
			</div>			
						
			<!-- gameplay -->
			<div id="gameplay" style="display:none;">
				<p>It's your turn to get greedy!</p>
				<p>Roll the dice to earn gold.</p>
				<p>Gold is used to buy items.</p> 
				<p>Keep rolling to bank even more gold.</p> 
				<p style="color:red;">BEWARE: Roll a 1 and you'll lose all your gold from this turn. Roll Snake Eyes and lose all of your items...</p>
			</div>
			
			<div id="item_price" style="display:none;">
				<ul style="float:left; width:35%; font-size:10px;">
					<h3>Offensive Items</h3>
					<!--- AD   -->
					<h4>Attack Damage Items</h4>
					<li class="ad1">AD Tier 1  -- 100 Gold</li>
					<li class="ad2">AD Tier 2  -- 200 Gold</li>
					<li class="ad3">AD Tier 3  -- 300 Gold</li>
					<br/>
					<!-- AP  -->
					<h4>Ability Power Items</h4>
					<li class="ap1">AP Tier 1  -- 100 Gold</li>
					<li class="ap2">AP Tier 2  -- 200 Gold</li>
					<li class="ap3">AP Tier 3  -- 300 Gold</li>
				</ul>
				<ul style="float:right; width:40%; font-size:10px;">
					<h3>Defensive Items</h3>
					<!-- Armor  -->		
					<h4>Armor Defense Items</h4>
					<li class="arm1">Armor Tier 1  -- 100 Gold</li>
					<li class="arm2">Armor Tier 2  -- 200 Gold</li>																									<li class="arm3">Armor Tier 3  -- 300 Gold</li>
					<br/>
					<!-- MR  -->	
					<h4>Magic Resist Items</h4>
					<li class="mr1">MR Tier 1  -- 100 Gold</li>
					<li class="mr2">MR Tier 2  -- 200 Gold</li>																
					<li class="mr3">MR Tier 3  -- 300 Gold</li>					
				</ul>
			</div>
			
			<div class="roll" style="cursor:pointer; float:left;">
				Roll the Dice!
			</div>
			
			<div class="shop" style="cursor:pointer; float:right; display:none;">
				Bank your gold!
			</div>
			
			<div class="dice" style="display:none; position:relative; top:20px;">
			
				<div class="dice1" style="position:absolute; top:20px;">
				</div>
				
				<div class="dice2" style="position:absolute; top:40px;">
				</div>
				
				<div class="gold" style="position:absolute; top: 60px;">
				</div>
				
			</div>
			
			<div class="items" style="display:none;">
				Click an item to equip it. Or save up and buy later.
				<ul style="float:left; width:40%; background:lightgreen;">
					<h3>Offensive Items</h3>
					<!--- AD   -->
					<h4>Attack Damage Items</h4>
					<li class="ad1">AD Tier 1  -- 100 Gold</li>
					<li class="ad2">AD Tier 2  -- 200 Gold</li>
					<li class="ad3">AD Tier 3  -- 300 Gold</li>
					<br/>
					<!-- AP  -->
					<h4>Ability Power Items</h4>
					<li class="ap1">AP Tier 1  -- 100 Gold</li>
					<li class="ap2">AP Tier 2  -- 200 Gold</li>
					<li class="ap3">AP Tier 3  -- 300 Gold</li>
				</ul>
				<ul style="float:right; width:40%; background:lightcoral;">
					<h3>Defensive Items</h3>
					<!-- Armor  -->		
					<h4>Armor Defense Items</h4>
					<li class="arm1">Armor Tier 1  -- 100 Gold</li>
					<li class="arm2">Armor Tier 2  -- 200 Gold</li>																									<li class="arm3">Armor Tier 3  -- 300 Gold</li>
					<br/>
					<!-- MR  -->	
					<h4>Magic Resist Items</h4>
					<li class="mr1">MR Tier 1  -- 100 Gold</li>
					<li class="mr2">MR Tier 2  -- 200 Gold</li>																
					<li class="mr3">MR Tier 3  -- 300 Gold</li>					
				</ul>
			</div>
			
			<div class="attack" style="display:none;">
			</div>

			
		</div>
		<script>	        
	        			
	        $(function() 
	        {
	                $('.learn').avgrund({
	                        height: 250,
	                        holderClass: 'custom',
	                        showClose: true,
	                        showCloseText: 'close',
	                        onBlurContainer: '.container',
	                        template: $('#learn')
	                });
	                $('.how').avgrund({
	                        height: 100,
	                        holderClass: 'custom',
	                        showClose: true,
	                        showCloseText: 'close',
	                        onBlurContainer: '.container',
	                        template: $('#how')		                
	                });
	                $('.gameplay').avgrund({
	                        height: 250,
	                        holderClass: 'custom',
	                        showClose: true,
	                        showCloseText: 'close',
	                        onBlurContainer: '.container',
	                        template: $('#gameplay')		                
	                });
	                $('.item_price').avgrund({
	                        height: 400,
	                        holderClass: 'custom',
	                        showClose: true,
	                        showCloseText: 'close',
	                        onBlurContainer: '.container',
	                        template: $('#item_price')		                
	                });	                
	        });
			
	        var gold = 0;
	     
	        function diceRoll(from,to)
			{
				return Math.floor(Math.random()*(to-from+1)+from);
			}
	        
	        $('.roll').click(function()
	        {
		  		var dice1 = diceRoll(1,6);
		  		var dice2 = diceRoll(1,6);
			  	gold += dice1 + dice2;
		  		console.log("d1 " + dice1);
		  		console.log("d2 " + dice2);
		  		$('.gameplay').html("<h3>Can I haz help plzz!?!</h3>");
		  		$('.item_price').show();
		  		$('.shop').show();
		  		
		  		if(dice1 + dice2 == 2)
		  		{
			  		alert("SNAKE EYES: All your base are belong to us");
			  		//function to rm items or end game?
			  	}
		  	  
			  	if(dice1 != 1 && dice2 != 1)
			  	{
				  	console.log("gold: " + gold);
				  	$('.roll').html("Risk it and roll again!");
			  	  
				  	//function to roll again
				  	//function to bank gold
				}
				
				if(dice1 == 1 || dice2 == 1)
				{
					gold = 0;
				  	console.log("gold: " + gold);
				  	$('.roll').hide();
				  	$('.shop').hide();
				  	$('.attack').html("Attack!!!");
				  	$('.attack').show();
				}
		     
				$('.dice').show();		  		
		  		$('.dice1').html("Dice one is " + dice1);
		  		$('.dice2').html("Dice two is " + dice2);
		  		$('.gold').html("Your current gold: " + gold);		  				  		
		     
	        });
	        
	        $('.shop').click(function()
	        {
		    	$('.roll').hide();
				$('.shop').hide();
				$('.dice1').hide();
				$('.dice2').hide();
				$('.gold').hide();
				$('.items').show();
				$('.attack').show();
	        });
	        
		</script>
	
	
	</body>
</html>