<?php
$leeftijd = "";
if(isset($_GET['age']))	{
	$leeftijd = $_GET['age'];
}

if($leeftijd == ''){
 echo "Je hebt nog geen leeftijd ingegeven";
}

elseif ($leeftijd <= 15) {
	echo "You're " . $leeftijd .  " so you're not allowed to have a 
	scooter license. You also can not drink alcohol. ";
}
elseif ($leeftijd >= 16 && $leeftijd <= 17) {
	echo "You're " . $leeftijd .  " so you're allowed to have a 
	scooter license but you can not drink alcohol. ";
} 
elseif ($leeftijd >= 18 && $leeftijd <= 20) {
	echo "You're " . $leeftijd .  " so you're allowed to have a 
	scooter license & car license and you are can drink alcohol. ";
}
elseif ($leeftijd >= 21) {
	echo "You're " . $leeftijd .  " so you're allowed to have a 
	scooter license, heavy vehicle license & car license and you are can drink alcohol. ";
}



?>