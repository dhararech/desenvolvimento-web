<?php

    if(isset($_POST["enviar"])) //verifica se o botão de envio do formulário foi clicado
        { //campom são capturados e armazenados nas variáveis 
            $nome = $_POST['nome'];
        $cpf  = $_POST['cpf'];

        if(empty(trim($nome))) //trim(): A função trim() remove espaços em branco do início e do final de 
        //uma string. Ela não afeta os espaços em branco que estão no meio da string.
        {
            echo "<script> alert('Campo em Branco');window.location.href='../cadastroCliente.php';</script>";
        }
        else if(empty(trim($cpf)))
        {
            echo "<script> alert('Campo em Branco');window.location.href='../cadastroCliente.php';</script>";    
        } 
        else{
            echo $nome . " " . $cpf;
        }
        
    }



       
