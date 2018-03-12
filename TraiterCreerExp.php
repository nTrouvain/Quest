<?php
require("connect_to_quest.php");

if (!empty($_POST['description']) and !empty($_POST['dateDebut'])and !empty($_POST['dateFin']) and !empty($_POST['nom']))
{
	$nom=$_POST['nom'];
	$desc=$_POST['description'];
	$dateDeb=$_POST['dateDebut'];
	$dateFin=$_POST['dateFin'];
	 $stmt =$BDD->prepare('select * from experiment where exp_nom=? ');
    $stmt->execute(array($nom));
	// Création d'un code à 4 charactères pour l'identifiant : 

	
	$characts = '1234567890'; 
	$id = ''; 
	for($i=0;$i < 4;$i++) 
	 { $id .= substr($characts,rand()%(strlen($characts)),1); } 
	echo $id;

	//$requete=$BDD->prepare('INSERT INTO experience(exr_id,exr_nom,exr_desc,dateDeb,dateFin) VALUES(:id,:nom,:description,:dateDebut,:datefin)');
	$requete=$BDD->prepare('INSERT INTO experience(exr_id,exr_nom,exr_desc) VALUES(:id,:nom,:description');
	

	//INSERT INTO `experience` (`exr_id`, `exr_nom`, `exr_desc`, `dateDeb`, `dateFin`) VALUES ('1', 'test', 'test', '2018-03-13', '2018-03-21');
	$requete->bindValue(':id', $id, PDO::PARAM_INT); 
	$requete->bindValue(':nom', $nom, PDO::PARAM_STR);  
	$requete->bindValue(':description', $desc, PDO::PARAM_STR);
	//$requete->bindValue(':dateDebut', $dateDeb, PDO::PARAM_STR);
	//$requete->bindValue(':dateFin', $dateFin, PDO::PARAM_STR);
	
//On exécute la requête
	$requete->execute();
}
?>