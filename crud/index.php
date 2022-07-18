<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >

    <title>Crud</title>
  </head>
  <body>

  	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">Crud</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNav">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="?page=novo">Novo usuário</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="?page=listar">Listar usuários</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col mt-5">
				
					<?php  

					// importando a conexão.php
					include("config.php");

						// @ para inibir o &
						switch (@$_REQUEST["page"]) {
							case 'novo':
								include("novo-usuario.php");
								break;
							case 'listar':
								include("listar-usuario.php");
								break;

							case 'salvar':
								include("salvar-usuario.php");
								break;

							case 'editar':
								include("editar-usuario.php");
								break;

							default:
							echo "<h1 class='d-flex justify-content-center align-center'>Projeto CRUD</h1>";
								break;
						}

					?>	

			</div>
		</div>
	</div>



    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>