

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.php">
  <title>Title</title>
</head>
<body>
  <div class="fullscreen">
    <div class="nav"> </div>
    <div class="containerPreview">
        <h3> Articles dernièrement ajoutés </h3>
        <div class="nom">
          <?php
            include_once ("../db.php");
            $result = get_unique_infos("SELECT nom FROM articles");
            echo $result['nom'];
          ?>
        </div>
    </div>
    <div class="containerArticles">
      <input type="search" id="site-search" name="q"
             aria-label="Search through site content" placeholder="Rechercher un article">

      <button> Valider </button>
      <div class="article1">
          <img src="../../icon.png">
      </div>
    </div>
    <div class="footer"> 2020. Tous les droits sont réservés . Tous les logos et marques de commerce appartiennent à leurs propriétaires respectifs. </div>
  </div>
</body>
</html>
