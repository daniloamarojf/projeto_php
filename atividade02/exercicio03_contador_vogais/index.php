<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de vogais em uma frase</title>
</head>
<body>
    <header>
        <h1>Contador de vogais em uma frase</h1>
    </header>
    
    <main>
        <section>
            <form method="POST" action="public/processa.php">
                <label>Digite uma frase</label><br>
                <input type="text" id="frase" name="frase" required><br>

                <button type="subimt">Verificar quantidade de vogais:</button>
            </form>
        </section>
    </main>
</body>
</html>
