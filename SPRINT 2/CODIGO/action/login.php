<?php

include("conexão.php");

//Pegando o email e senha do usuario
$email = preg_replace('#[^a-z0-9]#i', '', $_POST['user_email']);
$senha = preg_replace('#[^a-z0-9]#i', '', md5($_POST['password']));

//verificando se o email digitado e a senha corresponde ao usuario
$verifica = "SELECT usuario_id, usuario FROM usuario WHERE email = '{$email}' AND senha = '{$senha}'; ";
$result = mysqli_query($conexao,$verifica);
$row = mysqli_num_rows($result);

//se o email e a senha estiverem correta retorna o valor de 1 e loga na conta
if ($row == 1){
	header('Location: ../pages/aluno/index.php');
	
}
//se o usuario não existe, ou alguma das informações estiver errada retorna erro
else{
	header('Location: ../pages/login/login-falha.php');
}

?>