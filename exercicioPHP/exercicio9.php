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
          <h1 class="header">Exercício 09</h1>
          <form method="POST" action="exercicio9.php" class="mx-auto d-block">
            <input type="text" class="form-control" name="fTexto" placeholder="Informe um texto">
            <button type="submit" name="submit" class="btn btn-outline-dark">Traduzir</button>
          </form>
          <div class="result mx-auto d-block">
              <?php
                if(isset($_POST['fTexto'])){
                  $texto = $_POST['fTexto'];
                  $texto = traduzir($texto);
                  echo $texto;
                }

                function traduzir($mensagem){
                  $vogais = ['a', 'A','ã', 'Ã', 'á', 'Á', 'e', 'E', 'ê', 'Ê','I', 'i', 'o', 'O', 'õ', 'Õ', 'U', 'u', 'ú', 'Ú'];
                  for($i = 0; $i < sizeof($vogais); $i++){
                    $mensagem = str_replace($vogais[$i], "i", $mensagem);
                  }
                  return $mensagem;
                }
              ?>
          </div>
        </div>

      </div>
    </div>


    <!-- Adição do footer -->
        <?php include_once("../php/footer.php"); ?>
</body>
</html>