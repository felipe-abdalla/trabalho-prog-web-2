<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerenciamento</title>
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
              <a class="nav-link active" aria-current="page" href="./Autores.php">Autores</a>
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
  <!--OPÇÕES DE CADASTRO-->
    <section class="container text-center">
      <div class="center-align btn-group">
        <a href="#" class="btn btn-outline-dark">Cadastrar Livro</a>
        <a href="cadastrarAutor.html" class="btn btn-outline-dark">Cadastrar Autor</a>
        <a href="#" class="btn btn-outline-dark">Cadastrar Genero</a>
        <a href="#" class="btn btn-outline-dark">Cadastrar Editora</a>
      </div>
    </section>

  <br>
  <!--TABELA DE EXIBIÇÃO DOS LIVROS CADASTRADOS-->
    <section class="container card">
      <div class="card-body">
        <h5 class="card-title">Livros</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">TITULO</th>
              <th scope="col">ISBN</th>
              <th scope="col">QUANTIDADE</th>
              <th scope="col">DATA DE PUBLICACAO</th>
              <th scope="col">Nº EDICAO</th>
              <th scope="col">AUTOR</th>
              <th scope="col">GENERO</th>
              <th scope="col">EDITORA</th>
              <th scope="col">AÇÕES</th>
            </tr>
          </thead>
          <tbody>
            <!--FAZER AQUI O WHILE BUSCANDO NO BD-->
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>Otto</td>
              <td>Otto</td>
              <td>Otto</td>
              <td>Otto</td>
              <td>Otto</td>
              <td><a href="#">ALTERAR</a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>Otto</td>
              <td>Otto</td>
              <td>Otto</td>
              <td>Otto</td>
              <td>Otto</td>
              <td><a href="#">ALTERAR</a></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>TESTE</td>
              <td>TESTE</td>
              <td>@fat</td>
              <td>Otto</td>
              <td>Otto</td>
              <td>Otto</td>
              <td>Otto</td>
              <td>Otto</td>
              <td><a href="#">ALTERAR</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <br>
    <!--TABELA DE EXIBIÇÃO DOS AUTORES CADASTRADOS-->
    <section class="container card">
      <div class="card-body">
        <h5 class="card-title">Autores</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">NOME</th>
              <th scope="col">SOBRENOME</th>
              <th scope="col">AÇÕES</th>
            </tr>
          </thead>
          <tbody>
            <!--FAZER AQUI O WHILE BUSCANDO NO BD-->
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td><a href="#">ALTERAR</a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td><a href="#">ALTERAR</a></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>TESTE</td>
              <td>TESTE</td>
              <td><a href="#">ALTERAR</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <br>
    <!--TABELA DE EXIBIÇÃO DOS GENEROS CADASTRADOS-->
    <section class="container card">
      <div class="card-body">
        <h5 class="card-title">Generos</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">GENERO</th>
              <th scope="col">AÇÕES</th>
            </tr>
          </thead>
          <tbody>
            <!--FAZER AQUI O WHILE BUSCANDO NO BD-->
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td><a href="#">ALTERAR</a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td><a href="#">ALTERAR</a></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>TESTE</td>
              <td><a href="#">ALTERAR</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <br>
  <!--TABELA DE EXIBIÇÃO DAS EDITORAS CADASTRADAS-->
    <section class="container card">
      <div class="card-body">
        <h5 class="card-title">Editoras</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">EDITORA</th>
              <th scope="col">PAIS</th>
              <th scope="col">CIDADE</th>
              <th scope="col">BAIRRO</th>
              <th scope="col">RUA</th>
              <th scope="col">CEP</th>
              <th scope="col">CNPJ</th>
              <th scope="col">AÇÕES</th>
            </tr>
          </thead>
          <tbody>
            <!--FAZER AQUI O WHILE BUSCANDO NO BD-->
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>Otto</td>
              <td>Otto</td>
              <td>Otto</td>
              <td>Otto</td>
              <td><a href="#">ALTERAR</a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>Otto</td>
              <td>Otto</td>
              <td>Otto</td>
              <td>Otto</td>
              <td><a href="#">ALTERAR</a></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>TESTE</td>
              <td>TESTE</td>
              <td>@fat</td>
              <td>Otto</td>
              <td>Otto</td>
              <td>Otto</td>
              <td>Otto</td>
              <td><a href="#">ALTERAR</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

  </main>

</body>

</html>