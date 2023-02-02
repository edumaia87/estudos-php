<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Factories\EntityFactory;

$entityFactory = new EntityFactory('Payment');

$payment = $entityFactory->create((object) [
    'installments' => 12,
    'amount'       => 123.22
]);

echo '<pre>';
var_dump($payment);
