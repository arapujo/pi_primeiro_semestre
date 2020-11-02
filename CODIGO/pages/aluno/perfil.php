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
                            <img src="../../assets/icon/user.png">
                            Nome do usuário</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="../aluno/aluno-lista-material.php" class="dropdown-item">Ver materiais</a>
                            <a href="#" class="dropdown-item">Ver perfil</a>
                            <a href="#" class="dropdown-item">Histórico de compras</a>
                            <div class="dropdown-divider"></div>
                            <a href="#"class="dropdown-item">Sair</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
      </div>
    
    <!---Perfil-->
    <main>
      
      <div class='fundo'>
    
         <a href=''><img src='../../assets/icon/left-icon.png'></a><!--Botão de voltar-->

         <h2>Meu Perfil </h2>
         <hr class="socketForm"> <br>
         <div class='container'>

          <div class='foto'>
           <img src='' id='foto'><br><br> <!---foto do usuário/ usar PHP--->

             <div class='footer'>
               <input type='file' style="vertical-align:middle" id='bImg'><br><br> <!--botão para incluir foto/usar PHP--> 
            </div>

          </div>

         </div>


        <!--Dados pessoais-->
         <section id='dPessoais'>

             <h2 class="dPessoal">Dados Pessoais <img src="../../assets/icon/user-icon.png"></h2>
             <hr class="socketForm">

                <label for="nome">
                   Nome completo
                </label> <br>

                   <input required="required" type="text" placeholder=""  name='nome' id="nome" > <br><br>

                <label for='email'>
                    E-mail:
                </label> <br>

                   <input required="required" type="text" placeholder=""  name='email' id="email" > <br><br>

                <label for='email2'>
                   E-mail secundário:
                 </label> <br>

                   <input type="text" placeholder=""  name='email2' id="email2" > <br><br>

                <label for='dNascimento'>
                    Data de Nascimento:
                </label> <br>

                   <input required="required" type="text" placeholder=""  name='dNascimento' id="dNascimento"> <br><br>

                <label for='CPF'>
                    CPF:
                </label> <br>

                   <input required="required" type="text" placeholder=""  name='CPF' id="CPF" > <br> <br>

                <label for='Tel'>
                   Telefone:
                </label> <br>

                   <input required="required" type="text" placeholder=""  name='Tel' id="Tel" > <br> <br>

                <label for='Cel'>
                    Celular:
                </label> <br>

                   <input required="required" type="text" placeholder=""  name='Cel' id="Cel" > <br> <br>
         </section>

        
        <!--Endereço-->
         <section id='endereco'>
          
          <h2>Endereço <img src="../../assets/icon/home-icon.png"></h2>
          <hr class="socketForm">

             <label for="CEP">
               CEP:
             </label> <br>

               <input required="required" type="text" placeholder=""  name='CEP' id="cep" value='' onblur="pesquisacep(this.value);"> <br><br> <!--vai pesquisar o endereço de acordo com o CEP-->

            <label for='rua'>
               Logradouro:
            </label><br>

               <input required="required" type="text" placeholder=""  name='rua' id="rua" value='' ><br><br>

            <label for='num'>
               Número:
            </label><br>

               <input type="text" placeholder=""  name='num' id="num" ><br><br>

            <label for='compl'>
               Complemento:
            </label><br>

               <input type="text" placeholder=""  name='compl' id="compl"><br><br>

            <label for='bairro'>
               Bairro:
            </label><br>

               <input required="required" type="text" placeholder=""  name='bairro' id="bairro" value=''><br><br>

            <label for='cidade'>
               Cidade:
            </label><br> <br>

               <input required="required" type="text" placeholder=""  name='cidade' id="cidade" value=''><br><br>

            <label for='estado'>
               Estado:
            </label><br>

               <input required="required" type="text" placeholder=""  name='estado' id="uf" value='' ><br><br>
       
            <label for='estado'>
               País:
            </label><br><br>

               <input required="required" type="text" placeholder=""  name='estado' id="pais"value='' ><br><br>
        
         </section>
          
          <!--Info Adicionais-->
         <section id='adicionais'>
            
          <h2>Informações Adicionais <img src="../../assets/icon/document-icon.png"></h2>
          <hr class="socketForm">
             
             <label for="form">
                Formação:
             </label> <br>

               <input  type="" placeholder=""  name='form' id="form" ><br><br>

             <label for='tForm'>
                Tipo de formação:
             </label><br>

                <input  type="text" placeholder=""  name='tForm' id="tForm" ><br><br>

            <label for='iEnsino'>
                Instituição de ensino:
            </label><br>

               <input type="text" placeholder=""  name='iEnsino' id="iEnsino" ><br><br>

         </section>
        
        

          <!---Alterar Senha-->
         <section id='senha'>
           <h2>Alterar Senha <img src="../../assets/icon/lock-icon.png"></h2>
           <hr class="socketForm">
            
            <label for="atual">
               Senha atual:
            </label> <br>
          
               <input  type="" placeholder=""  name='atual' id="atual"><br><br>

            <label for='nova'>
               Nova senha:
            </label><br>

               <input  type="text" placeholder=""  name='nova' id="nova" ><br><br>


            <label for='confirmar'>
               Confirmar senha:
            </label><br>

               <input type="text" placeholder=""  name='confirmar' id="confirmar" ><br><br><br>

           <h10><a>Apagar conta</h10></a><br><br>

           <button id="salvar" style="vertical-align:middle"><span> Salvar Alterações </span></button></a><br><br>
        
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