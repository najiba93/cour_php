<?php



if(isset($_GET["article"])){
   echo htmlspecialchars($_GET['article']);
   
}else{
    echo  htmlspecialchars($_GET['hotel']);
}
echo "  <br>";


if(isset($_GET["prix"])){
  echo  htmlspecialchars($_GET['prix']);
    
}else{
    echo  htmlspecialchars($_GET['location-nuit']);
}
echo "  <br>";



if(isset($_GET["category"])){
   echo  htmlspecialchars($_GET['category']);
    echo $_GET["category"];
}else{
    echo  htmlspecialchars($_GET['localisation']);
}
echo "  <br>";
?>