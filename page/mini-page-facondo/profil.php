
<?php 



include __DIR__ . '../../component/header.php'; 

var_dump($user);


?>

<h1>profil</h1>

<?php 

if($user){

if(strpos($user["email"],"@")){// fonction pour verifier @ dans la chaine de caractère
    
    echo " votre mail : ".$user["email"];

}else{
    echo "mail erroné";
}
}



include __DIR__ . '../../component/footer.php'; 

?>