<?php
    session_start();
    // variável Token
    $token_usuario = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = array(1 => 'Administrativo', 2 => 'Usuário');

    // Usuarios do Sistema
    $usuarios_app = [
        // Perfil_id com valor == '1' é administrador, valor == '2' usuário comum

        ['id' => 1, 'email' => 'admin@admin.com', 'senha' => '1234', 'perfil_id' => 1],
        ['id' => 2, 'email' => 'joao@gmail.com', 'senha' => 'joao', 'perfil_id' => 2],
        ['id' => 3, 'email' => 'jose@gmail.com', 'senha' => 'jose', 'perfil_id' => 2],
        ['id' => 4, 'email' => 'maria@gmail.com', 'senha' => 'maria', 'perfil_id' => 2]
    ];
    // Laço para percorrer sobre os arrays e validar as informações  pelo $token_usuario
    foreach ($usuarios_app as $cadastros) {
        if ($cadastros['email'] == $_POST['email'] && $cadastros['senha'] == $_POST['senha']) {
            $token_usuario = true;
            $usuario_id = $cadastros['id'];
            $usuario_perfil_id = $cadastros['perfil_id'];
        }
    }

    if ($token_usuario) { 
        echo 'Passou';
        $_SESSION['Autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');

    }
    else {
        $_SESSION['Autenticado'] = 'NAO';
         header('Location: index.php?login=erro');
    }

?>