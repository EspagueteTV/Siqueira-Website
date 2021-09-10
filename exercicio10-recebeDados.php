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
        <?php include_once("php/footer.php"); ?>
</body>
</html>