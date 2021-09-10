<?php

function idade($dataNasc){
    $dataNasc = new DateTime($dataNasc);
    $dataAtual = new DateTime();
    $idade = $dataAtual->diff($dataNasc);

    return $idade->y;
}

function cadastrarUsuario($mensagem){
    $arquivo = fopen("exercicio12-dadosUsuario.txt", 'a');
        fwrite($arquivo, $mensagem);
        echo "Dados cadastrados com Sucesso.";
    fclose($arquivo);
}

function mostrarUsuario(){
    if(file_exists("exercicio12-dadosUsuario.txt")){
        $arquivo = fopen("exercicio12-dadosUsuario.txt", 'r');
            $msg = fread($arquivo, filesize("exercicio12-dadosUsuario.txt"));
            $listaUsuario = explode("\r\n", $msg);

            foreach($listaUsuario as $chave => $valor){
                $dado = explode(";", $valor);
                echo "<tr>";
                foreach($dado as $indice => $val){
                    if($indice < 6){
                        echo "<td>$val</td>";
                    }
                }
                echo "</tr>";
            }
        fclose($arquivo);
    }else{
        echo "[ERRO] Ainda não foi criado o arquivo com os dados do usuário. Por favor, realize o cadastro de um usuário";
    }
    
}


?>