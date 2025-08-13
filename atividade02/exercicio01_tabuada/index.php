<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
    <header>
        <h1>Tabuada de 1 a 10.</h1>
    </header>

    <main>
        <section>
            <form method="POST" action="public/processa.php">
                <label>Deseja ver a tabuada de qual número?:</label>
                <input type="number" id="numero" name="numero" required>
                <button type="submit">Ver tabuada</button>
            </form>
        </section>
    </main>
    
</body>
</html>
