<?php
include_once 'SimplePizzaFactory.php';

/**
 * 披萨店
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/4
 * Time: 10:36
 */
class PizzaStore {
    /**
     * 下单处理
     * @param string $type
     */
    public function orderPizza($type) {
        $pizza = (new SimplePizzaFactory())->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
    }
}