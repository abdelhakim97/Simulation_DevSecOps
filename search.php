<?php
// Connexion à la base de données (volontairement simple pour la démo)
$conn = mysqli_connect("localhost", "root", "123456789", "DbSecOps");

// VULNÉRABILITÉ : Injection SQL
$search = $_GET['search'];
$query = "SELECT * FROM users WHERE name = '$search'";
$result = mysqli_query($conn, $query);

// Affichage des résultats
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Utilisateur : " . $row['name'] . "<br>";
    }
} else {
    echo "Erreur SQL : " . mysqli_error($conn);
}

mysqli_close($conn);
?>