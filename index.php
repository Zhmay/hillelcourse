<?php

// 1. Создайте класс House. Класс должен реализовывать интерфейс Building и иметь методы для установки номера дома, количества квартир и количества этажей
interface Building
{
    public function setHouseNumber(int $house);
    public function setApartments(int $apart);
    public function setFloors(int $floors);
}

class House implements Building
{
    private $houseNum;
    private $apartNum;
    private $floorsNum;
    public function setHouseNumber(int $house)
    {
        $this->houseNum = $house;
    }
    public function setApartments(int $apart)
    {
        $this->apartNum = $apart;
    }
    public function setFloors(int $floors)
    {
        $this->floorsNum = $floors;
    }
}
$newHouse = new House();
$newHouse->setHouseNumber(7);
$newHouse->setApartments(27);
$newHouse->setFloors(9);

// 2. Создайте классы Cat, Dog, Cow. Классы должны наследоваться от абстрактного класса Animal. Абстрактный класс должен иметь следующие абстрактные методы:
//getName
//say
//feed

abstract class Animal
{
    protected $name;
    public function __construct($name) {
        $this->name = $name;
    }
    abstract public function getName();
    abstract public function say();
    abstract public function feed();
}

class Cat extends Animal {

    public function getName()
    {
       return $this->name;
    }
    public function say()
    {
        echo $this->getName() . ' say - meow';
    }
    public function feed()
    {
        echo $this->getName() . ' like eat - fish';
    }
}

class Dog extends Animal {

    public function getName()
    {
        return $this->name;
    }
    public function say()
    {
        echo $this->getName() . ' say - woof';
    }
    public function feed()
    {
        echo $this->getName() . ' like eat - meat';
    }
}

class Cow extends Animal {

    public function getName()
    {
        return $this->name;
    }
    public function say()
    {
        echo $this->getName() . ' say - moo';
    }
    public function feed()
    {
        echo $this->getName() . ' eat - grass';
    }
}

$cat = new Cat('Sam');
$dog = new Dog('Grey');
$cow = new Cow('Milka');


// 3. Создайте произвольный набор классов с применением Наследования, Инкапсуляции и Полиморфизма
class Car
{
    private $model;
    protected $engine;
    protected $wheels = 4;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function setEngine($engine): void
    {
        $this->engine = $engine;
    }
}

class Truck extends Car
{
    public function __construct($model, $wheels)
    {
        $this->wheels = $wheels;
        parent::__construct($model);
    }
}

$sedan = new Car('sedan');
$sedan->setEngine('gasoline');
$truck = new Truck('truck', 8);
$truck->setEngine('diesel');
// 4. Создайте класс Calculator, который должен выполнять математические операции сложение, вычитание, умножение, деление, возведение в степень и извлечение корня. Операции должны быть реализованы отдельными методами

class Calculator
{
    private $sum;

    public function plus(int $first, int $second)
    {
        $this->sum = $first + $second;
        return $this->sum;
    }

    public function minus(int $first, int $second)
    {
        $this->sum = $first - $second;
        return $this->sum;
    }

    public function multi(int $first, int $second)
    {
        $this->sum = $first * $second;
        return $this->sum;
    }

    public function degree(int $first, int $second)
    {
        $this->sum = $first / $second;
        return $this->sum;
    }

    public function pow(int $first, int $second)
    {
        $this->sum = pow($first, $second);
        return $this->sum;
    }

    public function sqrt(int $number)
    {
        $this->sum = sqrt($number);
        return $this->sum;
    }
}
