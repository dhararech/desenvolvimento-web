<?php
    if(isset($_POST["enviar"]))
        {
            $nomeCliente = $_POST['nome'];
            $cnpj = $_POST['cnpj'];

            if(empty(trim($nomeCliente)))
            {
                echo "<script> alert('Campo em Branco - Nome Cliente');Window.location.href='cadastroCliente.php';</script>";
            }
            else if(empty(trim($cnpj)))
            {
                echo "<script> alert('Campo em Branco - cnpj');Window.location.href='cadastroCliente.php';</script>";
            }
            else{
                echo $nomeCliente . " " . $cnpj;
            }
        }