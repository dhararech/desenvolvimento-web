<?php
if(isset($_POST['enviar']))
{
    $pais = $_POST['pais'];

    if(empty(trim($pais)))
    {
        echo "<script>alert('campo em branco');window.location.href='cadastroPais.php';</script>";
    }
    else{
        echo "<script>alert('Cadastrdo com sucesso');window.location.href='cadastroPais.php';</script>";
    }
}
else{
    echo "Não foi possível cadastrar";
}