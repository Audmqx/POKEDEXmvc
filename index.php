<?php

//autoloader qui charge toutes les classes
    require("Models/Autoloader.php");
    Autoloader::register();

Database::EncodeJson();

$listePokomon = Database::getAllJeux();

// foreach ($listePokomon as $Pokemon) { 
// 	echo $Pokemon->Nom;
// }

$vue = new Vues();

echo $vue->generateView($listePokomon);



// foreach ($listePokomon as $key => $value) {
// 	echo "Hey!";
// 	echo "<br>";
// 	foreach ($value as $key => $valeur) {
// 		echo $key." :clef ---- valeur: ".$valeur;
// 		echo "<br>";
// 	}
// 	echo "<br>";
// }


//foreach ($listePokomon as $Pokemon) { 

