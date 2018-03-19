<?php session_start();
require('connect_to_quest.php');
$nomEXP = $_SESSION['nomEXP'];
$idEXP = $_SESSION['idEXP'];
$stmt = $BDD->prepare('SELECT * FROM experience,lancer WHERE lancer.exp=? AND lancer.exr=experience.exr_id');
$stmt->execute(array($idEXP));


?>
<!doctype html>
<html>
<?php require_once "head.php"; ?>
<body>
 <?php require_once "headerQuest.php"; ?>
 <h2 class="text-center">Création d'une nouvelle expérience</h2>
  <br/>
  <br/>
 
  <div class="well">
            <form class="form-signin form-horizontal" role="form" action="traiterCreerExp.php" method="post">
               <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <label for="nom">Nom de l'expérience : </label>
                    <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez le nom" required>
                    </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <label for="description">Entrer la description de l'expérience : </label>
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
