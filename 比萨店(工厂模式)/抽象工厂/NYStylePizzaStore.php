<?php
include_once 'PizzaStore.php';
include_once 'NYStyleCheesePizza.php';
include_once 'NYStyleClamPizza.php';
include_once 'NYPizzaIngredientFactory.php';

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
        $ingredientFactory = new NYPizzaIngredientFactory();

        if ($type == 'cheese') {
            $this->setPizza(new NYStyleCheesePizza($ingredientFactory));
        } elseif ($type == 'clam') {
            $this->setPizza(new NYStyleClamPizza($ingredientFactory));
        }
        return $this->getPizza();
    }
}