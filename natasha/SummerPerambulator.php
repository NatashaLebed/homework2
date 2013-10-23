<?php

require_once 'AbstractPerambulator.php';
require_once 'FoldInterface.php';

/*Класс Летняя_коляска наследует все методы абстрактного класса Коляска*/
/*Реализует метод Текст_для_прайса*/

/*Имеет дополнительную фичу Складывание(интерфейс)*/


class SummerPerambulator extends AbstractPerambulator implements FoldInterface
{
    public function __construct($brand, $weight, $numWheels)
    {
        $this->SetValue($brand, $weight, $numWheels);
    }

    public function PriceTitle()
    {
        return ("SummerPeramb - $this->brand, $this->weight, $this->numWheels");
    }

    public function Fold()
    {
        $operations = 3;
        return "Тип сложения - трость. Сложилась за $operations действия ";
    }

}

?>