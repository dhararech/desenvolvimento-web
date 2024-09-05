<?php
    if(isset($_POST['enviar']))
    {
        $produto  = $_POST['produto'];
        $categoria = $_POST['categoria'];
        $mensagem  = $_POST['mensagem'];
        $arquivo   = $_FILES['arquivo']['name'];
        $arquivo_tipo = $_FILES["arquivo"]["type"];
        $arquivo_tamanho = $_FILES['arquivo']['size'];
        $md5 = md5(time());
        $caminho = "imagem/";

    }