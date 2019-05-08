$( document ).ready(function() {
     var users = [];
     var url="http://0.0.0.0:8000";

     geraLista(url+'/controller/findAllUser.php');
     

     $('#search').click(function(){
        ativo = $('select').val();
        nome = ' ';
        geraLista(url+'/controller/findWhereUser.php');

    });


    function geraLista(url)
    {
    //limpa tabela
    $('#lista').empty();
        $.getJSON(url,function(dados){
            //console.log(dados);
            users= dados;
            users.forEach(function(val,idx){
                //console.log(idx,val);
                var html = '<tr>'+
                            "<th scope='row'>"+val.id_user+"</th>"+
                            "<td>"+val.nome+"</td>"+
                            "<td>"+val.email+"</td>"+
                            "<td>"+val.login+"</td>"+ 
                            "<td>"+val.senha+"</td>"+
                            "<td>"+val.ativo+"</td>"+
                            '<td><a href="#" class="badge badge-info">Editar</a>  <a a href="#" class="badge badge-danger">Excluir</a> </td> '+
                        "</tr>";
            $('#lista').append(html);
            });//fim Forearh 
        });//fim getJSON
    }
});