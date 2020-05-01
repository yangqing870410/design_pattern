<?php
/**
 * 饮料基类
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/1
 * Time: 8:14
 */
abstract class Beverage {
    private $_description = '';

    /**
     * @return string
     */
    protected function getDescription()
    {
        return $this->_description;
    }

    /**
     * @param string $description
     */
    protected function setDescription($description)
    {
        $this->_description = $description;
    }

    abstract public function cost();
}
