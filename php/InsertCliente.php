<?php


// incluir a conexão de bancom de dados
include 'conexao.php';

//guardar a instrução do mysql na variavel
$insert = "INSERT INTO tb_cliente VALUE (null, 'pixelmemories', '11958545875', 'lucas' )";

//função query irá executar a instrução com banco de dados

$resultado = $conexao->query($insert);

if($resultado == true) {
    echo "<script>alert('Cliente cadastrado com sucesso')</script>";
}

?>