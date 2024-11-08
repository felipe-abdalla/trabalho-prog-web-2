<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <!-- Link do bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</body>
</html>

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
  //echo "Erro ao realizar exclusão: " . $conn->error;
  //echo "<br>";
  //echo "<a class='btn btn-dark' href='./Gerenciar.php'>Voltar</a>";
  //header("Location: Gerenciar.php?erro=". $conn->error);

  echo '<br>
        <div class="container alert alert-dark alert-dismissible" role="alert">
        <div>
        Nota: Para exluir um autor, gênero ou editor, ele não poderá estar vinculado à um livro.</div>
        <br>
        <a class="btn btn-dark" href="./Gerenciar.php">Voltar</a>
      </div>';
}

$conn->close();
?>