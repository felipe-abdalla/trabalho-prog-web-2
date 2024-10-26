<!doctype html>
<html lang="pt-br" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.122.0">
  <title>Vitrine de Livraria</title>

  <!-- Link do boodstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Link para o arquivo css -->
  <link rel="stylesheet" href="css/style.css">


  <!-- CSS do carousel -->
  <link href="carousel.css" rel="stylesheet">
</head>

<body>
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
              <a class="nav-link active" aria-current="page" href="./Generos.php">Generos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./Editoras.php">Editoras</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./Gerenciar.php">Gerenciar</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>
  </header>


  <main>

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
        <div class="carousel-item active">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
          </svg>
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Example headline.</h1>
              <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
            </div>
          </div>
        </div>
        <!-- Outra imagem -->
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
          </svg>
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Some representative placeholder content for the second slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
            </div>
          </div>
        </div>
        <!-- Outra imagem -->
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
          </svg>
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>One more for good measure.</h1>
              <p>Some representative placeholder content for the third slide of this carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Seta da esquerda -->
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <!-- Seta da direita -->
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->



    <section class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <!-- Primeiro card -->
        <div class="col-lg-4">
          <!-- Imagem -->
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
          </svg>
          <!-- Titulo -->
          <h2 class="fw-normal">Heading</h2>
          <!-- Descrição -->
          <p>Some representative placeholder content for the three columns of text below the carousel. This is the first
            column.</p>
          <!-- Botão -->
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div>
        <!-- Segundo card -->
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
          </svg>
          <h2 class="fw-normal">Heading</h2>
          <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.
          </p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div>
        <!-- Terceiro card -->
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
          </svg>
          <h2 class="fw-normal">Heading</h2>
          <p>And lastly this, the third column of representative placeholder content.</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div>
      </div>


      <h2 class="text-center bg-white text-dark">Produtos que estão bombando</h2>

      <div class="container row mx-auto g-4">


        <div class="col-12 col-md-6 col-xxl-4">
          <div class="card">
            <img class="img-fluid" src="img/camisa.jpg" alt="">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <p>R$30,00</p>
              <a href="#" class="btn btn-primary">Ver mais</a>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-xxl-4">
          <div class="card">
            <img class="img-fluid" src="img/calça.jpg" alt="">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <p>R$30,00</p>
              <a href="#" class="btn btn-primary">Ver mais</a>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-xxl-4">
          <div class="card">
            <img class="img-fluid" src="img/tenis.jpg" alt="">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <p>R$30,00</p>
              <a href="#" class="btn btn-primary">Ver mais</a>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-xxl-4">
          <div class="card">
            <img class="img-fluid" src="img/jaqueta.jpg" alt="">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <p>R$30,00</p>
              <a href="#" class="btn btn-primary">Ver mais</a>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-xxl-4">
          <div class="card">
            <img class="img-fluid" src="img/oculos.png" alt="">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <p>R$30,00</p>
              <a href="#" class="btn btn-primary">Ver mais</a>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-xxl-4">
          <div class="card">
            <img class="img-fluid" src="img/bolsa.jpg" alt="">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <p>R$30,00</p>
              <a href="#" class="btn btn-primary">Ver mais</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-black text-light ">

      <h2 class="text-center mt-4 mb-4">Conheça toda as nossas facilidades </h2>

      <div class="d-flex flex-column align-items-center mt-4 pb-4">


        <div class="container row mx-auto g-4">
          <div class="col-12 col-md-12 col-xxl-4">
            <div class="divs-facilidades mx-auto d-flex mb-3">
              <div> <i class="bi bi-x-diamond icons m-3 text-warning"></i></div>
              <div>
                <div class=" mb-1 text-warning">PAGUE PELO PIX</div>
                <div class="texto-menor">Ganhe 5% OFF em
                  pagamentos via PIX
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-12 col-xxl-4">
            <div class="divs-facilidades mx-auto d-flex mb-3">
              <div> <i class="bi bi-arrow-repeat icons m-3 text-warning"></i></div>
              <div>
                <div class=" mb-1 text-warning text-warning">TROCA GRATIS</div>
                <div class="texto-menor ">fique livre para trocar em até
                  30 dias
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-12 col-xxl-4">
            <div class="divs-facilidades mx-auto d-flex mb-3">
              <div><i class="bi bi-flower1 icons m-3 text-warning"></i></div>
              <div>
                <div class=" mb-1 text-warning">SUSTENTABILIDADE</div>
                <div class="texto-menor">moda responsável , que respeita
                  o meio ambiente
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <footer class="text-center">
    <p class="py-3 my-0 bg-black text-light">
      2023 <i class="bi bi-c-circle"></i> Desenvolvido por Alura | Projeto
      fictício sem fins comerciais.
    </p>
  </footer>
  
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>