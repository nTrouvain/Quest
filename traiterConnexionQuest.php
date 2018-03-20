<?php session_start();
require("connect_to_quest.php");
$_SESSION['connecte']=false;

$_SESSION['validationEXP']=false;
$_SESSION['validationUSER']=false;
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
                $validation_exp=true;
                $_SESSION['validationEXP']=$validation_exp;
                $_SESSION['idEXP']=$idEXP;
                $_SESSION['nomEXP']=$nomEXP;
                $_SESSION['connecte']=true;
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
                $validation_user=true;
                $_SESSION['validationUSER']=$validation_user;
                $_SESSION['idUSER']=$idUSER;
                $_SESSION['connecte']=true;

        

    }
    
if ($validation_exp)
    {
        header("Location: PageAcceuilEXP.php");
    }
else if ($validation_user)
    {
        header("Location: PageAccueilUSER.php");
    }
else {header("Location: connexionQuest.php");}
    
}
?>