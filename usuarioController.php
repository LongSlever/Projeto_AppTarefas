<?php
    session_start();
    require "perfil.model.php";
    require "conexao.php";
    require "perfilService.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if($acao == 'inserirUsuario' ) {
   $usuario = new Usuario();
    
   $usuario->__set('nome', $_POST['nome'])->__set('email', $_POST['email'])->__set('senha', $_POST['senha']);
   $conexao = new Conexao();
   $usuarioService = new perfilService($conexao, $usuario);
   $usuarioService->inserir();

   header('Location: index.php?inclusao=1');
   // 
}
    if($acao == 'login') {
    if(!empty($_POST['email']) && !empty($_POST['senha'])) {
    $usuario = new Usuario();
    $usuario->__set('email', $_POST['email'])->__set('senha', $_POST['senha']);
    $conexao = new Conexao();
    $usuarioService = new perfilService($conexao, $usuario);
    $usuarioService->procurarCadastro();
    $verificacao = $usuarioService->procurarCadastro();
    foreach($verificacao as $usuarios) {
    if($usuarios->email == $usuario->__get('email') && $usuarios->senha == $usuario->__get('senha')) {
        $usuario_autentificado = true;
    }
    }

    if($usuario_autentificado) {
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuarios->id;
        print_r($_SESSION);
        header('Location: nova_tarefa.php');
    }else {
        $_SESSION['autenticado'] = 'NAO';
        session_destroy();
        header('Location: index.php?login=erro');
    }
        

    }else {
        header('Location: index.php?login=erro'); 
    }
}
?>