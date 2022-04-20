<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Classes</title>
		 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
          <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
       
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		
		<style type="text/css">
		
			
			#forms{
				width: 100%;
				height: 100%;
				float:left;
			}
			
		</style>
	</head>
	<body class="text-center">

        <section id="forms" class="forms text-center">
        	<div class="btn-group btn-group-lg center">
            	    <input class="btn btn-dark" type="button" id="btn1" value="Categorias">
                    <input class="btn btn-dark" type="button" id="btn2" value="Institucional">
            </div> 
            <div class="btn-group btn-group-lg center">
              <input class="btn btn-dark" type="button" id="btn3" value="Nível Usuários">
              <input class="btn btn-dark" type="button" id="btn4" value="Usuários">
            </div>
            <div class="btn-group btn-group-lg center">
        		<input class="btn btn-dark" type="button" id="btn5" value="Pedidos">
                <input class="btn btn-dark" type="button" id="btn6" value="Produtos">
            </div>
            <div class="btn-group btn-group-lg center">
        		<input class="btn btn-dark" type="button" id="btn7" value="Estoque">
                <input class="btn btn-dark" type="button" id="btn8" value="Items Pedido">
                </div>
        </section>
     
        <script type="text/javascript">
              
                $(document).ready(function() {
          		  $("#btn1").click(function() {
          			$("#forms" ).load("Categorias.form.php");
          		  });
        
        		  $("#btn2").click(function() {
          			$("#forms" ).load("Institucional.form.php");
          		  });

        		  $("#btn3").click(function() {
          			$("#forms" ).load("NivelUsuarios.form.php");
          		  });
        	    
        		  $("#btn4").click(function() {
          			$("#forms" ).load("Usuarios.form.php");
          		  });
        		
        		  $("#btn5").click(function() {
          			$("#forms" ).load("Pedidos.form.php");
          		  });
        		
        		  $("#btn6").click(function() {
          			$("#forms" ).load("Produtos.form.php");
          		  });


        		  $("#btn7").click(function() {
            	    $("#forms" ).load("Estoque.form.php");
            		  });

        		  $("#btn8").click(function() {
          			$("#forms" ).load("ItemsPedido.form.php");
          		  });
          		  
        	    });
        </script>
</body>
</html>