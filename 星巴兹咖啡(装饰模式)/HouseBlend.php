<?php
include_once "Beverage.php";

/**
 * 综合
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/1
 * Time: 8:16
 */
class HouseBlend extends Beverage {
    /**
     * 获取信息
     * @return string
     */
    public function getDescription()
    {
        $this->setDescription('综合');
        return parent::getDescription(); // TODO: Change the autogenerated stub
    }

    /**
     * 获取价格
     * @return string
     */
    public function cost()
    {
        // TODO: Implement cost() method.
        return 0.89;
    }
}