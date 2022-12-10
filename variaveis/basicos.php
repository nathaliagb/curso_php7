<div class="titulo">Básicos</div>

<?php
$numeroA = 13;
echo $numeroA. '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma . '<br>';

//Variáveis em PHP são case sensitive
echo $somaDosNumeros . '<br>';
echo isset($somaDosNumeros);

unset($somaDosNumeros);
echo '<br>';
var_dump($somaDosNumeros);

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora sou uma string";
echo '<br>' . $variavel;

//Nomes de variável

$var = 'válida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'válida';
$vâr5 = 'válida'; //evitar acento!
// $6var = 'inválida';
// $%var7 = 'inválida';
// $var8% = 'inválida';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);
?>