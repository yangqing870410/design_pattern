<?php
include_once 'PizzaStore.php';
include_once 'ChicagoStyleCheesePizza.php';
include_once 'ChicagoStyleVeggiePizza.php';
include_once 'ChicagoStylePepperoniPizza.php';
include_once 'ChicagoStyleClamPizza.php';

/**
 * 芝加哥披萨店
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/4
 * Time: 10:36
 */
class ChicagoStylePizzaStore extends PizzaStore {
    /**
     * 创建披萨
     * @param $type
     * @return object
     */
    protected function createPizza($type) {
        if ($type == 'cheese') {
            $this->setPizza(new ChicagoStyleCheesePizza());
        } elseif ($type == 'pepperoni') {
            $this->setPizza(new ChicagoStylePepperoniPizza());
        } elseif ($type == 'clam') {
            $this->setPizza(new ChicagoStyleClamPizza());
        } elseif ($type == 'veggie') {
            $this->setPizza(new ChicagoStyleVeggiePizza());
        }
        return $this->getPizza();
    }
}