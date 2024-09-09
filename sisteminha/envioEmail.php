<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Sisteminha</title>
  </head>
  <body>

    <div class="container">
      <?php require "includes/menu.php"; ?>
        <h1>Enviar Email</h1>
        <form method="post" action="acao/acaoEmail.php" >
          <div class="form-group">
            <label for="exampleInputEmail1">Digite Seu Nome</label>
            <input type="text" name="nome" class="form-control"  placeholder="Digite seu Nome">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Digite Seu Email</label>
            <input type="email" name="email" class="form-control"  placeholder="Digite seu Email">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Digite o Assunto</label>
            <input type="text" name="assunto" class="form-control"  placeholder="Digite seu Email">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Mensagem:</label>
            <textarea class="form-control" name="mensagem" rows="3"></textarea>
          </div>
          <input type="submit" name="enviar" value="Enviar Email" class="btn btn-primary">
        </form>
      <?php require "includes/rodape.php"; ?>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>