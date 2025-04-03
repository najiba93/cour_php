<?php 
var_dump($_GET);
?>
<p>
    <?php if(isset($_GET["nom"])){  // verfie si la cle "nom" existe
        echo $_GET["nom"];
    }else{  // si cle nom n'existe pas alors tu affiche article
        echo $_GET["article"];
    }
    echo " <br> ";
    if(isset($_GET["ville"])){  // verfie si la cle "ville" existe
        echo $_GET["ville"];
    }else{   // si cle nom n'existe pas alors tu affiche couleur
        echo $_GET["couleur"];
    }
    echo "  ";


    if(isset($_GET["description"])){
        echo $_GET["description"];
    }else{
        echo " 🧑‍💼";
    }
    echo "  ";
    if(isset($_GET["prix"])){
        echo $_GET["prix"];
    }else{
        echo "🕘 ";
    }
    echo "<br>";




    ?>
</p>