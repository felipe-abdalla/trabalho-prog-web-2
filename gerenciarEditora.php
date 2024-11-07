<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "biblioteca_trabalho";

  $nomeEditora = $_POST['nomeEditora'];
  $cnpjEditora = $_POST['cnpjEditora'];
  $paisEditora = $_POST['paisEditora'];
  $cidadeEditora = $_POST['cidadeEditora'];
  $ruaEditora = $_POST['ruaEditora'];
  $bairroEditora = $_POST['bairroEditora'];
  $cepEditora = $_POST['cepEditora'];

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
  }

  $sql = "INSERT INTO editora (editora, rua, bairro, cidade, cep, pais, cnpj)
  VALUES ('" . $nomeEditora . "', '" . $ruaEditora . "', '" . $bairroEditora . "', '" . $cidadeEditora . "',
  '" . $cepEditora . "', '" . $paisEditora . "', '" . $cnpjEditora . "')";

  if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    header("Location: cadastrarEditora.php?last_id=$last_id");
  } else {
    echo "Erro ao efetuar cadastro: " . $sql . "<br>" . $conn->error;
    echo "<a class='btn btn-dark' href='./Gerenciar.php'>Voltar</a>";
  }

  $conn->close();
?>