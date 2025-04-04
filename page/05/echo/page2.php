
<?php
// Vérification des données reçues
$nom = isset($_GET['user_name']) ? htmlspecialchars($_GET['user_name']) : 'Nom inconnu';
$prenom = isset($_GET['prenom']) ? htmlspecialchars($_GET['prenom']) : 'Nom inconnu';
$mail = isset($_GET['user_email']) ? htmlspecialchars($_GET['user_email']) : 'mail inconnu';
$user_message = isset($_GET['user_message']) ? htmlspecialchars($_GET['user_message']) : 'mail inconnu';
var_dump($_GET);
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Résultat du formulaire</title>
</head>
<body>
    <h2>Données reçues :</h2>
    <p><strong>Nom :</strong> <?= $nom ?></p>
    <p><strong>Prenom :</strong> <?= $prenom ?></p>
    <p><strong>mail :</strong> <?= $mail ?></p>
    <p><strong>user_message :</strong> <?= $user_message ?></p>
 
    <a href="page1.php">⏪ Revenir au formulaire</a>
</body>
</html>