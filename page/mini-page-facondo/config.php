<?php ?>



<?php 
// code pour afficher erreur
ini_set('display_errors', 1);
error_reporting(E_ALL);


// constante base de l'url des pages
define("BASE_URL","/mini_page-facondo");


// data
$user=[
    "id"=> 1233,
    "name_username"=>"Nassaf",
    "email"=>"nassaf@gmail.com",
    "role"=>"admin",
    "image"=>"https://img.lovepik.com/png/20231110/profile-picture-pictures-sticker-cartoon_555764_wh860.png"
];


 
$menu=["home","profil","backoffice"];
 
$produit=[
    [
        "nom"=>"ordinateur",
        "prix"=>1000,
        "category"=>"informatique"
    ],
    [
        "nom"=>"chaise",
        "prix"=>3000,
        "category"=>"meubles"
    ],
    [
        "nom"=>"chaussures",
        "prix"=>20,
        "category"=>"vêtements"
    ]
];

function br(){
    echo "<br>";
}


?>