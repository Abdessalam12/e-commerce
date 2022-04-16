<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">ABSHOP</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="client.php">client</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="produit.php">produit</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="commande.php">commande</a>
              </li>
            </ul>
           
            </div>
        </div>
      </nav> 
      <nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="produit.php">consulter</a>
    
    <a class="navbar-brand" href="Ajouter.php">Ajouter</a>
    <a class="navbar-brand" href="supprimer.php">Supprimer</a>
    <a class="navbar-brand" href="modifier.php">Modifier</a>
    <form class="d-flex" method="post" action="chercher.php">
        <input class="form-control me-2" type="text" placeholder="chercher avec id " name="id" aria-label="Search">
        <button class="btn btn-success" type="submit">chercher</button>
      </form>
  </div>
  </nav>
  
<?php
    
     
    include 'base.php';
               $id=$_POST['id'];
               $des=$_POST['Des'];
               $prix=$_POST['prix'];
               $Qu=$_POST['Qu'];
               $Cat=$_POST['Cat'];
               $Mar=$_POST['Mar'];
               $Four=$_POST['Fourn'];
               if ( !empty($_FILES["file"]["tmp_name"]))
           {
                 $check = getimagesize($_FILES["file"]["tmp_name"]);
                 if($check !== false) {
                  $ex= $_FILES["file"]['type'] ;
                 $exten=str_replace("image/", ".",$ex);
                   $con= $id.$exten;
                  
                    $path="IMAGE/".$con;
                     move_uploaded_file($_FILES["file"]["tmp_name"],$path);
                
                     $req=" UPDATE `produit` SET 
                     `ID_prod`='$id',`Désignation`='$des',`Prix`='$prix',`Quantité`='$Qu',`Catégorie`='$Cat',`Marque`='$Mar',`Fournisseur`='$Four' WHERE ID_prod ='$id' ";
                    
                     $res = $db->exec($req);
      
      if ($res)
      echo '<html><body><span class="badge bg-success"><h1>produit a été modifié</h1></span></body></html>';
          
     
                   
                   }
                   else {
                    echo" <div class='alert alert-warning' role='alert'>
                    Le photo n'est pas une image.</div>";
                   
                    }
                  }

                  else {
                    echo" <div class='alert alert-warning' role='alert'>
                   entrer une photo.</div>";
                   
                    }
                     
              
 	
