<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinéma</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <?php include 'tab.php'; ?>
</head>
<body>
<div class="card-container">
    <?php 
    foreach ($tab as $value) {
        echo '<div class="card">
        <h3> '. $value['nom'] .' </h3>
        <img src=" '. $value['img'] .' " alt="Affiche du film">
        <p><strong>Date:</strong>  '. $value['date'] .' </p>
        <p><strong>Réalisateur:</strong>  '. $value['réalisateur'] .' </p>
        <p><strong>Durée:</strong>  '. $value['durée'] .'  minutes</p>
        <p><strong>Genre:</strong>  '. $value['genre'] .' </p>
        <p> '. $value['synopsis'] .' </p>
        <div class="video-container">' . $value['bandeAnnonce'] . '</div>
        </div>';
    }
    ?>
</div>
</body>
</html>

