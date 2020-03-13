<?php
require_once ('config.php');
//Carrega um usuario
//$root = new Usuario();
//$root->loadById(3);

//Carrega lista
//$root = Usuario::getList();

//Carrega lista buscando por login
//$root = Usuario::search("D");

//Consulta login e senha
$root = new Usuario();
$root->login("Acalla","qwerty");
var_dump($root);
?>