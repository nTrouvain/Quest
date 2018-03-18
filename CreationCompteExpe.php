<!doctype html>
<html>
<head>
	<title> Création compte</title>
	<meta charset="utf-8"/>
  <link rel="stylesheet"  href="bootstrap/css/bootstrap-theme.css">
  <link rel="stylesheet"  href="bootstrap/css/bootstrap.css">
 

</head>
<body>
 <h2 class="text-center">Création d'un compte expérimentateur</h2>
  <br/>
  <br/>
  <br/>
  
  <div class="well">
            <form class="form-signin form-horizontal" role="form" action="TraiterCreationCompteEXP.php" method="post">
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <input type="text" name="nom" class="form-control" placeholder="Entrez votre nom" required >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <input type="text" name="prenom" class="form-control" placeholder="Entrez votre prenom" required >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <input type="password" name="mdp" class="form-control" placeholder="Entrez votre mot de passe" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <input type="email" name="mail" class="form-control" placeholder="Entrez votre mail" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <input type="text" name="orga" class="form-control" placeholder="Entrez le nom de votre organisation" required >
                    </div>
                </div>
               
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-plus"></span>Créer un compte 
                        </button>
                    </div>
                </div>
            </form>
        </div>

</body>
</html>