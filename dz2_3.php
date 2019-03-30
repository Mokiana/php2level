<?php

/*
 1. Создать структуру классов ведения товарной номенклатуры.
а) Есть абстрактный товар.
б) Есть цифровой товар, штучный физический товар и товар на вес.
в) У каждого есть метод подсчета финальной стоимости.
г) У цифрового товара стоимость постоянная – дешевле штучного товара в два раза. У штучного товара обычная стоимость, у весового – в зависимости от продаваемого количества в килограммах. У всех формируется в конечном итоге доход с продаж.
д) Что можно вынести в абстрактный класс, наследование?
 */

abstract class Good
{
    private $name;
    private $count;

    public function __construct($name, $count)
    {
        $this->setName($name);
        $this->setName($count);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getCount()
    {
        return $this->count;
    }

    public function setCount($count)
    {
        $this->count = $count;
    }

    abstract function sumPrice();

    function getInfo()
    {
        $info = "Наименование: " . $this->name . "<br>" . "Количество: " . $this->count;
        return $info;
    }
}

class PriceDigitalGood extends Good
{
    private $price;

    public function __construct($name, $count, $price)
    {
        parent::__construct($name, $count);
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getInfo()
    {
        $info = parent::getInfo() . "<br>Цена: " . $this->price;
        return $info;
    }

    function sumPrice()
    {
        return "Общая сумма: " . $this->count * $this->price . "руб";
    }
}

$good = new PriceDigitalGood("Весы", 3 . "шт", 2000 . "руб");
echo $good->getInfo() . "<br>";
echo $good->sumPrice() . "<br><br>";

class PricePhysicalGood extends Good
{
    private $price;

    public function __construct($name, $count, $price)
    {
        parent::__construct($name, $count);
              $this->price = $price;
    }

       public function getPrice()
    {
        return $this->price;
    }

    public function getInfo()
    {
        $info = parent::getInfo() . "<br>Цена: " . $this->price;
        return $info;
    }

    function sumPrice()
    {
        return "Общая сумма: " . $this->count * $this->price . "руб";
    }
}

$good = new PriceDigitalGood("Шоколадка", 3 . "шт", 100 . "руб");
echo $good->getInfo() . "<br>";
echo $good->sumPrice() . "<br><br>";

class PriceByWeightGood extends Good
{
    private $price;

    public function __construct($name, $count, $price)
    {
        parent::__construct($name, $count);
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getInfo()
    {
        $info = parent::getInfo() . "<br>Цена: " . $this->price;
        return $info;
    }

    function sumPrice()
    {
        return "Общая сумма: " . $this->count * $this->price . "руб";
    }
}

$good = new PriceDigitalGood("Конфеты", 3 . "кг", 500 . "руб");
echo $good->getInfo() . "<br>";
echo $good->sumPrice() . "<br><br>";
