<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Traitement formulaire</title>
</head>
<body>

	<?php

// INITIALISATION DE LA BASE DE DONNEES

	require_once("dbinit.php");

// ON RECUPERE LES VALEURS DE POST, ON LES VALIDE

	$nom = "Dupont";
	$prenom = "Jean";
	$ddn = "1990-5-7";
	$telephone = "1234 5678";
	$email = "toto@dupont.com";
	$statut = 1;
	$situation_actuelle = "allo";
	$vehicule = 1;
	$referent = "pouet";
	$formations = "rvhydjd";
	$diplome_max = 2;
	$langues = "tdvt,t";
	$zone = "vtdjt,ut";
	$avancement = "vjdtyjtddutj";
	$demarches = "cdyrjdtvdty";
	$diplome_vise = "cdryjdytvdt";
	$cfa_souhaite = "dytvjdytk";


// ON CREE L'ENREGISTREMENT DANS LA BASE DE DONNEES

	$requete = "INSERT INTO `inscriptions`
		(`inscriptions_nom`,`inscriptions_prenom`,`inscriptions_ddn`,`inscriptions_telephone`,`inscriptions_email`,`inscriptions_statut`,`inscriptions_situation_actuelle`,`inscriptions_vehicule`,`inscriptions_referent`,`inscriptions_formations`,`inscriptions_diplome_max`,`inscriptions_langues`,`inscriptions_zone`,`inscriptions_avancement`,`inscriptions_demarches`,`inscriptions_diplome_vise`,`inscriptions_cfa_souhaite`)
		VALUES (:nom,:prenom,:ddn,:telephone,:email,:statut,:situation_actuelle,:vehicule,:referent,:formations,:diplome_max,:langues,:zone,:avancement,:demarches,:diplome_vise,:cfa_souhaite)";

	echo $requete;

	$stmt = $pdo->prepare($requete);
	$stmt->bindParam(":nom",$nom,PDO::PARAM_STR);
	$stmt->bindParam(":prenom",$prenom,PDO::PARAM_STR);
	$stmt->bindParam(":ddn",$ddn,PDO::PARAM_STR);
    $stmt->bindParam(':telephone',$telephone, PDO::PARAM_STR);
    $stmt->bindParam(':email',$email, PDO::PARAM_STR);
    $stmt->bindParam(':statut',$statut, PDO::PARAM_INT);
    $stmt->bindParam('situation_actuelle',$situation_actuelle, PDO::PARAM_STR);
    $stmt->bindParam('vehicule',$vehicule, \PDO::PARAM_INT);
    $stmt->bindParam('referent',$referent, PDO::PARAM_STR);
    $stmt->bindParam('formations',$formations, PDO::PARAM_STR);
    $stmt->bindParam('diplome_max',$diplome_max, PDO::PARAM_INT);
    $stmt->bindParam('langues',$langues, PDO::PARAM_STR);
    $stmt->bindParam('zone',$zone, PDO::PARAM_STR);
    $stmt->bindParam('avancement',$avancement, PDO::PARAM_STR);
    $stmt->bindParam('demarches',$demarches, PDO::PARAM_STR);
    $stmt->bindParam('diplome_vise',$diplome_vise, PDO::PARAM_STR);
    $stmt->bindParam('cfa_souhaite',$cfa_souhaite, PDO::PARAM_STR);


	$result = $stmt->execute();


	?>
	
</body>
</html>