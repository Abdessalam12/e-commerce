<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body style="background-color:darkgrey;">
      <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><h1>ABSHOP</h1></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
         
            <form class="d-flex">
             
             
            </form>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row " style="background-color:$blue-800; " >
          <div class="col" id="r1"  >
           <form method="post" action="insc.php" >
            
             Cin <input type="text" name="cin" pattern="[0-9]{8}"  class="form-control" required/></td>
             <td>Login</td> <td><input type="text" name="login"  class="form-control" required/>
             Mot de passe <input type="password"  class="form-control" name="pss" required/><br>
             nom <input type="text" name="nom"  class="form-control" required/><br>
             prenom <input type="text" name="prenom"  class="form-control" required/><br>
             Téléphone <input type="tel" name="tel" pattern="[0-9]{8}"  class="form-control" required/><br>
            
             Email <input type="email"  class="form-control" name="email"><br>
             Adresse <input type="text"  class="form-control" name="adresse"><br>
             Ville  <input type="text"  class="form-control"name="ville"><br>
             Code Postal <input type="text"  class="form-control" pattern="[0-9]*" name="code"><br>
             <center>sexe: <br> M <input type="radio" class="form-check-input"   name="sexe" value="m"> F <input type="radio"    class="form-check-input" name="sexe" value="f"></center><br>
            
             
           




             <center><input type="submit" value="valider" class="btn btn-danger"   id="val">

             <input type="reset"  value="Annuler" id="Annuler1" class="btn btn-danger"  ></center>

 
           </form>
           
          </div>
        </div>
      </div>
     
      </body>
      </html>