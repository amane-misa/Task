<?php
mb_internal_encoding("UTF-8");

class MyCalculator
{
    private $x;
    private $y;
    private $result = 0;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function __toString(): string
    {
        return (string)$this->result;
    }

    public function add(): self
    {
        return $this->result = $this->x + $this->y;
    }

    public function subtract(): self
    {
        return $this->result = $this->x - $this->y;
    }

    public function multiply(): self
    {
        return $this->result = $this->x * $this->y;
    }

    public function divide(): self
    {
        return $this->result = $this->x / $this->y;
    }

    public function addBy(int $value): self
    {
        return $this->result += $this->$value;
    }

    public function subtractBy(int $value): self
    {
        return $this->result -= $this->$value;
    }

    public function multiplyBy(int $value): self
    {
        return $this->result *= $this->$value;
    }

    public function divadeBy(int $value): self
    {
        return $this->result /= $this->$value;
    }

    public function main()
    {
        return $this->result;
    }
}

$mycalc = new MyCalculator(12, 6);
echo $mycalc->add()->main() . "\n";
echo $mycalc->multiply()->main() . "\n";
echo $mycalc->subtract()->main() . "\n";
echo $mycalc->divide()->main() . "\n";
echo $mycalc->add()->divadeBy(9)->main() . "\n";
