<!--
	Author:		James Leduc
	Title:		Zompocalypse
	Purpose:	A zombie game where survival is based upon choice and chance.
	Created:	Oct 09, 2014
	Modified:	Nov 18, 2014
	NOTE:		Once scores are settled, update scores after each battle!
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
					arr:0,
					lvlKills:0,
					totKills:0,
					lvlScr:0,
					totScr:0,
					btlHits:0,
					btlRnds:0,
					btlScr:0,
					btlKills:0,
					lvlHits:0,
					totHits:0,
					lvlTurn:0,
					totTurn:0
					};
				return p;
			}
			
			//	Initialize Player for beginning of level	-	reset:	lvlKills, lvlScr, lvlHits
			
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
			function displayStats(p){
				var str = "";
				str+=("Name: <b>"+p.name+"</b><br>");
				str+=("Current Health: <b>"+p.health+"</b><br>");
				str+=("Max Health: <b>"+p.maxH+"</b><br>");
				str+=("Defense: <b>"+p.def+"</b><br>");
				str+=("Speed: <b>"+p.spd+"</b><br>");
				str+=("Power: <b>"+p.pwr+"</b><br>");
				str+=("Accuracy: <b>"+p.acc+"%</b><br>");
				str+=("Critical Chance: <b>"+p.crit+"%</b><br>");
				str+=("357mm Rounds: <b>"+p.mm357+"</b><br>");
				str+=("39mm Rounds: <b>"+p.mm39+"</b><br>");
				str+=("9mm Rounds: <b>"+p.mm9+"</b><br>");
				str+=("Shotgun Shells: <b>"+p.shell+"</b><br>");
				str+=("Quiver Capacity: <b>"+p.quiv+"</b><br>");
				str+=("Arrows: <b>"+p.arr+"</b><br>");
				str+=("Kills: <b>"+p.totKills+"</b><br>");
				str+=("Score: <b>"+p.totScr+"</b><br>");
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
			function updatePlayer(p,f,c){
				p = {
					name:p.name,
					health:p.health - c.health + f.health,
					maxH:p.maxH - c.maxH + f.maxH,
					def:p.def - c.def + f.def,
					spd:p.spd - c.spd + f.spd,
					pwr:p.pwr - c.pwr + f.pwr,
					acc:p.acc - c.acc + f.acc,
					crit:p.crit - c.crit + f.crit,
					mm357:p.mm357 - c.mm357 + f.mm357,
					mm39:p.mm39 - c.mm39 + f.mm39,
					mm9:p.mm9 - c.mm9 + f.mm9,
					shell:p.shell - c.shell + f.shell,
					quiv:p.quiv - c.quiv + f.quiv,
					arr:p.arr - c.arr + f.arr,
					lvlKills:p.lvlKills,
					totKills:p.totKills,
					lvlScr:p.lvlScr,
					totScr:p.totScr,
					btlHits:p.btlHits,
					btlRnds:p.btlRnds,
					btlScr:p.btlScr,
					btlKills:p.btlKills,
					lvlHits:p.lvlHits,
					totHits:p.totHits,
					lvlTurn:p.lvlLand,
					totTurn:p.totLand
				};
				return p;
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
			
			function randomChance(p,cS,cD){
				var random=Math.floor((Math.random()*100)+1);
				var chance=Math.floor((Math.random()*100)+1);
				if(p.health<(p.maxH/2)){	//	IF health is less than half
					if(chance<=random){	//	IF you survive
						alert(cS);
					}else{	//	ELSE you die
						alert(cD);
						alert(p.name+", YOU ARE DEAD!");
						exit();
					}
				}else{	//	ELSE give better chance of survival
					if((chance*2)<=random){	//	IF you survive
						alert(cS);
					}else{	//	ELSE you die
						alert(cD);
						alert(p.name+", YOU ARE DEAD!");
						exit();
					}
				}
			}
			
			//	Scoring Functions:	-	might need to recode in PHP	-	use either forms or arrays
			//	Initialize Score Object:
			function initScr(s,p){
				var startT = new Date(); 
				s = {
					name:p.name,		//	set player name
					rKills:0,			//	initialize level kills
					tKills:0,			//	initialize total kills
					rTurns:0,			//	round turns	-	reinitializes in the beginning of each level
					tTurns:0,			//	total turns	-	updates at the end of each completed battle round
					rLand:0,			//	total attack turns	-	reinitializes in the beginning of each level
					tLand:0,			//	total landed attacks	-	updates at the end of each completed battle round
					accur:0,			//	initialize accuracy
					rScr:0,				//	initialize the level's score
					tScr:0,				//	initialize the total score
					hiLvl:0,			//	Highest Level Completed
					lastLvl:0,			//	Last Level played
					lastLoc:"",			//	Last Location Played
					firstP:startT,		//	Date/Time First Played
					lastP:startT		//	Date/Time Last Played
				};
				return s;
			}
			
			//	Initialize Level Scores:
			function initRndScr(s){
				s.rKills=0;
				s.rTurns=0;
				s.rLand=0;
				s.rScr=0;
				return s;
			}
			function initRndPlyr(p){
				p.lvlKills=0;
				p.lvlScr=0;
				p.lvlHits=0;
				p.lvlTurn=0;
				return p;
			}
			
			//	Update Round Score:
			function updateRndScr(s,p){
				s.rKills+=p.lvlKills;
				s.rTurns+=p.lvlTurn;
				s.rLand+=p.lvlHits;
				s.rScr+=p.lvlScr;
				s.accur=(s.rLand)/(s.rTurns);
				return s;
			}
			
			//	Update Total Score:
			function updateTtlScr(s,p){
				s.tKills+=p.totKills;
				s.tTurns+=p.totTurn;
				s.tLand+=p.totHits;
				s.tScr+=p.totScr;
				s.accur=(s.tLand)/(s.tTurns);
				return s;
			}
			
			
			//	Display Round Score:
			function displayRndScr(s){

			}
			
			//	Display Total Score:
			function displayTtlScr(s){
			
			}
			
		</script>
	</head>
	<body>
		<br><br>
		<center><h1 id="header">Introduction</h1></center><br><br>
		
<!--	Let the Games Begin!	-->
		
<!--	Beginning of the 'Game Sets'	-	'introSets.php'	-->
		<script>
			//	Create and initialize the player:
			var pName = prompt("What's your name?");
			var Player = setPlayer(pName);
			var Equip = setEquip("Bare","Bare","Bare","Bare","Bare","Empty");

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
			var Foe = new Object;
			var LevelScore = new Object;	//	Use to store the level score	-	reinitialize at the beginning of each level
			var TotalScore = new Object;	//	Use to store the total score	-	update after each level
//				TotalScore = initScr(TotalScore,Player);
			var level = 0;		//	current level	-	update for each level
			var lvlName = "";	//	current level name	-	update for each laval
			var scrLvl = "";	//	stores the scored level name
			var	locat = "";		//	initialize location	-	update for each module
//			var turns = 0;		//	initialize player attack turns
//			var landed = 0;		//	initialize attacks landed
			var choice = "";	//	player's choice
			var cSurv = "";		//	random chance survival message
			var cDie = "";		//	random chance death message
			
			//	Output Stat Tables:
			//	Display character table headers:
			document.write("<table width='33%' border=1 id='left'><tr><td><h2>"+pName+"'s Stats</h2></td><td><h2 id='foeN'></h2></td></tr>");
			//	Display character table content holders:
			document.write("<tr><td id='stats'></td><td id='foe' style='vertical-align:text-top'></td></tr></table>");
			//	Display equipment header:
			document.write("<table width='33%' border=1 id='right'><tr><td><h2>Equipment</h2></td></tr>")
			//	Display equipment content holder:
			document.write("<tr><td id='equip' style='vertical-align:text-top'></td></tr></table>");
			
			//	Output Score Table:
			//	Display Congratulation Message:
			document.write("<table width='100%' border='1' id='score' style='display:none'><tr><td colspan='2'><h1>CONGRATULATIONS! LEVEL "+level+": "+scrLvl+" COMPLETED!</h1></td></tr>");
			//	Display score table headers:
			document.write("<tr><td>Level "+level+" Score</td><td>Total Score</td></tr>");
			//	Display level score:
			document.write("<tr><td id='level'></td>");
			//	Display total score:
			document.write("<td id='total'></td></tr></table>");
			
			//	Address the player:
			alert("Welcome to the end of the world, "+pName+"!");

			//	Display stats and equipment:
			displayStats(Player);
			displayEquip(Equip);

/*	End of the 'Game Sets'.	*/

			<!--	The 'Story Intro'	-->
			<?php include_once("includes/introMain.php"); ?>

			<!--	The 'Level 1 Intro'	-->
			<?php include_once("includes/lvl1_Intro.php"); ?>

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
					
					<!--	The 'House Encounter'	-->
					<?php include("includes/lvl1_House.php"); ?>					
					
				}else if(choice=='h'){	//	Help (h)
				
					<!--	The 'Yard Encounter'	-->
					<?php include_once("includes/lvl1_Yard.php"); ?>					
			
				}
					
			}else if(choice=='p'){	//	Prepare (p)
			
				<!--	The 'House Encounter'	-->
				<?php include("includes/lvl1_House.php"); ?>					
				
			}
			
			<!--	The 'Truck Encounter'	-->
			<?php include_once("includes/lvl1_Truck.php"); ?>					
			
			<!--	The 'Scoring' Include	-->
			<!--?php include("includes/scoring.php");	?-->
			
			LevelScore = updateRndScr(LevelScore,Player);
	//		displayRndScr(LevelScore);
			TotalScore = updateTtlScr(TotalScore,Player);
	//		displayTtlScr(TotalScore);
		</script>
	</body>
</html>