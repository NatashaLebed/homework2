<?php

namespace natasha;

/*Класс Трансформер_коляска наследует все методы абстрактного класса Коляска*/
/*Реализует метод Текст_для_прайса*/

/*Имеет дополнительную фичу Складывание, Защита_от_Холода, Перекидная_ручка (интерфейсы)*/

class TransformerPerambulator extends AbstractPerambulator implements FoldInterface, ProtectColdInterface, ReversibleHandleInterface
{
    public function __construct($brand, $weight, $numberWheels)
    {
        $this->setBrand($brand);
        $this->setWeight($weight);
        $this->setNumberWheels($numberWheels);
    }


    public function priceTitle()
    {
        return ("Transformer - {$this->getBrand()}, {$this->getWeight()}, {$this->getNumberWheels()}");
    }

    public function fold()
    {
       return 'Тип сложения - книжка';
    }

    public function protectCold()
    {
        return 'Чехол - есть, Плотная ткань - есть';
    }

    public function reversibleHandle()
    {
        return 'Можно перкинуть ручку';
    }


}
