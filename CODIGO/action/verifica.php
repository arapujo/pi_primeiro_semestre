<?php
session_start();

if(!$_SESSION['usuario']) {
	header('Location:../pages/carrinho/identificacao.php');
	exit();
}
?>