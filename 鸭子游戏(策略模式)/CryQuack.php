<?php
include_once 'CryBehaviour.php';

/**
 * 呱呱叫
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/4/26
 * Time: 23:31
 */
class CryQuack implements CryBehaviour {
    /**
     * 叫行为
     * @return mixed
     */
    public function cry()
    {
        // TODO: Implement quack() method.
        // 实现呱呱叫
        echo '实现呱呱叫' . PHP_EOL;
    }
}