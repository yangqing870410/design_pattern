<?php
include_once 'DisplayElement.php';

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/4/27
 * Time: 22:38
 */
class ForecastDisplay implements SplObserver, DisplayElement {
    private $_subject;

    public function update (SplSubject $subject)
    {
        // TODO: Implement update() method.
        $this->_subject = $subject;
        $this->display();
    }

    public function display()
    {
        // TODO: Implement display() method.
        echo "temperature:{$this->_subject->getTemperature()},humidity:{$this->_subject->getHumidity()},pressure:{$this->_subject->getPressure()}" . PHP_EOL;
    }
}