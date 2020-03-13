<?php
require_once ('config.php');
$root = new Usuario();
$root->loadById(3);

var_dump($root);
?>