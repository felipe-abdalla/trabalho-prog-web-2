<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "biblioteca_trabalho";

$primeiroNomeAutor = $_GET["primeiroNomeAutor"];
$ultimoNomeAutor = $_GET["ultimoNomeAutor"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO autor (primeiro_nome, ultimo_nome)
VALUES ('" . $primeiroNomeAutor . "', '" . $ultimoNomeAutor . "')";

if ($conn->query($sql) === TRUE) {
  echo "Cadastrado efetuado com sucesso.";
} else {
  echo "Erro ao efetuar cadastro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>