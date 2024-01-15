<?php
// Assurez-vous d'avoir les informations de connexion correctes
$host = 'e-srv-lamp.univ-lemans.fr';
$user = 'e2304411'; // Remplacez par votre numéro étudiant de session
$database = 'e2304411'; // Remplacez par votre numéro étudiant de session
$password = 'Fvk896ph'; // Remplacez par votre mot de passe étudiant de session

// Vérifie si une requête POST a été envoyée
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les données du formulaire
    $nom = $_POST['nom'];
    $nombre = $_POST['nombre'];

    // Connexion à la base de données
    $conn = new mysqli($host, $user, $password, $database);

    // Vérifie la connexion
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    // Prépare et exécute la requête SQL pour insérer les données dans la table
    $sql = "INSERT INTO birthdayguests (Nom, Nombre) VALUES ('$nom', '$nombre')";
    if ($conn->query($sql) === TRUE) {
        echo "Inscription réussie!";
    } else {
        echo "Erreur lors de l'inscription : " . $conn->error;
    }

    // Ferme la connexion à la base de données
    $conn->close();
}
?>
