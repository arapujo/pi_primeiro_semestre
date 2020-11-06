<?php
	session_start(); 
    include('conexão.php');
   
//Pegandos as informaçõs do cadastro adicional
$email_secundario = $_POST['email_secundario'];
$nascimento = $_POST['dNascimento'];
$cpf = $_POST['CPF'];
$telefone = $_POST['Tel'];
$celular = $_POST['Cel'];
$cep = $_POST['CEP'];
$rua = $_POST['rua'];
$num = $_POST['num'];
$comp = $_POST['compl'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$pais = $_POST['pais'];
$form = $_POST['form'];
$tipo_form = $_POST['tForm'];
$inst = $_POST['iEnsino'];

// comando para cadastrar as informações no banco
$sql = "INSERT INTO usuario (email_secundario, data_nascimento, cpf, telefone, celular, cep, logradouro, numero, bairro, cidade, complemento, estado, pais, formacao, tipo_formacao, instituicao) VALUES 
('$email_secundario', '$nascimento', '$cpf', '$telefone', '$celular', '$cep', '$rua' , '$num', '$comp', '$bairro', '$cidade', '$estado','$pais', '$form', '$tipo_form', '$inst' )";

//rodando o comando e retornando mensagem de cadastro realizado
if($conexao->query($sql) === true){
	header('Location: ../pages/aluno/cadastro-sucesso.php');
}

//encerrando a conexão com o banco e redirecionado de volta pra pagina de cadastro
$conexao->close();

exit;
?>