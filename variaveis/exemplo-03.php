<?php



//  =========== TIPOS BASICOS ========== //
$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1990;
$salario = 5500.99; //ponto flutuante
$bloquado = false; //bolleano






//  =========== TIPOS COMPOSTOS [array e objeto] ========== //

$frutas = array("abacaxi","laranja","manga");
echo $frutas[2];
echo "<br>";
echo "<br>";
echo "<br>";


$nascimento = new DateTime();
echo "Objeto do datetime:";
echo "<br>";
var_dump($nascimento);







// ========== TIPOS ESPECIAIS [resource e null] =========== //

$nulo = NULL; //ausencia de valor
$vazio = "";  //foi iniciado mas n tem informação, está reservado na memória.

?>