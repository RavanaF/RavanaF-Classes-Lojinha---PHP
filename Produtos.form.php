<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lojinha</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Orelega+One&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Titan+One&display=swap');
    
    .title{
        font-family: 'Orelega One', cursive;
        font-size: 20px;
    }
    .t{font-family: 'Titan One', cursive;
              }
  </style>
</head>
<body>

<div class="container">
  <h1 class="t">Produtos</h1>
  <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" style="width:100%"></div>
      </div>
  <form class="title" action="/action_page.php">
    <div class="form-group">
      <label for="fabricante">Fabricante:</label>
      <input type="text" class="form-control" id="fabricante" placeholder="" name="fabricante">
    </div>
    <div class="form-group">
      <label for="name">Nome:</label>
      <input type="text" class="form-control" id="name" placeholder="" name="name">
    </div>
    <div class="form-group">
      <label for="modelo">Modelo:</label>
      <input type="text" class="form-control" id="modelo" placeholder="" name="modelo">
    </div>
    <div class="form-group">
      <label for="descricao">Descrição:</label>
      <input type="text" class="form-control" id="descricao" placeholder="" name="descricao">
    </div>
    <div class="form-group">
      <label for="medida">Unidade de medida:</label>
      <input type="text" class="form-control" id="medida" placeholder="" name="medida">
    </div>
    <div class="form-group">
      <label for="largura">Largura:</label>
      <input type="number" class="form-control" id="largura" placeholder="" name="largura">
    </div>
    <div class="form-group">
      <label for="altura">Altura:</label>
      <input type="number" class="form-control" id="altura" placeholder="" name="altura">
    </div>
    <div class="form-group">
      <label for="profundidade">Profundidade:</label>
      <input type="number" class="form-control" id="profundidade" placeholder="" name="profundidade">
    </div>
    <div class="form-group">
      <label for="peso">Peso:</label>
      <input type="number" class="form-control" id="peso" placeholder="" name="peso">
    </div>
    <div class="form-group">
      <label for="cor">Cor:</label>
      <input type="text" class="form-control" id="cor" placeholder="" name="cor">
    </div>
    <button type="submit" class="btn btn-warning btn-block">Enviar</button>
  </form>
</div>

</body>
</html>