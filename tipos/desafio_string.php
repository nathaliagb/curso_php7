<div class="titulo">Desafio String</div>

<?php 
    //Enunciado:
    // Avaliando os métodos da documentação da string, qual o método que a posição do texto 'abc' na string '!AbcaBcabc' retorne 1?

    $string = "!AbcaBcabc";
    $pesquisa = ucfirst("abc");
    echo strpos($string, $pesquisa) , '<br>';
    echo stripos($string, $pesquisa);
?>