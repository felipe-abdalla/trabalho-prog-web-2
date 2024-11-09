<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "biblioteca_trabalho";

$id = $_POST['id'];
$nomeLivro = $_POST['nomeLivro'];
$isbnLivro = $_POST['isbnLivro'];
$qtdLivro = $_POST['qtdLivro'];
$anoPublicacaoLivro = $_POST['anoPublicacaoLivro'];
$numeroEdicaoLivro = $_POST['numeroEdicaoLivro'];

$autor_ID = $_POST['autorLivroSelect'];
$genero_ID = $_POST['generoLivroSelect'];
$editora_ID = $_POST['editoraLivroSelect'];

if ($editora_ID != null && $editora_ID != "") {
    if ($genero_ID != null && $genero_ID != "") {
        if ($autor_ID != null && $autor_ID != "") {
            if ($numeroEdicaoLivro != null && $numeroEdicaoLivro != "") {
                if ($anoPublicacaoLivro != null && $anoPublicacaoLivro != "") {
                    if ($qtdLivro != null && $qtdLivro != "") {
                        if ($isbnLivro != null && $isbnLivro != "") {
                            if ($nomeLivro != null && $nomeLivro != "") {
                                if ($id != null && $id != "") {
                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Falha na conexão: " . $conn->connect_error);
                                    }

                                    $sql = "UPDATE livro SET 
                                    isbn='" . $isbnLivro . "', 
                                    livro='" . $nomeLivro . "', 
                                    qtd='" . $qtdLivro . "', 
                                    ano_publicacao='" . $anoPublicacaoLivro . "', 
                                    nro_edicao='" . $numeroEdicaoLivro . "', 
                                    autor_ID='" . $autor_ID . "', 
                                    genero_ID='" . $genero_ID . "',
                                    editora_ID='" . $editora_ID . "' 
                                    WHERE id='" . $id . "';";

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
                    }
                }
            }
        }
    }
}
?>