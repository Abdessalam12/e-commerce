<?php
session_start();
session_destroy();
echo '<script type="text/JavaScript"> 

window.open("index.php","_self"); 
</script>';







?>