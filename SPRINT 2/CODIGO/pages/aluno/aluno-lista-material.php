<?php
 session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>CyberMind - Material</title>
<link rel="stylesheet" href="../../styles/css/aluno-lista-material.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
<div class="bs-menu">
    <nav class="navbar navbar-expand-md navbar-light  menu-bar">
        <a href="index.php" class="navbar-brand"><img class="logo-site" src="../../assets/img/logo.png"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                <a href="../carrinho/index.php" class="nav-link"><img class="icon-carrinho" src="../../assets/icon/shopping-cart-icon.png"></a>
                </li>
                <li class="nav-item dropdown">
                    <a href="aluno-lista-material.php" class="nav-link dropdown-toggle" data-toggle="dropdown">Materiais</a>
                    <div class="dropdown-menu">
                        <a href="index.php#curso" class="dropdown-item">Catálogo</a>
                        <a href="#" class="dropdown-item">Fórum de dúvidas</a>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="../../assets/icon/user.png"> <?php echo $_SESSION['usuario'] ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="aluno-lista-material.php" class="dropdown-item">Ver materiais</a>
                        <a href="perfil.php" class="dropdown-item">Ver perfil</a>
                        <a href="#" class="dropdown-item">Histórico de compras</a>
                        <div class="dropdown-divider"></div>
                        <a href="../../index.php" class="dropdown-item">Sair</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div class="container-material">
    <div class="box-material">
        <div class="lista-material">
        <div class="descricao">
            <div class="titulo"><p>Meus materiais:</p><img src="../../assets/icon/book-icon.png" width="55px" height="55px"></div>
        </div>
         <!-- CASO O USUÁRIO NÃO TENHA MATERIAL COMPRADO, MOSTRAR ISSO COM PHP --> <!--<p class="titulo-material">Você não possui nenhum material :( </p>-->
            <p class="titulo-material">Nome do material - <a href="material-matematica.php">Link</a></p>
            <p class="titulo-material">Nome do material - <a href="">Link</a></p>
            <p class="titulo-material">Nome do material - <a href="">Link</a></p>
            <p class="titulo-material">Nome do material - <a href="aluno-material.php">Link</a></p>
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

</body>
</html>                            