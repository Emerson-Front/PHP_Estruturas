<?php

namespace Controllers;

class ContatoController extends Controller
{
    public function __construct()
    {
        $this->view = new \Views\MainView('contato');
        $this->model = new \Models\ContatoModel;
    }

    public function executar()
    {
        $this->view->render(['titulo' => 'Página Contato']);
        
        if (isset($_POST['palavra'])) {
            $mensagem = $this->model->palavra($_POST['palavra']);
            echo "<script>alert('$mensagem')</script>";
        }
    }
}


