<body style="padding-bottom: 50rem;">



    <?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);


    //******************* */  LES TABLEAUX***************


    //Il existes 3 types de tableaux en PHP

    // 1. Tableau indexé
    // 2. Tableau associatif
    // 3. Tableau multidimensionnel



    // *****les tableaux (array) index *****

    // declaration d'un tableau il y a deux methodes


    //1er methode
    // array() est une fonction de PHP
    $tab = array("NASSUF", 2, true, 123.5);

    // 2eme methode
    // [] c'est une syntaxe plus courte
    $tab2 = ["element0", "element1", "element2"];


    //AJOUT D'UN ELEMENT DANS LE TABLEAU EN DERNIERE POSITION

    // la syntaxe est $tab2[] = "valeur";

    $tab2[] = "ajout de element3";
    echo "<pre>";
    print_r($tab2);
    echo "</pre>";
    // si vous oublier les crochets [] le tableau sera remplacé  exemple :
    // $tab2 = "ajout elements 4";

    echo "<pre>";
    print_r($tab2);
    echo "</pre>";

    // pour ajouter avec la fonction array_push()

    // array_push($tableauAmodifier, "elementAajouter");
    // avec array_push() on peut ajouter plusieurs éléments
    array_push($tab2, "ajout_element4", "ajout_element5");

    echo "<pre>";
    print_r($tab2);
    echo "</pre>";


    //echo $tab; // me donne une erreur array to string conversion

    echo $tab[0] . " " . $tab[1] . " " . $tab[2] . " " . $tab[3];
    // echo $tab[0,2]// ne marche pas si on veut afficher plusieur index

    // fonction de debugage pour afficher le contenu du tableau

    // var_dump()
    // affiche l'index la longueur du tableau et le type de chaque element longueur de chaine de caractere
    var_dump($tab);



    // Print_r() est souvent accompagné de la balise <pre></pre> pour plus de lisibilité
    // affiche moins d'infos que var_dump ( pour un débugage rapide)
    echo "<pre>";
    print_r($tab);
    echo "</pre>";


    // ***** te tableau associatif*****

    // un tableau associatif est un tableau dans laquel on choisit la dénomination des index

    // on utilise l'opérateur clé valeur => premet d'assigner une valeur à une clé personalisée

    $user1 = [

        "id" => 123,
        "name_username" => "Nassaf",
        "email" => "nassaf@gmail.com",
        "villes"=>"toulouse"
    ];


    // ajout d'elements avec un tableau associatif
    // on ajoute la cle dans les crochets et la valeur apres le =




array_push($user1,["villes"=>"nice"]); // avec array_push il y aura toujours un index

// pour ajoute un element dans un tableau associatif utiliser la syntaxe suivante

$user1["villes"]="nice";
$user1["ville"]="toulouse";
$user1["password"]="123456";

echo"<pre>";

var_export($user1);
print_r($user1);
echo "</pre>";

echo "<br>";






    // ici "id" est la clé et 123 est la valeur "=>" est un lien entre les deux

    print_r($user1);

    echo "<br>";

    echo $user1["email"];
    //Ou

    $user2 = array(

        "id" => 123,
        "name_username" => "Nassaf",
        "email" => "nassaf@gmail.com"
    );

    echo "<br>";

    print_r($user2["id"]);
    echo "<br>";
    echo $user2["id"];

    echo "<br>";
    var_dump($user2);



    // php ne fait pas la différence entre un tableau indexé et un tableau associatif
    // quand on affiche le print_r() ou var_dump()  l'affichache des tableaux indexés est la même que des tableaux associatifs

    $tab4 = [1, 2, "julien"];


    echo "<pre>";
    print_r($tab4);
    echo "</pre>";

    $tab5 = [
        0 => 1,
        1 => 2,
        2 => "julien"
    ];

    //****** */ les tableaux multidimensionnels*****

    $tab_multi = [
        "Najiba", // index 0
        ["email", "password"], // index 1
        "Seckene" // index 2
    ];
    echo "<br>";
    //echo "je suis l'echo de email :" . $tab_multi[1];
    echo "<br>";
    $users = [

        [
            "id" => 123,
            "name_username" => "Nassuf",
            "email" => "nassuf@gmail.com",
            "donnees_perso" => [
                "name" => "Nassuf",
                "age" => 25,
                "ville" => "Casablanca"
            ]
        ],
        [
            "id" => 124,
            "name_username" => "Najiba",
            "email" => "najiba@gmail.com"
        ],
        [
            "id" => 125,
            "name_username" => "Nawel",
            "email" => "nawel@gmail.com"
        ],
    ];
  echo " on cherche le neme de nassuf: ".$users[0]["donnees_perso"]["name"];
    echo "bonjour " . $users[2]["email"];

    echo "<pre>";
    print_r($tab_multi);
    echo "</pre>";

    print_r($tab_multi);

?>


    <h3>ajouter 1 ou plusieurs éléments avec tableau associatif</h3>
    <p> </p>



    <?php


    $user2=array(
        "id"=>999,
        "name_username"=>"Nono",
        "email"=>"nono@gmail.com"
    );


    // ajoute d'elements avec un tableau associatif 
    // on ajoute la cle dans les crochets et la valeur apre le =



    array_push($user2, ["villes"=>"nice"]); // avec array_push 
    $user2["password"] = "123177";
    var_dump($user2);


    // connaitre la langeur d'un tableau

    //sur un tableau indexe

    $tab5 = ["element0", "element1", "element2"];

    echo "longeur du tableau: " .count($tab5);

    $persone=[

        "nom"=>"arnaud",
        "mail"=>"zrnaud@gmail.com",
        "age"=>[
            "hypithetique"=>15,
            "reel"=>55,
            "anne de naissance"=>1965
        ],
        "ville"=>"casablanca"
    ];
    echo "<br>";
    echo "longeur du tableau persone: " . count($persone);
    echo "<br>";
    echo "longeur du tableau \$persone [age]: ". count($persone["age"]);
    echo "<br>";
    echo "<br>";
    echo "<br>";

