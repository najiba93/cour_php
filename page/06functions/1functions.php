<h2>Les fonctions PHP</h2>


<h4>Quelques fonctions prédéfinies de PHP </h4>
<p>permet de réaliser un traitement spécifique prédéterminé en PHP</p>

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
//strpos
$email = "prenom@site.fr";
echo strpos($email, "@") . "<br>"; // affiche la position de @ en comptant à partire de 0 dans la chaine de caractère // 6


if (strpos($email, "@")) {
    echo "mail correct <br>";
} else {
    echo "mail NON  correct <br>";
}

//************** */


$text = "   je suis un long texte très très long  text et pas de place dans la div    ";

echo $text . "<br>";

// strlen
echo "longueur du texte : " . strlen($text) . "<br>"; // longueur de chaine = 79 il calcule les espaces vides


//substr
$text_modif = substr($text, 0, 20); // pour couper la chaine de caractère au endroit souhaité

echo $text_modif . " ... <br> ";


// trim
echo strlen(trim($text)); // efface les espaces au début et à la fin de la chaine de caractère // renvoie 72


// fonction pour tableaux
//is_array()

$tab = [

    "id" => 123,
    "email" => "g@mail.com",
    "names" => [
        "name1" => "fab",
        "name2" => "seb"
    ],
    "role" => "user"
];

// is_array
foreach ($tab as $cle => $valeur) {

    if (is_array($valeur)) { // si $valeur est un tableau tu boubcle
        foreach ($valeur as $value) {
            echo "les valeurs : $value <br>";
        }
    } else {

        echo "<hr>  $cle est : $valeur <hr>";
    }
}

?>

<h1>creation d'une fonction </h1>


<p>les fonction sont un morceaux de code encapsules</p>
<?php
function hr()
{ // creation d'une fonction 
    echo "<hr>"; // cette fonction affiche un echo de hr
}


echo "<h6>titre</h6>";
hr(); // on appelle la fonction
hr();
hr();
hr();
hr();
hr();
hr();
hr();
hr();
hr();
hr();
hr();
hr();
hr();
hr();
hr();

function br()
{ // creation d'une fonction 
    echo "<br>"; // cette fonction affiche un echo de hr
}

// fonction avec return
br();
function bonjour()
{
    return "bonjour";
}

echo bonjour(); // affiche bonjour

// fonction avec return et parametre
br();
function bonjour2($qui)
{ // ceci est parametre
    return "bonjour" . $qui;
}
br();
$var = bonjour2("seckene"); // ceci est un argument

echo $var;
br();

$a = 2;
$b = 2;
function calc($m, $g)
{ // ceci est parametre
    $result = $m + $g;
    return  $result;
}

echo calc($a, $b);

function calcul()
{
    global $a;
    global $b;
    $result = $a + $b;
    return $result;
}
br();
br();
echo calcul();
br();
br();
// de l'espace local a l'espace global
$var6 = 6;
function jour()
{
    $jour = "mardi";
    return $jour;
}

echo jour();
br();
br();
$jourMardi = jour(); // j'ai stoocker la valeur de $jour (variable locale) dans une nouvelle variable 
// de l'espace global au local

$paye = "Maroc"; // variable global

function afficherPays()
{

    global $pays; // le mot cle global permet de recuperer une avaraible global au sein d'une fonction 
    echo $pays; // affiche Maroc
}
br();
br();










hr();
hr();
hr();
echo "<h1>exercice</h1>";
hr();
hr();
hr();

/*
 
1. Fonction sans paramètres et sans valeur de retour
Exercice : Créez une fonction appelée greet() qui affiche "Hello, world!" lorsqu'elle est appelée.
*/


br();
br();
br();
br();
br();
br();


function greet()
{
    echo "Hello, world!";
}


hr();
echo "<h2>Exercice1</h2>";
greet();


br();
br();







