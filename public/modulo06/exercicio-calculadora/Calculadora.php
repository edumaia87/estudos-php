<?php

class Calculadora
{
    private $num = 0;

    public function add($add)
    {
        return $this->num += $add;
    }

    public function sub($sub)
    {
        return $this->num -= $sub;
    }

    public function multiply($mult)
    {
        return $this->num *= $mult;
    }

    public function divide($div)
    {
        return $this->num /= $div;
    }

    public function total()
    {
        return $this->num;
    }

    public function clear()
    {
        $this->num = 0;
    }
}
