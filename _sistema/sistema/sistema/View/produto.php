<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Olá, mundo!</title>
  </head>
  <body>
    <div class="container">
        <?php 
       require "../../vendor/autoload.php";
       require_once "../Controller/Produto.php";
        include "../includes/menu.php"; 
       

        $produto = new Produto();
        $usuario = new Usuario();
        $objfn = new Funcoes();


            //Cadastrar
    if(isset($_POST["btCadastrar"]))
    {
        if($produto->inserirProduto($_POST) == "ok")
        {
            header("Location:produto.php");
        }
        else
        {
            echo "Não foi Possível";
        }
    }

    //Editar
    if (isset($_POST["btAlterar"])) {
        if ($produto->queryUpdate($_POST) == "ok") {
            header("Location: ?acao=edit?func" . $objfn->base64($_POST["func"], 1));
            header("Location:produto.php");
        } else {
            echo "erro ao alterar";
        }
    }

    //Deletar
    if (isset($_GET["acao"])) {
        switch ($_GET["acao"]) {
            case "edit" :
                $func = $produto->querySelecionaid($_GET["func"]);
                break;
            case "delet" :
                if ($produto->queryDelete($_GET["func"]) == "ok") {
                    header('Location:produto.php');
                } else {
                    echo "erro ao deletar";
                }
                break;
        }
    }


  ?>

  <div class="container">
  <?php require_once "../includes/menu.php"; ?>

  <h2>Cadastrar Produto  </h2>

  <form method="post" action="" enctype="multipart/form-data">
  <div class="form-group">
      <label for="exampleFormControlInput1">Nome do Produto</label>
      <input type="text" name="nome" value="<?=(isset($func["nome"]) ?  ($func["nome"]) : ("") )   ?>" class="form-control" id="exampleFormControlInput1" placeholder="Produto">
  </div>
 

  <div class="form-group">
      <label for="exampleFormControlFile1">Envio de Arquivos</label>
      <input type="file" name="foto" value="<?=(isset($func["foto"]) ?  ($func["foto"]) : ("") )   ?>" class="form-control-file" id="exampleFormControlFile1">
  </div>

  <div class="form-group">
      <label for="exampleFormControlTextarea1">Informações</label>
      <textarea name="mensagem" class="form-control" id="exampleFormControlTextarea1" rows="3"><?=(isset($func["mensagem"])?($func["mensagem"]):(""))?></textarea>
  </div>
  <input type="submit" class="btn btn-primary" name="<?= (isset($_GET["acao"]) == "edit" ? ("btAlterar") : ("btCadastrar") )  ?>" value="<?= (isset($_GET["acao"]) == "edit" ? ("Alterar") : ("Cadastrar") )  ?>">
  <input type="hidden" name="func" value="<?=  (isset($func["id"]) ? $objfn->base64($func["id"], 1) : " " )  ?>">
  </form>

  <table class="table" style="margin-top: 30px;">
  <thead>
  <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Arquivo</th>
      <th scope="col">Informações</th>
      <th scope="col">Editar</th>
      <th scope="col">Deletar</th>
  </tr>
  </thead>
  <tbody>
  <?php
  $contagem = 1;
  foreach($produto->listarProdutos() as $rst )
  {
      ?>
      <tr>
          <th scope="row"><?php echo $contagem++; ?></th>
          <td> <?php echo $rst["nome"];  ?>  </td>
          <td><?php echo "<img width='100' src='../Controller/imagem/".$rst["foto"]."'/>"?></td>
          <td> <?php echo $rst["mensagem"];  ?>  </td>
          <td><a class="btn btn-info" href="?acao=edit&func=<?= $objfn->base64($rst["id"], 1) ?>">Editar</a></td>
          <td><a class="btn btn-danger" href="?acao=delet&func=<?= $objfn->base64($rst["id"], 1) ?>">Deletar</a></td>
      </tr>
  <?php  }    ?>
  </tbody>
  </table>

  <?php require_once "../includes/rodape.php"; ?>
  </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>