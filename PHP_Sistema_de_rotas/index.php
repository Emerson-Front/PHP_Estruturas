<?php



function rota()
{

    // Verifica se a URL amigável foi passada via GET
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';

    // Quebra a URL para identificar o controlador e a ação
    $urlSegments = explode('/', $url);

    // Aqui você pode mapear a URL para a view correspondente
    $page = $urlSegments[0]; // 'home' ou 'sobre', etc.

    switch ($page) {

        case 'home':
            echo "Página atual: " . ucfirst($page);
            include 'pages/' . $page . '.php';
            break;

        case 'sobre':
            echo "Página atual: " . ucfirst($page);
            include 'pages/' . $page . '.php';
            break;

        /**
         * Conforme for crescendo o site vai incluindo mais
         * 
         * case 'nome_da_pagina':
         * 
         */


        // Sempre que não existir a página, vai para a página de erro
        default:
            require 'pages/page_erro.php';
    }

}

rota();




?>