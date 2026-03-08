<?php
// Connexion à la base de données (volontairement simple pour la démo)
$conn = mysqli_connect("db", "root", "rootpassword", "testdb");

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