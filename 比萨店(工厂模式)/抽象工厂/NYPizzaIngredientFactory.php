<?php
include_once 'ThinCrustDough.php';
include_once 'MarinaraSauce.php';
include_once 'ReggianoCheese.php';
include_once 'Garlic.php';
include_once 'SlicedPepperoni.php';
include_once 'FreshClams.php';

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/17
 * Time: 20:07
 */
class NYPizzaIngredientFactory implements PizzaIngredientFactory {

    public function createDough() {
        return new ThinCrustDough();
    }

    public function createSauce() {
        return new MarinaraSauce();
    }

    public function createCheese() {
        return new ReggianoCheese();
    }

    public function createVeggies() {
        return new Garlic();
    }

    public function createPepperoni() {
        return new SlicedPepperoni();
    }

    public function createClam() {
        return new FreshClams();
    }
}