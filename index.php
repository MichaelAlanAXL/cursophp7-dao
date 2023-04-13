<?php 

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//////////////////////////////////////////////////////////////////////////////////
//Carrega uma lista
//$lista = Usuario::getlist();
//echo json_encode($lista);

/////////////////////////////////////////////////////////////////////////////////
//Carrega lista pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

/////////////////////////////////////////////////////////////////////////////////
//Carrega usuário usando login e senha
$usuario = new Usuario();
$usuario->login("user", "12345");
echo $usuario;

?>