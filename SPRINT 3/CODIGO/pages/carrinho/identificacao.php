<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Identificação</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../../styles/css/identificacao.css"/>
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

<div class="container-identificacao">
		<div class="box-1" >
			<div class="login-form">
            <h5 class="titulo-identificacao">Identificação</h5>	
            
			<form action="" method="post">
				<h2 class="text-center">Login</h2>   
				<div class="form-group has-error">
					<input type="email" class="form-control" name="user_email" placeholder="Email" required="required">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="password" placeholder="Senha" required="required">
				</div>        
				<div class="form-group">
					<a  href="../manutencao/manutencao.html" type="submit" class="btn btn-primary btn-lg btn-block">Entrar</a></button>
				</div>
				<p><a href="../login/esqueci-senha.html">Esqueceu a senha?</a></p>
			</form>
			<p class="text-center small texto-cadastro"><a href="../login/cadastro.html">Não possui uma conta?Cadastre-se</a></p>   
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
