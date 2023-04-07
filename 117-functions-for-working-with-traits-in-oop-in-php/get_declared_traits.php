<?php 
trait Trait1
{
    private function method1()
    {
        return '1';
    }
    private function method2()
    {
        return '2';
    }
}
echo '<pre>';
print_r(get_declared_classes());
echo '</pre>';