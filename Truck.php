<?php

require_once 'Vehicle.php';

class Truck extends Vehicle {
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private int $storage = 0;
    private int $capacity;
    private int $loading = 0;


    public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
        {
            parent::__construct($color, $nbSeats);
            $this->setEnergy($energy);
            $this->capacity = $capacity;
        }

    public function getEnergy(): string
        {
            return $this->energy;
        }

        public function setEnergy(string $energy): Truck
        {
            if (in_array($energy, self::ALLOWED_ENERGIES)) {
                $this->energy = $energy;
            }
            return $this;
        }

        public function getEnergyLevel(): int
        {
            return $this->energyLevel;
        }

        public function setEnergyLevel(int $energyLevel): void
        {
            if(($energyLevel >= 0) && ($energyLevel <= 100)) {
                $this->energyLevel = $energyLevel;
            }
        }

        public function getStorage(): int
        {
            return $this->Storage;
        }

        public function setStorage(int $storage): void
        {
            if($storage >= 0) {
                $this->storage = $storage;
            }
        }

        public function load(): string
        {
            $sentence = "";

    

            while ($this->storage < $this->capacity) {
                $this->storage++;
                $sentence .= "I'm filling... ";
            }
    
            $sentence .= "I'm full!";
            return $sentence;
        }
    


}
