<?php
require("connect_to_quest.php");

$validation=false;
if (!empty($_POST['nom']) and !empty($_POST['mdp'])) {
    $nom = $_POST['nom'];
    $mdp = $_POST['mdp'];
    $stmt =$BDD->prepare('select * from experiment where exp_nom=? and exp_mdp=?');
    $stmt->execute(array($nom, $mdp));
    if ($stmt->rowCount() == 1) {
        // Authentication successful
        $_SESSION['nom'] = $nom;
        $_validation=true;
        


    }
    else {
        $error = "Utilisateur non reconnu";
        print "utilisateur non reconnu";
    }
if ($_validation)
    {
        header("Location: http://localhost/web/Quest/Projet%20web.php");
    }
else {header("Location: http://localhost/web/Quest/connexionQuest.html");}
}
?>