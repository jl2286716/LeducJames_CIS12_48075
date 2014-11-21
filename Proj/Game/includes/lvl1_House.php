locat = "Living Room";
Player.lastLoc = locat;
Player.lastP = new Date();

do{	//	choose e || c - search livingroom
	choice = prompt('You decide to search for supplies: \nCheck the entertainment center (e) or the couch (c)?');
}while(choice!='e' && choice!='c');

if(choice=='e'){	//	Search the Entertainment Center (e)
	alert("You search the entertainment center...\nYou find the Mag-Lite!");
	
	do{
		choice = prompt("Do you want to grab the Mag-Lite?\nYes (y) or no (n)?");
	}while(choice!='y' && choice!='n');
	
	if(choice=='y'){
		//	Equip Mag-Lite (held) & update stats:
		fHeld = setGear("Mag-Lite","Item","Held",0,0,0,9,5,10,5,0,0,0,0,0,0);
		Player = updatePlayer(Player,fHeld,cHeld);
		pHeld = cHeld;
		cHeld = fHeld;
		Equip = setEquip(Equip.head,Equip.chest,Equip.back,Equip.hands,Equip.feet,cHeld.name);
		
		alert("You grabbed the Mag-Lite!");
		
		//	Display updated stats:
		displayStats(Player);
		displayEquip(Equip);
		
	}else{
		alert("You did not grab the Mag-Lite.");
	}

}else{	//	Search the Couch (c)
	alert("You search the couch...\nYou find the Defender 1300!");
	
	do{
		choice = prompt("Do you want to grab the Defender 1300?\nYes (y) or no (n)?");
	}while(choice!='y' && choice!='n');
	
	if(choice=='y'){
		//	Equip Defender 1300 (hands) & update stats:
		fHands = setGear("Defender 1300","Weapon","Hands",0,0,1,5,35,50,80,0,0,0,5,0,0);
		Player = updatePlayer(Player,fHands,cHands);
		pHands = cHands;
		cHands = fHands;
		Equip = setEquip(Equip.head,Equip.chest,Equip.back,cHands.name,Equip.feet,Equip.held);
		
		alert("You grabbed the Defender 1300!");
		
		//	Display updated stats:
		displayStats(Player);
		displayEquip(Equip);
	}else{
		alert("You did not grab the Defender 1300.");
	}
}

/*	BREAKS AFTER 14 ROUNDS	*/

//	The battle begins:
alert('Someone starts pounding on your front door!\nYou look out the window and notice your neighbor looking sick and injured, so you open the door to help her.\n"Hey!, are you alright?"\nShe lunges at you!');
Foe = setFoe("Ghoulish",100,5,30,20);
displayFoe(Foe);
Player = attack(Player,Foe,Equip);
displayStats(Player);

do{	//	choose k || b
	choice=prompt('You try to catch your breath."HOLY SHIT!"Time\'s running thin!\nSearch the kitchen (k) or bedroom (b)?');
}while(choice!='k' && choice!='b');

