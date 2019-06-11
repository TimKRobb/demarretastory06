<?php

    function insererUtilisateur($infoUtilisateur){
      echo "<script>alert(\"connec db\");</script>";
    	try{
    		$bdd = new PDO('mysql:host=localhost;dbname=dts06;charset=utf8', 'root', '');
    		$hasCar = ($infoUtilisateur['vehicule'] == "oui")?1 : 0;
    		$reponse= $bdd->query("INSERT INTO `utilisateur`(`nom`, `prenom`, `datenaissance`, `telephone`, `email`, `statut`, `situationactuelle`, `vehicule`, `connaissance`, `formations`, `diplomeobtenu`, `langues`, `zonederecherche`, `projetprofessionnel`, `demarches`, `diplomevise`, `CFA`) VALUES ('". $infoUtilisateur['nom'] ."', '". $infoUtilisateur['prenom'] ."','".$infoUtilisateur['DateN']."','".$infoUtilisateur['phone']."','".$infoUtilisateur['email']."','".$infoUtilisateur['State']."','".$infoUtilisateur['situationactuelle']."','".  $hasCar ."','".$infoUtilisateur['connaissance']."','".$infoUtilisateur['formations']."','".$infoUtilisateur['diplomeobtenu'] ."','".$infoUtilisateur['langues']."','".$infoUtilisateur['zone']."','".$infoUtilisateur['projet']."','".$infoUtilisateur['demarches']."','".$infoUtilisateur['diplome']."','".$infoUtilisateur['CFA']."')");

    		return $hasCar;
   		}
		catch(Exception $e){
      		echo("probleme de connexion");
		}
    }
   
?>


