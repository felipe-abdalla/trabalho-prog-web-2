<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "biblioteca_trabalho";

$id = $_POST['id'];
$nomeEditora = $_POST['nomeEditora'];
$cnpjEditora = $_POST['cnpjEditora'];
$paisEditora = $_POST['paisEditora'];
$cidadeEditora = $_POST['cidadeEditora'];
$ruaEditora = $_POST['ruaEditora'];
$bairroEditora = $_POST['bairroEditora'];
$cepEditora = $_POST['cepEditora'];



if ($cnpjEditora != null && $cnpjEditora != "") {
    if ($cepEditora != null && $cepEditora != "") {
        if ($bairroEditora != null && $bairroEditora != "") {
            if ($ruaEditora != null && $ruaEditora != "") {
                if ($cidadeEditora != null && $cidadeEditora != "") {
                    if ($paisEditora != null && $paisEditora != "") {
                        if ($nomeEditora != null && $editora != "") {
                            if ($id != null && $id != "") {

                                if ($id != null && $id != "") {
                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Falha na conexão: " . $conn->connect_error);
                                    }


                                    $sql = "UPDATE editora SET editora='" . $nomeEditora . "', 
                               rua='" . $ruaEditora . "', 
                               bairro='" . $bairroEditora . "', 
                               cidade='" . $cidadeEditora . "', 
                               cep='" . $cepEditora . "', 
                               pais='" . $paisEditora . "', 
                               cnpj='" . $cnpjEditora . "' 
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