/*
2. Fonction avec paramètres et sans valeur de retour
Exercice : Créez une fonction appelée greetUser() qui prend un paramètre $name et affiche "Hello, [name]!" où [name] est la valeur passée à la fonction.
*/




function greetUser($name = "najiba")
{

    echo "Hello $name";
}




hr();
echo "<h2>Exercice2</h2>";
br();
br();
greetUser();
br();

/*
3. Fonction avec paramètres et avec valeur de retour
Exercice : Créez une fonction appelée sum() qui prend deux paramètres $a et $b, les additionne, et retourne le résultat.
*/




$a = 12;
$b = 5;


function sum($a, $b)
{

    $result = $a + $b;
    return $result;
}



hr();
echo "<h2>Exercice3</h2>";
br();
echo sum($a, $b);
br();

$tab2 = [
 
    ["Prenom" => "Daniel"],
    ["Prenom" => "Adam"],
    ["Prenom" => "Jean"],
    ["Prenom" => "Francois"],
    ["Prenom" => "Ana"]
];
 
 
 
?>
 
<ul>
    <?php
   
    foreach($tab2 as $cle => $valeur)
 
   
    foreach($valeur as $cles => $value ){
        echo "<li>".$cles. "  " . $value  ."</li>";
 
    }
 
   
   
   
    ?>
</ul>
<?php

br();
br();


/*
4. Fonction qui calcule la somme des nombres d'un tableau
Exercice : Créez une fonction appelée sumArray($numbers) qui prend un tableau de nombres $numbers en paramètre et retourne la somme de tous les éléments du tableau.
*/





br();
br();


$numbers = [1, 2, 3, 4, 5];



function sumArray($numbers)
{
    $sum = 0;
    foreach ($numbers as $ni) {
        $sum += $ni;
    }
    return $sum;
}
br();
br();

hr();
echo "<h2>Exercice4</h2>";
br();
br();


echo sumArray($numbers);



br();
br();



/*
5. Fonction avec paramètre par défaut
Exercice : Créez une fonction appelée greetWithTime() qui prend deux paramètres, un nom $name et un moment de la journée $timeOfDay (par défaut "day"), et qui affiche "Good [timeOfDay], [name]!
 
Rappel = vous pouvez ajouter une valeur au paramètre de fonction directement comme on a vu (exemple : function salut($name='Cynthia'){echo "Salut $name";})
".
*/

br();
br();
function greetWithTime($name = "najiba")
{

    function timeOfDay()
    {
        return date('d/m/Y H:i:s');
    }

    echo "  Salut  " . " " . $name . " " . timeOfDay();
}
hr();
echo "<h2>Exercice5</h2>";
br();
br();
greetWithTime();


br();
br();
/*
6. Fonction qui retourne un tableau
Exercice : Créez une fonction appelée getFruits() qui ne prend aucun paramètre et retourne un tableau contenant trois noms de fruits.
*/



br();
br();

function getFruits()
{

    return ["banan", "orange", "kiwi"];
}



hr();
echo "<h2>Exercice6</h2>";
br();
br();


print_r(getFruits());


br();
br();

/*
7. Fonction avec une chaîne de caractères comme paramètre
Exercice : Créez une fonction appelée reverseString($str) qui prend une chaîne de caractères $str en paramètre et retourne cette chaîne en ordre inversé.
*/


br();
br();

$strive = "une chaine de caracteres";

function reverseString($str)
{

    echo  strrev($str);
}

hr();
echo "<h2>Exercice7</h2>";
br();
br();


reverseString($strive);



br();
br();


// function reverseString($str) {
//     return strrev($str);
// }

function reverseStringh($str)
{
    $reverse = "";

    $i = strlen($str) - 1;
    while ($i >= 0) {
        $reverse .= $str[$i];
        $i--;
    }

    // for ($i = strlen($str) - 1; $i >= 0; $i--) {
    //     $reverse .= $str[$i];
    // }

    return $reverse;
}

