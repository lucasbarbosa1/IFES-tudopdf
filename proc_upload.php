<?php
require("conexao.php");
if ($_POST) {

    if (isset($_POST['titulo'])) {
        $titulo = $_POST['titulo'];
    }
    if (isset($_POST['autor'])) {
        $autor = $_POST['autor'];
    }
    if (isset($_POST['ano'])) {
        $ano = $_POST['ano'];
    }
    if (isset($_POST['idCategoria'])) {
        $idCategoria = $_POST['idCategoria'];
    }

    if (isset($_FILES['arquivo'])){
        // caminho onde a imagem será salva
        $caminho = "pdfs/";
        $nome_arq = date('Y-m-d H-i-s') . "_" . ($_FILES['arquivo']['name']) . '.pdf'; // (Data e hora)_(nome original).pdf

        $formato_arq = $_FILES['arquivo']['type'];

        $temp_nome  = $_FILES['arquivo']['tmp_name'];

        $tamanho = $_FILES['arquivo']['size'];
        $fp      = fopen($temp_nome, 'r');
        $conteudo= fread($fp, filesize($temp_nome));
        $conteudo = addslashes($conteudo);
        fclose($fp);
        $formatos = "application/pdf";
        if ($formato_arq != $formatos){ // não pode ser 0, pois 0 indica a primeira posicao
            echo "<script type='text/javascript'>alert('Formato não permitido!'); </script>";
            echo "<script type='text/javascript'>window.history.back();</script>";
        }else{
            // verificar se é possível enviar
            if (!move_uploaded_file($_FILES['arquivo']['tmp_name'], "$caminho$nome_arq")){
                echo "<script type='text/javascript'>alert('Erro ao enviar o pdf!'); </script>";
                echo "<script type='text/javascript'>window.history.back();</script>";
            }else{
                // armazenando no BD
                $sql = "INSERT INTO pdf (titulo, autor, ano, categoria, conteudo, tamanho, nm_download)
                        VALUES('$titulo','$autor', '$ano','$idCategoria','$conteudo', '$tamanho', '$nome_arq')";
                $sql_exec = mysqli_query($conn, $sql) or die("Não foi possível inserir os dados: "
                    .mysqli_error($conn));
                if ($sql_exec){
                    echo "<script>alert('Upload efetuado com sucesso!');</script>";
                    echo "<script>window.location = 'tela_categorias.php';</script>";
                }else{
                    unlink("$caminho$foto_nome"); // apagando o arquivo, pois deu erro na SQL
                }
            }
        }
    }
}

?>