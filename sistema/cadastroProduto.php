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
          
        <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nome do produto</label>
            <input type="text"  nome="produto" class="form-control" id="" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Categoria do Produto</label>
            <input type="text" name="categoria" class="form-control" id="" placeholder="">
        </div>        
        <div class="form-group">
            <label for="exampleFormControlFile1">Anexe um Produto</label>
            <input type="file"  name="arquivo"class="form-control-file" id="">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Mensagem:</label>
            <textarea class="form-control" name="mensagem" id="" rows="3"></textarea>
        </div>

        <button class="btn btn-primary" value="Enviar" name="enviar" type="submit">Enviar</button>
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