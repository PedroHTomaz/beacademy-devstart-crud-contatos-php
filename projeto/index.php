<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - PHP</title>
</head>
<body>
    <main>
        <div>
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
        </div>
    </main>
</body>
</html>