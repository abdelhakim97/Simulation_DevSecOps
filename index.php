<!DOCTYPE html>
<html>
<head>
    <title>Accueil - App Demo</title>
</head>
<body>
    <h1>Bienvenue sur l'application PHP Demo</h1>
    
    <!-- Formulaire vulnérable aux injections SQL (volontaire) -->
    <form method="GET" action="search.php">
        <input type="text" name="search" placeholder="Rechercher un utilisateur">
        <button type="submit">Rechercher</button>
    </form>
    
    <p>
        <a href="info.php">Info PHP</a>
    </p>
    
    <?php
    // Ceci est une mauvaise pratique : informations de connexion en dur
    $db_password = "SuperSecretPassword123!";
    ?>
</body>
</html>