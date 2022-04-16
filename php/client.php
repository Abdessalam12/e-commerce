

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
        <table class="table table-dark table-striped">
<?php
include 'base.php';
$res=$db->query("SELECT * FROM `utilisateur` WHERE role='client'" );
$Res=$res->fetchAll(PDO::FETCH_ASSOC);
for($i=0;$i<count($Res);$i++)
{
    echo "<tr>";
    foreach ($Res[$i] as $k=>$v)
    {
             if($i==0)
             {
               echo "<td>".$k."</td> ";



             }
          
    }
    echo "</tr>";
    echo "<tr>";
    foreach ($Res[$i] as $k=>$v)
    {
             
             
               echo "<td>".$v."</td> ";



             
          
    }

    echo "</tr>";

}


?>
</table>
</body>
</html>