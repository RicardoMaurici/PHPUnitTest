<?php
namespace math;
/**
 * User: ricardo
 */

class PHPadder {

    private $a;
    private $b;
    private $c;
    private $sum;

    public function add()
    {
        $this->sum = $this->a + $this->b + $this->c;
    }

    public function getSum()
    {
        return $this->sum;
    }

    public function setA($a)
    {
        $this->a = $a;
    }

    public function setB($b)
    {
        $this->b = $b;
    }
    public function setC($c)
    {
        $this->c = $c;
    }
}