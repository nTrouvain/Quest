<?php session_start();
require('connect_to_quest.php');
$idExperience = $_GET['id'];
$stmt = $BDD->prepare('select * from experience where exr_id=?');
$stmt->execute(array($idExperience));
$experience = $stmt->fetch(); 

$requete=$BDD->prepare('select * from campagne where camp_exr=?');
$requete->execute(array($idExperience));



?>




<!doctype html>
<html>
<head>
	<title> Gestion expérience</title>
	<meta charset="utf-8"/>
  <link rel="stylesheet"  href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap-themes.css">
  <link rel="stylesheet"  href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css">
 

</head>
<body>
 <h2 class="text-center">Gestion d'expérience</h2>
  <div class="jumbotron">
            <div class="row">
                
                <div class="col-md-7 col-sm-5">
                    <h2><?= $experience['exr_nom'] ?></h2>
                    
                    <p><small><?= $experience['exr_desc'] ?></small></p>
                    <h2>Campagne(s) de cette expérience :</h2>
                    <?php foreach ($requete as $campagne) { ?>
                       <article>
                        <h5><a class="nom_campagne" href="PageAcceuilCampagne.php?id=<?=$campagne['camp_id']?>"><?= $campagne["camp_nom"] ?></a></h5>
                
                      </article>
                    <?php } ?>
  
                
                    

                    <h3><a  href="CreerCampagne.php?id=<?=$idExperience?>">Ajouter une campagne</a></h3>
                </h2>
            </div>
        </div>
 

  
  
 
  

</body>
</html>