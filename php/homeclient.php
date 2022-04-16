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
          <a class="navbar-brand" href="#">ABSHOP</a>
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
      </nav>
     
        <div  class="container" id="container" >
          
         
      
        <div class="row">
        <div class="col">';
           include 'base.php';

             $res=$db->query("SELECT * FROM `produit`" );
             $Res=$res->fetchAll(PDO::FETCH_ASSOC);
               $path="";
	              $test="false";
               $dossier = opendir("IMAGE/"); // Ouvre le dossier courant
               
               while(($f = readdir($dossier))){
                   
                $path="IMAGE/$f";
                for($i=0;$i<count($Res);$i++)
               { echo '<div class="card" >';
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
                        echo '<h3><p  class="badge bg-info text-dark">Marque:'.$v.'</p></h3>';
                        echo "<br>";
                        if($k=='Prix')
                        echo '<h3><p  class="badge bg-info text-dark">Prix:'.$v.'</p></h3>';
                        if($k=='Quantité')
                        echo '<h3><p  class="badge bg-info text-dark">Prix:'.$v.'</p></h3>';
                        if($k=='Désignation')
                        echo '<h3><p  class="badge bg-info text-dark">Prix:'.$v.'</p></h3>';
                           echo "</center>";
                           if($k=='ID_prod')
                           {
                             echo '<form method="post" action="comande.php">';
                             echo '<input type="text" style="display: none;" value="'.$v.'"name="cle" >';
                           echo '<button class="btn btn-primary" >acheter</button>';
                           echo '</form>';
                           }
                      }   
                    
                   echo '<center><div class="col"><img src='.$path.'></div></center>' ;
                   $path="";
                   echo '</div></div>';
                   echo '</div>';
                 
                    }
                   
                          
                   }
                  
                
                  
                  }
                }
                   closedir($dossier);
          
            
              
             echo   "</div></div></body></html> " ;  }
                else
                {
                
                  echo '<script type="text/JavaScript"> 
                  alert("problem de securité") ;
                  window.open("index.php","_self"); 
                  </script>';                  
                }
            ?>
          
          
          
          
            
          </div>
        </div>
       </div>
    </body>
</html>
