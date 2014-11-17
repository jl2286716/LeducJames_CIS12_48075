<script>
			//	Create the player and set default stats:
			var pName = prompt("What's your name?");
			var player = setPlayer(pName);
			
			//	Output stat tables:
			//	Display character table headers:
			document.write("<table width='33%' border=1 id='left'><tr><td><h2>"+pName+"'s Stats</h2></td><td><h2 id='foeN'></h2></td></tr>");
			//	Display character table content holders:
			document.write("<tr><td id='stats'></td><td id='foe' style='vertical-align:text-top'></td></tr></table>");
			//	Display equipment header:
			document.write("<table width='33%' border=1 id='right'><tr><td><h2>Equipment</h2></td></tr>")
			//	Display equipment content holder:
			document.write("<tr><td id='equip' style='vertical-align:text-top'></td></tr></table>");
			
			//	Address the player:
			alert("Welcome to the end of the world, "+pName+"!");

			//	Set default player equipment:
			var equip = setEquip("Bare","Bare","Bare","Bare","Bare","Empty");
			
			//	Display stats and equipment:
			displayStats(player);
			displayEquip(equip);

			//	Create & initialize gear objects	-	previous (p), current (c), found (f):
			//	Head objects:
			var pHead = setGear("None","None","None",0,0,0,0,0,0,0,0,0,0,0,0,0);
			var cHead = setGear("None","None","None",0,0,0,0,0,0,0,0,0,0,0,0,0);
			var fHead = setGear("None","None","None",0,0,0,0,0,0,0,0,0,0,0,0,0);
			//	Chest objects:
			var pChest = setGear("None","None","None",0,0,0,0,0,0,0,0,0,0,0,0,0);
			var cChest = setGear("None","None","None",0,0,0,0,0,0,0,0,0,0,0,0,0);
			var fChest = setGear("None","None","None",0,0,0,0,0,0,0,0,0,0,0,0,0);
			//	Back objects:
			var pBack = setGear("None","None","None",0,0,0,0,0,0,0,0,0,0,0,0,0);
			var cBack = setGear("None","None","None",0,0,0,0,0,0,0,0,0,0,0,0,0);
			var fBack = setGear("None","None","None",0,0,0,0,0,0,0,0,0,0,0,0,0);
			//	Hands objects
			var pHands = setGear("None","None","None",0,0,0,0,0,0,0,0,0,0,0,0,0);
			var cHands = setGear("None","None","None",0,0,0,0,0,0,0,0,0,0,0,0,0);
			var fHands = setGear("None","None","None",0,0,0,0,0,0,0,0,0,0,0,0,0);
			//	Feet objects
			var pFeet = setGear("None","None","None",0,0,0,0,0,0,0,0,0,0,0,0,0);
			var cFeet = setGear("None","None","None",0,0,0,0,0,0,0,0,0,0,0,0,0);
			var fFeet = setGear("None","None","None",0,0,0,0,0,0,0,0,0,0,0,0,0);
			//	Held objects
			var pHeld = setGear("None","None","None",0,0,0,0,0,0,0,0,0,0,0,0,0);
			var cHeld = setGear("None","None","None",0,0,0,0,0,0,0,0,0,0,0,0,0);
			var fHeld = setGear("None","None","None",0,0,0,0,0,0,0,0,0,0,0,0,0);
			
			//	Create and initialize other variables:
			var foe = new Object;
			var $_GET = new Object;	//	Use to store the score.
//				$_GET = initScore($_GET,player,user);
			var choice = "";
			var cSurv = "";
			var cDie = "";

			//	Output Intro story:
/*1*/		alert("For the past few days, there have been news reports of a new global viral pandemic sweeping across the nation...");
/*2*/		alert("The time is 9:42 PM on a Sunday night: \nYou are at home in bed watching your favorite TV show when it is interrupted by a breaking news bulletin...");
/*3*/		alert('Reporter: \n"Chaos has erupted in Los Angeles and the surrounding counties!\nWe now go live to our correspondent on the scene!"');
/*4*/		alert('Correspondent: \n-shrk-\n"...pandemonium..."\n-shrk-\n"...are attacking other people..."\n-shrk-\n"...dead..."\n-shrk-\n"...rising and..."\n-shrk-\n"AAAAAHHH!!!"\n-shrk-schhh-');
/*5*/		alert('Reporter: \n"Oh! Oh my God! Wha... Was that blood that just spla...\nWhat?! This just in! The president is issuing a statement.\nWe now go live to the White House."');
/*6*/		alert('President: \n"...remain indoors!"\n-shrk-\n"...of rations and board up all..."\n-shrk-schhh-');
/*7*/		alert('Reporter: \n"We seem to have lost the feed and..."\n-yelling in the background-\n"...OH MY GOD!!!"\n-shrk-schhh-');
/*8*/		alert("The television turns to static. You turn to the other channels for further info...\nNothing but static.");
/*9*/		alert("You pick up your cellphone to check on your family and friends...\nNo service.");

</script>