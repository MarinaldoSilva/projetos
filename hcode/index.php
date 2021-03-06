<?php

//criando variavel pré-definida que são arrays superglobais
$nome =(string)$_GET["a"];
//var_dump($nome);
//validando se existe conteudo na variavel nome
if ($nome!=0) {
	echo ""; 	
}

echo "<br>";
//mostrndo ip do cliente
$ip = $_SERVER["REMOTE_ADDR"];
if (isset($_SERVER)) {
	
}
echo "<br>";

//gerando informações de log do servidor
$local = $_SERVER["SCRIPT_NAME"];
if (isset($_SERVER)) {
	
}

$nome = "hcode";
$nome .= " Treinamentos";

//echo $nome;

$valorTotal = 0;
$valorTotal+=100;
$valorTotal+=25;
$valorTotal*= 0.9;

//echo $valorTotal;

$a = 10;
$b = 2;

//elevando $a ao quadrado
//echo $a ** $b;

//se $a foi maior que $b vai aparecer int(1) se B for maior que A sera int(-1)
//se for igual sera int(0) o nome do operador e space chip

$aa = 30;
$bb = 50;
//var_dump( $aa <=> $bb); 

//o proximo operador é '??' por exemplo, se a variavel y for nula o ?? vai verificar se é, se for nula eu declado a proxima e assim por diante.

$y = null;
$x = null;
$z = 8;

//se y for nulo verifica x, se x for nulo verifica o z, se não tiver nada não mostra nada
//echo $y ?? $x ?? $z;















?>