echo reverseStringh("elicaF");

/*
8. Fonction avec paramètres et vérification de type
Exercice : Créez une fonction appelée divide($a, $b) qui prend deux paramètres $a et $b. La fonction doit vérifier que $b n'est pas égal à 0 avant de diviser $a par $b et retourner le résultat. Si $b est égal à 0, la fonction doit retourner un message d'erreur.
*/


br();
br();




hr();
echo "<h2>Exercice8</h2>";
br();
br();



echo divide($a, $b);



br();
br();

function divide($a, $b)
{
    if ($b !== 0) {
        $somme = $a / $b;
        echo $somme;
    } else {
        echo "Error 404";
    }
}

$a = 5;
$b = 6;

divide($a, $b);

br();
br();

function divided($a, $b)
{
    if ($b !== 0) {
        $somme = $a / $b;
        echo $somme;
    } else {
        echo "Error 404";
    }
}

$a = 5;
$b = 6;

divided($a, $b);

br();
br();
/*
9. Fonction qui utilise une boucle pour générer un résultat
Exercice : Créez une fonction appelée generateMultiplicationTable($number) qui prend un nombre $number en paramètre et retourne un tableau contenant la table de multiplication de ce nombre de 1 à 10.
*/


br();
br();







hr();
echo "<h2>Exercice9</h2>";




br();

function generateMultiplicationTable($number)
{

    for ($n = 1; $n <= 10; $n++) {
        $resultat[$n] = $n * $number;
    }

    // foreach($resultat as $n=> $result){
    //     echo "$number x $n = $result<br>";
    // }
    echo "<pre>";
    print_r($resultat);
    echo "</pre>";
}

generateMultiplicationTable(9);
echo "<br>";
br();





br();
br();

/*
10. Fonction avec une condition complexe
Exercice : Créez une fonction appelée checkEligibility($age, $hasLicense) qui prend en paramètre un âge $age et un booléen $hasLicense. La fonction doit retourner "Eligible" si l'utilisateur a 18 ans ou plus et possède un permis de conduire, sinon "Not Eligible".
 
*/

br();
br();




function checkEligibility($age, $hasLicense)
{
    if (($age >= 18) && ($hasLicense == true)) {

        return "Eligible";
    } else {
        return "Not Eligible";
    }
}

hr();
echo "<h2>Exercice10</h2>";
br();
br();


echo checkEligibility(19, false);

br();
br();
br();
br();

$agee = 20;
$hasLicenses = false;

function checkEligibilityy($agee, $hasLicenses)
{
    if ($agee < 18 || $hasLicenses === false) {
        echo "Not Eligible";
    } else {
        echo "Eligible";
    }
}

echo checkEligibilityy($agee, $hasLicenses);

br();
br();
br();
br();





/*
|--------------------------------------------------------------------------
| Exercices PHP — Fonctions, Tableaux, Affichage HTML
|--------------------------------------------------------------------------
| Objectif : Approfondir la manipulation de tableaux, l'affichage HTML
| et la création de fonctions utiles dans des cas concrets (panier, fiche produit, etc).
| Niveau : Débutant
*/

echo "<h1>Liste des exercices PHP</h1>";
br();
br();
br();
br();
/* 
* EXERCICE 1 — Afficher une variable simple
* ------------------------------------------
* Crée une variable $prenom avec ton prénom et affiche-la dans une balise <h2>.
*/

hr();
echo "<div class='h'><h2>Exercice1</h2></div>";
$prenom = "najiba";

echo "<h2>1. Affichage d'une variable : $prenom </h2>";

br();
br();
br();
br();
/*
* EXERCICE 2 — Affichage d’une fiche produit
* ------------------------------------------
* Crée un tableau associatif avec 'nom' => 'Stylo', 'prix' => 1.5
* Affiche ces données dans une structure HTML (ex : <div class='card'>).
*/
br();
br();
echo "<div class='h'><h2>Exercice2</h2></div>";
br();
br();
echo  "<h2>2. Affichage d'une fiche produit en HTML";

