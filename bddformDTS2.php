<?php

    function insererUtilisateur($infoUtilisateur){
    	try{
    		$bdd = new PDO('mysql:host=localhost;dbname=dts06;charset=utf8mb4', 'root', '');
    		$hasCar = ($infoUtilisateur['vehicule'] == "oui")?1 : 0;
        $requete = "INSERT INTO `utilisateur` (`nom`, `prenom`, `datenaissance`, `telephone`, `email`, `statut`, `situationactuelle`, `vehicule`, `connaissance`, `formations`, `diplomeobtenu`, `langues`, `zonederecherche`, `projetprofessionnel`, `demarches`, `diplomevise`, `CFA`) VALUES ('". $infoUtilisateur['nom'] ."', '". $infoUtilisateur['prenom'] ."','".$infoUtilisateur['DateN']."','".$infoUtilisateur['phone']."','".$infoUtilisateur['email']."','".$infoUtilisateur['State']."','".$infoUtilisateur['situationactuelle']."',".  $hasCar .",'".$infoUtilisateur['connaissance']."','".$infoUtilisateur['formations']."','".$infoUtilisateur['diplomeobtenu'] ."','".$infoUtilisateur['langues']."','".$infoUtilisateur['zone']."','".$infoUtilisateur['projet']."','".$infoUtilisateur['demarches']."','".$infoUtilisateur['diplome']."','".$infoUtilisateur['CFA']."')";
    		$reponse = $bdd->query($requete);

    		return $hasCar;
   		}
		catch(\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
		}
    }
   
?>


