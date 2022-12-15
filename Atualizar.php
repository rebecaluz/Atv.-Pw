<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultando usuário...</title>
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

    $email = $_GET["email"];
    $senhaNova = $_GET["senhaNova"];

    $conexao = new mysqli($server, $username, $password, $db);

    if ($conexao->connect_error) {
        die("Deu ruim: " . $conexao->connect_error);
    } 

    $sql = "UPDATE $tabela SET senha='$senhaNova' WHERE email='$email'";
    
    if ($conexao->query($sql) === TRUE) {} else {
        echo "<h5>Deu ruim: " . $sql . "<br>" . $conexao->error . "</h5>";
    }

    $conexao->close();
    ?>
    
    <div class="h-100 d-flex align-items-center justify-content-center">
        <h2>Sua senha foi alterado com sucesso!</h2>
    </div>
</body>

</html>
