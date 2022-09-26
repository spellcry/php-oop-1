<?php

class Actor {
    public $name;
    public $lastname;
    public $age;

    public function __construct($name, $lastname, $age) {
        $this->setName($name);
        $this->setLastName($lastname);
        $this->setAge($age);
    }

    /**
     * Get / Set the value of title
     */ 
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
    
    /**
     * Get / Set the value of title
     */ 
    public function getLastName() {
        return $this->lastname;
    }

    public function setLastName($lastname) {
        $this->lastname = $lastname;
    }
    
    /**
     * Get / Set the value of title
     */ 
    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getFullName() {
        return $this->getName() . ' ' . $this->getLastName();
    }
    
}