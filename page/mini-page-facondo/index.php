<?php ?>


<?php


include_once "./component/header.php";

?>

<h1>home</h1>

<h2> voici la liste de nos produits</h2>

<?php   
// boucle imbriqué pour  boucler le premier tableau indexé puis le second tableau associatif 
foreach($produit as $index ){

    foreach($index as $cle => $valeur){ // pour ce tableau nous souhaitons recuperer la clé et sa valeur pour vouloir l'afficher dans le DOM.
       if($cle=="category"){
           echo " sa " .$cle ." est : " .$valeur;
           br();
           
           
        }else{
            
            echo " son " .$cle ." est : " .$valeur;
            br();
       }

    }

    

    // foreach ($index as $cle => $valeur) {
    //     echo ($cle == "category" ? " sa " : " son ") . $cle . " est : " . $valeur;
    //     echo "<br>";




}


?>



<?php


include_once "./component/footer.php";












?>