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

    $nome = $_GET["nome"];

    $conexao = new mysqli($server, $username, $password, $db);

    if ($conexao->connect_error) {
        die("Deu ruim: " . $conexao->connect_error);
    } 

    $sql = "SELECT nome, email FROM $tabela WHERE nome='$nome'";
    $resultado = $conexao->query($sql);
    
    echo "<h2>Usuários cadastrados:</h2>";
    if($resultado->num_rows > 0) {
        while($row = $resultado->fetch_assoc()) {
            echo "<h5><br> Nome: " . $row["nome"] . " - Email: " . $row["email"] . "</h5>"; 
        }
    } else {
        echo "<h5>0 resultados</h5>";
    }

    $conexao->close();
    ?>
</body>

</html>
