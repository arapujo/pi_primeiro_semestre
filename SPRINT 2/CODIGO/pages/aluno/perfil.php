<?php
 session_start(); 
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../styles/css/perfil.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	 <title>CyberMind</title>
  </head>
  
  <body data-spy="scroll" data-target="#navbarResponsive">
    <!--- Menu --->

      <div class="bs-menu">
        <nav class="navbar navbar-expand-md navbar-light  menu-bar">
            <a href="index.php" class="navbar-brand"><img class="logo-site"  src="../../assets/img/logo.png"></a>
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
                            <a href="historico.php" class="dropdown-item">Histórico de compras</a>
                            <div class="dropdown-divider"></div>
                            <a href="../../index.php"class="dropdown-item">Sair</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
      </div>
    
    <!---Perfil-->
    <main>
      
      <div class='fundo'>
    
         <a href='index.php'><img src='../../assets/icon/left-icon.png' width="37px" heigth="37px"></a><!--Botão de voltar-->

         <h2>Meu Perfil </h2>
         <hr class="socketForm"> <br>
         <div class='container'>

         <br><br>

        <!--Dados pessoais-->
         <section id='dPessoais'>

         <form action="../../action/cadastro-adicional.php" method="post">
             <h2 class="dPessoal">Dados Pessoais <img src="../../assets/icon/user-icon.png" width="30px" heigth="30px"></h2>
             <hr class="socketForm">

                <label for="nome">
                   Nome:
                </label> <br>

                   <input required="required" type="text" name='nome' placeholder="<?php echo $_SESSION['nome'] ?>" id="nome"  maxlength="20"> <br><br>

                  <label for="sobrenome">
                   Sobrenome:
                </label> <br>

                   <input required="required" type="text" name='sobrenome' placeholder="<?php echo $_SESSION['sobrenome'] ?>" id="sobrenome"  maxlength="35"> <br><br>

                <label for='email2'>
                   E-mail secundário:
                 </label> <br>

                   <input type="email"  name='email2' id="email2" maxlength="45"> <br><br>

                <label for='dNascimento'>
                    Data de Nascimento:
                </label> <br>

                   <input required="required" type="text" placeholder=""  name='dNascimento' id="dNascimento" maxlength="10"> <br><br>

                <label for='CPF'>
                    CPF:
                </label> <br>

                   <input required="required" type="text" placeholder=""  name='CPF' id="CPF" maxlength="11"> <br> <br>

                <label for='Tel'>
                   Telefone:
                </label> <br>

                   <input required="required" type="text" placeholder=""  name='Tel' id="Tel" maxlength="14"> <br> <br>

                <label for='Cel'>
                    Celular:
                </label> <br>

                   <input required="required" type="text" placeholder=""  name='Cel' id="Cel"  maxlength="14"> <br> <br>
         </section>

        
        <!--Endereço-->
         <section id='endereco'>
          
          <h2>Endereço <img src="../../assets/icon/home-icon.png" width="30px" heigth="30px"></h2>
          <hr class="socketForm">

             <label for="CEP">
               CEP:
             </label> <br>

               <input required="required" type="text"  name='CEP' id="cep" value='' maxlength="8" onblur="pesquisacep(this.value);"> <br><br> <!--vai pesquisar o endereço de acordo com o CEP-->

            <label for='rua'>
               Logradouro:
            </label><br>

               <input required="required" type="text" name='rua' id="rua" value='' maxlength="20" ><br><br>

            <label for='num'>
               Número:
            </label><br>

               <input type="text" placeholder=""  name='num' id="num"  maxlength="4"><br><br>

            <label for='compl'>
               Complemento:
            </label><br>

               <input type="text" placeholder=""  name='compl' id="compl"  maxlength="20"><br><br>

            <label for='bairro'>
               Bairro:
            </label><br>

               <input required="required" type="text" name='bairro' id="bairro"  maxlength="40"><br><br>

            <label for='cidade'>
               Cidade:
            </label><br> <br>

               <input required="required" type="text" name='cidade' id="cidade"  maxlength="35"><br><br>

            <label for='estado'>
               Estado:
            </label><br>

               <input required="required" type="text" name='estado' id="uf"  maxlength="35" ><br><br>
       
            <label for='estado'>
               País:
            </label><br>

               <input required="required" type="text" name='pais' id="pais" maxlength="35" ><br><br>
        
         </section>
          
          <!--Info Adicionais-->
         <section id='adicionais'>
            
          <h2>Informações Adicionais <img src="../../assets/icon/document-icon.png" width="30px" heigth="30px"></h2>
          <hr class="socketForm">
             
             <label for="form">
                Formação:
             </label> <br>

               <input type="text" name='form' id="form" maxlength="30" ><br><br>

             <label for='tForm'>
                Tipo de formação:
             </label><br>

                <input  type="text" name='tForm' id="tForm" maxlength="20" ><br><br>

            <label for='iEnsino'>
                Instituição de ensino:
            </label><br>

               <input type="text" name='iEnsino' id="iEnsino"  maxlength="30" ><br><br>

         </section>
        
        

          <!---Alterar Senha-->
         <section id='senha'>
           <h2>Alterar Senha <img src="../../assets/icon/lock-icon.png" width="30px" heigth="30px"></h2>
           <hr class="socketForm">
            
            <label for="atual">
               Senha atual:
            </label> <br>
          
               <input  type="password" name='atual' id="senha_atual"  maxlength="8" ><br><br>

            <label for='nova'>
               Nova senha:
            </label><br>

               <input type="password" name='nova' id="nova_senha" maxlength="8" ><br><br>

            <label for='confirmar'>
               Confirmar senha:
            </label><br>

               <input type="password" name='confirmar' id="confirmar_senha" maxlength="8"><br><br><br>

           <h10><a>Apagar conta</h10></a><br><br>

           <button id="salvar" style="vertical-align:middle"><span> Salvar Alterações </span></button></a><br><br>
            </form>
        </section>

      </div>
    
    </main>

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
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/perfil.js"></script>
    
  </body>
</html>