if(choice=='k'){	//	search the kitchen (k)
	
	locat = "Kitchen";
	Player.lastLoc = locat;
	Player.lastP = new Date();
	
	alert('You run into the kitchen.\nSomeone starts pounding on the front door again!\n"Yeah, yeah! I\'m not falling for that again!"');
	
	do{	//	choose c || d
		choice=prompt("Search the cabinet (c) or drawer (d)?");
	}while(choice!='c' && choice!='d');
	
	if(choice=='c'){	//	Search the cabinet (c)
		alert("You search the cabinet...\nYou find the truck key!");
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
	}else if(choice=='d'){	//	Search the drawer (d)
		alert("You search the drawer...\nYou find the Ginsu knife!");
		do{
			choice = prompt("Do you want to grab the Ginsu knife?\nYes (y) or no (n)?");
		}while(choice!='y' && choice!='n');
		
		if(choice=='y'){
			//	Equip Ginsu Knife (hands) & update stats:
			fHands = setGear("Ginsu Knife","Weapon","Hands",0,0,0,12,6,40,30,0,0,0,0,0,0);
			Player = updatePlayer(Player,fHands,cHands);
			pHands = cHands;
			cHands = fHands;
			Equip = setEquip(Equip.head,Equip.chest,Equip.back,cHands.name,Equip.feet,Equip.held);
			
			alert("You grabbed the Ginsu knife!");
			
			//	Display updated stats:
			displayStats(Player);
			displayEquip(Equip);
		}else{
			alert("You did not grab the Ginsu knife.");
		}
	}
	
	do{
		choice = prompt("Someone, or something, smashes in the front door and makes a bee line for you!\nDo you attack (a) or run (r)?");
	}while(choice!='a' && choice!='r');
	
	if(choice=='a'){
		//	The battle begins:
		alert("You run head on at that son-of-a-bitch!");
		Foe = setFoe("Ghoulish",100,5,30,20);
		displayFoe(Foe);
		Player = attack(Player,Foe,Equip);
		displayStats(Player);
	}
	
	alert("You run out the back door when you spot a devilish dog snarling at you!\nSo, you run straight for your truck!");
	
}else if(choice=='b'){	//	Search the bedroom (b)

	locat = "Bedroom";
	Player.lastLoc = locat;
	Player.lastP = new Date();
	
	alert('You run into the bedroom.\nSomeone starts pounding on the bedroom window!\n"Awe, crap!"');
	
	do{	//	choose d || n || c
		choice=prompt("Search the dresser (d), nightstand (n), or closet (c)?");
	}while(choice!='d' && choice!='n' && choice!='c');
	
	if(choice=='d'){	//	search the dresser (d)
		alert("You search the dresser...\nYou find a small box of shotgun shells!");
		do{
			choice = prompt("Do you want to grab the box of shotgun shells shells?\nYes (y) or no (n)?");
		}while(choice!='y' && choice!='n');
		
		if(choice=='y'){
			//	Update Player.shell:
			Player.shell+=5;
			alert("You grabbed the small box of shotgun shells!");
			
			//	Display updated stats:
			displayStats(Player);
		}else{
			alert("You did not grab the small box of shotgun shells.");
		}
	}else if(choice=='n'){	//	search the nightstand (n)	-	beanie
		alert("You search the nightstand...\nYou find the beanie!");
		do{
			choice = prompt("Do you want to put on the beanie?\nYes (y) or no (n)?");
		}while(choice!='y' && choice!='n');
		
		if(choice=='y'){
			//	Equip Beanie (head) & update stats:
			fHead = setGear("Beanie","Armor","Head",5,5,2,0,0,0,0,0,0,0,0,0,0);
			Player = updatePlayer(Player,fHead,cHead);
			pHead = cHead;
			cHead = fHead;
			Equip = setEquip(cHead.name,Equip.chest,Equip.back,Equip.hands,Equip.feet,Equip.held);
			
			alert("You put on the beanie!");
			
			//	Display updated stats:
			displayStats(Player);
			displayEquip(Equip);
		}else{
			alert("You did not grab the beanie.");
		}
	}else if(choice=='c'){	//	search the closet (c)	-	coat	-	DOES NOT EQUIPT AT ALL
		alert("You search the closet...\nYou find the coat!");
		do{
			choice = prompt("Do you want to put on the coat?\nYes (y) or no (n)?");
		}while(choice!='y' && choice!='n');
		
		if(choice=='y'){
			//	Equip Coat (chest) & update stats:
			fChest = setGear("Coat","Armor","Chest",10,10,5,-2,0,0,0,0,0,0,0,0,0);
			Player = updatePlayer(Player,fChest,cChest);
			pChest = cChest;
			cChest = fChest;
			Equip = setEquip(Equip.head,cChest.name,Equip.back,Equip.hands,Equip.feet,Equip.held);
			
			alert("You put on the coat!");
			
			//	Display updated stats:
			displayStats(Player);
			displayEquip(Equip);
		}else{
			alert("You did not grab the coat.");
		}
	}
	
	choice=prompt('A ghoulish woman smashes in the bedroom window!\nAttack (a) her or run (r) out the backdoor?');
	
	if(choice=='a'){	//	attack (a)
		//	The battle begins:
		alert("You attack the ghoulish woman!");
		Foe = setFoe("Ghoulish",100,5,30,20);
		displayFoe(Foe);
		Player = attack(Player,Foe,Equip);
		//	Display post-battle stats:
		displayStats(Player);
	}
	
	alert("You run out the backdoor!");
	alert("You look to the right...\nClear!\nYou look to the left...\nYou spot a bloody, snarling dog with glowing red eyes foaming at the mouth!");
}