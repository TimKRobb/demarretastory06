<?php

include("trait2.php");

?>
<!DOCTYPE html>
	<html lang="FR">
		<head>
			<meta charset="utf-8">
			<title>Démarre_tastory06_formulaire</title>
			<meta name="description" content="">
  		    <meta name="viewport"  content="width=device-width, initial-scale=1, shrink-to-fit=no">
  		    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

			</head>
	<body>
		<section class="contenair-fluide m-3">
		   <form action="formulaire2.php" method="POST">
		   		<fieldset>
		   			<legend class="text-center m-2" style="color:blue">INSCRIVEZ-VOUS</legend>
             <?php
              //var_dump($erreurs);
              if(isset($erreurs) && sizeof($erreurs) > 0){ ?>
              <div class="alert alert-danger alert-dismissible" role="alert">
                <?php echo implode(" ", $erreurs); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php } ?>
		   			<h5 class="class m-3" style="color:red" font-family="Vollkorn">Coordonnées personnelles*</h5>
		   			<div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="prenom">Prénom*</label>
                        <input type="text" class="form-control" id="prenom" placeholder="FirstName" name="prenom" value="<?php echo $prenom ?>">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="nom">Nom*</label>
                        <input type="text" class="form-control" id="nom" placeholder="LastName" name="nom" value="<?php echo $nom ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email*</label>
                        <input type="email" class="form-control" id="email" placeholder="kouka@outlouk.com" name="email" value="<?php echo $email ?>">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="DateN">Date de naissance</label>
                        <input type="Date" class="form-control" id="DateN" name="DateN">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="phone">Téléphone*</label>
                        <input type="text" class="form-control" id="phone" placeholder="Taper votre numéro" name="phone" value="<?php echo $phone ?>">
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="State">Quel est votre statut</label>
                      <select id="State" class="form-control" required="" name="State">Statut
                         <option value="scolarisé">Scolarisé</option>
                         <option value="demandeur d'emlpoi">Demandeur d'emploi</option>
                         <option value="En emlpoi">en Emploi</option>
                         <option value="Autres">Autres</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="connaissance">Comment nous avez-vous connu ?</label>
                       <input type="text" class="form-control" id="connaissance"  name="connaissance" value="<?php echo $connaissance ?>">
                    </div>

                     <div class="form-group col-md-4">
                      <label for="situationactuelle">Situation actuelle</label>
                       <input type="text" class="form-control" id="situationactuelle"  name="situationactuelle" value="<?php echo $situationactuelle ?>">
                    </div>
                    <h5 class=" text-center col-md-12" style="color:red">Parcours</h5><br>
                   
                    <label for="formations" > Formation(s) faite(s)</label>
                     <textarea class="form-control m-2" aria-label="formation(s) faite(s)" name="formations" id="formations"><?php echo $formations ?></textarea><br></textarea>
                    </div>

                    <div class="form-group col-md-4">
                      <label for="diplomeobtenu">Diplôme le plus haut obtenu</label>
                      <select id="diplomeobtenu"  name="diplomeobtenu" class="form-control" required="">Diplôme le plus haut obtenu
                         <option value="Aucun">	Aucun</option>
                         <option value="Brevet – BEP – CAP">	Brevet – BEP – CAP</option>
                         <option value="Bac ou équivalent">Bac ou équivalent</option>
                         <option value="BTS / DUT">BTS / DUT</option>
                         <option value="Master">Master</option>
                         <option value="Doctorat">Doctorat</option>
                         <option value="Autres">Autres</option>
                      </select>
                    </div>
                    <h6>Etes-vous véhiculé:</h6>
                    <div class="custom-control">
						<input name="vehicule" type="radio" class="custom-control-input" id="oui" value="oui" checked>
						<label class="custom-control-label" for="oui">Oui</label>
					</div>
                    <div class="custom-control">
						<input name="vehicule" type="radio" class="custom-control-input" id="non" value="non">
						<label class="custom-control-label" for="non">Non</label>
					</div>
					
					</div>
					<div class="form-group col-md-6">
                        <label for="langues">Langues parlées</label>
                        <input type="text" class="form-control" id="langues"  name="langues" value="<?php echo $langues ?>">
                        </div>
					<h5 class="class m-3 text-center" style="color:red">Le projet</h5>
					<div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="zone">Zone de recherche</label>
                        <input type="text" class="form-control" id="zone" name="zone" value="<?php echo $zone ?>">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="projet">Avancement du projet professionnel</label>
                        <input type="text" class="form-control" id="projet"  name="projet" value="<?php echo $projet ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="diplome">Les dipômes visées</label>
                        <input type="text" class="form-control" id="diplome" name="diplome" value="<?php echo $diplome ?>">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="demarches">Les démarches réalisées</label>
                        <input type="text" class="form-control" id="demarches"  name="demarches" value="<?php echo $demarches ?>">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="CFA">CFA souhaité</label>
                        <input type="text" class="form-control" id="CFA"  name="CFA" value="<?php echo $CFA ?>">
                        </div>
                    </div>
                    <div class="form-group col-md-12 clearfix">
				<button class="btn  btn-lg btn-primary col-md-3 float-right mt-3" type="submit" value="envoyer">Envoyer le formulaire</button>
			</div>


                </div>


		   		</fieldset>

		</form>

		</section>
	

 <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous">
  </script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        </script>
  

	</body>

	</html>