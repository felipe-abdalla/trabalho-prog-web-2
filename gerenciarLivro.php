<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "biblioteca_trabalho";

  $nomeLivro = $_POST['nomeLivro'];
  $isbnLivro = $_POST['isbnLivro'];
  $qtdLivro = $_POST['qtdLivro'];
  //$dataPublicacaoLivro = $_POST['dataPublicacaoLivro'];
  $numeroEdicaoLivro = $_POST['numeroEdicaoLivro'];
  //$bairroEditora = $_POST['bairroEditora'];
  //$cepEditora = $_POST['cepEditora'];
  $autor_ID = 13;
  $genero_ID = 6;
  $editora_ID = 2;
  $dataPublicacaoLivro = '20200101';

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
  }

  $sql = "INSERT INTO livro (isbn, livro, qtd, data_publicacao, nro_edicao, autor_ID, genero_ID, editora_ID)
  VALUES ('" . $isbnLivro . "', '" . $nomeLivro . "', '" . $qtdLivro . "', '" . $dataPublicacaoLivro . "',
  '" . $numeroEdicaoLivro . "', '" . $autor_ID . "', '" . $genero_ID . "', '" . $editora_ID . "')";

  if ($conn->query($sql) === TRUE) {
    header("Location: cadastrarLivro.html");
  } else {
    echo "Erro ao efetuar cadastro: " . $sql . "<br>" . $conn->error;
    echo "<a class='btn btn-dark' href='./Gerenciar.php'>Voltar</a>";
  }

  $conn->close();
?>