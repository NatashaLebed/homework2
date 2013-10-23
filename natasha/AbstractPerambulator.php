<?php

abstract class AbstractPerambulator
{
    public $brand;
    public $weight;
    public $numWheels;

    abstract public function PriceTitle();

    public function SetValue($brand, $weight, $numWheels)
    {
        $this->brand = $brand;
        $this->weight = $weight;
        $this->numWheels = $numWheels;
    }

    public function Go()
    {
        return 'Go!';
    }

    public function Stop()
    {
        return 'Stop!';
    }

}
?>