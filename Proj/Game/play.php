<!--
	Author:		James Leduc
	Title:		Zompocalypse
	Purpose:	A zombie game where survival is based upon choice and chance.
	Created:	Oct 09, 2014
	Modified:	Nov 17, 2014
-->
<!doctype html>
<html lang="en">
	<head>
		<title>Zompocalypse</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles/styles.css">	<!-- Include Style Sheets -->
		<script src=""></script>
		<script>
			//	Setter Functions:
			function setPlayer(playerName){
				var p = new Object();
					p = {
					name:playerName,
					health:200,
					maxH:200,
					def:10,
					spd:50,
					pwr:20,
					acc:50,
					crit:0,
					mm357:0,
					mm39:0,
					mm9:0,
					shell:0,
					quiv:0,
					arr:0
					};
				return p;
			}
			
			function setFoe(n,h,d,s,p){
				var f = new Object();
					f = {
						name:n,
						health:h,
						def:d,
						spd:s,
						pwr:p
					};
				return f;
			}
			
			function setGear(n,t,w,h,mh,d,s,p,a,c,m357,m39,m9,sh,q,ar){
				var g = new Object();
					g = {
					name:n,
					type:t,
					wear:w,
					health:h,
					maxH:mh,
					def:d,
					spd:s,
					pwr:p,
					acc:a,
					crit:c,
					mm357:m357,
					mm39:m39,
					mm9:m9,
					shell:sh,
					quiv:q,
					arr:ar
					};
				return g;
			}
			
			function setEquip(hd,ch,bk,hn,ft,he){
				var e = new Object();
					e = {
					head:hd,
					chest:ch,
					back:bk,
					hands:hn,
					feet:ft,
					held:he
				};
				return e;
			}
			
			//	Display Functions:
			function displayStats(player){
				var str = "";
				str+=("Name: <b>"+player.name+"</b><br>");
				str+=("Current Health: <b>"+player.health+"</b><br>");
				str+=("Max Health: <b>"+player.maxH+"</b><br>");
				str+=("Defense: <b>"+player.def+"</b><br>");
				str+=("Speed: <b>"+player.spd+"</b><br>");
				str+=("Power: <b>"+player.pwr+"</b><br>");
				str+=("Accuracy: <b>"+player.acc+"%</b><br>");
				str+=("Critical Chance: <b>"+player.crit+"%</b><br>");
				str+=("357mm Rounds: <b>"+player.mm357+"</b><br>");
				str+=("39mm Rounds: <b>"+player.mm39+"</b><br>");
				str+=("9mm Rounds: <b>"+player.mm9+"</b><br>");
				str+=("Shotgun Shells: <b>"+player.shell+"</b><br>");
				str+=("Quiver Capacity: <b>"+player.quiv+"</b><br>");
				str+=("Arrows: <b>"+player.arr+"</b><br>");
				document.getElementById("stats").innerHTML = str;
			}
			
			function displayEquip(equip){
				var str = "";
				str+=("Head: <b>"+equip.head+"</b><br>");
				str+=("Chest: <b>"+equip.chest+"</b><br>");
				str+=("Back: <b>"+equip.back+"</b><br>");
				str+=("Hands: <b>"+equip.hands+"</b><br>");
				str+=("Feet: <b>"+equip.feet+"</b><br>");
				str+=("Held Item: <b>"+equip.held+"</b><br>");
				document.getElementById("equip").innerHTML = str;
			}
			
			function displayFoe(foe){
				var str = "";
					str+=("Name: <b>"+foe.name+"</b><br>");
					str+=("Health: <b>"+foe.health+"</b><br>");
					str+=("Defense: <b>"+foe.def+"</b><br>");
					str+=("Speed: <b>"+foe.spd+"</b><br>");
					str+=("Power: <b>"+foe.pwr+"</b><br>");
				document.getElementById("foeN").innerHTML = (foe.name+" Stats");
				document.getElementById("foe").innerHTML = str;
			}
			
			//	Update Functions:
			function updatePlayer(player,found,current){
				player = {
					name:player.name,
					health:player.health - current.health + found.health,
					maxH:player.maxH - current.maxH + found.maxH,
					def:player.def - current.def + found.def,
					spd:player.spd - current.spd + found.spd,
					pwr:player.pwr - current.pwr + found.pwr,
					acc:player.acc - current.acc + found.acc,
					crit:player.crit - current.crit + found.crit,
					mm357:player.mm357 - current.mm357 + found.mm357,
					mm39:player.mm39 - current.mm39 + found.mm39,
					mm9:player.mm9 - current.mm9 + found.mm9,
					shell:player.shell - current.shell + found.shell,
					quiv:player.quiv - current.quiv + found.quiv,
					arr:player.arr - current.arr + found.arr
				};
				return player;
			}
			
			function clearFoe(){
				document.getElementById("foeN").innerHTML = "";
				document.getElementById("foe").innerHTML = "";
			}
			

			//	Battle Functions: - attack function may need some refining
			
			</script>
			<!--	Attack Function - include 'attack.php'	-->
			<?php include("includes/attack.php"); ?>
			<script>
			
			function randomChance(cS,cD){
				var random=Math.floor((Math.random()*100)+1)
				var chance=Math.floor((Math.random()*100)+1)
				if(chance<=random){	//	IF you survive
					alert(cS);
				}else{	//	ELSE you die
					alert(cD);
					exit();
				}
			}
			
			//	Scoring Functions:	-	might need to recode in PHP	-	use either forms or arrays
			function initScore($_GET,p,u){
			
				var startT = new Date(); 
				
				$_GET = {
					name:p.name,		//	set player name
					eMail:u.email,		//	user.email	-	user object still needs to be created
					kills:0,			//	initialize kills
					score:0,			//	initialize score
					hiLvl:0,			//	Highest Level Completed
					start:startT,		//	Date/Time First Played
					lastPly:startT,		//	Date/Time Last Played
					lastLoc:"In Bed"		//	Last Location Played
				};
			
				return $_GET;
			}
		</script>
	</head>
	<body>
		<br><br>
		<center><h1 id="header">Introduction</h1></center><br><br>
		
