<?php

namespace App;


class BinarySearch
{
    protected int $needle;
    protected array $array;

    public function __construct(array $array, int $needle)
    {
        $this->array = $array;
        $this->needle = $needle;
    }


    public function search(): int
    {
        $low = 0;
        $high = count($this->array) - 1;
      
        while ($low <= $high) {
          $middle = floor(($low + $high) / 2);
          
      
          if ($this->array[$middle] == $this->needle) {
            return $middle;
          }
      
          if ($this->array[$middle] > $this->needle) {
            $high = $middle - 1;
          } else {
            $low = $middle + 1;
          }
        }
      
        return null;
    }

   
} 
