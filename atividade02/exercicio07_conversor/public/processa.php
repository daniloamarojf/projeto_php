<?php
    function calcularCelsius($numero, $selecionePara) {
        $temperatura = 0;

        if ($selecionePara == 'fahrenheit') {
            $temperatura = ($numero * (9/5) + 32);
        } else if ($selecionePara == 'kelvin') {
            $temperatura = $numero + 273.15;
        } else {
            $temperatura = $numero;
        }
        return $temperatura;
    }

    function calcularFahrenheit($numero, $selecionePara) {
        $temperatura = 0;

        if ($selecionePara == 'celsius') {
            $temperatura = ($numero - 32) * (5/9);
        } else if ($selecionePara == 'kelvin') {
            $temperatura = ($numero - 32) * (5/9) + 273.15;
        } else {
            $temperatura = $numero;
        }
        return $temperatura;
    }

    function calcularKelvin($numero, $selecionePara) {
        $temperatura = 0;

        if ($selecionePara == 'celsius') {
            $temperatura = $numero - 273.15;
        } else if ($selecionePara == 'fahrenheit') {
            $temperatura = ($numero - 273.15) * 9/5 + 32;
        } else {
            $temperatura = $numero;
        }
        return $temperatura;
    }

    

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        if (isset($_POST['numero'])) {
            $numero = floatval($_POST['numero']);
            $selecioneDe = htmlspecialchars($_POST['selecioneDe']);
            $selecionePara = htmlspecialchars($_POST['selecionePara']);

            if ($selecioneDe == 'celsius') {
                $resultado = calcularCelsius($numero, $selecionePara);

            } else if ($selecioneDe == 'fahrenheit') {
                $resultado = calcularFahrenheit($numero, $selecionePara);
            } else {
                $resultado = calcularKelvin($numero, $selecionePara);
            }
        }

        echo $resultado;
    }
?>
