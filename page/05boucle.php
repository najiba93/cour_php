<h1>les boucles</h1>




<?php 

// boucle for

$tab=["123","124","125"];

for($i=0;$i<count($tab);$i++){
    echo $tab[$i]."<br>";
}
echo "<br>";
echo "<br>";
// avec la boucle for  vous avez plus de controle sur l'index par exmple vous pouvez commencer la boucle a l'index de votre choix

// boucle for dans un tableau associatif
 $tab3=[
    "id"=>123,
    "email"=>"gggmail.com",
    "age"=>25
 ];

//  for($i=0; $i<count($tab3);$i++){
//     echo $tab3[$i];
//  }

 echo "<br>";
 echo "<br>";

 // cette boucle me creer une errur car la boucle for ne peux pas boucler un tableau associatif n'ayant pas d'index.

// boucler un tableau associatifs
// la boucle foreach() fonctionne uniquement sur les tableaux ou objets, errur si on boucle sur un variable non array(tableau)

// le mot cle " as " est obligatoire


//il ya deux facon d'ecrire la boucle foreach :

$users=[

    "id"=>123,
    "email"=>"gg_gmail.com",
    "age"=>25


];

foreach($users as $valeur ){
    echo "je suis la valeur  : " .$valeur . "<br>";



}

echo "<br>";
echo "<br>";
foreach($users as $clé => $valeur ){
    echo "je suis la clé  : " . $clé. "et je suis la valeur : " . $valeur ."<br> ";
}
echo "<br>";
echo "<br>";

echo "<br>";
echo "<br>";


// boucler un tableau multidimentionel

$users5=[

    "id"=> 123,
    "email" =>[
        "test"=>"test3",
        "test1"=>"test3",
        "test2"=>"test3",

    ],
    "age"=>25
];

foreach($users5["email"] as $cleArno=> $arno){// on entre dans le tableau email et on le boucle on recupere les valeurs et ses cles
    echo $cleArno . " : " . $arno . "<br>";



}

echo "<br>";
echo "<br>";

  $tab5=[
[1,2,3],
[4,5,6],
[7,8,9],

  ];


  echo "<pre>";
  
  var_export($tab5);
  echo "<br>";
echo "<br>";
  "</pre>";


  foreach($tab5 as $index=>$tabIndex){

    echo "index " .$index ."  ";

    foreach($tabIndex as $value){
    echo "  value :  $value<br>";
    }
  }

  echo "<br>";
  echo "<br>";

echo "<br>";
echo "<br>";
// foreach avec un tableau indesxe 

echo"<hr><h1>foreach avec un tableau indesxe </h1><hr>";



echo "<br>";
echo "<br>";



$ville =[ " toulon" , "paris" , "barcelone"];

foreach( $ville as $index ){
    echo " ma ville est : " .$index . "<br>";
}


echo "<br>";
echo "<br>";
foreach( $ville as $index => $valeur){
    echo " ma ville est : " . $valeur.  "et son index est  : ".$index ."<br>";
}

echo "<br>";
echo "<br>";


echo"<hr><h1>boucle while </h1><hr>";
 // boucle while


 $i=0; // valeur de depart de la boucle 

 echo "<br>";
 echo "<br>";
 while($i<=5){
    if($i==5){
        echo $i;
    } else{// tant que $i est inferieur a 5
    echo "$i---"; // tu  affiche la valeur de $i
      // on onblie pas d'incrementer de 1 a chaque tour de boucle pour ne pas avoir une boucle infinie
    }
    $i++;
 }// pas besoin de ;
 echo "<br>";
 echo "<br>";
 echo "<br>";
echo "<br>";


echo"<hr><h1>boucle do...while </h1><hr>";

// boucle do...while

$j=11;

do{
    echo $j++." ";
    echo " je fais un tour de boucle <br>";
}while($j>10 && $j<=20);






/*******************************************************************************************Exercice************************************************************ */

// Afficher toutes les réponses
 
/** Exercice 1 : Boucle while basique
* 
*  Objectif : Créer une boucle while qui affiche les nombres pairs de 0 à 20
* 
*/
echo "<h1> Créer une boucle while qui affiche les nombres pairs de 0 à 2</h1>";

echo "<br>";
echo "<br>";


$nombre = 0;

while ($nombre <= 20) {
    if ($nombre % 2 == 0) {
        echo $nombre . "<br>";
    }
    $nombre++;
}


echo "<br>";
echo "<br>";




/** Exercice 2 : Générer une liste d'années avec une boucle while
* 
*  Ojectif : Afficher les années de 2000 à l'année actuelle (qui doit être incluse) dans une liste non ordonnée (<ul>)
* 
*/

echo "<br>";
echo "<br>";




echo "<br>";
echo "<br>";


echo "<h1>Générer une liste d'années avec une boucle while</h1>";


$anne=2000;

while($anne <= date("Y")){  
    echo "<li>$anne</li> ";

      $anne++;

 }


 echo "<br>";
