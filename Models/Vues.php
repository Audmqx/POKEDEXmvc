<?php

class Vues{

	function generateView($data, $vues = ""){
		$template = file_get_contents("Vues/template.tpl");

		$liste = file_get_contents("Vues/list.tpl");
		$listes = "";

		foreach ($data as $Pokemon) {
			$l = str_replace("<!--Nom-->", $Pokemon->Nom , $liste);
			$l = str_replace("<!--Numéro-->", $Pokemon->Numéro , $l);
			$l = str_replace("<!--Description-->", substr($Pokemon->Description, 0, 40)."...", $l);

			$listes .= $l;
		}
		return str_replace("<!--ContentView-->", $listes, $template);
	}


function generateDescription ($data, $vues=""){
	$template = file_get_contents("Vues/template.tpl");
	$template = str_replace("Salut à toi jeune dresseur !", "
			<a href='index.php'>Retour liste pokémons</a>
			<form action='pokemon-description.php' method='post'>
			<input type='submit' name='Random' value='Random'>
			</form>	", $template);


	switch ($vues) {
		case '01':
			
			$description = file_get_contents("Vues/description01.tpl");
			$descriptions = "";

			$d = str_replace("<!--Nom-->", $data->Nom ,$description);
			$d = str_replace("<!--Numéro-->", $data->Numéro ,$d);
			$d = str_replace("<!--Description-->",$data->Description,$d);
			$d = str_replace("<!--Précédent-->",$data->Précédent,$d);
			$d = str_replace("<!--Suivant-->",$data->Suivant,$d);

			$descriptions .= $d;

			break;

			case '151':
			
			$description = file_get_contents("Vues/description151.tpl");
			$descriptions = "";

			$d = str_replace("<!--Nom-->", $data->Nom ,$description);
			$d = str_replace("<!--Numéro-->", $data->Numéro ,$d);
			$d = str_replace("<!--Description-->",$data->Description,$d);
			$d = str_replace("<!--Précédent-->",$data->Précédent,$d);
			$d = str_replace("<!--Suivant-->",$data->Suivant,$d);

			$descriptions .= $d;

			break;
		
		default:

			$description = file_get_contents("Vues/description.tpl");
			$descriptions = "";

			$d = str_replace("<!--Nom-->", $data->Nom ,$description);
			$d = str_replace("<!--Numéro-->", $data->Numéro ,$d);
			$d = str_replace("<!--Description-->",$data->Description,$d);
			$d = str_replace("<!--Précédent-->",$data->Précédent,$d);
			$d = str_replace("<!--Suivant-->",$data->Suivant,$d);

			$descriptions .= $d;
			break;
	}



		return str_replace("<!--ContentView-->", $descriptions, $template);
}


}
