<?php

require_once("config.php");

$user = new Usuario();
$user->loadById(6);

$user->update("professor", "951753");

echo $user;

?>