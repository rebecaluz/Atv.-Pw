<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionando usuário...</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/boltcss/bolt.min.css">
</head>

<body>
    <?php 
    $server = "localhost";
    $username = "root";
    $password = "123456";
    $db = "praticaFinal";
    $tabela = "Informacoes";

    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $senha = $_GET["senha"];
    $dataNascimento = date('Y-m-d', strtotime($_GET['dataNascimento']));

    $conexao = new mysqli($server, $username, $password, $db);

    if ($conexao->connect_error) {
        die("Deu ruim: " . $conexao->connect_error);
    }

    $sql = "INSERT INTO $tabela (nome, email, senha, dataNascimento) VALUES ('$nome', '$email', '$senha', '$dataNascimento')";
    
    if ($conexao->query($sql) === TRUE) {} else {
        echo "<h5>Deu ruim: " . $sql . "<br>" . $conexao->error . "</h5>";
    }

    $conexao->close();
    ?>

    <div class="h-100 d-flex align-items-center justify-content-center">
        <h2>Olá <?php echo $_GET["nome"]; ?>! Você foi cadastrado!</h2>
    </div>
</body>

</html>
