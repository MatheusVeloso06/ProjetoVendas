<?php
// incluir a conexão de bancom de dados
include 'conexao.php';

//guardar a instrução do mysql na variavel
$insert = "INSERT INTO tb_venda VALUE (null, '2026-08-05','67', '180', '1', '1', '1') ";

//função query irá executar a instrução com banco de dados

$resultado = $conexao->query($insert);

if($resultado == true) {
    echo "<script>alert('Cliente cadastrado com sucesso')</script>";
}

?>