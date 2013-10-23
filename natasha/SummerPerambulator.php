<?php

namespace natasha;

/*Класс Летняя_коляска наследует все методы абстрактного класса Коляска*/
/*Реализует метод Текст_для_прайса*/

/*Имеет дополнительную фичу Складывание(интерфейс)*/


class SummerPerambulator extends AbstractPerambulator implements FoldInterface
{
    public function __construct($brand, $weight, $numberWheels)
    {
        $this->setBrand($brand);
        $this->setWeight($weight);
        $this->setNumberWheels($numberWheels);
    }

    public function priceTitle()
    {
        return ("SummerPeramb - {$this->getBrand()}, {$this->getWeight()}, {$this->getNumberWheels()}");
    }

    public function fold()
    {
        return 'Тип сложения - трость.';
    }

}
