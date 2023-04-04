<?php

class Vehicule {

    private string $registerNumber;
    
    /**
     * @var array Les technicians
     */
    private array $technicians = [];

    public function __construct(string $registerNumber) {
        $this->registerNumber = $registerNumber;
    }
    
    /**
     * Add a technician
     */
    public function addTechnician(Technician $technician): Vehicule
    {
        array_push($this->technicians, $technician);
        return $this;
    }

    /**
     * Delete a technician
     */
    public function deleteTechnician(Technician $technician): Vehicule
    {
        $key = array_search($technician, $this->technicians);
        unset($this->technicians[$key]);
        return $this;
    }

    public function getTechnicians(Technician $technician) : array {
        return $this->technicians;
    }
    
}