<?php

namespace BackOfficeBundle\lib;

class Test {
    private $_libelle;
    private $_value;
    private $_nb;

    public function __construct()
    {
        $this->_libelle = "Libelle de defaut";
        $this->_value = "valeur par defaut";
        $this->_nb = 0;
    }

    public function getLibelle() {
        return $this->_libelle;
    }

    public function getValue() {
        return $this->_value;
    }

    public function getNb() {
        return $this->_nb;
    }

    public function setLibelle($l) {
        $this->_libelle = $l;
    }

    public function setValue($v) {
        $this->_value = $v;
    }

    public function setNb($n) {
        $this->_nb = $n;
    }
}