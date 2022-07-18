<?php

namespace cliente;

class Cadastro extends \cadastro 
{

    public function registrarVenda()
    {
        echo "Venda feita...".$this->getNome();
    }

}