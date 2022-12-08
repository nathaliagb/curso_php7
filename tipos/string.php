<div class="titulo">Tipo String</div>

<?php
    echo 'Eu sou uma string';
    echo '<br>';
    var_dump("Eu também");
    echo '<br>';

    //concatenação

    echo "Nós também" . ' somos'; //Não tem problema concatenar strings aspas duplas com aspas simples
    echo '<br>';
    
    echo '<br>';
    echo "'Teste'" . '"Teste"' . '\'Teste\' ' . " \"Teste\" " . "\\";

    echo '<br>';
    print("<br> Também existe a função print");
    print "<br> Também existe a função print";

    // Algumas funções

    echo '<br>' . strtoupper('maximizado'); // Transforma em letras maiúsculas
    echo '<br>' . strtolower('MINIMIZADO'); // Transforma em letras minúsculas
    echo '<br>' . ucfirst('só a primeira letra maiúscula');
    echo '<br>' . ucwords('todas as palavras com a primeira letra maiúscula');
    echo '<br>' . strlen('Quantas letras?'); // Retorna o número de caracteres
    echo '<br>' . mb_strlen("Eu também"); // Para não contar o acento
    echo '<br>' . mb_strlen("Eu também", "utf-8"); // Outra forma para não contar o acento
    echo '<br>' . substr('Só uma parte mesmo', 7 , 6); // Contará a partir do 7 e lerá somente até o 6 (6 não entra)
    echo '<br>' . substr('Só uma parte mesmo', 7); // Não colocando o segundo parâmentro, contará até o final
    echo '<br>' . str_replace('isso', 'aquilo', 'Troca isso');
?>