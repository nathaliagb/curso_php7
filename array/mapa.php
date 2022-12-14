<div class="titulo">Mapa</div>

<?php
$dados = array (
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);

print_r($dados);

echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];
echo '<br>';
var_dump($dados["outra_informacao"]);

//Não é bom fazer:
$lista = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "9",
    8 => "h"
);

echo '<br>';
print_r($lista);

?>