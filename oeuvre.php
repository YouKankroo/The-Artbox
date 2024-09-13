    <?php
    include 'oeuvres.php'; // Inclure le fichier contenant les données avant de les utiliser

    // Récupération de l'identifiant d'œuvre depuis l'URL
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = (int)$_GET['id'];
    }

    if (isset($oeuvres_data[$id])) {
        $oeuvre =  $oeuvres_data[$id];
    } else {
        // Si l'œuvre n'existe pas, affichez un message d'erreur
        echo "<h1>Oeuvre non trouvée</h1>";
        exit;
    }
    ?>



    <?php include 'The-Artboxheader.php'; ?>

    <main>
        <article id="detail-oeuvre">
            <div id="img-oeuvre">
                <img src="<?php echo htmlspecialchars($oeuvre['image']); ?>" alt="<?php echo htmlspecialchars($oeuvre['titre']); ?>">
            </div>
            <div id="contenu-oeuvre">
                <h2><?php echo htmlspecialchars($oeuvre['titre']); ?></h2>
                <p class="description"><?php echo htmlspecialchars($oeuvre['auteur']); ?></p>
                <p class="description-complete">
                    <?php echo htmlspecialchars($oeuvre['description']); ?>
                </p>
            </div>
        </article>
    </main>
    <?php include 'The-Artboxfooter.php'; ?>