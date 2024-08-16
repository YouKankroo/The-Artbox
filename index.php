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

<body>
    <?php include  'The-Artboxheader.php'; ?>
    <main>
        <div id="liste-oeuvres">



            <?php
            // Définir les données des œuvres dans un tableau associatif
            include 'oeuvres.php';
            // Remplir le tableau des œuvres


            // Utiliser les données dans une boucle foreach
            foreach ($oeuvres_data as $id => $oeuvre) {
                $titre = $oeuvre['titre'];
                $auteur = $oeuvre['auteur'];
                $image = $oeuvre['image'];
                $id = $oeuvre['id'];

                echo "
    <article class='oeuvre'>
        <a href='oeuvre.php?id=$id' >
            <img src='$image' alt='$titre'>
            <h2>$titre</h2>
            <p class='description'>$auteur</p>
        </a>
    </article>";
            }
            ?>






        </div>
    </main>
    <?php include  'The-Artboxfooter.php'; ?>
</body>

</html>