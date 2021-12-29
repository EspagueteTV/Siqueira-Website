<?php
  function idade($dataNasc){
    $dataNasc = new DateTime($dataNasc);
    $dataAtual = new DateTime();
    $idade = $dataAtual->diff($dataNasc);

    return $idade->y;

  }
?>

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
          <h1 class="header">Exercício 10</h1>
          <div class="result mx-auto d-block">
              <?php
                if((isset($_POST['fNome']) && (isset($_POST['fEmail'])))){
                  $dataNasc = $_POST['fDataNascimento'];
                  if(idade($dataNasc) < 18){
                    echo "<p>Não é possível cadastrar usuários menores de 18 anos.</p>";
                    echo "<hr><a href='exercicio10.php'>Voltar ao cadastro</a>";
                  }else{
                    $senha = $_POST['fSenha'];
                    $confirSenha = $_POST['fConfirmaSenha'];
                    if($senha == $confirSenha){
                      $nome = $_POST['fNome'];
                      $sobrenome = $_POST['fSobrenome'];
                      $nomeCompleto = $nome . ' ' . $sobrenome;
                      $email = $_POST['fEmail'];
                      $telefone = $_POST['fTelefone'];
                      $idade = idade($dataNasc);
                      $sexo = $_POST['fSexo'];

                      echo "<h2>Apresentação dos Dados Cadastrados</h2><br>
                        <p>Nome completo: $nomeCompleto. </p>
                        <p>Idade: $idade anos.</p>
                        <p>Sexo: $sexo</p>
                        <p>Email de Contato: $email .</p>
                        <p>Telefone de Contato: $telefone .</p>";
                        echo "<hr><a href='exercicio10.php'>Voltar a tela de cadastro</a>";

                    }else{
                      echo "[ERRO] Senhas não coincidem. Por favor, cadastre os dados novamente";
                      echo "<hr><a href='exercicio10.php'>Voltar ao cadastro</a>";

                    }
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