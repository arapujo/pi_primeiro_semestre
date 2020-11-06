<?php 
	$conexao = new PDO('mysql:host=localhost;dbname=cybermind',"root","");
	$select = $conexao->prepare('SELECT * FROM produto');
	$select->execute();
	$fetch = $select->fetchAll();

	foreach($fetch as $produto){

		echo 'Nome do produto: '.$produto['nome_produto'].' &nbsp; 
				Quantidade: '.$produto['materia_produto'].'
				<a href="../carrinho/index.php?add=carrinho&id='.$produto['id_produto']
				.'">Adicionar ao carrinho</a><br/>';
	}
 ?>