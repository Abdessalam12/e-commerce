<?php
include "base.php";
session_start();
$cin=$_SESSION['newsession'];
               echo "$cin";
    $id=$_POST['cle'] ;
    echo "$id";
    $d=date('d/m/Y');
    
    $req="INSERT INTO `commande`(`CIN_user`, `ID_prod`, `Date_commande`) VALUES ('$cin','$id','$d')";
    $req1="SELECT * FROM `produit` WHERE ID_prod='$id'";
   
    $res1=$db->query($req1);
    $Res=$res1->fetchAll(PDO::FETCH_ASSOC);
    foreach($Res[0] as $k=>$v) 
    {
        if($k=="Quantité")
        {
            if ($v !=="0")
            {
                $res = $db->exec($req);
                
            
                echo '<script type="text/JavaScript"> 
                alert("tu as acheté ce produit  ");
                window.open("homeclient.php","_self"); 
                </script>';
            }
            else 
           { echo '<script type="text/JavaScript"> 
                alert("quantité insuffisante ");
                
                </script>' ;}

        }
    }
    
   
   

?>