<?php

include_once('db.inc.php');

$db = new PDO("$server:host=$host;dbname=$dbname", $user, $password);

//$sql = "SELECT * FROM articles;";

/*foreach ($db->query($sql) as $ligne){
  echo $ligne['titre'];
}*/

function get_informations_from_db($sql){
  $image = $GLOBALS['db']->query($sql);
  $donnees = $image->fetch();
  return $donnees;
}

?>