?>



 
<?php 

/* Exercice 3 : Créer et afficher un tableau associatif

*   Objectif : Travaillez avec un tableau associatif.

*   Instructions :

*   Créez un tableau associatif qui contient les informations suivantes : prénom, nom, et âge.

*   Affichez chaque information avec une phrase descriptive.

*/
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$tableauAssociatif=[
    "prénom"=>"lili",
    "nom"=>"mano",
    "âge"=>"25"
];
echo "<br>";
echo "<br>";
echo "<br>";

 echo "prenom :  " . $tableauAssociatif["prénom"];
 echo "<br>";
 echo "nom :  " . $tableauAssociatif["nom"];
 echo "<br>";
 echo "age :  " . $tableauAssociatif["âge"];
 echo "<br>";
 echo "<br>";

 $user = [
    "prénom" => "Neo",
    "nom" => "Eon",
    "age" => 22
];
echo "<br>";

echo "<p> ton prenom cest :"." ". $user["prénom"]." "."ton nom c'est :"." ". $user["nom"]." "."ton age c'est :"." ".$user["age"]."</p>";

 echo "<br>";
 echo "<p> ton prenom {$user["prénom"]} ton nom {$user["nom"]} ton age {$user["age"]}</p>";
 echo "<br>";


 /**Exercice 4 : Compter les éléments d'un tableau

*  Objectif : Utilisez les fonctions count() et sizeof().

*  Instructions :

*  Créez un tableau avec plusieurs villes.

*  Affichez le nombre d'éléments dans le tableau.
 */

echo "longeur du tableau tableauAssociatif: " . count($tableauAssociatif);

echo "<br>";


 echo "<br>";
 echo "<br>";



 $ville=["paris","Marseille","Lyon","Toulouse","Nantes","Rennes"];


 echo "<br>";

 echo "<br>";
echo "nombre d'éléments dans le tableau ville: " . count($ville);
echo "<br>";
echo "<br>";


/** Exercice 5 : Créer un tableau multidimensionnel

*   Objectif : Créez un tableau multidimensionnel et accédez à ses éléments.

*   Instructions :

*   Créez un tableau multidimensionnel avec des informations sur plusieurs étudiants : prénom, nom, et note.

*   Affichez la note du premier étudiant.

*/

$étudiants=[
    [
    "prénom"=>"lilo",
    "nom"=>"tamy",
    "note"=>15
      
],
[
    "prénom"=>"lilo",
    "nom"=>"tamy",
    "note"=>15
      
],
[
    "prénom"=>"lilo",
    "nom"=>"tamy",
    "note"=>15
      
    ]
    ]
;

echo "<br>";
echo "<br>";
echo "la note du premier étudiant: ". $étudiants[2]["note"];
echo "<br>";
echo "<br>";


/*ajouter un 4eme users et affiché le résultat dans faite un echo d'une phrase ajoutant le nom de nina et son mail s */



$users = [
    [
        "prenom" => "Julien",
        "email" => "julien@example.com"
    ],
    [
        "prenom" => "Nina",
        "email" => "nina@example.com"
    ],
    [
        "prenom" => "Samir",
        "email" => "samir@example.com"
    ],
   

];

array_push($users, [ "prenom" => "mano",
"email" => "mano@example.com"]);

echo "<pre>";
print_r($users);
echo "</pre>";



/*Vérifier si la variable $tab4 est définie (isset) et non vide (!empty).
Si c’est le cas, ajouter un nouvel élément (une personne) dans $tab4.
Sinon, initialiser $tab4 avec le tableau $tab_multi qui contient une liste d’utilisateurs.
 */


 $tab_multi = array(
    0 => array(
        'prenom' => 'Julien',
        'nom'    => 'Dupon',
        'telephone' => '0601020304'
    ),
    1 => array(
        'prenom' => 'Nicolas',
        'nom'    => 'Duran',
        'telephone' => '0601020304'
    ),
    2 => array(
        'prenom' => 'Pierre',
        'nom'    => 'Dulac'
    )
    );





 
$tab_multi = [
        [
            'prenom' => 'Julien',
            'nom'    => 'Dupon',
          'telephone' => '0601020304'
        ],
     [
            'prenom' => 'Nicolas',
            'nom'    => 'Duran',
            'telephone' => '0601020304'
        ],
    [
            'prenom' => 'Pierre',
            'nom'    => 'Dulac'
        ],];
 
 
if ( isset($tab4) && !empty($tab4) ){
    $tab4[]=['prenom'=> 'Nawel ',
            'nom'=> 'Denis',
            'telephone'=>'0601020304'];
}else{
    $tab4=$tab_multi;
    if (!isset ($tab4[2]["telephone"]))
        $tab4[2]["telephone"]="061122334400";
}
echo "<pre>";
var_dump($tab4);
echo "</pre>";
echo "<pre>";
var_dump($tab_multi);
echo "</pre>";
?>



 

 







    
</body>