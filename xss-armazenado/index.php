<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS armazenado</title>
</head>
<body>
<?php
// Informações de login. Usuário e senha padrão
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dados";

// Criando conexão com o banco de dados
$connection = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão$
if ($connection->connect_error) {
    die("Error " . $connection->connect_error);
}

// Adicionando comentários no banco de dados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mensagem = str_replace("<script>", "", $_POST["mensagem"]);
    $adicionarComentario = "INSERT INTO Tabelacomentarios (comentarios) VALUES ('$mensagem')";
    $connection->query($adicionarComentario);
}

// Exibindo os comentários na página
$sqlComentario = "SELECT * FROM Tabelacomentarios";
$resultado = $connection->query($sqlComentario);


function imprimirComentarios() {
    global $resultado;
    if ($resultado->num_rows > 0) {
        While($row = $resultado->fetch_assoc()) {
            echo "<p>" . $row["comentarios"] . "</p>" . "<br>";
        }
        } else {
            echo "<p>0 comentários</p>";
        }
}

// Fechando a conexão com o banco de dados
$connection->close();
?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label>Escreva um comentário:</label> <br> <br>
        <textarea name="mensagem" rows="7" cols="40" required></textarea> <br> <br>
        <input type="submit" value="Postar comentário">
    </form>

    <div>
        <p>Comentários publicados:</p>
        <?php imprimirComentarios(); ?>
    </div>
</body>
</html>