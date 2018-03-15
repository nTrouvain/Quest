<?php session_start();

require('connect_to_quest.php');

$idUSER=$_SESSION['idUSER'];
$validation=false;

if (!empty($_POST['code_qutaire']) )
{
  // On verifie si le code questionnaire est correct

  $code=$_POST['code_qutaire'];
  $stmt = $BDD->prepare('select * from questaire where qutaire_id=?');
  $stmt->execute(array($code));
  if ($stmt->rowCount() == 1 ) 
    {
      
        $validation=true
    }
   if ($validation) // Si ce questionnaire existe
   {
    //On selectionne les questions correspondantes dans la TABLE contient
    $requete = $BDD->prepare('select * from contient where qutaire=?');
    $requete->execute(array($code));
    $resultat=$requete->fetch();
    if ($resultat['qutaire_type']='TLX')
    {
      
    }

   } 
   

  
  

}

?>
