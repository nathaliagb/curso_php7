<div class="titulo">Constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS . '<br>'; // Não usa o $ para acessar constantes

const NOVA_TAXA = 2.5;
echo TAXA_DE_JUROS . '<br>';

$valorVariavel = 2.8;
// define('NOVISSIMA_TAXA', $valorVariavel);
// const NOVISSIMA_TAXA = $valorVariavel;
const NOVISSIMA_TAXA = 2.8 + 1.2;
echo '<br>'. NOVISSIMA_TAXA;

echo '<br>' . PHP_VERSION;
echo '<br>' . PHP_INT_MAX;

echo '<br> Linha:' . __LINE__;
echo '<br>' . __LINE__;
echo '<br>' . __DIR__;

?>