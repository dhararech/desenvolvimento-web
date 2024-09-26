<?php
require_once "../../View/autoload.php";
session_start();
$usuario = new Usuario();
if(isset($_SESSION['logado']) == "logar"){
    $usuario->deslogarusuarios();
    header("Location: logar.php");
}