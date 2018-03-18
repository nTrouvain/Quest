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

<?php require_once "headerQuestExpConnecte.php"; ?>

<header id="head">
    <div class="container">
        <div class="row">
            <h1 class="lead">Bienvenue <?php echo $nomEXP ?> !</h1>


        </div>
    </div>
</header>
<div class="container-fluid">
    <article class="col-md-8 maincontent" id="creerExp">

        <h1><a href="CreerExperience.php">Créer EXPERIENCE</a></h1>
        <button data-toggle="modal" href="#i" class="btn btn-primary">Informations</button>
        <div class="modal" id="i">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">x</button>
                        <h4 class="modal-title">Qu'est ce qu'une expérience ?</h4>
                    </div>
                    <div class="modal-body">
                        Une expérience peut regrouper une ou plusieurs campagnes de passation de questionnaires. Vous
                        devez lancer une expérience pour pouvoir lancer une ou plusieurs campagnes de questionnaires.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-info" data-dismiss="modal">Fermer</button>

                    </div>
                </div>
            </div>
        </div>
        <br/>
        <br/>
        <br/>
    </article>
    <aside class="col-md-4 sidebar sidebar-right">
        <h2 id="listexp"> Liste des expériences existantes : </h2>
        <?php foreach ($stmt as $experience) { ?>
            <article>
                <h3><a class="nom_experience"
                       href="PageAcceuilExperience.php?id=<?= $experience['exr_id'] ?>"><?php echo $experience['exr_nom'] ?></a>
                </h3>

            </article>
        <?php } ?>
    </aside>
</div>

<HR width="80%"/>
<?php require_once "footerQuest.php"; ?>

</body>
</html>