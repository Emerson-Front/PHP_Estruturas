<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo self::titulo; ?></title>
    <link rel="stylesheet" href="/mvc/Views/pages/css/style.css" type="text/css">
</head>

<body>
    <header>
        <h1>Header!</h1>

        <?php

        $menuItens = ['Home', 'Sobre', 'Contato'];

        foreach ($menuItens as $key => $valor) {
            echo '<a href=/mvc/' . strtolower($valor) . '>' . $valor . '</a>';
        }

        ?>



    </header>