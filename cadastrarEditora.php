<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar Editora</title>
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
    <br><br><br><br><br>
    <section class="container text-center">
      <div class="center-align btn-group">
        <a href="cadastrarLivro.php" class="btn btn-outline-dark">Cadastrar Livro</a>
        <a href="cadastrarAutor.php" class="btn btn-outline-dark">Cadastrar Autor</a>
        <a href="cadastrarGenero.php" class="btn btn-outline-dark">Cadastrar Genero</a>
        <a href="cadastrarEditora.php" class="btn btn-outline-dark">Cadastrar Editora</a>
      </div>
    </section>

    <section class="container">
      <h2 id="titulo">Cadastro de Editora</h2>
      <br>
      <form class="row g-3" action="gerenciarEditora.php" method="POST" id="frmCadastroEditora">
        <div class="col-12">
          <label for="nomeEditora" class="form-label">Editora</label>
          <input type="text" class="form-control" id="nomeEditora" name="nomeEditora"
            placeholder="Digite o nome da editora" required maxlength="255">
        </div>
        <div class="col-12">
          <label for="cnpjEditora" class="form-label">CNPJ</label>
          <input type="text" class="form-control" id="cnpjEditora" name="cnpjEditora"
            placeholder="Digite o CNPJ (apenas números)" maxlength="14">
        </div>
        <div class="col-6">
          <label for="paisEditora" class="form-label">País</label>
          <input type="text" class="form-control" id="paisEditora" name="paisEditora"
            placeholder="Digite o país da editora" required maxlength="255">
        </div>
        <div class="col-6">
          <label for="cidadeEditora" class="form-label">Cidade</label>
          <input type="text" class="form-control" id="cidadeEditora" name="cidadeEditora"
            placeholder="Digite a cidade da editora" required maxlength="45">
        </div>
        <div class="col-12">
          <label for="ruaEditora" class="form-label">Rua</label>
          <input type="text" class="form-control" id="ruaEditora" name="ruaEditora"
            placeholder="Digite a rua da editora" required maxlength="255">
        </div>
        <div class="col-6">
          <label for="bairroEditora" class="form-label">Bairro</label>
          <input type="text" class="form-control" id="bairroEditora" name="bairroEditora"
            placeholder="Digite o bairro da editora" required maxlength="255">
        </div>
        <div class="col-6">
          <label for="cepEditora" class="form-label">CEP</label>
          <input type="text" class="form-control" id="cepEditora" name="cepEditora"
            placeholder="Digite o CEP da editora (apenas números)" required maxlength="8">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-dark" id="btnCadastrar">Cadastrar</button>
          <a class="btn btn-dark" href="./Gerenciar.php">Voltar</a>
          <div id="liveAlertPlaceholder"><br></div>
        </div>
        <input type="hidden" name="id" value="" id="idEditora">
      </form>
    </section>

    <!--CÓDIGO PARA VERIFICAR SE HÁ PARAMETROS NO LINK E PROMOVER A ALTERAÇÃO DA ARVORE DOM E PERMITIR A ALTERAÇÃO DO CÓDIGO-->
    <?php
    if (isset($_GET['cnpj'])) {
      $cnpj = $_GET["cnpj"];
      if ($cnpj != null && $cnpj != "") {
        $cep = $_GET["cep"];
        if ($cep != null && $cep != "") {
          $bairro = $_GET["bairro"];
          if ($bairro != null && $bairro != "") {
            $rua = $_GET["rua"];
            if ($rua != null && $rua != "") {
              $cidade = $_GET["cidade"];
              if ($cidade != null && $cidade != "") {
                $pais = $_GET["pais"];
                if ($pais != null && $pais != "") {
                  $editora = $_GET["editora"];
                  if ($editora != null && $editora != "") {
                    $id = $_GET["id"];
                    if ($id != null && $id != "") {
                      echo "
                        <script>
                            document.getElementById('nomeEditora').value = '" . ($editora) . "';
                            document.getElementById('paisEditora').value = '" . ($pais) . "';
                            document.getElementById('cidadeEditora').value = '" . ($cidade) . "';
                            document.getElementById('ruaEditora').value = '" . ($rua) . "';
                            document.getElementById('bairroEditora').value = '" . ($bairro) . "';
                            document.getElementById('cepEditora').value = '" . ($cep) . "';
                            document.getElementById('cnpjEditora').value = '" . ($cnpj) . "';
                            document.getElementById('btnCadastrar').innerHTML = 'Alterar';
                            document.getElementById('titulo').innerHTML = 'Alteração da Editora';
                            let frm = document.getElementById('frmCadastroEditora').action='alterarEditora.php';
                            document.getElementById('idEditora').value = '" . $id . "';
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