<?php

session_start();


    function validar($numero, $numero_sorteado) {

        if ($numero < $numero_sorteado) {
            return "MENOR que o número sorteado!";
        } else if ($numero > $numero_sorteado) {
            return "MAIOR que o número sorteado!";
        } else {
            return "Parabens!";
        }
    }

    if (!isset($_SESSION['numero_sorteado'])) {
        $_SESSION['numero_sorteado'] = rand(1, 3);
        $_SESSION['tentativas'] = 0;
    }
    
    $resultado = "";
   

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        if (isset($_POST['numero'])) {
            $_SESSION['numero'] = $_POST['numero'];

            $numero = intval($_POST['numero']);

            $numero_sorteado = $_SESSION['numero_sorteado'];

            $resultado = validar($numero, $numero_sorteado);
            $tentativas = $_SESSION['tentativas']++;

        }

        if ($numero === $numero_sorteado) {
            $tentativas = $_SESSION['tentativas'];

            $_SESSION['numero_sorteado'] = rand(1, 3);
            $_SESSION['tentativas'] = 0;
        }

       
    }
?>
