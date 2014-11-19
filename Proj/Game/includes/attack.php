<script>
	function attack(p,f,e,s){
		var	pA = (p.pwr)-(f.def);	//	set player attack strength
		var fA = (f.pwr)-(p.def);	//	set foe attack strength
		var turn = 1;				//	set turn counter
		var pSpd = (f.spd);			//	set player attack speed
		var fSpd = (p.spd);			//	set foe attack speed
		var pAcc = (p.acc);			//	set player accuracy
		var pCrit = (p.crit);		//	set critical chance
		var hit;					//	create hit variable
		
		//	Prompt for the beginning of the battle:
		alert("And the battle begins...");

		do{
		
			//	Player Attacks:
			if((pSpd%turn) == 0){	//	Calculate Speed
				var randAcc = Math.floor((Math.random()*100)+1);	//	Create a Random Accuracy Variable
				var randCrit = Math.floor((Math.random()*100)+1);	//	Create a Random Critical Chance Variable
				if(pAcc>=randAcc){	//	Calculate Accuracy
					//	Check for projectile ammo:
					//	Check for Defender 1300:
					if(e.hands=="Defender 1300"){
						//Check for shell:
						if(p.shell>0){	//	IF there is ammo
							if(pCrit>=randCrit){	//	calc crit
								hit=pA;
								hit*=1.5;
								f.health-=hit;
								p.shell--;
							}else{
								hit=pA;
								f.health-=hit;
								p.shell--;
							}
						}else{	//	ELSE Temporarily lower attack - power 35
							hit=pA-35;
							f.health-=hit;
						}
					//	Check for Glock 19:
					}else if(e.hands=="Glock 19"){
						//	Check for 9mm:
						if(p.mm9>0){	//	IF there is ammo
							if(pCrit>=randCrit){	//	calc crit
								hit=pA;
								hit*=1.5;
								f.health-=hit;
								p.mm9--;
							}else{
								hit=pA;
								f.health-=hit;
								p.mm9--;
							}
						}else{	//	ELSE Temporarily lower attack - power 20
							hit=pA-20;
							f.health-=hit;
						}
					//	Check for MAC-10:
					}else if(e.hands=="MAC-10"){
						//	Check for 9mm:
						if(p.mm9>0){	//	IF there is ammo
							if(pCrit>=randCrit){	//	calc crit
								hit=pA;
								hit*=1.5;
								f.health-=hit;
								p.mm9--;
							}else{
								hit=pA;
								f.health-=hit;
								p.mm9--;
							}
						}else{	//	ELSE Temporarily lower attack - power 15
							hit=pA-15;
							f.health-=hit;
						}
					//	Check for Python:
					}else if(e.hands=="Python"){
						//	Check for 357mm:
						if(p.mm357>0){	//	IF there is ammo
							if(pCrit>=randCrit){	//	calc crit
								hit=pA;
								hit*=1.5;
								f.health-=hit;
								p.mm357--;
							}else{
								hit=pA;
								f.health-=hit;
								p.mm357--;
							}
						}else{	//	ELSE Temporarily lower attack - power 25
							hit=pA-25;
							f.health-=hit;
						}
					//	Check for AK-47:
					}else if(e.hands=="AK-47"){
						//	Check for 39mm:
						if(p.mm39>0){	//	IF there is ammo
							if(pCrit>=randCrit){	//	calc crit
								hit=pA;
								hit*=1.5;
								f.health-=hit;
								p.mm39--;
							}else{
								hit=pA;
								f.health-=hit;
								p.mm39--;
							}
						}else{	//	ELSE Temporarily lower attack - power 30
							hit=pA-30;
							f.health-=hit;
						}
					//	Check for Crossbow:
					}else if(e.hands=="Crossbow"){
						//	Check for arrows:
						if(p.arr>0){	//	IF there is ammo
							if(pCrit>=randCrit){	//	calc crit
								hit=pA;
								hit*=1.5;
								f.health-=hit;
								p.arr--;
							}else{
								hit=pA;
								f.health-=hit;
								p.arr--;
							}
						}else{	//	ELSE Temporarily lower attack - power 15
							hit=pA-15;
							f.health-=hit;
						}
					}else{	//	ESLE regular attack
						if(pCrit>=randCrit){	//	calc crit
							hit=pA;
							hit*=1.5;
							f.health-=hit;
						}else{
							hit=pA;
							f.health-=hit;
						}
					}
					if(f.health<0){	//	check and adjust for negative value
						f.health=0;
					}
					displayFoe(f);
					alert("SUCCESSFUL HIT!\nYou inflicted "+hit+" damage on the "+f.name+"!");
				}else{
					alert("YOU'RE ATTACK MISSED!");
				}
			}
			//	Check Foe's Health
			if((f.health)<=0){
				alert("The "+f.name+" is DEAD!");
				clearFoe();	//	Clear the Foe
				break;		//	End the Battle
			}
			//	Foe Attacks
			if((fSpd%turn) == 0){	//	Calculate Speed
				if(fA<2){
					hit=2;
					p.health-=hit;
				}else if(fA<5){
					hit=fA;
					hit*=2;
					p.health-=hit;
				}else{
					hit=fA;
					p.health-=hit;
				}
				if(p.health<0){	//	check and adjust for negative value
					p.health=0;
				}
				displayStats(p);
				alert("YOU'VE BEEN HIT!\nThe "+f.name+" inflicted "+hit+" damage on you!");
			}
			//	Check Player's Health
			if((p.health)<=0){
				alert(p.name+", YOU ARE DEAD!");
				exit();		//	End Game
			}
			//	End Turn
			turn++;
		}while((p.health)>0 && (f.health)>0);
		return p;
	}
</script>