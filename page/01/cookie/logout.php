

<?php 

session_start();


if(isset($_POST['login'])){
    if(isset($_POST['prenom'])){
$_SESSION["prenom"]=$_POST['prenom'];
}
$_SESSION["nom"]=$_POST['nom'];


$session_name=$_SESSION["nom"];
$session_prenom=$_SESSION["prenom"];

setcookie('cookie_name',$session_name,time()+(86400 * 30),"/cour_php/page/cookie/");
setcookie('cookie_prenom',$session_name,time()+(86400 * 30),"/cour_php/page/cookie/");

    
}
header('Location:welcom.php');
exit();

?>