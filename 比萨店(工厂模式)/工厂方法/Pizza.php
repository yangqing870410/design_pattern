<?php
/**
 * 披萨基类
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/4
 * Time: 10:43
 */
abstract class Pizza {
    /**
     * 准备
     */
    public function prepare() {
        echo 'prepare' . PHP_EOL;
    }

    /**
     * 烘烤
     */
    public function bake() {
        echo 'bake' . PHP_EOL;
    }

    /**
     * 切片
     */
    public function cut() {
        echo 'cut' . PHP_EOL;
    }

    /**
     * 装盒
     */
    public function box() {
        echo 'box' . PHP_EOL;
    }
}