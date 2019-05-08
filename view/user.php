<?php 
  require_once("template.php");
?>
    <body>
    <div class="container">
        <form>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input  class="form-control" id="nome" name="nome" placeholder="Digite um nome">
            </div>
            <div class="form-group">
            <select class="custom-select" id="ativo">
                <option value="0">Ativo</option>
                <option value="1">Inativo</option>
             </select>
            </div>
                 <button type="submit" class="btn btn-info" id="search">Buscar</button>  <button type="button" class="btn btn-success">Novo</button>
            </form>
            <br>
            <table class="table table-striped" id="lista">
            <thead>

            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>nome</td>
                    <td>email</td>
                    <td>login</td>
                    <td>senha </td>
                    <td>0</td>
                    <td><a href="" class="badge badge-info">Editar</a>  <a a href="" class="badge badge-danger">Excluir</a> </td>  
               </tr>
            </tbody>    
            </table>
            <br>
     <div>
             
    </body>
<html>
