<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar Livro</title>
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
    <?php
    // Configuração da conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "biblioteca_trabalho";

    // Criando a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificando a conexão
    if ($conn->connect_error) {
      die("Conexão falhou: " . $conn->connect_error);
    }
    ?>
    <br><br><br><br><br>
    <section class="container">
      <h2 id="titulo">Cadastro de Livro</h2>
      <br>
      <form class="row g-3" action="gerenciarLivro.php" method="POST" id="frmCadastroLivro">
        <div class="col-12">
          <label for="nomeLivro" class="form-label">Livro</label>
          <input type="text" class="form-control" id="nomeLivro" name="nomeLivro" placeholder="Digite o título do livro"
            required maxlength="255">
        </div>
        <div class="col-6">
          <label for="isbnLivro" class="form-label">ISBN</label>
          <input type="text" class="form-control" id="isbnLivro" name="isbnLivro" placeholder="Digite o ISBN do livro"
            required maxlength="255">
        </div>
        <div class="col-6">
          <label for="qtdLivro" class="form-label">Quantidade</label>
          <input type="number" class="form-control" id="qtdLivro" name="qtdLivro"
            placeholder="Digite o a quatidade de exemplares" required>
        </div>
        <div class="col-6">
          <label for="anoPublicacaoLivro" class="form-label">Ano de Publicação</label>
          <input type="number" class="form-control" id="anoPublicacaoLivro" name="anoPublicacaoLivro" required>
        </div>
        <div class="col-6">
          <label for="numeroEdicaoLivro" class="form-label">Número da Edição</label>
          <input type="number" class="form-control" id="numeroEdicaoLivro" name="numeroEdicaoLivro"
            placeholder="Digite o número de edição do livro" required>
        </div>

        <?php
        // Consulta SQL para buscar todos os autores
        $sql = "SELECT ID, concat(primeiro_nome, ' ', ultimo_nome) as nomeAutor FROM autor";
        $result = $conn->query($sql);
        ?>

        <div class="col-md-4">
          <label for="autorLivro" class="form-label">Autor</label>
          <select id="autorLivro" class="form-select" name="autorLivroSelect" required>
            <option value="">Escolha um autor...</option>
            <?php
            // Loop para percorrer os resultados e exibir cada autor em um <option>
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['ID'] . "'>" . $row['nomeAutor'] . "</option>";
              }
            }
            ?>
          </select>
        </div>

        <?php
        // Consulta SQL para buscar todos os autores
        $sql = "SELECT ID, genero FROM genero";
        $result = $conn->query($sql);
        ?>

        <div class="col-md-4">
          <label for="generoLivro" class="form-label">Gênero</label>
          <select id="generoLivro" class="form-select" name="generoLivroSelect" required>
            <option value="">Escolha um gênero...</option>
            <?php
            // Loop para percorrer os resultados e exibir cada autor em um <option>
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['ID'] . "'>" . $row['genero'] . "</option>";
              }
            }
            ?>
          </select>
        </div>

        <?php
        // Consulta SQL para buscar todos os autores
        $sql = "SELECT ID, editora FROM editora";
        $result = $conn->query($sql);
        ?>

        <div class="col-md-4">
          <label for="editoraLivro" class="form-label">Editora</label>
          <select id="editoraLivro" class="form-select" name="editoraLivroSelect" required>
            <option value="">Escolha uma editora...</option>
            <?php
            // Loop para percorrer os resultados e exibir cada autor em um <option>
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['ID'] . "'>" . $row['editora'] . "</option>";
              }
            }
            ?>
          </select>
        </div>

        <?php
        // Fechando a conexão com o banco de dados
        $conn->close();
        ?>

        <div class="col-12">
          <button type="submit" class="btn btn-dark" id="btnCadastrar">Cadastrar</button>
          <a class="btn btn-dark" href="./Gerenciar.php">Voltar</a>
          <div id="liveAlertPlaceholder"><br></div>
        </div>
        <input type="hidden" name="id" value="" id="idLivro">
      </form>
      
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <div class="text-center">
        Nota:
        Para cadastrar um livro, é necessário que exista pelo menos um autor, gênero e editora.</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <br>
        <section class="text-center">
          <div class="center-align btn-group">
            <a href="cadastrarAutor.php" class="btn btn-outline-dark">Cadastrar Autor</a>
            <a href="cadastrarGenero.php" class="btn btn-outline-dark">Cadastrar Genero</a>
            <a href="cadastrarEditora.php" class="btn btn-outline-dark">Cadastrar Editora</a>
          </div>
        </section>
      </div>
    </section>

    <!--CÓDIGO PARA VERIFICAR SE HÁ PARAMETROS NO LINK E PROMOVER A ALTERAÇÃO DA ARVORE DOM E PERMITIR A ALTERAÇÃO DO CÓDIGO-->
    <?php
    if (isset($_GET['idEditora'])) {
      $idEditora = $_GET["idEditora"];
      if ($idEditora != null && $idEditora != "") {
        $idGenero = $_GET["idGenero"];
        if ($idGenero != null && $idGenero != "") {
          $idAutor = $_GET["idAutor"];
          if ($idAutor != null && $idAutor != "") {
            $nro_edicao = $_GET["nro_edicao"];
            if ($nro_edicao != null && $nro_edicao != "") {
              $ano_publicacao = $_GET["ano_publicacao"];
              if ($ano_publicacao != null && $ano_publicacao != "") {
                $qtd = $_GET["qtd"];
                if ($qtd != null && $qtd != "") {
                  $isbn = $_GET["isbn"];
                  if ($isbn != null && $isbn != "") {
                    $livro = $_GET["livro"];
                    if ($livro != null && $livro != "") {
                      $id = $_GET["id"];
                      if ($id != null && $id != "") { 
                        echo "
                          <script>
                              document.getElementById('nomeLivro').value = '" . ($livro) . "';
                              document.getElementById('isbnLivro').value = '" . ($isbn) . "';
                              document.getElementById('qtdLivro').value = '" . ($qtd) . "';
                              document.getElementById('anoPublicacaoLivro').value = '" . ($ano_publicacao) . "';
                              document.getElementById('numeroEdicaoLivro').value = '" . ($nro_edicao) . "';
                              document.getElementById('autorLivro').value = '" . ($idAutor) . "';
                              document.getElementById('generoLivro').value = '" . ($idGenero) . "';
                              document.getElementById('editoraLivro').value = '" . ($idEditora) . "';
                              document.getElementById('btnCadastrar').innerHTML = 'Alterar';
                              document.getElementById('titulo').innerHTML = 'Alteração de Livro';
                              let frm = document.getElementById('frmCadastroLivro').action='alterarLivro.php';
                              document.getElementById('idLivro').value = '" . $id . "';
                          </script>
                        ";
                        }
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

    <!--SCRIPT para exibir alerta de confirmação de cadastro-->
    <script>
      const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
      const appendAlert = (message, type) => {
        const wrapper = document.createElement('div')
        wrapper.innerHTML = [
          `<div class="alert alert-${type} alert-dismissible fade show" role="alert">`,
          `   <div>${message}</div>`,
          '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
          '</div>'
        ].join('')
        alertPlaceholder.append(wrapper)
      }

      const alertTrigger = document.getElementById('last_id')
      <?php
      $last_id = $_GET['last_id'];
      echo "
        if (" . $last_id . " != 0) {
          appendAlert('Cadastro efetuado com sucesso!', 'success')
        }";

      ?>
    </script>

  </main>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>