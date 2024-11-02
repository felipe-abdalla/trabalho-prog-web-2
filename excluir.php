<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "biblioteca_trabalho";

$id = $_GET['id'];
$tabela = $_GET['tabela'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM `biblioteca_trabalho`.`" . $tabela . "` WHERE (`ID` = " . $id . ");";

if ($conn->query($sql) === TRUE) {
  echo "Exclusão efetuada com sucesso.";
  header("Location: Gerenciar.php");
} else {
  echo "Erro ao realizar exclusão: " . $conn->error;
  echo "<a class='btn btn-dark' href='./Gerenciar.php'>Voltar</a>";
}

$conn->close();
?>