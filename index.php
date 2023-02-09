<?php
  session_start();
  session_destroy();
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Seja bem vindo a tela de Login</title>
    <link rel="icon" type="image/x-icon" href="img/logo_size.jpg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/estilo.css">
  </head>

  <body>

    <nav id="nav" class="navbar">
        
    </nav>
    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header text-center">
              <h3>Login</h3>
            </div>
            <div class="card-body">
              <form action="usuarioController.php?acao=login" method="post">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha"  type="password" class="form-control" placeholder="Senha">
                </div>
                <button class="btn btn-lg btn-block" type="submit">Entrar</button>
                <p class="text-center mt-2"> <a href="registrar.php"> Registre-se</a></p>
              </form>
              <?php
                  if(isset($_GET['login']) && $_GET['login'] == 'erro') {
                  ?>
                  <div class="text-danger text-center">
                      Usuario ou senha inválidos.
                  </div>
                
                  
                <?php }?>

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