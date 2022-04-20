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
  <h1 class="t">Institucional</h1>
  <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" style="width:100%"></div>
      </div>
  <form class="title" action="/action_page.php">
    <div class="form-group">
      <label for="name">Nome:</label>
      <input type="text" class="form-control" id="name" placeholder="Nome Completo" name="name">
    </div>
    <div class="form-group">
      <label for="cpf">CPF/CNPJ:</label>
      <input type="number" class="form-control" id="cpf" placeholder="" name="cpf">
    </div>
    <div class="form-group">
      <label for="sexo">Sexo:</label>
      <input type="text" class="form-control" id="sexo" placeholder="M ou F" name="sexo">
    </div>
    <div class="form-group">
      <label for="endereco">Endereço:</label>
      <input type="text" class="form-control" id="endereco" placeholder="" name="endereco">
    </div>
    <div class="form-group">
      <label for="bairro">Bairro:</label>
      <input type="text" class="form-control" id="bairro" placeholder="" name="bairro">
    </div>
    <div class="form-group">
      <label for="cidade">Cidade:</label>
      <input type="text" class="form-control" id="cidade" placeholder="" name="cidade">
    </div>
    <div class="form-group">
      <label for="uf">UF:</label>
      <input type="text" class="form-control" id="uf" placeholder="" name="uf">
    </div>
    <div class="form-group">
      <label for="cep">CEP:</label>
      <input type="number" class="form-control" id="cep" placeholder="" name="cep">
    </div>
    <div class="form-group">
      <label for="telefone">Telefone:</label>
      <input type="number" class="form-control" id="telefone" placeholder="" name="telefone">
    </div>
    <div class="form-group">
      <label for="email">E-mail:</label>
      <input type="email" class="form-control" id="email" placeholder="" name="email">
    </div>
    <div class="form-group">
      <label for="logo">Logo:</label>
      <input type="file" class="form-control" id="logo" placeholder="" name="logo">
    </div>
    <button type="submit" class="btn btn-warning btn-block">Enviar</button>
  </form>
</div>


</body>
</html>