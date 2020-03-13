<?php
require_once ('config.php');
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo "<pre>";
var_dump($usuarios);
echo "</pre>";
?>