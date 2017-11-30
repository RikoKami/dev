<?php

//  =========== Variáveis PRE-DEFINIDAS ou ARRAYS SUPER GLOBAIS ========== //
//$nome = $_GET["a"]; //sempre string
//$nome = (int)$_GET["a"]; //mudando tipo da variável

//Na url colocar ?a=123&b=456
//var_dump($nome);


// Pegando o IP do usuário
$ip = $_SERVER["REMOTE_ADDR"];
echo "Ip: " . $ip;



echo "<br><br>";

// Pegando o nome do arquivo
$ipName = $_SERVER["SCRIPT_NAME"]; //nome do arquivo exibido: exemplo-04.php
echo "Nome do arquivo: " . $ipName;


?>