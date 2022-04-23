<?php

namespace App\TSP\Algorithms;

use App\TSP\WeightedEdge;

interface AlgorithmInterface
{
    /**
     * @param WeightedEdge[] $edges
     * @param int $size
     * @param int $order
     *
     * @return WeightedEdge[]|null
     */
    public function getTour(array $edges, $size, $order);

    /**
     * @return string
     */
    public function getName();
}