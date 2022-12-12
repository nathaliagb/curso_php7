<div class="titulo">If Else</div>

<?php
if (true){
    echo "Serei impresso <br>";
} 
if (false){
    echo "Eu não";
}

if (true){
    echo "Verdadeiro <br>";
} else {
    echo "Falso <br>";
}

if (false) {
    echo "Passo A <br>";
} elseif (true) {
    echo "Passo B <br>";
} else {
    echo "Passo C <br>";
}

if (false) {
    echo "Bloco A <br>";
} else {
    echo "Bloco B <br>";
    if (true) {
        echo "Bloco C <br>";
    }
}

echo "<p class='divisao'>Relacionais no If/Else</p><hr>";
$idade = 17;
if ($idade < 12) {
    echo "Criança <br>";
} elseif ($idade <= 18 && $idade >= 12){
    echo "Adolescente <br>";
} elseif ($idade > 18 && $idade <= 65) {
    echo "Adulto <br>";
} elseif ($idade > 65) {
    echo "Idoso <br>";
}

echo "<p class='divisao'> Spaceship </p> <hr>";
var_dump(500 <=> 3); // Retorna 1, primeiro operando maior
var_dump(50 <=> 50); // Retorna 0, números iguais
var_dump(5 <=> 500); // Retorna -1, segundo operando maior

?>