<?php

require_once 'AbstractPerambulator.php';
require_once 'FoldInterface.php';
require_once 'ProtectColdInterface.php';
require_once 'ReversibleHandleInterface.php';


/*Класс Трансформер_коляска наследует все методы абстрактного класса Коляска*/
/*Реализует метод Текст_для_прайса*/

/*Имеет дополнительную фичу Складывание, Защита_от_Холода, Перекидная_ручка (интерфейсы)*/

class TransformerPerambulator extends AbstractPerambulator implements
    \FoldInterface,
    \ProtectColdInterface,
    \ReversibleHandleInterface
{
    public function __construct($brand, $weight, $numWheels)
    {
        $this->SetValue($brand, $weight, $numWheels);
    }

    public function priceTitle()
    {
        return ("Transformer - $this->brand, $this->weight, $this->numWheels");
    }

    public function fold()
    {
        public $operations = 5;
        return "Тип сложения - книжка. Сложилась за $operations действий ";
    }

    public function protectCold()
    {
        return 'Чехол - есть, Плотная ткань - есть';
    }

    public function reversibleHandle()
    {
        return 'Можно перекинуть ручку';
    }


}
