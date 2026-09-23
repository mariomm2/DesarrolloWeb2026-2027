<?php

$productos = [
 ["nombre" => "Camiseta", "precio" => 15.99, "stock" => 10],
 ["nombre" => "Pantalón", "precio" => 35.5, "stock" => 0],
 ["nombre" => "Zapatos", "precio" => 55.0, "stock" => 5],
 ["nombre" => "Gorra", "precio" => 12.0, "stock" => 20],
];


function productStock0($productos){
    foreach($productos as $product){
        if($product["stock"] === 0){
            echo $product["nombre"] . "<br>";
        }
    }
}

echo productStock0($productos);

function totalInventory($productos){
    $result = 0;
    foreach($productos as $product){
        $result += $product["stock"] * $product["precio"];
    }
    return 'Total del stock' ." ". $result;
}

echo totalInventory($productos);

function orderPrice($productos){
    usort($productos, function($a,$b){
        return $b["precio"] - $a["precio"];
    });
    foreach($productos as $product){
        echo $product["nombre"] . " " . $product["precio"] . "<br>";
    }
}

echo orderPrice($productos);
   