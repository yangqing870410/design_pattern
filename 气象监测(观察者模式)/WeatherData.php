<?php
include_once 'Subject.php';

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/4/27
 * Time: 22:32
 */
class WeatherData extends Subject {
    private $_temperature; // 温度
    private $_humidity; // 湿度
    private $_pressure; // 压力

    public function measurementsChanged() {
        $this->notify();
    }

    public function setMeasurements($temperature, $humidity, $pressure) {
        $this->setTemperature($temperature);
        $this->setHumidity($humidity);
        $this->setPressure($pressure);
        $this->measurementsChanged();
    }

    /**
     * @return mixed
     */
    public function getTemperature()
    {
        return $this->_temperature;
    }

    /**
     * @return mixed
     */
    public function getHumidity()
    {
        return $this->_humidity;
    }

    /**
     * @return mixed
     */
    public function getPressure()
    {
        return $this->_pressure;
    }

    /**
     * @param mixed $temperature
     */
    private function setTemperature($temperature)
    {
        $this->_temperature = $temperature;
    }

    /**
     * @param mixed $humidity
     */
    private function setHumidity($humidity)
    {
        $this->_humidity = $humidity;
    }

    /**
     * @param mixed $pressure
     */
    private function setPressure($pressure)
    {
        $this->_pressure = $pressure;
    }


}