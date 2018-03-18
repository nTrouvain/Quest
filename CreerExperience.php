<?php session_start();
require('connect_to_quest.php');
$nomEXP = $_SESSION['nomEXP'];
$idEXP = $_SESSION['idEXP'];
$stmt = $BDD->prepare('SELECT * FROM experience,lancer WHERE lancer.exp=? AND lancer.exr=experience.exr_id');
$stmt->execute(array($idEXP));


?>
