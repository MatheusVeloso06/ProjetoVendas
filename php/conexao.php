<?php
//informações necessarios para conexão com o banco
$servidor = 'localhost';
$user_banco = 'root';
$senha_banco = 'root';
$nm_banco = 'bd_vendas';

//função msql para conexão com o banco de dados

$conexao = new mysqli($servidor, $user_banco, $senha_banco, $nm_banco);

if($conexao-> connect_error){
     echo "Erro na Conexão";

}







?>