<?php

require_once("config.php");

$lista = Usuario::search("aio");
echo json_encode($lista);

?>