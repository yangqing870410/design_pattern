<?php
include_once 'DuckAbstract.php';
include_once 'CryMute.php';
include_once 'FlyNoWay.php';

/**
 * 橡皮鸭
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/4/26
 * Time: 23:13
 */
class RubberDuck extends DuckAbstract {
    public function __construct() {
        $this->setCryBehaviour(new CryMute());
        $this->setFlyBehaviour(new FlyNoWay());
    }

    public function display() {
        echo '看起来像橡皮鸭' . PHP_EOL;
    }
}