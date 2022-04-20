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
  <h1 class="t">Estoque</h1>
  <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" style="width:100%"></div>
      </div>
  <form class="title" action="/action_page.php">
    <div class="form-group">
      <label for="descricao">Data:</label>
      <input type="date" class="form-control" id="data" placeholder="" name="data">
    </div>
    <div class="form-group">
      <label for="qtdc">Quantidade:</label>
      <input type="number" class="form-control" id="qtdc" placeholder="" name="qtdc">
    </div>
    <div class="form-group">
      <label for="datafab">Data de fabricação:</label>
      <input type="date" class="form-control" id="datafab" placeholder="" name="datafab">
    </div>
    <div class="form-group">
      <label for="datavenc">Data de vencimento:</label>
      <input type="date" class="form-control" id="datavenc" placeholder="" name="datavenc">
    </div>
    <div class="form-group">
      <label for="nfcompra">Nota fiscal da compra:</label>
      <input type="text" class="form-control" id="nfcompra" placeholder="" name="nfcompra">
    </div>
    <div class="form-group">
      <label for="precoc">Preço da compra:</label>
      <input type="number" class="form-control" id="precoc" placeholder="" name="precoc">
    </div>
    <div class="form-group">
      <label for="precov">Preço da venda:</label>
      <input type="number" class="form-control" id="precov" placeholder="" name="precov">
    </div>
    <div class="form-group">
      <label for="qtdv">Quantidade da venda:</label>
      <input type="number" class="form-control" id="qtdv" placeholder="" name="qtdv">
    </div>
    <div class="form-group">
      <label for="qtdo">Quantidade de ocorrência:</label>
      <input type="number" class="form-control" id="qtdo" placeholder="" name="qtdo">
    </div>
    <div class="form-group">
      <label for="oco">Ocorrência:</label>
      <input type="number" class="form-control" id="oco" placeholder="" name="oco">
    </div>
    <button type="submit" class="btn btn-warning btn-block">Enviar</button>
  </form>
</div>

</body>
</html>
