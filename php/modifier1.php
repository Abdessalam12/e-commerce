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
              
               $req="SELECT * FROM `produit`  WHERE ID_prod ='$id'";
               $res = $db->query($req);
               $Res=$res->fetchAll(PDO::FETCH_ASSOC);

if ($Res)
{
 	

     
  $dossier = opendir("image/"); 
	$trouve=false;
	while(($f = readdir($dossier))&&!$trouve){
		
		if (strpos($f, $id) !== false){
			$path="image/$f";
			$trouve=true;	
		}
				
		}
  closedir($dossier); 

                 
                 
                   echo '  <div class="container">
                   <div class="row " style="background-color:darkred; " >
                     <div class="col" id="r1"  >  <form method="post" action="modifier2.php"  enctype="multipart/form-data" >
                     Id_prod <input type="text" value="'.$Res[0]["ID_prod"].' "  class="form-control" name="id" required/>
       
        Désignation<input type="text" name="Des"  class="form-control" value="'.$Res[0]['Désignation'].' "  required/>
        Prix <input type="text"  class="form-control" pattern="[0-9]*[,][0-9]*" placeholder="0,0" name="prix" value="'.$Res[0]["Prix"].' "  required/><br>
         Quantité <input type="text" name="Qu"  class="form-control" value="'.$Res[0]['Quantité'].' "  required/><br>
         Catégorie<input type="text" name="Cat"  class="form-control" value="'.$Res[0]['Catégorie'].' "  required/><br>
         Marque <input type="text" name="Mar"  class="form-control" value="'.$Res[0]['Marque'].' "  required/><br>
        
         Fournisseur<input type="text"  class="form-control" name="Fourn" value="'.$Res[0]['Fournisseur'].' " ><br>

         Image <input type="file" class="form-control" name="file">
        <center><input type="submit" value="valider" class="btn btn-danger"   id="val">

             <input type="reset"  value="Annuler" id="Annuler1" class="btn btn-danger"  ></center>';
             if(!empty($path))
             
        echo '</form></div> <div class="col" id="r1"  > <img src="'.$path.'"></div></div></div>';
   
}
       
        else
        echo '<html><body><span class="badge bg-danger"><h1>erreur: il n y a pas un produit ID='. $id.' </h1></span></body></html>';

     ?>
   
         
            
            
            

 
          
           
     