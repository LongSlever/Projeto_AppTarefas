<?php session_start();
  // Definindo proteção para as páginas
  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
    header('Location: index.php?login=erro');
  }
  

  ?>