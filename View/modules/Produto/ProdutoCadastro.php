<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Inserir Produto</title>

</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <div class="row">
    <form class="form-horizontal" method="post" action="/produto/save">
      <fieldset>

        <!-- Form Name -->
        <legend>Inserir Produto</legend>
        <input name="id" id="id" type="hidden" value="<?= $model->id ?>" />

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="codigo">Código:</label>
          <div class="col-md-4">
            <input id="codigo" name="codigo" type="text" placeholder="Código" class="form-control input-md" required="">

          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="produto">Produto:</label>
          <div class="col-md-4">
            <input id="produto" name="produto" type="text" placeholder="Produto" class="form-control input-md" required="">

          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="descricao">Descrição:</label>
          <div class="col-md-4">
            <input id="descricao" name="descricao" type="text" placeholder="Descrição" class="form-control input-md" required="">

          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="data">Data:</label>
          <div class="col-md-4">
            <input id="data" name="data" type="date" placeholder="dd/mm/aaaa" class="form-control input-md" required="">

          </div>
        </div>



        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="valor">Valor:</label>
          <div class="col-md-4">
            <input id="valor" name="valor" type="text" placeholder="Valor R$" class="form-control input-md" required="">

          </div>
        </div>

        <!-- Button (Double) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="cadastrar"></label>
          <div class="col-md-8">
            <input type="submit" id="cadastrar" name="cadastrar" class="btn btn-success" value="Cadastrar Produto">

            <button id="listar" name="listar" class="btn btn-info">Listar Produtos</button>
          </div>
        </div>

      </fieldset>
    </form>
  </div>

</body>

</html>