<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     
        <title>Sistema</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-12">
                <?php require_once 'includes/menu.php'; ?> 
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3>envio de E-mail</h3>
                <form method="post" action="acao/acaoEmail.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Digite seu Nome</label>
                    <input type="text" name="nome" class="form-control"  placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Digite seu e-mail</label>
                    <input type="email" name="email" class="form-control"  placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Digite o Assunto</label>
                    <input type="text" name="assunto" class="form-control"  placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mensagem:</label>
                    <textarea class="form-control" name="mensagem" rows="3"></textarea>
                </div>
                <input type="submit" name="enviar" value="Envio E-mail" class="btn btn-primary">
        </form>
            </div>
            <div class="row">
            <div class="col-12">
                <?php require_once 'includes/rodape.php'; ?>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>