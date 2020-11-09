<?php 
	session_start();
	if(!isset($_SESSION['itens']))
	{
		$_SESSION['itens'] = array();

	}
	/*adiciona ao carrinho*/
	if(isset($_GET['add']) && $_GET['add'] == "carrinho")
	{
		$idProduto = $_GET['id'];
		if (!isset($_SESSION['itens'][$idProduto]))
		{
			$_SESSION['itens'][$idProduto] = 1;
		}else{
			$_SESSION['itens'][$idProduto] += 1;
		}
	}

	/*exibir o carrinho*/								

	$conexao = new PDO('mysql:host=localhost;dbname=cybermind',"root","");
	$total = 0;
	$_SESSION['dados'] = array();

	foreach($_SESSION['itens'] as $idProduto => $quantidade)
	{
	$select = $conexao->prepare("SELECT * FROM produto WHERE id_produto=?");
	$select->bindParam(1,$idProduto);
	$select->execute();
	$produto = $select->fetchAll();
	$subtotal = $quantidade * $produto[0]['valor_produto'];
	$total = $total + $produto[0]['valor_produto'] * $quantidade;
	?>

										<tr>
	<td data-th="Product">
		<div class="row" >
			<div class="col-sm-2 hidden-xs"><img src="../../assets/img/logica.jpg" width="100px" height="100px" alt="..." class="img-responsive"/></div>
			<div class="col-sm-10">
				<h4 class="nomargin titulo-produto"><?php echo $produto[0]["nome_produto"] ?> </h4>
				<p class="descricao-produto"> <?php echo $produto[0]['descricao_produto'] ?></p>
			</div>
		</div>
		<td data-th="Preço"><?php echo 'R$'.number_format($produto[0]["valor_produto"],2,",",".") ?></td>
		<td data-th="Quantidade">
			<p><?php echo $quantidade ?></p>
		</td>			
		</td>
		<td data-th="Subtotal" class="text-center"><?php echo 'R$'.number_format($subtotal,2,",","."); ?></td>
		<td class="actions" data-th="">
		
		<button class="btn btn-danger btn-sm"><i><?php echo '<a href="../../action/remover.php?remover=carrinho&id='.$idProduto.'">Remover</a>' ?></i></button>
	</td>
	</tr>	
	<?php
		array_push(
				$_SESSION['dados'],
				array
				(
					'id_Produto' => $idProduto,
					'quantidade' => $quantidade,
					'preco' => $produto[0]['valor_produto'],
					'total' => $subtotal
				)
			); /*array push*/				

	}

		echo'<pre>';
		var_dump($_SESSION['dados']);
		echo '</pre>';								
	?>