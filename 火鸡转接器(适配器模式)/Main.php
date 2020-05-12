<?php
include_once 'MallardDuck.php';
include_once 'WildTurkey.php';
include_once 'TurkeyAdapter.php';

$duck = new MallardDuck();
$duck->quack();
$duck->fly();

$turkey = new WildTurkey();
$turkeyAdapter = new TurkeyAdapter($turkey);
$turkeyAdapter->quack();
$turkeyAdapter->fly();