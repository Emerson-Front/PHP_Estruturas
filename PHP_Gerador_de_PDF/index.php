<?php

require 'vendor/autoload.php';

use Dompdf\Dompdf;

function gerarPDF()
{
    // Instanciar o Dompdf
    $dompdf = new Dompdf();

    // Tentar carregar o conteúdo HTML de um arquivo externo
    $html_arquivo = file_exists('arquivo.html') ? file_get_contents('arquivo.html') : '<h1>Arquivo não encontrado</h1><p>Verifique se o arquivo "arquivo.html" está presente no diretório correto.</p>';

    // Carregar o HTML no Dompdf
    $dompdf->loadHtml($html_arquivo);

    // Definir o tamanho do papel e a orientação (opcional)
    $dompdf->setPaper('A4', 'portrait'); // Tamanho A4, orientação retrato

    // Renderizar o HTML como PDF
    $dompdf->render();

    // Enviar o PDF gerado ao navegador (para download ou visualização)
    $dompdf->stream('meu_documento.pdf', ['Attachment' => 0]); // 'Attachment' => 0 exibe no navegador, 'Attachment' => 1 faz o download
}


gerarPDF();
