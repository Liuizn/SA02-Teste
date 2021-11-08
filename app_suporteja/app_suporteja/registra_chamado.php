<?php 
    session_start();

// aqui trata as informações
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);
    
    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;
// aqui abre 
    $arquivo = fopen('../../private_appSuporte/arquivo.hd', 'a');
// aqui escreve
    fwrite($arquivo, $texto);
// aqui fecha
    fclose($arquivo);

    header('Location: abrir_chamado.php');
?>