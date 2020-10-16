<?php
	//conexão com o banco de dados e os dados necessario pra conectar

	define('HOST', '127.0.0.1:3306');
	define('USUARIO', 'root');
	define('SENHA', '');
	define('DB', 'cybermind');

	$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Ñão foi possivel conectar');

?>