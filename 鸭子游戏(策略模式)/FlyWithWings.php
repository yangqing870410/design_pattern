<?php
include_once 'FlyBehaviour.php';

/**
 * 飞行类
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/4/26
 * Time: 23:27
 */
class FlyWithWings implements FlyBehaviour {
    /**
     * 飞行为
     * @return mixed
     */
    public function fly()
    {
        // TODO: Implement fly() method.
        // 实现鸭子的飞行
        echo '实现鸭子的飞行' . PHP_EOL;
    }
}
