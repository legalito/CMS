<?php

include_once('db.inc.php');

$db = new PDO("$server:host=$host;dbname=$dbname", $user, $password);

//$sql = "SELECT * FROM articles;";

/*foreach ($db->query($sql) as $ligne){
  echo $ligne['titre'];
}*/

function get_unique_infos($sql){
  foreach ($GLOBALS['db']->query($sql) as $ligne){}
  return $ligne;
}

?>
