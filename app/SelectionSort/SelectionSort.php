<?php

namespace App\SelectionSort;


class SelectionSort
{
    public $array;

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    /**
     * @return int
     * @throws \Exception
     */
    public function findSmaill(): int
    {
        // [30, 3, 6, 0,2, 10]
        $smallest = $this->array[0];
        $smallestIndex = 0;
        for ($i = 1; $i < count($this->array); $i++) {
            if ($this->array[$i] < $smallest) {
                echo $i;
                $smallest = $this->array[$i];
                $smallestIndex = $i;
               
            }
            
        }

        return $smallestIndex;
    }
    
    /**
     * @return array
     * @throws \Exception
     */
    public function sort() : array
    {
        $newArr = [];
        for ($i = 0, $length = count($this->array); $i < $length; $i++) {
            $smallest = $this->simpleFindSmaill();
            array_push($newArr, array_splice($this->array, $smallest, 1)[0]);
        }
        return $newArr;
        
    }

    public function simpleFindSmaill() : int 
    {
        $min = $this->array[0];
        $minIndex = 0;
        for($i = 1; $i < count($this->array); $i++) {
            // echo $this->array[$i]. ">". $min . "<br>";
            if($this->array[$i] < $min) {
                $min = $this->array[$i];
                $minIndex = $i;
            }

        }
        return $minIndex;
    }

    public function findBiggest() : int 
    {
        $min = $this->array[0];
        $maximumIndex = 0;
        for($i = 1; $i < count($this->array); $i++) {
            if($this->array[$i] > $min) {
                $min = $this->array[$i];
                $maximumIndex = $i;
            }

        }
        return $maximumIndex;
    }





    // public function sort(): array
    // {
    //     $sortedArray = [];

    //     for ($i = 0; $i < count($this->array); $i++) {
    //         $smallestIndex = $this->findSmaill();
    //         $sortedArray[] = $this->array[$smallestIndex];
    //         unset($this->array[$smallestIndex]);
    //     }

    //     return $sortedArray;
    // }
     
}