<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Sisteminha</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php require_once 'includes/menu.php'; //utilizado para incluir um arquivo?> 
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3>Bem vindo ao Sistema</h3>
            </div>


            <!--<div class="container">-->
      <?php 
      //require "includes/menu.php";
      //inicia a sessão ou continua a sessão existente. É necessário chamar session_start() no início do script para acessar as variáveis de sessão. 
      //A sessão permite que você armazene informações entre diferentes solicitações HTTP.
        //  session_start();

        //Verifica se a variável de sessão logar está definida. Isso geralmente indica que o usuário está autenticado.
          //if( isset($_SESSION['logar']) ) {
            //  echo "Bem vindo";
            //Se a variável $_SESSION['logar'] não estiver definida, o código redireciona o usuário para ../index.php
          //} else{
            //header("Location: ../index.php");
            //Após redirecionar o usuário, a função session_destroy() é chamada para destruir todos os dados da sessão. 
            //Isso limpa as variáveis de sessão e encerra a sessão do usuário.
           // session_destroy();
          //}
        ?>
      
        <?php require "includes/rodape.php"; ?>
    </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php require_once 'includes/rodape.php'; ?>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
</body>
</html>