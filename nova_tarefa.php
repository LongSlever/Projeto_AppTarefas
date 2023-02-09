<?php

require_once 'validador_acesso.php';

?>

<html>
	<head>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>
		<link rel="icon" type="image/x-icon" href="img/logo_size.jpg">
		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	</head>

	<body>
		<nav class="navbar">
			<div class="container d-flex justify-content-between">
				<a class="navbar-brand" href="#">
					<img src="img/logo.png" width="100"  class="d-inline-block align-top" alt="">

				</a>
				<i>
				<a href="index.php"><i class="fa-solid fa-right-from-bracket fa-2x"></i></a> 
				</i>
			</div>
		</nav>
		<div class="container app">
			<div class="row">
				<div class="col-md-3 menu">
					<ul class="list-group">
						<li class="list-group-item"><a href="tarefaspendentes.php">Tarefas pendentes</a></li>
						<li class="list-group-item active"><a href="#">Nova tarefa</a></li>
						<li class="list-group-item"><a href="todas_tarefas.php">Todas tarefas</a></li>
					</ul>
				</div>

				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Nova tarefa</h4>
								<hr />

								<form method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										<label>Descrição da tarefa:</label>
										<input type="text" class="form-control" name="tarefa" placeholder="Exemplo: Lavar o carro">
									</div>

									<button class="btn">Cadastrar</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer>
        <div class="container">
          <div class="row">
            <div class="col-md-2">
              <img src="img/logo.png" width="142" alt="">
            </div>
            <div class="col-md-2">
              <h4>Redes Sociais</h4>
              <ul class="navbar-nav">
                <li> <a href="https://www.linkedin.com/in/vitor-augusto-203596202/"> Linkedin</a></li>
                <li> <a href="https://github.com/LongSlever"> GitHub </a></li>
                <li> <a href="https://www.instagram.com/v1timm/"> Instagram </a></li>
              </ul>
            </div>
            <div class="col-md-2">
              <h4>Comunidades</h4>
              <ul class="navbar-nav">
                <li> <a href="https://www.php.net/docs.php"> PHP </a></li>
                <li> <a href="https://developer.mozilla.org/en-US/docs/Web/CSS"> CSS </a></li>
                <li> <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/"> BOOTSTRAP </a></li>
              </ul>
            </div>
            <div class="col-md-6 ">
              <h4 class="text-center">Todos os direitos são de uso gratuito. O site foi criado por Vitor Augusto</h4>
              <ul class="navbar nav">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.linkedin.com/in/vitor-augusto-203596202/"><i class="fa-brands fa-linkedin fa-3x"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://github.com/LongSlever"><i class="fa-brands fa-instagram fa-3x"></i></a>
                </li class="nav-item">
                <li>
                    <a class="nav-link" href="https://www.instagram.com/v1timm/"><i class="fa-brands fa-github fa-3x"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
		<script src="https://kit.fontawesome.com/ccd0f1f5c6.js" crossorigin="anonymous"></script>
	</body>
</html>