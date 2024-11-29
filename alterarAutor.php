<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "biblioteca_trabalho";

  $id = $_POST['id'];
  $primeiroNomeAutor = $_POST['primeiroNomeAutor'];
  $ultimoNomeAutor = $_POST['ultimoNomeAutor'];

if ($ultimoNomeAutor != null && $ultimoNomeAutor != "") {
    if ($primeiroNomeAutor != null && $primeiroNomeAutor != "") {
        if ($id != null && $id != "") {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    $sql = "UPDATE autor SET primeiro_nome='" . $primeiroNomeAutor . "', ultimo_nome='" . $ultimoNomeAutor . "' WHERE id= '".$id."';";

if ($conn->query($sql) === TRUE) {
    header('Location: Gerenciar.php');
} else {
    echo "Erro ao efetuar cadastro: " . $sql . "<br>" . $conn->error;
    echo "<a class='btn btn-dark' href='./Gerenciar.php'>Voltar</a>";
}

$conn->close();
        }
    }
}

?>

