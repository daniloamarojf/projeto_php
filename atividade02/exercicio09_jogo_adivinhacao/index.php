<?php include 'public/processa.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocumentJogo de adivinhação</title>
</head>
<body>
    <header>
        <h1>Jogo de Adivinhação</h1>
    </header>

    <main>
        <section>
            <form method="POST" action="">
                <label>Adivinhe o número:</label>

                <input type="number" id="numero" name="numero" required>

                <button type="submit">Verificar</button>
            </form>

            <?php if ($_SERVER['REQUEST_METHOD'] === "POST") : ?>
                <p>Numero sorteado:<?= htmlspecialchars($numero_sorteado) ?></p>
                <p>Você digitou:<?= htmlspecialchars($numero) ?></p>
                <p><?= htmlspecialchars($resultado) ?></p>
                <p>Número de tentativas:<?= htmlspecialchars($tentativas) ?></p> 
            <?php endif; ?>

        </section>
      
    </main>
    
</body>
</html>
