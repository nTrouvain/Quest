<?php session_start();

require('connect_to_quest.php');

$idExperience = $_GET['id'];

if (!empty($_POST['description']) and !empty($_POST['dateDebut'])and !empty($_POST['dateFin']) and !empty($_POST['nom']))
{
  $nom=$_POST['nom'];
  $desc=$_POST['description'];
  $dateDeb=$_POST['dateDebut'];
  $dateFin=$_POST['dateFin'];
  


  
  // Création d'un code à 4 charactères pour l'identifiant : 

    
  $characts = '1234567890';
  
  $id = ''; 
  for($i=0;$i < 7;$i++) 
   { $id .= substr($characts,rand()%(strlen($characts)),1); } 
  
  

  
  $requete=$BDD->prepare('INSERT INTO campagne(camp_id,camp_nom,camp_desc,camp_deb,camp_fin,camp_exr) VALUES(:id,:nom,:description,:dateDebut,:dateFin,:id_experience)');
  

  
  $requete->bindValue(':id', $id, PDO::PARAM_STR); 
  $requete->bindValue(':nom', $nom, PDO::PARAM_STR);  
  $requete->bindValue(':description', $desc, PDO::PARAM_STR);
  $requete->bindValue(':dateDebut', $dateDeb, PDO::PARAM_STR);
  $requete->bindValue(':dateFin', $dateFin, PDO::PARAM_STR);
  $requete->bindValue(':id_experience', $idExperience, PDO::PARAM_STR); 
  $requete->execute();

  


}

?>

<!doctype html>
<html>
<head>
	<title> Ajouter campagne</title>
	<meta charset="utf-8"/>
    <link rel="stylesheet"  href="bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet"  href="bootstrap/css/bootstrap.css">
 

</head>
<body>
 <h2 class="text-center">Ajout d'une nouvelle campagne</h2>
  <br/>
  <br/>
 
  <div class="well">
            <form class="form-signin form-horizontal" role="form" action="TraiterCreerCampagne.php?id=<?=$idExperience?>" method="post">
               <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <label for="nom">Nom de la campagne : </label>
                    <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez le nom" required>
                    </div>
                  </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <label for="description">Entrer la description de la campagne : </label>
                    <textarea name="description" id ="description" cols="70" rows="10"> </textarea>
                    </div>
                </div>
               
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                      <label for="dateDebut">Date de début :</label>
                        <input type="date" name="dateDebut" id="dateDebut" class="form-control" placeholder="Entrez la date de début" required>
                    </div>
                </div>
                 <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                       <label for="dateFin">Date de fin :</label>
                        <input type="date" name="dateFin" id="dateFin" class="form-control" placeholder="Entrez la date de fin" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-plus"></span> Création</button>
                    </div>
                </div>
            </form>
        </div>

</body>
</html>
