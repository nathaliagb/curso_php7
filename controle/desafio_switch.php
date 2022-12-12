<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id ="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
    $num = $_POST['param'];
    $resposta = $_POST['conversao'];

    switch ($resposta){
        case ('km-milha'): {
            $resultado = $num / 0.621371;
            break;
        }
        case ('milha-km'): {
            $resultado = $num * 0.621371;
            break;
        }
        case ('metro-km'): {
            $resultado = $num / 1000;
            break;
        }
        case ('km-metro'): {
            $resultado = $num * 1000;
            break;
        }
    }

    echo $resultado;
?>