br();
br();


$produit = [
    "nom" => "Stylo",
    "prix" => "1.5€"
];


?>

<style>
.h{
    border: 2px solid blueviolet;
    background-color: aquamarine;  
}
    .p{
        border: 2px solid blueviolet;
        background-color: yellow; 
    }
    .card {

        border: 2px solid blue;
        background-color: aqua;

    }
</style>

<?php
echo "<div class='card'>" .$produit["nom"]." ". $produit["prix"] . "</div>";

br();
br();
br();
br();
/*
* EXERCICE 3 — Boucle sur un tableau simple
* ------------------------------------------
* Crée un tableau de 5 prénoms et affiche-les dans une liste HTML <ul>.
* ➕ Fonction utile : foreach
*/
echo "<br>";
echo "<div class='h'><h2>Exercice3</h2></div>";
echo "<br>";
echo "<div class='p'><h2>3. Liste de prénoms</h2></div>";



$tableau = ["fatima", "maryam", "fatiha", "khadija", "imane"];
foreach ($tableau as $prénoms) {
    echo "<ul><li> $prénoms </li></ul> <br>";
}






/*
* EXERCICE 4 — Générer plusieurs "cartes produit"
* -----------------------------------------------
* À partir d’un tableau contenant plusieurs produits (nom + prix),
* boucler et afficher chaque produit dans une carte HTML.
*/
echo "<div class='h'><h2>Exercice4</h2></div>";
echo "<div class='p'><h2>4. Cartes produit HTML avec boucle</h2></div>";
$produits=["jupe"=>"12€",
            "robe"=>"29€",
            "pantalon"=>"12€"
];
echo "<br>";
echo "<br>";

?>
<style>
    .cart{
        border: 1px solid red;
        width: 15%;
        height: 100px;
        margin: auto;
       
    }
    .valeur{
        width: 100%;
        border: 1px solid red;
        margin: auto;
        text-align: center;
        height: 50%;
    }
    .color{
        background-color:aqua ;
    }
    .col{
        background-color:burlywood ;
    }
</style>
<?php

foreach( $produits as $nom =>$prix ){
    echo " <div class='cart'><div class='valeur color'> " .$nom ."</div> <div class='valeur col'> ".$prix ."</div></div> <br>";
}


echo "<br>";


$tabProduct = [
    "PC Gamer" => 3000,
    "Ferrari Carbone" => 243000
];

foreach($tabProduct as $nom => $prix): ?>
    <div class="card">
        <h3><?php echo $nom; ?></h3>
        <p>Prix : <?php echo number_format($prix, 2, ',', ' ') . " €"; ?></p>
    </div>
<?php endforeach; 

echo "<br>";

/*
* EXERCICE 5 — Addition simple
* -----------------------------
* Crée deux variables $prix1 et $prix2, calcule la somme et affiche
* le total sous forme de texte : "Total : XX €"
*/
echo "<div class='h'><h2>Exercice5</h2></div>";
echo "<div class='p'><h2><h2>5. Addition de deux prix</h2></div>";
echo "<br>";
echo "<br>";

$prix1=45;
$prix2=74;
 
        $somme = $prix1 + $prix2;
       
   

echo "<p> Total : $somme   €</p>";
echo "<br>";
echo "<br>";
/*
* EXERCICE 6 — Ajouter la TVA
* ----------------------------
* Crée une fonction ajouterTVA($prix) qui retourne le prix TTC (20% de TVA).
* ➕ Math : $prix * 1.2
*/
echo "<div class='h'><h2>Exercice6</h2></div>";
echo "<div class='p'><h2>6. Calcul de la TVA</h2></div>";
echo "<br>";
echo "<br>";



function ajouterTVA($prix){

    return $prix * 1.2;
}



