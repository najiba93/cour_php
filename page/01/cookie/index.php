<?php
session_start();
 var_dump($_SESSION);
 var_dump($_COOKIE);
 
if(isset($_POST['login'])){
   $_SESSION["nom"]=$_POST['nom'];
   $_SESSION["prenom"]=$_POST['prenom'];



}
?>
<form method="post">
    <label for="">nom</label>
    <input type="text" value="<?php echo isset($_COOKIE['cookie_name'])? htmlspecialchars($_COOKIE['cookie_name']) ; ?> " name="nom">
 
 
<label for="">prenom</label>
    <input type="text" name="prenom">
 
    <input type="submit" name="login" value="login">
 
 
 
</form>