<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pagamento</title>
	<link rel="stylesheet" href="../../bootstrap-4.1.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../styles/css/pagamento.css"/>
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
	<!--- Fim Navegação -->	
</div>

<div class="container-pagamento">
	<div class="box-pagamento">
		<div class="box-1" >
			<h5 class="titulo-pagamento">Pagamento</h5>	 
			 <div class="col-md-8 order-md-1 box-identificacao">
				<form name="formPagamento" action="" id="formPagamento">
					
					<div class="mb-3">
						<label>Nome</label>                            
						<input type="text" name="pagamentoNome" id="pagamentoNome" placeholder="Nome completo" class="form-control" required>                        
					</div>

					<div class="mb-3">
						<label>CPF</label>                            
						<input type="text" name="pagamentoCpf" id="pagamentoCpf" placeholder="xxxxxxxxxx"  class="form-control" required>                       
					</div>

					<h5 class="mb-3">Endereço</h5>

					<div class="row">
						<div class="col-md-9 mb-3">
							<label>Rua</label>
							<input type="text" name="pagamentoRua" class="form-control" id="pagamentoRua" placeholder="Nome da rua" vrequired>
						</div>
						<div class="col-md-3 mb-3">
							<label>Número</label>
							<input type="text" name="pagamentoNumero" class="form-control" id="pagamentoNumero" placeholder="10"  required>
						</div>
					</div>

					<div class="row">
						<div class="col-md-5 mb-3">
							<label>Bairro</label>
							<input type="text" name="pagamentoBairro" class="form-control" id="pagamentoBairro" placeholder="Nome do bairro"  required>
						</div>
						<div class="col-md-5 mb-3">
							<label>Cidade</label>
							<input type="text" name="pagamentoCidade" class="form-control" id="pagamentoCidade" placeholder="Nome da cidade"  required>
						</div>
						<div class="col-md-2 mb-3">
							<label>Estado</label>
							<select name="pagamentoEstado" class="custom-select d-block w-100" id="pagamentoEstado" required>
								<option value="">Selecione</option>
								<option value="AC">AC</option>
								<option value="AL">AL</option>
								<option value="AP">AP</option>
								<option value="AM">AM</option>
								<option value="BA">BA</option>
								<option value="CE">CE</option>
								<option value="DF">DF</option>
								<option value="ES">ES</option>
								<option value="GO">GO</option>
								<option value="MA">MA</option>
								<option value="MT">MT</option>
								<option value="MS">MS</option>
								<option value="MG">MG</option>
								<option value="PA">PA</option>
								<option value="PB">PB</option>
								<option value="PR">PR</option>
								<option value="PE">PE</option>
								<option value="PI">PI</option>
								<option value="RJ">RJ</option>
								<option value="RN">RN</option>
								<option value="RS">RS</option>
								<option value="RO">RO</option>
								<option value="RR">RR</option>
								<option value="SC">SC</option>
								<option value="SP">SP</option>
								<option value="SE">SE</option>
								<option value="TO">TO</option>
							</select>
						</div>
					</div>

					<div class="mb-3">
						<label>CEP</label>
						<input type="text" name="shippingAddressPostalCode" class="form-control" id="pagamentoCep" placeholder="xxxxxxxx" required>
					</div>

					<h4 class="mb-3">Escolha forma de pagamento</h4>

					<div class="custom-control custom-radio">
						<input type="radio" name="paymentMethod" class="custom-control-input" id="creditCard" value="creditCard" onclick="tipoPagamento('creditCard')">
						<label class="custom-control-label" for="creditCard">Cartão de Crédito</label>
					</div>

					<div class="custom-control custom-radio">
						<input type="radio" name="paymentMethod" class="custom-control-input" id="boleto" value="boleto" onclick="tipoPagamento('boleto')">
						<label class="custom-control-label" for="boleto">Boleto</label>
					</div>

					<div class="mb-3 creditCard">
						<label class="creditCard">Quantidade de parcelas</label>
						<div class="input-group">
							<input type="text"  name="numCartao" class="form-control" id="numCartao">
							<div class="input-group-prepend">
								<span class="input-group-text bandeira-cartao creditCard">   </span>
							</div>
						</div>
						<small id="numCartao" class="form-text text-muted">
							Preencha para ver o parcelamento
						</small>
					</div>
					
					<div class="mb-3 creditCard">
						<label class="creditCard">Nome do titular</label>
						<input type="text" name="titularCartao" class="form-control" id="titularCartao" placeholder="Nome igual ao escrito no cartão" >
						
					</div>

					<div class="row creditCard">
						<div class="col-md-6 mb-3 creditCard">
							<label class="creditCard">Mês de Validade</label>
							<input type="text" name="mesValidade" id="mesValidade" maxlength="2"   class="form-control creditCard">
						</div>
						<div class="col-md-6 mb-3 creditCard">
							<label class="creditCard">Ano de Validade</label>
							<input type="text" name="anoValidade" id="anoValidade" maxlength="4"  class="form-control creditCard">
						</div>
					</div>

					<div class="mb-3 creditCard">                            
						<label class="creditCard">CVV do cartão</label>
						<input type="text" name="cvvCartao" class="form-control creditCard" id="cvvCartao" maxlength="3" >
						<small id="cvvCartao" class="form-text text-muted creditCard">
							Código de 3 digitos impresso no verso do cartão
						</small>
					</div>
					<a href="../carrinho/confirmacao.html"><button class="btn-pagamento" type="button">Finalizar</a></button>
				</form>
			</div>
		</div>
	</div>
	</div>
  </div>
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

<script type="text/javascript" src="../../js/JQuery3.3.1.js"></script>
<script type="text/javascript" src="../../js/pagamento.js"></script>

</body>
</html>
