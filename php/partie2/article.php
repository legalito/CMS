<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Article</title>

</head>
<body class="body">
  <div class="nav">
    <img src="../../photos/grandmere_cafe_logo.png" style="height: 4vw" class="logo" alt="Logo">

  </div>
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
          $variableThibaultOnsaitPas = "article.php?id_article=".$donnees['Id'];

          echo '<li onclick="afficheInputUtilisateur()"><a href="'.$variableThibaultOnsaitPas.'"'.'>'. $donnees['titre'] . ' </a></li> <br>';
        }



        $reponse->closeCursor(); // Termine le traitement de la requête
        ?>
      </ul>
    </div>
  </div>
  <div class="Art">
    <div class="art-info">

        <h2><?php
          include_once ("../db.php");
          $result = get_informations_from_db("SELECT * FROM articles WHERE Id = '".$_GET['id_article']."';" );
          echo $result['titre'];
          ?> </h2>
      <p class="art-notes" ><label id="note"><?php echo $result['notes'] ?></label></p>
      <p class="art-resume"><?php echo $result['resume']; ?></p>
      <p class="art-prix">Prix: <?php echo $result['prix']; ?> Livraison GRATUITE en France métropolitaine</p>

    </div>

    <img class="art-img" src="../../photos/<?php echo $result['Id'] ?>.jpg" style="width: 25vw;" >

  </div>

<div class="footer"> 2020. Tous les droits sont réservés . Tous les logos et marques de commerce appartiennent à leurs propriétaires respectifs. </div>

  <script>
    var note = document.getElementById('note').textContent;

    var img = "";
    if (note == 0){

   img =' <img src="../../photos/note/0.jpg" style="height: 2vw" class="logo" alt="Logo">';
    }
    if (note == 1){
      img =' <img src="../../photos/note/1.jpg" style="height: 2vw" class="logo" alt="Logo">';
    }
    if (note == 2){
      img =' <img src="../../photos/note/2.jpg" style="height: 2vw" class="logo" alt="Logo">';
    }
    if (note == 3){
      img =' <img src="../../photos/note/3.jpg" style="height: 2vw" class="logo" alt="Logo">';
    }
    if (note ==4){
      img =' <img src="../../photos/note/4.jpg" style="height: 2vw" class="logo" alt="Logo">';
    }
    if (note ==5){
      img =' <img src="../../photos/note/5.jpg" style="height: 2vw" class="logo" alt="Logo">';
    }
    document.getElementById('note').innerHTML = img;


  </script>
</body>
</html>
