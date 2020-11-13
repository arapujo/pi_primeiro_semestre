<?php
	session_start();

	if(isset($_SESSION['usuario'])){
	
	foreach ($_SESSION['dados'] as $produtos) {
		$conexao = new PDO('mysql:host=localhost;dbname=cybermind',"root","");
		$insert = $conexao->prepare("INSERT INTO pedidos () VALUES (NULL,?,?,?,?,?)");
		$insert ->bindParam(1,$produtos['id_produto']);
		$insert ->bindParam(2,$produtos['quantidade']);
		$insert ->bindParam(3,$produtos['preco']);
		$insert ->bindParam(4,$produtos['total']);
		$insert ->bindParam(5,$produtos['comprador']);

		if($insert -> execute()){
			header('Location: ../pages/carrinho/confirmacao.php');
		}else{
			header('Location: ../pages/carrinho/pagamento.php');
		}
	}
	}else{
		header('Location: ../pages/carrinho/identificacao.php');
		
	}
?>