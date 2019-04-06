<?
/*class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo(); //1 х равен 0, потом сразу прибавляется 1, т к преинкремент, в итоге выводится 1
$a2->foo(); //2 из-за того, что х статичен, то его значение осталось в памяти, т е он сейчас равен 1, после преинкремента равен 2, потому выводится 2
$a1->foo(); //3 то же самое х=2 прибавляется 1 и выводится 3
$a2->foo(); //4 то же самое х=3 прибавляется 1 и выводится 4*/

/*class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo(); //1 х равен 0, потом сразу прибавляется 1, т к преинкремент, в итоге выводится 1
$b1->foo(); //1 класс В является дочерним базовому классу А, так что принимает тоже значение
$a1->foo(); //2 из-за того, что х статичен, то его значение осталось в памяти, т е он сейчас равен 1, после преинкремента равен 2, потому выводится 2
$b1->foo(); //2 класс В является дочерним базовому классу А, так что принимает тоже значение*/

/*class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A; скобочек нет, без параметров вроде можно без них обойтись
$b1 = new B;
$a1->foo(); //1
$b1->foo(); //1
$a1->foo(); //2
$b1->foo(); //2*/

class Price
{
    private $EUR;
    private $USD;
    private $RUB;

    function __construct($EUR, $USD, $RUB)
    {
        $this->setEUR($EUR);
        $this->setUSD($USD);
        $this->setRUB($RUB);
    }

    function setEUR($EUR)
    {
        $this->EUR = $EUR;
    }

    function setUSD($USD)
    {
        $this->USD = $USD;
    }

    function setRUB($RUB)
    {
        $this->RUB = $RUB;
    }

    function getEUR()
    {
        return $this->EUR;
    }

    function getUSD()
    {
        return $this->USD;
    }

    function getRUB()
    {
        return $this->RUB;
    }

    function GiveMePrice()
    {
        echo "Цена в евро " . $this->EUR . " , цена в долларах " . $this->USD . " , цена в рублях " . $this->RUB . "<br>";
    }
}

$price1 = new Price(430, 500, 32500);
$price2 = new Price(270, 310, 20000);
$price3 = new Price(330, 380, 24500);
$mas = [$price1, $price2, $price3];
foreach ($mas as $obj) {
    echo "Цена в евро " . $obj->getEUR() . " , цена в долларах " . $obj->getUSD() . " , цена в рублях " . $obj->getRUB() . "<br>";
}

class PriceWithSale extends Price
{
    private $sale;

    function __construct($EUR, $USD, $RUB, $sale)
    {
        parent::__construct($EUR, $USD, $RUB);
        $this->sale = $sale;
    }

    function GiveMePriceWithSale()
    {
        echo "скидка " . $this->sale . "%";
    }
}

$pws1 = new PriceWithSale(670, 770, 50000, 10);

$pws1->GiveMePrice();
$pws1->GiveMePriceWithSale();



