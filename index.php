<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" ></script>
    <title>Anniversaire</title>
</head>
<body>

    <div class="container">
        <h1 id="titre">L'Anniversaire de Bertrand </h1>

        <p>SILUE Gnenema Bertrand</p>
        <img src="me.jpg" alt="moi">
        <p>Date et Heure: 20 janvier 2024 à 19h00</p>
        <p>Thème: Années 80 <button onclick="displayExplanations()">En Savoir plus...</button></p>
        <p id="explanation" style="display: none;">La culture des années 80 c'est bien entendu des chanteurs et groupes emblématiques, l'arrivée des vidéo-clips. Mais c'est également une période riche en sitcoms et en films ! Que diriez-vous de placer votre fête anniversaire sous le signe des séries TV et du cinéma des années 80 ? Procurez-vous des affiches de ces films cultes pour en faire une décoration à thème originale qui fera verser une petite larme aux plus nostalgiques. </p>
        <p>Lieu: <a href="https://www.lemans.fr/dynamique/la-proximite/les-salles-municipales/le-descriptif-des-salles-municipales/la-salle-du-jardin-des-plantes" target="_blank">Salle du Jardin des Plantes</a></p>

        
        <form action="register.php" method="post">
        <p>FORMULAIRE DE CONFIRMATION DE PRESENCE:</p>
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
