<?php 
session_start();

$_SESSION['autentifcado'] = 'NAO';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<!-- Estilo Personalizado -->
 <style>
        body, html{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            height: 100%;
background: #6e06c1;
        }
        #home {
            height: 100%;
            
        }

        .formulario {
            width: 50%;
            background: #fff;
            border-radius:25px;
            padding: 25px;
            margin: 0 15px 0 15px;
            box-shadow: 25px -15px rgba(255, 255, 255, 0.2);
        }

        .formulario h2 {
            background: #6e06c1;
            padding: 25px;
            border-radius: 25px;
            color: white;
            font-weight: bold;
            text-transform: uppercase;
        }

        .formulario a {
            color: black;
        }

        .formulario button {
            border-radius: 25px;
        }
        .formulario button:hover {
            background: rgba(199,199,245,0.5);
            
        }

        .esconder {
            display: none;
        }
        
        #personalizado {
            border-color:rgb(123, 87, 255) ;
            
        }
        #personalizado a {
            color: rgb(123, 87, 255);
        }

    </style>
<body>

<!-- Div de Cadastro -->
    <div id="home" class="container d-flex flex-column justify-content-center align-items-center">
        <div class="row formulario">
            <!--<div class="m-2">
                <button id="personalizado"  href="login.html" class="btn btn-outline-info">  <a href="login.html"><i class="fa-solid fa-house"></i></a> </button>
            </div>
            !-->
            <div class="col-md-12">
                <h2 class="text-center"> Registre-se </h2> 
            <form action="usuarioController.php?acao=inserirUsuario" method="post" >
                <input name="nome" class="form-control mb-2" type="text" placeholder="Digite seu nome completo">
                <input name="email" class="form-control mb-2" type="email" placeholder="Digite seu email">
                <input name="senha" class="form-control mb-2" type="password" placeholder="Digite sua senha">
                <input id="senhaconfirma"s class="form-control mb-2" type="password" placeholder="Digite novamente sua senha">
               <!-- <input name="cpf" class="form-control mb-2" type="text" placeholder="Digite seu CPF">
               !-->
                <input type="submit" value="Enviar" class="btn btn-block"> </input>
                </div>
            </form>

            </div>
        </div>
        <div class="row">
            <div class="text-danger">
               <p>Atenção, não utilize EMAILS ou SENHAS válidas ou de uso recorrente.</p>
               <p>Esse site está hospedado em um servidor GRATUITO</p>
               <p>Dessa forma, ele é público e todos os dados são expostos aos usúarios</p> 
            </div>
        </div>
<!-- Fim Div de Cadastro -->
    </div>
    </div>
    </div>

<!-- Script personalizado, fontawesome e jquery do bootstrap -->
    <script src="javascript/login_cadastre.js">
    </script>
    <script src="https://kit.fontawesome.com/ccd0f1f5c6.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>