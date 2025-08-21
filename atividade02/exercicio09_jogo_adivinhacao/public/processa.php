<?php
    function validar($numero, $numero_sorteado) {

        if ($numero < $numero_sorteado) {
            $mensagem = "MENOR que o número sorteado!";
        } else if ($numero > $numero_sorteado) {
            $mensagem = "MAIOR que o número sorteado!";
        } else {
            $mensagem = "Parabens!";
        }
        return $mensagem;
    }

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        if (isset($_POST['numero'])) {
            $numero = intval($_POST['numero']);

            $numero_sorteado = rand(1, 5);

            $resultado = validar($numero, $numero_sorteado);
        }

        echo $numero_sorteado;
        echo $resultado;
    }
?>
