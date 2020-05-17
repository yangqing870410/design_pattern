<?php
include_once 'Pizza.php';
/**
 * 奶酪披萨
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/4
 * Time: 10:44
 */
class NYStyleCheesePizza extends Pizza {
    protected $_ingredientFactory;

    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->_ingredientFactory = $ingredientFactory;
    }

    public function prepare() {
        $this->_dough = $this->_ingredientFactory->createDough();
        $this->_sauce = $this->_ingredientFactory->createSauce();
        $this->_veggies = $this->_ingredientFactory->createVeggies();
        $this->_cheese = $this->_ingredientFactory->createCheese();
        $this->_pepperoni = $this->_ingredientFactory->createPepperoni();
    }
}