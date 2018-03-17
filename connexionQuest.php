<!doctype html>
<html>
<head>
	<title> Connexion </title>
	<meta charset="utf-8"/>
  <link rel="stylesheet"  href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap-themes.css">
  <link rel="stylesheet"  href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css">

  <script src="jquery-3.3.1.js"></script> 
  <script src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/bootstrap.js "></script>
  <style>
 .form-control {background-color: black ; background-size: cover;} 
 #mail{background-color: #f5f5f5 ; background-size: cover;}
 #mdp{background-color: #f5f5f5 ; background-size: cover;}
 #bouton{background-color: #f5f5f5 ; background-size: cover;}
 #connexion{background-color: #f5f5f5 ; background-size: cover;}
</style>


</head>

<body id="connexion">
 
  <br/>
  <br/>
 <h2 class="text-center">Connexion</h2>
    <div class="well" id="connexion">
            <form class="form-signin form-horizontal" role="form" action="traiterConnexionQuest.php" method="post" >
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4" id="mail">
                      
                        <input type="email" name="mail"  class="form-control" placeholder="Entrez votre mail" required>
                    </div>
                </div>
                <div class="form-group">
                
                  
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4" id="mdp">
                        <input type="password" name="mdp" class="form-control" placeholder="Entrez MDP" required>
                    </div>
                  </div>
              
                  <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-4" id="bouton">
                        <button type="submit" class="btn btn-default btn-success"><span class="glyphicon glyphicon-log-in"></span> Se connecter</button>
                    </div>
                  </div>
                </div>
            </form>
        </div>

</body>
</html>