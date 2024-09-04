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
          <form class="needs-validation" novalidate>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">Nome</label>
                <input type="text" name="nome" class="form-control" id="validationCustom01" placeholder="Digite o nome do cliente" value="" required>
              
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">CNPJ</label>
                <input type="nunber" name="cnpj" class="form-control" id="validationCustom02" placeholder="Informe o CNPJ" value="" required>
              
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Usuário</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                  </div>
                  <input type="text" class="form-control" id="validationCustomUsername" placeholder="Usuário" aria-describedby="inputGroupPrepend" required>
                  <div class="invalid-feedback">
                    Por favor, escolha um nome de usuário.
                  </div>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom03">Cidade</label>
                <input type="text" class="form-control" id="validationCustom03" placeholder="Cidade" required>
                <div class="invalid-feedback">
                  Por favor, informe uma cidade válida.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom04">Estado</label>
                <input type="text" class="form-control" id="validationCustom04" placeholder="Estado" required>
                <div class="invalid-feedback">
                  Por favor, informe um estado válido.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom05">CEP</label>
                <input type="text" class="form-control" id="validationCustom05" placeholder="CEP" required>
                <div class="invalid-feedback">
                  Por favor, informe um CEP válido.
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                  Concordo com os termos e condições
                </label>
                <div class="invalid-feedback">
                  Você deve concordar, antes de continuar.
                </div>
              </div>
            </div>
            <button class="btn btn-primary" type="submit">Enviar</button>
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