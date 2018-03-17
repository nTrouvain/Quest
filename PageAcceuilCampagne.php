<?php session_start();
require('connect_to_quest.php');
$idCampagne = $_GET['id'];


$requete=$BDD->prepare('select * from campagne where camp_id=?');
$requete->execute(array($idCampagne));
$campagne=$requete->fetch();

$stmt=$BDD->prepare('select * from questaire where qutaire_camp=?');
$stmt->execute(array($idCampagne));





?>




<!doctype html>
<html>
<head>
	<title> Gestion campagne </title>
	<meta charset="utf-8"/>
  <link rel="stylesheet"  href="bootstrap/css/bootstrap-theme.css">
  <link rel="stylesheet"  href="bootstrap/css/bootstrap.css">
 

</head>
<body>
 <h2 class="text-center">Gestion de campagne</h2>
  <div class="jumbotron">
            <div class="row">
                
                <div class="col-md-7 col-sm-5">
                    <h2><?= $campagne['camp_nom'] ?></h2>
                    
                    <p><small><?= $campagne['camp_desc'] ?></small></p>
                    <h2>Questionnaires(s) de cette campagne :</h2>
                    <?php foreach ($stmt as $questionnaire) { ?>
                       <article>
                        <h5><a class="nom_questionnaire" ><?= $questionnaire["qutaire_titre"] ?></a></h5>
                
                      </article>
                    <?php } ?>
                  
  
                
                    

                    <h3><a  href="CreerQuestionnaire.php?id=<?=$idCampagne?>">Ajouter un questionnaire</a></h3>
                </h2>
            </div>
        </div>
 

  
  
 
  

</body>
</html>