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
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/footer.css">
  <!-- adição do Font Awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  
</head>
<body>
	<div class="container-fluid">
		<div class="menu">
			<?php
        include_once("php/menu.php");
      ?>
		</div>
    <div class="jumbotron">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="jumbotron-header">Siqueira Websites</h1>
        </div>
        <div class="col-sm-6">
          <h2 class="jumbotron-sub-header">Últimos exercícios resolvidos</h2>
          <a class="btn jumbotron-btn" href="pagina1.php">Navegar</a>
        </div>
      </div>
    </div>
    <div class="container main">
      <div class="row">
        <div class="col-md-7">
          <h2>Linguagens Utilizadas </h2>
          <hr>
          <ul class="list-tecnology">
            <li><i class="fab fa-php fa-5x"></i></li>
            <li><i class="fab fa-css3-alt fa-5x"></i></li>
            <li><i class="fab fa-html5 fa-5x"></i></li>
            <li><i class="fab fa-js-square fa-5x"></i></li>
          </ul>        
        </div>
        <div class="col-md-5 main-img">
          <img src="imagem/desenho.png">
        </div>
      </div>
    </div>
    <!-- Adição do Footer -->
    <div class="footer">
      <?php 
          include_once("php/footer.php");
        ?>
    </footer>
	</div>
  
</body>
</html>