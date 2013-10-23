<?php

interface FoldInterface
{
    public  function Fold();
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

class SummerPerambulator extends AbstractPerambulator implements FoldInterface
{
    public function __construct($brand, $weight, $numWheels)
    {
        $this->Create($brand, $weight, $numWheels);
    }

    public function PriceTitle()
    {
        echo ("SummerPeramb - $this->brand, $this->weight, $this->numWheels");
    }

    public function Fold()
    {
       $operations = 3;
        echo "Тип сложения - трость. Сложилась за $operations действия ";
    }




}

class TransformerPerambulator extends AbstractPerambulator implements FoldInterface, ProtectColdInterface, ReversibleHandleInterface
{
    public function __construct($brand, $weight, $numWheels)
    {
        $this->Create($brand, $weight, $numWheels);
    }

    public function PriceTitle()
    {
        echo ("Transformer - $this->brand, $this->weight, $this->numWheels");
    }

    public function Fold()
    {
        $operations = 5;
        echo "Тип сложения - книжка. Сложилась за $operations действий ";
    }

    public function ProtectCold()
    {
        echo 'Чехол - есть, Плотная ткань - есть';
    }

    public function ReversibleHandle()
    {
        echo 'Можно перкинуть ручку';
    }


}

$MySummer = new SummerPerambulator('Chikko','7','3');
echo '<br>';
$MySummer->PriceTitle();
echo '<br>';
$MySummer->Fold();
echo '<br>';
$MyTransformer = new TransformerPerambulator('GoodBaby','15','4');
echo '<br>';
$MyTransformer->PriceTitle();
echo '<br>';
$MyTransformer->Fold();
?>