//	Level 1 begins...
level++;
document.getElementById("header").innerHTML = "Level 1: Get the Hell Out of There!";

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