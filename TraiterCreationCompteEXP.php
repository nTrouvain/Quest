<?php
session_start();

require("connect_to_quest.php");

if (!empty($_POST['prenom']) and !empty($_POST['mdp'])and !empty($_POST['mail']) and !empty($_POST['nom'])and !empty($_POST['orga']))
{
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$mdp=$_POST['mdp'];
	$mail=$_POST['mail'];
	$orga=$_POST['orga'];
	
    $characts = '1234567890';
	
	$idEXP = ''; 
	for($i=0;$i < 5;$i++) 
	 { $idEXP .= substr($characts,rand()%(strlen($characts)),1); } 
	

	

	$requete=$BDD->prepare('INSERT INTO experiment(exp_id,exp_mdp,exp_nom,exp_prenom,exp_org,exp_mail) VALUES(:id,:mdp,:nom,:prenom,:orga,:mail)');
	
	$requete->bindValue(':id', $idEXP, PDO::PARAM_STR); 
	$requete->bindValue(':mdp', $mdp, PDO::PARAM_STR);  
	$requete->bindValue(':nom', $nom, PDO::PARAM_STR);
	$requete->bindValue(':prenom', $prenom, PDO::PARAM_STR);
	$requete->bindValue(':orga', $orga, PDO::PARAM_STR);
	$requete->bindValue(':mail', $mail, PDO::PARAM_STR);
	
	
//On exécute la requête
	$requete->execute();
}
?>