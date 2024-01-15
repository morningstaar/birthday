<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <title>Anniversaire</title>
</head>
<body>

    <div class="container">
        <h1>Votre Anniversaire</h1>

        <p>Nom: Votre Nom</p>
        <p>Date et Heure: 20 janvier 2024 à 19h00</p>
        <p>Thème: Années 80 <button onclick="displayExplanations()"></button></p>
        <p id="explanation" style="display: none;">Description du thème des années 80...</p>
        <p>Lieu: <a href="https://www.lemans.fr/dynamique/la-proximite/les-salles-municipales/le-descriptif-des-salles-municipales/la-salle-du-jardin-des-plantes" target="_blank">Salle du Jardin des Plantes</a></p>

        <form action="register.php" method="post">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="nombre">Nombre de personnes :</label>
            <input type="number" id="nombre" name="nombre" required>

            <button type="submit">Confirmer la présence</button>
        </form>

        <p>Total Guests: <?php include 'count_guests.php'; ?></p>
    </div>

</body>
</html>
