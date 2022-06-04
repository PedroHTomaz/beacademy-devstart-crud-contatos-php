<?php
    $url = explode('?', $_SERVER['REQUEST_URI']);

    include 'telas/menu.php';
    include 'telas/head.php';
    include 'acoes.php';

    match ($url[0]) {
        '/' => home(),
        '/login' => login(),
        '/cadastro' => cadastro(),
        '/listar' => listar(),
        '/relatorio' => relatorio(),
        '/excluir' => excluir(),
        '/editar' => editar(),
        default => pagina404(),
    };

    include 'telas/footer.php';
?>