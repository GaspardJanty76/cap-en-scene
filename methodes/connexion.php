<?php
// Paramètres de connexion à la base de données
$serveur = ""; // Adresse du serveur MySQL
$port = ;
$utilisateur = ""; // Nom d'utilisateur MySQL
$motdepasse = ""; // Mot de passe MySQL
$basededonnees = ""; // Nom de la base de données

// Connexion à la base de données en utilisant les paramètres définis ci-dessus
$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees, $port);

// Vérifier la connexion
if ($connexion->connect_error) {
    // En cas d'échec de la connexion, afficher un message d'erreur et arrêter l'exécution du script
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
}
?>
