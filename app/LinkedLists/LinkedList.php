<?php

namespace App\LinkedLists;

class LinkedList
{
    private $head;

    public function add(Box $box)
    {
        if ($this->head === null) {
            $this->head = $box;
        } else {
            $current = $this->head;
            while ($current->getNext() !== null) {
                $current = $current->getNext();
            }
            $current->setNext($box);
        }
    }

    public function getHead()
    {
        return $this->head;
    }

    public function getTail()
    {
        $current = $this->head;
        while ($current->getNext() !== null) {
            $current = $current->getNext();
        }
        return $current;
    }

    public function remove(Box $box)
    {
        if ($this->head === $box) {
            $this->head = $this->head->getNext();
        } else {
            $current = $this->head;
            while ($current->getNext() !== $box) {
                $current = $current->getNext();
            }
            $current->setNext($box->getNext());
        }
    }

    public function removeTail()
    {
        $current = $this->head;
        while ($current->getNext() !== $this->getTail()) {
            $current = $current->getNext();
        }
        $current->setNext(null);
    }

    public function removeHead()
    {
        $this->head = $this->head->getNext();
    }

    public function removeAll()
    {
        $this->head = null;
    }

    public function getSize()
    {
        $current = $this->head;
        $size = 0;
        while ($current !== null) {
            $size++;
            $current = $current->getNext();
        }
        return $size;
    }

    public function get($index)
    {
        $current = $this->head;
        $i = 0;
        while ($i < $index) {
            $current = $current->getNext();
            $i++;
        }
        return $current;
    }

    public function contains(Box $box)
    {
        $current = $this->head;
        while ($current !== null) {
            if ($current === $box) {
                return true;
            }
            $current = $current->getNext();
        }
        return false;
    }

    public function getIndex(Box $box)
    {
        $current = $this->head;
        $i = 0;
        while ($current !== null) {
            if ($current === $box) {
                return $i;
            }
            $current = $current->getNext();
            $i++;
        }
        return -1;
    }

    public function getLastIndex(Box $box)
    {
        $current = $this->head;
        $i = 0;
        while ($current !== null) {
            if ($current === $box) {
                $i++;
            }
            $current = $current->getNext();
        }
        return $i;
    }

    public function getLast()
    {
        $current = $this->head;
        while ($current->getNext() !== null) {
            $current = $current->getNext();
        }
        return $current;
    }

    public function getLastButOne()
    {
        $current = $this->head;
        while ($current->getNext()->getNext() !== null) {
            $current = $current->getNext();
        }
        return $current;
    }

    public function getKthFromEnd(int $k)
    {
        $current = $this->head;
        $i = 0;
        while ($i < $k) {
            $current = $current->getNext();
            $i++;
        }
        while ($current->getNext() !== null) {
            $current = $current->getNext();
        }
        return $current;
    }

    public function getMiddle()
    {
        $current = $this->head;
        $i = 0;
        while ($current->getNext() !== null) {
            $current = $current->getNext();
            $i++;
        }
        $i = $i / 2;
        while ($i > 0) {
            $current = $current->getNext();
            $i--;
        }
        return $current;
    }

    public function getNthFromEnd(int $n)
    {
        $current = $this->head;
        $i = 0;
        while ($current->getNext() !== null) {
            $current = $current->getNext();
            $i++;
        }
        $i = $i - $n;
        while ($i > 0) {
            $current = $current->getNext();
            $i--;
        }
        return $current;
    }

    public function getNthFromStart(int $n)
    {
        $current = $this->head;
        $i = 0;
        while ($i < $n) {
            $current = $current->getNext();
            $i++;
        }
        return $current;
    }

    public function getNthFromEndRecursive(int $n)
    {
        return $this->getNthFromEndRecursiveHelper($this->head, $n);
    }

    private function getNthFromEndRecursiveHelper(Box $box, int $n)
    {
        if ($box->getNext() === null) {
            return $box;
        }
        $current = $this->getNthFromEndRecursiveHelper($box->getNext(), $n);
        if ($current->getNext() === null) {
            return $current;
        }
        if ($n === 1) {
            return $box;
        }
        return $current;
    }

    public function getNthFromStartRecursive(int $n)
    {
        return $this->getNthFromStartRecursiveHelper($this->head, $n);
    }

    private function getNthFromStartRecursiveHelper(Box $box, int $n)
    {
        if ($box->getNext() === null) {
            return $box;
        }
        if ($n === 1) {
            return $box;
        }
        return $this->getNthFromStartRecursiveHelper($box->getNext(), $n - 1);
    }
    
   
}