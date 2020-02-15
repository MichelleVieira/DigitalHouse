<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

    <form method="POST" action="back.php">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome_cliente">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email_cliente">
        </div>
        <div>
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone_cliente" id="telefone">
        </div>
        <button>Cadastrar</button>
    </form>

</body>
</html>