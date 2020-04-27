<?php
include_once 'FlyBehaviour.php';

/**
 * 飞行类
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/4/26
 * Time: 23:29
 */
class FlyNoWay implements FlyBehaviour {
    /**
     * 飞行为
     * @return mixed
     */
    public function fly()
    {
        // TODO: Implement fly() method.
        // 什么事情都不做，不会飞
        echo '什么事情都不做，不会飞' . PHP_EOL;
    }
}