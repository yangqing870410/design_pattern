<?php
include_once 'DuckAbstract.php';
include_once 'CrySqueak.php';
include_once 'FlyWithWings.php';

/**
 * 红头鸭
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/4/26
 * Time: 23:13
 */
class RedheadDuck extends DuckAbstract {
    public function __construct() {
        $this->setCryBehaviour(new CrySqueak());
        $this->setFlyBehaviour(new FlyWithWings());
    }

    public function display() {
        echo '看起来像红头鸭' . PHP_EOL;
    }
}