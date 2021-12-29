<!DOCTYPE html>
<html lang="pt-Br">
<head>
  <?php include("headerExercicio.php"); ?>
  <link rel="stylesheet" href="../css/exercicio6.css">

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
          <h1 class="header">Exercício 06 </h1>
          <form action="exercicio6.php" method="POST" class="mx-auto d-block">
            <input type="number" class="form-control" name="numero" placeholder="Quantos círculos escrever">
            <button type="submit" name="submit" class="btn btn-outline-dark">Desenhar</button>
          </form>
          <div class="result d-block mx-auto">
            <?php
              if(isset($_POST['numero'])){
                $vezes = $_POST['numero'];
                for($i = 0; $i < $vezes; $i++){
                  echo '<div class="circulo"></div>';
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