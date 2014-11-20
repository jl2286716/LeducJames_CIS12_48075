locat = "Front Yard";

alert('You run out to help the woman, shouting,\n"Leave her alone!"');
alert("Both ghoulish men turn and head towards you when a truck wrecks into one of them, flips into the fleeing woman, and explodes!");

do{	//	choose s || r
	choice = prompt("Search (s) for a weapon or run (r) back into the house?");
}while(choice!='s' && choice!='r');

if(choice=='s'){
	alert("You scan the yard...\nYou find a shovel!");
	
	do{
		choice = prompt("Do you want to grab the shovel?\nYes (y) or no (n)?");
	}while(choice!='y' && choice!='n');
	
	if(choice=='y'){
		//	Equip shovel (hands) & update stats:
		fHands = setGear("Shovel","Weapon","Hands",0,0,0,2,20,40,75,0,0,0,0,0,0);
		Player = updatePlayer(Player,fHands,cHands);
		pHands = cHands;
		cHands = fHands;
		Equip = setEquip(Equip.head,Equip.chest,Equip.back,cHands.name,Equip.feet,Equip.held);
		
		alert("You grabbed the shovel!");
		
		//	Display updated stats:
		displayStats(Player);
		displayEquip(Equip);
	}else{
		alert("You did not grab the shovel.");
	}
	
	//	The battle begins:
	alert("The ghoulish man attacks!");
	Foe = setFoe("Ghoulish",100,5,30,20);
	displayFoe(Foe);
	Player = attack(Player,Foe,Equip);
	displayStats(Player);
	
}else{
	
	//	The battle begins:
	alert("You turn and run back to your house,\nbut a ghoulish woman is blocking your path!\nShe attacks!");
	Foe = setFoe("Ghoulish",100,5,30,20);
	displayFoe(Foe);
	Player = attack(Player,Foe,Equip);
	displayStats(Player);
	
}

do{	//	choose g || l
	choice = prompt("In a panic, you run towards the backyard. Should you head towards the garage (g) or the laundry (l) room?");
}while(choice!='g' && choice!='l');

