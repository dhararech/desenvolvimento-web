<?php

    if( isset($_POST['enviar'])  ){

        $produto    = $_POST['produto'];
        $categoria  = $_POST['categoria'];
        $foto = $_FILES["foto"]["name"];
        $foto_tamanho = $_FILES["foto"]["size"];
        $foto_tipo = $_FILES["foto"]["type"];
        $md5 = md5(time()); //d5(time()): Gera um hash MD5 com base no timestamp atual. Isso é usado para criar um nome único para a imagem.
        $caminho = "imagem/";
        $mensagem = $_POST['mensagem'];

    //Verificação de Campos Vazios:
    //empty(trim($produto)) verifica se o campo produto está vazio após remover espaços em branco no início e no fim da string. 
    //Se estiver vazio, um alerta é exibido, e o usuário é redirecionado de volta ao formulário.
        if(empty(trim($produto))  ){
            echo "<script> alert('Campo em Branco');window.location.href='../cadastroProduto.php';</script>";
        }
        //strpos($foto_tipo, 'png'): Verifica se o tipo de arquivo contém a string png (ou seja, se é uma imagem PNG).
        //$foto_tamanho < 100000000: Verifica se o tamanho do arquivo é menor que 100 MB.
        //move_uploaded_file: Se as validações anteriores forem verdadeiras, o arquivo de imagem é movido do diretório temporário para o diretório 
        //imagem/, com um nome único gerado pelo hash MD5.
        else if( strpos($foto_tipo, 'png') && $foto_tamanho < 100000000 ){
            move_uploaded_file($_FILES["foto"]["tmp_name"], $caminho . $md5 .  $_FILES["foto"]["name"] );
        }
        else{
            echo "<script> alert('Não foi possível enviar');window.location.href='../cadastroProduto.php';</script>";
        }
         //exibe a imagem carregada com um tamanho de 100 pixels de largura.
        //s informações do produto, categoria e mensagem são exibidas concatenadas em uma linha.
        echo "<img width='100' src='imagem/"  .$md5 .  $_FILES["foto"]["name"] . " ' /> ";
        echo $produto . " " . $categoria . " " . $mensagem;

    }else{
        echo "Não foi possível cadastrar";
    }


?>