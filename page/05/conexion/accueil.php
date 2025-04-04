<?php 
session_start();
?>

<h1>ACCUEIL</h1>

<?php 
if (isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {
    echo "Bonjour " . $_SESSION['prenom'] . " " . $_SESSION['nom'];
    echo '<form method="post" action="conexion.php">
            <button type="submit" name="logout">Déconnexion</button>
          </form>';
} else {
    echo "Bonjour inconnu";
    echo '<form method="post" action="conexion.php">
            <button type="submit" name="connexion">Connexion</button>
          </form>';
}
?>
