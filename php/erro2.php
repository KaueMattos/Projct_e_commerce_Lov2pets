<doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PanBlack - Logon de usuário</title>
	
<meta name="viewport" content="width=device-width, initial-scale=1">
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://kit.fontawesome.com/f3e76744a2.js" crossorigin="anonymous"></script>


<link rel="stylesheet" href="../css/css.css"> 
	
</head>

<body>
	
<?php

	session_start();
	include 'conexao.php';	
	include 'nav.php';
	include '../html/cabecario.html';
	
	?>
	
	
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4 text-center">
				
				<h3>Nenhum produto foi encontrado! ;( </h3>
				
				<a href="index.php" class="btn btn-block btn-default" role="button">Voltar a Página inicial</a>
							
			</div>
		</div>
	</div>
	
	<?php include '../html/rodape.html' ?>
	
	
	
	
</body>
</html>