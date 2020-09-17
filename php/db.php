<?php

include('db.inc.php');

$db = new PDO("$server:host=$host;dbname=$dbname", $user, $password);

public function get_unique_infos($sql){
  return $this->db->query($sql);
}
