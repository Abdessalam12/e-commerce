<?php

include 'base.php';
$login=$_POST['login'];
$pwd=$_POST['pass'];

$res=$db->query("SELECT * FROM `utilisateur` WHERE login='$login' and mdp='$pwd'" );
$Res=$res->fetchAll(PDO::FETCH_ASSOC);



if ($Res)
{  
   if ($Res[0]['cin']==55555555)
   {session_start();
      global $newsession;
      $_SESSION["newsession"]=$Res[0]['cin'];
       $newsession="ok";
			echo '<script type="text/JavaScript">  
         window.open("home.php","_self"); 
         </script>';}
      else 
      {
         session_start();
         global $newsession;
         $_SESSION["newsession"]=$Res[0]['cin'];
          $newsession="ok";
         
      echo '<script type="text/JavaScript">  
      window.open("homeclient.php","_self"); 
      </script>';
     
     }
}

else
         echo '<script type="text/JavaScript"> 
         alert("il faut créer un compte ");
         window.open("index.php","_self");
         </script>';
         



?>
