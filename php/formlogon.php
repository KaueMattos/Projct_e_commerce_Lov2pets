<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PanBlack - Login de usuário</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/67c66657c7.js"></script> 
<link rel="stylesheet" href="../css/css.css">  
</head>
<body>
<?php
	
	include 'conexao.php';	
	include 'nav.php';
	include '../html/cabecario.html';
	
	?>
	
	
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4">
			<form name="frmusuario" action="validausuario.php" method="post">
				<h2>Login</h2>
				
					<div class="form-group">
				
						<label for="email">Email</label>
						<input name="txtEmail" type="email" class="form-control" required id="email">
					</div>
				
				<div class="form-group">
				
						<label for="senha">Senha</label>
						<input name="txtSenha" type="password" class="form-control" required id="senha">
				</div>
				
							
				<button type="submit" class="btn btn-lg btn-default">
					
					<span class="glyphicon glyphicon-ok"> Entrar</span>
					
				</button>
				<a href="formusuario.php">
				<button type="button" class="btn btn-lg btn-link">
					
					Ainda não sou cadastrado
					
				</button>
				</a>
            	</form>		
			</div>
		</div>
	</div>

	<?php include '../html/rodape.html' ?>

</body>
</html>
<head>

	

	