echo "<br>";

 
/** Exercice 3 : Boucle do...while
* 
*  Objectif : Utiliser une boucle do...while pour afficher les multiples de 3 inférieurs à 30. S'assurer que le premier multiple est affiché même si la condition n'est pas remplie
* 
* 
*/
echo "<br>";
echo "<br>";
echo "<h1>boucle do...while pour afficher les multiples de 3 inférieurs à 30</h1>";

echo "<br>";
echo "<br>";




$nbnb=1;
do {
    if ($nbnb % 3===0){
       
        echo $nbnb . "est un multiple de 3"."<br>";
    }
    $nbnb ++;
   
} while ($nbnb <= 30);
 

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
 
/** Exercice 4 : Boucle for
* 
*  Objectif : Créer une boucle for qui affiche une table de multiplication (de 1 à 10) pour un nombre donné
* 
*/
echo "<br>";
echo "<br>";
echo "<h1>boucle for qui affiche une table de multiplication</h1>";

echo "<br>";
echo "<br>";

$nombre = 9;


for ($i = 1; $i <= 10; $i++) {
    $resultat = $nombre * $i;
    echo "$nombre x $i = $resultat.<br>";
}




echo "<br>";

echo "afficher ttes les tables de multiplications";



for ($nb1=1; $nb1 <=10 ; $nb1++) {
    for ($i=1; $i <=10 ; $i++) {
        echo "$nb1 x $i =" . $nb1*$i;
        echo "<br>";
    }
    echo "<br>";
}


echo "<br>";

 
/** Exercice 5 : Boucles imbriquées pour créer une grille
* 
*  Objectif : Créer une boucle for qui affiche une grille de 5x5 dans un tableau html (<table>).
*             Chaque cellule doit contenir les coordonnées de la cellule (par exemple (1,1) pour la première cellule)
* 
*/

echo "<br>";
echo "<br>";



echo "<h1>Boucles imbriquées pour créer une grille</h1>";





echo "<table border>";

for ($i = 0; $i < 5; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 5; $j++) {
        echo "<td>($i, $j)</td>";
    }
    echo "</tr>";
}

echo "</table>";



/** Exercice 6 : foreach pour un tableau associatif
* 
*  Objectif : Créer un tableau associatif avec les informations suivantes : 'prenom','nom','email','age'
*             Afficher chaque information sous la forme clé : valeur dans des paragraphes, l'email doit être dans un lien (<a>)
* 
*/

echo "<br>";
echo "<br>";



$tableau=[

    "prenom"=> "najiba",
    "nom"=>"nazari",
    "email"=> "najiba@gmail.com",
    "age"=>"40"


];

foreach($tableau as $clé => $valeur  ){

    if($clé==="email"){
echo "<p>$clé :<a href=' $valeur'>$valeur</a></p> <br> ";

    }
}

 
/** Exercice 7 : Foreach avec des clés personnalisées
*  
*  Objectif : Créer un tableau associatif représentant un menu de navigation, les clés seront les titres des pages ('accueil','produits','contact') et les valeurs les liens correspondants.
* 
* Afficher chaque element du menu sous forme de liens (<a>)
* 
* 
*/


echo "<h1>Foreach avec des clés personnalisées</h1>";



echo "<br>";
echo "<br>";echo "<br>";
echo "<br>";


$menu=[

    "accueil "=> "/page/accueil.php",
    " produits "=>"/page/produits.php",
    " contact "=> "/page/contact.php",
   


];

foreach($menu as $cle => $valeur  ){
echo "<a href=".$valeur.">$cle</a>";

}
echo "<br>";echo "<br>";
echo "<br>";




/** Exercice 8 : Boucles imbriquées et conditions
* 
*  Objectif : Créer un tableau HTML de 10x10 dans lequel chaque cellule contient un nombre aléatoire entre 1 et 100. 
* 
*  Mettre un background vert sur les cellules contenant un nombre pair
* 
*/

echo "<h1>Boucles imbriquées et conditions</h1>";





echo "<table style='border: 1px solid black; padding:5px'>";

        for ($i=1; $i<=10; $i++){
            echo "<tr>";
            for($w=1; $w<=10; $w++){
                $random=rand(0,100);
                if($random%2===0){
                    echo "<td style='background : green ; border : 1px solid black'>$random</td>";
                }else{
                   
                    echo "<td style='background : pink ; border : 1px solid black'>$random</td>";
                }
            }
            "</tr>";
        }
        echo "</table>";




 
/** Exercice 9 : Generation d'un calendrier
* 
*  Objectif : Utiliser une boucle for pour générer un calendrier mensuel (de 1 à 31), puis y afficher les jours dans un tableau HTML, les week ends devront être en rouge
* 
*/
 







 
/** Exercice 10 : Tableau de tableaux
* 
*  Objectif : Créer un tableau contenant trois sous tableaux, chacun représentera une personne avec les clés 'prenom','nom','age'. 
* 
*  Afficher toutes les informations sous forme de liste HTML ordonnées ('<ol>'), où chaque personne a sa propre sous-liste (<ul>)
* 
*  Résultat attendu : 
* 
*  <ol> 
*  <li> Personne 1 </li>
*  <ul> 
*  <li> prénom : prenom </li>
*  <li> nom : nom </li>
*  <li> age: age </li>
*  </ul>
*  <li> Personne 2 </li>
* 
*/





?>












