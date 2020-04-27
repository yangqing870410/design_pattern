<?php
/**
 * 主题类
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/4/27
 * Time: 22:26
 */
class Subject implements SplSubject {
    private $_observers = [];

    public function attach(SplObserver $observer)
    {
        // TODO: Implement registerObserver() method.
        $this->_observers[] = $observer;
    }

    public function detach (SplObserver $observer)
    {
        // TODO: Implement removeObserver() method.
        if ($key = array_search($observer, $this->_observers)) {
            unset($this->_observers[$key]);
        }
    }

    public function notify()
    {
        // TODO: Implement notifyObservers() method.
        foreach ($this->_observers as $obj) {
            $obj->update($this);
        }
    }
}