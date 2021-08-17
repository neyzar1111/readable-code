<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

function orderPizza($pizzaType, $client)
{
    $price = calculatePrice($pizzaType);
    $address = getAddressForClient($client);

    echo 'Creating new order...';
    echo '<br>';
    echo "A {$pizzaType} pizza should be sent to {$client}";
    echo '<br>';
    echo "The address: {$address} <br>";
    echo "The bill is €{$price} <br>";
    echo 'Order finished.<br><br>';
}

function getAddressForClient($client)
{
    switch ($client) {
        case 'koen':
            return 'a yacht in Antwerp';
        case 'manuele':
            return 'somewhere in Belgium';
        case 'students':
            return 'BeCode office';
    }

    return 'unknown';
}

function calculatePrice($pizzaType)
{
    switch ($pizzaType) {
        case 'marguerita':
            return 5;
        case 'golden':
            return 100;
        case 'calzone':
            return 10;
        case 'hawaii':
            throw new Exception('Computer says no');
    }

    throw new Exception('Unknown pizza type');
}

function orderPizzaForAll()
{
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
}

orderPizzaForAll();