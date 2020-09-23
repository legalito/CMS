

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Title</title>
</head>

<body>
  <div class="fullscreen">
    <div class="nav">  <button onclick="location.href='../partie3/login.html'"> Se connecter </button></div>
    <div class="containerPreview">
        <h3> Articles dernièrement ajoutés </h3>
        <div class="nom">
          <ul>
            <?php

            include_once('../db.inc.php');

            $db = new PDO("$server:host=$host;dbname=$dbname", $user, $password);

            $reponse = $db->query('SELECT * FROM articles ORDER BY Id DESC ');

            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            echo '<li><a href="#'. $donnees['id']. '"'. $donnees['titre'] . ' </li> <br />';

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
      $reponse = $db->query('SELECT * FROM articles ORDER BY titre ASC');

      while ($donnees = $reponse->fetch())
      {

        echo '<div class="article" id='. $donnees['Id'].'">
          <h1>' . $donnees['titre'] . '</h1>'
        .'<img src="../../photos/' . $donnees['Id']. '.jpg" style="width: 10vw;">
          <p> '.$donnees['resume'].' </p>
        </div>';


          }
          $reponse->closeCursor(); // Termine le traitement de la requête
      ?>

      </div>

    <div class="footer"> 2020. Tous les droits sont réservés . Tous les logos et marques de commerce appartiennent à leurs propriétaires respectifs. </div>
  </div>
</body>
</html>
