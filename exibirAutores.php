<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<body>

    <header data-bs-theme="dark">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Inventário</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./exibirAutores.php">Autores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./exibirGeneros.php">Generos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./exibirEditoras.php">Editoras</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./Gerenciar.php">Gerenciar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <br>
        <br>
        <br>
        <br>
        <section class="container card">
            <div class="card-body">
                <h5 class="card-title">Autores</h5>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">PRIMEIRO NOME</th>
                            <th scope="col">ÚLTIMO NOME</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--CONEXÃO COM O BANCO E WHILE BUSCANDO NO BD-->
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "root";
                        $dbname = "biblioteca_trabalho";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT id, primeiro_nome, ultimo_nome FROM autor";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                <th scope='row'>" . $row["id"] . "</th> 
                                <td>" . $row["primeiro_nome"] . "</td>
                                <td>". $row["ultimo_nome"] ."</td>
                                </tr>";
                            }
                        } else {
                            echo "<tr>
                            <td>Nenhum registro encontrado</td>
                            <td></td>
                            <td></td>
                            </tr>";
                        }
                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

</body>

</html>