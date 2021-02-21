<?php

// Abre conexão com o banco de dados
include_once 'conn.php';

$id_url = $_POST['id'];
$titulo = $_POST['titulo'];
$usuario = $_POST['usuario'];
$status = $_POST['status'];
$descricao = $_POST['descricao'];

// Atualiza so dados na tabela
$sql = "UPDATE tasks SET title = '$titulo', user_id = $usuario, status = $status, description = '$descricao', updated_at = NOW() WHERE id = $id_url";
#die($sql);

if(mysqli_query($conn, $sql)){
    echo 'Dados atualizados com sucesso!';
    header('index.php');
} else {
    echo ' Erro';
}
