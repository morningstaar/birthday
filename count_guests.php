<?php
// Assurez-vous d'avoir les informations de connexion correctes
$host = 'e-srv-lamp.univ-lemans.fr';
$user = 'e2304411'; // Remplacez par votre numéro étudiant de session
$database = 'e2304411'; // Remplacez par votre numéro étudiant de session
$password = 'Fvk896ph'; // Remplacez par votre mot de passe étudiant de session

// Connexion à la base de données
$conn = new mysqli($host, $user, $password, $database);

// Vérifie la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Récupération des données de la table birthday_guests
$sql = "SELECT SUM(Nombre) as totalGuests FROM birthdayguests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Affiche le nombre total d'invités
    $row = $result->fetch_assoc();
    echo $row['totalGuests'];
} else {
    echo "Aucun invité pour le moment.";
}

// Ferme la connexion à la base de données
$conn->close();
?>
