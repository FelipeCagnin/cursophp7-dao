<?php

require_once("config.php");

$user = new Usuario();
$user->loadById(5);

$user->delete();

echo $user;

?>