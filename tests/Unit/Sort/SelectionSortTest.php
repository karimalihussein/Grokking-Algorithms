<?php


namespace Tests\Unit\Sort;

use PHPUnit\Framework\TestCase;
use App\SelectionSort\SelectionSort;



class SelectionSortTest extends TestCase
{

    protected $sort;
    public function setUp() : void
    {
       $array = [-1,30, 3, 6, -10 , 0,2,120, 10, 60];
       $this->sort = new SelectionSort($array);
    }

    /**
     * @test
     */
    public function find_smailtest()
    {
        $this->assertEquals(4, $this->sort->findSmaill());
    }

    /**
     * @test
     */
    public function find_biggesttest()
    {
        $this->assertEquals(7, $this->sort->findBiggest());
    }

    /**
     * @test
     */
    public function sort_test()
    {
        $this->assertEquals([-10, -1, 0, 2, 3, 6, 10, 30, 60, 120], $this->sort->sort());
    }


  
    

    
   

}