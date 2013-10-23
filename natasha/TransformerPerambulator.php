<?php

require_once 'AbstractPerambulator.php';
require_once 'FoldInterface.php';
require_once 'ProtectColdInterface.php';
require_once 'ReversibleHandleInterface.php';

class TransformerPerambulator extends AbstractPerambulator implements FoldInterface, ProtectColdInterface, ReversibleHandleInterface
{
    public function __construct($brand, $weight, $numWheels)
    {
        $this->SetValue($brand, $weight, $numWheels);
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
?>