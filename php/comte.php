<?php
            session_start();
             if(!empty($_SESSION["newsession"]))
             {echo'<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body style="background-color:darkgrey;">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="homeclient.php">ABSHOP</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="homeclient.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="comte.php">Compte</a>
              </li>
            
            </ul>
            <form class="d-flex" action="deconexion.php" >
      
      <button class="btn btn-outline-success" type="submit">Déconnexion</button>
       </form>
          </div>
        </div>
      </nav>';
               include 'base.php';
               $id=$_SESSION['newsession'];
               
              
               $req="SELECT * FROM `utilisateur`  WHERE cin  ='$id'";
               
               $res = $db->query($req);
             
               $Res=$res->fetchAll(PDO::FETCH_ASSOC);
               
               if ($Res){
               echo'<form method="post" action="modifiec.php" >
            
               Cin <input type="text" name="cin" pattern="[0-9]{8}" value="'.$Res[0]["cin"].'"  class="form-control" required/></td>
               Login<input type="text" name="login"   value="'.$Res[0]["login"].'"  class="form-control" required/>
               Mot de passe <input type="text"  class="form-control"  value="'.$Res[0]["mdp"].'" name="pss" required/><br>
               nom <input type="text" name="nom"  class="form-control"  value="'.$Res[0]["nom"].'" required/><br>
               prenom <input type="text" name="prenom"  class="form-control"  value="'.$Res[0]["prenom"].'" required/><br>
               Téléphone <input type="tel" name="tel" pattern="[0-9]{8}"  value="'.$Res[0]["tele"].'" class="form-control" required/><br>
              
               Email <input type="email"  class="form-control" name="email"  value="'.$Res[0]["email"].'"><br>
               Adresse <input type="text"  class="form-control" name="adresse"  value="'.$Res[0]["adresse"].'"><br>
               Ville  <input type="text"  class="form-control"name="ville" value="'.$Res[0]["ville"].'"><br>
               Code Postal <input type="text"  class="form-control" pattern="[0-9]*" name="code"  value="'.$Res[0]["codep"].'"><br>
              <center><input type="submit" value="Modifier" class="btn btn-primary"   id="val">
               <input type="reset"  value="Annuler" class="btn btn-danger"  ></center></form>'
  ;
               }
              }
              else{
                
                echo '<script type="text/JavaScript"> 
                alert("problem de securité") ;
                window.open("index.php","_self"); 
                </script>';  
              }
  
 ?>