<?php
    require_once(__DIR__.'/../util/function.php');
    $login = $_REQUEST['login'];
    $senha =$_REQUEST['senha'];

    return Logar($login,$senha); 
    //validar php controller/Logar.php
  
?>