<?php session_start();
require('connect_to_quest.php');
$nomEXP=$_SESSION['nomEXP'];
$idEXP=$_SESSION['idEXP'];
$stmt = $BDD->prepare('select * from experience,lancer where lancer.exp=? and lancer.exr=experience.exr_id');
$stmt->execute(array($idEXP));



?>


<!doctype html>
<html>
<head>
	<title> Page d'acceuil EXPERIMENTATEUR</title>
	<meta charset="utf-8"/>
  <link rel="stylesheet"  href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap-themes.css">
  <link rel="stylesheet"  href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css">
  <link rel="stylesheet"  href="style.css">

  <script src="jquery-3.3.1.js"></script> 
  <script src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/bootstrap.js "></script>
  <style>

@font-face {
font-family: 'caviar';
src: url('CaviarDreams.ttf');

font-weight: normal;
font-style: normal;
}
@font-face {
font-family: 'noodle';
src: url('Moon Flower.ttf');

font-weight: normal;
font-style: normal;
}

#head { background:#181015 url( "Web-Design.jpg") no-repeat; background-size: cover; min-height:300px; text-align: left; padding-top:240px; color:white; font-family:"Open sans", Helvetica, Arial; font-weight:300; }
#head .lead { font-family:'caviar'; font-size:44px; margin-bottom:50px; color:white; line-height:1.15em; background:#181015;opacity: 0.7;} 
.col-md-8 {background:white; font-family:'caviar';border-right: : 2px black solid;
  }

.container-fluid {background:white;font-family:'caviar';min-height:100px;border: 2px #181015;
  }
#pied {background:black;}
#listexp{color: black;}
#piedpage{background:#181015; background-size : cover ;font-family:'caviar';min-height:100px;}
</style>

 

</head>
<body>
  <?php require_once "headerQuest.php"; ?>
	

   <header id="head">
    <div class="container">
      <div class="row">
        <h1 class="lead">Bienvenue <?php echo $nomEXP ?> !</h1>
    
        
        
      </div>
    </div>
  </header>
  <div class="container-fluid" >
 <article class="col-md-8 maincontent">

 <h1><a href="CréerExperience.html">Créer EXPERIENCE</a></h1>
 <button data-toggle="modal" href="#infos" class="btn btn-primary">Informations</button>
<div class="modal" id="infos">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h4 class="modal-title">Qu'est ce qu'une expérience ?</h4>
      </div>
      <div class="modal-body">
      Une expérience peut regrouper une ou plusieurs campagnes de passation de questionnaires. Vous devez lancer une expérience pour pouvoir lancer une ou plusieurs campagnes de questionnaires.
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
<aside class="col-md-4 sidebar sidebar-right" >
 <h2 id="listexp"> Liste des expériences existantes : </h2>
  <?php foreach ($stmt as $experience) { ?>
            <article>
                <h3><a class="nom_experience" href="PageAcceuilExperience.php?id=<?= $experience['exr_id'] ?>"><?php echo $experience['exr_nom'] ?></a></h3>
                
            </article>
        <?php } ?>
  </aside>
</div>

  
 
  <?php require_once "footerQuest.php"; ?>

</body>
</html>