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
          <h1 class="header">Exercício 12</h1>
          <div class="result d-block mx-auto">
          <?php
            include_once("php/Exercicio12Metodos.php");

            if((isset($_POST['fNome'])) && (isset($_POST['fEmail']))){
              if($_POST['fSenha'] == $_POST['fConfirmaSenha']){
                // Coleta dos Dados
                  $nome = $_POST['fNome'];
                  $sobrenome = $_POST['fSobrenome'];
                  $email = $_POST['fEmail'];
                  $telefone = $_POST['fTelefone'];
                  $rua = $_POST['fRua'];
                  $bairro = $_POST['fBairro'];
                  $cidade = $_POST['fCidade'];
                  $estado = $_POST['fEstado'];
                  $senha = $_POST['fSenha'];
                  $dataNasc = $_POST['fDataNascimento'];
                  $sexo = $_POST['fSexo'];

                //Tratamento dos Dados
                  $nomeCompleto = "$nome $sobrenome";
                  $endereco = "$rua ($bairro) - $cidade , $estado";

                // Mensagem com os dados para ser cadastrado
                // Os valores devem ser separados por ';' é o primeiro elemento deve ser '\r\n'
                $mensagem = "\r\n$nomeCompleto;$dataNasc;$email;$telefone;$sexo;$endereco;$senha";

                  cadastrarUsuario($mensagem);

                }else{
                echo "[ERRO] Senhas não coincidem. Por favor, cadastre os dados novamente";
              }
              
            }
              
             
          ?>
          </div>
          <a href="exercicio12.php" class="btn btn-outline-dark">Voltar ao cadastro</a>
          <a href="exercicio12-mostrarDados.php" class="btn btn-outline-dark">Ver Clientes</a>
          
        </div>

      </div>
    </div>


    <!-- Adição do footer -->
        <?php include_once("../php/footer.php"); ?>
</body>
</html>