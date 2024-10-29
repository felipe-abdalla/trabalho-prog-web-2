<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadstro Livro</title>
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
    <br><br><br><br><br>



    <div class="container row mx-auto g-4">

      <div class="col-6 col-md-4 col-xxl-2">
        <div class="card">
          <div class="card-header">
            <p class="text-center">Cadastrar Editora</p>
          </div>
          <div>
            <form action="CadastrarEditora.php" method="post">
              <p>
                <label for="Id">ID</label>
                <input name="id" type="text">
              </p>
              <p>
                <label for="Descricao">Descrição</label>
                <input name="descricao" type="text">
              </p>
              <p>
                <label for="Idade">idade</label>
                <input name="idade" type="text">
              </p>
              <p>
                <input type="submit" value="Cadastrar">
              </p>
            </form>
          </div>
        </div>
      </div>


      <div class="col-6 col-md-4 col-xxl-2">
        <div class="card">
          <div class="card-header">
            <p class="text-center">Cadastrar Editora</p>
          </div>
          <div>
            <form action="CadastrarEditora.php" method="post">
              <p>
                <label for="Id">ID</label>
                <input name="id" type="text">
              </p>
              <p>
                <label for="Descricao">Descrição</label>
                <input name="descricao" type="text">
              </p>
              <p>
                <label for="Idade">idade</label>
                <input name="idade" type="text">
              </p>
              <p>
                <input type="submit" value="Cadastrar">
              </p>
            </form>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-xxl-2">
        <div class="card">
          <div class="card-header">
            <p class="text-center">Cadastrar Editora</p>
          </div>
          <div>
            <form action="CadastrarEditora.php" method="post">
              <p>
                <label for="Id">ID</label>
                <input name="id" type="text">
              </p>
              <p>
                <label for="Descricao">Descrição</label>
                <input name="descricao" type="text">
              </p>
              <p>
                <label for="Idade">idade</label>
                <input name="idade" type="text">
              </p>
              <p>
                <input type="submit" value="Cadastrar">
              </p>
            </form>
          </div>
        </div>
      </div>


    </div>



  </main>







</body>

</html>