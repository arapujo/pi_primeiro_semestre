<?php include_once("../../action/conexão.php"); 
$sql = "Select * from material";
$resultado = mysqli_query($conexao,$sql); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../styles/css/aluno.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                        <a href="../aluno/aluno-lista-material.php" class="dropdown-item">Relatório de vendas</a>
                        <a href="#" class="dropdown-item">Cadastrar materiais</a>
                        <div class="dropdown-divider"></div>
                        <a href="../../index.php"class="dropdown-item">Sair</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>

<table border = '2'>

<tr>
  <th>Nome do material</th>
  <th>Preço (R$)</th>
</tr>

<?php 


$sql_tipo = "SELECT * FROM material";
$resulta = $conexao->query($sql_tipo);

if ($resulta->num_rows > 0){

    while ( $row = $resulta->fetch_assoc()){            

        echo '<tr>';
        echo '<td> ' .$row['nome'].'</td>';
        echo '<td>'. $row['preco'] .'</td>';
        echo '</tr>';
    }
}
?>
</table>




</body>
</html>