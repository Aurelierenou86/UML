<?php

class Technician {

    private string $name;
    private ?Vehicule $vehicule = null;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function setVehicule(?Vehicule $vehicule) : Technician {

        if($this->vehicule !== null) {
            $this->vehicule->delTechnician($this);
        }

        // Pour automatiser la mise à jour des liens bidirectionnels: 
        // Si le technicien est déjà lié à un véhicule, on le délie
        if($vehicule !== null) {
            $vehicule->addTechnician($this);
        }

        $this->vehicule = $vehicule;
        return $this;
    }

    public function getVehicle() : ?Vehicule {
        return $this->vehicle;
    }
}