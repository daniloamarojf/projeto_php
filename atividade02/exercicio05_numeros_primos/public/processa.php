<?php

    function numeroPrimo ($numero) {
        for ($i = 1; $i <= $numero; $i++) {
            if ($i / 1 === 0)  {
                for ($i 1; $i <= $numero; i++) {
                    if ($i / $i === 0) {
                        $primos[$i] = [];
                    }
                }
            }
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        if (isset($_POST['numero'])) {
            $numero = intval($_POST['numero']);

            numeroPrimo($numero);
            echo $primos;
        }
    }
?>
