<?php session_start();

require('connect_to_quest.php');

$idCampagne = $_GET['id'];

if (!empty($_POST['description'])  and !empty($_POST['nom']) and !empty($_POST['type']))
{
  $nom=$_POST['nom'];
  $desc=$_POST['description'];
  $type=$_POST['type'];
  


  
  // Création d'un code à 4 charactères pour l'identifiant : 

    
  $characts = '1234567890';
  
  $id = ''; 
  for($i=0;$i < 8;$i++) 
   { $id .= substr($characts,rand()%(strlen($characts)),1); } 
  
  

  
  $requete=$BDD->prepare('INSERT INTO questaire(qutaire_id,qutaire_camp,qutaire_titre,qutaire_desc) VALUES(:id,:idCamp,:nom,:description)');
  

  
  $requete->bindValue(':id', $id, PDO::PARAM_INT); 
  $requete->bindValue(':idCamp', $idCampagne, PDO::PARAM_INT); 
  $requete->bindValue(':nom', $nom, PDO::PARAM_STR);  
  $requete->bindValue(':description', $desc, PDO::PARAM_STR);
  
  
  $requete->execute();
  
  $stmt = $BDD->prepare('select * from question where quest_type=? ');
  $stmt->execute(array($type));
  foreach($stmt as $question) 
  { 
  $idquestion=$question['quest_id'];
  $requeteDeux=$BDD->prepare('INSERT INTO contient(qutaire,quest,qutaire_type) VALUES(:id,:idquest,:type)');
  

  
  $requeteDeux->bindValue(':id', $id, PDO::PARAM_INT); 
  $requeteDeux->bindValue(':idquest', $idquestion, PDO::PARAM_INT); 
  $requeteDeux->bindValue(':type', $type, PDO::PARAM_STR);  
 
  
  
  $requeteDeux->execute();
}

  


}

?>

<!doctype html>
<html>
<head>
	<title> Ajouter Questionnaire</title>
	<meta charset="utf-8"/>
  <link rel="stylesheet"  href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap-themes.css">
  <link rel="stylesheet"  href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css">
 

</head>
<body>
 <h2 class="text-center">Ajout d'un nouveau questionnaire</h2>
  <br/>
  <br/>
 
  <div class="well">
            <form class="form-signin form-horizontal" role="form" action="CreerQuestionnaire.php?id=<?=$idCampagne?>" method="post">
               <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <label for="nom">Nom du questionnaire : </label>
                    <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez le nom" required>
                    </div>
                  </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <label for="description">Entrer la description du questionnaire : </label>
                    <textarea name="description" id ="description" cols="70" rows="10"> </textarea>
                    </div>
                </div>
               <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <label for="type">Choisir le type de questionnaire : </label>
                    <input type="radio" name="type" id ="type" value="TLX"> TLX-NASA
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
