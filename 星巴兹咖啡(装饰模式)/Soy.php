<?php
include_once "CondimentDecorator.php";

/**
 * 豆浆类
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/1
 * Time: 8:37
 */
class Soy extends CondimentDecorator {
    /**
     * 获取信息
     * @return string
     */
    public function getDescription()
    {
        return $this->_beverage->getDescription() . ',豆浆';
    }

    /**
     * 获取价格
     * @return float
     */
    public function cost()
    {
        return $this->_beverage->cost() + 0.1;
    }
}