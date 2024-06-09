<?php
$servername = "localhost"; // O endereço do servidor MySQL
$username = "root";        // Seu nome de usuário do MySQL
$password = "";            // Sua senha do MySQL
$dbname = "blog";          // O nome do banco de dados

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checando a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
