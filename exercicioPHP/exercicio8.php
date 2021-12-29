<!DOCTYPE html>
<html lang="pt-Br">
<head>
  <?php include("headerExercicio.php"); ?>

  <style>
    .quadrado{
      height: 10px;
      width: 1%;
      background: linear-gradient(#1818c9, #4444fa9a);
      display: inline-block;
    }
    .barraProgresso{
      width: 80%;
      height: 10px;
	    background-color: #6d6d6e34;
    }
  </style>
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
          <h1 class="header">Exercício 08</h1>
          <form method="POST" action="exercicio8.php" class="mx-auto d-block">
            <input type="number" min="1" max="100" class="form-control" name="numBarra" placeholder="Informe um número para a barra de progresso">
            
            <button type="submit" name="submit" class="btn btn-outline-dark">Enviar</button>
          </form>
          <div class="result mx-auto d-block">
              <div class="barraProgresso">
                <?php
                if(isset($_POST['numBarra'])){
                  $numVezesBarra = $_POST['numBarra'];
                  for($i = 0; $i < $numVezesBarra; $i++){
                    echo "<div class='quadrado'></div>";
                  }
                  echo "<h5> $numVezesBarra % </h5>";
                }
                ?>
              </div>
          </div>
        </div>

      </div>
    </div>


    <!-- Adição do footer -->
        <?php include_once("../php/footer.php"); ?>
</body>
</html>