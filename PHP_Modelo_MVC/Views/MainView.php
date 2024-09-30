<?php


namespace Views;

class MainView
{

    private $filename;
    private $header;
    private $footer;

    const titulo = 'Projeto MVC';

    public function __construct($filename, $header = 'header.php', $footer = 'footer.php')
    {
        $this->filename = $filename;
        $this->header = $header;
        $this->footer = $footer;
    }

    public function render($arr = [])
    {
        include('pages/templates/' . $this->header);
        include('pages/' . $this->filename . '.php');
        include('pages/templates/' . $this->footer);
    }
}


?>