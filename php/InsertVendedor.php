<?php 

// incluir a conexão de bancom de dados
include 'conexao.php';

//guardar a instrução do mysql na variavel
$insert = "INSERT INTO tb_vendedor VALUE (null, 'Matheus', '13978037756', '1')";

//função query irá executar a instrução com banco de dados

$resultado = $conexao->query($insert);

if($resultado == true) {
    echo "<script>alert('Cliente cadastrado com sucesso')</script>";
}



?>