<?php

require_once('config.php');

//banco de dados
//$sql = new Sql();
//$usuarios = $sql->select('SELECT * FROM tb_usuarios');
//echo json_encode($usuarios);

// buscar
//$usuario = new Usuario();
//$usuario->loadById(2);
//echo $usuario;

//echo json_encode(Usuario::getList());

// buscar
//$search = Usuario::search('u');
//echo json_encode($search);

//login
//$usuario = new Usuario();
//$usuario->login('user','12345');
//echo $usuario;

// insert
//$aluno = new Usuario('aluno','@luno');
//$aluno->insert();
//echo $aluno;

// alterar
//$usuario = new Usuario();
//$usuario->loadById(7);
//$usuario->update('professor','senhaprof');
//echo $usuario;

$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;

?>
