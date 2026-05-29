<?php


// incluir a conexão de bancom de dados
include 'conexao.php';

//receber os dados do formulario
$nome = $_POST['NomeCompleto'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$ConfirmarSenha = $_POST['ConfirmarSenha'];


//guardar a instrução do mysql na variavel
$insert = "INSERT INTO tb_usuario VALUE (null, '$nome', '$email', '$senha' )";

//função query irá executar a instrução com banco de dados

$resultado = $conexao->query($insert);

if($resultado == true) {
    echo "<script>alert('Usuário cadastrado com sucesso')</script>";
}

?>