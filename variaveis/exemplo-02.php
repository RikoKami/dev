<?php

// Padrão CamelCase
$anoNascimento = 1995;
$nome = "Larissa";
$sobrenome = "Dantas";
$nomeCompleto = $nome . " " .$sobrenome;

// Apagar variável com unset.

echo $nomeCompleto;
echo "<br>";
exit;

//unset($nomeCompleto);

//Se a variavel existe, vai escrever:
if (isset($nomeCompleto)){
	echo $nomeCompleto;
}


/*
 * Conclusão: 
 * isset = Verifica se uma variável existe ou se ela não é null.
 * unset = Remove uma variável, fazendo com que a mesma deixe de existir.
 * 
 */

?>