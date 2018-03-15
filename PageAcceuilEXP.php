<?php session_start();
require('connect_to_quest.php');

$idEXP=$_SESSION['idEXP'];
$stmt = $BDD->prepare('select * from experience,lancer where lancer.exp=? and lancer.exr=experience.exr_id');
$stmt->execute(array($idEXP));



?>


<!doctype html>
<html>
<head>
	<title> Page d'acceuil EXPERIMENTATEUR</title>
	<meta charset="utf-8"/>
  <link rel="stylesheet"  href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap-themes.css">
  <link rel="stylesheet"  href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css">
 

</head>
<body>
 <h2 class="text-center">Page d'acceuil EXPERIMENTATEUR</h2>
 <h1><a href="CréerExperience.html">Créer EXPERIENCE</a></h1>
 <h2> Liste des expériences existantes : </h2>
  <?php foreach ($stmt as $experience) { ?>
            <article>
                <h5><a class="nom_experience" href="PageAcceuilExperience.php?id=<?= $experience['exr_id'] ?>"><?= $experience['exr_nom'] ?></a></h5>
                
            </article>
        <?php } ?>
  
 
  

</body>
</html>