<!--	Let the Games Begin!	-->
		
<!--	Beginning of the 'Game Sets'	-	'introSets.php'	-->
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
/*	End of the 'Game Sets'.	*/


			<!--	Beginning of the 'Intro Story'.	-->
			<?php include_once("includes/introMain.php"); ?>
			<!--	End of the 'Intro Story'.	-->	

			<!--	Beginning of the 'Level 1 Intro'.	-->
			<?php include_once("includes/lvl1_Intro.php"); ?>
			<!--	End of the 'Level 1 Intro'.	-->	

			do{	//	choose: i || p
				choice = prompt("Investigate (i) or prepare (p)?\nEnter one letter only!");
			}while(choice!='i' && choice!='p');
			
			if(choice=='i'){	//	Investigate (i)
				alert("You look out the window and see a woman running up the street being chased by two ghoulish-looking men.");
				
				do{	//	choose: w || h
					choice = prompt("Keep watching (w) or help (h) her?");
				}while(choice!='w' && choice!='h');
				
				if(choice=='w'){	//	Watch (w)
					alert('A truck swerves into the ghoulish men, flips and wrecks into the woman before it exlopdes!"\nWOW!"');
					
					<!--	Beginning of the 'House Route'.	-->
					<?php include("includes/lvl1_HouseRte.php"); ?>					
					<!--	End of the 'House Route'.	-->
					
					//	CHECK BELOW


					
				}else if(choice=='h'){	//	Help (h)
				
/*	Beginning of the 'Yard Route'.	*/

					alert('You run out to help the woman, shouting,\n"Leave her alone!"');
					alert("Both ghoulish men turn and head towards you when a truck wrecks into one of them, flips into the fleeing woman, and explodes!");
					
					do{	//	choose s || r
						choice = prompt("Search (s) for a weapon or run (r) back into the house?");
					}while(choice!='s' && choice!='r');
					
					//	set the reaction
					if(choice=='s'){
						alert("You scan the yard...\nYou find a shovel!");
						
						do{
							choice = prompt("Do you want to grab the shovel?\nYes (y) or no (n)?");
						}while(choice!='y' && choice!='n');
						
						if(choice=='y'){
							//	Equip shovel (hands) & update stats:
							fHands = setGear("Shovel","Weapon","Hands",0,0,0,2,20,40,75,0,0,0,0,0,0);
							player = updatePlayer(player,fHands,cHands);
							pHands = cHands;
							cHands = fHands;
							equip = setEquip(equip.head,equip.chest,equip.back,cHands.name,equip.feet,equip.held);
							
							alert("You grabbed the shovel!");
							
							//	Display updated stats:
							displayStats(player);
							displayEquip(equip);
						}else{
							alert("You did not grab the shovel.");
						}
						
						//	The battle begins:
						alert("The ghoulish man attacks!");
						foe = setFoe("Ghoulish",100,5,30,15);
						displayFoe(foe);
						player = attack(player,foe,equip);
						displayStats(player);
						
					}else if(choice=='r'){
					
					}
				}


/*	End of the 'Yard Route'.	*/


					//	CHECK ABOVE
					
			}else if(choice=='p'){	//	Prepare (p)
			
				<!--	Beginning of the 'House Route'.	-->
				<?php include("includes/lvl1_HouseRte.php"); ?>					
				<!--	End of the 'House Route'.	-->
				
			}
/*	*/		
		</script>
	</body>
</html>