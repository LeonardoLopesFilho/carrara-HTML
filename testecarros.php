<?php


$Preço_veiculo= $_POST['Preço'];
$PercentLucro= $_POST['Lucro'];
$PercentImp= $_POST['Imp'];

$imps  =($PercentLucro * $PercentImp)+10000;
$final = ($Preço_veiculo + $imps);


echo "O Percentual de lucro é $PercentLucro <br>";
echo "O Percentual de impostos são $PercentImp <br>";
echo "O Preço final do veiculo será $final <br>";

?>