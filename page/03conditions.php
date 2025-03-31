<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cours PHP</title>
<style>
        .section {
            margin: 20px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        h2 {
            color: #333;
            border-bottom: 1px solid #eee;
            padding-bottom: 5px;
        }
</style>
</head>
<body>
<h1>Premiers pas en PHP</h1>
 
    <div class="section">
<h2>1. Affichage basique et variables</h2>
<?php
        // Je suis un commentaire sur une ligne
        /*
        * Je
        * suis
        * un
        * commentaire
        * sur plusieurs lignes
        */
 
        echo "<h3>Cours 1</h3>";
        echo "<p>Je suis un paragraphe</p>";
        $ma_premiere324Variable = "moussa";
        echo $ma_premiere324Variable;
        echo "<p>Ma variable est : $ma_premiere324Variable</p>";
        ?>
</div>
 
    <div class="section">
<h2>2. Types de variables</h2>
<?php
        $a = 123;
        $b = "je suis une phrase";
        $c = true;
        $d = 123.5;
        echo "Type de \$a : " . gettype($a) . "<br>";
        echo "Type de \$b : " . gettype($b) . "<br>";
        echo "Type de \$c : " . gettype($c) . "<br>";
        echo "Type de \$d : " . gettype($d) . "<br>";
        $content = "<div>";
        $content .= "Valeur de \$a est : $a";
        $content .= "</div>";
        echo $content;
        ?>
</div>
 
    <div class="section">
<h2>3. Les constantes et constantes magiques</h2>
<?php
        function br() {
            echo "<br>";
        }
        // Affiche le numéro de ligne
        echo "Ligne : " . __LINE__;
        br();
        // Affiche le chemin complet vers le fichier
        echo "Fichier : " . __FILE__;
        br();
        // Affiche le chemin complet vers le dossier
        echo "Dossier : " . __DIR__;
        br();
        ?>
<p>Une constante se déclare toujours en MAJUSCULE</p>
<?php
        define("ROOT", "http://localhost/cour_exo/");
        define("ORDI", "Je suis une constante"); // Peut être utilisée n'importe où dans le script ce qui la rend plus flexible
        echo ROOT . "<br>";
        echo ORDI . "<br>";
        ?>
</div>
 
    <div class="section">
<h2>4. Configuration des erreurs PHP</h2>
<?php
        // Debug des erreurs PHP
        ini_set('display_errors', 1); // display_error est activé en mettant valeur 1
        ini_set('display_startup_errors', 1); // Doit être activé pour afficher les erreurs
        error_reporting(E_ALL); // Configure PHP pour signaler tous les types d'erreurs
        ?>
</div>
 
    <div class="section">
<h2>5. Concaténation de chaînes</h2>
<?php
        $nom = "Carter";
        $prenom = "Samantha";
        echo $prenom . " " . $nom;
        br();
        $phrase1 = "Le ciel est";
        $phrase2 = "bleu aujourd'hui";
        echo $phrase1 . " " . $phrase2;
        br();
        $texte = "Je vais";
        $texte .= " à la plage";
        echo $texte;
        br();
        $mot = "PHP";
        br();
        echo "Le mot est : $mot";
        br();
        echo 'Le mot est : $mot'; // Les apostrophes n'interprètent pas les variables
        ?>
</div>
 
    <div class="section">
<h2>6. Opérateurs arithmétiques</h2>
<?php
        $a = 12;
        $b = 13;
        echo "Addition : " . ($a + $b);
        br();
        echo "Soustraction : " . ($a - $b);
        br();
        echo "Multiplication : " . ($a * $b);
        br();
        echo "Division : " . ($a / $b);
        br();
        echo "Modulo : " . ($a % $b);
        br();
        ?>
</div>
 
    <div class="section">
<h2>7. Opérations et affectations combinées</h2>
<?php
        // C'est une façon d'écrire les calculs avec abréviations, pour simplifier l'écriture
        $j = 10;
        $g = 2;
        echo "Valeur initiale de j : $j, g : $g";
        br();
        $j += $g; // Équivaut à $j = $j + $g
        echo "Après j += g : $j";
        br();
        $a = 10;
        $b = 2;
        echo "Valeur initiale de a : $a, b : $b";
        br();
        $a += $b; // Équivaut à $a = $a + $b, $a vaut donc au final 12
        echo "Après a += b : $a";
        br();
        $a -= $b; // Équivaut à $a = $a - $b, $a vaut donc au final 10
        echo "Après a -= b : $a";
        br();
        $a *= $b; // Équivaut à $a = $a * $b, $a vaut donc au final 20
        echo "Après a *= b : $a";
        br();
        $a /= $b; // Équivaut à $a = $a / $b, $a vaut donc au final 10
        echo "Après a /= b : $a";
        br();
        $a %= $b; // Équivaut à $a = $a % $b, $a vaut donc au final 0
        echo "Après a %= b : $a";
        br();
        ?>
</div>
 
    <div class="section">
<h2>8. Incrémentation et décrémentation</h2>
<h3>Incrémentation</h3>
<?php
        $i = 0;
        echo "Valeur initiale de i : $i";
        br();
        echo "i++ : " . $i++; // La variable $i est d'abord retournée puis elle est incrémentée de 1, affiche 0
        br();
        echo "Nouvelle valeur de i : $i"; // Affiche 1
        br();
        $s = 0;
        echo "Valeur initiale de s : $s";
        br();
        echo "++s : " . ++$s; // La variable $s est d'abord incrémentée puis retournée, affiche 1
        br();
        ?>
<h3>Décrémentation</h3>
<?php
        $six = 6;
        echo "Valeur initiale de six : $six";
        br();
        echo "six-- : " . $six--;
        br();
        echo "Nouvelle valeur de six : $six";
        br();
        $sept = 7;
        echo "Valeur initiale de sept : $sept";
        br();
        echo "--sept : " . --$sept;
        ?>
</div>
 
    <div class="section">
<h2>9. Structures conditionnelles (if-else)</h2>
<?php
        $a = 10;
        $b = 20;
        $c = 5; // Il faut définir $c avant de l'utiliser
        if ($a > $b) {
            echo "<p>a est plus grand que b</p>";
        } else {
            echo "<p>b est plus grand que a</p>";
        }
 
        if ($a > $c && $b > $c) {
            echo "<p>\$c est plus petit que a et b</p>";
        } else {
            echo "<p>\$c est plus grand que a et b</p>";
        }

        if($a===8){
            echo "<p>a est égale à 8</p>";
        }elseif($a !=10){

            echo "<p>a est different de 10 à 8</p>";

        }else{

            echo "<p>les deux encdition sont fausses </p>";

        }

        // l'operateur XOR

        /*
        Voici un exemple d'utilisation réelle de l'opérateur XOR dans un contexte de formulaire de connexion. Supposons que vous ayez un formulaire où l'utilisateur peut se connecter soit avec un nom d'utilisateur et un mot de passe, soit avec une adresse e-mail et un mot de passe, mais pas les deux en même temps.
Explication de l'utilité
Dans cet exemple :
Si l'utilisateur fournit un nom d'utilisateur et un mot de passe, mais pas d'adresse e-mail, la connexion est réussie.
Si l'utilisateur fournit une adresse e-mail et un mot de passe, mais pas de nom d'utilisateur, la connexion est réussie.
Si l'utilisateur fournit à la fois un nom d'utilisateur et une adresse e-mail, ou s'il ne fournit ni l'un ni l'autre, un message d'erreur est affiché.
L'opérateur XOR est utile ici pour s'assurer que l'utilisateur ne peut se connecter qu'avec une seule méthode d'authentification à la fois, garantissant ainsi une logique de validation correcte pour le formulaire de connexion.
*/


$username = "user123";
$email = "";
$password = "password123";

if (($username && $password) XOR ($email && $password)) {
    echo "<p>Connexion réussie</p>";
} else {
    echo "<p>Veuillez fournir soit un nom d'utilisateur et un mot de passe, soit une adresse e-mail et un mot de passe, mais pas les deux.</p>";
}

        $question1="mineur";
        $question2="je vote";


        if($question1 === "mineur" XOR $question2 ==="je vote"){
            
            echo "<p> vos reponses sont coherentes</p>";

        }else{

            echo "<p> vos reponses ne sont pas cherentes</p>";
        }
        

        // l'operateur ||

        if ($a===9 || $b>$c){ // si $a est sreictement egale a 9 ou si $b est plus grand que $c

            echo "<p> ok pour au moins des deux conditions</p>";

        }else{
            echo "<p> les deux enditions sont fausses</p>";
        }

        // comparisons en == et ===

        $varA=1;
        $varB="1";

        echo gettype($varA);
        br();
        echo gettype($varB);

        if($varA == $varB) echo '<p>$varA est egale a $varB en valeur</p>';

br();

if ($varA === $varB){

    echo '<p> $varA est agale a $varB en valeur et en type</p>';
}else{

    echo '<p> $vara n\'est pas egale a $varB en valeur et en type</p>';
}


// dans cette deuxiemme condition $varA n'est pas strictement egale a $varB en valeur et en type

$varC; // declaration de variable
$varC = 1; // initialisation / affectation 

/*
= signe d'affectation
== signe de comparaison en valeur
=== signe de comparaison  en valeur et en type

*/



// isset et empty()

echo "<h2>isset() et empty()</h2>";

// definition


// isset() verifi  si une variable est definie ( si la variable existe) et a une valeur non nulle

// emply() veridie si une variable est vide ( si la variable n'existe pa ou si elle a une valeur vide)


// est considere comme vide 

/*
$varC =""; 
$varC = 0; 
$varC = null ; // null
$varC = false; // boolean false
$varC = 0.0 ; // float 0.0
$varC = [] // arry vide
et aussi variable non defini
*/


$varD = 1;
$varF = null;
$varG = false;


if(empty($vartt)){
    echo "<p> la variable n' est pas defini</p>";

}else{
    echo "<p> la variable n' est pas defini</p>";
}


/*
Écris un script qui :
Vérifie si la variable $email est définie (isset()).
Vérifie si $email est non vide (!empty()).
Affiche :
✅ "Email valide" si la variable est définie et non vide.
⚠️ "Email vide" si elle est définie mais vide.
❌ "Email non défini" si elle n’existe pas.
*/

/** Exercice 1 : Vérifier la validité d'un âge
* 
*  Objectif : Ecrire une condition qui vérifie si une variable age est valide (entre 0 et 120)
*  
*  Afficher un message indiquant si l'âge est valide ou non 
*/

// Vérifie si la variable $mail est définie (isset()).
// Vérifie si $mail est non vide (!empty()).
// Affiche :
// ✅ "Mail valide" si la variable est définie et non vide.
// ⚠️ "Mail vide" si elle est définie mais vide.
// ❌ "Mail non défini" si elle n’existe pas.
 
// $mail n'existe pas --> est non definie et null car n'existe pas
if (isset($mail)) {
    echo "✅ Mail valide";
} else {
    echo "❌ Mail non défini";
}
br();
if (!empty($mail)) {
    echo "✅ Mail PAS VIDE /PAS NULL";
} else {
    echo "⚠️ Mail vide NULL";
}
br();
 
// $mail existe  --> est defini et PAS NULL
$mail="mmmu@gmail.com";
echo "$mail";
br();
if (isset($mail)) {
    echo "✅ Mail valide";
} else {
    echo "❌ Mail non défini";
}
br();
if (!empty($mail)) {
    echo "✅ Mail PAS VIDE /PAS NULL";
} else {
    echo "⚠️ Mail vide NULL";
}
br();
if (isset($mail)) {
    if (!empty($mail)) {
        echo "✅✅✅ Mail non vide";
} else {
    echo "❌❌❌ Mail est vide";
    }
   
}
else{
    echo "*-* n'est pas défini";
}
br();
$age=60;

if(!empty($age) && $age > 0 && $age < 120){


    echo "<p>l'âge est  valide</p>";
}else{
    echo "<p>l'âge est non valide</p>";

}
?>
<h2> Stuctures conditionnelles</h2>
 
 
<?php
 
ini_set('display_errors', 1);
//display error est activé en mettant valeur 1
ini_set('display_startup_errors', 1);
// doit être activé pour afficher les erreur
error_reporting(E_ALL);
// configure PHP pour signaler tous les types d'erreurs
 
 
 
// if else
 
$a=8;
$b=20;
$c=2;
 
if ($a>$b){
    echo " <p> a est plus grand que b</p>";
}else{
    echo " <p> b est plus grand que a</p>";
}
 
if ($a>$c && $b>$c){
    echo  '<p> $c est plus petit que a et b</p>';
}else{
    echo " <p> \$c est plus grand que a et b</p>";
}
 
 
// if elseif else
// ici $a vaut 8
if($a===8){
    echo "<p> a est egale a 8</p>";
}elseif($a !=10){
    echo "<p> \$a est different de 10</p>";
}else{
    echo "<p> les deux conditions sont fausses</p>";
}
 
// l'operateur XOR
 
$username = "user123";
$email = "";
$password = "password123";
 
if (($username && $password) XOR ($email && $password)) {
    echo "<p>Connexion réussie</p>";
} else {
    echo "<p>Veuillez fournir soit un nom d'utilisateur et un mot de passe, soit une adresse e-mail et un mot de passe, mais pas les deux.</p>";
}
 
// Voici un exemple d'utilisation réelle de l'opérateur XOR dans un contexte de formulaire de connexion. Supposons que vous ayez un formulaire où l'utilisateur peut se connecter soit avec un nom d'utilisateur et un mot de passe, soit avec une adresse e-mail et un mot de passe, mais pas les deux en même temps.
 
 
// l'operateur ||
 
if ($a===9 || $b> $c){ // si $a est strictement egale a 9 ou si $b est plus grand que $c
echo "<p> Ok pour au moins une des deux conditions </p>";
}else{
    echo "<p> les deux conditions sont fausses </p>";
}
 
// comparaisons en == et ===
 
$varA=1;
$varB="1";
 
echo gettype($varA)."<br>";// integer
 
echo gettype($varB)."<br>";// string
 
echo '$varA=1';
echo '$varB="1"';
 
if($varA == $varB) echo '<p> $varA est egale a $varB en valeur</p>';
 
echo "<br>";
if ($varA === $varB){
    echo '<p> $varA est egale a $varB en valeur et en type</p>';
}else{
    echo '<p> $varA n\'est pas egale a $varB en valeur et en type</p>';
}
 
// dans cette deuxiemme condition $varA n'est pas strictement egale a $varB en valeur et en type
 
 
$varC;// declaration de variable
$varC = 1;// initialisation / affectation
 
/**
*
* = signe d'affectation
* == signe de comparaison en valeur
* === signe de comparaison en valeur et en type
*
*
*/
 
 
// isset() et empty()
 
echo "<h2>isset() et empty()</h2>";
 
// definition
 
//isset() vérifie si une variable est définie ( si la variable existe) et à une valeur non null
 
// isset() utilisé quand tu veux savoir si une varaible existe et n'est pas Null
// avant d'utiliser un variable non definie
// cas typiques avant d'acceder a une clé de tableau au ou super globale $_GET, $_POST, $_SESSION, $_COOKIE,
 
// est considerer comme vide )
/**
* $vart="";
* $vart=false;
* $vart=0;
* $vart="0";
* $vart=0.0;
* $vart=null;
*
*/
 
 
//empty() vérifie si une variable est vide (si la variable n'existe pas ou si elle a une valeur vide)
 
// empty() si tu veux savoir si une variable est vide
// mais si la variable n'existe pas empty ne génère pas d'erreur
 
$varD = 1;
 
 
 
if (empty($var1)) echo "0, vide, false, string vide";
 
 
$varE = "";
$varF = null;
 
$varG;
 
// $vartt n'est pas defini
if(empty($vartt)){
 
    echo "<p> la variable n'est pas defini</p>";// revoie true la variable n'est pas defini
}else{
    echo "<p> la variable est defini</p>";
}
 
 
if(empty($varE)){
    echo "<p> la variable est vide</p>";
}else{
    echo "<p> la variable n'est pas vide</p>";
}
 
echo "<br>";
if(isset($varE)){
    echo "<p> la variable est defini</p>";
}else{
    echo "<p> la variable n'est pas defini</p>";
}
 
 
 
if (isset($var1)) echo "la variable est defini";
 
if( isset($var2)) echo " variable existe et non null";
 
echo "<br>";
 
if ( isset($vartt)){
    echo "<p> \$vartt est defini</p>";
}else{
 
    echo "<p> \$vartt n'est pas defini</p>";
}
 
echo "<br>";
 
 
echo "<p> varG avec isset ( varG;)</p>";
if(isset($varG)){
    echo "<p> la variable est defini</p>";
}else{
    echo "<p> la variable n'est pas defini</p>";
}
 
 
$tab2=[
    "user"=>"mohamed",
    "connexion"=>false
];
 
 
 
if(!empty($tab2)){
    // je demande si $tab2["user"] et $tab2["user"] n'est pas vide
    if(isset($tab2["user"]) && !empty($tab2["user"])){
       
        echo "<h5>Bonjour ".$tab2["user"]."</h5>";
          // si $tab2["connexion"] existe dans le tableau et n'est pas vide
        if( isset($tab2["connexion"]) && !empty($tab2["connexion"] )){
            echo "<button>DECONNEXION</button>";
        }else{
            echo "<button>SE CONNECTER</button>";
        }
 
 
    }else{
        echo "<h5>Bonjour invité</h5>";
       
    }
}
 
 
// switch
// la condition swicth est une autre syntaxe du if / else quand on veut comparer une variable a une multiple valeur

$couleur="rouge";

switch ($couleur){  // on copare la variable $couleur avec les valeurs des cases 

    case 'rouge';
            echo "<p>la couleur est rouge</p>";
        break;  // break est obligatoire pour auitter la condition une fois la case executee
    case 'bleu';
            echo"<p>la couleur est bleu</p>";
        break;
    case 'vert';
            echo"<p>la couleur est vert</p>";
        break;
    default:
            echo"<p>la couleur n'est pas rouge, bleu ou vert</p>";
        break;


}

 



/** Exercice 9 : Catégoriser une personne selon son âge

* 

*  Objectif : Ecrire une/des condition(s) qui classe une personnee en 'enfant','adolescent','adulte' ou 'senior' selon son age






*/
$age=25;

switch ($age){
    case $age<13;
        echo"<p>enfant</p>";
            break;

    case $age>13 && $age <18;
        echo"<p>adolescent</p>";
            break;
    case $age>18 && $age <60;
        echo"<p>adulte</p>";
            break;
    default:
        echo"<p>senior</p>";
            break;

}


// une autre maniere 


$categorie ="pp";
 
switch($categorie){
    case ($categorie>0 && $categorie<12):
        echo'enfant';
    break;
    case $categorie<18:
        echo'adolescent';
    break;
    case $categorie<55:
        echo'adulte';
    break;
    case ($categorie>55 && $categorie<120):
        echo'senior';
    break;
    default:
        echo 'c\'est un extraterrestre';
    break;
}
?>


// une autre maniere 
<?php 
$utilisateurs = [
    [
        "nom" => "Arnaud",
        "age" => 25
    ],
    [
        "nom" => "Shezad",
        "age" => 15
    ],
    [
        "nom" => "Ousmane",
        "age" => 65
    ],
    [
        "nom" => "Nasuf",
        "age" => 8
    ]
];

foreach ($utilisateurs as $utilisateur) {
    if ($utilisateur["age"] < 10) {
        echo "<p>".$utilisateur["nom"]." est un enfant</p>";
    } elseif ($utilisateur["age"] < 18) {
        echo "<p>".$utilisateur["nom"]." est un adolescent</p>";
    } elseif ($utilisateur["age"] < 50) {
        echo "<p>".$utilisateur["nom"]." est un adulte</p>";
    } else {
        echo "<p>".$utilisateur["nom"]." est un homme des caverne </p>";
    }
}
 
/** Exercice 10 : Vérifier la cohérence des réponses avec l'opérateur XOR*/


$motDPasse=true;
$empreinteDig=false;


if($motDPasse XOR $empreinteDig ){
    echo "<p> connexion réussie</p>";
}else{
    echo "<p> échec de connexion</p>";
}

 



/* 

*  Objectif : Ecrire des conditions et vérifier la cohérence de ces réponses

* 

*  Exemple : Nous avons une vérification a faire pour vérifier si l'utilisateur se connecte avec son empreinte digitale ou son mdp (il ne peut pas faire les deux en même temps)

* 

*  xor : L'une des deux conditions doit être vraie seulement, si les deux sont vraies, alors il retournera false

*  contrairement à || (ou) qui vérifiera si au moins l'une des deux conditions est vraie, même si les deux le sont
 
*/

/* Exercice 3 : Afficher le jour de la semaine

* 

*  Objectif : Ecrire une condition 'switch' pour afficher un message en fonction du jour de la semaine, le jour est donnée par une variable $jour en number (1 pour lundi, 2 pour mardi etc...)

* 

*/



$jour =1;

switch ($jour){
    case $jour=1;
        echo"<p>lundi</p>";
            break;

    case $jour=2;
        echo"<p>mardi</p>";
            break;
    case $jour=3;
        echo"<p>mercredi</p>";
            break;
    case $jour=4;
        echo"<p>jeudi</p>";
            break;
    case $jour=5;
        echo"<p>vendredi</p>";
            break;
    case $jour=6;
        echo"<p>samedi</p>";
            break;
    default:
        echo"<p>dimanch</p>";
            break;

}
 
/** Exercice 4 : Comparaison de chaines de caractères

*  Objectif : Ecrire une condition qui compare si deux variables sont identiques, la condition doit vérifier le type ET la valeur 

*/

$jour=3;
$jour="3";


if($jour===3) { 
    echo "lundi";
}else{
    echo"non";
}




        
                    ?>
    
</div>
</body>
</html>