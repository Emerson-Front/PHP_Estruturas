<?php


// Autoloader manual
spl_autoload_register(function ($class) {
    // Converte o namespace em caminho de arquivo
    $caminho = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

    // Inclui o arquivo se ele existir
    if (file_exists($caminho)) {
        require $caminho;
    } else {
        echo "Arquivo não encontrado: $caminho";
    }
});



use classes\Printar;
use utilidades\Printar as utilidades;
use utilidades\testes\Printar as testes;


$print = new Printar;
echo $print->print();

echo '<hr>';

$print = new utilidades;
$print->print();

echo '<hr>';

$print = new testes;
$print->print();


/*   ------ OU ------*/
echo '<hr><hr><b>OU</b><hr><hr>';

$print = new classes\Printar;
echo $print->print();

echo '<hr>';

$print = new \utilidades\Printar;
$print->print();

echo '<hr>';

$print = new \utilidades\testes\Printar;
$print->print();