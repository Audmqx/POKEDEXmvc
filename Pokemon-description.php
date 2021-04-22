<?php

//autoloader qui charge toutes les classes
    require("Models/Autoloader.php");
    Autoloader::register();


if (empty($_POST)) {
	header("location: index.php?erreur=pasDePost");
	exit;
}

$listePokomon = Database::getAllJeux();
$vue = new Vues();



foreach ($_POST as $key => $value) {
	$val1 = $key ;
	$val2 = $value ;
echo $val1 . " " . $val2;
};



switch ($val2) {
	case '01':
		$pokomonSans = Database::getPokomonById($val2);
		echo $vue->generateDescription($pokomonSans,$val2);
		break;
	
	case '151':
		$pokomonSans = Database::getPokomonById($val2);
		echo $vue->generateDescription($pokomonSans,$val2);
		break;

	case 'Random':
		$randomNb = rand(1,151);
		$pokomonRandom = Database::getPokomonById($randomNb);
		echo $vue->generateDescription($pokomonRandom);
		break;

	default:
		$pokomonSans = Database::getPokomonById($val2);
		echo $vue->generateDescription($pokomonSans,$val2);
		break;
}

// if ($val2 == "01") {
// 	$pokomonSans = Database::getPokomonById($val2);
// 	echo $vue->generateDescription($pokomonSans,$val2);
// }

// if ($val1 == "Précédent" xor $val2 != "01" or $val2 != "151") {
// 		$pokomonPrecedent = Database::getPokomonById($val2);
// 		echo $vue->generateDescription($pokomonPrecedent);
// } else {
// 		$pokomonSans = Database::getPokomonById($val2);
// 	echo $vue->generateDescription($pokomonSans,$val2);
// }

//  if ($val1 == "Suivant" xor $val2 != "151") {
// 		$pokomonSuivant = Database::getPokomonById($val2);
// 		echo $vue->generateDescription($pokomonSuivant);
// }
// else {
// 		$pokomonSans = Database::getPokomonById($val2);
// 		echo $vue->generateDescription($pokomonSans,$val2);
// }





// }




// var_dump($listePokomon);
// for ($i=0; $i < sizeof($listePokomon); $i++) { 
// 	# code...
// 	if ($val1 == $listePokomon[$i]->Nom) {
// 		echo "TROUVE";
// 		echo $vue->generateDescription($listePokomon);
// 	}
// }



// if ($val1 == "Bulbizarre") {
// 	$pokomonSans = Database::getPokomonById($val2);
// 	echo $vue->generateDescription($pokomonSans,$val2); 	
// } else if ($val1 == "Mew") {
// 	$pokomonSans = Database::getPokomonById($val2);
// 	echo $vue->generateDescription($pokomonSans,$val2);
// }

// else {

// foreach ($listePokomon as $Pokomon) {
// 	if ($val1 == $Pokomon->Nom ) {
// 		echo $vue->generateDescription($Pokomon);
// 	}
// }




// if ($val1 == "Random") {
// 		$randomNb = rand(1,151);
// 		$pokomonRandom = Database::getPokomonById($randomNb);
// 		echo $vue->generateDescription($pokomonRandom);
// 	}

