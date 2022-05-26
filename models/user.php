<?php

class User{
    public $name;
    public $card;
    public $sconto = true;

    public function __construct($name,$card){
        $this->name = $name;
        $this->card = $card;
    }
}
?>