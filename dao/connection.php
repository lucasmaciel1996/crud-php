<?php

  function conecta_DB()
  {
    $user='root';
    $password='Qu@d2018';
    $database='crud_php';
    $host='172.17.0.3';

    $conexao = mysqli_connect($host,$user,$password,$database);
    if(!$conexao)
    {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }      
    
    return $conexao;
  
  }
?>