if(choice=='g'){	//	go to the garage (g)

	locat = "Garage";

	//	The battle begins:
	alert("You run into the garage when you hear something growling.\n You turn around and a bloodied, grim-looking hound leaps at you!");
	Foe = setFoe("Hell Hound",65,10,60,15);
	displayFoe(Foe);
	Player = attack(Player,Foe,Equip);
	displayStats(Player);
	
	do{	//	choose w || t
		choice = prompt('"WHAT THE F**K WAS THAT!?"\nWhile trying to catch your breath, you start looking for supplies...\nSearch the workbench (w) or the toolbox (t)?');
	}while(choice!=='w' && choice!='t');
	
	if(choice=='w'){	//	search workbench (w)
		alert("You search the workbench...\nYou find a helmet!");
		
		do{
			choice = prompt("Do you want to grab the helmet?\nYes (y) or no (n)?");
		}while(choice!='y' && choice!='n');
		
		if(choice=='y'){
			//	Equip Helmet (head) & update stats:
			fHead = setGear("Helmet","Armor","Head",20,20,10,-3,0,-3,-3,0,0,0,0,0,0);
			Player = updatePlayer(Player,fHead,cHead);
			pHead = cHead;
			cHead = fHead;
			Equip = setEquip(cHead.name,Equip.chest,Equip.back,Equip.hands,Equip.feet,Equip.held);
			
			alert("You grabbed the helmet!");
			
			//	Display updated stats:
			displayStats(Player);
			displayEquip(Equip);
		}else{
			alert("You did not grab the helmet.");
		}
	}else{	//	search toolbox (t)
		alert("You search the toolbox...\nYou find a hammer!");
		
		do{
			choice = prompt("Do you want to grab the hammer?\nYes (y) or no (n)?");
		}while(choice!='y' && choice!='n');
		
		if(choice=='y'){
			//	Equip Hammer (hands) & update stats:
			fHands = setGear("Hammer","Weapon","Hands",0,0,0,10,6,35,15,0,0,0,0,0,0);
			Player = updatePlayer(Player,fHands,cHands);
			pHands = cHands;
			cHands = fHands;
			Equip = setEquip(Equip.head,Equip.chest,Equip.back,cHands.name,Equip.feet,Equip.held);
			
			alert("You grabbed the hammer!");
			
			//	Display updated stats:
			displayStats(Player);
			displayEquip(Equip);
		}else{
			alert("You did not grab the hammer.");
		}
	}
	
	alert("You carefully walk out of the garage, heading for your truck.\nYou take two steps when you hear a screech coming from above!\n");

	//	The battle begins:
	alert("You look up and this hellish-looking cat leaps down onto you!");
	Foe = setFoe("Hell Cat",25,5,75,10);
	displayFoe(Foe);
	Player = attack(Player,Foe,Equip);
	displayStats(Player);
	
	alert('"What the hell is going on?"\nBefore you can catch your breath,\nyou spot another hell hound!\nYou run for the truck!');
	
}else{	//	go to the laundry (l) room

	locat = "Laundry Room";

	alert("You run into the laundry room,\nlocking the door behind you!");
	
	do{
		choice=prompt("Search the cabinet (c) or the shelf (s)?");
	}while(choice!='c' && choice!='s');
	
	if(choice=='c'){	//	search the cabinet (c)
		alert("You search the cabinet...\nYou find your spare truck key!");
		
		do{
			choice = prompt("Do you want to grab the truck key?\nYes (y) or no (n)?");
		}while(choice!='y' && choice!='n');
		
		if(choice=='y'){
			//	Equip Truck Key (held) & update stats:
			fHeld = setGear("Truck Key","Item","Held",0,0,0,0,0,0,0,0,0,0,0,0,0);
			Player = updatePlayer(Player,fHeld,cHeld);
			pHeld = cHeld;
			cHeld = fHeld;
			Equip = setEquip(Equip.head,Equip.chest,Equip.back,Equip.hands,Equip.feet,cHeld.name);
			
			alert("You grabbed the truck key!");
			
			//	Display updated stats:
			displayStats(Player);
			displayEquip(Equip);
		}else{
			alert("You did not grab the truck key.");
		}
	}else{	//	search the shelf (s)
		alert("You search the shelf...\nYou find your sneekers!");
		
		do{
			choice = prompt("Do you want to grab the sneekers?\nYes (y) or no (n)?");
		}while(choice!='y' && choice!='n');
		
		if(choice=='y'){
			//	Equip Sneekers (feet) & update stats:
			fFeet = setGear("Sneekers","Armor","Feet",10,10,5,5,0,0,0,0,0,0,0,0,0);
			Player = updatePlayer(Player,fFeet,cFeet);
			pFeet = cFeet;
			cFeet = fFeet;
			Equip = setEquip(Equip.head,Equip.chest,Equip.back,Equip.hands,cFeet.name,Equip.held);
			
			alert("You put on the sneekers!");
			
			//	Display updated stats:
			displayStats(Player);
			displayEquip(Equip);
		}else{
			alert("You did not grab the sneekers.");
		}
	}
	
	alert("A hell hound jumps through the laundry room window, smashing it, sending glass flying everywhere!");
	
	//	The battle begins:
	alert("It stands between you and the door...\nThere's no other way...\nYou and the hell hound lunge at eachother!");
	Foe = setFoe("Hell Hound",65,10,60,15);
	displayFoe(Foe);
	Player = attack(Player,Foe,Equip);
	displayStats(Player);

	alert('"What the hell is going on?"\nAfter you calm down, you climb over the carcass of the hell hound and open the laundry room door...');
	
	//	The battle begins:
	alert("You're face-to-face with a... zombie?");
	Foe = setFoe("Zombie",120,15,20,15);
	displayFoe(Foe);
	Player = attack(Player,Foe,Equip);
	displayStats(Player);

	alert("You push the zombie to the side and exit the laundry room when you see another damn hell hound by the garage!\nIt's a clear shot to your truck, so you make a run for it!");
}