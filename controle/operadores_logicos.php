<div class="titulo">Operadores Lógicos</div>

<?php
echo '<p> V ou F </p>';
var_dump(true);
echo '<br>';
var_dump(!true); //not

echo "<p class='divisao'>Tabela verdade 'AND' (E)</p><hr>";
var_dump(true && true); // true
var_dump(true && false); // false
var_dump(false && true); // false
var_dump(false && false); // false

var_dump(true and true); // true
var_dump(true and false); // false
var_dump(false and true); // false
var_dump(false and false); // false

echo "<p class='divisao'>Tabela verdade 'OR' (OU)</p><hr>";
var_dump(true || true); // true
var_dump(true || false); // true
var_dump(false || true); // true
var_dump(false || false); // false

var_dump(true or true); // true
var_dump(true or false); // true
var_dump(false or true); // true
var_dump(false or false); // false

echo "<p class='divisao'>Tabela verdade 'XOR' (OU)</p><hr>";
var_dump(true xor true); // false
var_dump(true xor false); // true
var_dump(false xor true); // true
var_dump(false xor false); // false

var_dump(true != true); // false
var_dump(true != false); // true
var_dump(false != true); // true
var_dump(false != false); // false

echo "<p class='divisao'>Exemplo</p><hr>";
$pagou_previdencia = true;

$idade = 62;
$sexo = 'F';

if($pagou_previdencia && ($idade >= 60 && $sexo === 'F' || $idade >= 65 && $sexo === 'M')){
    echo "Pode aposentar -> "  . $sexo;
} else {
    echo "Vai precisar trabalhar mais um pouco";
}
?>