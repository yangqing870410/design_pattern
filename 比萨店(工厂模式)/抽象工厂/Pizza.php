<?php
/**
 * 披萨基类
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/4
 * Time: 10:43
 */
abstract class Pizza {
    protected $_dough;
    protected $_sauce;
    protected $_veggies;
    protected $_cheese;
    protected $_pepperoni;
    protected $_clam;

    /**
     * 准备
     */
    abstract public function prepare();

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