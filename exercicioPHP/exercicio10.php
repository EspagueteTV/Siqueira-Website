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
          <h1 class="header">Exercício 10</h1>
          <form method="POST" action="exercicio10-recebeDados.php" class="mx-auto d-block">
            <div class="row">
              <div class="col-md-6">
                <input type="text" name="fNome" class="form-control" placeholder="Nome"/>
              </div>
              <div class="col-md-6">
                <input type="text" name="fSobrenome" class="form-control" placeholder="Sobrenome"/>
              </div>
            </div>
            <input type="text" name="fEmail" class="form-control" placeholder="Email"/>
            <input type="text" name="fTelefone" class="form-control" placeholder="Telefone com DDD"/>
            <input type="password" name="fSenha" class="form-control" placeholder="Senha"/>
            <input type="password" name="fConfirmaSenha" class="form-control" placeholder="Confirmar Senha"/>

            <hr>
            <div class="row bloco">
              <div class="col-md-5">
                <label>Data de Nascimento: </label>
              </div>
              <div class="col-md-7">
                <input type="date" name="fDataNascimento" class="form-control"/>
              </div>
            </div>
            <hr>
            <div class="row bloco">
              <div class="col-md-3">
                <label>Sexo: </label>
              </div>
              <div class="col-md-9">
                <input type="radio" name="fSexo" value="Masculino" id="masc"/>
                  <label for="#masc">Masculino</label><br>
                <input type="radio" name="fSexo" value="Feminino" id="fem"/>
                    <label for="#fem">Feminino</label>
              </div>
            </div>
            <hr>
            <button type="submit" name="submit" class="btn btn-outline-dark">Cadastrar</button>
          </form>
        </div>

      </div>
    </div>


    <!-- Adição do footer -->
        <?php include_once("../php/footer.php"); ?>
</body>
</html>