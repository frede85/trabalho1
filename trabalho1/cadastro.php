<?php 
if(isset($_POST['submit'])){

include_once('conexão.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$result = mysqli_query($conn, "INSERT INTO usuarios(email, senha, nome) VALUES ('$email', '$senha', '$nome')");

header('Location: login.php');
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleCadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <div>
        <h1>Cadastro</h1>
    <form method="POST" action="cadastro.php">
        <input type="text" placeholder="Nome" name="nome">
        <br>
        <br>
        <input type="email" placeholder="Email" name="email">
        <br>
        <br>
        <input type="password" placeholder="Senha" name="senha">
        <br>
        <br>
        <button type="submit" value="Cadastrar" name="submit">Enviar</button>
    </form>
    </div>
</body>
</html>