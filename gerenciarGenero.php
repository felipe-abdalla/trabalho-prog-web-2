<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "biblioteca_trabalho";

  $nomeGenero = $_POST['nomeGenero'];

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
  }

  $sql = "INSERT INTO genero (genero)
  VALUES ('" . $nomeGenero . "')";

  if ($conn->query($sql) === TRUE) {
    header("Location: cadastrarGenero.html");
  } else {
    echo "Erro ao efetuar cadastro: " . $sql . "<br>" . $conn->error;
    echo "<a class='btn btn-dark' href='./Gerenciar.php'>Voltar</a>";
  }

  $conn->close();
?>