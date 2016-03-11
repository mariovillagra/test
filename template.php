<html>
    <head>
        <meta charset="utf-8" />
        <title>Cadastro de Pessoas</title>
        <link rel="stylesheet" href="pessoas.css" type="text/css" />
    </head>
    <body>
        <h1>Cadastro de Pessoas</h1>

        <?php include('formulario.php'); ?>

        <?php if ($exibir_tabela) : ?>
            <?php include('tabela.php'); ?>
        <?php endif; ?>
    </body>
</html>