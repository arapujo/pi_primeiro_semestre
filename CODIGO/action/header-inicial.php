<?php 
	session_start();
	if(!$_SESSION['usuario']) {
	?>
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
		<?php
			}else{ ?> 


			<div class="bs-menu">
			    <nav class="navbar navbar-expand-md navbar-light  menu-bar">
			        <a href="index.php" class="navbar-brand"><img class="logo-site" src="../../assets/img/logo.png"></a>
			        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
			            <span class="navbar-toggler-icon"></span>
			        </button>
			        <div id="navbarCollapse" class="collapse navbar-collapse">
			            <ul class="nav navbar-nav">
			                <li class="nav-item">
			                    <a href="#" class="nav-link"><img class="icon-carrinho" src="../../assets/icon/shopping-cart-icon.png"></a>
			                </li>
			                <li class="nav-item dropdown">
			                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Materiais</a>
			                    <div class="dropdown-menu">
			                        <a href="#curso" class="dropdown-item">Catálogo</a>
			                        <a href="#" class="dropdown-item">Fórum de dúvidas</a>
			                    </div>
			                </li>
			            </ul>
			            <ul class="nav navbar-nav ml-auto">
			                <li class="nav-item dropdown">
			                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
			                        <img src="../assets/icon/user.png">
			                        Nome do usuário</a>
			                    <div class="dropdown-menu dropdown-menu-right">
			                        <a href="../aluno/aluno-lista-material.php" class="dropdown-item">Ver materiais</a>
			                        <a href="#" class="dropdown-item">Ver perfil</a>
			                        <a href="#" class="dropdown-item">Histórico de compras</a>
			                        <div class="dropdown-divider"></div>
			                        <a href="action/logout.php"class="dropdown-item">Sair</a>
			                    </div>
			                </li>
			            </ul>
			        </div>
			    </nav>
			</div>

			<?php }
		 ?>