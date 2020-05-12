<?php
include_once 'Turkey.php';

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/12
 * Time: 23:14
 */
class TurkeyAdapter implements Duck {
    private $_turkey;

    public function __construct(Turkey $turkey)
    {
        $this->_turkey = $turkey;
    }

    public function quack()
    {
        // TODO: Implement quack() method.
        $this->_turkey->gobble();
    }

    public function fly()
    {
        // TODO: Implement fly() method.
        for ($i = 0; $i < 5; $i++) {
            $this->_turkey->fly();
        }
    }
}