<?php
include "base.php";
$cin=$_POST['cin'];
$login=$_POST['login'];
$pass=$_POST['pss'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$adresse=$_POST['adresse'];
$ville=$_POST['ville'];
$code=$_POST['code'];
$req="UPDATE `utilisateur` SET `cin`='$cin',`login`='$login',`mdp`='$pass',`nom`='$nom',`prenom`='$prenom',`tele`='$tel',`email`='$email',`adresse`='$adresse',`ville`='$ville',`codep`='$code'  WHERE `cin`='$cin'";
                     $res = $db->exec($req);
                     if($res)
{echo '<script type="text/JavaScript">  
      alert ("modification fait avec succés");
      window.open("comte.php","_self"); 
      </script>';
}
else
{
    echo '<script type="text/JavaScript">  
      alert ("erreur");
      window.open("comte.php","_self"); 
      </script>';
}
?>