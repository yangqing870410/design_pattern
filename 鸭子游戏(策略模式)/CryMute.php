<?php
include_once 'CryBehaviour.php';

/**
 * 呱呱叫
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/4/26
 * Time: 23:31
 */
class CryMute implements CryBehaviour {
    /**
     * 叫行为
     * @return mixed
     */
    public function cry()
    {
        // TODO: Implement quack() method.
        // 什么事情都不做，不会叫
        echo '什么事情都不做，不会叫' . PHP_EOL;
    }
}