<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Cadastro</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../styles/css/login.css">
    <link rel="stylesheet" href="../../styles/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	
<div class="login-form cadastro-form">
	<a href="../../index.php"><img class="img" src="../../assets/img/logo.png"></a>
    <form action="../../action/cadastro.php" method="post">
        <h2 class="text-center">Cadastro</h2>   
        <div class="form-group has-error">
        	<input type="text" class="form-control" name="user_name" placeholder="Nome" maxlength="20" required="required">
        </div>
        <div class="form-group has-error">
        	<input type="text" class="form-control" name="last_name_user" placeholder="Sobrenome" maxlength="35" required="required">
        </div>
        <div class="form-group has-error">
        	<input type="text" class="form-control" name="user_nickname" placeholder="Usuário" maxlength="8" required="required">
        </div>
        <div class="form-group has-error">
        	<input type="email" class="form-control" name="user_email" placeholder="Email" maxlength="35" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Senha" maxlength="10" required="required">
        </div>  
        <div class="form-group">
            <input type="password" class="form-control" name="password-checkout" placeholder="Confirmar senha" maxlength="10" required="required">
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Cadastrar</button>
        </div>
        <p><a href="index.php">Já possui cadastro? Entrar</a></p>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>