<?php

declare(strict_types = 1);

require_once __DIR__ . '/../vendor/autoload.php';


use App\SelectionSort\SelectionSort;

$array = [-1,30, 3, 6, -10 , 0,2,120, 10, 60];
// echo $array[2];die;
$sort = new SelectionSort($array);
 var_dump($sort->sort());
// echo $array[$sort->findBiggest()];
// echo $array[$sort->findBiggest()];
// var_dump($sort->findSmaill());

// var_dump($sort->sort());


//  var_dump($sort->sort());










