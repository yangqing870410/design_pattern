<?php
include_once 'DuckAbstract.php';
include_once 'CryQuack.php';
include_once 'FlyNoWay.php';

/**
 * 诱饵鸭
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/4/26
 * Time: 23:13
 */
class DecoyDuck extends DuckAbstract {
    public function __construct() {
        $this->setCryBehaviour(new CryQuack());
        $this->setFlyBehaviour(new FlyNoWay());
    }

    public function display() {
        echo '看起来像诱饵鸭' . PHP_EOL;
    }
}