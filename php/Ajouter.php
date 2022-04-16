
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
  <div class="container">
        <div class="row " style="background-color:darkred; " >
          <div class="col" id="r1"  >
              <span id="p1" class="badge bg-success"></span>
              <span id="p2" class="badge bg-danger"></span>
           <form method="post" action="Ajouter1.php" enctype="multipart/form-data" >
            
            Id_prod <input type="text" name="id"   class="form-control" required/>
           Désignation<td><input type="text" name="Des"  class="form-control" required/>
            Prix <input type="text"  class="form-control" pattern="[0-9]*[,][0-9]*" placeholder="0.0"name="prix" required/><br>
             Quantité <input type="text" name="Qu"  class="form-control" required/><br>
             Catégorie<input type="text" name="Cat"  class="form-control" required/><br>
             Marque <input type="text" name="Mar"  class="form-control" required/><br>
            
             Fournisseur<input type="text"  class="form-control" name="Fourn"><br>
             Image <input type="file" class="form-control" name="file">
            <center><input type="submit" value="valider" class="btn btn-danger"   id="val">

             <input type="reset"  value="Annuler" id="Annuler1" class="btn btn-danger"  ></center>

 
           </form>
           
          </div>
        </div>
      </div>
      
      
      
      
     </body>
     </html>