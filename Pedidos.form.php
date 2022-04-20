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
  <h1 class="t">Pedidos</h1>
  <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" style="width:100%"></div>
      </div>
  <form class="title" action="/action_page.php">
    <div class="form-group">
      <label for="dtp">Data do pedido:</label>
      <input type="date" class="form-control" id="dtp" placeholder="" name="dtp">
    </div>
    <div class="form-group">
      <label for="dtpg">Data do pagamento:</label>
      <input type="number" class="form-control" id="dtpg" placeholder="" name="dtpg">
    </div>
    <div class="form-group">
      <label for="datafab">Data da nota fiscal:</label>
      <input type="date" class="form-control" id="datafab" placeholder="" name="datafab">
    </div>
    <div class="form-group">
      <label for="datae">Data de envio:</label>
      <input type="date" class="form-control" id="datae" placeholder="" name="datae">
    </div>
    <div class="form-group">
      <label for="datar">Data de recebimento:</label>
      <input type="date" class="form-control" id="datar" placeholder="" name="datar">
    </div>
    <div class="form-group">
      <label for="tpf">Tipo de frete:</label>
      <input type="text" class="form-control" id="tpf" placeholder="" name="tpf">
    </div>
    <div class="form-group">
      <label for="rtf">Rastreio de frete:</label>
      <input type="text" class="form-control" id="rtf" placeholder="" name="rtf">
    </div>
    <div class="form-group">
      <label for="ende">Endereço de entrega:</label>
      <input type="text" class="form-control" id="ende" placeholder="" name="ende">
    </div>
    <div class="form-group">
      <label for="num">Número:</label>
      <input type="number" class="form-control" id="num" placeholder="" name="num">
    </div>
    <div class="form-group">
      <label for="comp">Complemento:</label>
      <input type="text" class="form-control" id="comp" placeholder="" name="comp">
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
      <label for="fone">Telefone:</label>
      <input type="number" class="form-control" id="fone" placeholder="" name="fone">
    </div>
     <div class="form-group">
      <label for="ref">Referência:</label>
      <input type="text" class="form-control" id="ref" placeholder="" name="ref">
    </div>
     <div class="form-group">
      <label for="valort">Valor total:</label>
      <input type="number" class="form-control" id="valort" placeholder="" name="valort">
    </div>
     <div class="form-group">
      <label for="qtditems">Quantidade de items:</label>
      <input type="number" class="form-control" id="qtditems" placeholder="" name="qtditems">
    </div>
    <div class="form-group">
      <label for="dtdevo">Data de devolução:</label>
      <input type="date" class="form-control" id="datadevo" placeholder="" name="datadevo">
    </div>
    <div class="form-group">
      <label for="motivo">Motivo da devolução:</label>
      <input type="text" class="form-control" id="motivo" placeholder="" name="motivo">
    </div>
    <button type="submit" class="btn btn-warning btn-block">Enviar</button>
  </form>
</div>

</body>
</html>
