<?php session_start();
require('connect_to_quest.php');

$idEXP=$_SESSION['idUSER'];
$stmt = $BDD->prepare('select * from experience,lancer where lancer.exp=? and lancer.exr=experience.exr_id');
$stmt->execute(array($idEXP));



?>


<!doctype html>
<html>
<head>
	<title> Page d'acceuil USER</title>
	<meta charset="utf-8"/>
    <link rel="stylesheet"  href="bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet"  href="bootstrap/css/bootstrap.css">
 

</head>
<body>
 <h2 class="text-center">Page d'acceuil USER</h2>
 <h1><a href="RepondreQuestionnaire.php">Répondre à un questionnaire</a></h1>
 <div class="well">
            <form class="form-signin form-horizontal" role="form" action="RepondreQuestionnaire.php" method="post">
               <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <label for="code">Entrez le code questionnaire  : </label>
                    <input type="int" name="code_qutaire" id="code" class="form-control" placeholder="Entrez le code" required>
                    </div>
                    <br/>
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-circle-arrow-right"></span> start !</button>
                    </div>
                </div>
                 
                
            </form>
        </div>
 <h2> Liste des questionnaires auxquels vous avez déja participé  : </h2>
  <?php foreach ($stmt as $experience) { ?>
            <article>
                <h5><a class="nom_experience" href="PageAcceuilExperience.php?id=<?= $experience['exr_id'] ?>"><?= $experience['exr_nom'] ?></a></h5>
                
            </article>
        <?php } ?>
  
 
  

</body>
</html>