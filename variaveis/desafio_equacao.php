<div class="titulo">Desafio Equação</div>

<?php
$equacao1 = (((6*(3+2))**2)/(3*2));
$equacao2 = ((((1-5)*(2-7))/2)**2);
$equacao3 = ((($equacao1 - $equacao2)**3) / (10)**3);
echo $equacao3 . '<br>';
$equacao_completa = (((((6*(3+2))**2)/(3*2)) - (((1-5)*(2-7))/2)**2)**3) / (10)**3;
echo $equacao_completa;

?>