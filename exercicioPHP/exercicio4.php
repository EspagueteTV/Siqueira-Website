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
          <h1 class="header">Exercício 04</h1>
          <div class="mx-auto d-block result">
          <?php
          //Declaração das variáveis
            $vetor = [];
            $porcPar = 0;
            $soma = 0;
            
            // Alocação dos dados no vetor
            for($i = 0; $i < 20; $i++){
              $vetor[] = rand(1,100);
            }
            
            // Coleta dos valores do Array
            foreach($vetor as $chave => $valor){
              if($chave == 0){
                $maior = $valor;
                $menor = $valor;
              }else{
                if($valor > $maior){
                  $maior = $valor;
                }
                if($valor < $menor){
                  $menor = $valor;
                }
              }
              if($valor % 2 == 0){
                $porcPar++;
              }
              $soma += $valor;
            }

            // Realização dos cálculos
            $porcPar /= 20;
            $mediaValores = $soma / 20;
            
            // Apresentação dos valores obtidos
            echo "<p>Maior valor digitado é $maior </p>";
            echo "<p>Menor valor digitado é $menor </p>";
            echo "<p>O porcentual de valores pares informado é $porcPar</p>";
            echo "<p>A média dos valores informados é $mediaValores</p>";
          ?>
          </div>
        </div>

      </div>
    </div>


    <!-- Adição do footer -->
        <?php include_once("../php/footer.php"); ?>
</body>
</html>