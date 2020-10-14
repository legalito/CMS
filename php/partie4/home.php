<?php
  session_start();
  if(empty($_SESSION['mail'])){
    header('Location: ../erreur.php');
  }
  echo 'Bienvenue, ' . $_SESSION['first_name'] . " " . $_SESSION['last_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link type="text/css" rel="stylesheet" href="stylesheet.css">
  <title>Title</title>
</head>

<body>
<div class="grid">
  <div class="menu">
    <li><?php
    echo $_SESSION['first_name'] . " " . $_SESSION['last_name'];
      ?></li>
    <li><?php
      include_once ("../db.php");
      $resultat = get_informations_from_db('SELECT * FROM articles WHERE Id = 1');
      echo $resultat['titre'];
      ?></li>
    <li><a href="#" title="voir le profil">Profil</a></li>
    <li><a href="#" title="éditer le profil">Editer le profil</a></li>
    <li><a href="#" title="publier un article">Ajouter un article</a></li>
    <li><a href="#" title="voir les articles publiés">Articles publiés</a></li>
    <li><a href="#" title="voir les recommendations">Recommendations</a></li>
  </div>
  <div class="article_titre">
    <a> information sur l'article</a>
  </div>
  <div class="article"></div>
</div>


<a href="../signout.php">Se déconnecter</a>

</body>

</html>
