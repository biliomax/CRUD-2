<?php

// Abre conexão com o banco de dados
include_once 'conn.php';

$titulo = $_POST['titulo'];
$usuario = $_POST['usuario'];
$status = $_POST['status'];
$descricao = $_POST['descricao'];
$created_at = date("Y-m-d H:i:s"); // Cria a data que foi inserido os dados no banco de dados.


$sql = "INSERT INTO tasks (title, user_id, status, description, created_at) VALUES ('$titulo', $usuario, $status, '$descricao', '$created_at')";

#die($sql);

if(mysqli_query($conn, $sql)){
    echo 'Inserido com sucesso na base de dados';
    header('index.php');
} else {
    echo ' Erro';
}
