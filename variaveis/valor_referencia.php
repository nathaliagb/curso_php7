<div class="titulo">Valor vs Referência</div>

<?php
    $variavel = 'valor inicial';
    echo $variavel . '<br>';

    //Atribuição Valor
    $variavelValor = $variavel;
    echo $variavelValor . '<br>';
    $variavelValor = 'novo valor';
    echo $variavel . '<br>';
    echo $variavelValor . '<br>';
    
    //Atribuição por Referência
    $valorReferecia = &$variavel;
    $valorReferecia = 'mesma referência';

    echo '<br>' . $variavel . $valorRefereciaria;
?>