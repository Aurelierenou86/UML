<?php

class Waiter {

    public function __construct(private array $tables = []) {
        $this->setTables($tables);
    }
    
    public function addTable(Table $table) : bool {

        if(!in_array($table, $this->tables, true)) {
            // Ajout d'un vehicule au technicien
            $this->tables[] = $table;
            // Ajout du technicien au vehicule
            $table->addWaiter($this);
            return true;
        }
        return false;
    }

    public function removeTable(Table $table) : bool {

        $key = array_search($table, $this->tables, true);
        if($key !== false) {
            // Suppression du vehicule du technicien
            unset($this->tables[$key]);
            // Suppression du technicien du vehicule
            $table->removeWaiter($this);
            return true;
        }
        return false;
    }
    
    public function setTables(array $tables) : self {

        // mise a jour des items de la collection avant qu'elle ne soit écrasée par la nouvelle collection
        foreach($this->tables as $table) {
            $table->removeWaiter($this);
        }

        // Vider la collection en cours pour la remplacer par la nouvelle collection
        $this->tables = [];

        // écrase la collection en cours avec la nouvelle collection
        foreach($tables as $table) {
            $this->addTable($table);
        }
        return $this;
    }
        
    public function getTables() : array {

        return $this->tables;
    }
}