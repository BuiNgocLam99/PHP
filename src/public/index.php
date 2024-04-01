<?php

require_once '../Transaction.php';

// Classes & Objects
$transaction = (new Transaction(15, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(15)
    ->getAmount();

var_dump($transaction);
