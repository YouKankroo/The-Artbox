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


   
<?php foreach ($oeuvres as $oeuvre) 
    $titre = $oeuvre['titre'];
    $auteur = $oeuvre['auteur'];
    $image = $oeuvre ['image'];
    $link = $oeuvre 
    echo "<article class = 'oeuvre' >"; 
    echo "<a href = '"
     
   <article class="oeuvre">
                <a href="oeuvre-2.html">
                    <img src="img/pawel-czerwinski-3.png" alt="Aashaaheen Baadal">
                    <h2>Aashaaheen Baadal</h2>
                    <p class="description">Anaisha Devi</p>
                </a>
            </article>

        </div>
    </main>
    <?php include  'The-Artboxfooter.php'; ?>
</body>
</html>