echo ajouterTVA(12);


echo "<br>";
echo "<br>";


/*
* EXERCICE 7 — Compter des éléments
* ---------------------------------
* Crée un tableau de produits et affiche le nombre total de produits.
* ➕ Fonction utile : count()
*/
echo "<div class='h'><h2>Exercice7</h2></div>";
echo "<h2>7. Compter les produits</h2>";
echo "<br>";
echo "<br>";


$produitsss=["jupe","robe","pantalon","jupe","robe","pantalon"];


echo count($produitsss);

echo "<br>";
echo "<br>";
/*
* EXERCICE 8 — Fonction d'affichage réutilisable
* ----------------------------------------------
* Crée une fonction afficherProduit($produit) qui prend un tableau associatif
* et affiche une carte HTML avec le nom et le prix du produit.
*/
echo "<div class='h'><h2>Exercice8</h2></div>";
echo "<h2>8. Fonction réutilisable pour afficher un produit</h2>";
echo "<br>";
echo "<br>";
$produit3=[
    [
        'nom' => 'Stylo',
        'prix' => 1.5
    ],
    [
        'nom' => 'crayon',
        'prix' => 1.1
    ],
    [
        'nom' => 'cahier',
        'prix' => 2.1
    ]
];


function afficherProduit($produit3){
    
        foreach($produit3 as  $valeur ){
            echo " <div class='cart'><div class='valeur color'> " .$valeur["nom"] ."</div> <div class='valeur col'> ".$valeur["prix"] ."</div></div> <br>";
        }
    }
    echo afficherProduit($produit3);

    echo "<br>";
    echo "<br>";
/*
* EXERCICE 9 — Total du panier
* -----------------------------
* À partir d’un tableau de produits (chacun avec 'nom' et 'prix'),
* calcule et affiche le total général avec une boucle.
*/
echo "<br>";
echo "<br>";
echo "<div class='h'><h2>Exercice9</h2></div>";
echo "<h2>9. Total d'un panier</h2>";
$panier = [
    ["nom" => "stylo", "prix" => 1.5],
    ["nom" => "cahier", "prix" => 2.0],
    ["nom" => "gomme", "prix" => 0.5],
];
$total = 0;
foreach ($panier as $produit) {
    $total += $produit['prix'];
}

echo "<p>Total du panier : $total €</p>";

echo "<h2>9. Total d'un panier</h2>";

echo "<br>";
echo "<br>";
/*
* EXERCICE 10 — Appliquer une remise
* ----------------------------------
* Crée une fonction appliquerRemise($prix, $pourcentage)
* qui retourne le prix après réduction.
*/
echo "<br>";
echo "<br>";
echo "<div class='h'><h2>Exercice10</h2></div>";
echo "<h2>10. Prix avec remise</h2>";


$prix = 23;
$pourcentage = 3;

$tab1 = ['nom' => 'chaise', 'prix' => 23];

function appliquerRemise($prix, $pourcentage){
    $reduction = $prix * ($pourcentage/100);
    $total = $prix - $reduction;
    return $total;
}

$remise = appliquerRemise($tab1['prix'], $pourcentage);

$tab1['prix'] = $remise;

var_dump($tab1);


echo "<br>";
echo "<br>";


/*
* EXERCICE 11 — Ajouter au panier
* -------------------------------
* Crée une fonction ajouterAuPanier($panier, $produit)
* qui retourne un nouveau tableau avec le produit ajouté.
*/
echo "<div class='h'><h2>Exercice11</h2></div>";



$panier = ["banana", "litchi"];
$produit = "mokotra";
function ajouterAuPanier($array, $produitAdd) {
    $array[] = $produitAdd;
return $array;
}
$panier = ajouterAuPanier($panier, $produit);
echo "<pre>";
print_r($panier);
echo "</pre>";
echo count($panier)
?> <button>voir panier <?php echo count($panier) ?></button><?php
echo "</pre>";

