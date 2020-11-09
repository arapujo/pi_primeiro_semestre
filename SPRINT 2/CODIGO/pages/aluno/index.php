<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>CyberMind</title>
<link rel="stylesheet" href="../../styles/css/aluno.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>

<?php
    include ('../../action/header.php')
 ?>

<!-- Material -->
	
<div class="card text-center">
 
  <div class="card-body">
    <h5 class="card-title">Boas Vindas ao CyberMind!</h5>
    <a href="aluno-material.php" class="btn btn-primary">Meu material</a>
  </div>
</div>

<!-- Jogos -->

<section class="card-games" id="games">
    <div class="container-game">
		<div class="narrow text-center">
			<div class="col-12">
				<h3 class="heading-game">Confira mais conteúdos:</h3>
				<div class="heading-underline"></div>
			</div>
		</div>
        <div class="row">
            <div class="col-md-4">
                <div class="card-content-game">
                    <div class="card-img">
                        <img src="../../assets/img/logica.jpg" alt="">
                    </div>
                    <div class="card-desc">
						<h3>Quiz Hardware</h3>
						<br>
                        <p>Teste os seus conhecimentos em hardware.</p>
                            <a href="../curso/logica.php" class="btn-card">Ver</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content-game">
                    <div class="card-img">
                        <img src="../../assets/img/hardware.jpg" alt="">
                    </div>
                    <div class="card-desc">
                    <h3>Quiz Hardware</h3>
						<br>
                        <p>Teste os seus conhecimentos em hardware.</p>
                        </p>
                            <a href="../curso/hardware.php" class="btn-card">Ver</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content-game">
                    <div class="card-img">
                        <img src="../../assets/img/arquitetura.jpg" alt="">
                    </div>
                    <div class="card-desc">
                    <h3>Quiz Hardware</h3>
						<br>
                        <p>Teste os seus conhecimentos em hardware.</p>
                            <a href="../curso/arquitetura.php" class="btn-card">Ver</a>   
                    </div>
                </div>
			</div>
        </div>
    </div>
</section>

<!-- Curso -->
<section class="details-card" id="curso">
    <div class="container">
		<div class="narrow text-center">
			<div class="col-12">
				<h3 class="heading">Confira nossos materiais:</h3>
			</div>
		</div>
        <div class="row">
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="../../assets/img/logica.jpg" alt="">
                    </div>
                    <div class="card-desc">
						<h3>Lógica de Programação e Algoritmos</h3>
						<br>
                        <p>Aprenda o que é variáveis, funcões, instruções e muito mais. Você se tornará apto para escrever os seus próprios programas.</p>
                            <a href="../curso/logica.php" class="btn-card">Ver</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="../../assets/img/hardware.jpg" alt="">
                    </div>
                    <div class="card-desc">
						<h3>Hardware</h3>
						<br>
                        <p>Aprenda a fazer manutenções, reparos e diagnósticos, como manusear de forma correta os componentes, protocolos de seguranças, como funciona redes de computadores e boas práticas.
                        </p>
                            <a href="../curso/hardware.php" class="btn-card">Ver</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="../../assets/img/arquitetura.jpg" alt="">
                    </div>
                    <div class="card-desc">
						<h3>Arquitetura e Organização de computadores</h3>
						<br>
                        <p>Aprenda a estrutura e organização do hardware, como funciona um computador, memórias e registradores e sistemas numéricos. </p>
                            <a href="../curso/arquitetura.php" class="btn-card">Ver</a>   
                    </div>
                </div>
			</div>
			<div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="../../assets/img/ingles.jpg" alt="">
                    </div>
                    <div class="card-desc">
						<h3>Inglês</h3>
						<br>
                        <p>Aprenda os tempos verbais, vocabulário, como se aprensentar e conversação.</p>
                            <a href="../curso/ingles.php" class="btn-card">Ver</a>   
                    </div>
                </div>
			</div>
			<div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
						<img src="../../assets/img/matematica.jpg" alt="">
                    </div>
                    <div class="card-desc">
						<h3>Matemática discreta</h3>
						<br>
                        <p>Aprenda lógica matématica, como montar tabela da verdade e o que são grafos.</p>
                            <a href="../curso/matematica.php" class="btn-card">Ver</a>   
                    </div>
                </div>
			</div>
			<div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="../../assets/img/portugues.jpg" alt="">
                    </div>
                    <div class="card-desc">
						<h3>Português</h3>
						<br>
                        <p>Aprenda concordância nominal e verbal, o que são substantivos e adjetivos e pontuação.</p>
                            <a href="../curso/portugues.php" class="btn-card">Ver</a>   
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

</body>
</html>                            