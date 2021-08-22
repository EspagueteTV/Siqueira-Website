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
          <form method="POST" action="pagina7.php">
            <label for="carroVermelho" class=>Seu carro é vermelho: </label>
                <input type="radio" name="carroVermelho" value="true">Sim
                <input type="radio" name="carroVermelho" value="false">Não<br>
            <label for="camisaBranca">Sua camisa é branca: </label>
              <input type="radio" name="camisaBranca" value="true">Sim
              <input type="radio" name="camisaBranca" value="false">Não
            <br>
            <button type="submit" name="submit" class="btn btn-outline-dark">Enviar</button>
          </form>
          <div class="result">
              <?php
              if(isset( $_POST['carroVermelho']) and isset($_POST['camisaBranca'])){
                $carroVermelho = $_POST['carroVermelho'];
                $camisaBranca = $_POST['camisaBranca'];
                $mensagem = "";
                $cachorro = false;
                $lavaRoupa = false;

                if($carroVermelho){
                  $mensagem .= "Você é rico, ";
                  $rico = true;
                }
                if($rico){
                  $mensagem .= "possui cachorro. ";
                  $cachorro = true;
                }
                if(!$cachorro){
                  $mensagem .= "tem carro branco.";
                }
                if($camisaBranca){
                  $mensagem .= " não lava roupa. ";
                }else{
                  $mensagem .= "Você possui um cachorro";
                }
              }

              echo $mensagem;
              ?>
          </div>
        </div>

      </div>
    </div>


    <!-- Adição do footer -->
        <?php include_once("php/footer.php"); ?>
</body>
</html>