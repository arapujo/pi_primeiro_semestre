
<html lang="pt-br">
    <head>
        <meta charset=iso-8859-1>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Catálogo</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href=".../style/css/catalago.css"/>
        <link rel="stylesheet" type="text/css" href=".../style/css/main.css"/>
        <link rel="stylesheet" type="text/css" href=".../style/css/fixed.css"/>
    </head>
    <body data-spy="scroll" data-target="#navbarResponsive">
</div>
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
    <div class="jumbotron">
    <!-- CURSO -->
    <section class="details-card" id="cursos">
    <div class="container">
		<div class="narrow text-center">
			<div class="col-12">
				<h3 class="heading">Confira nossos materiais</h3>
				<div class="heading-underline"></div>
			</div>
		</div> 
    
        
        <?php
include ".../actions/conexão.php";
//*********************************************************************
// CONFIGURAÇÃO DE BANCO DE DADOS
//*********************************************************************
$con = mysql_connect($hostname_conn,$username_conn,$password_conn);
$bd  = mysql_select_db($database_conn);
?>
<table cellSpacing=1 cellPadding=0 width="50%" align=center border=0>
<tr>
<td>
     <?
//*********************************************************************
// GERA A INSTRUÇÃO SQL E CHAMA A FUNÇÃO PARA GERAR AS COLUNAS
//*********************************************************************
$sql = "SELECT * FROM produtos ORDER BY RAND() LIMIT 0,100";
GeraColunas(3, $sql)
?>
</td>
</tr>
</table>
<?
//*********************************************************************
// FUNÇÃO: GERACOLUNAS
// Parametros:
//  $pNumColunas (int)   > Quant. de colunas para distribuição
//  $pQuery    (string) > Query de registros
//*********************************************************************
function GeraColunas($pNumColunas, $pQuery) {
$resultado = mysql_query($pQuery);
echo ("<table width='100%' border='0'>\n");
for($i = 0; $i <= mysql_num_rows($resultado); ++$i) {

for ($intCont = 0; $intCont < $pNumColunas; $intCont++) {
  $linha = mysql_fetch_array($resultado);
  if ($i > $linha) {
   if ( $intCont < $pNumColunas-1) echo "</tr>\n";
   break;
  }

  $cod = $linha[0];
  $nome = $linha[1];
  $img = $linha[2];
  $preco = number_format($linha[3],2,",",".");

  if ( $intCont == 0 ) echo "<tr>\n";
  echo "<td>";
  // Aqui você inclui o conteudo

  echo "<table>";
  echo '<div class="row">'
  echo "<tr>";
  echo "<td>
        <div class='col-md-4'>
             <div class='card-content'>
                <div class='card-img'>
                    <img src='produtos/".$img."'/>
                       </div>
                       </div>
                       </div>
                       </td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>";
  echo "<table>";
  echo "<tr>";
  echo "<td><div class='card-desc'><h3>".$nome."</h3></div><br>"
  echo "<a href='carrinho.php?cod=".$cod."&acao=incluir' class='btn-card'>Comprar</a></div><div><font color='#1EBBA3' size='4px'> R$ ".$preco." </font></div></td>";
  echo "</tr>";
  echo "</table>";
  echo "</td>";
  echo "</tr>";
  echo "</table>";
  
 
  
   // Aqui é o final do conteudo
  echo "</td>";

  if ( $intCont == $pNumColunas-1 ) {
   echo "</tr>\n";
  } else { $i++; }
}

}
echo ('</table>');
}

?>
</div>
</section>
<!--- Footer -->
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
	
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
