//	Level 1 begins...
level++;
lvlName = "Get the Hell Out of There!";
scrLvl = lvlName.toUpperCase();
locat = "In Bed";
LevelScore = initRndScr(TotalScore);
Player = initRndPlyr(Player);
Player.lastLvl = level;
Player.lastLoc = locat;
Player.lastP = new Date();
document.getElementById("header").innerHTML = "Level "+level+": "+lvlName;

			
//	Output Score Table:
//	Display Congratulation Message:
document.write("<table width='auto' border='1' id='score' style='display:none;float:left'><tr><td colspan='2' width='100'><center><h1>CONGRATS!</h1><h2>LEVEL "+level+": "+scrLvl+"</h2><h2>COMPLETED!</h2></center></td></tr>");
//	Display score table headers:
document.write("<tr><td><center><b>Level "+level+" Score</b></center></td><td><center><b>"+pName+"'s Total Score</b></center></td></tr>");
//	Display level score:
document.write("<tr><td id='level'></td>");
//	Display total score:
document.write("<td id='total'></td></tr></table>");

alert("You put on a shirt and throw on your slippers and walk into the living room when you hear an explosion in the distance. The windows shake and the power goes out.");

//	Equip shirt (chest) & update stats:
fChest = setGear("Shirt","Armor","Chest",5,5,1,0,0,0,0,0,0,0,0,0,0);
Player = updatePlayer(Player,fChest,cChest);
pChest = cChest;
cChest = fChest;
Equip = setEquip(Equip.head,cChest.name,Equip.back,Equip.hands,Equip.feet,Equip.held);
			
//	Equip slippers (feet) & update stats:
fFeet = setGear("Slippers","Armor","Feet",5,5,1,-5,0,0,0,0,0,0,0,0,0);
Player = updatePlayer(Player,fFeet,cFeet);
pFeet = cFeet;
cFeet = fFeet;
Equip = setEquip(Equip.head,Equip.chest,Equip.back,Equip.hands,cFeet.name,Equip.held);

//	Display updated stats:
displayStats(Player);
displayEquip(Equip);

alert("You hear faint screams accompanied by the neighborhood dogs barking frantically. The screams grow nearer!");