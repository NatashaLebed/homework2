<?php

require_once 'AbstractPerambulator.php';
require_once 'FoldInterface.php';


class SummerPerambulator extends AbstractPerambulator implements FoldInterface
{
    public function __construct($brand, $weight, $numWheels)
    {
        $this->SetValue($brand, $weight, $numWheels);
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

?>