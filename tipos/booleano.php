<div class="titulo">Tipo Booleano</div>

<?php
    echo TRUE;
    echo '<br>';
    echo FALSE;

    echo '<br>' . var_dump(true);
    echo '<br>' . var_dump(false);
    echo '<br>' . var_dump('false');
    echo '<br>' . is_bool(false); // Retorna se o valor é booleano ou não
    echo '<br>' . is_bool('true');

    // Regras de conversões
    echo '<p>Regras: </p>';
    echo '<br>' . var_dump((bool) 0); // apenas zero é false
    echo '<br>' . var_dump((bool) 20);
    echo '<br>' . var_dump((bool) -1);
    echo '<br>' . var_dump((bool) 0.00000000001);
    echo '<br>' . var_dump((bool) ""); // false
    echo '<br>' . var_dump((bool) "0"); // Um zero dentro da string retorna false
    echo '<br>' . var_dump((bool) " "); // retorna true
    echo '<br>' . var_dump((bool) "00"); // retorna true
    echo '<br>' . var_dump((bool) "false"); // retorna true

?>