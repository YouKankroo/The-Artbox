<?php
include 'oeuvres.php'; // Inclure le fichier contenant les données avant de les utiliser

// Récupération de l'identifiant d'œuvre depuis l'URL
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
}

if (isset($oeuvres_data[$id])) {
    $oeuvre = $oeuvres_data[$id];
} else {
    // Si l'œuvre n'existe pas, affichez un message d'erreur
    echo "<h1>Oeuvre non trouvée</h1>";
    exit;
}
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>



<?php include 'The-Artboxheader.php'; ?>

<main>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?php echo htmlspecialchars($oeuvre['image']); ?>" alt="<?php echo htmlspecialchars($oeuvre['titre']); ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo htmlspecialchars($oeuvre['titre']); ?></h1>
            <p class="description"><?php echo htmlspecialchars($oeuvre['auteur']); ?></p>
            <p class="description-complete">
                <?php echo htmlspecialchars($oeuvre['description']); ?>
            </p>
        </div>
    </article>
</main>
<?php include 'The-Artboxfooter.php'; ?>