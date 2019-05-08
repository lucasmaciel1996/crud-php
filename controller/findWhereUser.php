<?php
   require_once(__DIR__.'/../util/function.php');
   //$nome = $_REQUEST['nome'];
   //$ativo= $_REQUEST['ativo'];
    $nome ='';
    $ativo=1;
   echo (findWhere('ws_user',"nome LIKE '%$nome%' AND ativo=$ativo"));

   //valida php controller/findWhereUser.php

?>