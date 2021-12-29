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
          <h1 class="header">Exercício 03</h1>
          <form action="exercicio3.php" method="POST" class="mx-auto d-block">
            <input type="number" name="numero" class="form-control" placeholder="Informe um número">
            <button type="submit" class="btn btn-outline-dark" name="submit">Calcular Tabuada</button>
          </form>
        <div class="result mx-auto d-block" style="color: #fff;">
            <?php
                if(isset($_POST['numero'])){
                  $numero = $_POST['numero'];
                  echo "<h3>Tabuada do $numero</h3>";
                  for($i = 1; $i<= 10; $i++){
                    $result = $numero * $i;
                    echo "<p>$numero x $i = $result</p>";
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