<script>
	do{	//	choose: i || p
		choice = prompt("Investigate (i) or prepare (p)?\nEnter one letter only!");
	}while(choice!='i' && choice!='p');

	if(choice=='i'){	//	Investigate (i)
		alert("You look out the window and see a woman running up the street being chased by two ghoulish-looking men.");
		
		do{	//	choose: w || h
			choice = prompt("Keep watching (w) or help (h) her?");
		}while(choice!='w' && choice!='h');
		
		if(choice=='w'){	//	Watch (w)
			alert('MARK!! A truck swerves into the ghoulish men, flips and wrecks into the woman before it exlopdes!"\nWOW!"');
</script>