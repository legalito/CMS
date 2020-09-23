

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Title</title>
</head>

<body>
  <div class="fullscreen">
    <div class="nav"> </div>
    <div class="containerPreview">
        <h3> Articles dernièrement ajoutés </h3>
        <div class="nom">
          <ul>
            <?php

            include_once('../db.inc.php');

            $db = new PDO("$server:host=$host;dbname=$dbname", $user, $password);

            $reponse = $db->query('SELECT * FROM articles');

            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            ?>

           <li> <?php echo $donnees['titre']; ?></li> <br />

            <?php
          }



          $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
          </ul>
        </div>
    </div>
    <div class="containerArticles">
      <input type="search" id="site-search" name="q"
             aria-label="Search through site content" placeholder="Rechercher un article">

      <button> Valider </button>
      <?php
      $image = $db->query('SELECT id FROM articles WHERE titre="Café"');
      $donnees = $image->fetch();

      ?>
      <div class="article1">
        <h1> </h1>
          <img src="../../photos/<?php echo $donnees['id'] ?>.jpg" style="width: 10vw;">
      </div>
      </div>
    </div>
    <div class="footer"> 2020. Tous les droits sont réservés . Tous les logos et marques de commerce appartiennent à leurs propriétaires respectifs. </div>
  </div>
</body>
</html>
