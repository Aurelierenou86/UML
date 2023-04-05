<?php

class Waiter {
    public function __construct(private array $tables = []) {
    }

    public function addTable(Table $table) {
        if (count($this->tables) >= 4) {
            throw new Exception('A waiter cannot be assigned to more than four tables.');
        }
        if(!in_array($table, $this->tables, true)){
            $this->tables[] = $table;
            return true;
        }
        return false;
        // array_push($this->tables, $table);
    }

    public function removeTable(Table $table) {
        $key = array_search($table, $this->tables);
        if ($key !== false) {
            array_splice($this->tables, $key, 1);
        } else {
            throw new Exception('This table is not assigned to this waiter.');
        }
    }
}
