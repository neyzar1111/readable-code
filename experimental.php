<?php
$prices = [
    'marguerita' => 5,
    'calzone' => 10 ,
    'golden' => 100,
];
function prepareOrder($pizzaName,$receiver,$prices){
    $toPrint = " A $pizzaName";
    $address = getReceiversAddress($receiver);
    $cost = calculateCosts($pizzaName, $prices);


    echo 'Creating new order... <br>';
    $toPrint .= ' pizza should be sent to ' . $receiver . ". <br>The address: {$address}.";
    echo $toPrint;
    echo '<br>';
    echo 'The bill is €' . $cost . '.<br>';
    echo "Order finished.<br><br>";
}



function getReceiversAddress ($receiver)
{
    switch ($receiver) {
        case 'koen':
            return 'a yacht in Antwerp';
        case 'manuele':
            return 'somewhere in Belgium';
        case 'students':
            return 'BeCode office';
    }
    return 'unknown';
}

function calculateCosts($pizzaType, $prices)
{

    switch ($pizzaType) {
        case 'marguerita';
            return $prices["marguerita"];
        case 'golden';
            return $prices['golden'];
        case 'calzone';
            return $prices['calzone'];
        case 'hawaii';
            throw new Exception('Computer says no');
    }
    return 'unknown';
}

function makeOrder($prices){
    prepareOrder('calzone', 'koen', $prices);
    prepareOrder('marguerita', 'manuele',$prices);
    prepareOrder('golden', 'students',$prices);
}
makeOrder($prices);