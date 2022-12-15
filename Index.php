<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática final</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/boltcss/bolt.min.css">
</head>

<body>
    <div id="divAdicionar" class="h-100 d-flex align-items-center justify-content-center">
        <form id="adicionar" action="adicionar.php" method="get">
            <h1>Adicionar usuário:</h1>
            <label>Nome:</label>
            <input type="text" name="nome" id="nome" required>
            <label>E-mail:</label>
            <input type="email" name="email" id="email" required>
            <label>Senha:</label>
            <input type="password" name="senha" id="senha" required>
            <label>Data de nascimento:</label>
            <input type="date" name="dataNascimento" id="dataNascimento">
            <input type="submit" id="btnAdicionar" value="Cadastrar">
        </form>
    </div>

    <div id="divAtualizar" class="h-100 d-flex align-items-center justify-content-center">
        <form id="atualizar" action="atualizar.php" method="get">
            <h1>Trocar senha:</h1>
            <label>E-mail:</label>
            <input type="email" name="email" id="email" required>
            <label>Senha nova:</label>
            <input type="password" name="senhaNova" id="senhaNova" required><br>
            <input type="submit" id="btnAtualizar" value="Atualizar">
        </form>
    </div>

    <div id="divConsultar" class="h-100 d-flex align-items-center justify-content-center">
        <form id="consultar" action="consultar.php" method="get">
            <h1>Consultar usuário:</h1>
            <label>Nome:</label>
            <input type="text" name="nome" id="nome" required>
            <input type="submit" id="btnConsultar" value="Consultar">
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
