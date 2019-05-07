<?php
    //variavel que identifica se a autenticação foi realizada
    $usuario_autenticado = false;

    //usuários do sistema
    $usuarios_app = array(
        array('login' => 'admin@gmail.com', 'senha' => '123456'),
        array('senha' => 'carlos@gmail.com', 'senha' => '1234')
    ); 

    foreach ($usuarios_app as $user) {
        if($user['login'] == $_POST['login'] && $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado) {
        echo 'Usuario autenticado';
    } else {
        header('Location: index.php?login=erro');
    }