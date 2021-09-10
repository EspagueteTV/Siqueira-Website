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
          <h1 class="header">Exercício 05</h1>
          <div class="result d-block mx-auto"
          <?php
            $vetor1 = [];
            $vetor2 = [];
            $vetorRepetidos = [];
            $list = [];

            function verificarExistencia($valor){
              global $vetorRepetidos;
              global $list;

              for($i = 0; $i < sizeof($vetorRepetidos); $i++){
                if($vetorRepetidos[$i] === $valor){ break; }
                  if($i == (sizeof($vetorRepetidos) - 1)){
                    if(in_array($vetorRepetidos[$i], $list, true) == null){
                      $list[] = $valor;
                    }
                  }
                }
              }

            // Alocação dos Dados
            for($i = 0; $i < 10; $i++){
              $vetor1[$i] = rand(1,10);
              $vetor2[$i] = rand(1,10);
            }
            

            // Recuperar os valores repetidos
            for($i = 0; $i < 10; $i++){
              for($j = 0; $j < 10; $j++){
                if($vetor1[$i] == $vetor2[$j]){
                    $vetorRepetidos[] = $vetor2[$j];
                } 
              }
            }

            // Juntar os dois valores
              for($i = 0; $i < 10; $i++){
                verificarExistencia($vetor1[$i]);
                verificarExistencia($vetor2[$i]);
              }


              /* ----------------------------------------- */
              function mostrarVetor($v){
                echo "<p>";
                foreach($v as $chave => $valor){
                  if($chave == (count($v)- 1)){
                    echo " $valor.";
                  }else{
                    echo " $valor ->";
                  }
                }
                echo "</p><hr>";
              }


            echo "<p>Apresentação do valores do vetor 01</p>";
            mostrarVetor($vetor1);
            echo "<p>Apresentação do valores do vetor 02</p>";
            mostrarVetor($vetor2);
            echo "<p>Apresentação do valores diferentes </p>";
            mostrarVetor($list);
            
          ?>
        </div>

      </div>
    </div>


    <!-- Adição do footer -->
        <?php include_once("php/footer.php"); ?>
</body>
</html>