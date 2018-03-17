<?php session_start();

require('connect_to_quest.php');

$idCampagne = $_GET['id'];


?>

<!doctype html>
<html>
<head>
	<title> Ajouter Questionnaire</title>
	<meta charset="utf-8"/>
    <link rel="stylesheet"  href="bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet"  href="bootstrap/css/bootstrap.css">
 

</head>
<body>
 <h2 class="text-center">Ajout d'un nouveau questionnaire</h2>
  <br/>
  <br/>
 
  <div class="well">
            <form class="form-signin form-horizontal" role="form" action="TraiterCreerQuestionnaire.php?id=<?=$idCampagne?>" method="post">
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
