<?php

include_once('db.inc.php');

$db = new PDO("$server:host=$host;dbname=$dbname", $user, $password);

function get_informations_from_db($sql){
  $image = $GLOBALS['db']->query($sql);
  return $image->fetch();
}

?>
