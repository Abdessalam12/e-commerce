<?php
include 'base.php';
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
$sexe=$_POST['sexe'];


    $req="INSERT INTO `utilisateur`(`cin`, `login`, `mdp`, `nom`, `prenom`, `tele`, `sexe`, `email`, `adresse`, `ville`, `codep`, `commentaire`, `role`)
    VALUES ($cin,'$login','$pass','$nom','$prenom',$tel,'$sexe','$email','$adresse','$ville',$code,'','client')" ;

$res=$db->exec($req);

if($res)
{
    echo '<script type="text/JavaScript"> 
       alert("felicitation") ;
      window.open("index.php","_self"); 
      </script>';
}
else{
    echo '<script type="text/JavaScript"> 
    alert("Erreur détectée") ;
   window.open("inscription.php","_self"); 
   </script>';
    }
?>