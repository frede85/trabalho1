<?php 

include_once("conexão.php");

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sqlUpdate = "UPDATE usuarios SET nome = '$nome', senha='$senha', email='$email' WHERE id ='$id'";

    $result = $conn->query($sqlUpdate);
}
header('Location: usuariotela.php');
?>