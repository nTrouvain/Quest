<?php
require("connect_to_quest.php");

if (!empty($_POST['prenom']) and !empty($_POST['mdp'])and !empty($_POST['mail']) and !empty($_POST['nom'])and !empty($_POST['orga']))
{
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$mdp=$_POST['mdp'];
	$mail=$_POST['mail'];
	$orga=$_POST['orga'];
	


	

	$requete=$BDD->prepare('INSERT INTO experiment(exp_mdp,exp_nom,exp_prenom,exp_org,exp_mail,exp_img) VALUES(:mdp,:nom,:prenom,:orga,:mail,:img)');
	
	
	$requete->bindValue(':mdp', $mdp, PDO::PARAM_STR);  
	$requete->bindValue(':nom', $nom, PDO::PARAM_STR);
	$requete->bindValue(':prenom', $prenom, PDO::PARAM_STR);
	$requete->bindValue(':orga', $orga, PDO::PARAM_STR);
	$requete->bindValue(':mail', $mail, PDO::PARAM_STR);
	
	
//On exécute la requête
	$requete->execute();
}
?>