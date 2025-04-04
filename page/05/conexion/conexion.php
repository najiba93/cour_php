<?php
session_start();

if (isset($_POST['logout'])) {
    // Déconnexion
    session_unset();
    session_destroy();
    header("Location: accueil.php");
    exit();
}

// Traitement du formulaire de connexion (quand il est soumis)
if (
    $_SERVER["REQUEST_METHOD"] == "POST"
    && isset($_POST['prenom'])
    && isset($_POST['nom'])
    && isset($_POST['email'])
) {
    // Enregistre les infos en session
    $_SESSION['prenom'] = $_POST['prenom'];
    $_SESSION['nom'] = $_POST['nom'];
    $_SESSION['email'] = $_POST['email'];

    // Redirige vers l'accueil
    header("Location: accueil.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>

    <h1>Connexion</h1>

    <form method="post" action="conexion.php">
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required><br>

        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required><br>

        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required><br>

        <input type="submit" value="Valider">
    </form>

</body>
</html>
