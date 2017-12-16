<?php
namespace Application\Transportations;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bus
 *
 * @author melsakka
 */
class Bus extends AbstarctTransportation {

    const MESSAGE = "Take the airport bus from %s to %s Airport. No seat assignment.";

    public function getTripDescription() {

        return sprintf(self::MESSAGE, $this->departure, $this->arrival);
    }

}
