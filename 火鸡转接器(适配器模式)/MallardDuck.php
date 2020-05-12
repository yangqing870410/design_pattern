<?php
include_once 'Duck.php';

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/12
 * Time: 23:07
 */
class MallardDuck implements Duck {
    public function quack()
    {
        // TODO: Implement quack() method.
        echo 'quack' . PHP_EOL;
    }

    public function fly()
    {
        // TODO: Implement fly() method.
        echo 'flying' . PHP_EOL;
    }
}