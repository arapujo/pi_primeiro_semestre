<?php
//incluindo a conexão com o MySQL e o PHP Mailer
include("conexão.php");
include("PHPMailer/PHPMailerAutoload.php");

//Redefinindo a senha
$novasenha = substr(md5(time()), 0, 6);
$criptografada = md5($novasenha);

//Recebendo o email do usuario
$email = preg_replace('#[^a-z0-9]#i', '', $_POST['user_email']);
$email_Recuperacao = $_POST['user_email'];

//procurando no banco se o email existe
$sql = "SELECT count(*) as total from usuario where email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

//caso o email exista a senha será redefinida
if($row['total'] == 1){
	$sql_senha = "UPDATE usuario SET senha = '$criptografada' WHERE email = '$email' ";
	$conexao->query($sql_senha);
	echo("$novasenha");
}
//mesangem de erro caso email não exista
if($row['total'] == 0){
	echo "Nenhuma e-mail encontrado";
}

$mail = new PHPMailer;
$mail->isSMTP();

//Configurações do servidor de e-mail
$mail->Host = "smtp.gmail.com";
$mail->Port = "587";
$mail->SMTPSecure = "tls";
$mail->SMTPAuth = "true";
$mail->Username = "cybermindprojetointegrador@gmail.com";
$mail->Password = "PROJETOintegrador2020***";

//Configuração da Mensagem
$mail->setFrom($mail->Username,"Cyber Mind"); //Remetende
$mail->addAddress("$email_Recuperacao"); //Destinatario
$mail->Subject = "Recuperação da Senha"; // Assunto do E-mail

//Escrevendo o conteudo que será exibido na mensagem
$conteudo_email = "
Uma nova senha foi solicitada
<br><br>
Sua nova senha é $novasenha
<br><br>
Atenciosamente, CyberMind";

//Declarando que o conteudo é html para editar o texto e enviar
$mail->IsHTML(true);
$mail->Body = $conteudo_email;

//verificação de email enviado ou não
if ($mail->send()){
	echo ("E-mail enviado com sucesso!");
}
else{
	echo ("Falha ao enviar o E-mail: ". $mail->ErrorInfo);
}
?>