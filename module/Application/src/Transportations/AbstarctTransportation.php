<?php
namespace Application\Transportations;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AbstarctTransportation
 *
 * @author melsakka
 */
class AbstarctTransportation implements ITransportation{

    public $departure;
    public $arrival;
    
    public function __construct($departure, $arrival) {
        $this->departure=$departure;
        $this->arrival=$arrival;
    }
    public function getTripDescription() {
        
    }

}
