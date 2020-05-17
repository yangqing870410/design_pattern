<?php
include_once 'Dough.php';

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/17
 * Time: 20:02
 */
interface PizzaIngredientFactory {
    public function createDough();
    public function createSauce();
    public function createCheese();
    public function createVeggies();
    public function createPepperoni();
    public function createClam();
}