<?php
include_once 'WeatherData.php';
include_once 'CurrentConditionsDisplay.php';
include_once 'ForecastDisplay.php';
include_once 'StatisticsDisplay.php';

/**
 * 气象站
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/4/27
 * Time: 22:56
 */
$weatherData = new WeatherData();
$weatherData->attach(new CurrentConditionsDisplay());
$weatherData->attach(new ForecastDisplay());
$weatherData->attach(new StatisticsDisplay());

$weatherData->setMeasurements(80, 56, 29);
$weatherData->setMeasurements(82, 70, 30);
$weatherData->setMeasurements(78, 90, 28);
