<?php

// abre conexão com MySQL
$conn = new mysqli('localhost', 'root', '', 'crud_tasks');

if($conn){
    # echo 'OK';
} else {
    echo 'Not';
}