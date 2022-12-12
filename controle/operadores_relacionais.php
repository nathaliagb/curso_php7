<div class="titulo">Operadores Relacionais</div>

<?php
    var_dump(1 == 1); // true
    var_dump(1 > 1); // false
    var_dump(1 >= 1); // true
    var_dump(4 < 23); // true
    var_dump(1 <= 7); // true
    var_dump(1 != 1); // false
    var_dump(1 <> 1); //false

    var_dump(111 == '111'); //true
    var_dump(111 === '111'); //false
    var_dump(111 != '111'); //false
    var_dump(111 !== '111'); //true

?>