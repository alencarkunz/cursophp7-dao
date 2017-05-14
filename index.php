<?php

require_once('config.php');

//$sql = new Sql();
//$usuarios = $sql->select('SELECT * FROM tb_usuarios');
//echo json_encode($usuarios);

//$usuario = new Usuario();
//$usuario->loadById(2);
//echo $usuario;

//echo json_encode(Usuario::getList());

//$search = Usuario::search('u');
//echo json_encode($search);

$usuario = new Usuario();
$usuario->login('user','12345');
echo $usuario;

?>
