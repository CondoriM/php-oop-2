<?php

class Product{
    public $nome;
    public $tipo;
    public $img;
    public $prezzo;
    public $desc;

    function __construct($nome,$tipo,$img,$prezzo,$desc){
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->img = $img;
        $this->prezzo = $prezzo;
        $this->desc = $desc;
    }
}

?>