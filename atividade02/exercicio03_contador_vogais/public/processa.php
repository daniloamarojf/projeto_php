<?php

    // Função para contar vogais na frase
    // strtolower para converte as letras em minúscula
    function contagem_vogais($frase, $vogal) {
        return substr_count(strtolower($frase), $vogal);
    }

    // Estou verificando o método POST
    // isset para verificar se a variável veio viaPOST
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        if (isset($_POST['frase'])) {
            // 
            $frase = htmlspecialchars(trim($_POST['frase']));
        }

        $vogais = ['a', 'e', 'i', 'o', 'u'];

        foreach ($vogais as $vogal) {
            $resultado[$vogal] = contagem_vogais($frase, $vogal);  
        }

    }

    if (!empty($resultado)) {
        foreach ($resultado as $vogal => $quantidade) {
            echo "$vogal : $quantidade.<br>";
        }
    }
   
?>
