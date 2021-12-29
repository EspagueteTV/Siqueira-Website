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
          <?php include_once("../php/menu-exercicio-php.php"); 
            
          ?>
        </div>
        <div class="col-md-9">
          <h1 class="header">Exercício 02</h1>

          <form action="exercicio2.php" method="POST" class="mx-auto d-block">
            <input type="text" name="numero" class="form-control" placeholder="Informe 20 número, separados por vírgula">
            <button type="submit" name="submit" class="btn btn-outline-dark">Enviar</button>
          </form>
          <div class="result mx-auto d-block">
          <?php
            if(isset($_POST['numero'])){
              $valor = $_POST['numero'];
              $valores = explode(',',$valor); 
              $somaPositivo = 0;
              $qtdNegativo = 0;  
              
              if(sizeof($valores) == 20){
                for($i = 0; $i < sizeof($valores); $i++){
                  if($valores[$i] > 0){
                    $somaPositivo += $valores[$i];
                  }else{
                    $qtdNegativo++;
                  }
                }
                echo "<p>Foram informados 20 números</p>";
                echo "<p>A soma dos números positivos informados é $somaPositivo.</p>";
                echo "<p>A quantidade de números negativos informados é $qtdNegativo. </p>";

              }else{
                if(sizeof($valores) > 20){
                  echo "<p>[ERRO] Foi informado mais valores que o solicitado<p>";
                }else{
                  echo "<p>[ERRO] Foi informado menos valores que o solicitado</p>";
                }
                echo "<p>Por favor, informa novamente os valores, lembrando que só é possível 20 valores</p>";
              }
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