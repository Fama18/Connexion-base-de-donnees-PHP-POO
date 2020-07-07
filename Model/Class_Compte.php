<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class Compte {
    private $numagence;
    private $cleRib;
    private $NumCompte;

    public function ___construct(array $data) {
        $this->hydrate($data);
    }
        public function hydrate(array $data){
            foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);

            if(method_exists($this, $method)){
                $this->$method($value);
            }
         }
     }

     //getteurs
    public function getnumagence() {
        return $this->numagence;
    }
    public function getCleRib() {
        return $this->cleRib;
    }
    public function getNumCompte() {
        return $this->NumCompte;
    }

    //setteurs
    public function setNumAgence($numagence) {
        $this->numagence = $numagence;
    }
    public function setCleRib($cleRib) {
        $this->cleRib = $cleRib;
    }
    public function setNumCompte($NumCompte) {
        $this->NumCompte = $NumCompte;
    }
}