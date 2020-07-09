<?php 
//aula 63, 64, 65
require_once("config.php");

//carrega apenas um usuário
//$usuario = new Usuario();
//$usuario->loadById(10);
//echo $usuario;

//carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("chri");
//echo json_encode($search);

//carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("chri", "patamar");
//echo $usuario;

//Criando um novo usuário
//$aluno = new Usuario("christian.murata", "@P123456");
//$aluno->insert();
//echo $aluno;

//Altera o login e senha do ID carregado anteriormente
$usuario = new Usuario();
$usuario->loadById(10);
$usuario->update("japones", "1234");
echo $usuario;

?>