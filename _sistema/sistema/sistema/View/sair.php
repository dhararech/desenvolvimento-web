<?php

    session_start();

    if(isset($_SESSION['Logar'])){
        session_destroy();
        //unset($_SESSION['logar']);
        header("Location: logar.php");
    } else{
        session_destroy();
        header("Location: index.php");
    }