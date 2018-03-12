<?php
$identifiant= $_GET['id'];
require("connect.php"); 
            
if ($BDD)
             {
                
                $MaRequete="SELECT mov_description_long FROM movie WHERE mov_id=$identifiant ";
                echo $MaRequete;
                $resultat=$BDD->query($MaRequete);
                print ".$resultat";
            }
               
?>