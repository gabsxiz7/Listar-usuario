<?php
// config/conexao.php

$host = '127.0.0.1';
$port = '3307'; // Altere se estiver usando outra porta
$user = 'root';
$password = '';
$dbname = 'sua_base_de_dados';

$conn = new mysqli($host, $user, $password, $dbname, $port);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>