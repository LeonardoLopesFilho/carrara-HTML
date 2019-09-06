<?php


$Usuario= $_POST['Usuario'];
$Senha= $_POST['Senha'];
$certo= 9908;
$certo2='leo';
if ($Senha == $certo && $Usuario == $certo2){
	header('location:telacarros.html');
}else{
	header('location:telalogin.html');
}

?>