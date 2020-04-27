<?php
/**
 * 鸭子抽象类
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/4/26
 * Time: 23:07
 */
abstract class DuckAbstract {
    // 叫行为
    private $_cryBehaviour;
    // 飞行为
    private $_flyBehaviour;

    public function display() {

    }

    public function performCry() {
        $this->_cryBehaviour->cry();
    }

    public function performFly() {
        $this->_flyBehaviour->fly();
    }

    public function setCryBehaviour(CryBehaviour $_cryBehaviour) {
        $this->_cryBehaviour = $_cryBehaviour;
    }

    public function setFlyBehaviour(FlyBehaviour $_flyBehaviour) {
        $this->_flyBehaviour = $_flyBehaviour;
    }

}