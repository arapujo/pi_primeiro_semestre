<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CyberMind</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles/css/home.css"/>
	<link rel="stylesheet" type="text/css" href="styles/css/fixed.css"/>

</head>

<body data-spy="scroll" data-target="#navbarResponsive">

<!-- Home -->
<div id="home">
	<!--- Menu --->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		<a class="navbar-brand" href="#"><img src="assets/img/logo.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="pages/login/index.php"><button class="nav-button-login" type="button">Login</button></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="pages/carrinho/index.php"><img src="assets/icon/shopping-cart-icon.png" width="40px" height="40px"></a>
				</li>
			</ul>
		</div>
	</nav>
	<!--- Fim Menu -->

	<!-- Landing Page Section -->
	<div class="landing">
		<div class="home-wrap">
			<div class="home-inner"></div>
		</div>
	</div>

	<div class="caption text-center">
		<h1>Conheça nossa plataforma</h1>
		<h3>As tecnologias estão mudando todos os dias e o mercado está cada vez mais competitivo, na CyberMind você aprende o que precisa para se destacar.</h3>
		<a class="btn btn-outline-light btn-lg" href="pages/login/cadastro.php">Cadastre-se</a>
	</div>
	<!-- Fim Landing Page Section -->
</div>
<!-- Fim Home -->	

<!-- Features Section -->
<div id="features" class="offset">

	<!--- Jumbotron -->
		
		<div class="jumbotron">
			<div class="narrow text-center">
	
				<div class="col-12">
					<h3 class="heading">Por que escolher nossa plataforma</h3>
					<div class="heading-underline"></div>
				</div>
		
				<div class="row text-center">
					<div class="col-md-4">
						<div class="feature">
							<img src="assets/icon/ytb-icon.png" width="80px">
							<p>Possuímos materiais de textos, vídeos e jogos</p>
						</div>
					</div>
			
					<div class="col-md-4">
						<div class="feature">
							<img src="assets/icon/cash.png" width="80px">
							<h3>Excelentes preços</h3>
							<p>Nossos preços são acessíveis e possuímos opções de assinatura</p>
						</div>
					</div>
			
					<div class="col-md-4">
						<div class="feature">
							<img src="assets/icon/book-icon.png" width="80px">
							<h3>Melhores materiais</h3>
							<p>Aprenda com conteúdos de qualidade e sempre atualizados</p>
						</div>
					</div>
				</div>
	
			</div><!--- Fim Narrow -->
		</div><!--- Fim Jumbotron -->

	</div><!--- Fim Features -->

	<!--- Jumbotron -->

	<div class="jumbotron">
		<div class="narrow text-center">
	
			<div class="col-12">
				<h3 class="heading">Conheça nossos planos</h3>
				<div class="heading-underline"></div>
			</div>
	
			<div class="row">
				<div class="col-md-4">
					<div class="card-content">
						<div class="card-img">
							
						</div>
						<div class="card-desc card1">
							<h3>Plano Trimestral</h3>
							<p>Acesso a todo o conteúdo do site durante o período de 3 meses.</p>
							<p>R$ 139,44 à vista</p> 
							<p>3x de R$ 47, 06</p>
								<a href="pages/carrinho/carrinho_3meses.php" class="btn-card">Assinar</a>   
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card-content card2">
						<div class="card-img">
						</div>
						<div class="card-desc">
							<h3>Plano Semestral</h3>
							<p>Acesso a todo o conteúdo do site durante o período de 6 meses.</p>
							<p>R$ 139, 44 à vista</p> 
							<p>6x de R$ 23, 66</p>
								<a href="pages/carrinho/carrinho_6meses.php" class="btn-card">Assinar</a>   
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card-content card3">
						<div class="card-img">
						</div>
						<div class="card-desc">
							<h3>Unidade</h3>
							<p>Compra de conteúdo por unidade.</p>
							<p>Todos os materiais possuem o preço fixo de:</p> 
							<p>R$ 24,99</p>
								<a href="#cursos" class="btn-card">Materiais</a>   
						</div>
					</div>
				</div>
	
		</div><!--- Fim Narrow -->
	</div><!--- Fim Jumbotron -->

<!-- Curso -->
<section class="details-card" id="cursos">
    <div class="container">
		<div class="narrow text-center">
			<div class="col-12">
				<h3 class="heading">Confira nossos materiais</h3>
				<div class="heading-underline"></div>
			</div>
		</div>
        <div class="row">
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="assets/img/logica.jpg" alt="">
                    </div>
                    <div class="card-desc">
						<h3>Lógica de Programação e Algoritmos</h3>
						<br>
                        <p>Aprenda o que são variáveis, funcões, instruções e muito mais. Você se tornará apto para escrever os seus próprios programas.</p>
                            <a href="pages/curso/logica.php" class="btn-card">Ver</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="assets/img/hardware.jpg" alt="">
                    </div>
                    <div class="card-desc">
						<h3>Hardware</h3>
						<br>
                        <p>Aprenda a fazer manutenções, reparos e diagnósticos, como manusear de forma correta os componentes, protocolos de seguranças, como funciona redes de computadores e boas práticas.
                        </p>
                            <a href="pages/curso/hardware.php" class="btn-card">Ver</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="assets/img/arquitetura.jpg" alt="">
                    </div>
                    <div class="card-desc">
						<h3>Arquitetura e Organização de computadores</h3>
						<br>
                        <p>Aprenda a estrutura e organização do hardware, como funciona um computador, memórias e registradores e sistemas numéricos. </p>
                            <a href="pages/curso/arquitetura.php" class="btn-card">Ver</a>   
                    </div>
                </div>
			</div>
			<div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="assets/img/ingles.jpg" alt="">
                    </div>
                    <div class="card-desc">
						<h3>Inglês</h3>
						<br>
                        <p>Aprenda os tempos verbais, vocabulário, como se aprensentar e conversação.</p>
                            <a href="pages/curso/ingles.php" class="btn-card">Ver</a>   
                    </div>
                </div>
			</div>
			<div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
						<img src="assets/img/matematica.jpg" alt="">
                    </div>
                    <div class="card-desc">
						<h3>Matemática discreta</h3>
						<br>
                        <p>Aprenda lógica matématica, como montar tabela da verdade e o que são grafos.</p>
                            <a href="pages/curso/matematica.php" class="btn-card">Ver</a>   
                    </div>
                </div>
			</div>
			<div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="assets/img/portugues.jpg" alt="">
                    </div>
                    <div class="card-desc">
						<h3>Português</h3>
						<br>
                        <p>Aprenda concordância nominal e verbal, o que são substantivos e adjetivos e pontuação.</p>
                            <a href="pages/curso/portugues.php" class="btn-card">Ver</a>   
                    </div>
                </div>
			</div>
        </div>
    </div>
</section>
  
<!-- Footer -->
<footer>
	<div id="contact" class="offset">

		<div class="row justify-content-center">
			<div class="col-md-5 text-center">
				<img src="assets/img/logo.png">
				<p><a href="sobre.php">Sobre nós</a></p>
				<p><a href="contato.php">Fale conosco</a></p>
				<a href="#" target="_blank"><img class="footer-icon" src="assets/icon/facebook-icon.png"></a>
				<a href="#" target="_blank"><img class="footer-icon"src="assets/icon/twitter-icon.png"></a>
				<a href="#" target="_blank"><img class="footer-icon"src="assets/icon/instagram-icon.png"></a>
			</div>

			<hr class="socket">
			&copy; CyberMind.
		</div>
</footer>

<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!--- Footer -->

</body>
</html>
