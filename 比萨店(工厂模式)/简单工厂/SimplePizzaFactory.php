<?php
include_once 'CheesePizza.php';
include_once 'VeggiePizza.php';
include_once 'PepperoniPizza.php';
include_once 'ClamPizza.php';

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/4
 * Time: 10:39
 */
class SimplePizzaFactory {
    private $_pizza = null;

    /**
     * 创建披萨
     * @param $type
     * @return object
     */
    public function createPizza($type) {
        if ($type == 'cheese') {
            $this->_pizza = new CheesePizza();
        } elseif ($type == 'pepperoni') {
            $this->_pizza = new PepperoniPizza();
        } elseif ($type == 'clam') {
            $this->_pizza = new ClamPizza();
        } elseif ($type == 'veggie') {
            $this->_pizza = new VeggiePizza();
        }
        return $this->_pizza;
    }
}