<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Excluir Registro</title>
</head>
<body>
  
  <!-- Link do bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <script>
    // Abre o modal automaticamente assim que a página for carregada
    window.onload = function() {
      var modal = new bootstrap.Modal(document.getElementById('excluir'));
      modal.show();
    }
  </script>

<?php

  $id = $_GET['id'];
  $tabela = $_GET['tabela'];

  echo"
  <!-- Modal de confirmação para exclusão -->
  <div class='modal fade' id='excluir' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <h1 class='modal-title fs-5' id='exampleModalLabel'>Confirmar exclusão</h1>
        </div>
        <div class='modal-body'>
          Você confirma a exclusão do registro?
        </div>
        <div class='modal-footer'>
          <a type='button' class='btn btn-dark' href='Gerenciar.php'>Cancelar</a>
          <a type='button' class='btn btn-danger' href='excluir.php?id=" . $id . "&tabela=" . $tabela . "'>Confirmar</a>
        </div>
      </div>
    </div>
  </div>
  ";

?>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
