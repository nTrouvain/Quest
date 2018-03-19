<?php session_start();
require('connect_to_quest.php');
$_SESSION['connecte']=false;
$_SESSION['validationEXP']=false;
$_SESSION['validationUSER']=false;
?>

<!doctype html>
<html>
<head>
  <title> Index</title>
  <meta charset="utf-8"/>
    <link rel="stylesheet"  href="bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet"  href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet"  href="style/style.css">

  <script src="script/jquery-3.3.1.js"></script>
  <script src="bootstrap/js/bootstrap.js "></script>
  <style>
@font-face {
font-family: 'caviar';
src: url('CaviarDreams.ttf');
font-weight: normal;
font-style: normal;
}
#case1 { background:#181015  ; background-size: cover; min-height:300px; text-align: left; padding-top:100px; color:white; font-family:"caviar"; font-weight:300;opacity:0.85; }
#head .lead { font-family:'caviar'; font-size:44px; margin-bottom:50px; color:white; line-height:1.15em; background:#181015;opacity: 0.8;} 

#index{ background:#181015 url( "img/Web-Design.jpg") no-repeat; background-size: cover;}
#btn,#btn1,#btn2{
  padding: 20px 20px;
  background: #F27E0A;
  font-size: 20px;
  margin-left: 40px;
}
#Bienvenue, #lesite{
  margin-left: 40px;
  margin-top: 0px;
}
#casedroite,#casegauche{
 
  background: #EF9943;
  
  font-family:"caviar"; 
  
  color:white;
  opacity:0.95;

 
}
#casemilieu{

}
#expérimentateur{
  text-align: left;
}
#btn1{
  padding: 20px 20px;
  background: #F27E0A;
  font-size: 20px;
  margin-left: 125px;
 
  margin-bottom: 10px;
  color:white;
}
#btn2{
  padding: 20px 20px;
  background: #F27E0A;
  font-size: 20px;
  margin-left: 160px;
  margin-bottom: 10px;
}


</style>
 

</head>
  <body id="index">
    <?php require_once "headerQuest.php"; ?>
    <br/>
    <br/>
    <br/>
    
    

   
    <header >
     <div class="container">
      <div class="row" id="case1" >
        <h1 id="Bienvenue">Bienvenue sur Quest, </h1>
        <h1 id="lesite"> le site de partage et de passation de questionnaires</h1>
        <button id="btn" type="button" class="btn btn-secondary" > Comment ça marche ?
       </button>
     
          </div>
        </div>
          <br/>
          <HR size=5 width="80%"/>
          <br/>
          
          <div class="row" >
            <div class="col-md-5" id="casedroite">
              <h1 id='expérimentateur'>Vous êtes un expérimentateur ?</h1>
              <a  href="CreationCompteExpe.php"><button id="btn1" type="button" class="btn btn-secondary"> Créez un compte
              </button></a>
            </div>
            <div class="col-md-2" id="casemilieu">
            </div>
            <div class="col-md-5" id="casegauche">
              <h1 id='expérimentateur'>Vous souhaitez répondre à un questionnaire ?</h1>
              <button id="btn2" type="button" class="btn btn-secondary" > Cliquez ici
              </button>
            </div>

     
          </div>


      
    
        
        
      </div>
  
  </header>
 
      <div class="modal fade" id="infos">
        <div class="modal-dialog">  
          <div class="modal-content"></div>  
        </div> 
      </div>
    </div>
   
   
  
<HR size=5 width="80%"/>
<?php require_once "footerQuest.php"; ?>
  </body>
</html>