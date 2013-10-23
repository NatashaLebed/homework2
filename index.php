<?php
interface FoldInterface
{
    public function doFold();
}

interface ProtectColdInterface
{
    public function ProtectCold();
}

interface ReversibleHandleInterface
{
    public function ReversibleHandle();
}

abstract class AbstractPerambulator
{
    public $brand;
    public $weight;
    public $numWheels;

    abstract public function PriceTitle();

    public function Create($brand, $weight, $numWheels)
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

class SummerPerambulator extends AbstractPerambulator
{
    public function __construct($brand, $weight, $numWheels)
    {
        $this->Create($brand, $weight, $numWheels);
    }
    public function PriceTitle()
    {
        echo ("SummerPeramb - $this->brand, $this->weight, $this->numWheels");
    }

}

class TransformerPerambulator extends AbstractPerambulator
{
    public function __construct($brand, $weight, $numWheels)
    {
        $this->Create($brand, $weight, $numWheels);
    }
    public function PriceTitle()
    {
        echo ("Transformer - $this->brand, $this->weight, $this->numWheels");
    }

}

$MySummer = new SummerPerambulator('Chikko','7','3');
$MySummer->PriceTitle();
$MyTransformer = new TransformerPerambulator('GoodBaby','15','4');
$MySummer->PriceTitle();
?>