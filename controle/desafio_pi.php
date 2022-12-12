<div class="titulo">Desafio Pi</div>

<?php
echo pi();
$pi = 3.14;

if ($pi === pi()){
    echo "Iguais <br>";
} else {
    echo "<br> Diferentes";
}

// Resposta
echo '<br> Diferença:' . ($pi - pi());

if ($pi - pi() <= 0.01){
    echo '<br> Iguais';
}
?>