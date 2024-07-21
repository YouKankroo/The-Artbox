<?php
// Définir les œuvres dans un tableau associatif
$oeuvres = array(
    1 => array('titre' => 'DODOMU', 'auteur' => 'Mia Tozerski'),
    2 => array('titre' => 'AASHAAHEEN BAADAL', 'auteur' => 'Anaisha Devi'),
    3 => array('titre' => 'NIGHTLIFE TRAFFIC', 'auteur' => 'Andrew Forsythe'),
    4 => array('titre' => 'LE REFUGE DE L HAVRE', 'auteur' => 'Simon Pelletier'),
    5 => array('titre' => 'RED WASHOVER', 'auteur' => 'Kit Van Der Borght'),
    6 => array('titre' => 'CHROMATICS', 'auteur' => 'Jean-Michel Delatronchette'),
    7 => array('titre' => 'DIGITAL NEGATIVE', 'auteur' => 'Hamish McKee'),
    8 => array('titre' => 'BLAST FROM THE PAST', 'auteur' => 'Juliette Baskerville'),
    9 => array('titre' => 'HURRICANE', 'auteur' => 'Natalie Wellington'),
    10 => array('titre' => 'LA MARÉE ROUGE', 'auteur' => 'Martin Rodriguez'),
    11 => array('titre' => 'ASIMILACION', 'auteur' => 'Angel Sanchez-Fernandez'),
    12 => array('titre' => 'LA GALAXIA GIALLA', 'auteur' => 'Eduardo Tancredi'),
    13 => array('titre' => 'PUFFY AMALGAMATE', 'auteur' => 'Sandro De Blasi'),
    14 => array('titre' => 'MIRAGE', 'auteur' => 'Stéphanie Kaiser'),
    15 => array('titre' => 'BLAUE GELBE MUSTER', 'auteur' => 'Adelheid Von Schreiber')
);

// Boucle pour générer le code HTML
foreach ($oeuvres as $oeuvre) {
    $titre = $oeuvre['titre'];
    $auteur = $oeuvre['auteur'];

    echo "
    <div class='oeuvre'>
        <h2>$titre</h2>
         <p><strong>Auteur :</strong> $auteur</p>
    </div>
    ";
}
?>