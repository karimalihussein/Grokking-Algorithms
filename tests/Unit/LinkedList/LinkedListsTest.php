<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\LinkedLists\Box;
use App\LinkedLists\LinkedList;


class LinkedListsTest extends TestCase
{


    /** @test */

    public function it_can_create_a_linked_list()
    {
        $linkedList = new LinkedList();

        $this->assertInstanceOf(LinkedList::class, $linkedList);
    }

    /** @test */

    public function it_can_add_a_node_to_the_linked_list()
    {
        $linkedList = new LinkedList();

        $linkedList->add(new Box('red'));

        $this->assertInstanceOf(Box::class, $linkedList->getHead());
    }

    /** @test */
    

    
   

}