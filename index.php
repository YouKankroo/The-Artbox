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
$oeuvres_data = [
    ['image' => 'img/clark-van-der-beken.png', 'titre' => 'DODOMU', 'auteur' => 'Mia Tozerski', 'id' => '1'],
    ['image' => 'img/dan-cristian-padure.png', 'titre' => 'AASHAAHEEN BAADAL', 'auteur' => 'Anaisha Devi', 'id' => '2'],
    ['image' => 'img/fly-d.png', 'titre' => 'NIGHTLIFE TRAFFIC', 'auteur' => 'Andrew Forsythe', 'id' => '3'],
    ['image' => 'img/jazmin-quaynor.png', 'titre' => 'LE REFUGE DE L HAVRE', 'auteur' => 'Simon Pelletier', 'id' => '4'],
    ['image' => 'img/orfeas-green.png', 'titre' => 'RED WASHOVER', 'auteur' => 'Kit Van Der Borght', 'id' => '5'],
    ['image' => 'img/pawel-czerwinski-2.png', 'titre' => 'CHROMATICS', 'auteur' => 'Jean-Michel Delatronchette', 'id' => '6'],
    ['image' => 'img/pawel-czerwinski-3.png', 'titre' => 'DIGITAL NEGATIVE', 'auteur' => 'Hamish McKee', 'id' => '7'],
    ['image' => 'img/pawel-czerwinski.png', 'titre' => 'BLAST FROM THE PAST', 'auteur' => 'Juliette Baskerville', 'id' => '8'],
    ['image' => 'img/steve-johnson-2.png', 'titre' => 'HURRICANE', 'auteur' => 'Natalie Wellington', 'id' => '9'],
    ['image' => 'img/steve-johnson-3.png', 'titre' => 'LA MARÉE ROUGE', 'auteur' => 'Martin Rodriguez', 'id' => '10'],
    ['image' => 'img/steve-johnson-4.png', 'titre' => 'ASIMILACION', 'auteur' => 'Angel Sanchez-Fernandez', 'id' => '11'],
    ['image' => 'img/steve-johnson-5.png', 'titre' => 'LA GALAXIA GIALLA', 'auteur' => 'Eduardo Tancredi', 'id' => '12'],
    ['image' => 'img/steve-johnson-6.png', 'titre' => 'PUFFY AMALGAMATE', 'auteur' => 'Sandro De Blasi', 'id' => '13'],
    ['image' => 'img/steve-johnson.png', 'titre' => 'MIRAGE', 'auteur' => 'Stéphanie Kaiser', 'id' => '14'],
    ['image' => 'img/victor-grabarczyk.png', 'titre' => 'BLAUE GELBE MUSTER', 'auteur' => 'Adelheid Von Schreiber', 'id' => '15'],
];

// Initialiser le tableau des œuvres
$oeuvres = [];

// Remplir le tableau des œuvres
foreach ($oeuvres_data as $index => $data) {
    $oeuvres[$index + 1] = $data;
}

// Utiliser les données dans une boucle foreach
foreach ($oeuvres as $oeuvre) {
    $titre = $oeuvre['titre'];
    $auteur = $oeuvre['auteur'];
    $image = $oeuvre['image'];
    $id = $oeuvre['id'];

    // Afficher ou utiliser les données de l'œuvre
    echo "<a href='$id' class='oeuvre'>";
    echo "<img src='$image' alt='$titre'>";
    echo "<h1>$titre</h1>";
    echo "<p class='description'>$auteur</p>";
    echo "</a>";
}
?>
     
  

   </div>
    </main>
    <?php include  'The-Artboxfooter.php'; ?>
</body>
</html>