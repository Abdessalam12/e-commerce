
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body style="background-color:darkgrey;">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><h1>ABSHOP</h1></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
             
            </ul>
            <span class="navbar-text">
        rejoignez nous!
      </span>
            <nav class="navbar navbar-light bg-light">
              <form class="container-fluid justify-content-start">
                <button class="btn btn-outline-success me-2" type="button" id="ins">inscription</button>
                <button class="btn btn-sm btn-outline-secondary" type="button" id="con">connecter</button>
              </form>
            </nav>
          </div>
        </div>
     
      </nav>
     
        <div  class="container" id="container" >
          
          <div class="row "  style="background-color :aqua;display: none" id="r"  >
             <div class="col" >
            <form method="POST"  action="connecter.php">
            
                login<input type="text" name="login"  class="form-control" required ><br>

                Mot de passe <input type="password"  class="form-control" name="pass" required><br>
               <p id="p"></p>
                <input type="submit"  class="btn btn-danger" id="valider"  >  
              <button class="btn btn-primary" id="Annuler" > Annuler</button> 
            </form>
              
          </div>
          </div>
        
          
          <div class="row">
         
            
          <?php
             include 'base.php';

             $res=$db->query("SELECT * FROM `produit`" );
             $Res=$res->fetchAll(PDO::FETCH_ASSOC);
               $path="";
	              $test="false";
               $dossier = opendir("IMAGE/"); // Ouvre le dossier courant
               
               while(($f = readdir($dossier))){
                   
                $path="IMAGE/$f";
                for($i=0;$i<count($Res);$i++)
                {echo '<div class="col"><div class="card" >';
                foreach($Res[$i] as $k=>$v)
                 {    if($k=='ID_prod')
                  if (strpos($f,$v ) !== false)
                    {
                      echo '<div class="card-body">';
                      $test="true";
                      foreach($Res[$i] as $k=>$v)
                      {
                        echo "<center>";
                        if($k=='Marque')
                        echo '<h3><p  >Marque:'.$v.'</p></h3>';
                        echo "<br>";
                        if($k=='Prix')
                        echo '<h3><p  >Prix:'.$v.'</p></h3>';
                        if($k=='Quantité')
                        echo '<h3><p >Quantité:'.$v.'</p></h3>';
                        if($k=='Désignation')
                        echo '<h3>Désignation:'.$v.'</p></h3>';
                           
                           echo "</center>";
                         
                      }   
                     
                     
                      echo '<center><div class="col"><img src='.$path.'></center>' ;
                   $path="";
                   echo '</div></div>';
                   echo '</div></div>';
                 
                    }
                   
                          
                   }
                  }
                  
                
                  
                  }
               
                   closedir($dossier);
           ?>



          
          </div>
          
            
          
        </div>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/index.js"></script>
    </body>
</html>
