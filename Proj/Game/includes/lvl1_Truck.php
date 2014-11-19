alert("The hell hound chases you!\nYou get to your truck, but it's locked!");
if(equip.held=="Truck Key"){
	alert("You unlock the truck and jump in, slamming the door behind you just in time for the hound to slam it's head into the passenger-side window...\nSmashing the window, but knocking the hound unconscious!");
	alert("You turn on the truck!\nYou see another one of those ghoulish bastards walking up the driveway, so you plow right through him, taking off up the street!");
	
	//	END THE LEVEL
	
}else{
	//	The battle begins:
	alert("You turn around to face off with the hell hound!\nIt lunges at you!");
	foe = setFoe("Hell Hound",65,10,60,15);
	displayFoe(foe);
	player = attack(player,foe,equip);
	//	Display post-battle stats:
	displayStats(player);
	
	alert("You smash in the passenger-side window, unlock the truck, and climb in shutting the door behind you.\nYou grab the screwdriver out of the glovebox and jam it into the ignition switch!");
	
	//	Random Chance:
	cSurv = "A zombie starts banging on the driver-side window!\nAfter a couple of tries... The truck starts up and you take off up the street!";
	cDie = "A zombie starts banging on the driver-side window!\nYou try and try, but the switch wont turn over.\nThe zombie smashes the driver-side window, grabbing you by the neck!\nA hell hound leaps through the broken passenger-side window and bites down into your face!";
	randomChance(player,cSurv,cDie);
	
	//	END THE LEVEL
	
}
	
