<?php
/**
 * 披萨店抽象类
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/4
 * Time: 10:36
 */
abstract class PizzaStore {
    private $_pizza = null;

    /**
     * @return null
     */
    public function getPizza()
    {
        return $this->_pizza;
    }

    /**
     * @param null $pizza
     */
    public function setPizza($pizza)
    {
        $this->_pizza = $pizza;
    }

    /**
     * 下单处理
     * @param string $type
     */
    public function orderPizza($type) {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
    }

    /**
     * 创建披萨
     * @param $type
     * @return object
     */
    abstract protected function createPizza($type);
}