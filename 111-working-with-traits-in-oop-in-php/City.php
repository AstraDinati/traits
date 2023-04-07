<?php
require_once 'tHelper.php';
class City 
{
    use Helper;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

$London = new City('London', 2000);

echo $London->getName();