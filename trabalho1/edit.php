<?php 
if(!empty($_GET['id'])){

include_once('conexão.php');

$id = $_GET['id'];

$sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

$result = $conn->query($sqlSelect);

if($result->num_rows > 0){
    while($user_data = mysqli_fetch_assoc($result)){
        $id = $user_data['id'];
        $nome = $user_data['nome'];
        $email = $user_data['email'];
        $senha = $user_data['senha'];
    }

}else{
    header('Location: usuariotela.php');
}

}else{
    header('Location: usuariotela.php');
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
    <form method="POST" action="saveEdit.php">
        <input type="text" placeholder="Nome" name="nome" value="<?php echo $nome?>">
        <br>
        <br>
        <input type="email" placeholder="Email" name="email" value="<?php echo $email?>">
        <br>
        <br>
        <input type="text" placeholder="Senha" name="senha" value="<?php echo $senha?>">
        <br>
        <br>
        <button type="submit" value="Cadastrar" name="update">Update</button>
        <br>
        <br>
        <input type="hidden" name="id" value="<?php echo $id ?>">
    </form>
    </div>
</body>
</html>