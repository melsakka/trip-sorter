<?php

namespace Application\Transportations;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Train
 *
 * @author melsakka
 */
class Train extends AbstarctTransportation {

    public $trainNumber;
    public $seatNumber;

    const MESSAGE = "Take train %s from %s to %s. Sit in seat %s.";

    public function __construct($departure, $arrival, $trainNumber, $seatNumber) {
        parent::__construct($departure, $arrival);
        $this->trainNumber = $trainNumber;
        $this->seatNumber = $seatNumber;
    }

    public function getTripDescription() {

        return sprintf(self::MESSAGE, $this->trainNumber, $this->departure, $this->arrival, $this->seatNumber);
    }

}
