<?php session_start();
require("connect_to_quest.php");

$validation=false;
if (!empty($_POST['mail']) and !empty($_POST['mdp'])) {
    
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $stmt =$BDD->prepare('select exp_id from experiment where exp_mail=? and exp_mdp=?');
    $stmt->execute(array($mail, $mdp));
    if ($stmt->rowCount() == 1 ) 
    {
        while ($row = $stmt->fetch())
         {
            $idEXP=$row['exp_id'];
         }
       
        // Authentication successful
                $_validation=true;
                $_SESSION['idEXP']=$idEXP;
        

    }
    else {
        $error = "Utilisateur non reconnu";
        print "utilisateur non reconnu";
    }
if ($_validation)
    {
        header("Location: http://localhost/web/Quest/PageAcceuilEXP.php");
    }
else {header("Location: http://localhost/web/Quest/connexionQuest.html");}
    
}
?>