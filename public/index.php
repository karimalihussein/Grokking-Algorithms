<?php

declare(strict_types = 1);

require_once __DIR__ . '/../vendor/autoload.php';


use App\BinarySearch;


$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$needle = 7;

$binarySearch = new BinarySearch($array, $needle);
echo $binarySearch->search();






