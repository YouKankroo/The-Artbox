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
foreach ($oeuvres_data as $oeuvre => $data) {
    $oeuvres[$oeuvre + 1] = $data;
}

// Utiliser les données dans une boucle foreach
foreach ($oeuvres as $oeuvre) {
    $titre = $oeuvre['titre'];
    $auteur = $oeuvre['auteur'];
    $image = $oeuvre['image'];
    
   
    echo "<a href='oeuvre.php?id=" . $oeuvre['id'] . "' class='oeuvre'>";
    echo "<img src='$image' alt='$titre'>";
    echo "<h1>$titre</h1>";
    echo "<p class='description'>$auteur</p>";
    echo "</a> ";
}
?>
     
  

   </div>
    </main>
    <?php include  'The-Artboxfooter.php'; ?>
</body>
</html>