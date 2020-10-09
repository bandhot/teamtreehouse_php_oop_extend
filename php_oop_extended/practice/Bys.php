<?php

include 'Montor.php';

class Listrik extends Montor  //Child Class
{
    public function tesproperti()
    {
        echo $this->merk;
        echo PHP_EOL.$this->Kecepatan;
    }
}
$menu= new Listrik("Biru");
$menu->KecepatanWarna();
echo $menu->Kecepatan;  //Global Class
$menu->tesproperti();