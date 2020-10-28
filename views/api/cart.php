<?php

$array = array(
    array(
        "name" => "CAMISA DE VESTIR",
        "Sku" => "128804",
        "Qty" => 2,
        "Amount" => 7.9500,
        "catalog" => "0101" 
    ),
    array(
        "name" => "PANTALON DE VESTIR",
        "Sku" => "106140",
        "Qty" => 1,
        "Amount" => 30.0000,
        "Discount" => 0,
        "catalog" => "010102" 
    ),
    array(
        "name" => "CORBATA COLOR NEGRO",
        "Sku" => "83727",
        "Qty" => 1,
        "Amount" => 19.9500,
        "Discount" => 0,
        "catalog" => "0401" 
    ),
    array(
        "name" => "BLUSA DE FLORES",
        "Sku" => "62991",
        "Qty" => 1,
        "Amount" => 34.9500,
        "Discount" => 0,
        "catalog" => "0202" 
    ),
    array(
        "name" => "JEANS PARA DAMA",
        "Sku" => "116315",
        "Qty" => 1,
        "Amount" => 32.9500,
        "Discount" => 0,
        "catalog" => "0203" 
    )        
);

//print_r($array);
echo json_encode($array);
?>