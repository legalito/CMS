

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Title</title>
</head>

<body>
  <div class="fullscreen">
    <div class="nav"> <img src="../../photos/grandmere_cafe_logo.png" style="width: 5vw"> <button style="margin-left: 15vw" id="connexion" onclick="location.href='../partie3/login.html'"> Se connecter </button></div>
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
            echo '<li onclick="afficheInputUtilisateur()"><a href="#'. $donnees['Id']. '">'. $donnees['titre'] . ' </a></li> <br>';

          }



          $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
          </ul>
        </div>
    </div>
    <div class="containerArticles">
      <form action="index.php" method="get">
        <input onclick="afficheInputUtilisateur()" type="search" id="site-search" name="requeteSearch"
               aria-label="Search through site content" placeholder="Rechercher un article"  >
        <button onclick="afficheInputUtilisateur()"> <img src="../../photos/recherche_logo_focused.png" style="width: 1vw; margin-top: 2px; border-radius: 50px" "> </button>
      </form>



      <?php

      $requete = $_GET['requeteSearch'];

      $reponse = $db->query('SELECT * FROM articles WHERE titre LIKE "%'.$requete.'%" ORDER BY titre ASC ');


       while ($donnees = $reponse->fetch())
      {

        echo '<div class="article" id="'. $donnees['Id'].'">
          <h1>' . $donnees['titre'] . '</h1>'
        .'<img src="../../photos/' . $donnees['Id']. '.jpg" style="width: 10vw;">
          <p> '.$donnees['resume'].' </p>';
        $variableThibaultOnsaitPas = "'../partie2/article.php?id_article=".$donnees['Id'];
          echo '<button onclick="window.location.href='. $variableThibaultOnsaitPas ."'".'"'.'> Afficher  </button>

        </div>';




          }
          $reponse->closeCursor(); // Termine le traitement de la requête
      ?>

      </div>

    <div class="footer"> 2020. Tous les droits sont réservés . Tous les logos et marques de commerce appartiennent à leurs propriétaires respectifs. </div>
  </div>
  <script>
    function afficheInputUtilisateur() {
      return (document.getElementById('site-search').value);
    }
  </script>
</body>
</html>
