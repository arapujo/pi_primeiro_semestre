<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>CyberMind - Histórico de compras</title>
<link rel="stylesheet" href="../../styles/css/historico.css">
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
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="../../assets/icon/user.png">
                        Administrador</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="historico.php" class="dropdown-item">Relatório de vendas</a>
                        <a href="index.php" class="dropdown-item">Cadastrar materiais</a>
                        <div class="dropdown-divider"></div>
                        <a href="../../index.php"class="dropdown-item">Sair</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div class="container-historico">
    <div class="box-historico">
        <div class="lista-historico">
        <div class="descricao">
            <div class="titulo">Relatório de vendas</p><img src="../../assets/icon/cash.png" width="50px" height="50px"></div>
        </div>
         <!-- CASO O USUÁRIO NÃO TENHA MATERIAL COMPRADO, MOSTRAR ISSO COM PHP --> <!--<p class="titulo">Você não possui nenhuma compra :( </p>-->
            <table class="table">
                <thead>
                <tr>
                    <th>Mês</th> 
                    <th>Quantidade de produtos</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Janeiro</td> <!-- Puxar a variável data do banco com PHP -->
                    <td>Quantidade</td> <!-- Puxar a variável nome do banco com PHP -->
                    <td>Total</td> <!-- Puxar a variável preço do banco com PHP -->
                </tr>
                <tr>
                    <td>Fevereiro</td>
                    <td>Quantidade</td>
                    <td>Total</td>
                </tr>
                <tr>
                    <td>Março</td>
                    <td>Quantidade</td>
                    <td>Total</td>
                </tr>
                <tr>
                    <td>Abril</td>
                    <td>Quantidade</td>
                    <td>Total</td>
                </tr>
                <tr>
                    <td>Maio</td>
                    <td>Quantidade</td>
                    <td>Total</td>
                </tr>
                <td>Junho</td>
                    <td>Quantidade</td>
                    <td>Total</td>
                </tr>
                <td>Julho</td>
                    <td>Quantidade</td>
                    <td>Total</td>
                </tr>
                <td>Agosto</td>
                    <td>Quantidade</td>
                    <td>Total</td>
                </tr>
                <td>Setembro</td>
                    <td>Quantidade</td>
                    <td>Total</td>
                </tr>
                <td>Outubro</td>
                    <td>Quantidade</td>
                    <td>Total</td>
                </tr>
                <td>Novembro</td>
                    <td>Quantidade</td>
                    <td>Total</td>
                </tr>
                <td>Dezembro</td>
                    <td>Quantidade</td>
                    <td>Total</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>

    <div class="container-historico">
    <div class="box-historico">
        <div class="lista-historico">
        <div class="descricao">
            <div class="titulo">Relatório de vendas</p><img src="../../assets/icon/cash.png" width="50px" height="50px"></div>
        </div>
         <!-- CASO O USUÁRIO NÃO TENHA MATERIAL COMPRADO, MOSTRAR ISSO COM PHP --> <!--<p class="titulo">Você não possui nenhuma compra :( </p>-->
            <table class="table">
                <thead>
                <tr>
                    <th>Saldo em conta</th> 
                    <th>Valor</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Mês atual</td> <!-- Puxar a variável data do banco com PHP -->
                    <td>R$ XXXX, XX</td> <!-- Puxar a variável nome do banco com PHP -->
                </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>

    <div class="container-historico">
    <div class="box-historico">
        <div class="lista-historico">
        <div class="descricao">
            <div class="titulo">Relatório de vendas</p><img src="../../assets/icon/cash.png" width="50px" height="50px"></div>
        </div>
         <!-- CASO O USUÁRIO NÃO TENHA MATERIAL COMPRADO, MOSTRAR ISSO COM PHP --> <!--<p class="titulo">Você não possui nenhuma compra :( </p>-->
            <table class="table">
                <thead>
                <tr>
                    <th>Ano</th> 
                    <th>Quantidade de produtos</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>2020</td> <!-- Puxar a variável data do banco com PHP -->
                    <td>Quantidade</td> <!-- Puxar a variável nome do banco com PHP -->
                    <td>Total</td> <!-- Puxar a variável preço do banco com PHP -->
                </tr>
                </tbody>
            </table>
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