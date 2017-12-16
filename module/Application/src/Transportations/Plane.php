<?php

namespace Application\Transportations;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Plane
 *
 * @author melsakka
 */
class Plane extends AbstarctTransportation {

    public $flightNumber;
    public $gateNumber;
    public $seatNumber;
    public $ticketCounter;

    const MESSAGE = "From %s Airport, take flight %s to %s. Gate %s, seat %s."
            . " Baggage drop at ticket counter %s.";

    public function __construct($departure, $arrival, $flightNumber, $gateNumber, $seatNumber, $ticketNumber) {
        parent::__construct($departure, $arrival);
        $this->flightNumber = $flightNumber;
        $this->gateNumber = $gateNumber;
        $this->seatNumber = $seatNumber;
        $this->ticketCounter = $ticketNumber;
    }

    public function getTripDescription() {

        return sprintf(self::MESSAGE, $this->departure, $this->flightNumber, $this->arrival, $this->gateNumber, $this->seatNumber, $this->ticketCounter);
    }

}
