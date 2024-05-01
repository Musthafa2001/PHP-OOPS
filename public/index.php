<?php

require_once '../transaction.php';


$transaction= new Transaction(100,'hello wolrd');

$transaction->addTax(8);
$transaction->discount(10);
var_dump($transaction->amount);