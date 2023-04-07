<?php
require_once 'Trait1.php';
require_once 'Trait2.php';
class Test
{
    use Trait2;
    public function
    __construct()
    {
        echo $this->method1();
        echo $this->method2();
        echo $this->method3();
    }
}

$test = new Test();