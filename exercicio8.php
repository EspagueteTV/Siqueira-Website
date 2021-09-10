<!DOCTYPE html>
<html lang="pt-Br">
<head>
  <title>Siqueira Websites</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Inserção do Bootstrap versão 4 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  
  <!-- Fim insercão Bootstrap Versão 4-->
  <!-- Javascript do site-->
  <script src="js/site.js"></script>
  <!-- css do site-->
  <link rel="shortcut icon" href="imagem/Logo_Clara.svg" target="image/x-icon">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/navbar-exercicio.css">
  <!-- adição do Font Awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
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
        <?php include("php/menu.php"); ?>

    <div class="container-fluid main">
      <div class="row">
        <div class="col-md-3">
          <?php include_once("php/menu-exercicio-php.php"); ?>
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
        <?php include_once("php/footer.php"); ?>
</body>
</html>