<?php session_start();
require('connect_to_quest.php');
?>

<!doctype html>
<html>
<head>
  <title> Page d'acceuil EXPERIMENTATEUR</title>
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

.row { background:#181015  ; background-size: cover; min-height:300px; text-align: left; padding-top:240px; color:white; font-family:"Open sans", Helvetica, Arial; font-weight:300;opacity:0.7; }
#head .lead { font-family:'caviar'; font-size:44px; margin-bottom:50px; color:white; line-height:1.15em; background:#181015;opacity: 0.8;} 
.col-md-8 {background:white; font-family:'caviar';}
.col-md-4 {background:white; font-family:'caviar';}
#index{ background:#181015 url( "Web-Design.jpg") no-repeat; background-size: cover;}
</style>
 

</head>
  <body id="index">
    <?php require_once "headerQuest.php"; ?>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    

   
    <header >
     <div class="container">
      <div class="row" >

      </div>
        <div class="row">
        </div>
          <div class="row">
          </div>

      
    
        
        
      </div>
  
  </header>
 
      <div class="modal fade" id="infos">
        <div class="modal-dialog">  
          <div class="modal-content"></div>  
        </div> 
      </div>
    </div>
   
    <script>
      $("body").on("hidden.bs.modal", ".modal", function () {
          $(this).removeData("bs.modal");
      });
      $("#page1").click(function() { 
        $("#infos").modal({ remote: "connexionQuest.php" } ,"show");
      });
      
    </script>
  

  </body>
</html>