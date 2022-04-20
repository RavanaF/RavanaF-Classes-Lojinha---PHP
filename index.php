<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Classes</title>
		<style type="text/css">
			header{
			    width: 100%;
				background-color: black;
				float: left;
			}
			
			.sct{
				width: 100%;
			}
			
		</style>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript">
				$(document).ready(function() {
					$("#header").load("header.php");
					$("#sct" ).load("forms.php");
				});
		</script>
	</head>
	<body class="text-center">
	  <header id="header"></header>
	  <section class="sct" id="sct"></section>
	  
	 
</body>
</html>