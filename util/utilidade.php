<?php
   require_once(__DIR__.'/../dao/connection.php');

   function mysql_execute($sql)
   {
      $con = $con= conecta_DB();
      $data = mysqli_query($con,$sql);
      if(!$data) 
      {
         $res='Nenhum registro';
      }else{
         $res = mysqli_fetch_all($data,MYSQLI_ASSOC);  
      }
      
      return $res; 
   }
   
?>