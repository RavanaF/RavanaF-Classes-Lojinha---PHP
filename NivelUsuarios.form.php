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
    
    .title{
        font-family: 'Orelega One', cursive;
        font-size: 20px;
    }
  </style>
</head>
<body>

<div class="container">
  <h1>Nível de usuário</h1>
  <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" style="width:100%"></div>
      </div>
  <form class="title" action="/action_page.php">
    <div class="form-group">
      <label for="nivel">Nível:</label>
      <input type="text" class="form-control" id="nivel" placeholder="" name="nivel">
    </div>
    <button type="submit" class="btn btn-warning btn-block">Enviar</button>
  </form>
</div>
 
</body>
</html>