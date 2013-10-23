<?php

/*Абстрактный класс Коляска с общим для всех весом, брендом, количеством колес. Все коляски умеют ехать и останавливаться. */
/* Имеет абстрактный метод Текст_для_прайса , для разных колясок дописывается разный префикс*/

namespace natasha;

abstract class AbstractPerambulator
{
    public $brand;
    public $weight;
    public $numberWheels;

    abstract public function priceTitle();

    /*================Set Values==================*/

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function setNumberWheels($numberWheels)
    {
        $this->numberWheels = $numberWheels;
    }

    /*================Get Values===================*/

    public function getBrand()
    {
        return $this->brand;
    }

    public function getWeight()
    {
       return $this->weight;
    }

    public function getNumberWheels()
    {
        return $this->numberWheels;
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
