<?php
   require_once('utilidade.php'); 
  
   function logar($login,$password)
   {
      $sql ="SELECT * FROM ws_user WHERE login ='$login' AND senha =md5('$password') LIMIT 1";
      $res = mysql_execute($sql);
      
      return json_encode($res);
   }
   function findAll($table)
   {
     $sql ="SELECT * FROM $table";
     $res = mysql_execute($sql);
      
     return json_encode($res);
   }
   function findWhere($table,$condition)
   {   
     $sql ="SELECT * FROM $table WHERE $condition";
     $res = mysql_execute($sql);
     
     return json_encode($res);
   }
   function create($nome,$email,$login,$senha)
   {
     //TRUE FAZ UPDATE
     if(mysql_execute("SELECT * FROM ws_user WHERE nome=$nome AND email=$email AND login=$login") == "Nenhum registro")
     {
        $sql="INSERT INTO ws_user(nome,email,login,senha)VALUES('$nome','$email','$login',md5('$senha'))";
        $res = mysql_execute($sql);
      
          if($res == NULL)
          {
          $sql ="SELECT * FROM ws_user ORDER BY   create_at DESC LIMIT 1";
          $res = mysql_execute($sql);
          
          return json_encode($res);
          }else{
            echo "Erro ".var_dump($res);
          } 
        
      }else{
        $sql ="UPDATE ws_user SET nome=$nome, email=$email,senha=$senha";
        $res = mysql_execute($sql);
        return json_encode($res);
      } 
   }

   function delete($table,$condition)
   {
      $sql = "DELETE FROM $table WHERE $condition";
      $res = mysql_execute($sql);

     if($res)
     {
      $sql ="SELECT $ FROM $table ORDER BY DESC LIMIT 1";
      $res = mysql_execute($sql);
      
      return var_dump($res);
     }
     echo "Erro";
     
   }
 
?>