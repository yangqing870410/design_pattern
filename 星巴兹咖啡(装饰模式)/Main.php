<?php
include_once "DarkRoast.php";
include_once "Decaf.php";
include_once "Espresso.php";
include_once "HouseBlend.php";

include_once "Milk.php";
include_once "Mocha.php";
include_once "Soy.php";
include_once "Whip.php";

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/1
 * Time: 8:12
 */
$beverage1 = new Espresso();
$beverage1 = new Mocha($beverage1);
$beverage1 = new Mocha($beverage1);
echo 'desc:' . $beverage1->getDescription() . ',cost:' . $beverage1->cost() . PHP_EOL;

$beverage2 = new Decaf();
$beverage2= new Milk($beverage2);
$beverage2 = new Soy($beverage2);
echo 'desc:' . $beverage2->getDescription() . ',cost:' . $beverage2->cost() . PHP_EOL;


$beverage3 = new Espresso();
$beverage3 = new Whip($beverage3);
$beverage3 = new Soy($beverage3);
echo 'desc:' . $beverage3->getDescription() . ',cost:' . $beverage3->cost() . PHP_EOL;

$beverage4 = new HouseBlend();
$beverage4 = new Milk($beverage4);
$beverage4 = new Soy($beverage4);
echo 'desc:' . $beverage4->getDescription() . ',cost:' . $beverage4->cost() . PHP_EOL;