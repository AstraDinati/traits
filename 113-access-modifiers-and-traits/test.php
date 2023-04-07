<?php
trait TestTrait
{
    private function method()
    {
        return '!!!';
    }
}

class Test
{
    use TestTrait;
    public function
    __construct()
    {
        echo $this->method();
    }
}

// new Test;


trait Trait1
{
    static function method()
    {
        return '!!!';
    }
}

echo Trait1::method();