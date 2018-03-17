<?php session_start();
require("connect_to_quest.php");

$validation_exp=false;
$validation_user=false;
if (!empty($_POST['mail']) and !empty($_POST['mdp'])) {
    
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $stmt =$BDD->prepare('select exp_id,exp_prenom from experiment where exp_mail=? and exp_mdp=?');
    $stmt->execute(array($mail, $mdp));
    if ($stmt->rowCount() == 1 ) 
    {
        while ($row = $stmt->fetch())
         {
            $idEXP=$row['exp_id'];
            $nomEXP=$row['exp_prenom'];
         }
       
        // Authentication successful
                $_validation_exp=true;
                $_SESSION['idEXP']=$idEXP;
                $_SESSION['nomEXP']=$nomEXP;
        

    }
    
       
    $requete =$BDD->prepare('select usr_id from user where usr_mail=? and usr_mdp=?');
    $requete->execute(array($mail, $mdp));
     if ($requete->rowCount() == 1 ) 
    {
        while ($row = $requete->fetch())
         {
            $idUSER=$row['usr_id'];
         }
       
        // Authentication successful
                $_validation_user=true;
                $_SESSION['idUSER']=$idUSER;
        

    }
    
if ($_validation_exp)
    {
        header("Location: PageAcceuilEXP.php");
    }
else if ($_validation_user)
    {
        header("Location: PageAccueilUSER.php");
    }
else {header("Location: connexionQuest.php");}
    
}
?>