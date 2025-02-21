<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
</head>
<body>
    <h1>Bienvenue sur notre site !</h1>

    <form method="POST" action="">
        <label for="name">Entrez votre nom :</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Envoyer</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']); // Sécurise l'entrée utilisateur
        echo "<h2>Bonjour, $name !</h2>"; // Affiche un message de bienvenue
    }
    ?>
</body>
</html>

