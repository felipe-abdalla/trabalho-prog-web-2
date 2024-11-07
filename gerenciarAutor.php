<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "biblioteca_trabalho";

  $primeiroNomeAutor = $_POST['primeiroNomeAutor'];
  $ultimoNomeAutor = $_POST['ultimoNomeAutor'];

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
  }

  $sql = "INSERT INTO autor (primeiro_nome, ultimo_nome)
  VALUES ('" . $primeiroNomeAutor . "', '" . $ultimoNomeAutor . "')";

  if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    header("Location: cadastrarAutor.php?last_id=$last_id");
  } else {
    echo "Erro ao efetuar cadastro: " . $sql . "<br>" . $conn->error;
    echo "<a class='btn btn-dark' href='./Gerenciar.php'>Voltar</a>";
  }

  $conn->close();
?>