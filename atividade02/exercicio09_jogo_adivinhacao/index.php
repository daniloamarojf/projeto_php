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
            <form method="POST" action="public/processa.php">
                <label>Adivinhe o número:</label>

                <input type="number" id="numero" name="numero" required>

                <button type="submit">Verificar</button>
            </form>
        </section>
    </main>
    
</body>
</html>
