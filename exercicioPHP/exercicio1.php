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
        
        <div class="col-md-9 ml-0 mr-0">
          <h1 class="header">Exercício 01</h1>
          <form method="POST" action="exercicio1.php" class="mx-auto d-block">
            <input type="number" name="num1" class="form-control" placeholder="Informe o primeiro número">
            <input type="number" name="num2" class="form-control" placeholder="Informe o segundo número">
            <button type="submit" name="submit" class="btn btn-outline-dark">Enviar</button>
          </form>
          <div class="result mx-auto d-block">
              <?php
                if(isset($_POST['num1']) && isset($_POST['num2'])){
                  $num1 = $_POST['num1'];
                  $num2 = $_POST['num2'];
                  $soma = $num1 + $num2;

                  if($soma > 20){
                    $soma += 8;
                  }else{
                    $soma -= 5;
                  }
                  echo "<h3>O resultado é $soma </h3>";
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