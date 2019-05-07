<?php
   require_once(__DIR__.'/../util/function.php');
   $nome ='lucas';
   echo (findWhere('ws_user',"nome LIKE'%$nome%'"));

   //valida php controller/findWhereUser.php

?>