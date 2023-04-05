<?php

class Vehicule {

    public function __construct(private array $technicians = []) {
    }

    public function addTechnician(Technician $technician) :  bool  {

        if(!in_array($technician, $this->technicians, true)) {
            $this->technicians[] = $technician;
            return true;
        }
        return false;
    }

    public function removeTechnician(Technician $technician) : bool {

        $key = array_search($technician, $this->technicians, true);
        if($key !== false) {
            unset($this->technicians[$key]);
            return true;
        }
        return false;
    }

    public function setTechnicians(array $technicians) : self {

       foreach($technicians as $technician) {
           $this->addTechnician($technician);
         }
        return $this;
    }

    public function getTechnicians() : array {

        return $this->technicians;
    }
}