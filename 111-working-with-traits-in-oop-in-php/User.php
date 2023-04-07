<?php
require_once 'tHelper.php';
class User 
{
    use Helper;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}