<?php

class Technician {
    
    public function __construct(private array $surbordonates = []) {
    }

    public function getSuperior(): ?Technician
    {
        return $this->superior;
    }
    
    public function setSuperior(?Technician $superior): Technician
    {
        $this->superior = $superior;
        return $this;
    }
        
    public function setRadiusX(int $radiusX): self
    {
        $this->radiusX = $radiusX;

        return $this;
    }
}