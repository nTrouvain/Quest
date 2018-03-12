<!doctype html>
<html>
<head>
	<title> MyMovies</title>
	<meta charset="utf-8"/>
  <link rel="stylesheet"  href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap-themes.css">
  <link rel="stylesheet"  href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css">
 

</head>

<body>
	<div class="container">
        
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-target">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-film"></span> MyMovies</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-target">
                        <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user"></span> Non connecté <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="connexion.html">Se connecter</a></li>
                        </ul>
                    </li>
                            </ul>
        </div>
    </div>
</nav>

 <h2>LISTE des FILMS </h2>
        	<?php 
            require("connect.php"); 
            
            if ($BDD)
             {
                
                $MaRequete="SELECT * FROM movie Order By mov_title";
                
                $CurseurTitre =$BDD->query($MaRequete);
        	?>
                 <table>
                <?php
                 
                	while ($tuple=$CurseurTitre->fetch() )
                	 {
                	 	?>
                     <tr><td>
                     
                     <article>
                		<h3> <?php echo $tuple['mov_id']; ?> <a class="movieTitle" href="lefilm.php?id= <?php echo $tuple['mov_id']; ?> ">
                															 <?php echo $tuple["mov_title"];       ?>


                			 </a></h3>
                		</article>  
                     <?php $tuple["mov_title"];?>
                     
                      </td></tr> 
                     <?php   
                 	 }
             }
              ?>  
				</table>
</body>
</html>
