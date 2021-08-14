<!DOCTYPE html>
<html lang="pt-Br">
<head>
  <title>Site Avalaição</title>
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
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/jumbotron.css">
  <link rel="shortcut icon" href="imagem/Logo.svg" target="image/x-icon">
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
	</div>
</body>
</html>