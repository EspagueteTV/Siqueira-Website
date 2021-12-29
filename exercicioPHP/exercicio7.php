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
          <h1 class="header">Exercício 07 </h1>
          <form method="POST" action="exercicio7.php" class="mx-auto d-block">
            <label for="carroVermelho" class=>Seu carro é vermelho: </label>
                <input type="radio" name="carroVermelho" value="1">Sim
                <input type="radio" name="carroVermelho" value="0">Não<br>
            <label for="camisaBranca">Sua camisa é branca: </label>
              <input type="radio" name="camisaBranca" value="1">Sim
              <input type="radio" name="camisaBranca" value="0">Não
            <br>
            <button type="submit" name="submit" class="btn btn-outline-dark">Enviar</button>
          </form>
          <div class="result mx-auto d-block">
              <?php
              if(isset( $_POST['carroVermelho']) and isset($_POST['camisaBranca'])){
                $carroVermelho = $_POST['carroVermelho'];
                $camisaBranca = $_POST['camisaBranca'];
                $mensagem = "";
                $cachorro = 0;
                $rico = 0;

                if($carroVermelho == 1){
                  $mensagem .= "é rico, ";
                  $rico = 1;
                }
                if($rico == 1 || $camisaBranca == 0){
                  $mensagem .= "possui um cachorro";
                  $cachorro = 1;
                }
                
                if($cachorro == 0){
                  $mensagem = "tem um carro branco";
                }
                if($camisaBranca == 1){
                  $mensagem .= " e não lava roupa. ";
                }

                
                echo "Você $mensagem";
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