<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "biblioteca_trabalho";

  $nomeLivro = $_POST['nomeLivro'];
  $isbnLivro = $_POST['isbnLivro'];
  $qtdLivro = $_POST['qtdLivro'];
  $anoPublicacaoLivro = $_POST['anoPublicacaoLivro'];
  $numeroEdicaoLivro = $_POST['numeroEdicaoLivro'];

  $autor_ID = $_POST['autorLivroSelect'];
  $genero_ID = $_POST['generoLivroSelect'];
  $editora_ID = $_POST['editoraLivroSelect'];

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
  }

  $sql = "INSERT INTO livro (isbn, livro, qtd, ano_publicacao, nro_edicao, autor_ID, genero_ID, editora_ID)
  VALUES ('" . $isbnLivro . "', '" . $nomeLivro . "', '" . $qtdLivro . "', '" . $anoPublicacaoLivro . "',
  '" . $numeroEdicaoLivro . "', '" . $autor_ID . "', '" . $genero_ID . "', '" . $editora_ID . "')";

  if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    header("Location: cadastrarLivro.php?last_id=$last_id");
  } else {
    echo "Erro ao efetuar cadastro: " . $sql . "<br>" . $conn->error;
    echo "<a class='btn btn-dark' href='./Gerenciar.php'>Voltar</a>";
  }

  $conn->close();
?>