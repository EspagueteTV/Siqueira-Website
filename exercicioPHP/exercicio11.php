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
          <h1 class="header">Exercício 11</h1>
          <form method="POST" action="exercicio11.php"  enctype="multipart/form-data" class="mx-auto d-block">
            <input type="file" name="arquivo" >

            <button type="submit" name="submit" class="btn btn-outline-dark">Enviar</button>
          </form>

          <?php
            if(isset($_FILES['arquivo'])){
              

              $file_name = $_FILES['arquivo']['name'];
              $file_tmp = $_FILES['arquivo']['tmp_name'];
              $uploader_folder = "../upload";
              $move_file = move_uploaded_file($file_tmp,"$uploader_folder/$file_name");

              if($move_file){
                echo "<div class='result mx-auto d-flex'>";
                  echo "<img src='$uploader_folder/$file_name' class='img-fluid mx-auto d-block' alt='Imagem adicionado pelo usuário'/>";
                echo "</div>";
              }
            }
          

          ?>
        </div>

      </div>
    </div>


    <!-- Adição do footer -->
        <?php include_once("../php/footer.php"); ?>
</body>
</html>