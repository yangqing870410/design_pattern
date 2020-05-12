<?php
include_once 'NYStylePizzaStore.php';
include_once 'ChicagoStylePizzaStore.php';

$nystore = new NYStylePizzaStore();
$chicagostore = new ChicagoStylePizzaStore();

$nystore->orderPizza('cheese');
$chicagostore->orderPizza('cheese');

