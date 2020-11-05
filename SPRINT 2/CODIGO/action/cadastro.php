<?php

include("conexão.php");

//Pegandos as informaçõs do cadastro
$nome = preg_replace('#[^a-z0-9]#i', '', $_POST['user_name']);
$sobrenome = preg_replace('#[^a-z0-9]#i', '', $_POST['last_name_user']);
$usuario = preg_replace('#[^a-z0-9]#i', '', $_POST['user_nickname']);
$email = preg_replace('#[^a-z0-9]#i', '', $_POST['user_email']);
$senha = preg_replace('#[^a-z0-9]#i', '', md5($_POST['password']));
$senha_verifica = preg_replace('#[^a-z0-9]#i', '', md5($_POST['password-checkout']));

//Verificando se o e-mail já existe no cadastro
$sql1 = "SELECT count(*) as total from usuario where email = '$email'";
$result = mysqli_query($conexao, $sql1);
$row = mysqli_fetch_assoc($result);

//validação se as duas senhas digitadas são iguais
if($senha != $senha_verifica){
	header('Location: ../pages/login/cadastro-falha-senha.php');
	exit;
}

//Mensagem de erro caso ja exista um email registrado
if($row['total'] == 1){
	$_SESSION['usuario_existe'] = true;
	header('Location: ../pages/login/cadastro-falha-email.php');
	exit;
}

// comando para cadastrar as informações no banco
$sql = "INSERT INTO usuario (usuario, senha, nome, sobrenome, email, data_cadastro) VALUES ('$usuario', '$senha', '$nome', '$sobrenome', '$email', NOW() )";

//rodando o comando e retornando mensagem de cadastro realizado
if($conexao->query($sql) === true){
	$_SESSION['status_cadastro'] = true;
	header('Location: ../pages/login/cadastro-sucesso.php');
}

//encerrando a conexão com o banco e redirecionado de volta pra pagina de cadastro
$conexao->close();

exit;
?>