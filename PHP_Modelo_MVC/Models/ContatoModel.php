<?php

namespace Models;

class ContatoModel
{
    public function palavra($palavra)
    {
        if ($palavra === '') {
            return 'VAZIO';
        } else {
            return "Você digitou: $palavra";
        }
    }
}


