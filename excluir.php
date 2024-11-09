<!DOCTYPE html>
<html lang="pt-br">
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

try {
  // Preparar o comando SQL
  $sql = "DELETE FROM `biblioteca_trabalho`.`" . $tabela . "` WHERE `ID` = " . $id;

  // Executar a query de exclusão
  if ($conn->query($sql) === TRUE) {
      echo "Exclusão efetuada com sucesso.";
      header("Location: Gerenciar.php");
      exit;
  } else {
      throw new Exception("Erro ao realizar exclusão.");
  }

} catch (Exception $e) {
  // Exibir erro e notificação personalizada
  echo '<br>
        <div class="container alert alert-dark alert-dismissible" role="alert">
        <div>
        Erro ao realizar exclusão: ' . $e->getMessage() . '
        <br><br>
        Nota: Para excluir um autor, gênero ou editora, ele não poderá estar vinculado a um livro.</div>
        <br>
        <a class="btn btn-dark" href="./Gerenciar.php">Voltar</a>
      </div>';
}

$conn->close();
?>