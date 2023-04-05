<?php

class Table {
    
    public function __construct(private array $waiters = []) {
    }

    public function addWaiter(Waiter $waiter) :  bool  {

        if(!in_array($waiter, $this->waiters, true)) {
            $this->waiters[] = $waiter;
            return true;
        }
        return false;
    }

    public function removeWaiter(Waiter $waiter) : bool {

        $key = array_search($waiter, $this->waiters, true);
        if($key !== false) {
            unset($this->waiters[$key]);
            return true;
        }
        return false;
    }

    public function setWaiters(array $waiters) : self {

       foreach($waiters as $waiter) {
           $this->addWaiter($waiter);
         }
        return $this;
    }

    public function getWaiters() : array {

        return $this->waiters;
    }
}