echo "<br>";
echo "<br>";
/*
* EXERCICE 12 — Afficher un panier vide ou non
* --------------------------------------------
* Vérifie si un tableau $panier est vide. S'il l’est, afficher un message,
* sinon, afficher les produits.
* ➕ Fonction utile : empty()
*/
echo "<div class='h'><h2>Exercice12</h2></div>";
echo "<h2>12. Vérification panier vide ou rempli</h2>";
echo "<br>";
echo "<br>";

$panier1 = ["banana", "litchi"];

if (!empty($panier1)){
    echo "<p>not empty</p>";
}else{
    echo "<p>empty</p>";
}

echo "<br>";
echo "<br>";
/*
* EXERCICE 13 — Moyenne des notes
* -------------------------------
* Crée un tableau de notes (ex : [12, 14, 18]) et calcule la moyenne.
* ➕ Fonctions utiles : array_sum(), count()
*/
echo "<div class='h'><h2>Exercice13</h2></div>";
echo "<h2>13. Moyenne d'un tableau</h2>";
echo "<br>";
echo "<br>";



$notes = [12, 14, 18];

function calculDeMoyenne($array){
$moyenne = array_sum($array) / count($array);
return $moyenne;
}

echo "<p>Moyenne :".calculDeMoyenne($notes) ."</p>";



echo "<br>";
echo "<br>";


/*
* EXERCICE 14 — Trier un tableau
* -------------------------------
* Crée un tableau de prix, trie-le par ordre croissant.
* ➕ Fonction utile : sort()
*/
echo "<div class='h'><h2>Exercice14</h2></div>";
echo "<h2>14. Tri des prix croissants</h2>";
echo "<br>";
echo "<br>";




echo "<br>";
echo "<br>";
/*
* EXERCICE 15 — Filtrer produits à moins de 10 €
* ------------------------------------------------
* Crée une fonction qui retourne un tableau avec uniquement
* les produits à moins de 10€.
*/
echo "<div class='h'><h2>Exercice15</h2></div>";
echo "<h2>15. Filtrer les produits abordables</h2>";

/*
* EXERCICE 16 — Tableau d’utilisateurs
* -------------------------------------
* Crée un tableau avec plusieurs utilisateurs (nom, email, âge)
* et affiche-les dans des cartes HTML.
*/
echo "<div class='h'><h2>Exercice16</h2></div>";
echo "<h2>16. Fiches utilisateurs</h2>";

/*
* EXERCICE 17 — Table de multiplication
* --------------------------------------
* Crée une fonction tableMultiplication($n) qui affiche la table du nombre donné.
*/
echo "<div class='h'><h2>Exercice17</h2></div>";
echo "<h2>17. Table de multiplication</h2>";

/*
* EXERCICE 18 — Formater un prix
* -------------------------------
* Crée une fonction formaterPrix($prix) qui :
*  - affiche 2 chiffres après la virgule
*  - ajoute "€"
* ➕ Fonction utile : number_format()
*/
echo "<div class='h'><h2>Exercice18</h2></div>";
echo "<h2>18. Formater un prix</h2>";

/*
* EXERCICE 19 — Afficher les produits chers
* ------------------------------------------
* À partir d’un tableau de produits, affiche uniquement ceux
* dont le prix est > 50€.
*/
echo "<div class='h'><h2>Exercice19</h2></div>";
echo "<h2>19. Filtrer les produits chers</h2>";

/*
* EXERCICE 20 — Simuler un panier complet
* ----------------------------------------
* À partir d’un tableau de produits avec :
*  - nom
*  - prix unitaire
*  - quantité
* Affiche chaque ligne avec prix total (prix * quantité)
* puis affiche le total global du panier.
*/
echo "<div class='h'><h2>Exercice20</h2></div>";
echo "<h2>20. Panier complet (HTML + Calcul)</h2>";

?>