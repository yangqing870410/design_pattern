<?php
include_once 'DuckAbstract.php';
include_once 'CryQuack.php';
include_once 'FlyWithWings.php';

/**
 * 绿头鸭
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/4/26
 * Time: 23:12
 */
class MallardDuck extends DuckAbstract {
    public function __construct() {
        $this->setCryBehaviour(new CryQuack());
        $this->setFlyBehaviour(new FlyWithWings());
    }

    public function display() {
        echo '看起来像绿头鸭' . PHP_EOL;
    }
}