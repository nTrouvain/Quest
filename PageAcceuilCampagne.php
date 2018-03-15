<?php session_start();
require('connect_to_quest.php');
$idCampagne = $_GET['id'];


$requete=$BDD->prepare('select * from campagne where camp_id=?');
$requete->execute(array($idCampagne));
$campagne=$requete->fetch();



?>




<!doctype html>
<html>
<head>
	<title> Gestion campagne </title>
	<meta charset="utf-8"/>
  <link rel="stylesheet"  href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap-themes.css">
  <link rel="stylesheet"  href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css">
 

</head>
<body>
 <h2 class="text-center">Gestion de campagne</h2>
  <div class="jumbotron">
            <div class="row">
                
                <div class="col-md-7 col-sm-5">
                    <h2><?= $campagne['camp_nom'] ?></h2>
                    
                    <p><small><?= $campagne['camp_desc'] ?></small></p>
                  
  
                
                    

                    <h3><a  href="CreerQuestionnaire.php?id=<?=$idCampagne?>">Ajouter un questionnaire</a></h3>
                </h2>
            </div>
        </div>
 

  
  
 
  

</body>
</html>