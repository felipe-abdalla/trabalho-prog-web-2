<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "biblioteca_trabalho";

  $id = $_POST['id'];
  $nomeGenero = $_POST['nomeGenero'];

if ($nomeGenero != null && $nomeGenero != "") {
    if ($id != null && $id != "") {
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }

        $sql = "UPDATE genero SET genero='" . $nomeGenero . "' WHERE id= '".$id."';";

        if ($conn->query($sql) === TRUE) {
        header('Location: Gerenciar.php');
        } else {
        echo "Erro ao efetuar cadastro: " . $sql . "<br>" . $conn->error;
        echo "<a class='btn btn-dark' href='./Gerenciar.php'>Voltar</a>";
        }

        $conn->close();
    }
}
?>

