<?php
// Définir les œuvres dans un tableau associatif
$oeuvre = array (
    1 => array ('titre' => 'DODOMU', 'auteur' => 'Mia Tozerski','image'=> 'img/clark-van-der-beken.png','link'=>'oeuvre-1.php'),
    2 => array('titre' => 'AASHAAHEEN BAADAL', 'auteur' => 'Anaisha Devi','image'=> 'img/dan-cristian-padure.png' ,'link'=>'oeuvre-2.php'),
    3 => array('titre' => 'NIGHTLIFE TRAFFIC', 'auteur' => 'Andrew Forsythe','image' =>'img/fly-d.png','link'=>'oeuvre-3.php'),
    4 => array('titre' => 'LE REFUGE DE L HAVRE', 'auteur' => 'Simon Pelletier','image'=>'img/jazmin-quaynor.png','link'=>'oeuvre-4.php'),
    5 => array('titre' => 'RED WASHOVER', 'auteur' => 'Kit Van Der Borght','image'=>'img/orfeas-green.png','link'=>'oeuvre-5.php'),
    6 => array('titre' => 'CHROMATICS', 'auteur' => 'Jean-Michel Delatronchette','image'=>'img/pawel-czerwinski-2.png','link'=>'oeuvre-6.php'),
    7 => array('titre' => 'DIGITAL NEGATIVE', 'auteur' => 'Hamish McKee','image'=>'img/pawel-czerwinski-3.png','link'=>'oeuvre-7.php'),
    8 => array('titre' => 'BLAST FROM THE PAST', 'auteur' => 'Juliette Baskerville','image'=>'img/pawel-czerwinski.png','link'=>'oeuvre-8.php'),
    9 => array('titre' => 'HURRICANE', 'auteur' => 'Natalie Wellington','image'=>'img/steve-johnson-2.png','link'=> 'oeuvre-9.php'),
    10 => array('titre' => 'LA MARÉE ROUGE', 'auteur' => 'Martin Rodriguez','image'=>'img/steve-johnson-3.png','link'=>'oeuvre-10.php'),
    11 => array('titre' => 'ASIMILACION', 'auteur' => 'Angel Sanchez-Fernandez','image'=>'img/steve-johnson-4.png','link'=>'oeuvre-11.php'),
    12 => array('titre' => 'LA GALAXIA GIALLA', 'auteur' => 'Eduardo Tancredi','image'=>'img/steve-johnson-5.png','link'=>'oeuvre-12.php'),
    13 => array('titre' => 'PUFFY AMALGAMATE', 'auteur' => 'Sandro De Blasi','image'=>'img/steve-johnson-6.png','link'=>'oeuvre-13.php'),
    14 => array('titre' => 'MIRAGE', 'auteur' => 'Stéphanie Kaiser','image'=>'img/steve-johnson.png','link'=>'oeuvre-14.php'),
    15 => array('titre' => 'BLAUE GELBE MUSTER', 'auteur' => 'Adelheid Von Schreiber','image'=>'img/victor-grabarczyk.png','link'=>'oeuvre-15.php'),
);


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

