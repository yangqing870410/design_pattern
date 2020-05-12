<?php
include_once 'PizzaStore.php';
include_once 'NYStyleCheesePizza.php';
include_once 'NYStyleVeggiePizza.php';
include_once 'NYStylePepperoniPizza.php';
include_once 'NYStyleClamPizza.php';

/**
 * 纽约披萨店
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/4
 * Time: 10:36
 */
class NYStylePizzaStore extends PizzaStore {
    /**
     * 创建披萨
     * @param $type
     * @return object
     */
    protected function createPizza($type) {
        if ($type == 'cheese') {
            $this->setPizza(new NYStyleCheesePizza());
        } elseif ($type == 'pepperoni') {
            $this->setPizza(new NYStylePepperoniPizza());
        } elseif ($type == 'clam') {
            $this->setPizza(new NYStyleClamPizza());
        } elseif ($type == 'veggie') {
            $this->setPizza(new NYStyleVeggiePizza());
        }
        return $this->getPizza();
    }
}