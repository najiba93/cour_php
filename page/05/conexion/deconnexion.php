

<?php 
session_start(); // necessaire pour acceder a la session

var_dump($_POST); 
var_dump($_SESSION);


if(isset($_POST['logout'])){
session_unset(); // suprimme toutes les variables de session

session_destroy(); // detruit la session 
header("Location: conexion.php");
};







?>

