<?php 
include("bddformDTS2.php");
?>
<?php
$prenom="";
$nom="";
$phone="";
$email="";
$langues="";
$zone="";
$CFA="";
$demarches="";
$formations="";
$situationactuelle="";
$projet="";
$diplome="";
$connaissance="";
if(!empty($_POST)){
	$prenom=$_POST['prenom'];
	$nom=$_POST['nom'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$langues=$_POST['langues'];
	$zone=$_POST['zone'];
	$CFA=$_POST['CFA'];
	$demarches=$_POST['demarches'];
	$situationactuelle=$_POST['situationactuelle'];
	$formations=$_POST['formations'];
	$projet=$_POST['projet'];
	$diplome=$_POST['diplome'];
	$connaissance=$_POST['connaissance'];

	$erreurs=verifyerreur($_POST);
	if(empty($erreurs)){
		$res = insererUtilisateur($_POST);
		header("Location: principal.html");
	}
}
 
 function verifyerreur($post){
 	$erreurs=[];
 	foreach ($post as $key => $value) {
 		$erreur=checkchamps($key);
 		if(strlen($erreur)>0)
 			$erreurs[]=$erreur;
 	
 	}
 	return $erreurs;
 }

 function checkchamps($champs){
 	$champinput=$_POST[$champs];
 	$message="";

 	$RegExpNombre = "/[0-9]/";
 	$RegExpTel = "/^(\+\d\d )?0?\d[\s\-\/\.]?\d\d[\s\-\/\.]?\d\d[\s\-\/\.]?\d\d[\s\-\/\.]?\d\d$/";
 	$RegExpTexte= "/[^0-9]/";
 	$RegExpDateNaissance= "/^((0[1-9]|[12][0-9]|3[01])[-\/.](0[1-9]|1[012])[-\/.](19|20)\d\d)|((19|20)\d\d[-\/.](0[1-9]|1[012])[-\/.](0[1-9]|[12][0-9]|3[01]))$/";

 	switch ($champs){
 		case "email":
 			if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
 				$message="email non valide <br>";
 			}
 			break;
 		case "phone":
 			if(!preg_match($RegExpTel, $champinput)){
 				$message="Veuillez entrer un numéro valide <br>";
 			}
 			break;
 		case "DateN":
 			if(!preg_match($RegExpDateNaissance, $champinput)){
 				$message="Date de naissance invalide<br>";
 			}
 			break;
 		case "nom":
 		if(!preg_match($RegExpTexte, $champinput)){
 			$message="Le nom ne doit pas contenir des nombres <br>";
 		}
 		if(strlen($champinput)<3){
 			$message.="Le non doit contenir au moins 3 caractéres <br>";
 		}
 		break;
 		case "prenom":
 		if(!preg_match($RegExpTexte, $champinput)){
 			$message="Le prenom ne doit pas contenir des nombres <br>";
 		}
 		if(strlen($champinput)<3){
 			$message.="Minimum 3 caractéres <br>";
 		}
 		break;
 		case "state":
 		if(!preg_match($RegExpTexte, $champinput)){
 			$message="Votre réponse ne doit pas contenir des nombres <br>";
 		}
 		if(strlen($champinput)<3){
 			$message.="Minimum 3 caractéres <br>";
 		}
 		break;
 		case "situationactuelle":
 		if(!preg_match($RegExpTexte, $champinput)){
 			$message="Votre situation actuelle ne doit pas contenir des nombres <br>";
 		}
 		if(strlen($champinput)<3){
 			$message.="Minimum 3 caractéres";
 		}
 		break;
 		case "formations":
 		$longueur=explode(" ",$champinput);
 		if(sizeof($longueur)<2){
 			$message="vous devez renseigner au moins deux mots <br>";
 		}
 		break;
 		case "langues":
 		if(!preg_match($RegExpTexte, $champinput)){
 			$message="Le champ des langues ne doit pas contenir des nombres <br>";
 		}
 		if(strlen($champinput)<3){
 			$message.="Minimum 3 caractéres <br>";
 		}
 		break;
 		case "zone":
 		if(!preg_match($RegExpTexte, $champinput)){
 			$message="La zone de recherche ne doit pas contenir des nombres <br>";
 		}
 		if(strlen($champinput)<3){
 			$message="Minimum 3 caractéres <br>";
 		}
 		break;
 		case "demarches":

 		if(!preg_match($RegExpTexte, $champinput)){
 			$message="Votre demarche ne doit pas contenir des nombres <br>";
 		}
 		if(strlen($champinput)<3){
 			$message.="Minimum 3 caractéres <br>";
 		}
 		break;
 		case "CFA":

 		if(!preg_match($RegExpTexte, $champinput)){
 			$message="Le champ CFA ne doit pas contenir des nombres <br>";
 		}
 		if(strlen($champinput)<3){
 			$message.="Minimum 3 caractéres <br>";
 		}
 		break;
 		case "diplome":
 		if(!preg_match($RegExpTexte, $champinput)){
 			$message="Le diplôme ne doit pas contenir des nombres <br>";
 		}
 		if(strlen($champinput)<3){
 			$message.="Minimum 3 caractéres <br>";
 		}
 		break;
 		case "projet":
 		if(!preg_match($RegExpTexte, $champinput)){
 			$message="Votre projet ne doit pas contenir des nombres <br>";
 		}
 		if(strlen($champinput)<3){
 			$message.="Minimum 3 caractéres <br>";
 		}
 		break;
 	}
	return $message;
 }
