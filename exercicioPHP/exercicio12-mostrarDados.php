<!DOCTYPE html>
<html lang="pt-Br">
<head>
  <?php include("headerExercicio.php"); ?>
</head>
<body>
    <!-- Adição do menu superior -->
        <?php include("../php/menu.php"); ?>

    <div class="container-fluid main">
      <div class="row">
        <div class="col-md-3">
          <?php include_once("../php/menu-exercicio-php.php"); ?>
        </div>
        <div class="col-md-9">
          <h1 class="header">Exercício 12</h1>
          <table class="table table-striped px-auto d-block">
              <tr>
                  <th>Nome Completo</th>
                  <th>Data Nascimento</th>
                  <th>Email</th>
                  <th>Telefone</th>
                  <th>Sexo</th>
                  <th>Endereço</th>
              </tr>
              <?php
                include_once("../php/Exercicio12Metodos.php");
                mostrarUsuario();
              ?>
          </table>

          <a href="exercicio12.php" class="btn btn-outline-dark">Voltar ao cadastro</a>
        </div>

      </div>
    </div>


    <!-- Adição do footer -->
        <?php include_once("../php/footer.php"); ?>
</body>
</html>