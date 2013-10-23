<?php

/*Абстрактный класс Коляска с общим для всех весом, брендом, количеством колес. Все коляски умеют ехать и останавливаться. */
/* Имеет абстрактный метод Текст_для_прайса , для разных колясок дописывается разный префикс*/


abstract class AbstractPerambulator
{
    public $brand;
    public $weight;
    public $numWheels;

    abstract public function priceTitle();

    public function setValue($brand, $weight, $numWheels)
    {
        $this->brand = $brand;
        $this->weight = $weight;
        $this->numWheels = $numWheels;
    }

    public function go()
    {
        return 'Go!';
    }

    public function stop()
    {
        return 'Stop!';
    }

}
