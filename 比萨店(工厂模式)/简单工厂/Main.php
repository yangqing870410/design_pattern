<?php
include_once 'PizzaStore.php';

$store = new PizzaStore();
$store->orderPizza('cheese');

$store->orderPizza('clam');