<!doctype html>
<html lang="pt-br" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.122.0">
  <title>Inicio</title>

  <!-- Link do bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

  <!-- Link para o arquivo css -->
  <link rel="stylesheet" href="css/style.css">

  <!-- CSS do carousel -->
  <link href="./carrossel.css" rel="stylesheet">
</head>

<body id="body">
  <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check2" viewBox="0 0 16 16">
      <path
        d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
      <path
        d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
      <path
        d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
      <path
        d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
    </symbol>
  </svg>

  <!-- Header com navbar -->
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
    ?>

    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
      <!-- Indicadores de página do carousel no centro inferior -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <!-- Imagem atual -->
        <div class="carousel-item active" >
          <img class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" src="./img/autor.jpg" alt="" style="object-fit: cover;"> 
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Autores renomados</h1>
              <p class="opacity-75">
                Conheça nossos autores cadastrados
              </p>
              <p><a class="btn btn-lg btn-light" href="exibirAutores.php">Ver autores</a></p>
            </div>
          </div>
        </div>
        <!-- Outra imagem -->
        <div class="carousel-item">
          <img class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" src="./img/genero.jpg" alt="" style="object-fit: cover;">
          <div class="container">
            <div class="carousel-caption">
              <h1>Gêneros diversos</h1>
              <p>Possuímos gêneros variados cadastrados na plataforma</p>
              <p><a class="btn btn-lg btn-light" href="exibirGeneros.php">Ver gêneros</a></p>
            </div>
          </div>
        </div>
        <!-- Outra imagem -->
        <div class="carousel-item">
          <img class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" src="./img/editora.jpg" alt="" style="object-fit: cover;">
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Editoras criativas</h1>
              <p>As editoras cadastradas em nossa plataforma possuem alta distinção</p>
              <p><a class="btn btn-lg btn-light" href="exibirEditoras.php">Ver editoras</a></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Seta da esquerda -->
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <!-- Seta da direita -->
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Proximo</span>
      </button>
    </div>

    <!-- Bloco central do site com a exibição dos livros cadastrados
  ================================================== -->
    <!-- Caso não haja registro, será exibido mensagem de que não há registros cadastrados -->

    <section class="container marketing">
      <div class="container row mx-auto g-4">

        <?php
        $sql = "SELECT l.livro, a.primeiro_nome AS autor, g.genero, e.editora, l.qtd , l.ano_publicacao
        FROM livro l 
        JOIN autor a ON a.ID = l.autor_ID
        JOIN genero g ON g.ID = l.genero_ID 
        JOIN editora e ON e.ID = l.editora_ID";
        $result = $conn->query($sql);
        ?>

        <h2 class="text-center bg-white text-dark">Livros disponíveis</h2>

        <div class="container row mx-auto g-4">
          <?php
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "
                  <div class='col-12 col-md-6 col-xxl-4'>
                    <div class='card'>
                      <div class='card-body'>
                        <h5 class='card-title'>" . htmlspecialchars($row['livro']) . "</h5>
                        <p class='card-text'>Autor: " . htmlspecialchars($row['autor']) 
                        . "<br>Gênero: " . htmlspecialchars($row['genero']) 
                        . "<br>Editora: " . htmlspecialchars($row['editora']) 
                        . "<br>Exemplares: " . htmlspecialchars($row['qtd'])
                        . "<br>Ano de Publicação: " . htmlspecialchars($row['ano_publicacao'])
                        ."</p>
                      </div>
                    </div>
                  </div>";
            }
          } else {
            echo "<p>Nenhum registro encontrado.</p>";
          }
          $conn->close();
          ?>
        </div>
      </div>
    </section>
  </main>

  <footer class="text-center">
    <section class="bg-dark text-light ">
      <h2 class="text-center mt-4 mb-4">Conheça a nossa plataforma</h2>
      <div class="d-flex flex-column align-items-center mt-4 pb-4">
        <div class="container row mx-auto g-4">
          
          <div class="col-12 col-md-12 col-xxl-4">
            <div class="divs-facilidades mx-auto d-flex mb-3">
              <div> <i class="bi bi-x-diamond icons m-3 text-warning"></i></div>
              <div>
                <div class=" mb-1 text-warning">EXIBIÇÃO DE LIVROS</div>
                <div class="texto-menor">Faça a divulgação de livros conosco.
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-12 col-xxl-4">
            <div class="divs-facilidades mx-auto d-flex mb-3">
              <div> <i class="bi bi-arrow-repeat icons m-3 text-warning"></i></div>
              <div>
                <div class=" mb-1 text-warning text-warning">AUTORES, GÊNEROS E EDITORAS</div>
                <div class="texto-menor ">Exibimos diversos autores e gêneros diversos. Além da divulgação de editoras.
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-12 col-xxl-4">
            <div class="divs-facilidades mx-auto d-flex mb-3">
              <div><i class="bi bi-flower1 icons m-3 text-warning"></i></div>
              <div>
                <div class=" mb-1 text-warning">GERENCIAMENTO</div>
                <div class="texto-menor">Faça o cadastro e atualização dos dados na página de gerenciamento.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-3 my-0 bg-dark text-light">
      2024 <i class="bi bi-c-circle"></i> Desenvolvido por Guilherme, Wesley, Flávia e Felipe | Projeto
      fictício sem fins comerciais.
    </section>
  </footer>

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>