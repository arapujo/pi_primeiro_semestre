<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Carrinho</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../../styles/css/carrinho.css"/>
	<link rel="stylesheet" type="text/css" href="../../styles/css/main.css"/>
	<link rel="stylesheet" type="text/css" href="../../styles/css/fixed.css"/>
</head>

<body data-spy="scroll" data-target="#navbarResponsive">


<!-- Home  -->
<div id="home">
	<!--- Navegação --->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		<a class="navbar-brand" href="../../index.html"><img src="../../assets/img/logo.png"></a>
		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarResponsive">
			
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="../../pages/login/index.html"><button class="nav-button-login" type="button">Login</button> </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="car.html"><img src="../../assets/icon/shopping-cart-icon.png" width="40px" height="40px"></a>
				</li>
			</ul>
		</div>
	</nav>
	<!--- End Navigation -->	
</div>

<div class="container-mobile">
	<h1 class="carrinho-titulo">Meu carrinho</h1>
	<div class="curso-mobile">
		<div class="container">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Produto</th>
							<th style="width:10%">Preço</th>
							<th style="width:8%">Quantidade</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="../../assets/img/logica.jpg" width="100px" height="100px" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin titulo-produto">Lógica de programação</h4>
										<p class="descricao-produto"> Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
									</div>
								</div>
							</td>
							<td data-th="Preço">R$1.99</td>
							<td data-th="Quantidade">
								<p>1</p>
							</td>
							<td data-th="Subtotal" class="text-center">1.99</td>
							<td class="actions" data-th="">
								
								<button class="btn btn-danger btn-sm"><i>Remover</i></button>								
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong>Total 1.99</strong></td>
						</tr>
						<tr>
							<td><a href="../../index.html" class="btn btn-warning botao-continua-compra"><i class="fa fa-angle-left"></i> Continuar comprando</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total R$20,00</strong></td>
							<td><a href="identificacao.html" class="btn btn-success btn-block botao-finaliza-compra">Finalizar compra <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
</div>
  
<!-- Footer -->
<footer>
	<div id="contact" class="offset">
		<div class="row justify-content-center">
			<div class="col-md-5 text-center">
				<img src="../../assets/img/logo.png">
				<p><a href="#">Sobre nós</a></p>
				<p><a href="#">Fale conosco</a></p>
				<a href="#" target="_blank"><img class="footer-icon" src="../../assets/icon/facebook-icon.png"></a>
				<a href="#" target="_blank"><img class="footer-icon"src="../../assets/icon/twitter-icon.png"></a>
				<a href="#" target="_blank"><img class="footer-icon"src="../../assets/icon/instagram-icon.png"></a>
			</div>
			<hr class="socket">
			&copy; CyberMind.
		</div>
</footer>
	
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>