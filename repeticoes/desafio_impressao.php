<div class="titulo">Desafio Impressão</div>

<!--
- Imprima apenas os valores do array que contém indice par
- Resolver com for e foreach
- Valores esperados: AAA, CCC, EEE

-->

<?php
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

foreach($array as $chave => $a){
    if($chave %2 !==0) {
        continue;
    }
    echo "$a <br>";
}

for ($i =0; $i <= count($array); $i++){
    if($chave %2 !==0) {
        continue;
    }
    echo "$a <br>";
}
?>