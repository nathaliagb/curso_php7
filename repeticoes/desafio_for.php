<div class="titulo">Desafio For</div>

<!--
#
##
###
####
#####
1 - Pode usar incremento tipo i++
2 - Não pode usar incremento $i++
-->

<?php
$lista = array('#', '##', '###', '####', '#####');
for ($i = 0; $i <= count($lista); $i++) {
    echo "{$lista[$i]} <br>";
}

echo '<hr>';

for ($jdav = '#'; $jdav !== '######'; $jdav .= '#'){
    echo "$jdav <br>";
}
?>