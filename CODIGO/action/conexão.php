<?php
	//conexão com o banco de dados e os dados necessario pra conectar

	define('HOST', 'localhost');
	define('USUARIO', 'root');
	define('SENHA', '');
	define('DB', 'cybermind');

	// conexão com o banco de dados para a hospedagem
	/*define('HOST', 'fdb29.awardspace.net');
	define('USUARIO', '3617349_cybermind');
	define('SENHA', 'PROJETO12345');
	define('DB', '3617349_cybermind');*/

	$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Ñão foi possivel conectar');

?>