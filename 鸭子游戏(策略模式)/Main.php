<?php
include 'RedheadDuck.php';
include 'MallardDuck.php';
include 'RubberDuck.php';
include 'DecoyDuck.php';

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/4/27
 * Time: 0:28
 */
(new RedheadDuck())->display();
(new RedheadDuck())->performCry();
(new RedheadDuck())->performFly();


(new MallardDuck())->display();
(new MallardDuck())->performCry();
(new MallardDuck())->performFly();


(new RubberDuck())->display();
(new RubberDuck())->performCry();
(new RubberDuck())->performFly();


(new DecoyDuck())->display();
(new DecoyDuck())->performCry();
(new DecoyDuck())->performFly();
