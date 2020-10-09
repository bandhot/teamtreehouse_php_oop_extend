<?php

class cycle
{

    private $color;
    private $speed;

    protected $varian="varian cycle";
    
    public function __construct($color,$speed)
    {
        $this->color=$color;
        $this->speed=$speed;
    }


    public function canRide()
    {
		echo "this cycle can ride this cycle have color {$this->color} and Have speed {$this->speed}2km/hour";
	}
}

class ElectricalCycle extends cycle
{
  public function resourcePower()
   {
       echo "This Cycle Have betteries for power";
   }
}

$mini_scooter = new ElectricalCycle("Red","2");

$mini_scooter->canRide();
$mini_scooter->resourcePower();