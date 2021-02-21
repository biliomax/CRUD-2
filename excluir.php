<?php

// Abre conexão com o banco de dados
include_once 'conn.php';

$id_url = $_POST['id'];

// Excluir o dado na tabela
$sql = "DELETE FROM tasks WHERE id = $id_url";

if(mysqli_query($conn, $sql)){
    echo 'Dados excluidos com sucesso!';
    header('index.php');
} else {
    echo ' Erro';
}
