<script>
			//	Level 1 begins...
			document.getElementById("header").innerHTML = "Level 1: Get the Hell Out of There!";

			alert("You put on a shirt and throw on your slippers and walk into the living room when you hear an explosion in the distance. The windows shake and the power goes out.");
			
			//	Equip shirt (chest) & update stats:
			fChest = setGear("Shirt","Armor","Chest",5,5,1,0,0,0,0,0,0,0,0,0,0);
			player = updatePlayer(player,fChest,cChest);
			pChest = cChest;
			cChest = fChest;
			equip = setEquip(equip.head,cChest.name,equip.back,equip.hands,equip.feet,equip.held);
						
			//	Equip slippers (feet) & update stats:
			fFeet = setGear("Slippers","Armor","Feet",5,5,1,-5,0,0,0,0,0,0,0,0,0);
			player = updatePlayer(player,fFeet,cFeet);
			pFeet = cFeet;
			cFeet = fFeet;
			equip = setEquip(equip.head,equip.chest,equip.back,equip.hands,cFeet.name,equip.held);
			
			//	Display updated stats:
			displayStats(player);
			displayEquip(equip);
			
			alert("You hear faint screams accompanied by the neighborhood dogs barking frantically. The screams grow nearer!");
</script>