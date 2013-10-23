<?php
abstract class AbstractPerambulator
{
    public $brand;
    public $weight;
    public $numWheels;


    public function Create($brand, $weight, $numWheels)
    {
        $this->brand = $brand;
        $this->weight = $weight;
        $this->numWheels = $numWheels;

    }

    abstract public function PriceTitle();

    public function Go()
    {
       return 'Go!';
    }

    public function Stop()
    {
        return 'Stop!';
    }
}

class SummerPerambulator extends AbstractPerambulator
{
    public function __construct($brand, $weight, $numWheels)
    {
        $this->Create($brand, $weight, $numWheels);
    }
    function PriceTitle()
    {
        return ("SummerPeramb - $this->brand, $this->weight, $this->numWheels");
    }
}

$My = new SummerPerambulator('Chikko','10','3');
$My->PriceTitle();
?>