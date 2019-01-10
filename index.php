<?php
require_once ("config.php");

/*$sql = new SQL();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/

//Carrega um usuário
//$root = new Usuario();
//$root->loadById(4);
//echo $root;

/*Carrega uma lista de usuários
$lista = Usuario::getList();
echo json_encode($lista);*/

/*Carrega uma lista de usuários buscando pelo login
$search = Usuario::search("ro");
echo json_encode($search);*/

//Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("root", "!@#$");
//$usuario->login("root", "!@#$123"); //Usuário errado, senha está errado.

echo $usuario;
?>